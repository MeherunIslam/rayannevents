@extends('admin.admin-master')
@section('projects') active show-sub @endsection
@section('manage-projects') active @endsection
@section('admin_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="">Admin</a>
      <span class="breadcrumb-item active">Manage Project</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">
        <div class="col-md-12">  
          @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{session('success')}}</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif 
            
            @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('status')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif  

            @if(session('delete'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{session('delete')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif  
              <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Projects List</h6>    
                <div class="table-wrapper">
                  <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                      <tr>
                        <th class="wd-15p">Image</th>
                        <th class="wd-15p">Project Name</th>
                        <th class="wd-15p">Category</th>
                        <th class="wd-20p">Status</th>  
                        <th class="wd-25p">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach ($projects as $project)
                      <tr>
                        <td>
                            <img src="{{ asset($project->image_one) }}" width="50px;" height="50px;" alt="">
                        </td>
                        <td>{{ $project->project_name }}</td>
                        <td>{{ $project->category->category_name }}</td>
                        <td>
                          @if($project->status == 1)
                          <span class="badge badge-success">Active</span>
                          @else 
                          <span class="badge badge-danger">Inactive</span>
                          @endif
                        </td>
                        <td>
                          <a href="{{ url('admin/projects/edit/'.$project->id) }}" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>
                          <a href="{{ url('admin/projects/view/'.$project->id) }}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                          <a href="{{ url('admin/projects/delete/'.$project->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure To Delete')"><i class="fa fa-trash"></i></a>
                          @if($project->status == 1)
                          <a href="{{ url('admin/projects/inactive/'.$project->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-arrow-down"></i></a>
                          @else
                          <a href="{{ url('admin/projects/active/'.$project->id) }}" class="btn btn-sm btn-success"><i class="fa fa-arrow-up"></i></a>
                          @endif
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div><!-- table-wrapper -->
              </div><!-- card -->
        </div>
    </div>
</div>
@endsection