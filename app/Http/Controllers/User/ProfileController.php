<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profile(){
        return view('screens.user.dashboard.account-detail');
    }

    public function updateProfile(UpdateProfileRequest $request){
        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $img->move('assets/user/uploads/', $request->updateProfile()['image']);
        }
        $oldPassword = $request->updateProfile()['old_password'];
        $newPassword = $request->updateProfile()['password'];
        if (!empty($oldPassword) && !empty($newPassword)) {
            if (Hash::check($oldPassword,auth()->user()->password)) {
                auth()->user()->update($request->updateProfile());
                toastr('record updated successfully...!');
                return back();
            }else {
                return back()->with('failed','record not updated...!');
            }
        }else{
            auth()->user()->update($request->updateProfile());
            toastr('record updated successfully...!');
            return back();
        }
    }
}
