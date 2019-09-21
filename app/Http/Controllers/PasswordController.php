<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Suppprt\Facades;
use App\User;

class PasswordController extends Controller
{
    //

    public function index(){
    	return view('changepassword');
    }
    public function update_password(Request $request , $id){
        $id = User::find($id);
        //echo $id;
        $validatedData = $request->validate([
        'password' => ['required', 'string', 'min:6', 'confirmed'],
        $id->password
    ]);
    }
}
