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
  </head>

  <body>

    

<div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Admin Login <span class="tx-info tx-normal"></span></div>
        <hr>

        <form method="POST" action="{{ route('admin.login') }}">
            @csrf


            <div class="form-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Your Email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div><!-- form-group -->
            <div class="form-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Your Password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <!-- <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a> -->
            </div><!-- form-group -->
            <button type="submit" class="btn btn-info btn-block">Log In</button>

        </form>

<!--         <div class="mg-t-60 tx-center">Not yet a member? <a href="{{route('register')}}" class="tx-info">Sign Up</a></div> -->
</div><!-- login-wrapper -->
</div><!-- d-flex -->


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

