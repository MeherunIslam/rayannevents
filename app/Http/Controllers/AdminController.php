<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Contact;
use App\Subscribe;
use App\Apply;
use App\Parlor;
use App\Product;
use App\CarBook;
use App\Car;
use App\Position;
use Carbon\Carbon;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }

    public function feedback()
    {
        $contacts=Contact::latest()->get();
        return view('admin.feedback',compact('contacts'));
    }

    public function newsletter()
    {
        $subscribes = Subscribe::latest()->get();
        return view('admin.newsletter',compact('subscribes'));
    }

    public function application()
    {
        $file = Apply::all();
        $applies = Apply::latest()->get();
        $positions = Position::latest()->get();
        return view('admin.application',compact('applies','file','positions'));
    }

    public function parlorAppoint()
    {
        $parlors=Parlor::latest()->get();
        return view('admin.parlor_appointment',compact('parlors'));
    }

    public function carBook()
    {
        $car_books = Car::join('car_books','car_books.car_id','=','cars.id')->orderBy('car_books.created_at', 'desc')->get();
        return view('admin.car_book',compact('car_books'));
    }

    public function Logout(){
        Auth::logout();
        return Redirect()->route('admin.login');
    }

   
}
