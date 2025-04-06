<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Confirmation - 9rato</title>
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
        .purchase-details {
            background-color: #f9f9f9;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
        }
        .purchase-details table {
            width: 100%;
            border-collapse: collapse;
        }
        .purchase-details th {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
            color: #666;
            font-weight: normal;
        }
        .purchase-details td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        .item-row {
            display: flex;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        .item-row:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }
        .item-image {
            width: 80px;
            height: 80px;
            background-color: #eee;
            border-radius: 4px;
            margin-right: 15px;
            overflow: hidden;
        }
        .item-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .item-details {
            flex: 1;
        }
        .item-name {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .item-price {
            color: #005B49;
            font-weight: bold;
        }
        .order-summary {
            margin-top: 20px;
            border-top: 1px solid #eee;
            padding-top: 15px;
        }
        .order-total {
            font-size: 18px;
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
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <img src="https://example.com/9rato-logo-white.png" alt="9rato Logo" style="max-width: 120px;">
        </div>
        <div class="email-body">
            <h1>Purchase Confirmation</h1>
            <p>Hello [User Name],</p>
            <p>Thank you for your purchase on 9rato! Your order has been confirmed and is being processed.</p>

            <div class="purchase-details">
                <h3 style="margin-top: 0; color: #005B49;">Order Summary</h3>

                <div class="item-row">
                    <div class="item-image">
                        <img src="[Item1_Image]" alt="Item 1">
                    </div>
                    <div class="item-details">
                        <div class="item-name">[Item1_Name]</div>
                        <div>Quantity: [Item1_Quantity]</div>
                        <div class="item-price">[Currency][Item1_Price]</div>
                    </div>
                </div>

                <div class="item-row">
                    <div class="item-image">
                        <img src="[Item2_Image]" alt="Item 2">
                    </div>
                    <div class="item-details">
                        <div class="item-name">[Item2_Name]</div>
                        <div>Quantity: [Item2_Quantity]</div>
                        <div class="item-price">[Currency][Item2_Price]</div>
                    </div>
                </div>

                <div class="order-summary">
                    <table>
                        <tr>
                            <th>Subtotal:</th>
                            <td>[Currency][Subtotal]</td>
                        </tr>
                        <tr>
                            <th>Shipping:</th>
                            <td>[Currency][Shipping_Cost]</td>
                        </tr>
                        <tr>
                            <th>Tax:</th>
                            <td>[Currency][Tax]</td>
                        </tr>
                        <tr>
                            <th>Total:</th>
                            <td class="order-total">[Currency][Total]</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p><strong>Order ID:</strong> [Order_ID]</p>
            <p><strong>Date:</strong> [Order_Date]</p>
            <p><strong>Payment Method:</strong> [Payment_Method]</p>
            <p><strong>Shipping Address:</strong><br>
            [User_Name]<br>
            [Street_Address]<br>
            [City], [State] [Zip_Code]<br>
            [Country]</p>

            <p>You will receive another email when your order ships. You can track your order status by clicking the button below.</p>

            <div style="text-align: center;">
                <a href="[Order_Link]" class="view-button">Track Your Order</a>
            </div>

            <div class="help-text">
                <p>If you have any questions about your order or need assistance, please contact our support team at <a href="mailto:support@9rato.com">support@9rato.com</a> or visit our <a href="https://9rato.com/help">Help Center</a>.</p>
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

