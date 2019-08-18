<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
class ArticleController extends Controller
{
    public function PostArticle(Request $request){
        error_log($request->input('title'));
        News::create(['title'=>$request->input('title'),'description'=>$request->input('description')]);
        return view('DataTrainingCenter');
    }
}