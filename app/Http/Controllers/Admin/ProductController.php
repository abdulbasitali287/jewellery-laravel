<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\CreateProductRequest;
use App\Http\Requests\Admin\Product\UpdateProductRequest;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\ImageProduct;
use App\Models\Product;
use App\Models\Variant;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['role:admin']);
    // }

    public function index()
    {
        $product = Product::all();
        return view('screens.admin.product.index', ['products' => $product]);
    }

    public function create()
    {
        $category = Category::pluck('name', 'id');
        $attribute = Attribute::pluck('name', 'id');
        return view('screens.admin.product.create', compact('category', 'attribute'));
    }

    public function store(CreateProductRequest $request)
    {
        $product = Product::create($request->sanitize_product());
        $image_product = ImageProduct::create([
            'product_id' => $product->id,
            'image' => $request->sanitize_image_product()['image']
        ]);
        if ($image_product) {
            $img = $request->file('image');
            $img->move('assets/admin/uploads/image_product/', $request->sanitize_image_product()['image']);
            $product->categories()->attach($request->sanitize_category());
            foreach ($request->sanitize_attribute() as $attribute) {
                $product->attributes()->attach($attribute);
            }
            foreach ($request->sanitizeProductVariants() as $var) {
                $product->variants()->attach($var['variant_id'],[
                    'addon_price' => $var['addon_price'],
                    'quantity' => $var['quantity']
                ]);
            }
            return redirect()->route('product.show');
        }
        return back();
    }

    public function edit(Product $product)
    {
        return view('screens.admin.product.edit', ['product' => $product]);
    }

    public function update(UpdateProductRequest $request, Product $product)
    {

        if ($product->update($request->sanitized())) {
            return response()->json(['success' => 'record updated successfully...!']);
        }
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('admin/product/show');
    }

    public function loadVariant(Attribute $variant)
    {
        return response()->json(['variant' => $variant->variants]);
    }
}
