<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function register(){
        return view('register');
    }
    public function welcomeForm(Request $request){
        // dd($request->all());
        $fullname = $request['fname']." ".$request['lname'];
        return view('welcome_form', ['fullname' => $fullname]);
    }
}
