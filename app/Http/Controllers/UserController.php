<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class UserController extends Controller
{
    protected $product;
    protected $user;

    public function __construct(User $user, Product $product ){
        $this->user = $user;
        $this->product = $product;
    }

    public function login(){
        return view('login');
    }

    public function userdashboard(){
      return view('userdashboard', ['products'=>$this->product->all()]);
    }
    public function userlist(){

        return view('components/userlist', ['users'=> $this->user->all()]);
    }

    public function sidebarall(){
        return view('components/sidebarall');
    }


   public function loggin (Request $request){

    $registerdetails = $request->only('email', 'password');

      if ( Auth::attempt($registerdetails)){
        $user=$this->user->where('email', $request->email)->first();

       if ($user->role !=='admin'){
            return view('/userdashboard');
        }

        return redirect ('components/sidebarall');
      }
      else {
        return back()->withError(['password' => 'invalid credential']);
      }


    }
}
