@extends('layouts.master')
@section('title')
    Create Accessory
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Create Buying house</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <form class="form-detail" action={{route('buyinghouse.store')}} method="post">
                                @csrf
                                @if(count($errors)>0)
                                    @foreach($errors->all() as $error)
                                        <p class = "alert alert-danger">{{$error}}</p>
                                    @endforeach
                                @endif

                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Buying house Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Buying house Name" required>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Remark</label>
                                        <input type="text" class="form-control" name="remark" id="remark" placeholder="Enter the Remark" >
                                    </div>



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
