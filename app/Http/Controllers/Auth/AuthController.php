<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use App\Traits\Auth\HasAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    use HasAuth;

    public function loginView(){

        return view('auth.login');
    }

    public function login(LoginRequest $request){
        if ($this->authenticated($request->credentials())) {
            return redirect()->route('index')->with('success','successfully logged in...!');
        }
        return back();
    }

    public function registerView(){
        return view('auth.register');
    }

    public function registered(RegisterRequest $request){
        $user = User::create($request->sanitized());
        if ($user) {
            $this->authenticate(['email' => $request->email,'password' => $request->password]);
            return redirect()->route('index');
        }
        return back();
    }

    protected function authenticate(array $credentials){
        if (Auth::attempt($credentials)) {
            if (Auth::login(Auth::getLastAttempted())) {
                return true;
            }
            return false;
        }
    }

    function logout(Request $request) {
        Auth::logout();
        return redirect()->route('login');
    }

    // function login(LoginRequest $request) {
    //     if($request)
    //     {
    //         $this->authenticate($request->sanitized(),$request->remember);
    //         return redirect()->route('index');
    //     }
    //     return back();
    // }

    // public function registered(RegisterRequest $request){

    //     $user = User::create($request->sanitized());
    //     if($user)
    //     {
    //         $this->authenticate(['email' => $request->email,'password' => $request->password], $request->remember);
    //         return redirect()->route('index');
    //     }
    //     return back();
    // }

    // protected function authenticate(array $credentials,$remember = false)  {

    //     if(Auth::attempt($credentials,$remember))
    //     {
    //         if(Auth::login(Auth::getLastAttempted()))
    //         {
    //             return true;
    //         }
    //     }
    //     return false;

    // }


}
