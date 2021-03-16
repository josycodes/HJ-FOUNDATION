<?php

namespace App\Http\Controllers;
use App\Models\Basic;
use App\Models\About;
use App\Models\Board;
use App\Models\CurrencyRateModel;
use RealRashid\SweetAlert\Facades\Alert;



use Illuminate\Http\Request;

class BasicController extends Controller
{
    function __construct()
    {
        $this->middleware('auth',['except'=> ['viewIndex','viewAbout','viewAims','viewBot','viewManagement','viewFaq','viewGallery','viewEvents','findEvent','viewNews','findNews','viewAwarness','viewResearch','viewFunds','viewMemeber','viewMemeberForm','viewContact','viewDonate']]);
    }
    public function viewIndex(){
        $basic = Basic::find(1);
        return view('pages.index', ['allbasics' => $basic]);
    }
    public  function viewAbout(){
        $basic = Basic::find(1);
        return view('pages.about', ['allbasics' => $basic]);
    }
    public function viewAims() {
        $basic = Basic::find(1);
        $about = About::find(1);
        return view('pages.aims-objectives', ['allbasics' => $basic], ['abouts' => $about]);
    }
    public function viewBot() {
        $basic = Basic::find(1);
        return view('pages.board-of-trustees', ['allbasics' => $basic]);
    }
    public function viewManagement() {
        $basic = Basic::find(1);
        return view('pages.management-team', ['allbasics' => $basic]);
    }
    public function viewFaq() {
        $basic = Basic::find(1);
        return view('pages.faq', ['allbasics' => $basic]);
    }
    public function viewGallery() {
        $basic = Basic::find(1);
        return view('pages.gallery', ['allbasics' => $basic]);
    }
    public function viewEvents() {
        $basic = Basic::find(1);
        return view('pages.events', ['allbasics' => $basic]);
    }
    public function findEvent() {
        $basic = Basic::find(1);
        return view('pages.event-detail', ['allbasics' => $basic]);
    }
    public function viewNews() {
        $basic = Basic::find(1);
        return view('pages.news', ['allbasics' => $basic]);
    }
    public function findNews() {
        $basic = Basic::find(1);
        return view('pages.news-detail', ['allbasics' => $basic]);
    }
    public function viewAwarness() {
        $basic = Basic::find(1);
        return view('pages.awareness', ['allbasics' => $basic]);
    }
    public function viewResearch() {
        $basic = Basic::find(1);
        return view('pages.research', ['allbasics' => $basic]);
    }
    public function viewFunds() {
        $basic = Basic::find(1);
        return view('pages.fund-raising', ['allbasics' => $basic]);
    }
    public function viewMemeber() {
        $basic = Basic::find(1);
        return view('pages.membership-categories', ['allbasics' => $basic]);
    }
    public function viewBenefits() {
        $basic = Basic::find(1);
        return view('pages.benefits-to-members', ['allbasics' => $basic]);
    }
    public function viewMemeberForm() {
        $basic = Basic::find(1);
        return view('pages.membership-application-forms', ['allbasics' => $basic]);
    }
    public function viewVolunteer() {
        $basic = Basic::find(1);
        return view('pages.volunteer-opportunities', ['allbasics' => $basic]);
    }
    public function viewContact() {
        $basic = Basic::find(1);
        return view('pages.contact', ['allbasics' => $basic]);
    }
    public function viewDonate(){
        $about = About::find(1);
        $currency = CurrencyRateModel::all();
        $base = [];
        foreach ($currency as $key) {
            
            if(in_array($key->second_currency,$base)){
                continue;
            }else{
                array_push($base,$key->second_currency);
            }
            
        }      

        return view('pages.donate',['allbasics' => $about, 'currency' => $base]);
    }
    public function viewAdminGoal() {
        $about = About::find(1);
        return view('admin.goal',['abouts' => $about]);
    }
    public function viewVision() {
        $about = About::find(1);
        return view('admin.vision',['abouts' => $about]);
    }
    public function viewAdminAbout() {
        $about = About::find(1);
        return view('admin.about',['abouts' => $about]);
    }
    public function viewAboutAims() {
        $about = About::find(1);
        return view('admin.aims',['abouts' => $about]);
    }
    public function viewAdminMission(){
        $about = About::find(1);
        return view('admin.mission',['abouts' => $about]);
    }
    public function viewAdminPageinfo() {
        $basic = Basic::find(1);
        return view('admin.pageinfo',['allbasics' => $basic]);
    }
    public function viewAllBoards(){
        $allboards = Board::all();
        return view('admin.allboardoftrustees',['boards' => $allboards]);
    }
    public function editBoard($id){
        $allboards = Board::find($id);
        return view('admin.editboardoftrustee',['boards' => $allboards]);
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
