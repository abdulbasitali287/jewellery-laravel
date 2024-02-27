<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LatestCollection\CreateLatestCollectionRequest;
use App\Http\Requests\Admin\LatestCollection\UpdateLatestCollectionRequest;
use App\Models\LatestCollection;
use Illuminate\Contracts\View\View;
use Illuminate\Http\File as HttpFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Validation\Rules\File;

class LatestCollectionController extends Controller
{
    public function index() : View{
        $latestCollections = LatestCollection::all();
        return view('screens.admin.latest-collection.index',compact('latestCollections'));
    }

    public function create() : View{
        return view('screens.admin.latest-collection.create');
    }

    public function store(CreateLatestCollectionRequest $request){
        $latestCollection = LatestCollection::create([
            'title' => $request->title,
            'sub_title' => $request->sub_title
        ]);
        if ($latestCollection) {
            $latestCollection->addMedia($request->image)->toMediaCollection();
            toastr('record added successfully...!');
            return redirect()->route('latest.collection.index');
        }else {
            return back();
        }
    }

    public function edit(LatestCollection $latestCollection) : View{
        return view('screens.admin.latest-collection.edit',compact('latestCollection'));
    }

    public function update(UpdateLatestCollectionRequest $request, LatestCollection $latestCollection){
        $latestCollection->update([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
        ]);
        if ($request->hasFile('image')) {
            $latestCollection->clearMediaCollection();
            $latestCollection->addMedia($request->image)->toMediaCollection();
        }
        toastr('record updated successfully...!');
        return redirect()->route('latest.collection.index');
    }

    public function destroy(LatestCollection $latestCollection){
        $latestCollection->delete();
        // File::delete($latestCollection->getFirstMediaUrl());
        return redirect(route('latest.collection.index'));
    }
}
