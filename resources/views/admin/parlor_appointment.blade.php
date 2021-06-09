@extends('admin.admin-master')
@section('parlor_appointment') active @endsection
@section('admin_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">Admin</a>
      <span class="breadcrumb-item active">Parlor Appointments</span>
    </nav>

    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-12"> 
                <div class="sl-page-title">
                  <h5 style="text-align:center;">Bridal Parlor Appointments</h5>
                </div><!-- sl-page-title -->

                @if(session('delete'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{session('delete')}}</strong>
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
                                    <th class="wd-15p">First Name</th>
                                    <th class="wd-15p">Customer Quantity</th>
                                    <th class="wd-15p">Email</th>
                                    <th class="wd-15p">Phone</th>
                                    <th class="wd-10p">Date</th>
                                    <th class="wd-10p">Time</th>
                                    <th class="wd-10p">Status</th>
                                    <th class="wd-10p">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 1;
                                @endphp
                                @foreach($parlors as $parlor)
                                    <tr>
                                        <td>{{ $i++ }}</td>
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
                                            @if($parlor->status == 2)
                                            <a href="{{ url('admin/parlors/cancel/'.$parlor->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i></a>
                                            @else
                                            <a href="{{ url('admin/parlors/done/'.$parlor->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-check-square"></i></a>
                                            @endif
                                            <a href="{{ url('admin/parlors/delete/'.$parlor->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure To Delete')"><i class="fa fa-trash"></i></a>
                                            @if($parlor->status == 1)
                                            <a href="{{ url('admin/parlors/pending/'.$parlor->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-arrow-down"></i></a>
                                            @else
                                            <a href="{{ url('admin/parlors/accept/'.$parlor->id) }}" class="btn btn-sm btn-success"><i class="fa fa-arrow-up"></i></a>
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