<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bid Confirmation - 9rato</title>
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
        .bid-details {
            background-color: #f9f9f9;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
        }
        .bid-details table {
            width: 100%;
            border-collapse: collapse;
        }
        .bid-details th {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
            color: #666;
            font-weight: normal;
        }
        .bid-details td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        .item-image {
            width: 100%;
            max-width: 300px;
            height: auto;
            border-radius: 4px;
            margin: 15px 0;
        }
        .bid-amount {
            font-size: 24px;
            font-weight: bold;
            color: #005B49;
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
        .countdown {
            background-color: #f0f7f5;
            border-radius: 4px;
            padding: 10px;
            text-align: center;
            margin: 20px 0;
            color: #005B49;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <img src="https://example.com/9rato-logo-white.png" alt="9rato Logo" style="max-width: 120px;">
        </div>
        <div class="email-body">
            <h1>Bid Confirmation</h1>
            <p>Hello [User Name],</p>
            <p>Your bid has been successfully placed. Below are the details of your bid:</p>

            <div style="text-align: center;">
                <img src="[Item_Image]" alt="Item Image" class="item-image">
            </div>

            <div class="bid-details">
                <table>
                    <tr>
                        <th>Item:</th>
                        <td>[Item_Name]</td>
                    </tr>
                    <tr>
                        <th>Seller:</th>
                        <td>[Seller_Name]</td>
                    </tr>
                    <tr>
                        <th>Your Bid:</th>
                        <td class="bid-amount">[Currency][Bid_Amount]</td>
                    </tr>
                    <tr>
                        <th>Bid ID:</th>
                        <td>[Bid_ID]</td>
                    </tr>
                    <tr>
                        <th>Date:</th>
                        <td>[Bid_Date]</td>
                    </tr>
                    <tr>
                        <th>Status:</th>
                        <td><span style="color: #005B49; font-weight: bold;">[Status]</span></td>
                    </tr>
                </table>
            </div>

            <div class="countdown">
                Auction ends in: [Time_Remaining]
            </div>

            <p>You will be notified if you are outbid or if your bid wins the auction. You can increase your bid at any time before the auction ends.</p>

            <div style="text-align: center;">
                <a href="[Bid_Link]" class="view-button">View Auction</a>
            </div>

            <div class="help-text">
                <p>If you did not place this bid or have any questions, please contact our support team immediately at <a href="mailto:support@9rato.com">support@9rato.com</a> or visit our <a href="https://9rato.com/help">Help Center</a>.</p>
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

