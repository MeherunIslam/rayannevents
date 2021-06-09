<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Product;
use App\Project;
use App\Group;
use App\Category;
use App\Subcategory;
use App\Position;
use App\Car;
use App\OrderItem;
use Illuminate\Http\Request;

class UserfontController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function user(){
        $products = Product::where('status',1)->latest()->get();
        $productsp = Product::where('status',1)->latest()->paginate(9);
        $lts_p = Product::where('status',1)->limit(3)->latest()->get();
        $subcategories = Subcategory::where('status',1)->latest()->get();
        $orderitems = OrderItem::with('product')->orderBy('created_at', 'desc')->latest()->take(3)->get();
        return view('pages.font',compact('products','subcategories','productsp','lts_p','orderitems'));
    }

    public function teenage(){
        $products = Product::where('status',1)->latest()->get();
        $lts_p = Product::where('status',1)->limit(3)->latest()->get();
        $subcategories = Subcategory::where('status',1)->latest()->get();
        $categories = Category::where('status',1)->latest()->get();
        
        return view('pages.teenage', compact('products','lts_p','subcategories','categories'));
    }

    public function baby(){
        $products = Product::where('status',1)->latest()->get();
        $lts_p = Product::where('status',1)->limit(3)->latest()->get();
        $subcategories = Subcategory::where('status',1)->latest()->get();
        $categories = Category::where('status',1)->latest()->get();
        return view('pages.baby', compact('products','lts_p','subcategories','categories'));
    }

    public function adult(){
        $products = Product::where('status',1)->latest()->get();
        $lts_p = Product::where('status',1)->limit(3)->latest()->get();
        $subcategories = Subcategory::where('status',1)->latest()->get();
        $categories = Category::where('status',1)->latest()->get();
        return view('pages.adult', compact('products','lts_p','subcategories','categories'));
    }

    public function hindu(){
        $products = Product::where('status',1)->latest()->get();
        $lts_p = Product::where('status',1)->limit(3)->latest()->get();
        $subcategories = Subcategory::where('status',1)->latest()->get();
        $categories = Category::where('status',1)->latest()->get();
        return view('pages.hindu', compact('products','lts_p','subcategories','categories'));
    }

    public function muslim(){
        $products = Product::where('status',1)->latest()->get();
        $lts_p = Product::where('status',1)->limit(3)->latest()->get();
        $subcategories = Subcategory::where('status',1)->latest()->get();
        $categories = Category::where('status',1)->latest()->get();
        return view('pages.muslim', compact('products','lts_p','subcategories','categories'));
    }

    public function christian(){
        $products = Product::where('status',1)->latest()->get();
        $lts_p = Product::where('status',1)->limit(3)->latest()->get();
        $subcategories = Subcategory::where('status',1)->latest()->get();
        $categories = Category::where('status',1)->latest()->get();
        return view('pages.christian', compact('products','lts_p','subcategories','categories'));
    }

    public function engage(){
        $products = Product::where('status',1)->latest()->get();
        $lts_p = Product::where('status',1)->limit(3)->latest()->get();
        $subcategories = Subcategory::where('status',1)->latest()->get();
        $categories = Category::where('status',1)->latest()->get();
        return view('pages.engage', compact('products','lts_p','subcategories','categories'));
    }

    public function anniversary(){
        $products = Product::where('status',1)->latest()->get();
        $lts_p = Product::where('status',1)->limit(3)->latest()->get();
        $subcategories = Subcategory::where('status',1)->latest()->get();
        $categories = Category::where('status',1)->latest()->get();
        return view('pages.anniversary', compact('products','lts_p','subcategories','categories'));
    }

    public function project(){
        $projects = Project::where('status',1)->latest()->get();
        $groups = Group::where('status',1)->latest()->get();
        return view('pages.project', compact('projects','groups'));
    }

    public function contact(){
        return view('pages.contact_us');
    }

    public function career(){
        $positions = Position::where('status',1)->latest()->get();
        return view('pages.career', compact('positions'));
    }

    public function apply(){
        $positions = Position::where('status',1)->latest()->get();
        return view('pages.apply', compact('positions'));
    }

    public function parlor(){
        return view('pages.parlor');
    }

    public function car(){
        $cars = Car::where('status',1)->latest()->paginate(9);
        return view('pages.car', compact('cars'));
    }

    // ----------- product details ---------
    public function productDetail($product_id){
        $product = Product::findOrFail($product_id);
        $subcategory_id = $product->subcategory_id;
        $related_p = Product::where('subcategory_id',$subcategory_id)->where('id','!=',$product_id)->latest()->get();
        return view('pages.product-details',compact('product','related_p'));
    }

     // ----------- project details ---------
     public function projectDetail($project_id){
        $project = Project::findOrFail($project_id);
        $group_id = $project->group_id;
        $related_pr = Project::where('group_id',$group_id)->where('id','!=',$project_id)->latest()->get();
        return view('pages.project-details',compact('project','related_pr'));
    }

      // ----------- position details ---------
      public function positionDetail($position_id){
        $position = Position::findOrFail($position_id);
        return view('pages.position-details',compact('position'));
    }

          // ----------- car details ---------
          public function carDetail($car_id){
            $car = Car::findOrFail($car_id);
            return view('pages.car-details',compact('car'));
        }

    // ==================================== shop Page ===========================
    public function storePage(){
        $products = Product::latest()->get();
        $productsp = Product::latest()->paginate(9);
        $lts_p = Product::where('status',1)->limit(3)->latest()->get();
        $subcategories = Subcategory::where('status',1)->latest()->get();
        return view('pages.store',compact('products','subcategories','productsp','lts_p'));
    }

    // ==================================== Font Page ===========================

    // categorywiese product
    public function subcatWiseProduct($subcat_id){
        $products = Product::where('subcategory_id',$subcat_id)->latest()->paginate(9);
        $subcategories = Subcategory::where('status',1)->latest()->get();
        $lts_p = Product::where('status',1)->limit(3)->latest()->get();
        return view('pages.cat-product',compact('products','subcategories','lts_p'));
    }

    public function search(Request $request)
    {
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the product_name and price columns from the products table
        $productsp = Product::query()
            ->where('product_name', 'LIKE', "%{$search}%")
            ->orWhere('price', 'LIKE', "%{$search}%")
            ->paginate(9);
    
        // Return the search view with the resluts compacted
        return view('pages.search', compact('productsp'));
    }

}
