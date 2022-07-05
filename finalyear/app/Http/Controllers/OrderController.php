<?php

namespace App\Http\Controllers;
use App\Order;
use App\Buyer;
use App\Buyinghouse;
use App\User;
use App\Firm;
use App\Transport;
use App\Season;
use App\Currency;
use App\Style;
use App\Shade;
use Auth;

use Illuminate\Http\Request;

class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::id();
        $order = Order::where('merchandiser_id','=', $user)->get();
        return $order;
        dd($order);
        //return view('custom.orders')->with('orders', $orders);   
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $order = Order::all();
        $buyer = Buyer::all();
        $buyinghouse = Buyinghouse::all();
        $firm = Firm::all();
        $transport = Transport::all();
        $season = Season::all();
        $currency = Currency::all();
        $style = Style::all();
        $shade = Shade::all();
        $user= User::all();
        
        return view('admin.order',compact('order','buyer','buyinghouse','user','firm','transport','season','currency','style','shade'));

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
        $order = new Order();
        $order->buyer_id = $request->buyername;
        $order->buyerhouse_id = $request->buyerhouse;
        $order->firm_id = $request->company;
        $order->merchandiser_id = $request->merchandiser_id;
        $order->ordertype_id = $request->ordertype;
        $order->season_id = $request->season;
        $order->currency_id = $request->currency;
        $order->mode_id = $request->mode;
        $order->style_id = $request->style;
        $order->shade_id = $request->shade;
        $order->excess = $request->excess;
        $order->buyerpo = $request->buyerpo;
        $order->totalqty = $request->totalqty;
        $order->rate = $request->rate;
        $order->deliverydate = $request->deliverydate;

        $order->save();
        return redirect("/order/create")->with('Status', 'SUCCESS: You have added new order.');
    }

    public function validation($request){
        return $this->validate($request, [
            'buyer_id' => 'required',
            'buyerhouse_id' => 'required',
            'firm_id' => 'required',
            'merchandiser_id' => 'required',
            'ordertype_id' => 'required',
            'season_id' => 'required',
            'currency_id' => 'required',
            'mode_id' => 'required',
            'style_id' => 'required',
            'shade_id' => 'required',
            'excess' => 'required',
            'buyerpo' => 'required',
            'totalqty' => 'required',
            'rate' => 'required',
            'deliverydate' => 'required',
            
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
