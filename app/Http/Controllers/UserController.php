<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function index($id){
    	$id = User::find($id); 
    	return view('profile')->with('id',$id);
    }
    public function update(Request $request , $id){
    	$validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required',
    ]);
        $id = User::find($id);
        $id->name = $request->name;
        $id->email = $request->email;
        $id->save();
        return redirect('home');
    }
}
