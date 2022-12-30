<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | BigBajar</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('ad-assets') }}/dist/css/adminlte.min.css">
  <!-- tostr cdn  -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  @livewireStyles
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
        <!-- Navbar -->
            @livewire('admin.partials.nav')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
            @livewire('admin.partials.sidebar')
        <!--/. Main Sidebar Container -->

        <!-- Content Wrapper. Contains page content -->
            @yield('Main')
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->
    @livewireScripts
    <!-- REQUIRED SCRIPTS -->
        {{-- toastr cdn  --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script>
            @if(Session::has('message'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.success("{{ session('message') }}");
            @endif
        
            @if(Session::has('error'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.error("{{ session('error') }}");
            @endif
        
            @if(Session::has('info'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.info("{{ session('info') }}");
            @endif
        
            @if(Session::has('warning'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.warning("{{ session('warning') }}");
            @endif
        </script> 

        <!-- jQuery -->
        <script src="{{ asset('ad-assets') }}/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -assets-->
        <script src="{{ asset('ad-assets') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('ad-assets') }}/dist/js/adminlte.min.js"></script>
    <!--/. REQUIRED SCRIPTS -->
    
</body>
</html>