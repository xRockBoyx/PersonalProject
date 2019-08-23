<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
class ArticleController extends Controller
{
    public function PostArticle(Request $request){
        error_log($request);
        News::create(['title'=>$request->input('title'),'description'=>$request->input('description')]);
        
        return redirect('DataTrainingCenter');
    }
    public function EditArticle($id){
        $news = News::find($id);
        // error_log($news);
        return view('ArticleEdit',compact('news'));
    }
    public function UpdateArticle(Request $request,$id){
        $new = News::find($id);
        //error_log($new);
        $new->title = $request->input('title');
        error_log($request->input('title'));
        $new->description = $request->input('description');
        $new->save();
        return redirect('DataTrainingCenter');
    }
}