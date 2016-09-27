<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>

<!-- Select2 -->
<script src="{{ asset('/plugins/select2/select2.full.min.js')}}"></script>

<script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

<!-- DATE RANGE PICKER PLUGIN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{ asset('/plugins/daterangepicker/daterangepicker.js') }}"></script>

<!-- DATE PICKER -->
<script src="{{ asset('/plugins/datepicker/bootstrap-datepicker.js') }}"></script>

<!-- CHART GRAPHICS -->
<script src="{{ asset('/plugins/chartjs/Chart.min.js') }}"></script>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
  var AdminLTEOptions = {
    //Enable sidebar expand on hover effect for sidebar mini
    //This option is forced to true if both the fixed layout and sidebar mini
    //are used together
    sidebarExpandOnHover: true,
    //BoxRefresh Plugin
    enableBoxRefresh: true,
    //Bootstrap.js tooltip
    enableBSToppltip: true
  };

</script>



<!-- AdminLTE App -->
<script src="{{ asset('/js/app.min.js') }}" type="text/javascript"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<script src="{{ asset('/plugins/jQueryUI/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/plugins/rails/rails.js')}}"></script>
<script src="{{ asset('/js/loadRemoteContent.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/physical_test.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/handout_training.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/search.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/dashboard_graphic.js') }}" type="text/javascript"></script>


<!-- Scripts in development mode -->
<script type="text/javascript" src="{{ asset('js/jspdf.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-filestyle.min.js') }}"></script>

<script type="text/javascript">
    $(":file").filestyle({input: false, icon: false, buttonName: "btn-primary",buttonText: "Select Image"});
</script>
