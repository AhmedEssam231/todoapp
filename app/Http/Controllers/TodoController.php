<?php

namespace App\Http\Controllers;

use App\Models\mytodo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TodoController extends Controller
{
function showRegistrationForm(){
    return view('auth.register');
}


function register(Request $request){
  $s= $request->validate([
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
}




   function index(){
    $mytodo=mytodo::all();
    $data = compact('mytodo');
    return view('welcome')->with($data);
   }



   function store (Request $request){
    $request->validate([
        'name' => 'required',
        'work' => 'required',
        'duedate' => 'required'
    ]);
    $todo= new mytodo;
    $todo->name=$request['name'];
    $todo->work=$request['work'];
    $todo->duedate=$request['duedate'];
    $todo->save();
     return redirect(route("home"));
}

function delete($id){
    mytodo::find($id)->delete();
    return redirect(route('home'));
}
   

public function edit($id){
    $todo=mytodo::find($id);
    $data=compact('todo');
    return view("update")->with($data);
}


public function update(Request $request){
    $request->validate(
        [
            'name'=>'required',
            'work'=>'required',
            'duedate'=>'required'
        ]
        );
        $id = $request['id'];
        $todo= mytodo::find($id);            
        $todo->name=$request['name'];
        $todo->work=$request['work'];
        $todo->duedate=$request['duedate'];
        $todo->save();
        return redirect(route("home"));
}

function show($id){
   $todo=mytodo::find($id);
   $data=compact('todo');
    return view('show')->with($data);

}
  

 

}
