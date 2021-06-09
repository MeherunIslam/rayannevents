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
                        <div class="hero__search__form">
                            <form action="{{ route('search') }}" method="GET">
                                <input type="text" class="form-control" name="search" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
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

    <section class="breadcrumb-section set-bg" data-setbg="{{asset('userfont')}}/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Rayann Events</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ url('/home') }}">Home</a>
                            <span>Rayann Events</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

     <!-- Product Section Begin -->
     <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        @if($productsp->isNotEmpty())
                            @foreach ($productsp as $product)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg" data-setbg=" {{ asset($product->image_one) }}">
                                            <ul class="product__item__pic__hover">

                                            </ul>
                                        </div>
                                        <div class="product__item__text">
                                            <h6><a href="{{ url('proudct/details/'.$product->id) }}">{{ $product->product_name}}</a></h6>
                                            <h5>${{ $product->price }}</h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @else 
                            <div>
                                <h2>No Product found</h2>
                            </div>
                        @endif 
                    </div>
                    {{ $productsp->links() }}
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
@endsection
