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
            Customer Dashboard <small>Visitor Reports</small>
        </h3>

        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <!-- BEGIN DASHBOARD STATS -->
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat blue-madison">
                    <div class="visual">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            {{count($visitor)}}
                        </div>
                        <div class="desc">
                            Total Visitors
                        </div>
                    </div>
                    <a class="more" href="javascript:;">
                        View more <i class="m-icon-swapright m-icon-white"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat red-intense">
                    <div class="visual">
                        <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            {{count($depart)}}

                        </div>
                        <div class="desc">
                            Total Departments
                        </div>
                    </div>
                    <a class="more" href="javascript:;">
                        View more <i class="m-icon-swapright m-icon-white"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat green-haze">
                    <div class="visual">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            {{count($employee)}}
                        </div>
                        <div class="desc">
                            Total Employee
                        </div>
                    </div>
                    <a class="more" href="javascript:;">
                        View more <i class="m-icon-swapright m-icon-white"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat purple-plum">
                    <div class="visual">
                        <i class="fa fa-globe"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            {{count($code)}}
                        </div>
                        <div class="desc">
                            Code Generated
                        </div>
                    </div>
                    <a class="more" href="javascript:;">
                        View more <i class="m-icon-swapright m-icon-white"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>
                                    Name
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Phone
                                </th>
                                <th class="text-right">
                                    Code
                                </th>
                                </thead>
                                <tbody>
                                <tr>
                                    @foreach($visitor as $visit)
                                    <td>
                                        {{$visit->name}}
                                    </td>
                                    <td>
                                        {{$visit->email}}

                                    </td>
                                    <td>
                                        {{$visit->phone}}
                                    </td>
                                    <td class="text-right">
                                        {{$visit->code}}
                                    </td>
                                </tr>
@endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection

@section('scripts')


@endsection
