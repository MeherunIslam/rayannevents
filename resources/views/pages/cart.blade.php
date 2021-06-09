@extends('layouts.userfont-master')
@section('user_content')
    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    @include('pages.inc.category')
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
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @if(session('cart_delete'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>{{session('cart_delete')}}</strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    @endif

                    @if(session('cart_update'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{session('cart_update')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if(session('customization_done'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{session('customization_done')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Customise</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($carts as $cart)
                                    
                                    <tr>
                                        <td class="shoping__cart__item">
                                            <img src="{{ asset($cart->product->image_one) }}" style="height: 70px; width:70px;" alt="">
                                            <h5>{{ $cart->product->product_name }}</h5>
                                        </td>
                                        <td class="shoping__cart__quantity">
                                            <div class="quantity">
                                                <form action="{{ url('customise/update/'.$cart->id) }}" method="POST">
                                                    @csrf
                                                    <textarea name="customize" placeholder="Your customization"></textarea>
                                                    <button type="submit" class="site-btn">Done</button>
                                                </form>
                                            </div>
                                        </td>
                                        <td class="shoping__cart__price">
                                            ${{ $cart->price }}
                                        </td>
                                        <td class="shoping__cart__quantity">
                                            <div class="quantity">
                                                <form action="{{ url('cart/quantity/update/'.$cart->id) }}" method="POST">
                                                    @csrf
                                                    <div class="pro-qty">
                                                        <input type="text" name="qty" value="{{ $cart->qty }}" min="1">
                                                    </div>
                                                    <button type="submit" class="btn btn-sm btn-success">Update</button>
                                                </form>
                                            </div>
                                        </td>
                                        <td class="shoping__cart__total">
                                            {{ $cart->price * $cart->qty }}
                                        </td>
                                        <td class="shoping__cart__item__close">
                                                <a href="{{ url('cart/destroy/'.$cart->id) }}"> <span class="icon_close">
                                                </span>
                                                </a> 
                                        </td>
                                    </tr>
                                @endforeach  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="{{ url('/home') }}" class="primary-btn cart-btn">CONTINUE BOOKING</a>
                        
                    </div>
                </div>
                
                <div class="col-lg-6">
                    
                    @if (Session::has('coupon'))
                    @else 
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                           
                            <form action="{{ url('coupon/apply') }}" method="POST">
                                @csrf
                                <input type="text" name="coupon_name" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                    @endif
                </div>
            
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                          
                        @if (Session::has('coupon'))
                            <li>Subtotal <span>${{ $subtotal }}</span></li>
                            <li>Coupon <span>{{ session()->get('coupon')['coupon_name'] }} <a href="{{ url('coupon/destroy') }}">X</a> </span></li>
                            <li>Discount <span>{{ session()->get('coupon')['coupon_discount'] }}% ( {{  session()->get('coupon')['discount_amount'] }} tk )</span></li>
                            <li>Total <span>${{ $subtotal - session()->get('coupon')['discount_amount'] }}</span></li>
                            @else 
                            <li>Total <span>${{ $subtotal }}</span></li>
                        @endif
                        </ul>
                        <a href="{{ url('checkout') }}" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->
@endsection