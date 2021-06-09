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
                        <h2>Booking Done</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ url('/home') }}">Home</a>
                            <span>Booking Done</span>
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
            <h3>
                @if(session('orderComplete'))
                <div class="alert alert-danger success-dismissible fade show" role="alert">
                <strong>{{session('orderComplete')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  @endif
            </h3>
        </div>
    </section>
    <!-- Checkout Section End -->
@endsection