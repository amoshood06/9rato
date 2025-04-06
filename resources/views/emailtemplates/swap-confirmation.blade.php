<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swap Confirmation - 9rato</title>
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
        .swap-details {
            background-color: #f9f9f9;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
        }
        .swap-item {
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }
        .swap-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }
        .swap-item h3 {
            color: #005B49;
            margin-top: 0;
            font-size: 18px;
        }
        .swap-item-details {
            display: flex;
            flex-wrap: wrap;
        }
        .swap-item-image {
            width: 100px;
            height: 100px;
            background-color: #eee;
            border-radius: 4px;
            margin-right: 15px;
            overflow: hidden;
        }
        .swap-item-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .swap-item-info {
            flex: 1;
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
        .swap-arrow {
            text-align: center;
            margin: 15px 0;
            font-size: 24px;
            color: #005B49;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <img src="https://example.com/9rato-logo-white.png" alt="9rato Logo" style="max-width: 120px;">
        </div>
        <div class="email-body">
            <h1>Swap Confirmation</h1>
            <p>Hello [User Name],</p>
            <p>Your swap request has been successfully initiated. Below are the details of your swap:</p>

            <div class="swap-details">
                <div class="swap-item">
                    <h3>You're Offering:</h3>
                    <div class="swap-item-details">
                        <div class="swap-item-image">
                            <img src="[Your_Item_Image]" alt="Your Item">
                        </div>
                        <div class="swap-item-info">
                            <p><strong>[Your_Item_Name]</strong></p>
                            <p>Condition: [Your_Item_Condition]</p>
                            <p>Estimated Value: [Currency][Your_Item_Value]</p>
                        </div>
                    </div>
                </div>

                <div class="swap-arrow">
                    &#8646;
                </div>

                <div class="swap-item">
                    <h3>You'll Receive:</h3>
                    <div class="swap-item-details">
                        <div class="swap-item-image">
                            <img src="[Their_Item_Image]" alt="Their Item">
                        </div>
                        <div class="swap-item-info">
                            <p><strong>[Their_Item_Name]</strong></p>
                            <p>Condition: [Their_Item_Condition]</p>
                            <p>Estimated Value: [Currency][Their_Item_Value]</p>
                            <p>Owner: [Other_User_Name]</p>
                        </div>
                    </div>
                </div>
            </div>

            <p><strong>Swap ID:</strong> [Swap_ID]</p>
            <p><strong>Date:</strong> [Swap_Date]</p>
            <p><strong>Status:</strong> <span style="color: #005B49; font-weight: bold;">[Status]</span></p>

            <p>The other party has been notified of this swap request. You will receive updates as the swap progresses.</p>

            <div style="text-align: center;">
                <a href="[Swap_Link]" class="view-button">View Swap Details</a>
            </div>

            <div class="help-text">
                <p>If you did not initiate this swap or have any questions, please contact our support team immediately at <a href="mailto:support@9rato.com">support@9rato.com</a> or visit our <a href="https://9rato.com/help">Help Center</a>.</p>
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

