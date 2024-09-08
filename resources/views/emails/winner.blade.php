<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congratulations! You've Won</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .email-header {
            background-color: #5b4caf;
            padding: 20px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            text-align: center;
            color: white;
        }

        .email-header h2 {
            margin: 0;
            font-size: 28px;
            color: white;
        }

        .email-body {
            padding: 20px;
        }

        .email-body h1 {
            font-size: 24px;
            color: #333;
        }

        .email-body p {
            font-size: 16px;
            line-height: 1.5;
            color: #666;
        }

        .action-button {
            display: inline-block;
            background-color: #5b4caf;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            margin-top: 20px;
        }

        .action-button:hover {
            background-color: #45a049;
        }

        .email-footer {
            padding: 20px;
            background-color: #5b4caf;
            text-align: center;
            font-size: 12px;
            color: #999;
        }

        .email-footer a {
            color: #4CAF50;
            text-decoration: none;
        }

        .lot-details {
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            margin-top: 20px;
            border-radius: 5px;
        }

        .lot-details img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .lot-details h3 {
            margin: 10px 0;
            font-size: 18px;
            color: #333;
        }

        .lot-details p {
            margin: 5px 0;
        }

        .summary {
            margin-top: 20px;
            padding: 15px;
            background-color: #f2f2f2;
            border-radius: 5px;
        }

        .summary p {
            margin: 5px 0;
            font-weight: bold;
            color: #333;
        }

        .invoice-details {
            margin-top: 20px;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .invoice-details p {
            margin: 5px 0;
            color: #333;
        }

        .invoice-details p strong {
            display: inline-block;
            width: 200px;
        }

        .total-amount {
            margin-top: 15px;
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h2>Congratulations, You’re a Winner!</h2>
        </div>

        <div class="email-body">
            <h1>Hello, {{ $data['name'] }}!</h1>
            <p>We are excited to let you know that you’ve won the auction for the following lot:</p>
            
            <div class="lot-details">
                <img src="{{ $data['lot_image'] }}" alt="Lot Image">
                <h3>{{ $data['lot_title'] }}</h3>
                <p>Auction Ended: <strong>{{ $data['end_time'] }}</strong></p>
                <p>Winning Bid: <strong>£ {{ $data['winning_bid'] }}</strong></p>
            </div>

            <div class="summary">
                <p>Total Amount Due: <strong>£ {{ $data['total_amount_due'] }}</strong></p>
                <p>Please make the payment within the next 48 hours to claim your item.</p>
            </div>

            <!-- Invoice Details Section -->
            <div class="invoice-details">
                <h3>Invoice Details</h3>
                <p><strong>Bidding Amount:</strong>£ {{ $data['winning_bid'] }}</p>
                <p><strong>Buyer's Premium :</strong> {{ $data['buyers_premium'] }}%</p>
                <p><strong>VAT Rate :</strong> {{ $data['vat_rate'] }}%</p>
                <p><strong>Other Taxes :</strong> {{ $data['other_tax'] }}</p>
                <p class="total-amount">Total Amount Due : £ {{ $data['total_amount_due'] }}</p>
            </div>

            <p>Click the button below to view the lot and proceed with payment:</p>

            <a href="{{ url('paynow') }}" class="action-button">Go to Payment</a>
            <p>Thank you for participating in the auction, and congratulations again on your win!</p>
        </div>

        <div class="email-footer">
            <p>Need help? <a href="https://primeauction.co.uk/contact-us">Contact us</a></p>
            <p>&copy; {{ date('Y') }} Primeauction. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
