<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prodline;
class ProdlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Prodline::all();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodline = Prodline::all();
        return view('admin.prodline',compact('prodline'));
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
        $prodline = new Prodline();
        $prodline->name = $request->name;
        
       // $accessory->status = $request->status;
        $prodline->status = $request->input('status') ? 1 : 0;
        $prodline->remark = $request->remark;
        $prodline->save();
        $prodline->code ='PL000'. $prodline->id;
        $prodline->save();
        
        return redirect("/prodline/create")->with('Status', 'SUCCESS: You have added new prodline.');
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
