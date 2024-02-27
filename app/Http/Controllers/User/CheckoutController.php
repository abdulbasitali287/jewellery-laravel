<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateCheckoutRequest;
use App\Models\Order;
use App\Models\OrderProduct;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Stripe;

class CheckoutController extends Controller
{
    public function index($cart)
    {
        $cartData = \Cart::session(auth()->id())->getContent($cart);
        return view('screens.user.checkout.checkout', compact('cartData'));
    }

    public function checkoutCreate(CreateCheckoutRequest $request)
    {
        $order = Order::create($request->sanitizeCheckout());
        if ($order) {
            foreach ($request->sanitizeOrderProduct() as $ordProduct) {
                $order->products()->attach($ordProduct['product_id'], [
                    'quantity' => $ordProduct['quantity'],
                    'price' => $ordProduct['price'],
                ]);
            }
            $isChecked = $request->input('cash_on_delivery', false);
            if (!$isChecked) {
                Stripe::setApiKey(env('STRIPE_SECRET'));
                try {
                    $charge = Charge::create([
                        'amount' => \Cart::gettotal(),
                        'card_no' => $request->card_no,
                        'currency' => 'usd',
                        'source' => env('STRIPE_KEY'),
                        'description' => 'Stripe Payment testing'
                    ]);

                    // Handle successful payment
                } catch (\Exception $e) {
                    // Handle payment failure
                }
            }
            \Cart::clear();
            toastr()->success('order created successfully..!');
            return  redirect()->route('index');
        }
    }
}
