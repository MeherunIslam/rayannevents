<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use App\OrderItem;
use App\Booking;
use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function storeOrder(Request $request){

        $request->validate([
            'booking_first_name' => 'required',
            'booking_last_name' => 'required',
            'category_id' => 'required',
        ]);

        $order_id = Order::insertGetId([
            'user_id' => Auth::id(),
            'invoice_no' => mt_rand(10000000,99999999),
            'payment_type' => $request->payment_type,
            'total' => $request->total,
            'subtotal' => $request->subtotal,
            'coupon_discount' => $request->coupon_discount,
            'created_at' => Carbon::now(),
        ]);

        $carts = Cart::where('user_ip',request()->ip())->latest()->get();
            foreach ($carts as $cart ) {
          
                OrderItem::insert([
                    'order_id' => $order_id,
                    'product_id' => $cart->product_id,
                    'product_qty' => $cart->qty,
                    'price' => $cart->price,
                    'customize' => $cart->customize,
                    'created_at' => Carbon::now(),
                ]);

            }


            Booking::insert([
                'order_id' => $order_id,
                'category_id' => $request->category_id,
                'booking_first_name' => $request->booking_first_name,
                'booking_last_name' => $request->booking_last_name,
                'booking_email' => $request->booking_email,
                'booking_phone' => $request->booking_phone,
                'address' => $request->address,
                'state' => $request->state,
                'post_code' => $request->post_code,
                'event_date' => $request->event_date,
                'start_time' => $request->start_time,
                'end_time' => $request->end_time,
                'guest' => $request->guest,
                'created_at' => Carbon::now(),
            ]);

            if (Session::has('coupon')) {
                session()->forget('coupon');
             }

         Cart::where('user_ip',request()->ip())->delete();


            return Redirect()->to('order/success')->with('orderComplete','Your Order Succeffully Done');



    }

    public function orderSuccess(){
        return view('pages.order-complete');
    }
    
}
