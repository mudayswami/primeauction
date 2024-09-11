<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\SetupIntent;
use Auth;
use App\Models\Bids;
class PaymentController extends Controller
{
    function savecard(){
        $stripeSecretKey = env('STRIPE_SECRET');
        Stripe::setApiKey($stripeSecretKey);
        $user = Auth::user();

        $setupIntent = SetupIntent::create([
            'customer'=>$user->stripe_id,
            'usage' => 'on_session',
            'payment_method_options' => ['card' => ['request_three_d_secure' => 'any']],
        ]);

        return view('stripe.checkout', [
            'clientSecret' => $setupIntent->client_secret,
        ]);

    }


    public function checkout($name, $amount){
        $stripeSecretKey = env('STRIPE_SECRET');
        // $stripeSecretKey = 'sk_test_51PZCCv2KFnGSCktKCxvlYCl4nozRiVDdXZTDyjAP2FUnFNWtTIksgQZZjcJMoWIkukYIyT5VS4RuRfycuLHr12xr005EQVxDOH';
        $YOUR_DOMAIN = url('/');

        \Stripe\Stripe::setApiKey($stripeSecretKey);
        header('Content-Type: application/json');
        
        $user = Auth::user();
        $checkout_session = \Stripe\Checkout\Session::create([
          'customer' => $user->stripe_id,
            // 'customer_email'=>session('user_data')['email'],
          'submit_type' => 'pay',
          'billing_address_collection' => 'required',
          'shipping_address_collection' => [
            'allowed_countries' => ['GB','IN'],
          ],
          'line_items' => [[
                'price_data' => [
                'currency' => 'gbp',
                'product_data' => [
                    'name' => $name,
                ],
                'unit_amount' => $amount*100,
                ],
                'quantity' => 1,
            ]],
          'payment_method_options' => ['card' => ['request_three_d_secure' => 'any']],
          'mode' => 'payment',
          'success_url' => $YOUR_DOMAIN . '/payment-success?session_id={CHECKOUT_SESSION_ID}',
          'cancel_url' => $YOUR_DOMAIN . '/payment-failed',
        ]);
        
        
        return redirect()->away($checkout_session->url); 
        // header("HTTP/1.1 303 See Other");
        // header("Location: " . $checkout_session->url);
            }


        // function setupIntent(request $request){
        //     $user = auth()->user();

        //     // Retrieve the PaymentMethod ID sent from the frontend
        //     $paymentMethodId = $request->payment_method_id;
    
        //     // Attach the PaymentMethod to the Customer
        //     $user->createOrGetStripeCustomer();
        //     $user->updateDefaultPaymentMethod($paymentMethodId);
    
        //     return response()->json(['success' => true, 'message' => 'Payment method added successfully']);
        
        // }

        function paymentSuccess(request $request){
            // $stripeSecretKey = env('STRIPE_SECRET');
            // $stripeSecretKey = 'sk_test_51PZCCv2KFnGSCktKCxvlYCl4nozRiVDdXZTDyjAP2FUnFNWtTIksgQZZjcJMoWIkukYIyT5VS4RuRfycuLHr12xr005EQVxDOH';
            // $stripe = new \Stripe\StripeClient($stripeSecretKey);

            // try {
            //     $session = $stripe->checkout->sessions->retrieve($_GET['session_id']);
            //     $customer = $stripe->customers->retrieve($session->customer);
            //     http_response_code(200);
                return view('stripe1.paymentsuccess');
            //   } catch (Error $e) {
            //     http_response_code(500);
            //     echo json_encode(['error' => $e->getMessage()]);
            //     return redirect('payment-failed');
            //   }

        }
        
        function paymentFailed(request $request){
            return $request;
            return view('stripe1.paymentFailed');
        }

        function pay(Request $request, $id){
            $user_id = session('user_data')['user_id'];
            $bid = Bids::with('lots')->where(['bids.status'=>'won','bids.id'=>$id,'user_id'=> $user_id])->get();
            if(empty($bid) && sizeof($bid) != 1){
                return redirect('paynow');
            }
            // return $bid->first()->lots->title;
            return $this->checkout( $bid->first()->lots->title, $bid->first()->bid_amount, $bid->first()->id);
        }
}
