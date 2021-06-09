@extends('layouts.userfont-master')
@section('user_content')


<!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('userfont') }}/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>My Parlor Appointments</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ asset('/home') }}">Home</a>
                            <span>My Parlor Appointments</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(session('danger'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{session('danger')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>
    @endif
    
    <!-- Breadcrumb Section End -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row"> 
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">How many of you will come?</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($parlors as $parlor)
                                        <tr>
                                            <td>{{ $parlor->appoint_first_name }}</td>
                                            <td>{{ $parlor->quantity }}</td>
                                            <td>{{ $parlor->appoint_email }}</td>
                                            <td>{{ $parlor->appoint_phone }}</td>
                                            <td>{{ $parlor->appoint_date }}</td>
                                            <td>{{ $parlor->appoint_time }}</td>
                                            <td>
                                                @if($parlor->status == 1)
                                                <span class="btn btn-sm btn-success">Appointment Accepted</span>
                                                @elseif($parlor->status == 2)
                                                <span class="btn btn-sm btn-primary">Appointment Completed</span>
                                                @elseif($parlor->status == 3)
                                                <span class="btn btn-sm btn-danger">Appointment Cancelled</span>
                                                @else
                                                <span class="btn btn-sm btn-warning">Appointment Pending</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ url('user/appointdelete/'.$parlor->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
    </section>
@endsection
