<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerEmails;
use App\Http\Controllers\DashboadController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;





Route::prefix('/')->group(function(){
    Route::get('/', function () {
        return view('welcome',['title'=>'Instant Automation Email Marketing Platform']);
    })->name('home');
    Route::get('signup_view',function(){return view('signup',['title'=>'Sign Up']);})->name('signup_view');
    
    Route::get('login_view',function(){return view('login',['title'=>'Login']);})->name('login_view');
    Route::get('pricing',function(){
        return view('pricing',['title'=>'Pricing']);
    })->name('pricing-view');
    Route::get('documentation',function(){
        return view('documentation',['title'=>'Documentation']);
    })->name('documentation-view');
    Route::get('about',function(){
        return view('about',['title'=>'About']);
    })->name('about-view');
});


Route::get('dashboard',[DashboadController::class,'dashboard'])->name('dashboard');

Route::get('indexEmail',[CustomerEmails::class, 'index'])->name('showemail');

Route::get('send-email',[EmailController::class,'sendMail']);
