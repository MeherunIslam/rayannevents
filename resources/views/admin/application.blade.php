@extends('admin.admin-master')
@section('application') active @endsection
@section('admin_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">Admin</a>
      <span class="breadcrumb-item active">Applications</span>
    </nav>

    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-12"> 
                <div class="sl-page-title">
                  <h5 style="text-align:center;">User Applications</h5>
                </div><!-- sl-page-title -->

                @if(session('delete'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{session('delete')}}</strong>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                    </div>
                @endif

                <div class="card pd-20 pd-sm-40">
                    <div class="table-wrapper">
                        <table id="datatable1" class="table display responsive nowrap">
                            <thead>
                                <tr>
                                    <th class="wd-15p">Sl No</th>
                                    <th class="wd-15p">Name</th>
                                    <th class="wd-15p">Contact</th>
                                    <th class="wd-15p">Email</th>
                                    <th class="wd-15p">Applied At</th>
                                    <th class="wd-10p">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 1;
                                @endphp
                                @foreach($applies as $apply)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $apply->apply_name }}</td>
                                        <td>{{ $apply->apply_contact }}</td>
                                        <td>{{ $apply->apply_email }}</td>
                                        <td>
                                            @if($apply->created_at==NULL)
                                            <span class="text-danger">No Time Set</span>
                                            @else
                                            {{$apply->created_at->diffForHumans()}}
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('admin/document_details/'.$apply->id) }}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                                            <a href="{{ url('file/download/'.$apply->file) }}" class="btn btn-sm btn-success"><i class="fa fa-download"></i></a>
                                            <a href="{{ url('admin/application/delete/'.$apply->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure To Delete')"><i class="fa fa-trash"></i></a>
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
@endsection