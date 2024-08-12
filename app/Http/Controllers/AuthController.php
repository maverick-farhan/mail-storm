<?php

namespace App\Http\Controllers;

use App\Models\Email;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class AuthController extends Controller
{
    public function signup(Request $request){
        
        $validation = Validator::make(
            $request->all(),
            [
                'email'=>'required|email',
                'password'=>'required',
            ]);
        if($validation->fails()){
            return response()->json([
                'status'=>false,
                'message'=>"validation error",
                'errors'=>$validation->errors()->all()
            ],400);
        }
        $data['user'] = User::create([
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
        return response()->json([
            'status'=>true,
            'message'=>'User Created Successfully',
            'user'=>$data,
        ],200);
    }

    public function login(Request $req){
        $validation = Validator::make(
            $req->all(),
            [
                'email'=>'required|email',
                'password'=>'required'
            ]
            );

        if($validation->fails()){
            return response()->json([
                'status'=>false,
                'message'=>"Not match our record.",
                'errors'=>$validation->errors()->all()
            ],401);
        }
        if(Auth::attempt([
            'email'=>$req->email,
            'password'=>$req->password
        ])){
        return response()->json([
            'status'=>true,
            'user_id'=>$req->user()->id,
            'message'=>'Welcome on board, You logged in.',
            "token"=>$req->user()->createToken('API TOKEN')->plainTextToken,
            'token_type'=>'bearer',
        ],200);
    }
    else{
        return response()->json([
            'status'=>false,
            'message'=>'Email and Password not match our record'   
        ]);
    }
}
public function logout(Request $req){
    $user = $req->user();
    $user->tokens()->delete();
    return response()->json([
        'status'=>true,
        'user'=>$user,
        'message'=>'You are Logged Out successfully.',
    ],200);
}
public function create(Request $request)
    {

        $validation = Validator::make(
            $request->all(),[
                'email'=>'required|email',
            ]);

        if($validation->fails()){
            return response()->json([
                'status'=>false,
                'message'=>"Email can't be created",
                'extra'=>$request->all(),
                'errors'=>$validation->errors()->all(),
            ],400);
        }
            // $email = Email::create([
            //     'name'=>$request->name,
            //     'user_email'=>$request->email,
            //     'user_id'=>Auth::id(),
            // ]);
            $email = DB::table('emails')->insert([
                'user_email' => $request->user_email,
                'name' => $request->name,
                'user_id'=>$request->user()->id,
            ]);

            return response()->json([
                'status'=>true,
                'message'=>'Email created successfully',
                'email'=>$email,
                'user_id'=>$request->user()->id,
            ],200);
    }



}
