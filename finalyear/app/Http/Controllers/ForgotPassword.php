<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Sentinel;
use Mail;
use Reminder;

class ForgotPassword extends Controller
{
    public function forgot(){
        return view ('custom.forgot');    }

    public function password(Request $request){
        //dd($request->all());

        $user = User::whereEmail($request->email)->first();
        if($user == null){
          return redirect()->back()->with(['error', 'email not exist']);


        }
        $user = Sentinel::findById($user->id);
        $reminder = Reminder::exists($user) ? : Reminder::create($user);
        $this->sendEmail($user, $reminder->code);
        return redirect()->back()->with(['success'=> 'Reset code sent']);

    }

    public function sendEmail($user, $code){

        Mail::send(
        'email.forgot',
            ['user'=> $user, 'send'=> $code],
            function($message) use ($user){
            $message->to($user->email);
            $message->subject("$user->name, Reset your password.");
            }
        );
    }

    public function reset($email, $code){

        $user = User::whereEmail($email)->first();
        if($user == null){
          echo 'email not exist';

        }
        $user = Sentinel::findById($user->id);
        $reminder = Reminder::exists($user);

        if($reminder){
            if($code ==$reminder->code){
            return view ('email.reset_password_form')->with(['user'=>$user, 'code'=>$code]);

            }
        else{

         return redirect('/');

}
        }else{
            echo 'Time expired';
        }
    }

}
