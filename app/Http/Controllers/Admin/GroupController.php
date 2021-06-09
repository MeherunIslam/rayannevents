<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Group;
use Carbon\Carbon;

class GroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    } 

    public function index(){
        $groups=Group::latest()->get();
        return view('admin.group.index',compact('groups'));
    }

     // ============ store category ========= 
    public function Store(Request $request){
        $request->validate([
            'group_name' => 'required|unique:groups,group_name'
        ]);
        
       
        Group::insert([
            'group_name' => $request->group_name,
            'created_at' => Carbon::now()
        ]);


        return Redirect()->back()->with('success','Group added');
    } 


    // ========= edit category data 
    public function Edit($group_id){
        $group = Group::find($group_id);
        return view('admin.group.edit',compact('group'));
    }

    // ============ UpdateCat category ========= 
    public function Update(Request $request){      
        $group_id = $request->id;

        Group::find($group_id)->update([
            'group_name' => $request->group_name,
            'updated_at' => Carbon::now()
        ]);

        return Redirect()->route('admin.group')->with('Groupupdated','Group Updated');
    }


    // Delete category 
    public function Delete($group_id){
        Group::find($group_id)->delete();
        return Redirect()->back()->with('delete','Group Deleted Success');
    }


    // status inactive 
    public function Inactive($group_id){
        Group::find($group_id)->update(['status' => 0]);
        return Redirect()->back()->with('Groupupdated','Group inactive');
    }

    
    // status inactive 
    public function Active($group_id){
        Group::find($group_id)->update(['status' => 1]);
        return Redirect()->back()->with('Groupupdated','Group Activated');
    } 
}
