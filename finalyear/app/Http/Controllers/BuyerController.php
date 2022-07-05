<?php

namespace App\Http\Controllers;
use App\Buyer;

use Illuminate\Http\Request;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Buyer::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $buyer = Buyer::all();
      // $buyer = Buyer::latest()->get()->id;
        //$buyer = Buyer::orderby('id','Desc')->first()->id;
      //  $latest_code = 'BU000'. ($buyer + 1);
    
       // dd($latest_code);
        return view('admin.buyer');
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
        $buyer = new Buyer();
        $buyer->name = $request->name;
        $buyer->remark = $request->remark;
        $buyer->status = $request->input('status') ? 1 : 0;
        $buyer->save();
        $buyer->code ='BU000'. $buyer->id;
        $buyer->save();
        return redirect("/buyer/create")->with('Status', 'SUCCESS: You have added new buyer.');
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
