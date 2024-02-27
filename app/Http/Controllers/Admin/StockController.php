<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Stock\CreateStockRequest;
use App\Models\Product;
use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function stockList(){

        $products = Product::pluck('id','name');
        return view('screens.admin.stock.index',compact('products'));
    }

    public function createStock(){
        $stocks = Stock::get();
        return view('screens.admin.stock.create',compact('stocks'));
    }

    public function storeStock(CreateStockRequest $request){
        dd($request->sanitizedStock());
    }

    public function editStock(Stock $stock){

    }

    public function updateStock(Stock $stock){

    }

    public function destroyStock(Stock $stock){

    }


}
