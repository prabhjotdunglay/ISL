@extends('layouts.master')


@section('title')
    AdminDashboard
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Enquiries</h4>
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
                                Contact Number
                            </th>
                            <th>
                                Details
                            </th>
                            </thead>
                            <tbody>

                            @foreach($lead as $leads)

                            <td>

                                    {{$leads->name}}
                                </td>
                                <td>
                                    {{$leads->email}}
                                </td>
                                <td>
                                    {{$leads->number}}
                                </td>
                                <td>
                                    {{$leads->query}}

                                </td>
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
