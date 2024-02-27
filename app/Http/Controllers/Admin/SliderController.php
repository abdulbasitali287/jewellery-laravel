<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Slider\CreateSliderRequest;
use App\Http\Requests\Admin\Slider\UpdateSliderRequest;
use App\Models\Slider;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Spatie\Backtrace\File;

class SliderController extends Controller
{
    public function index(): View
    {
        $sliders = Slider::get();
        return view('screens.admin.slider.index', compact('sliders'));
    }

    public function create(): View
    {
        return view('screens.admin.slider.create');
    }

    public function store(CreateSliderRequest $request)
    {
        $slider = Slider::create($request->createSlider());
        if ($slider) {
            if ($request->hasFile('image')) {
                $slider->addMedia($request->image)->toMediaCollection('slider-media');
            }

            toastr('record added successfully...!');
            return redirect()->route('slider.index');
        }
        return back();
    }

    public function edit(Slider $slider): View
    {
        return view('screens.admin.slider.edit',compact('slider'));
    }

    public function update(UpdateSliderRequest $request, Slider $slider)
    {
        $slider->update($request->updateSlider());
        if ($request->hasFile('image')) {
            $slider->clearMediaCollection();
            $slider->addMedia($request->image)->toMediaCollection('slider-media');
        }
        toastr('record updated successfully...!');
        return redirect(route('slider.index'));
    }

    public function destroy(Slider $slider)
    {
        $slider->delete();
        toastr('record deleted successfully...!');
        return back();
    }
}
