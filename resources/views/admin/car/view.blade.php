@extends('admin.admin-master')
@section('cars') active show-sub @endsection
@section('manage-cars') active @endsection
@section('admin_content')

<div class="form-group mc" style="margin-left:22%; margin-right:10%; margin-top:7%;">

    <div class="row">
        <div class="col-sm-5 col-5">
            <h3 class="page-title">Show Car</h3>
        </div><br><br>
        <div class="col-sm-7 col-7 text-right m-b-30"></div>
    </div>
   
    <div class="row">
    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Car Name:</strong>
                {{ $car->car_name }}
            </div>
        </div>  

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Car Price:</strong>
                {{ $car->car_name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Long Description:</strong>
                {!! $car->long_description !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
            </div>
            <div class="form-group">
                <img src="{{ asset($car->car_image) }}" height="300" width="300" alt="" />
            </div>
        </div>

    </div>    
</div>
@endsection