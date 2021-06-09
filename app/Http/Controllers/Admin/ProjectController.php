<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Project;
use App\Category;
use App\Group;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    

    // --------------------- add Project ------------------ 
    public function addProject(){
        $categories = Category::latest()->get();
        $groups = Group::latest()->get();
        return view('admin.project.add',compact('categories','groups'));
    }


    // ===================== store Projects ================== 
    public function storeProject(Request $request){

        $request->validate([
            'project_name' => 'required|max:255',
            'category_id' => 'required|max:255',
            'group_id' => 'required|max:255',
            'short_description' => 'required',
            'long_description' => 'required',
            'image_one' => 'required|mimes:jpg,jpeg,png,gif',
            'image_two' => 'required|mimes:jpg,jpeg,png,gif',
            'image_three' => 'required|mimes:jpg,jpeg,png,gif',
        ],[
            'group_id.required' => 'select group name',
            'category_id.required' => 'select category name',
        ]);

        $imag_one = $request->file('image_one');                
        $name_gen = hexdec(uniqid()).'.'.$imag_one->getClientOriginalExtension();
        Image::make($imag_one)->resize(270,270)->save('userfont/images/project/upload/'.$name_gen);       
        $img_url1 = 'userfont/images/project/upload/'.$name_gen;

        $imag_two = $request->file('image_two');                
        $name_gen = hexdec(uniqid()).'.'.$imag_two->getClientOriginalExtension();
        Image::make($imag_two)->resize(270,270)->save('userfont/images/project/upload/'.$name_gen);       
        $img_url2 = 'userfont/images/project/upload/'.$name_gen;

        $imag_three = $request->file('image_three');                
        $name_gen = hexdec(uniqid()).'.'.$imag_three->getClientOriginalExtension();
        Image::make($imag_three)->resize(270,270)->save('userfont/images/project/upload/'.$name_gen);       
        $img_url3 = 'userfont/images/project/upload/'.$name_gen;

        Project::insert([
            'group_id' => $request->group_id,
            'category_id' => $request->category_id,
            'project_name' => $request->project_name,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'image_one' => $img_url1,
            'image_two' => $img_url2,
            'image_three' => $img_url3,
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->back()->with('success','Project Added');

    }

    // ======================== manage Projects ======================== 
    public function manageProject(){
        $projects = Project::orderBy('id','DESC')->get();
        return view('admin.project.manage',compact('projects'));
    }

    // ======================== edit Project =========== 
    public function editProject($project_id){
        $project = Project::findOrFail($project_id);
        $categories = Category::latest()->get();
        $groups = Group::latest()->get();
        return view('admin.project.edit',compact('project','categories','groups'));
    }


    // ======================== update data =========================== 
    public function updateProject(Request $request){
        $project_id = $request->id;
        Project::findOrFail($project_id)->Update([
            'group_id' => $request->group_id,
            'category_id' => $request->category_id,
            'project_name' => $request->project_name,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'update_at' => Carbon::now(),
        ]);

        return Redirect()->route('manage-projects')->with('success','Project successfully Updated');
    }

    // ----------- update image =-------------- 
    public function updateImage(Request $request){
        $project_id = $request->id;
        $old_one = $request->img_one;
        $old_two = $request->img_two;
        $old_three = $request->img_three;


        if ($request->has('image_one') && $request->has('image_two')) {
            unlink($old_one);
            unlink($old_two);
            $imag_one = $request->file('image_one');                
             $name_gen = hexdec(uniqid()).'.'.$imag_one->getClientOriginalExtension();
             Image::make($imag_one)->resize(270,270)->save('userfont/images/project/upload/'.$name_gen);       
             $img_url1 = 'userfont/images/project/upload/'.$name_gen;
 
             Project::findOrFail($project_id)->update([
                 'image_one' => $img_url1,
                 'updated_at' => Carbon::now(),
             ]);

             $imag_one = $request->file('image_two');                
             $name_gen = hexdec(uniqid()).'.'.$imag_one->getClientOriginalExtension();
             Image::make($imag_one)->resize(270,270)->save('userfont/images/project/upload/'.$name_gen);       
             $img_url1 = 'userfont/images/project/upload/'.$name_gen;
 
             Project::findOrFail($project_id)->update([
                 'image_two' => $img_url1,
                 'updated_at' => Carbon::now(),
             ]);
 
 
             return Redirect()->route('manage-projects')->with('success','image successfully Updated');
         }
         
        if ($request->has('image_one')) {
           unlink($old_one);
           $imag_one = $request->file('image_one');                
            $name_gen = hexdec(uniqid()).'.'.$imag_one->getClientOriginalExtension();
            Image::make($imag_one)->resize(270,270)->save('userfont/images/project/upload/'.$name_gen);       
            $img_url1 = 'userfont/images/project/upload/'.$name_gen;

            Project::findOrFail($project_id)->update([
                'image_one' => $img_url1,
                'updated_at' => Carbon::now(),
            ]);

            return Redirect()->route('manage-projects')->with('success','image successfully Updated');
        }

        if ($request->has('image_two')) {
            unlink($old_two);
            $imag_one = $request->file('image_two');                
             $name_gen = hexdec(uniqid()).'.'.$imag_one->getClientOriginalExtension();
             Image::make($imag_one)->resize(270,270)->save('userfont/images/project/upload/'.$name_gen);       
             $img_url1 = 'userfont/images/project/upload/'.$name_gen;
 
             Project::findOrFail($project_id)->update([
                 'image_two' => $img_url1,
                 'updated_at' => Carbon::now(),
             ]);
 
             return Redirect()->route('manage-projects')->with('success','image successfully Updated');
         }

         if ($request->has('image_three')) {
            unlink($old_three);
            $imag_one = $request->file('image_three');                
             $name_gen = hexdec(uniqid()).'.'.$imag_one->getClientOriginalExtension();
             Image::make($imag_one)->resize(270,270)->save('userfont/images/project/upload/'.$name_gen);       
             $img_url1 = 'userfont/images/project/upload/'.$name_gen;
 
             Project::findOrFail($project_id)->update([
                 'image_three' => $img_url1,
                 'updated_at' => Carbon::now(),
             ]);
 
             return Redirect()->route('manage-projects')->with('success','image successfully Updated');
         }
    }

    // ============= delete Project ============= 
    public function destroy($project_id){
        $image = Project::findOrFail($project_id);
        $img_one = $image->image_one;
        $img_two = $image->image_two;
        $img_three = $image->image_three;
        unlink($img_one);
        unlink($img_two);
        unlink($img_three);

        Project::findOrFail($project_id)->delete();
        return Redirect()->back()->with('delete','successfully Deleted');
    }

     // status inactive 
     public function Inactive($project_id){
        Project::findOrFail($project_id)->update(['status' => 0]);
        return Redirect()->back()->with('status','Project inactive');
    }

    
    // status active 
    public function Active($project_id){
        Project::findOrFail($project_id)->update(['status' => 1]);
        return Redirect()->back()->with('status','Project Activated');
    } 


    //view orders //
    public function viewProject($project_id){
        $project = Project::findOrFail($project_id);
        $categories = Category::latest()->get();
        $groups = Group::latest()->get();
        return view('admin.project.view',compact('project','categories','groups'));
    }
}
