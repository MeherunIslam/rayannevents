<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Position;
use App\Apply;
use Carbon\Carbon;

class CareerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function storeApply(Request $request){

        $apply = new Apply;
        if($request->file('file')){
            $file=$request->file('file');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $request->file->move('userfont/document/',$filename);
            $apply->file=$filename;
        }
        $apply->apply_name = $request->apply_name;
        $apply->apply_contact = $request->apply_contact;
        $apply->apply_email = $request->apply_email;
        $apply->position_id = $request->position_id;
        $apply->save();

        return Redirect()->back()->with('success','Your Application Submitted Succeffully');
    }


    // ============= show Application =============
    public function show($apply_id)
    {
        /* $apply=Apply::find($id); */
        $apply = Apply::findOrFail($apply_id);
        $positions = Position::latest()->get();
        return view('admin.document_details',compact('apply','positions'));
    }

    // ============= download Resume =============
    public function download($file)
    {
        return response()->download('userfont/document/'.$file);
    }

    // ============= delete Application ============= 
    public function delete($apply_id){
        Apply::findOrFail($apply_id)->delete();
        return Redirect()->back()->with('delete','successfully Deleted');
    }

    // --------------------- add Position ------------------ 
    public function addPosition(){
        return view('admin.position.add');
    }


    // ===================== store Positions ================== 
    public function storePosition(Request $request){

        $request->validate([
            'position_name' => 'required|max:255',
            'short_description' => 'required',
            'long_description' => 'required',
        ]);

        Position::insert([
            'position_name' => $request->position_name,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->back()->with('success','Position Added');

    }

    // ======================== manage Positions ======================== 
    public function managePosition(){
        $positions = Position::orderBy('id','DESC')->get();
        return view('admin.position.manage',compact('positions'));
    }

    // ======================== edit Position =========== 
    public function editPosition($position_id){
        $position = Position::findOrFail($position_id);
        return view('admin.position.edit',compact('position'));
    }


    // ======================== update data =========================== 
    public function updatePosition(Request $request){
        $position_id = $request->id;
        Position::findOrFail($position_id)->Update([
            'position_name' => $request->position_name,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'update_at' => Carbon::now(),
        ]);

        return Redirect()->route('manage-positions')->with('success','Position successfully Updated');
    }

    // ============= delete Position ============= 
    public function destroy($position_id){
        Position::findOrFail($position_id)->delete();
        return Redirect()->back()->with('delete','successfully Deleted');
    }

     // status inactive 
     public function Inactive($position_id){
        Position::findOrFail($position_id)->update(['status' => 0]);
        return Redirect()->back()->with('status','Position inactive');
    }

    
    // status active 
    public function Active($position_id){
        Position::findOrFail($position_id)->update(['status' => 1]);
        return Redirect()->back()->with('status','Position Activated');
    } 


    //view orders //
    public function viewPosition($position_id){
        $position = Position::findOrFail($position_id);
        return view('admin.position.view',compact('position'));
    }
}
