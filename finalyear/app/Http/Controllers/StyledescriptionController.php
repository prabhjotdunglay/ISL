<?php

namespace App\Http\Controllers;
use App\Styledescription;
use Illuminate\Http\Request;

class StyledescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Styledescription::all();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $styledescription = Styledescription::all();
        return view('admin.styledescription',compact('styledescription'));
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
        $styledescription = new Styledescription();
        $styledescription->name = $request->name;
        
       // $accessory->status = $request->status;
        $styledescription->status = $request->input('status') ? 1 : 0;
        $styledescription->remark = $request->remark;
        $styledescription->save();
        $styledescription->code ='ST000'. $styledescription->id;
        $styledescription->save();
        
        return redirect("/styledescription/create")->with('Status', 'SUCCESS: You have added new styledescription.');
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
