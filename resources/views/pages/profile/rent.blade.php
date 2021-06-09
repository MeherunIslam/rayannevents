@extends('layouts.userfont-master')
@section('user_content')


<!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('userfont') }}/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>My Car Bookings</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ asset('/home') }}">Home</a>
                            <span>My Car Bookings</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    @if(session('danger'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{session('danger')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>
    @endif
    
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row"> 
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Car Image</th>
                                        <th class="wd-15p">Car Name & Price</th>
                                        <th class="wd-15p">Client Name & Email</th>
                                        <th class="wd-15p">Phone & Address</th>
                                        <th class="wd-10p">Date & Time</th>
                                        <th class="wd-10p">Status</th>
                                        <th class="wd-10p">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($car_books as $car_book)
                                        <tr>
                                            <td>
                                                <img src="{{ asset($car_book->image) }}" height="60px;" width="60px;" alt="">
                                            </td>
                                            <td>{{ $car_book->car_name }}<hr>{{ $car_book->car_price }}</td>
                                            <td>{{ $car_book->client_first_name }} {{ $car_book->client_last_name }}<hr>{{ $car_book->client_email }}</td>
                                            <td>{{ $car_book->client_phone }}<hr>{{ $car_book->client_address }}</td>
                                            <td>{{ $car_book->client_date }}<hr>{{ $car_book->client_time }}</td>
                                            <td>
                                                @if($car_book->status == 1)
                                                <span class="btn btn-sm btn-success">Booking Accepted</span>
                                                @elseif($car_book->status == 2)
                                                <span class="btn btn-sm btn-primary">Booking Completed</span>
                                                @elseif($car_book->status == 3)
                                                <span class="btn btn-sm btn-danger">Booking Cancelled</span>
                                                @else
                                                <span class="btn btn-sm btn-warning">Booking Pending</span>
                                                @endif
                                            </td>
                                            <td>    
                                                <a href="{{ url('user/carbookingdelete/'.$car_book->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure To Delete')"><i class="fa fa-trash"></i></a> 
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
