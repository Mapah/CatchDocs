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
     <x-backend.aside_chefbureau />
    <!-- End Navbar Vertical -->
    <div class="container mt-4">
        <!-- page header -->
        <x-backend.page_header :user="'Admin'" title="Users" :type="'create'"/>
        <!-- End page header -->
        <!-- Step Form -->
        <form class="js-step-form py-md-5" data-hs-step-form-options='{
                "progressSelector": "#addUserStepFormProgress",
                "stepsSelector": "#addUserStepFormContent",
                "endSelector": "#addUserFinishBtn",
                "isValidate": false
              }' action="{{url('/user/store')}}" method="POST" enctype="multipart/form-data">
              @csrf
          <div class="row justify-content-lg-center">
            <div class="col-lg-8">
              <!-- Content Step Form -->
              <div id="addUserStepFormContent">
                <!-- Card -->
                <div id="addUserStepProfile" class="card card-lg active">
                  <!-- Body -->
                  <div class="card-body">

                    <!-- Form -->
                    <div class="row mb-4">
                      <label for="firstNameLabel" class="col-sm-3 col-form-label form-label">Nom Complet  <code>*</code></label>

                      <div class="col-sm-9">
                        <div class="input-group input-group-sm-vertical">
                          <input type="text" class="form-control" name="name" id="firstNameLabel" placeholder="nom" aria-label="nom" required>
                          {{-- <input type="text" class="form-control" name="lastName" id="lastNameLabel" placeholder="Boone" aria-label="Boone"> --}}
                        </div>
                      </div>
                    </div>
                    <!-- End Form -->

                    <!-- Form -->
                    <div class="row mb-4">
                      <label for="emailLabel" class="col-sm-3 col-form-label form-label">Email <code>*</code></label>

                      <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" id="emailLabel" placeholder="email@site.com" aria-label="email@site.com" required>
                      </div>
                    </div>
                    <!-- End Form -->

                    <!-- Form -->
                    <div class="row mb-4">
                        <label for="phoneLabel" class="col-sm-3 col-form-label form-label">Phone <code>*</code></label>

                        <div class="col-sm-9">
                          <input type="number" class="form-control" name="phone" id="phoneLabel" placeholder="xxx xxx xxx" aria-label="cxxx xxx xxx" required>
                        </div>
                      </div>
                      <!-- End Form -->
<!-- Form -->
<div class="row mb-4">
    <label for="functionLabel" class="col-sm-3 col-form-label form-label">Function  <code>*</code></label>

    <div class="col-sm-9">
      <div class="input-group input-group-sm-vertical">
        <input type="text" class="form-control" name="function" id="functionLabel" placeholder="function" aria-label="function" required>
        {{-- <input type="text" class="form-control" name="lastName" id="lastNameLabel" placeholder="Boone" aria-label="Boone"> --}}
      </div>
    </div>
  </div>
  <!-- End Form -->
                    <!-- Form -->
                    <div class="row mb-4">
                      <label for="roleLabel" class="col-sm-3 col-form-label form-label">Role</label>

                      <div class="col-sm-9">
                        <!-- Select -->
                        <div class="tom-select-custom mb-4">
                          <select class="js-select form-select" name="role" required>
                            <option value="ADMIN">ADMIN</option>
                            <option value="CHEFBUREAU">CHEF BUREAU</option>
                          </select>
                        </div>
                        <!-- End Select -->
                      </div>
                    </div>
                    <!-- End Form -->

                    <!-- End Form -->
                  </div>
                  <!-- End Body -->

                  <!-- Footer -->
                  <div class="card-footer d-flex justify-content-end align-items-center">
                    <button type="submit" class="btn btn-primary">
                      Creer <i class="bi-chevron-right"></i>
                    </button>
                  </div>
                  <!-- End Footer -->
                </div>
                <!-- End Card -->
              </div>
              <!-- End Content Step Form -->

            </div>
          </div>
          <!-- End Row -->
        </form>
        <!-- End Step Form -->
    </div>

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
      window.onload = function () {


        // INITIALIZATION OF NAVBAR VERTICAL ASIDE
        // =======================================================
        new HSSideNav('.js-navbar-vertical-aside').init()


        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        new HSFormSearch('.js-form-search')


        // INITIALIZATION OF BOOTSTRAP DROPDOWN
        // =======================================================
        HSBsDropdown.init()


        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select')


        // INITIALIZATION OF FILE ATTACH
        // =======================================================
        new HSFileAttach('.js-file-attach')

      }
    })()
  </script>
  <x-backend.initialize_toast />

</body>
</html>
