<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Leads;
use Auth;
class LeadsController extends Controller
{

    public function leadsForm()
    {
        if (Auth::check()) {
            return redirect('customer');
        } else {
            return view('welcome');
        }
    }
        public function leads(Request $request){

        $leads = new Leads();
        $leads->name = $request->name;
        $leads->email =$request->email;
        $leads->number =$request->contactno;
        $leads->query =$request->message;

        $leads->save();

        return redirect('/')->with('Status', 'Your Enquiry has been sent');

    }

    public function enquiry(){

        $lead = Leads::all();

        return view('/admin.enquiry', compact('lead'));
    }
}
