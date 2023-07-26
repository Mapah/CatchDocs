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
     <x-backend.aside_spadmin />
    <!-- End Navbar Vertical -->
    <div class="container mt-4">
        <!-- page header -->
        <x-backend.page_header :user="'Super Admin'" title="bureaus" :type="'Edit'"/>
        <!-- End page header -->
        <!-- Step Form -->
        <form class="js-step-form py-md-5" data-hs-step-form-options='{
                "progressSelector": "#addUserStepFormProgress",
                "stepsSelector": "#addUserStepFormContent",
                "endSelector": "#addUserFinishBtn",
                "isValidate": false
              }' enctype="multipart/form-data" method="POST" action="{{url('bureau/update')}}">
              @csrf
          <div class="row justify-content-lg-center">
            <div class="col-lg-8">
              <!-- Content Step Form -->
              <div id="addUserStepFormContent">
                <!-- Card -->
                <div id="addUserStepProfile" class="card card-lg active">
                  <!-- Body -->
                  <div class="card-body">
<h3>Chef Bureau: {{$bureau->user->name}}</h3>
                    <!-- Form -->
                    <div class="row mb-4">
                      <label for="firstNameLabel" class="col-sm-3 col-form-label form-label">Libelle/Titre<code>*</code></label>

                      <div class="col-sm-9">
                        <div class="input-group input-group-sm-vertical">
                          <input type="text" class="form-control" name="name" value='{{$bureau->name}}'  aria-label="Clarice" required>
                        </div>
                      </div>
                    </div>
                    <!-- End Form -->

                    <!-- Form -->
                    <div class="row mb-4">
                      <label for="firstNameLabel" class="col-sm-3 col-form-label form-label">Description</label>

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
                              {!!$bureau->description!!}
                          </div>
                        </div>
                        <!-- End Quill -->
                      </div>
                    </div>
                    <!-- End Form -->
<!-- Form -->
<div class="row mb-4">
    <label for="roleLabel" class="col-sm-5 col-form-label form-label">Changer Le chef bureau ({{$bureau->name ?? ''}}) </label>

    <div class="col-sm-7">
      <!-- Select -->
      <div class="tom-select-custom mb-4">
        <select class="js-select form-select" name="user_id">
            <option value=""></option>
            @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach

        </select>
      </div>
      <!-- End Select -->
    </div>
  </div>
  <!-- End Form -->
                  </div>
                  <!-- End Body -->

                  <!-- Footer -->
                  <input type="hidden" name="description" id="long-desc-hidden" value="{{$bureau->description}}" >
                  <input type="hidden" name="description_en" id="long-desc-hidden-2" value="{{$bureau->description}}" >
                  <input type="hidden" name="id" value="{{$bureau->id}}" required>
                  {{-- <input type="hidden" name="type" value="bureau" required> --}}
                  <div class="card-footer d-flex justify-content-end align-items-center">
                    <button type="submit" id="submit" class="btn btn-primary">
                      Modifier <i class="bi-chevron-right"></i>
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
