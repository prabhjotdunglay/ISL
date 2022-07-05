<?php

namespace App\Http\Controllers;

use App\Code;
use App\Department;
use App\Employee;
use App\Reception;
use App\User;
use App\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function admin(){


        $user = User::paginate(4);

        return view('admin.admin', compact('user'));

    }

    public function customer(){



        $user = Auth::id();
        $reception = Reception::where('user_id', '=', $user)->first();
        $visitor = Visitor::where('company_id', '=', $reception->id)->get();
        $depart = Department::where('company_id', '=',$user)->get();
        $employee = Employee::where('company_id', '=', $user)->get();
        $code= Code::all();
        //dd([$user, $reception->user_id, $visitor]);
        return view('custom.customer')->with('visitor', $visitor)->with('user', $user)->with('employee', $employee)->with('depart', $depart)->with('code', $code);
    }
}
