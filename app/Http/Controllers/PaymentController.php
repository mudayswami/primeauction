<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\SetupIntent;
use Auth;
class PaymentController extends Controller
{
    function savecard(){
        $stripeSecretKey = env('STRIPE_SECRET');
        Stripe::setApiKey($stripeSecretKey);
        $user = Auth::user();

        // Create a SetupIntent
        $setupIntent = SetupIntent::create([
            'customer'=>$user->stripe_id,
            'usage' => 'on_session',
            'payment_method_options' => ['card' => ['request_three_d_secure' => 'any']],
        ]);

        // Pass the client secret to the view
        return view('stripe.checkout', [
            'clientSecret' => $setupIntent->client_secret,
        ]);

    }


    function checkout(request $request){
        $stripeSecretKey = env('STRIPE_SECRET');
        $YOUR_DOMAIN = 'http://localhost/primeauction/public';

        \Stripe\Stripe::setApiKey($stripeSecretKey);
        header('Content-Type: application/json');
        
        $user = Auth::user();
        $checkout_session = \Stripe\Checkout\Session::create([
          'customer' => $user->stripe_id,
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
          'payment_method_options' => ['card' => ['request_three_d_secure' => 'any']],
          'mode' => 'payment',
          'success_url' => $YOUR_DOMAIN . '/payment-success',
          'cancel_url' => $YOUR_DOMAIN . '/payment-failed',
        ]);
        
        
        return redirect()->away($checkout_session->url); 
        // header("HTTP/1.1 303 See Other");
        // header("Location: " . $checkout_session->url);
            }


        function setupIntent(request $request){
            $user = auth()->user();

            // Retrieve the PaymentMethod ID sent from the frontend
            $paymentMethodId = $request->payment_method_id;
    
            // Attach the PaymentMethod to the Customer
            $user->createOrGetStripeCustomer();
            $user->updateDefaultPaymentMethod($paymentMethodId);
    
            return response()->json(['success' => true, 'message' => 'Payment method added successfully']);
        
        }

        function paymentSuccess(request $request){
            return view('stripe1.paymentsuccess');
        }
        
        function paymentFailed(request $request){
            return view('stripe1.paymentFailed');
        }
}
