<?php

namespace App\Traits\Auth;

use Illuminate\Support\Facades\Auth;

trait HasAuth {

    public function authenticated(array $credentials,$remember = false)  {

        if(Auth::attempt($credentials,$remember))
        {
            if(Auth::login(Auth::getLastAttempted()))
            {
                return true;
            }
        }
        return false;
    }
}
