<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programme;

class ProgrammeController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }
    public function viewAwareness(){
        $programmes = Programme::find(1);
        return view('admin.awarness',['programme' => $programmes]);
    }
    public function viewResearch(){
        $programmes = Programme::find(1);
        return view('admin.research',['programme' => $programmes]);
    }
    public function viewFunds(){
        $programmes = Programme::find(1);
        return view('admin.funds',['programme' => $programmes]);
    }

    public function uploadAwareness(Request $req){
        $programme = Programme::find(1);
        $programme->awareness = $req->content;
        
   
        if($programme->save()){
           $response = 1 ;
               return response()->json($response);
           // return response()->json($req);
        }else{
           $response = 0 ;
               return response()->json($response);
               // return response()->json($req);
        }
    } 
    public function uploadResearch(Request $req){
        $programme = Programme::find(1);
        $programme->research = $req->content;
        
   
        if($programme->save()){
           $response = 1 ;
               return response()->json($response);
           // return response()->json($req);
        }else{
           $response = 0 ;
               return response()->json($response);
               // return response()->json($req);
        }
    }
    public function uploadFund(Request $req){
        $programme = Programme::find(1);
        $programme->fund = $req->content;
        
   
        if($programme->save()){
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
