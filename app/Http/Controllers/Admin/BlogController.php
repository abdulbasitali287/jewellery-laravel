<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Blog\CreateBlogRequest;
use App\Http\Requests\Admin\Blog\UpdateBlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        return view('screens.admin.blogs.index',compact('blogs'));
    }

    public function create(){
        return view('screens.admin.blogs.create');
    }

    public function store(CreateBlogRequest $request){
        if (Blog::create($request->sanitizeBlog())) {
            $img = $request->file('image');
            if($img->move('assets/admin/uploads/blogs/', $request->sanitizeBlog()['image'])){
                return redirect(route('blogs.show'))->with('success','record addedd successfully...!');
            }
        }
    }

    public function edit(Blog $blogs){
        return view('screens.admin.blogs.edit',compact('blogs'));
    }

    public function update(UpdateBlogRequest $request,Blog $blogs){
        if ($blogs->update($request->sanitizeBlog())) {
            if ($request->has('image')) {
                $img = $request->file('image');
                $img->move('assets/admin/uploads/blogs/', $request->sanitizeBlog()['image']);
            }
            return redirect(route('blogs.show'))->withSuccess('record updated successfully...!');
        }
    }

    public function destroy(Blog $blogs){
        $blogs->delete();
        return redirect()->back()->withSuccess('record deleted successfully...!');
    }
}
