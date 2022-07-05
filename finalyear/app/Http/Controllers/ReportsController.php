<?php

namespace App\Http\Controllers;

use App\Reception;
use App\User;
use App\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportsController extends Controller
{
    public function index(){

        $user = Auth::id();
        $reception = Reception::where('user_id', '=', $user)->first();
        $visitor = Visitor::where('company_id', '=', $reception->id)->get();
        //dd([$user, $reception->user_id, $visitor]);
        return view('allvisitors')->with('visitor', $visitor);
}

    public function department(){

        return view('bydepartment');

    }

    public function employee(){

        return view('byemployee');
    }
}
