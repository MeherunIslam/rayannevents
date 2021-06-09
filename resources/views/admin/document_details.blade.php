@extends('admin.admin-master')
@section('application') active @endsection
@section('admin_content')

<div class="form-group mc" style="margin-left:22%; margin-right:10%; margin-top:7%;">

    <div class="row">
        <div class="col-sm-5 col-5">
            <h3 class="page-title">Show Application</h3>
        </div><br><br>
        <div class="col-sm-7 col-7 text-right m-b-30"></div>
    </div>
   
    <div class="row">
    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $apply->apply_name }}
            </div>
        </div>  

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contact:</strong>
                {{ $apply->apply_contact }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $apply->apply_email }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Position:</strong>
                {{ $apply->position->position_name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <iframe src="{{ url('userfont/document/'.$apply->file) }}" style="width:1000px; height:700px;"></iframe>
            </div>
        </div>

    </div>    
</div>
@endsection