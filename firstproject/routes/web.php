<?php

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

Route::get('/', function () {
    //print(config("auth.defaults"));
    //error_log(config("auth.defaults.passwords"));
    return view('form');
});

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
