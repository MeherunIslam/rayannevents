<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Parlor;
use App\Car;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use App\CarBook;

class WeddingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // ============= store parlor Appointment ============= 
    public function storeAppoint(Request $request){

        $request->validate([
            'appoint_first_name' => 'required',
            'quantity' => 'required',
            'appoint_email' => 'required',
            'appoint_phone' => 'required',
            'appoint_date' => 'required',
            'appoint_time' => 'required',
        ]);

        Parlor::insert([
            'user_id' => Auth::id(),
            'appoint_first_name' => $request->appoint_first_name,
            'quantity' => $request->quantity,
            'appoint_email' => $request->appoint_email,
            'appoint_phone' => $request->appoint_phone,
            'appoint_date' => $request->appoint_date,
            'appoint_time' => $request->appoint_time,
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->back()->with('success','Your Appointment Succeffully Sent');
    }

    // ============= delete parlor Appointment ============= 
    public function delete($parlor_id){
        Parlor::findOrFail($parlor_id)->delete();
        return Redirect()->back()->with('delete','successfully Deleted');
    }

    // parlor status cancel
    public function Cancel($parlor_id){
        Parlor::findOrFail($parlor_id)->update(['status' => 3]);
        return Redirect()->back()->with('status','Parlor cancelled');
    }


    // parlor status accept
    public function Accept($parlor_id){
        Parlor::findOrFail($parlor_id)->update(['status' => 1]);
        return Redirect()->back()->with('status','Parlor Accepted');
    }

    // parlor status pending
    public function Pending($parlor_id){
        Parlor::findOrFail($parlor_id)->update(['status' => 0]);
        return Redirect()->back()->with('status','Parlor Pending');
    }

    // parlor status done
    public function Done($parlor_id){
        Parlor::findOrFail($parlor_id)->update(['status' => 2]);
        return Redirect()->back()->with('status','Parlor Completed');
    }
    

    // --------------------- add car ------------------ 
    public function addCar(){
        return view('admin.car.add');
    }


    // ===================== store cars ================== 
    public function storeCar(Request $request){

        $request->validate([
            'car_name' => 'required|max:255',
            'car_price' => 'required|max:255',
            'long_description' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,gif',
        ]);

        $imag = $request->file('image');                
        $name_gen = hexdec(uniqid()).'.'.$imag->getClientOriginalExtension();
        Image::make($imag)->resize(270,270)->save('userfont/images/car/upload/'.$name_gen);       
        $img_url1 = 'userfont/images/car/upload/'.$name_gen;

        Car::insert([
            'car_name' => $request->car_name,
            'car_price' => $request->car_price,
            'long_description' => $request->long_description,
            'image' => $img_url1,
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->back()->with('success','Car Added');

    }

    // ======================== manage cars ======================== 
    public function manageCar(){
        $cars = Car::orderBy('id','DESC')->get();
        return view('admin.car.manage',compact('cars'));
    }

    // ======================== edit car =========== 
    public function editCar($car_id){
        $car = Car::findOrFail($car_id);
        return view('admin.car.edit',compact('car'));
    }


    // ======================== update car data =========================== 
    public function updateCar(Request $request){
        $car_id = $request->id;
        Car::findOrFail($car_id)->Update([
            'car_name' => $request->car_name,
            'car_price' => $request->car_price,
            'long_description' => $request->long_description,
            'update_at' => Carbon::now(),
        ]);

        return Redirect()->route('manage-cars')->with('success','Car successfully Updated');
    }

    // ----------- update car image =-------------- 
    public function updateImage(Request $request){
        $car_id = $request->id;
        $old = $request->img;
         
        if ($request->has('image')) {
           unlink($old);
           $imag = $request->file('image');                
            $name_gen = hexdec(uniqid()).'.'.$imag->getClientOriginalExtension();
            Image::make($imag)->resize(270,270)->save('userfont/images/car/upload/'.$name_gen);       
            $img_url = 'userfont/images/car/upload/'.$name_gen;

            Car::findOrFail($car_id)->update([
                'image' => $img_url,
                'updated_at' => Carbon::now(),
            ]);

            return Redirect()->route('manage-cars')->with('success','image successfully Updated');
        }

        
    }

    // ============= delete car ============= 
    public function destroy($car_id){
        $image = Car::findOrFail($car_id);
        $img = $image->image;
        unlink($img);

        Car::findOrFail($car_id)->delete();
        return Redirect()->back()->with('delete','Successfully Deleted');
    }

     // car status inactive 
     public function Inactive($car_id){
        Car::findOrFail($car_id)->update(['status' => 0]);
        return Redirect()->back()->with('status','Car inactive');
    }

    
    // car status active 
    public function Active($car_id){
        Car::findOrFail($car_id)->update(['status' => 1]);
        return Redirect()->back()->with('status','Car Activated');
    } 

    //view cars //
    public function viewCar($car_id){
        $car = Car::findOrFail($car_id);
        return view('admin.car.view',compact('car'));
    }


    // ============= store car booking ============= 
    public function storeCarbook(Request $request){

        $request->validate([
            'car_id' => 'required',
            'client_first_name' => 'required',
            'client_last_name' => 'required',
            'client_email' => 'required',
            'client_address' => 'required',
            'client_phone' => 'required',
            'client_date' => 'required',
            'client_time' => 'required',
        ]);

        Carbook::insert([
            'user_id' => Auth::id(),
            'car_id' => $request->car_id,
            'client_first_name' => $request->client_first_name,
            'client_last_name' => $request->client_last_name,
            'client_email' => $request->client_email,
            'client_address' => $request->client_address,
            'client_phone' => $request->client_phone,
            'client_date' => $request->client_date,
            'client_time' => $request->client_time,
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->back()->with('success','Your Booking Succeffully Done');
    }

    // ============= delete car booking ============= 
    public function carbookdelete($car_book_id){
        CarBook::findOrFail($car_book_id)->delete();
        return Redirect()->back()->with('carbookdelete','Successfully Deleted');
    }

     // carbook status accept 
     public function carAccept($car_book_id){
        CarBook::findOrFail($car_book_id)->update(['status' => 1]);
        return Redirect()->back()->with('status','Car Booking Accepted');
    }

    
    // carbook status pending 
    public function carPending($car_book_id){
        CarBook::findOrFail($car_book_id)->update(['status' => 0]);
        return Redirect()->back()->with('status','Car Booking Pending');
    }

    // parlor status cancel
    public function carCancel($car_book_id){
        CarBook::findOrFail($car_book_id)->update(['status' => 3]);
        return Redirect()->back()->with('status','Car Booking cancelled');
    }

    // parlor status done
    public function carDone($car_book_id){
        CarBook::findOrFail($car_book_id)->update(['status' => 2]);
        return Redirect()->back()->with('status','Car Booking Completed');
    }

}
