<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect();
       
    }
}
