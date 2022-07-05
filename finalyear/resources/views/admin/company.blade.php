@extends('layouts.master')
@section('title')
    Create Merchandiser
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Create Merchandiser</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <form class="form-detail" action={{route('company.store')}} method="post">
                                @csrf
                                @if(count($errors)>0)
                                    @foreach($errors->all() as $error)
                                        <p class = "alert alert-danger">{{$error}}</p>
                                    @endforeach
                                @endif

                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Merchandiser Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Merchandiser Name" required>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Address</label>
                                        <input type="text" class="form-control" name="address" id="address" placeholder="Merchandiser Address" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="text" name="email" id="email" class="form-control"  placeholder="Enter Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Password</label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" required>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Confirm Password</label>
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password">

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
