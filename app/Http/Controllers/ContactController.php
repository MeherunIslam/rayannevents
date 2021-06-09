<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Contact;
use App\Subscribe;
use Carbon\Carbon;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function storeContact(Request $request){

        $request->validate([
            'user_name' => 'required',
            'user_contact' => 'required',
            'user_email' => 'required',
            'user_message' => 'required',
        ]);

        Contact::insert([
            'user_name' => $request->user_name,
            'user_contact' => $request->user_contact,
            'user_email' => $request->user_email,
            'user_message' => $request->user_message,
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->back()->with('success','Your Message Succeffully Sent');
    }

    public function storeSubscribe(Request $request){

        $request->validate([
            'subscribe_email' => 'required',
        ]);

        Subscribe::insert([
            'subscribe_email' => $request->subscribe_email,
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->back()->with('success','Your Subscription Succeffully Done');
    }

}
