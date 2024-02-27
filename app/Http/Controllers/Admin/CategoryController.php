<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\Category\CreateRequest;
use App\Http\Requests\Admin\Category\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::get();
        return view('screens.admin.category.index', ['data' => $data]);
    }

    public function create()
    {
        $data = Category::all();
        return view('screens.admin.category.create', ['data' => $data]);
    }

    public function store(CreateRequest $request)
    {
        $category = Category::create($request->sanitized());
        if ($category) {
            $img = $request->file('image');
            $name = $img->getClientOriginalName();
            $filename = 'assets/admin/uploads/' . $name;
            $img->move('assets/admin/uploads/', $filename);
            return redirect()->route('category.show');
        }
        return back();
    }

    public function edit(Category $category)
    {
        $categories = Category::all();
        return view('screens.admin.category.edit', compact('categories', 'category'));
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $data = $request->sanitized();

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $name = $img->getClientOriginalName();
            $filename = 'assets/admin/uploads/' . $name;
            $data['image'] = $filename;
            $img->move('assets/admin/uploads/', $filename);
        }
        else{
            $data['image'] = $category->image;
        }

        if ($category) {
            if ($category->update($data)) {
                return redirect()->route('category.show');
            }
            return back();
        }
    }

    public function destroy(Request $request,Category $category)
    {
        $category->delete();
        return back();
    }
}
