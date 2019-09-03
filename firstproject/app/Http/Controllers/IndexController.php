<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class IndexController extends Controller{
    

    public function Logout(){
        if (auth::check()){
            auth::logout();
        }
        return redirect('/');
    }
}