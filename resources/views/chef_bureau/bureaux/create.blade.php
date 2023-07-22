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
        <form class="js-step-form py-md-5" data-hs-step-form-options='{
                "progressSelector": "#addUserStepFormProgress",
                "stepsSelector": "#addUserStepFormContent",
                "endSelector": "#addUserFinishBtn",
                "isValidate": false
              }' enctype="multipart/form-data" method="POST" action="{{url('bureau/store')}}">
              @csrf
          <div class="row justify-content-lg-center">
            <div class="col-lg-8">
              <!-- Content Step Form -->
              <div id="addUserStepFormContent">
                <!-- Card -->
                <div id="addUserStepProfile" class="card card-lg active">
                  <!-- Body -->
                  <div class="card-body">
                     <!-- Profile Cover -->
                        <div class="profile-cover mb-4">
                            <div class="profile-cover-img-wrapper">
                            <img id="profileCoverImg" class="profile-cover-img" src='{{asset('backend/img/1920x400/img2.jpg')}}' alt="Image Description">

                            </div>
                        </div>
                        <!-- End Profile Cover -->
                        <!-- Form -->

                    <div class="row mb-4">
                      <label for="firstNameLabel" class="col-sm-3 col-form-label form-label">Libelle/Titre<code>*</code></label>

                      <div class="col-sm-9">
                        <div class="input-group input-group-sm-vertical">
                          <input type="text" class="form-control" name="name"  aria-label="Clarice" required>
                        </div>
                      </div>
                    </div>
                    <!-- End Form -->
<!-- Form -->
<div class="row mb-4">
    <label for="roleLabel" class="col-sm-3 col-form-label form-label">Selectioner une administration </label>

    <div class="col-sm-9">
      <!-- Select -->
      <div class="tom-select-custom mb-4">
        <select class="js-select form-select" name="administration_id" required>
            @foreach ($administrations as $administration)
            <option value="{{ $administration->id }}">{{ $administration->name }}</option>
            @endforeach

        </select>
      </div>
      <!-- End Select -->
    </div>
  </div>
  <!-- End Form -->
                    <!-- Form -->
                    <div class="row mb-4">
                      <label for="description" class="col-sm-3 col-form-label form-label">Description</label>

                      <div class="col-sm-9">
                        <!-- Quill -->
                        <div class="quill-custom">
                          <div class="js-quill" style="min-height: 15rem;"
                              data-hs-quill-options='{
                              "placeholder": "Type your message...",
                                  "modules": {
                                  "toolbar": [
                                      ["bold", "italic", "underline", "strike", "link", "image", "blockquote", "code", {"list": "bullet"}]
                                  ]
                                  }
                              }'>

                          </div>
                        </div>
                        <!-- End Quill -->
                      </div>
                    </div>
                    <!-- End Form -->

                    <!-- End Add Phone Input Field -->
                  </div>
                  <!-- End Body -->

                  <!-- Footer -->
                  <input type="hidden" name="description" id="long-desc-hidden" >
                  {{-- <input type="hidden" name="type" value="PRODUCT" required> --}}
                  <div class="card-footer d-flex justify-content-end align-items-center">
                    <button type="submit" id="submit" class="btn btn-primary">
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


        // INITIALIZATION OF INPUT MASK
        // =======================================================
        //HSCore.components.HSMask.init('.js-input-mask')

        // INITIALIZATION OF FILE ATTACH
        // =======================================================
        new HSFileAttach('.js-file-attach')

         // INITIALIZATION OF QUILLJS EDITOR
        // =======================================================
        HSCore.components.HSQuill.init('.js-quill')

        new HSAddField('.js-add-field')

      }
    })()
  </script>
    <script>
    document.getElementById('submit').addEventListener('click',()=>{
      document.getElementById('long-desc-hidden').value= document.getElementsByClassName('ql-editor')[0].innerHTML;
      document.getElementById('long-desc-hidden-2').value= document.getElementsByClassName('ql-editor')[1].innerHTML;
    })
  </script>
  <x-backend.initialize_toast />

</body>
</html>
