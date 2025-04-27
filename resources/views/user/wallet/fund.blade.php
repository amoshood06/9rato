
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>9RATO Wallet Funding</title>
    <style>
        body {
        font-size: 14px;
        font-family: "Moderat","Inter",sans-serif;
        font-weight: 400;
        color: #333;
    }

    #start-payment-button {
        cursor: pointer;
        position: relative;
        background-color: #ff9b00;
        color: #12122c;
        max-width: 30%;
        padding: 7.5px 16px;
        font-weight: 500;
        font-size: 14px;
        border-radius: 4px;
        border: none;
        transition: all .1s ease-in;
        vertical-align: middle;
    }
    </style>
</head>
<body>
    <form method="POST" action="https://checkout.flutterwave.com/v3/hosted/pay">
        <input type="hidden" name="public_key" value="{{ env('FLUTTERWAVE_PUBLIC_KEY') }}">
        <input type="hidden" name="tx_ref" value="{{ $data['tx_ref'] }}">
        <input type="hidden" name="amount" value="{{ $data['amount'] }}">
        <input type="hidden" name="currency" value="{{ $data['currency'] }}">
        <input type="hidden" name="customer[email]" value="{{ $data['customer']['email'] }}">
        <input type="hidden" name="customer[name]" value="{{ $data['customer']['name'] }}">
        <input type="hidden" name="meta[source]" value="docs-html-test" />
        {{-- <input type="hidden" name="redirect_url" value="{{ $data['redirect_url'] }}"> --}}

        <button type="submit" id="start-payment-button">Fund Wallet</button>
    </form>
</body>
</html>