<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You've Been Outbid</title>
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
            background-color: #4a368a;
            padding: 20px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            text-align: center;
            color: white;
        }

        .email-header img {
            width: 120px;
            height: auto;
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
            background-color: #4a368a;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            margin-top: 20px;
        }

        .action-button:hover {
            background-color: #c62828;
        }

        .email-footer {
            padding: 20px;
            background-color: #f4f4f4;
            text-align: center;
            font-size: 12px;
            color: #999;
        }

        .email-footer a {
            color: #4a368a;
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
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h2>You’ve Been Outbid!</h2>
        </div>

        <div class="email-body">
            <h1>Hello, {{ $data['name'] }}!</h1>
            <p>Unfortunately, you've been outbid on the following lot:</p>
            
            <div class="lot-details">
                <img src="{{ url($data['lot_image']) }}" alt="Lot Image">
                <h3>{{ $data['lot_title'] }}</h3>
                <p>Current Bid: <strong>{{ $data['current_bid'] }}</strong></p>
            </div>

            <p>If you want to place a higher bid, click the button below to go to the lot and submit a new bid.</p>

            <a href="{{ url('bid').'/'.$data['lot_id'] }}" class="action-button">Go to Lot</a>

            <p>Thank you for participating in the auction, and good luck with your future bids!</p>
        </div>

        <div class="email-footer">
            <p>Need help? <a href="https://primeauction.co.uk/contact-us">Contact us</a></p>
            <p>&copy; {{ date('Y') }} [Your Company]. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
