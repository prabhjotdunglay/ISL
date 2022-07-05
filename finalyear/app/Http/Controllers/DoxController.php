<?php

namespace App\Http\Controllers;
use App\Dox;
use Illuminate\Http\Request;

class DoxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Dox::all();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dox = Dox::all();
        return view('admin.dox',compact('dox'));
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
        $dox = new Dox();
        $dox->name = $request->name;
        
       // $accessory->status = $request->status;
        $dox->status = $request->input('status') ? 1 : 0;
        $dox->remark = $request->remark;

        $dox->save();
        $dox->code ='DX000'. $dox->id;
        $dox->save();
        
        return redirect("/dox/create")->with('Status', 'SUCCESS: You have added new dox.');
    }

    public function validation($request){
        return $this->validate($request, [
            'name' => 'required|max:255',
            
            'status' => 'required',
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
