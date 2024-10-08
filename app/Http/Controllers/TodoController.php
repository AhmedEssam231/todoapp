<?php

namespace App\Http\Controllers;

use App\Models\mytodo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TodoController extends Controller
{
    public function index(){
    $mytodo=mytodo::all();
    $data = compact('mytodo');
    return view('welcome')->with($data);
   }



   public function store (Request $request){
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

public function delete($id){
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

public function show($id){
   $todo=mytodo::find($id);
   $data=compact('todo');
    return view('show')->with($data);

}
  

 

}
