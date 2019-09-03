<?php
use App\News;
use Carbon\Carbon;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function (){
    //print(config("auth.defaults"));
    //error_log(config("auth.defaults.passwords"));
    error_log(date('Y,m,d'));
    return view('index');
})->name('index.returnView');
Route::get('/Logout','IndexController@Logout')->name('index.Logout');
// Route::get('/insert',function(){
//     DB::insert('insert into news(title,description) values(?, ?)',['最新消息','這是一則勁爆的消息']);
// });
Route::get('/read',function(){
    $posts = News::all();
    
    foreach($posts as $post){
        error_log($posts);
        print($post->title);
        // return $post->title;
    };
});
Route::get('/DataTrainingCenter',function(){
    return view('DataTrainingCenter',['posts' => News::all()]);
});
Route::get('/DataTrainingCenter/Article',function(){
    return view('Article');
});
Route::post('/DataTrainingCenter/Article','ArticleController@PostArticle');
Route::get('/Api',function(){
    return view('Api');
});
Route::post('/DataTrainingCenter/ArticleEdit/{id}',['uses'=>'ArticleController@UpdateArticle']);
Route::get('/DataTrainingCenter/ArticleEdit/{id}',['uses'=>'ArticleController@EditArticle']);
Route::get('/ParseNews','PythonScriptController@ParseTitle');
Route::get('/Record',['uses'=>'RecordController@GetPage']);
Route::get('/Record1',['uses'=>'RecordController@CheckIn']);
//1號路由
// Route::get('/users/{id?}',function($id=null){
//     if(!is_null($id)){
//         //如果有id就重導向至/student/profile
//         return redirect()->route('profile');
//     }else{
//         return '無使用者資料';
//     }
// });


// //2號路由
// Route::get('/student/profile',function(){
//     return '已查到使用者資料';
// })->name('profile');

// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//         return 'hello';
//         // 使用 first 和 second 中間件
//     });

//     Route::get('user/profile', function () {
//         return 'hello1';
//         // 使用 first 和 second 中間件
//     });
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
