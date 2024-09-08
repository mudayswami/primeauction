<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <style>
        /* General styling for email */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
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
            background-color: #4CAF50;
            padding: 20px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            text-align: center;
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

        .verify-button {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            margin-top: 20px;
        }

        .verify-button:hover {
            background-color: #45a049;
        }

        .email-footer {
            padding: 20px;
            background-color: #f4f4f4;
            text-align: center;
            font-size: 12px;
            color: #999;
        }

        .email-footer a {
            color: #4CAF50;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <img src="{{url('assets/logo-bg.png')}}" alt="Company Logo">
        </div>

        <div class="email-body">
            <h1>Hello, {{ $data['name'] }}!</h1>
            <p>Welcome to PrimeAuction! We are excited to have you on board.</p>
            <p>Please click the button below to verify your email address:</p>
            
            <!-- Call-to-action button -->
            <a href="{{ url('verify').'/'.$data['token'] }}" class="verify-button">Verify Email</a>

            <p>If you did not sign up for this account, you can safely ignore this email.</p>

            <p>Thank you,</p>
            <p>The PrimeAuction Team</p>
        </div>

        <div class="email-footer">
            <p>Need help? <a href="https://primeauction.co.uk/contact-us">Contact us</a></p>
            <p>&copy; {{ date('Y') }} PrimeAuction. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
