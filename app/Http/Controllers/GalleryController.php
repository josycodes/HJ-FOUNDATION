<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }
    public function viewAdminGallery(){
        return view('admin.addgallery');
    }
    public function uploadgalleryimage(Request $req){
        $req->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
          ]);

          if ($req->file('image')) {
            
            $filePath = $req->file('image')->store('public/Gallery');
            $imgName = explode('/' , $filePath);
        }
        $image = new Gallery();
        $image->image = end($imgName);
        if($image->save()){
            $response = 1;
            return response()->json($response);
        }else{
            $response = 0;
            return response()->json($response);
        }  
    }
    public function viewallgallery(){
        $all = Gallery::all();
        return view('admin.viewgallery' , ['image' => $all]);
    }
    public function deletegallery($id){
        $del = Gallery::find($id);

        if($del->delete()){
            return redirect()->route('View-All-Gallery')->with('success','Data was Deleted Successfully');
        }else{
            return redirect()->route('View-All-Gallery')->with('error','Data was not Deleted');
        }
    }
}
