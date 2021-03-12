<?php

namespace App\Http\Controllers;
use App\Models\About;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

   public function UpdateAims(Request $req){
     

     $about = About::find(1);
     $about->aims = $req->content;
     

     if($about->save()){
        $response = 1 ;
            return response()->json($response);
        // return response()->json($req);
     }else{
        $response = 0 ;
            return response()->json($response);
            // return response()->json($req);
     }
   } 
   
   public function UploadVision(Request $req){
     

     $about = About::find(1);
     $about->vision = $req->content;
     

     if($about->save()){
        $response = 1 ;
            return response()->json($response);
        // return response()->json($req);
     }else{
        $response = 0 ;
            return response()->json($response);
            // return response()->json($req);
     }
   }
   
   public function UploadGoal(Request $req){
     

     $about = About::find(1);
     $about->goal = $req->content;

     if($about->save()){
        $response = 1 ;
            return response()->json($response);
        // return response()->json($req);
     }else{
        $response = 0 ;
            return response()->json($response);
            // return response()->json($req);
     }
   } 
   
   public function UploadMission(Request $req){

     $about = About::find(1);
     $about->mission = $req->content;

     if($about->save()){
        $response = 1 ;
            return response()->json($response);
        // return response()->json($req);
     }else{
        $response = 0 ;
            return response()->json($response);
            // return response()->json($req);
     }
   }
   
   public function UploadAbout(Request $req){

     $about = About::find(1);
     $about->about = $req->content;

     if($about->save()){
        $response = 1 ;
            return response()->json($response);
        // return response()->json($req);
     }else{
        $response = 0 ;
            return response()->json($response);
            // return response()->json($req);
     }
   }
}
