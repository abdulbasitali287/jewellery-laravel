<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Stripe;

class PaymentController extends Controller
{
    public function stripe() : View {

        return view('screens.admin.stripe.checkout');
        // return view('screens.user.shop.shipping-returns');
        // return view('screens.user.shop.payment');
    }

    public function charge(Request $request){
        Stripe::setApiKey(env('STRIPE_KEY'));
        // dd($request);
        try {
            $charge = Charge::create([
                'amount' => $request->amount,
                'currency' => 'usd',
                'source' => $request->stripeToken,
                'description' => 'Payment Description'
            ]);

            // Handle successful payment
        } catch (\Exception $e) {
            // Handle payment failure
        }
    }
}
