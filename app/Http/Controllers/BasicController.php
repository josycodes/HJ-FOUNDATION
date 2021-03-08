<?php

namespace App\Http\Controllers;
use App\Models\Basic;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function Submitbasicdata(Request $req){
        $req->validate([
            'sitename' => 'required',
            'sitename1' => 'required',
            'sitedomain' => 'required',
            'sitedomain' => 'required',
            'sitefacebook' => 'required',
            'siteinstagram' => 'required',
            'sitetwitter' => 'required',
            'sitelinkedin' => 'required',
            'sitelocation' => 'required',
            'sitephone' => 'required',
            'siteemail' => 'required',
        ]);
            $basic = new Basic();
            $basic->sitename = $req->sitename;
            $basic->sitename1 = $req->sitename1;
            $basic->sitedomain = $req->sitedomain;
            $basic->sitefacebook = $req->sitefacebook;
            $basic->siteinstagram = $req->siteinstagram;
            $basic->sitetwitter = $req->sitetwitter;
            $basic->sitelinkedin = $req->sitelinkedin;
            $basic->siteaddress = $req->sitelocation;
            $basic->sitephone = $req->sitephone;
            $basic->siteemail = $req->siteemail;
            $basic->sitelogo = 'avatar.png';

            if($basic->save()){
                return redirect()->route('pageinfo')->with('success','Uploaded Successfully!!!');
            }else{
                return redirect()->route('pageinfo')->with('error','Uploaded Failed!!!');
            }

    }
}
