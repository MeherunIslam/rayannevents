@extends('admin.admin-master')
@section('positions') active show-sub @endsection
@section('manage-positions') active @endsection
@section('admin_content')

<div class="form-group mc" style="margin-left:22%; margin-right:10%; margin-top:7%;">

    <div class="row">
        <div class="col-sm-5 col-5">
            <h3 class="page-title">Show Position</h3>
        </div><br><br>
        <div class="col-sm-7 col-7 text-right m-b-30"></div>
    </div>
   
    <div class="row">
    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Position Name:</strong>
                {{ $position->position_name }}
            </div>
        </div>  

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Short Description:</strong>
                {!! $position->short_description !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Long Description:</strong>
                {!! $position->long_description !!}
            </div>
        </div>

    </div>    
</div>
@endsection