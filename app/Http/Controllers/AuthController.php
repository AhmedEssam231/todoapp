<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
function showRegistrationForm(){
    return view('auth.register');
}


function register(Request $request){
  $request->validate([
        'name'=>'required',
        'email'=>'required|email|unique:users',
        'password' => 'required|min:6'
    ]);
    User::create([
        'name'=>$request->name,
       'email'=>$request->email,
       'password' => Hash::make($request->password)
    ]);
 
    return view('auth.login')->with('success', 'Registration successful');
   
   
}
function showLoginForm(){
    return view('auth.login');
}

function login(Request $request){
    $credentials=$request->only('email','password');

    if(Auth::attempt($credentials)){
        return redirect('/index');
    }
    else{
        return redirect('/')->with('error','Error please try agien enter email and password ');
    }
}}