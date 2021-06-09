@extends('admin.admin-master')
@section('orders') active @endsection
@section('admin_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">Admin</a>
      <span class="breadcrumb-item active">Order-view</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Booking Address</h6>
            <div class="form-layout">
              <div class="row mg-b-25">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Event Type: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="category"  placeholder="Enter category" value="{{ $booking->category->category_name }}" readonly>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Firstname: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="firstname"  placeholder="Enter firstname" value="{{ $booking->booking_first_name }}" readonly>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Lastname: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="lastname"  placeholder="Enter lastname" value="{{ $booking->booking_last_name }}" readonly>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Email address: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="email" \ placeholder="Enter email address" value="{{ $booking->booking_email }}" readonly>
                  </div>
                </div><!-- col-4 -->

                <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Booking PHone: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="email"  placeholder="Enter email address" value="{{ $booking->booking_phone }}" readonly>
                    </div>
                  </div><!-- col-4 -->

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Booking Address: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="email"  placeholder="Enter email address" value="{{ $booking->address }}" readonly>
                    </div>
                  </div><!-- col-4 -->

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">State: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="state"  placeholder="Enter state" value="{{ $booking->state }}" readonly>
                    </div>
                  </div><!-- col-4 -->

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Post Code: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="postcode" placeholder="Enter post-code" value="{{ $booking->post_code }}" readonly>
                    </div>
                  </div><!-- col-4 -->

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Event Date: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="date" placeholder="Enter Your Event Date" value="{{ $booking->event_date }}" readonly>
                    </div>
                  </div><!-- col-4 -->

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Guest Amount: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="postcode" placeholder="Enter Your Guest Amount" value="{{ $booking->guest }}" readonly>
                    </div>
                  </div><!-- col-4 -->
                
              </div><!-- row -->
            
            </div><!-- form-layout -->
            
          </div><!-- card -->
       
          <div class="card pd-20 pd-sm-40" style="margin-top: 20px;">
            <h6 class="card-body-title">Orders</h6>
            <div class="form-layout">
              <div class="row mg-b-25">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Invoice NO: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="invoice" value="{{ $order->invoice_no }}" readonly >
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Payment Type: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name=""  placeholder="" value="{{ $order->payment_type }}" readonly>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Total: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="" \ placeholder="" value="{{ $order->total }}" readonly>
                  </div>
                </div><!-- col-4 -->

                <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Sub Total: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name=""  placeholder="" value="{{ $order->subtotal }}" readonly>
                    </div>
                  </div><!-- col-4 -->

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Coupon Discount: <span class="tx-danger">*</span></label>
                      @if ($order->coupon_discount == NULL)
                      <span class="badge badge-pill badge-danger">NO</span>
                          @else
                          <span class="badge badge-pill badge-danger">{{ $order->coupon_discount }}%</span>
                      @endif                        
                    </div>
                  </div><!-- col-4 -->                
              </div><!-- row -->            
            </div><!-- form-layout -->            
          </div><!-- card -->
          <div class="card pd-20 pd-sm-40" style="margin-top: 20px;">
            <h6 class="card-body-title">Order Item</h6>
            <div class="form-layout">
                <div class="table-wrapper">
                    <table id="" class="table display responsive nowrap ">
                      <thead>
                        <tr>
                          <th class="wd-15p">Image</th>
                          <th class="wd-15p">Poduct Name</th>
                          <th class="wd-15p">Quantity</th>
                          <th class="wd-15p">Price</th>
                          <th class="wd-15p">Customization</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($orderItems as $row)
                        <tr>
                          <td>
                              <img src="{{ asset($row->product->image_one) }}" height="50px;" width="50px;" alt="img">
                            </td>
                            <td>
                                {{ $row->product->product_name }}
                            </td>
                            <td>
                                {{ $row->product_qty }}
                            </td>
                            <td>
                                {{ $row->price }}
                            </td>
                            <td>
                                {{ $row->customize }}
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div><!-- table-wrapper --> 
            </div><!-- form-layout -->   
          </div><!-- card -->   
    </div>
</div>
@endsection