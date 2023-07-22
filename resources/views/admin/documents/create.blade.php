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
     <x-backend.aside_admin />
    <!-- End Navbar Vertical -->
    <div class="container mt-4">
        <!-- page header -->
        <x-backend.page_header :user="'Admin'" title="Products" :type="'Creer'"/>
        <!-- End page header -->
        <!-- Step Form -->
        <div class="row justify-content-lg-center">
            <div class="col-lg-11">
             <form method="POST" action="{{url('/document/store')}}" enctype="multipart/form-data">
             @csrf
              <!-- Title -->
              <div>
                <!-- Input Group -->
                <div class="row mb-3 mt-5">
                  <div class="col-sm-3 d-flex align-items-center">
                  <label for="inputGroupMergeFullName" class="form-label">Document <code>*</code></label>
                  </div>
                  <div class="col-sm-9 d-flex">
                    <!-- Avatar -->
                    <label class="avatar avatar-xxl avatar-circle avatar-uploader" for="editAvatarUploaderModal">
                      <img id="editAvatarImgModal" class="avatar-img" src="{{asset('backend/img/160x160/img2.jpg')}}" alt="Image Description">

                      <input type="file" class="js-file-attach avatar-uploader-input" id="editAvatarUploaderModal"
                            data-hs-file-attach-options='{
                                  "textTarget": "#editAvatarImgModal",
                                  "mode": "image",
                                  "targetAttr": "src",
                                  "allowTypes": [".png", ".jpeg", ".jpg",".jfif",".pdf"]
                              }' name="document">

                      <span class="avatar-uploader-trigger">
                        <i class="bi-pencil-fill avatar-uploader-icon shadow-sm"></i>
                      </span>
                    </label>
                    <!-- End Avatar -->
                  </div>
                </div>
                <!-- End Input Group -->

                <!-- Input Group -->
                <div class="mb-3">
                  <label for="inputGroupMergeFullName" class="form-label">Nom <code>*</code></label>

                  <div class="">
                    <input type="text" name="name" class="form-control" required>
                  </div>
                </div>
                <!-- End Input Group -->

                <!-- Input Group -->
                <div class="mb-3">
                    <label for="inputGroupMergeFullName" class="form-label">code <code>*</code></label>

                    <div class="">
                      <input type="text" name="code" class="form-control" required>
                    </div>
                  </div>
                  <!-- End Input Group -->

                  <!-- Input Group -->
                <div class="mb-3">
                    <label for="inputGroupMergeFullName" class="form-label">Numero</label>

                    <div class="">
                      <input type="number" name="number" class="form-control" required>
                    </div>
                  </div>
                  <!-- End Input Group -->

<!-- Form -->
<div class="row mb-4">
    <label for="roleLabel" class="col-sm-3 col-form-label form-label">Bureau </label>

    <div class="col-sm-9">
      <!-- Select -->
      <div class="tom-select-custom mb-4">
        <select class="js-select form-select" name="bureau_id" required>
            <option></option>
            @foreach ($bureaux as $bureau)
            <option value="{{ $bureau->id }}">{{ $bureau->name }}</option>
            @endforeach

        </select>
      </div>
      <!-- End Select -->
    </div>
  </div>
  <!-- End Form -->

                <!-- Form -->
                <div class="row mb-4">
                    <label for="roleLabel" class="col-sm-3 col-form-label form-label">Selectioner Le chef bureau</label>

                    <div class="col-sm-9">
                      <!-- Select -->
                      <div class="tom-select-custom mb-4">
                        <select class="js-select form-select" name="user_id" required>
                            <option></option>
                            @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach

                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                  </div>
                  <!-- End Form -->


               <!-- Input Group -->
                <div class="mb-5">
                   <button class="btn btn-success" type="submit">Creer</button>
                </div>
                <!-- End Input Group -->

              </div>
              <!-- End Title -->
             </form>
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
      {{-- <script>
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
      </script> --}}

        <script>
      $(document).on('ready', function () {
        // INITIALIZATION OF FILE ATTACH
        // =======================================================
        new HSFileAttach('.js-file-attach')
      });
    </script>
      <x-backend.initialize_toast />

    </body>
    </html>
