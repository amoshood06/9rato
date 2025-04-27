<?php

namespace App\Livewire\User\Wallet;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Deposit extends Component
{
    public $amount;

    public $rules = [
        'amount' => 'required|integer|min:1000'
    ];

    public function messages()
    {
        return [
            'amount.min' => 'The minimum deposit amount is 1000 naira.',
        ];
    }

    public function deposit()
    {
        $data = $this->validate();

        $paymentPayload = [
            'public_key' => "FLWPUBK_TEST-6fd4c2904d47a52d1da8bb20d71068bd-X",
            'tx_ref' => uniqid('9RATO'),
            'amount' => $this->amount,
            'currency' => 'NGN',
            'payment_options' => 'card, ussd',
            'redirect_url' => route('wallet.fund.callback'),
            'meta' => [
                'token' => Auth::id(),
            ],
            'customer' => [
                'name' => Auth::user()->name,
                'email' => Auth::user()->email,
            ],
        ];

        $response = Http::withHeaders([
            'Authorization' => 'Bearer FLWPUBK_TEST-6fd4c2904d47a52d1da8bb20d71068bd-X',
            'Content-Type' => 'application/json',
        ])->post('https://checkout.flutterwave.com/v3/hosted/pay', $paymentPayload);

        $data = $response->json();

        if ($response->successful() && isset($data['data']['link'])) {
            return redirect()->to($data['data']['link']);
        }

        session()->flash('error', 'An error occurred. Please try again.');

    }

    public function render()
    {
        return view('livewire.user.wallet.deposit');
    }
}
