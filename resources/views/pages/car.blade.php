@extends('layouts.userfont-master')

@section('user_content')
    <!-- Car Section Begin -->
    <section class="blog spad">
        <h4 style="text-align:center;color: #0000e6;"><b>Personalized Service for Bride and Groom.<b></h4><bR>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        @foreach( $cars as $car )
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="blog__item">
                                    <div class="blog__item__text">
                                        <div class="blog__item__pic">
                                            <img src="{{ asset($car->image) }}" alt="">
                                        </div>
                                        <div class="blog__item__text">
                                            <div class="col-lg-12 text-center">
                                                <p>{{ $car->car_name }}</p>
                                                <p>{{ $car->car_price }}</p>
                                            </div> 
                                        
                                            <div class="row">
                                                <div class="col-lg-12 text-center">
                                                    <a href="{{ url('car/details/'.$car->id) }}" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                                </div>           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{ $cars->links() }}
            </div>
        </div>
    </section>
    <!-- Car Section End -->

    <!-- Car Slider Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    @foreach ($cars as $car)
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="{{ asset($car->image) }}">
                                <h5><a href="{{ url('car/details/'.$car->id) }}">{{ $car->car_name }}</a></h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section><br><br>
    <!-- Car Slider Section End -->  
@endsection