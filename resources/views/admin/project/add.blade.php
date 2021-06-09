@extends('admin.admin-master')
@section('projects') active show-sub @endsection
@section('add-projects') active @endsection
@section('admin_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">Admin</a>
      <span class="breadcrumb-item active">Add Projects</span>
    </nav>

    <div class="sl-pagebody">
        <div class="row row-sm">
      
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Add New Projects</h6>
                <form action="{{ route('store-projects') }}" method="POST" enctype="multipart/form-data">
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
                                    <label class="form-control-label">Project Name: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="project_name" value="{{ old('project_name') }}" placeholder="project name">
                                    @error('project_name')
                                        <strong class="text-danger">{{ $message }}</strong> 
                                    @enderror
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Group: <span class="tx-danger">*</span></label>
                                    <select class="form-control select2" name='group_id' data-placeholder="Choose Group">
                                        <option label="Choose group"></option>
                                        @foreach ($groups as $group)
                                            <option value="{{ $group->id }}">{{ $group->group_name }}</option>
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
                                    <select class="form-control select2" name='category_id' data-placeholder="Choose category">
                                        <option label="Choose category"></option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
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
                                    <textarea name="short_description" id="summernote"></textarea>
                                    @error('short_description')
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
                            <button class="btn btn-info mg-r-5">Add Projects</button>
                        </div><!-- form-layout-footer -->
                </form>
                    </div><!-- form-layout -->
            </div><!-- card -->
        </div>
    </div>

</div>
@endsection


