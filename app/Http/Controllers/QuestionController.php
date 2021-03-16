<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
   function __construct(){
    $this->middleware('auth');
    }

    public function viewQuestions(){
        return view('admin.frequentlyaskedquestions');
    }
    public function createquestion(Request $req){
        $ques = new Question();
        $ques->question = $req->question;
        $ques->answer = $req->answer;

        if($ques->save()){
            $response = 1;
            return response()->json($response);
        }else{
            $response = 0;
            return response()->json($response);
        }
    }
    public function viewAllQuestions(){
        $ques = Question::all();
        return view('admin.allquestions',['allquestions' => $ques]);
    }
    public function vieweditquestion($id){
        $ques = Question::find($id);
        return view('admin.editquestion',['question' => $ques]);
    }
    public function editquestion(Request $req,$id){
        $ques = Question::find($id);
        $ques->question = $req->question;
        $ques->answer = $req->answer;

        if($ques->save()){
            $response = 1;
            return response()->json($response);
        }else{
            $response = 0;
            return response()->json($response);
        }
    }public function deletequestion($id){
        $ques = Question::find($id);

        if($ques->delete()){
            return redirect()->route('View-All-Frequently-Asked-Questions')->with('success','Data was Deleted Successfully');
        }else{
            return redirect()->route('View-All-Frequently-Asked-Questions')->with('error','Data was not Deleted');
        }
    }
}
