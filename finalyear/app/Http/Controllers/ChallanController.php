<?php

namespace App\Http\Controllers;
use App\Challan;
use Illuminate\Http\Request;

class ChallanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Challan::all();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $challan = Challan::all();
        return view('admin.challan',compact('challan'));
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
        $challan = new Challan();
        $challan->name = $request->name;
        
       // $accessory->status = $request->status;
        $challan->status = $request->input('status') ? 1 : 0;
        $challan->remark = $request->remark;
        $challan->save();
        $challan->code ='CH000'. $challan->id;
        $challan->save();
        return redirect("/challan/create")->with('Status', 'SUCCESS: You have added new challan.');
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
