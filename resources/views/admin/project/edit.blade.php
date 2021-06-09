@extends('admin.admin-master')
@section('projects') active show-sub @endsection
@section('manage-projects') active @endsection
@section('admin_content')
  <div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="">Admin</a>
      <span class="breadcrumb-item active">Update Projects</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">
        
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Update Projects</h6>
          <form action="{{ route('update-projects') }}" method="POST" >
              @csrf
              <input type="hidden" name="id" value="{{ $project->id }}">
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
                      <label class="form-control-label">Project Name: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="project_name" value="{{ $project->project_name }}" placeholder="project name">
                      @error('project_name')
                        <strong class="text-danger">{{ $message }}</strong> 
                      @enderror
                    </div>
                  </div><!-- col-4 -->

                  <div class="col-lg-4">
                      <div class="form-group mg-b-10-force">
                          <label class="form-control-label">Group: <span class="tx-danger">*</span></label>
                          <select class="form-control select2" name="group_id" data-placeholder="Choose group">
                          <option label="Choose group"></option>
                              @foreach ($groups as $group)                            
                          <option value="{{ $group->id }}" {{ $group->id == $project->group_id ? "selected":"" }}>{{ $group->group_name }}</option>
                          @endforeach
          
                          </select>
                          @error('group_id')
                          <strong class="text-danger">{{ $message }}</strong> 
                          @enderror
                      </div>
                  </div><!-- col-4 -->

                  <div class="col-lg-4">
                      <div class="form-group mg-b-10-force">
                          <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                          <select class="form-control select2" name="category_id" data-placeholder="Choose category">
                          <option label="Choose category"></option>
                              @foreach ($categories as $category)                            
                          <option value="{{ $category->id }}" {{ $category->id == $project->category_id ? "selected":"" }}>{{ $category->category_name }}</option>
                          @endforeach
          
                          </select>
                          @error('category_id')
                          <strong class="text-danger">{{ $message }}</strong> 
                          @enderror
                      </div>
                  </div><!-- col-4 -->

                  <div class="col-lg-12">
                      <div class="form-group">
                          <label class="form-control-label">Short Description: <span class="tx-danger">*</span></label>
                          <textarea name="short_description" id="summernote">{{ $project->short_description }}</textarea>
                          @error('short_description')
                          <strong class="text-danger">{{ $message }}</strong> 
                          @enderror
                      </div>
                  </div><!-- col-4 -->


                  <div class="col-lg-12">
                      <div class="form-group">
                          <label class="form-control-label">Long Description: <span class="tx-danger">*</span></label>
                          <textarea name="long_description" id="summernote2">{{ $project->long_description }}</textarea>
                          @error('long_description')
                          <strong class="text-danger">{{ $message }}</strong> 
                          @enderror
                      </div>
                  </div><!-- col-4 -->
                
                    
              </div><!-- row -->
              
                <button class="btn btn-info mg-r-5" type="submit">Udpate Data</button>

          </form>

          <form action="{{ route('update-image') }}" method="POST" enctype="multipart/form-data">
              @csrf 
              <input type="hidden" name="id" value="{{ $project->id }}">
              <input type="hidden" name="img_one" value="{{ $project->image_one }}">
              <input type="hidden" name="img_two" value="{{ $project->image_two }}">
              <input type="hidden" name="img_three" value="{{ $project->image_three }}">
            <div class="row row-sm mt-5">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Main thumbnail: <span class="tx-danger">*</span></label>
                    <img src="{{ asset($project->image_one) }}" alt="" height="120px;" width="120px;">
                </div>
              </div><!-- col-4 -->
                    
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image Two: <span class="tx-danger">*</span></label>
                    <img src="{{ asset($project->image_two) }}" alt="" height="120px;" width="120px;">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image Three: <span class="tx-danger">*</span></label>
                    <img src="{{ asset($project->image_three) }}" alt="" height="120px;" width="120px;">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Main thumbnail: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="file" name="image_one" >
                  @error('image_one')
                  <strong class="text-danger">{{ $message }}</strong> 
                  @enderror
                </div>
              </div><!-- col-4 -->
                  
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image Two: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="file" name="image_two" >
                  @error('image_two')
                  <strong class="text-danger">{{ $message }}</strong> 
                  @enderror
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image Three: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="file" name="image_three" >
                  @error('image_three')
                  <strong class="text-danger">{{ $message }}</strong> 
                  @enderror
                </div>
              </div><!-- col-4 -->                                            
            </div><!-- row -->
    
            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Udpate Image</button>
            </div><!-- form-layout-footer -->
          </form> 
        </div><!-- form-layout -->
      </div><!-- card -->
    </div>
  </div>
@endsection