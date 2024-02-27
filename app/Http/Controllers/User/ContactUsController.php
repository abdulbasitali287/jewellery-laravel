<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateContactRequest;
use App\Models\Contact;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index() : View{
        return view('screens.user.contact');
    }

    public function store(CreateContactRequest $request){
        if (Contact::create($request->storeContact())) {
            toastr()->success('request has been sent...!');
            return back();
        }
    }
}
