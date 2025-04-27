<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class WalletController extends Controller
{
    public function index()
    {
        return view('user.wallet.index');
    }

    public function fundWallet(Request $request)
    {
        $amount = $request->input('amount');
        $user = Auth::user();
        $currency = 'NGN';
        $transactionReference = '9RATO' . uniqid();

        $transaction = Transaction::create([
            'user_id' => $user->id,
            'reference' => $transactionReference,
            'transaction_id' => null,
            'type' => 'deposit',
            'amount' => $amount,
            'fees' => 0,
            'status' => 'pending',
            'currency' => $currency,
            'channel' => 'web',
        ]);
        
        $transaction = Transaction::find($transaction->id);

        try{        
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . env('FLUTTERWAVE_SECRET_KEY'),
                'Content-Type' => 'application/json',
            ])->post('https://api.flutterwave.com/v3/payments', [
                'tx_ref' => $transaction->reference, 
                'amount' => $transaction->amount,
                'currency' => $transaction->currency,
                'redirect_url' => 'http://localhost:8000/fund-wallet-callback',
                'customer' => [
                    'email' => $user->email,
                    'name' => $user->name,
                    'phonenumber' => $user->phone,
                ],
                'customizations' => [
                    'title' => '9RATO Wallet Funding',
                ],
            ]);
        
            if ($response->successful()) {
                $responseData = $response->json();
                
                if (isset($responseData['data']['link'])) {
                    $paymentLink = $responseData['data']['link'];
            
                    return redirect($paymentLink);
                } else {
                    $transaction->status = 'failed';
                    $transaction->save();
                    return back()->with('error', 'An error occurred.');
                }
            } else {
                $errorMessage = $response->json()['message'] ?? 'An error occurred.';
                $transaction->status = 'failed';
                $transaction->save();
                return back()->with('error', $errorMessage);
            }
        }catch (ConnectionException $e) {
            $transaction->status = 'failed';
            $transaction->save();

            Log::error('Flutterwave API request failed: ' . $e->getMessage());

            return back()->with('error', 'Network error occurred. Please try again later.');
        }

    }

    public function fundWalletCallback(Request $request)
    {
        if ($request->has('status') && $request->input('status') === 'completed' && $request->has('tx_ref')) {
            $tx_ref = $request->input('tx_ref');
            $transaction = Transaction::where('reference', $tx_ref)->first();
    
            if (!$transaction) {
                return redirect()->route('user.wallet')->with('error', 'Transaction not found.');
            }

            if ($transaction->status !== 'pending') {
                return redirect()->route('user.wallet')->with('error', 'Transaction has already been processed or is in an invalid state.');
            }
    
            try{
                $response = Http::withToken(env('FLUTTERWAVE_SECRET_KEY'))
                    ->get("https://api.flutterwave.com/v3/transactions/{$request->input('transaction_id')}/verify");
        
                if ($response->successful() && $response->json('status') === 'success') {
                    $transactionData = $response->json('data');

                    $transaction->status = 'completed';
                    $transaction->payment_type = $transactionData['payment_type'];
                    $transaction->transaction_id = $request->input('transaction_id');
                    $transaction->save();
        
                    $user = $transaction->user;
                    $user->balance += $transaction->amount;
                    $user->save();
        
                    return redirect()->route('user.wallet')->with('success', 'Wallet funded successfully!');
                } else {
                    $transaction->status = 'failed'; 
                    $transaction->save();
        
                    return redirect()->route('user.wallet')->with('error', 'Transaction verification failed.');
                }
            }catch(ConnectionException $e){
                return back()->with('error', 'Network error occurred. Please try again later.');
            }
        } else {
            return redirect()->route('user.wallet')->with('error', 'Transaction was not completed or invalid.');
        }
    }

    public function withdraw(Request $request)
    {
        $withdrawAmount = $request->input('withdrawAmount');
        $bankCode = $request->input('bankName');
        $accountNumber = $request->input('accountNumber');
        $accountName = $request->input('accountName') ?? '';

        $transferDetails = [
            'account_bank' => $bankCode,
            'account_number' => $accountNumber,
            'amount' => $withdrawAmount,
            'currency' => 'NGN',
            'reference' => '9RATO'. uniqid(),
            'callback_url' => 'http://localhost:8000/withdraw.callback',
            'narration' => '9RATO Withdrawal request',
        ];

        try {
            $response = Http::withToken(env('FLUTTERWAVE_SECRET_KEY'))
                ->post('https://api.flutterwave.com/v3/transfers', $transferDetails);

            $responseData = $response->json();

            dd($responseData);
            if ($responseData['status'] == 'success') {
                return response()->json(['message' => 'Transfer initiated successfully', 'data' => $responseData]);
            } else {
                return response()->json(['message' => 'Transfer initiation failed', 'error' => $responseData['message']], 400);
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
            return response()->json(['message' => 'Error initiating transfer', 'error' => $e->getMessage()], 500);
        }
        
    }

    public function withdrawCallback(Request $request)
    {
        dd($request);
    }
}
