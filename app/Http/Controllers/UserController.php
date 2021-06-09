<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;
use App\OrderItem;
use App\Booking;
use App\Parlor;
use App\CarBook;
use App\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    // order show
    public function order(){
        $orders = Order::where('user_id',Auth::id())->latest()->get();
        return view('pages.profile.order',compact('orders'));
    }

    // order view
    public function orderView($order_id){
        $order = Order::findOrFail($order_id);
        $orderitems = OrderItem::with('product')->where('order_id',$order_id)->get();
        $booking = Booking::where('order_id',$order_id)->first();
        return view('pages.profile.order_view',compact('order','orderitems','booking'));
    }

    // order delete 
    public function destroy($order_id){
        Order::findOrFail($order_id)->delete();
        return Redirect()->back()->with('danger','Successfully Canceled');
    }

    // parlor show
    public function appoint(){
        $parlors = Parlor::where('user_id',Auth::id())->latest()->get();
        return view('pages.profile.appoint',compact('parlors'));
    }

    // parlor delete 
    public function delete($parlor_id){
        Parlor::findOrFail($parlor_id)->delete();
        return Redirect()->back()->with('danger','Successfully Canceled');
    }



    // car booking show
    public function rent(){
        $car_books = Car::join('car_books','car_books.car_id','=','cars.id')->where('user_id',Auth::id())->get();
        return view('pages.profile.rent',compact('car_books'));
    }

    // car booking delete 
    public function danger($car_book_id){
        CarBook::findOrFail($car_book_id)->delete();
        return Redirect()->back()->with('danger','Successfully Canceled');
    }

}
