<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }
    public function newsID(){
        $one = 'NEWS';
        $two = rand(100,999999999);
        return $one.$two;
    }
    public function createnews(Request $req){
        $req->validate([
            'newsimage' => 'image|mimes:jpeg,png,jpg,gif',
        ]);
        if ($req->file('newsimage')) {
                
            $filePath = $req->file('newsimage')->store('public/news');
            $imgName = explode('/' , $filePath);
        }
        $news = new News();

        $news->unique_id = $this->newsID();
        $news->category = $req->newscat;
        $news->title = $req->newstitle;       
        $news->image = end($imgName);
        $news->content = $req->newscontent;
        $news->poster = $req->newsposter;       

        if($news->save()){
            $response = 1;
            return response()->json($response);
        }else{
            $response = 0;
            return response()->json($response);
        }
    
    }
    public function viewAllNews(){
        $allnews = News::all();
        return view('admin.allnews' , ['news' => $allnews]);
    }
    public function editNews($id){
        $allnews = News::find($id);
        return view('admin.editnews' , ['news' => $allnews]);
    }
    public function updateNews(Request $req,$id){
        $req->validate([
            'newsimage' => 'image|mimes:jpeg,png,jpg,gif',
        ]);
        if ($req->file('newsimage')) {
                
            $filePath = $req->file('newsimage')->store('public/news');
            $imgName = explode('/' , $filePath);
        }
        $news = News::find($id);

        $news->category = $req->newscat;
        $news->title = $req->newstitle;       
        $news->image = end($imgName);
        $news->content = $req->newscontent;
        $news->poster = $req->newsposter;       
        
        if($news->save()){
            $response = 1;
            return response()->json($response);
        }else{
            $response = 0;
            return response()->json($response);
        }
    }
    public function deleteNews($id){
        $delNews = News::find($id);

        if($delNews->delete()){
            return redirect()->route('All-News')->with('success','News was Deleted Successfully');
        }else{
            return redirect()->route('All-News')->with('error','News was Not Deleted');
        }
    }
}
