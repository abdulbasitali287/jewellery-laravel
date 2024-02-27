<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ImageProduct\CreateImageProductRequest;
use App\Http\Requests\Admin\ImageProduct\UpdateImageProductRequest;
use App\Models\ImageProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class ImageProductController extends Controller
{
    public function index(){
        $image_product = ImageProduct::all();
        $product = Product::pluck('name','id');
        return view('screens.admin.image_product.index',compact('image_product','product'));
    }

    public function create(){
        $product = Product::pluck('name','id');
        return view('screens.admin.image_product.create',compact('product'));
    }

    public function store(CreateImageProductRequest $request){
        if(ImageProduct::create($request->sanitize_image_product())){
            $img = $request->file('image');
            $img->move('assets/admin/uploads/image_product/', $request->sanitize_image_product()['image']);
            return back()->with('success','record added successfully...!');
        }
    }

    public function edit(ImageProduct $image_product){
        // dd($image_product);
        return view('screens.admin.image_product.edit',compact('image_product'));
    }

    public function update(UpdateImageProductRequest $request,ImageProduct $image_product){
        if ($image_product->update($request->sanitize_image_product())) {
            if ($request->has('image')) {
                $img = $request->file('image');
                $img->move('assets/admin/uploads/image_product/', $request->sanitize_image_product()['image']);
            }
            return redirect(route('image.product.show'))->withSuccess('record updated successfully...!');
        }
    }

    public function destroy(ImageProduct $image_product){
        $image_product->delete();
        return redirect(route('image.product.show'));
    }
}
