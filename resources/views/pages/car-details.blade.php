@extends('layouts.userfont-master')
@section('user_content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('userfont') }}/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Design Deatails</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ url('/home') }}">Home</a>
                            <span>Car Details</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

<!--     @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('success')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif -->

    <!-- project Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="{{ asset($car->image) }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>{{ $car->car_name }}</h3>
                        <p>{{ $car->car_price }}</p>
                        <form>
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                <a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true">
                                    <button type="submit" class="site-btn">Book Now</button></span></a>
                                </div>
                                </a>            
                            </div>
                        </form>
                        <ul>
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Description</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Cars Description</h6>
                                    <p>{!! $car->long_description !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- project Details Section End -->

    <div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="pointer-events: auto;background-color: whitesmoke;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #273c75;text-align:center;
                        background-color: #fff;
                        font-size: 28px;
                        text-shadow: none;
                        line-height: 33px;
                        height: 33px;
                        width: 33px;
                        opacity: 1;
                        border-radius: 50%;
                        box-shadow: 0 0 3px #555;
                        position: absolute;
                        left: auto;
                        right: -10px;
                        top: -12px;
                        z-index: 1;
                        transition: all 0.3s;">
                        &times;
                    </button>
                    <h2 class="modal-title" id="myModalLabel" style="color:#333; font-weight:700; text-align:center;">
                        Quick Book!
                    </h2>
                </div>
                <div class="modal-body modal-body-sub" style="text-align:center;">
                    <p style="color:#e41616;">Contact us today, and get reply with in 24 hours!</p>
                    <div class="row">
                        <div class="col-md-12 modal_body_left modal_body_left1">
                            <form action="{{ route('store.carbook') }}" method="POST" id="footer-form">
                                @csrf    
                                <div class="row">
                                    <div class="col-md-6">
                                        <select name="car_id" class="form-control rounded-0" id="car_id" required="">
                                            <option value="{{ $car->id }}"  {{ $car->id == $car->car_id ? "selected":"" }}>{{ $car->car_name }}</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select name="car_id" class="form-control rounded-0" id="car_id" required="">
                                            <option value="{{ $car->id }}"  {{ $car->id == $car->car_id ? "selected":"" }}>{{ $car->car_price }}</option>
                                        </select>
                                    </div>
                                </div>
                                <br>               
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="form-control rounded-0" name="client_first_name" id="client_first_name" placeholder="First Name *" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control rounded-0" name="client_last_name" id="client_last_name" placeholder="Last Name *" required="">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="form-control rounded-0" name="client_email" id="email" placeholder="Your Email *" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control rounded-0" name="client_phone" placeholder="Phone *" id="phone" required="">
                                    <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">                      
                                        <input class="form-control rounded-0" name="client_date" id="datepicker" placeholder="Your Booking Date *" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control rounded-0" name="client_time" placeholder="Your Booking Time *" id="appoint_time" required="">
                                    <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input class="form-control rounded-0" name="client_address" id="address" placeholder="Where to send the Car? *" required="">
                                    </div>
                                </div>
                                <br>
                                <input type="submit" class="btn btn-danger" value="Submit" style="width:200px;">
                            </form>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
		$('#myModal88').modal('show');
	</script>
    
@endsection