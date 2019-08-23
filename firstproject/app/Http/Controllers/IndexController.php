<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller{
    
    public function Logout(){
        if (auth::check()){
            auth::logout();
        }
        return redirect('/');
    }

}