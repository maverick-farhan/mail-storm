<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboadController extends Controller
{
        public function dashboard(){
            return view("dashboard.dashboard");
        // if(Auth::check()){
        //     return view('dashboard.dashboard');
        // }
        // else{
        //     return redirect()->route('login');
        // }
    }
}
