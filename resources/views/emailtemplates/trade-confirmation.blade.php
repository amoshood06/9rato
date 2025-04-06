<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trade Confirmation - 9rato</title>
    <style>
        /* Base styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            background-color: #005B49;
            padding: 20px;
            text-align: center;
        }
        .email-header img {
            max-width: 120px;
        }
        .email-body {
            padding: 30px;
        }
        .email-footer {
            background-color: #f5f5f5;
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #666;
        }
        h1 {
            color: #005B49;
            margin-top: 0;
            font-size: 24px;
        }
        p {
            margin-bottom: 16px;
        }
        .trade-details {
            background-color: #f9f9f9;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
        }
        .trade-details table {
            width: 100%;
            border-collapse: collapse;
        }
        .trade-details th {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
            color: #666;
            font-weight: normal;
        }
        .trade-details td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        .view-button {
            display: inline-block;
            background-color: #005B49;
            color: #ffffff !important;
            text-decoration: none;
            padding: 12px 30px;
            border-radius: 4px;
            font-weight: bold;
            margin: 20px 0;
        }
        .social-links {
            margin-top: 20px;
        }
        .social-links a {
            display: inline-block;
            margin: 0 8px;
        }
        .help-text {
            font-size: 14px;
            color: #666;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <img src="https://example.com/9rato-logo-white.png" alt="9rato Logo" style="max-width: 120px;">
        </div>
        <div class="email-body">
            <h1>Trade Confirmation</h1>
            <p>Hello [User Name],</p>
            <p>Your trade has been successfully initiated. Below are the details of your trade:</p>

            <div class="trade-details">
                <table>
                    <tr>
                        <th>Trade ID:</th>
                        <td>[Trade_ID]</td>
                    </tr>
                    <tr>
                        <th>Date:</th>
                        <td>[Trade_Date]</td>
                    </tr>
                    <tr>
                        <th>Trade Type:</th>
                        <td>[Trade_Type]</td>
                    </tr>
                    <tr>
                        <th>Item:</th>
                        <td>[Item_Name]</td>
                    </tr>
                    <tr>
                        <th>Quantity:</th>
                        <td>[Quantity]</td>
                    </tr>
                    <tr>
                        <th>Value:</th>
                        <td>[Currency][Amount]</td>
                    </tr>
                    <tr>
                        <th>Status:</th>
                        <td><span style="color: #005B49; font-weight: bold;">[Status]</span></td>
                    </tr>
                </table>
            </div>

            <p>The other party has been notified of this trade. You will receive updates as the trade progresses.</p>

            <div style="text-align: center;">
                <a href="[Trade_Link]" class="view-button">View Trade Details</a>
            </div>

            <div class="help-text">
                <p>If you did not initiate this trade or have any questions, please contact our support team immediately at <a href="mailto:support@9rato.com">support@9rato.com</a> or visit our <a href="https://9rato.com/help">Help Center</a>.</p>
            </div>
        </div>
        <div class="email-footer">
            <p>&copy; 2025 9rato. All rights reserved.</p>
            <p>9rato Ltd, 123 Business Avenue, Lagos, Nigeria</p>
            <div class="social-links">
                <a href="https://facebook.com/9rato"><img src="https://example.com/facebook-icon.png" alt="Facebook" width="24"></a>
                <a href="https://twitter.com/9rato"><img src="https://example.com/twitter-icon.png" alt="Twitter" width="24"></a>
                <a href="https://instagram.com/9rato"><img src="https://example.com/instagram-icon.png" alt="Instagram" width="24"></a>
            </div>
        </div>
    </div>
</body>
</html>

