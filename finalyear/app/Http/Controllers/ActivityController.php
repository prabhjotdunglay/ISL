<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Activity::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activity = Activity::all();
      
        return view('admin.activity');
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
        $activity = new Activity();
        $activity->name = $request->name;
        $activity->remark = $request->remark;
        $activity->status = $request->input('status') ? 1 : 0;
        $activity->save();
        $activity->code ='AM000'. $activity->id;
        $activity->save();
        return redirect("/activity/create")->with('Status', 'SUCCESS: You have added new activity.');
    }

    public function validation($request){
        return $this->validate($request, [
            'name' => 'required|max:255',
            //'code' => 'required|max:255',
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
