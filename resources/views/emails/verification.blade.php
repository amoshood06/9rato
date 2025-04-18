<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        .code {
            font-size: 24px;
            font-weight: bold;
            color: #2c7a7b;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Email Verification</h2>
        <p>Hello,</p>
        <p>Your email verification code is:</p>
        <p class="code">{{ $verificationCode }}</p>
        <p>Thank you for registering!</p>
    </div>
</body>
</html>
