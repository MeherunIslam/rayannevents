@extends('layouts.userfont-master')

@section('user_content')
    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Apply For Job</h2><br>
                        <p class="big">Want to join our team? <br>You can apply online for the following positions.</p>
                    </div>
                </div>
            </div>
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('success')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <form action="{{ route('store.apply')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h5> Your Name</h5><br>
                            <span class="wpcf7-form-control-wrap your-name">
                                <input type="text" name="apply_name" placeholder="Your name">
                            </span> 
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h5> Your Contact</h5><br>
                            <span class="wpcf7-form-control-wrap your-email">
                                <input type="text" name="apply_contact" placeholder="Your Contact">
                            </span> 
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <h5> Your Email</h5><br> 
                            <span class="wpcf7-form-control-wrap your-email">
                                <input type="text" name="apply_email" placeholder="Your Email">
                            </span> 
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h5> Select the position you want to apply</h5><br>
                        <select class="form-control select2" name='position_id' data-placeholder="Choose the position you want to apply">
                            <option label="Choose position"></option>
                            @foreach ($positions as $position)
                                <option value="{{ $position->id }}">{{ $position->position_name }}</option>
                            @endforeach
                        </select>
                        @error('position_id')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>                                        
                    <div class="col-lg-6 col-md-6">
                        <h5> Resume (only pdf files)</h5><br>
                        <input type="file" name="file" accept=".pdf">
                    </div>
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="site-btn">Apply Now</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->
@endsection