@extends('admin.admin-master')
@section('cars') active show-sub @endsection
@section('manage-cars') active @endsection
@section('admin_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="">Admin</a>
      <span class="breadcrumb-item active">Manage Cars</span>
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
              <h6 class="card-body-title">Cars List</h6>    
              <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                  <thead>
                    <tr>
                      <th class="wd-15p">Name</th>
                      <th class="wd-15p">Price</th>
                      <th class="wd-15p">Image</th>
                      <th class="wd-25p">Status</th>  
                      <th class="wd-25p">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($cars as $car)
                      <tr>
                        <td>{{ $car->car_name }}</td>
                        <td>{{ $car->car_price }}</td>
                        <td>
                          <img src="{{ asset($car->image) }}" width="50px;" height="50px;" alt="">
                        </td>
                        <td>
                          @if($car->status == 1)
                          <span class="badge badge-success">Active</span>
                          @else 
                          <span class="badge badge-danger">Inactive</span>
                          @endif
                        </td>
                        <td>
                          <a href="{{ url('admin/cars/edit/'.$car->id) }}" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>
                          <a href="{{ url('admin/cars/delete/'.$car->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure To Delete')"><i class="fa fa-trash"></i></a>
                          @if($car->status == 1)
                            <a href="{{ url('admin/cars/inactive/'.$car->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-arrow-down"></i></a>
                            @else
                            <a href="{{ url('admin/cars/active/'.$car->id) }}" class="btn btn-sm btn-success"><i class="fa fa-arrow-up"></i></a>
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