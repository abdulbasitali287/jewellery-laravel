<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Pages\CreatePageRequest;
use App\Http\Requests\Admin\Pages\UpdatePageRequest;
use App\Models\Page;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() : View {
        $pages = Page::orderBy('id','desc')->get();
        return view('screens.admin.pages.index',compact('pages'));
    }

    public function create() : View {
        return view('screens.admin.pages.create');
    }

    public function store(CreatePageRequest $request) {
        // dd($request->sanitizePages(),$request->all());
        foreach ($request->sanitizePages() as $value) {
            $check = Page::create($value);
        }
        if ($check) {
            toastr('record added successfully...!');
            return redirect(route('page.index'));
        }
        return back();
    }

    public function edit(Page $page) : View {
        return view('screens.admin.pages.edit',compact('page'));
    }

    public function update(UpdatePageRequest $request,Page $page){
        if ($page->update($request->all())) {
            toastr('record updated successfully...!');
            return redirect(route('page.index'));
        }
        return back();
    }

    public function destroy(Page $page){
        if ($page->delete()) {
            toastr('record deleted successfully...!');
            return redirect(route('page.index'));
        }
        return back();
    }
}
