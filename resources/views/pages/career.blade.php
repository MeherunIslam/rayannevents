@extends('layouts.userfont-master')

@section('user_content')
    <br><br>
    <h4 style="text-align:center;color: #0000e6;"><b>Want to join our team? You can apply online for the following positions.<b></h4>
    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        @foreach( $positions as $position )
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="blog__item">
                                    <div class="blog__item__text">
                                        <h5><a href="{{ url('position/details/'.$position->id) }}">{{ $position->position_name}}</a></h5>
                                        <p>{!! $position->short_description !!}</p>
                                        <a href="{{ url('position/details/'.$position->id) }}" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <form action="{{ url('pages/apply') }}">
                @csrf
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="site-btn">Apply Now</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection