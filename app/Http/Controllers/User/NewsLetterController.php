<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateNewsLetterRequest;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function store(CreateNewsLetterRequest $request){
        if (Newsletter::create($request->storeNewsLetter())) {
            toastr()->success('subscribed successfully...!');
            return back();
        }
    }
}
