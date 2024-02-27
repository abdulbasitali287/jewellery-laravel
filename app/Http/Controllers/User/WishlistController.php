<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function wishlist(Product $product){
        $wishlist = Wishlist::create([
            'user_id' => auth()->user()->id
        ]);
        $product->wishlists()->attach($wishlist->id);
        toastr('added successfully...!');
        return back();
    }

    public function wishlistDetails(){
        // $wishlists = auth()->user()->wishlists()->get();

        // dd($wishlist[0]);
        // $allProducts = Product::all();
        return view('screens.user.cart.wishlist');
    }

    public function destroy(Wishlist $wishlist){
        $wishlist->delete();
        toastr('record deleted successfully...!');
        return back();
    }
}
