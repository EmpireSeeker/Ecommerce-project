<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class signController extends Controller
{
    public function signup(){
        return view('login');
    }


    public function registration(Request $request){
        $request->password=bcrypt(value: $request->password);
        //dd($request->password);
        $registerdetails=[
            'name' => $request->name,
            'email' =>$request->email,
            'role'=>$request->role,
            'password'=>$request->password,
            'password'=>$request->password_confirmation,
        ];
        $user = new User;
        $user->create($registerdetails);
        return redirect()->route('userdashboard');
    }

}

