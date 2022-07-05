@extends('layouts.master')
@section('title')
    Create Accessory
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Create Vendor</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <form class="form-detail" action={{route('vendor.store')}} method="post">
                                @csrf
                                @if(count($errors)>0)
                                    @foreach($errors->all() as $error)
                                        <p class = "alert alert-danger">{{$error}}</p>
                                    @endforeach
                                @endif

                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Vendor Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Vendor Name" required>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Remark</label>
                                        <input type="text" class="form-control" name="remark" id="remark" placeholder="Enter the remark">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Address</label>
                                        <input type="text" class="form-control" name="address" id="address" placeholder="Enter the address" required>
                                    </div

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">City</label>
                                        <input type="text" class="form-control" name="city" id="city" placeholder="Enter the city" required>
                                    </div

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">State</label>
                                        <input type="text" class="form-control" name="state" id="state" placeholder="Enter the state" required>
                                    </div

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Country</label>
                                        <input type="text" class="form-control" name="country" id="country" placeholder="Enter the country" required>
                                    </div

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Pin code</label>
                                        <input type="text" class="form-control" name="pin" id="pin" placeholder="Enter the pin" required>
                                    </div

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">GST</label>
                                        <input type="text" class="form-control" name="gst" id="gst" placeholder="Enter the gst" required>
                                    </div

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone</label>
                                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter the phone" required>
                                    </div

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Status</label>

                                        <label class="radio-inline">
                                        <input type="radio" id="status" value="1" name="status">True</label>
                                        
                                       <label class="radio-inline">
                                       <input type="radio" id="status" value="0" name="status">False</label>
                                   </div>


                                    <div class="form-group">

                                    @if(session('Status'))
                                        <p>{{session('Status')}}</p>
                                    @endif
                                    </div>
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
