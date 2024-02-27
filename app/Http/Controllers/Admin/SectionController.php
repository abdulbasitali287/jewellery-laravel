<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Section\UpdateSectionRequest;
use App\Http\Requests\Admin\Sections\CreateSectionRequest;
use App\Models\Page;
use App\Models\Section;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index() : View {
        $sections = Section::get();
        return view('screens.admin.section.index',compact('sections'));
    }

    public function create() : View {
        return view('screens.admin.section.create');
    }

    public function store(CreateSectionRequest $request) {
        $section = Section::create([
            'page_id' => $request->page_id,
            'section_name' => $request->section_name,
        ]);
        $section->pages()->attach([
            'page_id' => $request->page_id,
        ]);
        if ($section) {
            toastr('record added successfully...!');
            return redirect(route('section.index'));
        }
        return back();
    }

    public function edit(Section $section) : View {
        return view('screens.admin.section.edit',compact('section'));
    }

    public function update(UpdateSectionRequest $request, Section $section){
        $sectionCheck = $section->update([
            'page_id' => $request->page_id,
            'section_name' => $request->section_name,
        ]);
        $section->pages()->sync([$request->page_id]);
        if ($sectionCheck) {
            toastr('record updated successfully...!');
            return redirect(route('section.index'));
        }
        return back();
    }

    public function destroy(Section $section){
        if ($section->delete()) {
            toastr('record deleted successfully...!');
            return redirect(route('section.index'));
        }
        return back();
    }
}
