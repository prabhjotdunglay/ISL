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
            List Of Departments
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
                                    Sr.No
                                </th>
                                <th>
                                    Department Name
                                </th>
                                <th>
                                    No of Employees
                                </th>

                                </thead>
                                <tbody>
                                <tr>
                                    @foreach($depart as $depar)

                                    <td>
                                        {{$depar->id}}
                                    </td>
                                    <td>
                                        {{$depar->departmentname}}

                                    </td>
                                    <td>
                                        {{count($depar->employees)}}
                                    </td>

                                </tr>

                            @endforeach
                                </tbody>

                            </table>
                          {{--  {{ $depart->links() }}--}}

                        </div>
                    </div>
                </div>
            </div>

        </div>

@endsection

@section('scripts')


@endsection



