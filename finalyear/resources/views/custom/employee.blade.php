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
            Create New Employee
        </h3>

        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->

        <form class="form-detail" action={{route('employee.store')}} method="post">
            @csrf
            @if(count($errors)>0)
                @foreach($errors->all() as $error)
                    <p class = "alert alert-danger">{{$error}}</p>
                @endforeach
            @endif

        <div class="portlet-body form">
            <form role="form">
                <div class="form-body">
                    <div class="form-group">
                        <label>Enter Employee Name</label>
                        <div class="input-group">
                            <span class="input-group-addon input-circle-left"></span>
                            <input type="text" name="employeename" id="employeename" class="form-control input-circle-right" placeholder="Employee Name" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <div class="input-group">
											<span class="input-group-addon input-circle-left">
											<i class="fa fa-envelope"></i></span>
                            <input type="text" name="email" id="email" class="form-control input-circle-right" placeholder="Email Address">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Enter phone number</label>
                        <div class="input-group">
                            <span class="input-group-addon input-circle-left"></span>
                            <input type="text" name="phone" id="phone" class="form-control input-circle-right" placeholder="Phone Number" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Department Name</label>
                        <select class="form-control" name="id" >
                            @foreach($depart as $depar)
                            <option value = "{{$depar->id}}">{{$depar->departmentname}}</option>
                        @endforeach
                        </select>
                    </div>

                </div>
                <div class="form-actions">
                    <button type="submit" class="btn blue">Submit</button>
                    <button type="button" class="btn default">Cancel</button>
                    <h3><i> @if(session('Status'))
                                <p>{{session('Status')}}</p></i>
                        @endif</h3>
                </div>
            </form>
        </div>
    </div>





@endsection

@section('scripts')


@endsection
