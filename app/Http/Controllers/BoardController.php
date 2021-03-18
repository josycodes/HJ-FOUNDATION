<?php

namespace App\Http\Controllers;
use App\Models\Board;

use Illuminate\Http\Request;

class BoardController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    public function viewAllbot(){
        $board = Board::all();
        return view('admin.allboardoftrustees',['boards'=>$board]);
    }
    public function CreateBot(Request $req){
        $req->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
          ]);
          if ($req->file('image')) {
            
            $filePath = $req->file('image')->store('public/board');
            $imgName = explode('/' , $filePath);
        }
        

        $board = new Board();

        $board->name = $req->name;
        $board->position = $req->position;
        $board->image = end($imgName);
        $board->about = $req->about;

        if($board->save()){
            $response = 1;
            return response()->json($response);
        }else{
            $response = 0;
            return response()->json($response);
        }
    }
    public function editBoard($id){
        $board = Board::find($id);
        return view('admin.editboardoftrustee',['boards'=>$board]);
    }

    public function updateBot(Request $req,$id){
        if($req->image !== "emptyimage.jpg"){
            $req->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif',
              ]);
              if ($req->file('image')) {
                
                $filePath = $req->file('image')->store('public/board');
                $imgName = explode('/' , $filePath);
            }
        $board = Board::find($id);

        $board->name = $req->name;
        $board->position = $req->position;
        $board->image = end($imgName);
        $board->about = $req->about;

        if($board->save()){
            $response = 1;
            return response()->json($response);
        }else{
            $response = 0;
            return response()->json($response);
        }

        }else{
            $board = Board::find($id);
            $board->name = $req->name;
            $board->position = $req->position;
            $board->about = $req->about;
    
            if($board->save()){
                $response = 1;
                return response()->json($response);
            }else{
                $response = 0;
                return response()->json($response);
            }

        }

    }
    public function deleteBot($id){
        $get = Board::find($id);
        if($get->delete()){
            return redirect()->route('All-Board-of-Trustees')->with('success','Data was Deleted Successfully');
        }else{
            return redirect()->route('All-Board-of-Trustees')->with('error','Data was not Deleted');
        }
    }
}
