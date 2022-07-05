@extends('layouts.master')
@section('title')
    Create Order
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Create Order</h4>
                    <form class="form-detail" action={{route('order.store')}} method="post">
                    @csrf
                        @if(count($errors)>0)
                            @foreach($errors->all() as $error)
                                <p class = "alert alert-danger">{{$error}}</p>
                    @endforeach
                    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">

                            <form>
                                <div class="form-group">
                                    <label for="">Buyer Name</label>
                                    <select name = "buyername" id = "buyername" required>
                                        <option value ="Choose Company" >Choose Buyer</option>
                                        @foreach($buyer as $buy)
                                            <option value = "{{$buy->id}}">{{$buy->name}} </option>

                                        @endforeach
                                    </select>
                                    <label for="">Buyer house</label>
                                    <select name = "buyerhouse" id = "buyerhouse" required>
                                        <option value = "Choose Company">Choose Buyer house</option>
                                        @foreach($buyinghouse as $buyerhou)
                                            <option value = "{{$buyerhou->id}}">{{$buyerhou->name}}</option>

                                        @endforeach
                                    </select>
                                    <label for="">Company Name</label>
                                    <select name = "company" id = "company" required>
                                        <option value = "Choose Company">Choose company</option>
                                        @foreach($firm as $fir)
                                            <option value = "{{$fir->id}}">{{$fir->name}}</option>

                                        @endforeach
                                    </select>

                                </div>
                        

                                <div class="form-group">
                                    <label for="">Meerchandiser Name</label>
                                    <select name = "merchandiser_id" id = "merchandiser_id" required>
                                        <option value = "Choose Company">Choose Meerchandiser</option>
                                        @foreach($user as $us)
                                            <option value = "{{$us->id}}">{{$us->name}}</option>

                                        @endforeach
                                    </select>

                                    <label for="">Order type</label>
                                    <select name = "ordertype" id = "ordertype" required>
                                        <option value = "Choose Company">Order type</option>
                                        <option value="sample">Sample</option>
                                        <option value="production">Production</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Season</label>
                                    <select name = "season" id = "season" required>
                                        <option value = "Choose Company">Season</option>
                                        @foreach($season as $sea)
                                            <option value = "{{$sea->id}}">{{$sea->name}}</option>

                                        @endforeach
                                    </select>

                                    <label for="">Currency</label>
                                    <select name = "currency" id = "currency" required>
                                        <option value = "Choose Company">Currency</option>
                                        @foreach($currency as $curren)
                                            <option value = "{{$curren->id}}">{{$curren->name}}</option>

                                        @endforeach
                                    </select>

                                    <label for="">Mode</label>
                                    <select name = "mode" id = "mode" required>
                                        <option value = "Choose Company">Mode</option>
                                        @foreach($transport as $tran)
                                            <option value = "{{$tran->id}}">{{$tran->name}}</option>

                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Style</label>
                                    <select name = "style" id = "style" required>
                                        <option value = "Choose Company">Style</option>
                                        @foreach($style as $sty)
                                        <option value = "{{$sty->id}}">{{$sty->name}}</option>

                                    @endforeach
                                    </select>

                                    <label for="">Shade</label>
                                    <select name = "shade" id = "shade" required>
                                        <option value = "Choose Company">Shade</option>
                                        @foreach($shade as $sha)
                                        <option value = "{{$sha->id}}">{{$sha->name}}</option>

                                    @endforeach
                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Excess</label>
                                    <input type="text" class="form-control" name="excess" id="excess" placeholder="Enter Exess amount" required>

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Buyer PNO</label>
                                    <input type="text" class="form-control" name="buyerpo" id="buyerpo" placeholder="Enter Buyer PNO" required>

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Quantity</label>
                                    <input type="text" class="form-control" name="totalqty" id="totalqty" placeholder="Enter Quantity" required>

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Rate</label>
                                    <input type="text" class="form-control" name="rate" id="rate" placeholder="Enter Rate" required>

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Delivery Date</label>
                                    <input type="date" class="form-control" name="deliverydate" id="deliverydate" placeholder="Delivery Date" required>

                                </div>
                                

                                @if(session('Status'))
                                    <p>{{session('Status')}}</p>
                                @endif
                                <div class="form-row-last">
                                    <input type="submit" name="register" class="btn btn-primary" value="Register">

                                </div>
                                <form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection


@section('scripts')

@endsection
