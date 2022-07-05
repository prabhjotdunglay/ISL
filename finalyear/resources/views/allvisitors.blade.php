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
            Basic Datatables <small>basic datatable samples</small>
        </h3>

        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
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
                                <th>
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
                                        <td>
                                            {{$visit->code}}
                                        </td>

                                </tr>
                                </tbody>
                                @endforeach

                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>



@endsection

@section('scripts')


@endsection
