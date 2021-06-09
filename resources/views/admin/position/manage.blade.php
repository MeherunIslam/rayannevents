@extends('admin.admin-master')
@section('positions') active show-sub @endsection
@section('manage-positions') active @endsection
@section('admin_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="">Admin</a>
      <span class="breadcrumb-item active">Manage Position</span>
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
                <h6 class="card-body-title">Positions List</h6>    
                <div class="table-wrapper">
                  <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                      <tr>
                        <th class="wd-15p">Position Name</th>
                        <th class="wd-15p">Short Description</th>
                        <th class="wd-25p">Status</th>  
                        <th class="wd-25p">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($positions as $position)
                        <tr>
                          <td>{{ $position->position_name }}</td>
                          <td>{!! $position->short_description !!}</td>
                          <td>
                            @if($position->status == 1)
                            <span class="badge badge-success">Active</span>
                            @else 
                            <span class="badge badge-danger">Inactive</span>
                            @endif
                          </td>
                          <td>
                              <a href="{{ url('admin/positions/edit/'.$position->id) }}" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>
                              <a href="{{ url('admin/positions/view/'.$position->id) }}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                              <a href="{{ url('admin/positions/delete/'.$position->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure To Delete')"><i class="fa fa-trash"></i></a>
                              @if($position->status == 1)
                                <a href="{{ url('admin/positions/inactive/'.$position->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-arrow-down"></i></a>
                                @else
                                <a href="{{ url('admin/positions/active/'.$position->id) }}" class="btn btn-sm btn-success"><i class="fa fa-arrow-up"></i></a>
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