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
                            $categoriess = App\Category::where('status',1)->latest()->get();
                        @endphp
                        <ul>
                            @foreach ($categoriess as $row)
                                <li><a href="#">{{ $row->category_name }}</a></li>
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
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ url('/home') }}">Home</a>
                            <span>Checkout Page</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

     <!-- Checkout Section Begin -->
     <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4>Booking Information</h4>
                <form action="{{ route('place-order') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <h5> Select the event type you want to book</h5><br>
                                        <select class="form-control select2" name='category_id' data-placeholder="Choose the event type you want to book">
                                            <option label="Choose pEvent Type"></option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Guest Amount<span>*</span></p>
                                        <input type="text" name="guest">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>First Name<span>*</span></p>
                                        <input type="text" name="booking_first_name" value="{{ Auth::user()->name }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Last Name<span>*</span></p>
                                        <input type="text" name="booking_last_name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input type="text" name="booking_phone" >
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" name="booking_email" value="{{ Auth::user()->email }}">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input type="text" placeholder="Street Address" class="checkout__input__add" name="address">
                            </div>
                            <div class="checkout__input">
                                <p>District<span>*</span></p>
                                <input type="text" name="state">
                            </div>
                            <div class="checkout__input">
                                <p>Postcode / ZIP<span>*</span></p>
                                <input type="text" name="post_code">
                            </div>
                            <div class="fc-datepicker">
                                <div class="checkout__input">
                                    <p>Event Date<span>*</span></p>
                                    <input type="text" name="event_date">
                                </div>
                            </div>

                            <div class="checkout__input">
                                <p>Start Time<span>*</span></p>
                                <input type="text" name="start_time">
                            </div>
                            <div class="checkout__input">
                                <p>End Time<span>*</span></p>
                                <input type="text" name="end_time">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Your Booking</h4>
                                <div class="checkout__order__products">Items <span>Total</span></div>
                                <ul>
                                    @foreach ($carts as $cart)
                                    <li>{{  $cart->product->product_name }} ({{ $cart->qty }}) 

                                    <span>${{ $cart->price * $cart->qty }}</span></li>
                                    @endforeach
                                </ul>



                                @if (Session::has('coupon'))
                                    <div class="checkout__order__total">Total <span>$ {{ $subtotal - session()->get('coupon')['discount_amount'] }}</span></div>

                                    <input type="hidden" name="coupon_discount" value="{{ session()->get('coupon')['coupon_discount'] }}">
                                    <input type="hidden" name="subtotal" value="{{ $subtotal }}">
                                    <input type="hidden" name="total" value="{{ $subtotal - session()->get('coupon')['discount_amount'] }}">
                                    @else
                                    <div class="checkout__order__subtotal">Subtotal <span>${{ $subtotal }}</span></div>
                                    <input type="hidden" name="subtotal" value="{{ $subtotal }}">
                                    <input type="hidden" name="total" value="{{ $subtotal }}">
                                @endif
                                <h5> Payment Method</h5>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                     HandCash
                                        <input type="checkbox" id="payment" value="handcash" name="payment_type">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <button type="submit" class="site-btn">Confirm Booking</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
@endsection
