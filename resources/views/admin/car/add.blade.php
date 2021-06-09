@extends('admin.admin-master')
@section('car') active show-sub @endsection
@section('add-cars') active @endsection
@section('admin_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">Admin</a>
      <span class="breadcrumb-item active">Add Cars</span>
    </nav>

    <div class="sl-pagebody">
        <div class="row row-sm">
      
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Add New Cars</h6>
                <form action="{{ route('store-cars') }}" method="POST" enctype="multipart/form-data">
                    @csrf
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
                                    <label class="form-control-label">Car Name: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="car_name" value="{{ old('car_name') }}" placeholder="car name">
                                    @error('car_name')
                                        <strong class="text-danger">{{ $message }}</strong> 
                                    @enderror
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Car Price: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="car_price" value="{{ old('car_price') }}" placeholder="car price">
                                    @error('car_price')
                                        <strong class="text-danger">{{ $message }}</strong> 
                                    @enderror
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Long Description: <span class="tx-danger">*</span></label>
                                    <textarea name="long_description" id="summernote2"></textarea>
                                    @error('long_description')
                                        <strong class="text-danger">{{ $message }}</strong> 
                                    @enderror
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
                            <button class="btn btn-info mg-r-5">Add Cars</button>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>
            </div><!-- card -->
        </div>
    </div>

</div>
@endsection


