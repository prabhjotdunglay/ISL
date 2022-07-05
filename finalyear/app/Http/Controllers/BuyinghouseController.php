<?php

namespace App\Http\Controllers;
use App\Buyinghouse;
use Illuminate\Http\Request;

class BuyinghouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Buyinghouse::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buyinghouse = Buyinghouse::all();
        return view('admin.buyinghouse',compact('buyinghouse'));
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
        $buyinghouse = new Buyinghouse();
        $buyinghouse->name = $request->name;
       // $accessory->status = $request->status;
        $buyinghouse->status = $request->input('status') ? 1 : 0;
        $buyinghouse->remark = $request->remark;

        $buyinghouse->save();
        $buyinghouse->code ='BH000'. $buyinghouse->id;
        $buyinghouse->save();
        return redirect("/buyinghouse/create")->with('Status', 'SUCCESS: You have added new buying house.');
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
