<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
class EventController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }
    public function unique_e(){
        $one = 'EVENT';
        $two = rand(100, 999999999);
        return $one.$two;
    }
    public function GetMonth($date){
        $a = explode("/", $date);
        if($a[0]==1){
            return end($a). " "."January";
        }elseif($a[0]==2){
            return end($a). " "."Febuary";
        }elseif($a[0]==3){
            return end($a). " "."March";
        }elseif($a[0]==4){
            return end($a). " "."April";
        }elseif($a[0]==5){
            return end($a). " "."May";
        }elseif($a[0]==6){
            return end($a). " "."June";
        }elseif($a[0]==7){
            return end($a). " "."July";
        }elseif($a[0]==8){
            return end($a). " "."August";
        }elseif($a[0]==9){
            return end($a). " "."September";
        }elseif($a[0]==10){
            return end($a). " "."October";
        }elseif($a[0]==11){
            return end($a). " "."November";
        }elseif($a[0]==12){
            return end($a). " "."December";
        }
    }
    public function addevent(Request $req){
        $req->validate([
            'eventimage' => 'required|image|mimes:jpeg,png,jpg,gif',
          ]);
          if ($req->file('eventimage')) {
            
            $filePath = $req->file('eventimage')->store('public/Event');
            $imgName = explode('/' , $filePath);
        }
        // DATE FORMAT    3/14 09:00 PM - 3/16 05:00 AM
        $datetime = explode("-", $req->eventtime);
        $startdatetime = explode(" ",  $datetime[0]); 
        $enddatetime = explode(" ",  $datetime[1]); 
       

        // GET START TIME MONTH FORMAT
        $startdate = $this->GetMonth($startdatetime[0]);
        //GET END MONTH FORMAT 
        $enddate = $this->GetMonth($enddatetime[1]);

        


        //CHECK IF EVENT IS ON THE SAME DAY OR NOT 
        if($startdatetime[0] == $enddatetime[1]){
            $eventdate = $startdate;
        }else{
            $eventdate = $startdate." - ".$enddate;
        }


        
        $event = new Event();

        $event->unique_id = $this->unique_e();
        $event->title = $req->eventtitle;
        $event->date_time = $req->eventtime;
        $event->starttime = $startdatetime[1]." ".$startdatetime[2];
        $event->endtime = $enddatetime[2]." ".$enddatetime[3];
        $event->event_date = $eventdate;
        $event->location = $req->location;
        $event->content = $req->eventcontent;
        $event->image = end($imgName);

        if($event->save()){
            $response = 1;
            return response()->json($response);
        }else{
            $response = 0;
            return response()->json($response);
        }
    }
    public function viewAllEvent(){
        $events = Event::all();
        return view('admin.allevent' , ['allevents' => $events]);
    }
    public function editevent($id){
        $event = Event::find($id);
        return view('admin.editevent' , ['event' => $event]);
    }

    public function updateEvent(Request $req,$id){

        if($req->eventimage !== "emptyimage.jpg"){
                $req->validate([
                    'eventimage' => 'image|mimes:jpeg,png,jpg,gif',
                ]);
                if ($req->file('eventimage')) {
                    
                    $filePath = $req->file('eventimage')->store('public/Event');
                    $imgName = explode('/' , $filePath);
                }
            // DATE FORMAT    3/14 09:00 PM - 3/16 05:00 AM
            $datetime = explode("-", $req->eventtime);
            $startdatetime = explode(" ",  $datetime[0]); 
            $enddatetime = explode(" ",  $datetime[1]); 
        

            // GET START TIME MONTH FORMAT
            $startdate = $this->GetMonth($startdatetime[0]);
            //GET END MONTH FORMAT 
            $enddate = $this->GetMonth($enddatetime[1]);

            


            //CHECK IF EVENT IS ON THE SAME DAY OR NOT 
            if($startdatetime[0] == $enddatetime[1]){
                $eventdate = $startdate;
            }else{
                $eventdate = $startdate." - ".$enddate;
            }


            
            $event = Event::find($id);

            $event->unique_id = $this->unique_e();
            $event->title = $req->eventtitle;
            $event->date_time = $req->eventtime;
            $event->starttime = $startdatetime[1]." ".$startdatetime[2];
            $event->endtime = $enddatetime[2]." ".$enddatetime[3];
            $event->event_date = $eventdate;
            $event->location = $req->location;
            $event->content = $req->eventcontent;
            $event->image = end($imgName);

            if($event->save()){
                $response = 1;
                return response()->json($response);
            }else{
                $response = 0;
                return response()->json($response);
            }
        }else{
            
            // DATE FORMAT    3/14 09:00 PM - 3/16 05:00 AM
            $datetime = explode("-", $req->eventtime);
            $startdatetime = explode(" ",  $datetime[0]); 
            $enddatetime = explode(" ",  $datetime[1]); 
        

            // GET START TIME MONTH FORMAT
            $startdate = $this->GetMonth($startdatetime[0]);
            //GET END MONTH FORMAT 
            $enddate = $this->GetMonth($enddatetime[1]);

            


            //CHECK IF EVENT IS ON THE SAME DAY OR NOT 
            if($startdatetime[0] == $enddatetime[1]){
                $eventdate = $startdate;
            }else{
                $eventdate = $startdate." - ".$enddate;
            }

            
            $event = Event::find($id);

            $event->unique_id = $this->unique_e();
            $event->title = $req->eventtitle;
            $event->date_time = $req->eventtime;
            $event->starttime = $startdatetime[1]." ".$startdatetime[2];
            $event->endtime = $enddatetime[2]." ".$enddatetime[3];
            $event->event_date = $eventdate;
            $event->location = $req->location;
            $event->content = $req->eventcontent;

            if($event->save()){
                $response = 1;
                return response()->json($response);
            }else{
                $response = 0;
                return response()->json($response);
            }
        }

    }
    public function DeleteEvent($id){
        $del = Event::find($id);

        if($del->delete()){
            return redirect()->route('All-Event')->with('success','Data was Deleted Successfully');
        }else{
            return redirect()->route('All-Event')->with('error','Data was Not Deleted');
        }
    }
}
