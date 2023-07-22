 <!-- JS Global Compulsory  -->
  <script src="{{asset('backend/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('backend/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('backend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

  <!-- JS Implementing Plugins -->
  {{-- new --}}
    <script src="{{asset('backend/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js')}}"></script>
    <script src="{{asset('backend/vendor/hs-form-search/dist/hs-form-search.min.js')}}"></script>
    <script src="{{asset('backend/vendor/hs-toggle-password/dist/js/hs-toggle-password.js')}}"></script>
    <script src="{{asset('backend/vendor/hs-file-attach/dist/hs-file-attach.min.js')}}"></script>
    <script src="{{asset('backend/vendor/hs-nav-scroller/dist/hs-nav-scroller.min.js')}}"></script>
    <script src="{{asset('backend/vendor/hs-step-form/dist/hs-step-form.min.js')}}"></script>
    <script src="{{asset('backend/vendor/hs-counter/dist/hs-counter.min.js')}}"></script>
    <script src="{{asset('backend/vendor/appear/dist/appear.min.js')}}"></script>
    <script src="{{asset('backend/vendor/imask/dist/imask.min.js')}}"></script>
    <script src="{{asset('backend/vendor/tom-select/dist/js/tom-select.complete.min.js')}}"></script>
    <script src="{{asset('backend/vendor/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/vendor/datatables.net.extensions/select/select.min.js')}}"></script>
    <script src="{{asset('backend/vendor/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('backend/vendor/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('backend/vendor/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('backend/vendor/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('backend/vendor/pdfmake/build/vfs_fonts.js')}}"></script>
    <script src="{{asset('backend/vendor/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('backend/vendor/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('backend/vendor/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('backend/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('backend/vendor/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('backend/vendor/flatpickr/dist/flatpickr.min.js')}}"></script>
    <script src="{{asset('backend/vendor/quill/dist/quill.min.js')}}"></script>
    <script src="{{asset('backend/vendor/fslightbox/index.js')}}"></script>
    <script src="{{asset('backend/vendor/hs-add-field/dist/hs-add-field.min.js')}}"></script>
    <script src="{{asset('backend/vendor/chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{asset('backend/vendor/leaflet/dist/leaflet.js')}}"></script>
    <script src="{{asset('backend/vendor/jsvectormap/dist/js/jsvectormap.min.js')}}"></script>
    <script src="{{asset('backend/vendor/jsvectormap/dist/maps/world.js')}}"></script>

  <!-- JS Front -->
  <script src="{{asset('backend/js/theme.min.js')}}"></script>
  <script src="{{asset('backend/js/hs.theme-appearance-charts.js')}}"></script>

  {{-- logout --}}

  <script>
    function logout() {
      var baseurl = '{{url("/logout")}}' ;
                $.ajax({
                    url: baseurl,
                    type: "POST",
                    dataType: "json",
                    cache: false,
                    data:{
                      _token: "{{csrf_token()}}"
                    },
                    success: function (data) {
                        console.log(data);
                        location.reload();
                    },
                    error: (err) => {
                      console.log(err);
                      location.reload();
                    },
                    timeout: 20000
                });
    }
  </script>
  <script>
   $(document).ready(function () {
        $('#logout').on('click', function () {
          //empty first
            logout(); 
        });
        $('#logout-2').on('click', function () {
          //empty first
            logout(); 
        });
        
    });
  </script>