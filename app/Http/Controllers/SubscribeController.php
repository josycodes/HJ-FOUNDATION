<?php

namespace App\Http\Controllers;
use App\Models\Subscribe;

use Illuminate\Http\Request;


class SubscribeController extends Controller
{
    function __construct(){
        $this->middleware('auth',['except'=> ['hashEmail','subscribeemail']]);
    }
    public function hashEmail(){
        $one = 'EMAILID';
        $two = uniqid();
        $three = rand(10,999999999999999);
        return $one.$two.$three;
    }
    public function subscribeemail(Request $req){
        $req->validate(['email'=>'required']);

        $email = new Subscribe();

        $email->unique_id = $this->hashEmail();
        $email->email = $req->email;
        $email->subscribe = 'subscribe';
    
        if($email->save()){
            $response = 1;
            return response()->json($response);
        }else{
            $response = 0;
            return response()->json($response);
        }

    }
}
