<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function registerForm(){
        if(Auth::check()) {
            return redirect ('/')->with('Status', 'You are already Registered');
        } else {
            return view ('custom.register');
        }

    }

    public function register(Request $request){

    $this->validation($request);
    $request['password'] = bcrypt($request->password); //hashing password

            User::create($request->all());

        return redirect('/')->with('Status', 'You are registered');
        //return $request->all();
    }

    public function validation($request){

        return $this->validate($request, [
            'name' => 'required|max:255',
            'address'=>'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|max:255',

        ]);


    }

}
