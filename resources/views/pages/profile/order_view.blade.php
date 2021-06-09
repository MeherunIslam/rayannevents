@extends('layouts.userfont-master')
@section('user_content')

  <!-- Hero Section Begin -->
  <section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>All Categories</span>
                    </div>
                    @php
                      $subcategoriess = App\Subcategory::where('status',1)->latest()->get();
                    @endphp
                    <ul>
                        @foreach ($subcategoriess as $row)
                        <li><a href="#">{{ $row->subcategory_name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+65 11.188.888</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="{{ asset('userfont') }}/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>My Profile</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">Home</a>
                        <span>My Order Details</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->
<section class="shoping-cart spad">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        @include('pages.profile.inc.sidebar')
      </div>
      <div class="col-sm-8">
        <div class="card">
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">Invoice No.</th>
                  <th scope="col">Payment Type</th>
                  <th scope="col">Sub Total</th>
                  <th scope="col">Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{ $order->invoice_no }}</td>
                  <td>{{ $order->payment_type }}</td>
                  <td>{{ $order->subtotal }}$</td>
                  <td>{{ $order->total }}$</td>
                </tr>
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-5">
      <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Booking Name</th>
                            <th scope="col">Booking Email & Phone</th>
                            <th scope="col">Booking address</th>
                            <th scope="col">Booking state & post_code</th>
                            <th scope="col">Event-Date</th>
                            <th scope="col">Start & End Time</th>
                            <th scope="col">Guest Amount</th>
                          </tr>
                        </thead>
                        <tbody>
                    <tr>
                      <td>{{ $booking->booking_first_name }}<hr>{{ $booking->booking_last_name }}</td>
                      <td>{{ $booking->booking_email }}<hr>{{ $booking->booking_phone }}</td>
                      <td>{{ $booking->address }}</td>
                      <td>{{ $booking->state }}<hr>{{ $booking->post_code }}</td>
                      <td>{{ $booking->event_date }}</td>
                      <td>{{ $booking->start_time }}<hr>{{ $booking->end_time }}</td>
                      <td>{{ $booking->guest }}</td>
                  </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-5">
      <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Product Image</th>
                            <th scope="col">Product Name & Code </th>
                            <th scope="col">Product Quantity</th>
                            <th scope="col">Customization</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($orderitems as $item)
                            <tr>
                              <td>
                                  <img src="{{ asset($item->product->image_one) }}" height="60px;" width="60px;" alt="">
                              </td>
                              <td>{{ $item->product->product_name }}<hr>{{ $item->product->product_code }}</td>
                              <td>{{ $item->product_qty }}</td>
                              <td>{{ $item->customize }}</td>
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
