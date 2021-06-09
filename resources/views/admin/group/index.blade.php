@extends('admin.admin-master')
@section('group') active @endsection
@section('admin_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">Admin</a>
      <span class="breadcrumb-item active">Group</span>
    </nav>

    <div class="sl-pagebody">
              <div class="col-md-8" >
                <div class="card">
                    <div class="card-header">Add Group
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

                        <form action="{{route('store.group')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="group_name" class="form-control @error('group_name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Group">
                                @error('group_name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                                <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
              </div>
            <br><br>

      <div class="row row-sm">
          <div class="col-md-12"> 
                <div class="sl-page-title">
                  <h5 style="text-align:center;">Data Table</h5>
                  <p style="text-align:center;">DataTables is a plug-in for the jQuery Javascript library.</p>
                </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                  <h6 class="card-body-title" style="text-align:center;">Basic Responsive DataTable</h6>
                @if(session('Groupupdated'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{session('Groupupdated')}}</strong>
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
              

              <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                  <thead>
                    <tr>
                      <th class="wd-15p">Sl No</th>
                      <th class="wd-15p">Group name</th>
                      <th class="wd-15p">Status</th>
                      <th class="wd-10p">Created At</th>
                      <th class="wd-25p">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                        @php
                            $i = 1;
                        @endphp
                    @foreach($groups as $group)
                        <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $group->group_name }}</td>
                        <td>
                            @if($group->status == 1)
                                <span class="badge badge-success">Active</span>
                                @else 
                                <span class="badge badge-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            @if($group->created_at==NULL)
                                <span class="text-danger">No Time Set</span>
                                @else
                                {{$group->created_at->diffForHumans()}}
                            @endif
                        </td>
                        <td>
                            <a href="{{ url('admin/groups/edit/'.$group->id) }}" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>
                            <a href="{{ url('admin/groups/delete/'.$group->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            @if($group->status == 1)
                                <a href="{{ url('admin/groups/inactive/'.$group->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-arrow-down"></i></a>
                                @else
                                <a href="{{ url('admin/groups/active/'.$group->id) }}" class="btn btn-sm btn-success"><i class="fa fa-arrow-up"></i></a>
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

    </div>
</div>
@endsection