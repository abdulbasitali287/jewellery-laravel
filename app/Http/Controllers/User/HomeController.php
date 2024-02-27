<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Blog;
use App\Models\Category;
use App\Models\LatestCollection;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = Product::get();
        $sliders = Slider::all();
        $latestCollections = LatestCollection::all();
        $testimonials = Testimonial::all();
        $categories = Category::all();
        return view('screens.user.index',compact('products','sliders','latestCollections','testimonials','categories'));
    }

    public function adminIndex() : View {
        return view('screens.admin.index');
    }

    public function blogs(){
        $allBlogs = Blog::latest()->get();
        return view('screens.user.blogs.blog',compact('allBlogs'));
    }

    public function blogDetail(Blog $blog){
        return view('screens.user.blogs.blog-detail',compact('blog'));
    }

    public function categories(){
        return view('screens.user.categories',['categories' => Category::get()]);
    }

    public function categoryProducts(Category $category){
        return view('screens.user.categories.category-products',compact('category'));
    }
}
