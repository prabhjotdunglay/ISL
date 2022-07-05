@extends('layouts.master')


@section('title')
    AdminDashboard
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                    <h4 class="card-title"> Registered Companies</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>
                                Id
                            </th>
                            <th>
                                Company Name
                            </th>

                            <th class="text-right">
                                Receptionist Email
                            </th>

                            </thead>
                            <tbody>
                            @foreach($user as $usr)

                                <td>{{$usr->id}}</td>
                                <td>

                                    {{$usr->companyname}}
                                    {{$usr->user_id}}
                                </td>
                                

                                <td class="text-right">
                                    {{$usr->email}}
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
