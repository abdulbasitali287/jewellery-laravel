<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MetaSection;
use App\Models\PageSection;
use Illuminate\Http\Request;

class MetaSectionController extends Controller
{
    public function create(){
        
        return view('screens.admin.meta-section.create');
    }
}
