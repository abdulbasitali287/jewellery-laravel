<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimonial;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Testimonial\CreateTestimonialRequest;
use App\Http\Requests\Admin\Testimonial\UpdateTestimonialRequest;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\Support\MediaStream;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('screens.admin.testimonials.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('screens.admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateTestimonialRequest $request)
    {
        if(Testimonial::create($request->sanitizedTestimonial())){
            toastr('record added successfully...!');
            return redirect(route('testimonial.index'));
        }
        return back();
    }

    /**
     * Display the specified resource.
     */
    // public function show(Testimonial $testimonial)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('screens.admin.testimonials.edit',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {
        if($testimonial->update($request->sanitizedTestimonial())){
            toastr('record updated successfully...!');
            return redirect(route('testimonial.index'));
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        if($testimonial->delete()){
            toastr('record deleted successfully...!');
            return back();
        }
        abort(404);
    }

    public function download(){
        // $media = Media::where('collection_name','images')->get();
        // return MediaStream::create('downloads.zip')->addMedia($media);
        return MediaStream::create('downloads.zip')->addMedia(Media::all());
    }
}
