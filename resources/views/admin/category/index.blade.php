@extends('admin.admin-master')
@section('category') active @endsection
@section('admin_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">Admin</a>
      <span class="breadcrumb-item active">Category</span>
    </nav>

    <div class="sl-pagebody">
              <div class="col-md-8" >
                <div class="card">
                    <div class="card-header">Add Category
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

                        <form action="{{route('store.category')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="category_name" class="form-control @error('category_name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category">
                                @error('category_name')
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
                @if(session('Catupdated'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{session('Catupdated')}}</strong>
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
                      <th class="wd-15p">Category name</th>
                      <th class="wd-15p">Status</th>
                      <th class="wd-10p">Created At</th>
                      <th class="wd-25p">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                        @php
                            $i = 1;
                        @endphp
                    @foreach($categories as $category)
                        <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $category->category_name }}</td>
                        <td>
                            @if($category->status == 1)
                                <span class="badge badge-success">Active</span>
                                @else 
                                <span class="badge badge-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            @if($category->created_at==NULL)
                                <span class="text-danger">No Time Set</span>
                                @else
                                {{$category->created_at->diffForHumans()}}
                            @endif
                        </td>
                        <td>
                            <a href="{{ url('admin/categories/edit/'.$category->id) }}" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>
                            <a href="{{ url('admin/categories/delete/'.$category->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            @if($category->status == 1)
                                <a href="{{ url('admin/categories/inactive/'.$category->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-arrow-down"></i></a>
                                @else
                                <a href="{{ url('admin/categories/active/'.$category->id) }}" class="btn btn-sm btn-success"><i class="fa fa-arrow-up"></i></a>
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