<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
   public function index(){
       if (Auth::check()) {
            $categories = Category::latest()->get();
            $carts = Cart::latest()->get();
            $subtotal = Cart::all()->where('user_ip',request()->ip())->sum(function($t){
            return $t->price * $t->qty;
         });
        return view('pages.checkout',compact('carts','subtotal','categories'));
       }else{
        return redirect()->route('login');
       }
      
   }


}
