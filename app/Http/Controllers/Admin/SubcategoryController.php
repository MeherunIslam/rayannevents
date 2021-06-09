<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Subcategory;
use Carbon\Carbon;

class SubcategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    } 

    public function index(){
        $subcategories=Subcategory::latest()->get();
        return view('admin.subcategory.index',compact('subcategories'));
    }

     // ============ store category ========= 
    public function Store(Request $request){
        $request->validate([
            'subcategory_name' => 'required|unique:subcategories,subcategory_name'
        ]);
        
       
        Subcategory::insert([
            'subcategory_name' => $request->subcategory_name,
            'created_at' => Carbon::now()
        ]);


        return Redirect()->back()->with('success','Subcategory added');
    } 


    // ========= edit category data 
    public function Edit($subcat_id){
        $subcategory = Subcategory::find($subcat_id);
        return view('admin.subcategory.edit',compact('subcategory'));
    }

    // ============ UpdateCat category ========= 
    public function Update(Request $request){      
        $subcat_id = $request->id;

        Subcategory::find($subcat_id)->update([
            'subcategory_name' => $request->subcategory_name,
            'updated_at' => Carbon::now()
        ]);

        return Redirect()->route('admin.subcategory')->with('Subcatupdated','Subcategory Updated');
    }


    // Delete category 
    public function Delete($subcat_id){
        Subcategory::find($subcat_id)->delete();
        return Redirect()->back()->with('delete','Subcategory Deleted Success');
    }


    // status inactive 
    public function Inactive($subcat_id){
        Subcategory::find($subcat_id)->update(['status' => 0]);
        return Redirect()->back()->with('Subcatupdated','Subcategory inactive');
    }

    
    // status inactive 
    public function Active($subcat_id){
        Subcategory::find($subcat_id)->update(['status' => 1]);
        return Redirect()->back()->with('Subcatupdated','Subcategory Activated');
    } 
}
