<?php

namespace App\Http\Controllers\User;

use App\Filters\Search;
use App\Filters\Sort;
use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Darryldecode\Cart\Cart;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class ShopController extends Controller
{
    public function shop()
    {
        // if (request()->has('priceRange')) {
        //     $priceRange = request()->priceRange;
        //     foreach ($priceRange as $price) {
        //         $products = Product::whereBetween('price',[ $price['rangeMin'],$price['rangeMax'] ])->get();
        //     }
        //     dd($products);
        // }
        $categoriesShop = Category::pluck('name', 'id');
        $attributes = Attribute::get();
        $products = Product::with('variants','images')->get();
        if (request()->ajax()) {
            if (empty(request()->all())) {
                return response([
                    'products' => $products
                ]);
            }
            $products = Product::with('images')->filter([
                Search::class,
                Sort::class
            ]);
            return response([
                'products' => $products
            ]);
        }

        return view('screens.user.shop.shop', compact('products', 'categoriesShop', 'attributes'));
    }

    public function productDetail(Product $product)
    {
        $cateogories = Category::pluck('name', 'id');
        $attributes = Attribute::get();
        $likeProducts = Product::with('categories')->get()->take(4);
        $reviews = Review::with('product', 'user')->get();
        return view('screens.user.products.product-detail-2', compact('product', 'likeProducts', 'reviews'));
    }

    public function cart(): View
    {
        $cartItems = \Cart::session(auth()->id())->getContent();
        return view('screens.user.cart.cart', compact('cartItems'));
    }

    public function addToCart(Request $request, Product $product)
    {
        $variants = [];
        $addonPrice = [];

        if (auth()->check()) {
            foreach ($request->variant as $value) {
                $vari = $product->variants->where('id', $value)->first();
                $variants[] = $vari->name;
                $addonPrice[] = $vari->pivot->addon_price;
            }
            // add the product to cart
            \Cart::session(auth()->id())->add(array(
                'id' => $product->id,
                'name' => $product->name,
                'price' => ($product->price + array_sum($addonPrice)),
                'quantity' => $request->quantity,
                'attributes' => [
                    'variants' => $variants,
                    'addonPrice' => array_sum($addonPrice),
                    'subTotal' => (($product->price + array_sum($addonPrice)))
                ],
                'associatedModel' => $product
            ));

            $cartItems = \Cart::session(auth()->id())->getContent();
        }
        return redirect()->route('cart')->with('cartItems', $cartItems);
    }

    public function updateCart()
    {
        $cartItem = \Cart::session(auth()->id())->get(request()->productId);
        $subTotal = $cartItem->attributes->subTotal;
        \Cart::session(auth()->id())->update(request()->productId, [
            'quantity' => ['relative' => false, 'value' => request()->quantity],
        ]);
        return response()->json(['quantity' => request()->quantity, 'price' =>  $subTotal * request()->quantity]);
    }

    public function removeToCart(Request $request, Product $product)
    {
        \Cart::session(auth()->id())->remove($product->id);
        return back();
    }
}
