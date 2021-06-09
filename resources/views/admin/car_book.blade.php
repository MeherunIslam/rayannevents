@extends('admin.admin-master')
@section('car_book') active @endsection
@section('admin_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">Admin</a>
      <span class="breadcrumb-item active">Wedding Car Bookings</span>
    </nav>

    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-12"> 
                <div class="sl-page-title">
                  <h5 style="text-align:center;">Weeding Car Bookings</h5>
                </div><!-- sl-page-title -->

                @if(session('danger'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{session('danger')}}</strong>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                    </div>
                @endif

                <div class="card pd-20 pd-sm-40">
                    <div class="table-wrapper">
                        <table id="datatable1" class="table display responsive nowrap">
                            <thead>
                                <tr>
                                    <th class="wd-15p">Sl No</th>
                                    <th class="wd-15p">Image</th>
                                    <th class="wd-15p">Car Name & Price</th>
                                    <th class="wd-15p">Client Name</th>
                                    <th class="wd-15p">Email & Phone</th>
                                    <th class="wd-15p">Address</th>
                                    <th class="wd-10p">Date & Time</th>
                                    <th class="wd-10p">Status</th>
                                    <th class="wd-10p">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach($car_books as $car_book)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>
                                            <img src="{{ asset($car_book->image) }}" height="60px;" width="60px;" alt="">
                                        </td>
                                        <td>{{ $car_book->car_name }}<hr>{{ $car_book->car_price }}</td>
                                        <td>{{ $car_book->client_first_name }} {{ $car_book->client_last_name }}</td>
                                        <td>{{ $car_book->client_email }}<hr>{{ $car_book->client_phone }}</td>
                                        <td>{{ $car_book->client_address }}</td>
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
                                            @if($car_book->status == 2)
                                            <a href="{{ url('admin/carbooks/cancel/'.$car_book->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i></a>
                                            @else
                                            <a href="{{ url('admin/carbooks/done/'.$car_book->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-check-square"></i></a>
                                            @endif
                                            <a href="{{ url('admin/carbooks/delete/'.$car_book->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure To Delete')"><i class="fa fa-trash"></i></a>
                                            @if($car_book->status == 1)
                                            <a href="{{ url('admin/carbooks/pending/'.$car_book->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-arrow-down"></i></a>
                                            @else
                                            <a href="{{ url('admin/carbooks/accept/'.$car_book->id) }}" class="btn btn-sm btn-success"><i class="fa fa-arrow-up"></i></a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div><!-- table-wrapper -->
                </div><!-- card -->
            </div>
        </div>
    </div>
</div>
@endsection