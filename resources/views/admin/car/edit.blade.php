@extends('admin.admin-master')
@section('cars') active show-sub @endsection
@section('manage-cars') active @endsection
@section('admin_content')
  <div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="">Admin</a>
      <span class="breadcrumb-item active">Update Cars</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">      
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Update Cars</h6>
          <form action="{{ route('update-cars') }}" method="POST" >
            @csrf
            <input type="hidden" name="id" value="{{ $car->id }}">
            <div class="form-layout">
              @if(session('success'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>{{session('success')}}</strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              @endif
              <div class="row mg-b-25">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Car Name: 
                      <span class="tx-danger">*</span>
                    </label>
                    <input class="form-control" type="text" name="car_name" value="{{ $car->car_name }}" placeholder="car name">
                    @error('car_name')
                      <strong class="text-danger">{{ $message }}</strong> 
                    @enderror
                  </div>
                </div><!-- col-4 -->

                <div class="col-lg-4">
                  <div class="form-group">
                      <label class="form-control-label">Car Price: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="car_price" value="{{ $car->car_price }}" placeholder="car price">
                      @error('car_price')
                          <strong class="text-danger">{{ $message }}</strong> 
                      @enderror
                  </div>
                </div><!-- col-4 -->

                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label">Long Description: <span class="tx-danger">*</span></label>
                    <textarea name="long_description" id="summernote2">{{ $car->long_description }}</textarea>
                    @error('long_description')
                      <strong class="text-danger">{{ $message }}</strong> 
                    @enderror
                  </div>
                </div><!-- col-4 -->                 

              </div><!-- row -->
              <button class="btn btn-info mg-r-5" type="submit">Udpate Data</button>
            </div><!-- form-layout -->
          </form>
          
          <form action="{{ route('image') }}" method="POST" enctype="multipart/form-data">
            @csrf 
            <input type="hidden" name="id" value="{{ $car->id }}">
            <input type="hidden" name="img" value="{{ $car->image }}">
            <div class="row row-sm mt-5">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Main thambnail: <span class="tx-danger">*</span></label>
                    <img src="{{ asset($car->image) }}" alt="" height="120px;" width="120px;">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Main thambnail: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="file" name="image" >
                  @error('image')
                    <strong class="text-danger">{{ $message }}</strong> 
                  @enderror
                </div>
              </div><!-- col-4 -->                             
              
            </div><!-- row -->
  
            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Udpate Image</button>
            </div><!-- form-layout-footer -->
          </form> 

        </div><!-- card -->
      </div>
    </div>
  </div>
@endsection