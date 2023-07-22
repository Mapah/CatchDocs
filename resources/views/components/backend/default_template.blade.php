<!DOCTYPE html>
<html lang="en">
<x-backend.head/>

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl">

  <script src="{{asset('backend/js/hs.theme-appearance.js')}}"></script>

  <!-- ========== HEADER ========== -->
  <x-backend.header/>

  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main" class="main">
    <!-- Navbar Vertical -->
    @hasanyrole('ADMIN|SUPERADMIN')
     <x-backend.aside_admin />
    @else
     <x-backend.aside_user />
    @endhasanyrole

    <!-- End Navbar Vertical -->

    <!-- Content -->
    <div class="content container">
      <div class="row justify-content-lg-center pt-lg-5 pt-xl-10">
        <div class="col-lg-9">
          <!-- Title -->
          <div class="text-center">
            <img class="img-fluid mb-5" src="../assets/svg/layouts/demo-layouts-default-classic.svg" alt="Image Description" data-hs-theme-appearance="default" style="max-width: 15rem;">
            <img class="img-fluid mb-5" src="../assets/svg/layouts-light/demo-layouts-default-classic.svg" alt="Image Description" data-hs-theme-appearance="dark" style="max-width: 15rem;">

            <h1>Default (Classic)</h1>
            <p>Customize your overview page layout. Choose the one that best fits your needs.</p>
            <a class="btn btn-primary" href="../layouts/index.html">Go back to Layouts</a>
          </div>
          <!-- End Title -->
        </div>
      </div>
      <!-- End Row -->
    </div>
    <!-- End Content -->

    <!-- Footer -->
    <x-backend.footer />
    <!-- End Footer -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->


  <!-- JS Global Compulsory  -->
  <x-backend.scripts />

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      // INITIALIZATION OF NAVBAR VERTICAL ASIDE
      // =======================================================
      new HSSideNav('.js-navbar-vertical-aside').init()


      // INITIALIZATION OF BOOTSTRAP DROPDOWN
      // =======================================================
      HSBsDropdown.init()


      // INITIALIZATION OF FORM SEARCH
      // =======================================================
      new HSFormSearch('.js-form-search')
    })()
  </script>


</body>
</html>