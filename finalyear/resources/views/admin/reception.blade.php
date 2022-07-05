@extends('layouts.master')
@section('title')
    Create Reception
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Create Reception</h4>
                    <form class="form-detail" action={{route('reception.store')}} method="post">
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
                                    <label for="">Company Name</label>
                                    <select name = "id" id = "id">
                                        <option value = "Choose Company">Choose Company</option>
                                        @foreach($user as $usr)
                                            <option value = "{{$usr->id}}">{{$usr->name}}</option>

                                        @endforeach


                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="text" name="email" id="email" class="form-control"  placeholder="Enter Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Your Password" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Confirm Password</label>
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password">
                                    </div>
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
