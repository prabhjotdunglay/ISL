<?php

namespace App\Http\Controllers;
use App\Shadeno;
use Illuminate\Http\Request;

class ShadenoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Shadeno::all();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shadeno = Shadeno::all();
        return view('admin.shadeno',compact('shadeno'));
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
        $shadeno = new Shadeno();
        $shadeno->name = $request->name;
        
       // $accessory->status = $request->status;
        $shadeno->status = $request->input('status') ? 1 : 0;
        $shadeno->remark = $request->remark;
        $shadeno->save();
        $shadeno->code ='SN000'. $shadeno->id;
        $shadeno->save();
        
        return redirect("/shadeno/create")->with('Status', 'SUCCESS: You have added new shadeno.');
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
