<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('signup',[AuthController::class, 'signup'])->name('signing');
Route::post('login',[AuthController::class, 'login'])->name('logging');
Route::post('logout',[AuthController::class, 'logout'])->name('logout')->middleware('auth:sanctum');
Route::post('create',[AuthController::class, 'create'])->middleware('auth:sanctum');
