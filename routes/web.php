<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::prefix('/')->group(function(){
    Route::get('/', function () {
        return view('welcome',['title'=>'Instant Automation Email Marketing Platform']);
    })->name('home');
    Route::get('pricing',function(){
        return view('pricing',['title'=>'Pricing']);
    })->name('pricing-view');
    Route::get('documentation',function(){
        return view('documentation',['title'=>'Documentation']);
    })->name('documentation-view');
    Route::get('about',function(){
        return view('about',['title'=>'About']);
    })->name('about-view');
    
    Route::get('dashboard',function(){
        return view('dashboard.dashboard');
    })->name('dashboard');
});


Route::get('signup',[UserController::class,'signup'])->name('signup');
Route::post('register',[UserController::class,'register'])->name('register');

Route::get('login',function(){
    return view('login',['title'=>'Login']);
})->name('login');
Route::post('logging',[UserController::class,'logging'])->name('logging');
Route::get('dashboard',[UserController::class,'dashboard'])->name('dashboard');
Route::get('logout',[UserController::class, 'logout'])->name('logout');