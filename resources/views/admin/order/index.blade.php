@extends('admin.admin-master')
@section('orders') active @endsection
@section('admin_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">Admin</a>
      <span class="breadcrumb-item active">Order</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">
        <div class="col-md-12">    
              <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Order list</h6>    
                
                  @if(session('status'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>{{session('status')}}</strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    @endif  
                  @if(session('delete'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>{{session('delete')}}</strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    @endif
                <div class="table-wrapper">
                  <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                      <tr>
                        <th class="wd-15p">Sl</th>
                        <th class="wd-15p">Invoice No</th>
                        <th class="wd-15p">Payment Type</th>
                        <th class="wd-20p">Total</th>  
                        <th class="wd-20p">Sub Total</th>
                        <th class="wd-20p">Coupon</th>
                        <th class="wd-20p">Status</th>  
                        <th class="wd-25p">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                    @foreach ($orders as $order)
                      <tr>
                        <td>{{ $i++ }}</td>
                        <td>#{{ $order->invoice_no }}</td>
                        <td>{{ $order->payment_type }}%</td>
                        <td>{{ $order->total }}$</td>
                        <td>{{ $order->subtotal }}$</td>
                        <td>
                            @if($order->coupon_discount == NULL)
                            <span class="badge badge-danger">No</span>
                            @else 
                            <span class="badge badge-success">Yes</span>
                            @endif
                        </td>
                        <td>
                          @if($order->status == 1)
                          <span class="btn btn-sm btn-success">Order Accepted</span>
                          @elseif($order->status == 2)
                          <span class="btn btn-sm btn-primary">Order Completed</span>
                          @elseif($order->status == 3)
                          <span class="btn btn-sm btn-danger">Order  Cancelled</span>
                          @else
                          <span class="btn btn-sm btn-warning">Order Pending</span>
                          @endif
                        </td>
                        <td>
                            @if($order->status == 2)
                            <a href="{{ url('admin/orders/cancel/'.$order->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i></a>
                            @else
                            <a href="{{ url('admin/orders/done/'.$order->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-check-square"></i></a>
                            @endif
                            <a href="{{ url('admin/orders/view/'.$order->id) }}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                            <a href="{{ url('admin/orders/delete/'.$order->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            @if($order->status == 1)
                            <a href="{{ url('admin/orders/pending/'.$order->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-arrow-down"></i></a>
                            @else
                            <a href="{{ url('admin/orders/accept/'.$order->id) }}" class="btn btn-sm btn-success"><i class="fa fa-arrow-up"></i></a>
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
@endsection