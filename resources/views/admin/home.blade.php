@extends('admin.admin-master')
@section('dashboard') active @endsection
@section('admin_content')
 <!-- ########## START: MAIN PANEL ########## -->
  <div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">Admin</a>
      <span class="breadcrumb-item active">Dashboard</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm mg-t-20">
        <div class="col-xl-12">
          <div class="card overflow-hidden">
            <div class="card-header bg-transparent pd-y-20 d-sm-flex align-items-center justify-content-between">
              <div class="mg-b-20 mg-sm-b-0">
                <h6 class="card-title mg-b-5 tx-13 tx-uppercase tx-bold tx-spacing-1">Event Statistics</h6>
                <span class="d-block tx-12">May 23, 2021</span>
              </div>
              <div class="btn-group" role="group" aria-label="Basic example">
                <a href="#" class="btn btn-secondary tx-12">This Year</a>
              </div>
            </div><!-- card-header -->
            <div class="card-body pd-0 bd-color-gray-lighter">
              <div class="row no-gutters tx-center">
                <div class="col-12 col-sm-4 pd-y-20 tx-left">
                  <p class="pd-l-20 tx-12 lh-8 mg-b-0">Note: Rayann Events...</p>
                </div><!-- col-4 -->
                <div class="col-6 col-sm-2 pd-y-20">
                  <h4 class="tx-inverse tx-lato tx-bold mg-b-5">12</h4>
                  <p class="tx-11 mg-b-0 tx-uppercase">Weddings</p>
                </div><!-- col-2 -->
                <div class="col-6 col-sm-2 pd-y-20 bd-l">
                  <h4 class="tx-inverse tx-lato tx-bold mg-b-5">9</h4>
                  <p class="tx-11 mg-b-0 tx-uppercase">Birthdays</p>
                </div><!-- col-2 -->
                <div class="col-6 col-sm-2 pd-y-20 bd-l">
                  <h4 class="tx-inverse tx-lato tx-bold mg-b-5">5</h4>
                  <p class="tx-11 mg-b-0 tx-uppercase">Engagement</p>
                </div><!-- col-2 -->
                <div class="col-6 col-sm-2 pd-y-20 bd-l">
                  <h4 class="tx-inverse tx-lato tx-bold mg-b-5">2</h4>
                  <p class="tx-11 mg-b-0 tx-uppercase">Anniversary</p>
                </div><!-- col-2 -->
              </div><!-- row -->
            </div><!-- card-body -->
            <div class="card-body pd-0">
              <div id="rickshaw2" class="wd-100p ht-200"></div>
            </div><!-- card-body -->
          </div><!-- card -->

          <div class="card pd-30 pd-sm-35 mg-t-30">
            <h6 class="card-body-title tx-13">Horizontal Bar Chart</h6>
            <p class="mg-b-20 mg-sm-b-30">A bar chart or bar graph is a chart with rectangular bars with lengths proportional to the values that they represent.</p>
            <canvas id="chartBar4" height="300"></canvas>
          </div><!-- card -->

        </div><!-- col-8 -->
        <div class="col-xl-4 mg-t-20 mg-xl-t-0">
        </div><!-- col-3 -->
      </div><!-- row -->
      <br>

    </div><!-- sl-pagebody -->

  </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->
    
@endsection

