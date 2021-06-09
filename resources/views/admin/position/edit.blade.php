@extends('admin.admin-master')
@section('positions') active show-sub @endsection
@section('manage-positions') active @endsection
@section('admin_content')
  <div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="">Admin</a>
      <span class="breadcrumb-item active">Update Positions</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">      
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Update Positions</h6>
          <form action="{{ route('update-positions') }}" method="POST" >
            @csrf
            <input type="hidden" name="id" value="{{ $position->id }}">
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
                    <label class="form-control-label">Position Name: 
                      <span class="tx-danger">*</span>
                    </label>
                    <input class="form-control" type="text" name="position_name" value="{{ $position->position_name }}" placeholder="position name">
                    @error('position_name')
                      <strong class="text-danger">{{ $message }}</strong> 
                    @enderror
                  </div>
                </div><!-- col-4 -->

                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label">Short Description: <span class="tx-danger">*</span></label>
                    <textarea name="short_description" id="summernote">{{ $position->short_description }}</textarea>
                    @error('short_description')
                      <strong class="text-danger">{{ $message }}</strong> 
                    @enderror
                  </div>
                </div><!-- col-4 -->

                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label">Long Description: <span class="tx-danger">*</span></label>
                    <textarea name="long_description" id="summernote2">{{ $position->long_description }}</textarea>
                    @error('long_description')
                      <strong class="text-danger">{{ $message }}</strong> 
                    @enderror
                  </div>
                </div><!-- col-4 -->      
              </div><!-- row -->
              <button class="btn btn-info mg-r-5" type="submit">Udpate Data</button>
            </div><!-- form-layout -->
          </form>            
        </div><!-- card -->
      </div>
    </div>
  </div>
@endsection