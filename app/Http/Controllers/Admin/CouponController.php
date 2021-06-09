<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Coupon;
use App\Order;
use App\OrderItem;
use App\Booking;
use App\Category;
use Carbon\Carbon;
use PHPUnit\Framework\Constraint\Count;

class CouponController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

   public function index(){
       $coupons = Coupon::latest()->get();
       return view('admin.coupon.index',compact('coupons'));
   }

    //    ============= coupon store =========
   public function Store(Request $request){
       Coupon::insert([
        'coupon_name' => strtoupper($request->coupon_name),
        'discount' => $request->discount,
        'created_at' => Carbon::now(),
       ]);

       return Redirect()->back()->with('success','Coupon added');
   }

   public function couponEdit($coupon_id){
       $coupon = Coupon::findOrFail($coupon_id);
       return view('admin.coupon.edit',compact('coupon'));
   }

   public function update(Request $request){
       $coupon_id = $request->id;
    Coupon::findOrFail($coupon_id)->update([
        'coupon_name' => strtoupper($request->coupon_name),
        'updated_at' => Carbon::now(),
       ]);

       return Redirect()->route('admin.coupon')->with('success','Coupon Updated');
   }

   public function couponDelete($coupon_id){
       Coupon::findOrFail($coupon_id)->delete();
       return Redirect()->back()->with('delete','Coupon Deleted');
   }


    // status inactive
    public function Inactive($coupon_id){
        Coupon::find($coupon_id)->update(['status' => 0]);
        return Redirect()->back()->with('status','Coupon inactive');
    }


    // status inactive
    public function Active($coupon_id){
        Coupon::find($coupon_id)->update(['status' => 1]);
        return Redirect()->back()->with('status','Coupon Activated');
    }


    // =================== Order ==========================
    public function orderIndex(){
        $orders = Order::latest()->get();
        return view('admin.order.index',compact('orders'));
    }

    //view orders //
    public function viewOrder($order_id){
        $order = Order::findOrFail($order_id);
        $orderItems = OrderItem::where('order_id',$order_id)->get();
        $booking = Booking::where('order_id',$order_id)->first();
        $categories = Category::latest()->get();
        return view('admin.order.view',compact('order','orderItems','booking','categories'));
    }

    //delete orders //
    public function orderDelete($order_id){
        Order::findOrFail($order_id)->delete();
        return Redirect()->back()->with('delete','Order Deleted');
    }

    // status cancel
    public function Cancel($order_id){
        order::findOrFail($order_id)->update(['status' => 3]);
        return Redirect()->back()->with('status','Order cancelled');
    }


    // status accept
    public function Accept($order_id){
        order::findOrFail($order_id)->update(['status' => 1]);
        return Redirect()->back()->with('status','Order Accepted');
    }

    // status pending
    public function Pending($order_id){
        order::findOrFail($order_id)->update(['status' => 0]);
        return Redirect()->back()->with('status','Order Pending');
    }

    // status completed
    public function Done($order_id){
        order::findOrFail($order_id)->update(['status' => 2]);
        return Redirect()->back()->with('status','Order Completed');
    }
    

}
