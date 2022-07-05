@extends('layouts.masterc')


@section('title')
    CustomerDashboard
@endsection


@section('content')
    <div class="page-content">

        <div class="theme-panel hidden-xs hidden-sm">

            <div class="theme-options">

            </div>
        </div>
        <!-- END STYLE CUSTOMIZER -->
        <!-- BEGIN PAGE HEADER-->
        <h3 class="page-title">
           Create New Department

        </h3>

        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->

        <form class="form-detail" action={{route('department.store')}} method="post">
            @csrf
            @if(count($errors)>0)
                @foreach($errors->all() as $error)
                    <p class = "alert alert-danger">{{$error}}</p>
                @endforeach
            @endif

        <div class="portlet-body form">
            <form role="form">

                    <div class="form-group">
                        <label>Enter Department Name</label>
                        <div class="input-group">
											<span class="input-group-addon "></span>
                            <input type="text" name="departmentname" id="departmentname" class="form-control input-circle-right" placeholder="Department Name" >
                        </div>
                    </div>

                <input type="submit" name="submit" class="btn btn-primary" value="Submit">

            </form>
            <a class="btn default" href="/customer">Cancel</input>
            </a>
           <h3><i> @if(session('Status'))
                <p>{{session('Status')}}</p></i>
            @endif</h3>
        </div>






@endsection

@section('scripts')


@endsection
