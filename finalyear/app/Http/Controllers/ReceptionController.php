<?php

namespace App\Http\Controllers;
use App\User;
use App\Reception;
use Illuminate\Http\Request;

class ReceptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()

        {
            $user = Reception::all();

            return view('admin.receptionists', compact('user'));


        }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();

        return view('admin.reception', compact('user'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validation($request);
        $request['password'] = bcrypt($request->password); //hashing password

//        $reception = Reception::find($request->id);
//        Reception::create($request->all());
//        return $reception;
        $reception = new Reception();
       // $reception->companyname =$request->companyname;
        $reception->email = $request->email;
        $reception->password = $request->password;
        $reception->user_id = $request->id;
        $reception->save();
        return redirect('reception/create')->with('Status', 'SUCCESS: You have registered company reception');

        //return $request->all();

    }


    public function validation($request){

        return $this->validate($request, [
            'id' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|max:255',

        ]);


    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
