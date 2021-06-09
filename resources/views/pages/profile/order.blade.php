@extends('layouts.userfont-master')
@section('user_content')


<!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('userfont') }}/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>My Bookings</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ asset('/home') }}">Home</a>
                            <span>My Bookings</span>
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
                                        <th scope="col">Invoice No.</th>
                                        <th scope="col">Payment Type</th>
                                        <th scope="col">Sub Total</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>{{ $order->invoice_no }}</td>
                                            <td>{{ $order->payment_type }}</td>
                                            <td>{{ $order->subtotal }}$</td>
                                            <td>{{ $order->total }}$</td>
                                            <td>
                                                @if($order->status == 1)
                                                <span class="btn btn-sm btn-success">Order Accepted</span>
                                                @elseif($order->status == 2)
                                                <span class="btn btn-sm btn-primary">Order Completed</span>
                                                @elseif($order->status == 3)
                                                <span class="btn btn-sm btn-danger">Order Cancelled</span>
                                                @else
                                                <span class="btn btn-sm btn-warning">Order Pending</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ url('user/order_view/'.$order->id) }}" class="btn btn-danger btn-sm">View</a>
                                                <a href="{{ url('user/delete/'.$order->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
