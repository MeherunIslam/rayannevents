@extends('admin.admin-master')
@section('admin_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">Admin</a>
      <span class="breadcrumb-item active">Group</span>
      <span class="breadcrumb-item active">Edit</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">
        <div class="col-md-8 m-auto">
            <div class="card">
                <div class="card-header">Edit Group
                </div>

                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('success')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      @endif

                    <form action="{{ route('update.group') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $group->id }}" name="id">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Add New Group</label>
                          <input type="text" name="group_name" class="form-control @error('group_name') is-invalid @enderror" 
                          id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $group->group_name }}">

                          @error('group_name')
                            <span class="text-danger">{{$message}}</span>
                          @enderror

                        </div>

                        <button type="submit" class="btn btn-primary">Update Group</button>
                      </form>




                </div>
            </div>
        </div>
    </div>

</div>
@endsection