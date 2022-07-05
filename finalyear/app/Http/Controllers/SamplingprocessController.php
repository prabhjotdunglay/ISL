<?php

namespace App\Http\Controllers;
use App\Samplingprocess;
use Illuminate\Http\Request;

class SamplingprocessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Samplingprocess::all();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $samplingprocess = Samplingprocess::all();
        return view('admin.samplingprocess',compact('samplingprocess'));
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
        $samplingprocess = new Samplingprocess();
        $samplingprocess->name = $request->name;
        
       // $accessory->status = $request->status;
        $samplingprocess->status = $request->input('status') ? 1 : 0;
        $samplingprocess->remark = $request->remark;
        $samplingprocess->save();
        $samplingprocess->code ='SP000'. $samplingprocess->id;
        $samplingprocess->save();
        
        return redirect("/samplingprocess/create")->with('Status', 'SUCCESS: You have added new samplingprocess.');
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
