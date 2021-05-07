
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('dashboard/assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{asset('dashboard/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('dashboard/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dashboard/dist/js/adminlte.js') }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('dashboard/assets/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{asset('dashboard/assets/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{asset('dashboard/assets/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{asset('dashboard/assets/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{asset('dashboard/assets/plugins/chart.js/Chart.min.js') }}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{asset('dashboard/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dashboard/dist/js/pages/dashboard2.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script>
        @if(Session::has('sukses'))
                toastr.success("{{Session::get('sukses')}}", "Sukses")
        @endif
</script>


<script>
        @if(Session::has('gagal'))
                toastr.info("{{Session::get('gagal')}}", "Gagal")
        @endif
</script>

@yield('footer')





<!-- @yield('scripts') -->
