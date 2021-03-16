<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }
    public function viewAdminVolunteer(){
        $all = Member::find(1);
        return view('admin.volunteeroppurtunities', ['volunteer' => $all]);
    }
    public function viewAdminCategory(){
        $all = Member::find(1);
        return view('admin.membershipcategory', ['membercategory' => $all]);
    }
    public function viewAdminBenefits(){
        $all = Member::find(1);
        return view('admin.membershipbenefits', ['memberbenfits' => $all]);
    }
    public function updateVolunteer(Request $req){
        $volunteer = Member::find(1);
        $volunteer->volunteer_oppurtunities = $req->content;
        
   
        if($volunteer->save()){
           $response = 1 ;
               return response()->json($response);
           // return response()->json($req);
        }else{
           $response = 0 ;
               return response()->json($response);
               // return response()->json($req);
        }
    } 
    public function updatemember(Request $req){
        $member = Member::find(1);
        $member->member_cat = $req->content;
        
   
        if($member->save()){
           $response = 1 ;
               return response()->json($response);
           // return response()->json($req);
        }else{
           $response = 0 ;
               return response()->json($response);
               // return response()->json($req);
        }
    }
    public function updatememberbenefit(Request $req){
        $member = Member::find(1);
        $member->benefit = $req->content;
        
   
        if($member->save()){
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
