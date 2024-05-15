<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\productController;
use App\Models\product;

class productController extends Controller
{
    protected $product;
    public function __construct(product $product){
        $this->product=$product;
    }

    public function product(){
        return view("product",['users'=> $this->product->all()]);
    }
    public function registerproduct(Request $request){
        $registerproduct=new product;

        
        $registerproduct->name =$request->name;
        $registerproduct->description =$request->description;
        $registerproduct->quantity =$request->quantity;
        $registerproduct->price =$request->price;
        $registerproduct->size =$request->size;
        $registerproduct->status =$request->status;
        $registerproduct->save();
//product::create($registerproduct);
return redirect()->back();
    }
    }

