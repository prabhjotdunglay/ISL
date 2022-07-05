<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User;
use Auth;
use Reception;
class LoginController extends Controller
{

    public function loginForm(){

        if(Auth::check()) {
            return redirect ('/')->with('Status', 'You are already logged In');
        } else {
           // dd('hi');
            return view ('custom.login');
        }

    }


    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required||max:255',
        ]);

        $remember = $request->get('remember');
        // code to be executed if this condition is true;
        $ldat = date('Y-m-d');


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember) && (Auth::user()->expiry < $ldat)) {
            auth()->logout();
            return redirect('/login')->with('Status', 'Account Expired Please Contact Admin');
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember) && ('admin' == Auth::user()->usertype)) {
            return redirect('admin');
        }


        //code to be executed if first condition is false and this condition is true;
        elseif (Auth::attempt(['email' => $request->email, 'password' => $request->passwords], $remember)) {
          //  $cookie = cookie('name', $request->email, 90);
            //dd($cookie);

            return redirect('customer'); //->cookie($cookie);
        }

        if (Auth::guard('hello')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // if successful, then redirect to their intended location
            return redirect('visitor');
        }
        // if unsuccessful, then redirect back to the login with the form data

        //code to be executed if all conditions are false;
        else {
            return redirect('/login')->with('Status', 'EMAIL OR PASSWORD INVALID');
        }

    }

    public function logout(Request $request)
    {

        Auth::logout();
        Auth::guard('hello')->logout();
        return redirect('/login');
//
    }

    public function validation($request){

        return $this->validate($request, [
            'email' => 'required|email|unique:users|max:255',
            'passwords' => 'required|confirmed|max:255',

        ]);


    }
}
