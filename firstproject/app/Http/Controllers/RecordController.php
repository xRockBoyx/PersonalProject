<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Record;
use Carbon\Carbon;

class RecordController extends Controller{
    public function GetPage(){
        if(auth::check()){
            $user = auth::user();
            $records = Record::all();
            return view('Record',compact('user','records'));
        }else{
            return redirect('login');
        }
    }
    public function CheckIn(){
        $user = auth::user();
        $time = Carbon::now()->format('y,m,d');
        error_log($time);
        Record::create(['rstu_id'=>$user->stu_id,'time_stamp'=>$time]);
        return redirect('/');
    }
}