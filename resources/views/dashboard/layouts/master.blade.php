
<!DOCTYPE html>
<html lang="en">
<head>
    @include('dashboard.layouts.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  @include('dashboard.layouts.navbar')

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('dashboard.layouts.sidebar')



  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->

  @include('dashboard.layouts.footer')

 
  <!-- @yield('scripts') -->

</div>

<!-- ./wrapper -->  
    @include('dashboard.layouts.script')

  @yield('scripts')

</body>
</html>
