<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * @return View
     */
    public function signup(){
        return view('signup',['title'=>'Sign Up']);
    }
    /**
     * @return View
     */
    public function login(){
        return view('login',['title'=>'Login']);
    }

    public function register(Request $req){
        $validate = $req->validate([
            'email'=>'required|email',
            'password'=>"required|confirmed",
        ]);
        $user = User::create([
            'email'=>$req->email,
            'password'=>$req->password
        ]);
        if($user){
            return redirect()->route('login');
        }
    }

    public function logging(Request $req){
        $validate = $req->validate([
            'email'=>'required|email',
            'password'=>"required",
        ]);
        if(Auth::attempt($validate)){
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->route('login')->with('status',"Login credentials does'nt match our record");
        }
    }
    /**
     * @return View|<missing>
     */
    public function dashboard(){
        if(Auth::check()){
            return view('dashboard.dashboard');
        }
        else{
            return redirect()->route('login');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
