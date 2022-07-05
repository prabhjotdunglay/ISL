<?php

namespace App\Http\Controllers;
use App\Costinghead;
use Illuminate\Http\Request;

class CostingheadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Costinghead::all();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $costinghead = Costinghead::all();
        return view('admin.costinghead',compact('costinghead'));   
    
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
        $costinghead = new Costinghead();
        $costinghead->name = $request->name;
       // $accessory->status = $request->status;
        $costinghead->status = $request->input('status') ? 1 : 0;
        $costinghead->remark = $request->remark;
        $costinghead->save();
        $costinghead->code ='CA000'. $costinghead->id;
        $costinghead->save();
        
        return redirect("/costinghead/create")->with('Status', 'SUCCESS: You have added new costinghead.');
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
