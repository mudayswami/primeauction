<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\SetupIntent;

class PaymentController extends Controller
{
    function savecard(){
        $stripeSecretKey = 'sk_test_51PZCCv2KFnGSCktKCxvlYCl4nozRiVDdXZTDyjAP2FUnFNWtTIksgQZZjcJMoWIkukYIyT5VS4RuRfycuLHr12xr005EQVxDOH';
        Stripe::setApiKey($stripeSecretKey);

        // Create a SetupIntent
        $setupIntent = SetupIntent::create([
            'usage' => 'on_session',
            'payment_method_types' => ['card'],
        ]);

        // Pass the client secret to the view
        return view('stripe.checkout', [
            'clientSecret' => $setupIntent->client_secret,
        ]);

    }

    
    function checkout(request $request){
        $stripeSecretKey = 'sk_test_51PZCCv2KFnGSCktKCxvlYCl4nozRiVDdXZTDyjAP2FUnFNWtTIksgQZZjcJMoWIkukYIyT5VS4RuRfycuLHr12xr005EQVxDOH';
        $YOUR_DOMAIN = 'http://localhost/primeauction/public';

        \Stripe\Stripe::setApiKey($stripeSecretKey);
        header('Content-Type: application/json');
        
        
        $checkout_session = \Stripe\Checkout\Session::create([
          'customer_email' => 'customer@example.com',
          'submit_type' => 'pay',
          'billing_address_collection' => 'required',
          'shipping_address_collection' => [
            'allowed_countries' => ['US', 'CA','IN'],
          ],
          'line_items' => [[
                'price_data' => [
                'currency' => 'gbp',
                'product_data' => [
                    'name' => 'Anubhav',
                ],
                'unit_amount' => 100,
                ],
                'quantity' => 1,
            ]],
          'mode' => 'payment',
          'success_url' => $YOUR_DOMAIN . '/success.html',
          'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
        ]);
       return redirect()->away($checkout_session->url); 
        // header("HTTP/1.1 303 See Other");
        // header("Location: " . $checkout_session->url);
            }


        function setup_intent(request $request){
            $user = auth()->user();

            // Retrieve the PaymentMethod ID sent from the frontend
            $paymentMethodId = $request->payment_method_id;
    
            // Attach the PaymentMethod to the Customer
            $user->createOrGetStripeCustomer();
            $user->updateDefaultPaymentMethod($paymentMethodId);
    
            return response()->json(['success' => true, 'message' => 'Payment method added successfully']);
        
        }
}
