@extends('layouts.master')
@section('title')
    Create License
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Create License</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">

                            <form class="form-detail" action={{route('license.store')}} method="post">
                                @csrf
                                @if(count($errors)>0)
                                    @foreach($errors->all() as $error)
                                        <p class = "alert alert-danger">{{$error}}</p>
                                    @endforeach
                                @endif
                                <div class="form-group">
                                    <label for="">Company Name</label>
                                    <select name="id" >
                                        @foreach($user as $usr)
                                        <option value = "{{$usr->id}}">{{$usr->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Expiry Date</label>
                                        <input type="date"  name="date" id="date" placeholder="Enter Expiry Date" required>

                                    </div>



                                <div class="form-row-last">
                                    <input type="submit" name="register" class="btn btn-primary" value="Submit">
                                    @if(session('Status'))
                                        <p>{{session('Status')}}</p>
                                    @endif
                                </div>
                                </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection


@section('scripts')

@endsection
