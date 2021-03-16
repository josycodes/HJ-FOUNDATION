<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Management;

class ManagementController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function viewManagementTeam(){
        return view('admin.addmanagementteam');
    }
    public function viewAllManagementTeam(){
        $management = Management::all();
        return view('admin.allmanagementteam',['allmembers'=> $management]);
    }
    
    public function uniqueM(){
        $one = 'IMAGE';
        $two = rand(100, 999999999);
        return $one.$two;
    }
    public function addManagement(Request $req){
        $req->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
          ]);
          if ($req->file('image')) {
            
            $filePath = $req->file('image')->store('public/Management Team');
            $imgName = explode('/' , $filePath);
        }
        

        $programme = new Management();

        $programme->unique_id = $this->uniqueM();
        $programme->full_name = $req->name;
        $programme->position = $req->position;
        $programme->email = $req->email;
        $programme->phone = $req->phone;
        $programme->image = end($imgName);

        if($programme->save()){
            $response = 1;
            return response()->json($response);
        }else{
            $response = 0;
            return response()->json($response);
        }
    }
    public function UpdateManagement($id){
        $management = Management::find($id);
        return view('admin.editmanagementteam',['allManagement' => $management]);
    }
    public function editManage(Request $req,$id){
        if($req->image !== "emptyimage.jpg"){
            $req->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif',
              ]);
              if ($req->file('image')) {
                
                $filePath = $req->file('image')->store('public/Management Team');
                $imgName = explode('/' , $filePath);
            }
        $management = Management::find($id);

        $management->full_name = $req->name;
        $management->position = $req->position;
        $management->email = $req->email;
        $management->image = end($imgName);
        $management->phone = $req->phone;

        if($management->save()){
            $response = 1;
            return response()->json($response);
        }else{
            $response = 0;
            return response()->json($response);
        }

        }else{
            $management = Management::find($id);

        $management->full_name = $req->name;
        $management->position = $req->position;
        $management->email = $req->email;
        $management->phone = $req->phone;
    
            if($management->save()){
                $response = 1;
                return response()->json($response);
            }else{
                $response = 0;
                return response()->json($response);
            }

        }
    }
    public function deleteManagement($id){
        $get = Management::find($id);
        if($get->delete()){
            return redirect()->route('All Board of Trustees')->with('success','Data was Deleted Successfully');
        }else{
            return redirect()->route('All Board of Trustees')->with('error','Data was not Deleted');
        }
    }
}
