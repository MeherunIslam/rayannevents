<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Admin Dashboard</title>

    <!-- vendor css -->
    <link href="{{ asset('backend') }}/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/highlightjs/github.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/datatables/jquery.dataTables.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/highlightjs/github.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/medium-editor/medium-editor.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/medium-editor/default.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/summernote/summernote-bs4.css" rel="stylesheet">
    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/css/starlight.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/css/starlight.min.css">
  </head>

  <body>

    @guest
    @else
    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i>Admin</a></div>
    <div class="sl-sideleft">


      <div class="sl-sideleft-menu">
        <a href="{{ url('admin/home') }}" class="sl-menu-link @yield('dashboard')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-tachometer tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="{{ url('/') }}" target="_blank" class="sl-menu-link ">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-home tx-22"></i>
            <span class="menu-item-label">Visit Site</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="{{ route('admin.group') }}"  class="sl-menu-link @yield('group')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-table tx-22"></i>
            <span class="menu-item-label">Group</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="{{ route('admin.category') }}"  class="sl-menu-link @yield('category')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-table tx-22"></i>
            <span class="menu-item-label">Category</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="{{ route('admin.subcategory') }}"  class="sl-menu-link @yield('subcategory')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-table tx-22"></i>
            <span class="menu-item-label">Sub-Category</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

      
        <a href="#" class="sl-menu-link @yield('products')">
          <div class="sl-menu-item">
            <i class="menu-item-icon fa fa-th-large tx-20"></i>
            <span class="menu-item-label">Products</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('add-products') }}" class="nav-link @yield('add-products')">Add Products</a></li>
          <li class="nav-item"><a href="{{ route('manage-products') }}" class="nav-link @yield('manage-products')">Manage Product</a></li>
        </ul>

        <a href="{{ route('admin.coupon') }}"  class="sl-menu-link @yield('coupon')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-list tx-22"></i>
            <span class="menu-item-label">coupon</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="{{ route('admin.orders') }}"  class="sl-menu-link @yield('orders')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-list tx-22"></i>
            <span class="menu-item-label">Orders</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="#" class="sl-menu-link @yield('projects')">
          <div class="sl-menu-item">
            <i class="menu-item-icon fa fa-th-large tx-20"></i>
            <span class="menu-item-label">Projects</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('add-projects') }}" class="nav-link @yield('add-projects')">Add Projects</a></li>
          <li class="nav-item"><a href="{{ route('manage-projects') }}" class="nav-link @yield('manage-projects')">Manage Projects</a></li>
        </ul>

        <a href="{{ url('admin/feedback') }}"  class="sl-menu-link @yield('feedback')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-list tx-22"></i>
            <span class="menu-item-label">Feedbacks</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="{{ url('admin/parlor_appointment') }}"  class="sl-menu-link @yield('parlor_appointment')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-list tx-22"></i>
            <span class="menu-item-label">Parlor Appointments</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="#" class="sl-menu-link @yield('cars')">
          <div class="sl-menu-item">
            <i class="menu-item-icon fa fa-car tx-20"></i>
            <span class="menu-item-label">Cars</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('add-cars') }}" class="nav-link @yield('add-cars')">Add Cars</a></li>
          <li class="nav-item"><a href="{{ route('manage-cars') }}" class="nav-link @yield('manage-cars')">Manage Cars</a></li>
        </ul>

        <a href="{{ url('admin/car_book') }}"  class="sl-menu-link @yield('car_book')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-car tx-22"></i>
            <span class="menu-item-label">Wedding Car Bookings</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="#" class="sl-menu-link @yield('positions')">
          <div class="sl-menu-item">
            <i class="menu-item-icon fa fa-th-large tx-20"></i>
            <span class="menu-item-label">Positions</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('add-positions') }}" class="nav-link @yield('add-positions')">Add Positions</a></li>
          <li class="nav-item"><a href="{{ route('manage-positions') }}" class="nav-link @yield('manage-positions')">Manage Positions</a></li>
        </ul>

        <a href="{{ url('admin/application') }}"  class="sl-menu-link @yield('application')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-list tx-22"></i>
            <span class="menu-item-label">Applications</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="{{ url('admin/newsletter') }}"  class="sl-menu-link @yield('newsletter')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-list tx-22"></i>
            <span class="menu-item-label">Newsletter</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
      
        </ul>
      </div><!-- sl-sideleft-menu -->

      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name">{{ Auth::user()->name }}<span class="hidden-md-down"></span></span>
              <img src="{{ asset('backend') }}/img/img2.jpg" class="wd-32 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href="{{ route('admin.logout') }}"><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
        <div class="navicon-right">
        </div><!-- navicon-right -->
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <!-- ########## END: RIGHT PANEL ########## --->
    @endguest
    @yield('admin_content')


    
    <script src="{{ asset('backend') }}/lib/jquery/jquery.js"></script>
    <script src="{{ asset('backend') }}/lib/popper.js/popper.js"></script>
    <script src="{{ asset('backend') }}/lib/bootstrap/bootstrap.js"></script>
    <script src="{{ asset('backend') }}/lib/jquery-ui/jquery-ui.js"></script>
    <script src="{{ asset('backend') }}/lib/datatables/jquery.dataTables.js"></script>
    <script src="{{ asset('backend') }}/lib/datatables-responsive/dataTables.responsive.js"></script>
    <script>
      $(function(){
        'use strict';

        $('#datatable1').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

        $('#datatable2').DataTable({
          bLengthChange: false,
          searching: false,
          responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>
     <script src="{{ asset('backend') }}/lib/medium-editor/medium-editor.js"></script>
     <script src="{{ asset('backend') }}/lib/summernote/summernote-bs4.min.js"></script>
     <script>
       $(function(){
         'use strict';
 
         // Inline editor
         var editor = new MediumEditor('.editable');
 
         // Summernote editor
         $('#summernote').summernote({
           height: 150,
           tooltip: false
         })

         $('#summernote2').summernote({
           height: 150,
           tooltip: false
         })
       });
     </script>
    <script src="{{ asset('backend') }}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="{{ asset('backend') }}/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
    <script src="{{ asset('backend') }}/lib/d3/d3.js"></script>
    <script src="{{ asset('backend') }}/lib/rickshaw/rickshaw.min.js"></script>
    <script src="{{ asset('backend') }}/lib/chart.js/Chart.js"></script>
<!--     <script src="{{ asset('backend') }}/js/chart.chartjs.js"></script> -->
    <script src="{{ asset('backend') }}/lib/Flot/jquery.flot.js"></script>
    <script src="{{ asset('backend') }}/lib/Flot/jquery.flot.pie.js"></script>
    <script src="{{ asset('backend') }}/lib/Flot/jquery.flot.resize.js"></script>
    <script src="{{ asset('backend') }}/lib/flot-spline/jquery.flot.spline.js"></script>

    <script src="{{ asset('backend') }}/js/starlight.js"></script>
    <script src="{{ asset('backend') }}/js/ResizeSensor.js"></script>
    <script src="{{ asset('backend') }}/js/dashboard.js"></script>
    <script src="{{ asset('backend') }}/lib/highlightjs/highlight.pack.js"></script>

    <script src="{{ asset('backend') }}/lib/select2/js/select2.min.js"></script>

    <script src="{{ asset('backend') }}/js/starlight.js"></script>
   

  </body>
</html>
