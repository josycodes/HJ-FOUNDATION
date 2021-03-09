<?php

namespace App\Http\Controllers;
use App\Models\Basic;
use RealRashid\SweetAlert\Facades\Alert;



use Illuminate\Http\Request;

class BasicController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function ImageName(){
        $one = 'IMAGE';
        $two = rand(1000,9999);
        return $one.$two;
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
            $basic = Basic::find(1);
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

            if($basic->save()){
                // return redirect()->route('pageinfo')->with('success','Uploaded Successfully!!!');
                $response = ['status'=> 1, 'message' => 'Form Uploaded Successfully'];
                return response()->json($response);
            }else{
                $response = ['status'=> 0, 'message' => 'Form Upload Failed'];
                return response()->json($response);
            }

    } 
    public function submitlogo(Request $req){
        $req->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);

          $basiclogo = Basic::find(1);

          if ($req->file('file')) {
            // $imagePath = $req->file('file');
            // $imageName = $imagePath->ImageName();

            $filePath = $req->file('file')->store('public/logo');
            $imgName = explode('/' , $filePath);
            
            // $path = $req->file('file')->storeAs('logo', $imageName, 'public');
        }

        $basiclogo->sitelogo = end($imgName);
        // $basiclogo->path = '/storage/'.$path;
        $basiclogo->save();
        
        $response = ['status'=> 1, 'message' => 'Image Uploaded Successfully'];
        return response()->json($response);

    }
}
