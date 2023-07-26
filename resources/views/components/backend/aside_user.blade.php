<aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered bg-white  ">
      <div class="navbar-vertical-container">
        <div class="navbar-vertical-footer-offset">
          <!-- Logo -->

          {{-- <a class="navbar-brand" href="{{session('role')=='PARTICIPANT'?'/user':'/admin'}}" aria-label="Front">
            <img class="navbar-brand-logo" src="{{asset('config/sessions/logos'.active_session()->logo)}}" onerror="src='{{asset('backend/svg/logos/logo.svg')}}'" alt="Logo" data-hs-theme-appearance="default">
            <img class="navbar-brand-logo" src="{{asset('config/sessions/logos'.active_session()->logo)}}" onerror="src='{{asset('backend/svg/logos-light/logo.svg')}}'" alt="Logo" data-hs-theme-appearance="dark">
            <img class="navbar-brand-logo-mini" src="{{asset('config/sessions/logos'.active_session()->logo)}}" onerror="src='{{asset('backend/svg/logos/logo-short.svg')}}'" alt="Logo" data-hs-theme-appearance="default">
            <img class="navbar-brand-logo-mini" src="{{asset('config/sessions/logos'.active_session()->logo)}}" onerror="src='{{asset('backend/svg/logos-light/logo-short.svg')}}'" alt="Logo" data-hs-theme-appearance="dark">
          </a> --}}

          <!-- End Logo -->

          <!-- Navbar Vertical Toggle -->
          <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
            <i class="bi-arrow-bar-left navbar-toggler-short-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
            <i class="bi-arrow-bar-right navbar-toggler-full-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
          </button>

          <!-- End Navbar Vertical Toggle -->

           @php
              $segment1 = request()->segment(0);
              $segment2 = request()->segment(1);
          @endphp

          <!-- Content -->
          <div class="navbar-vertical-content" style="background-color: lightcyan"><hr>
            <div class="text center"><span class="text-dark text-center  text-xl" style="font-size: 25px">Super Admin</span></div>
            <hr>
            <div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">
              <!-- Collapse -->
              <div class="nav-item">
                <a class="nav-link dropdown-toggle {{($segment2=='' && $segment1=='user')?'active':''}}" href="#navbarVerticalMenuDashboards" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuDashboards" aria-expanded="true" aria-controls="navbarVerticalMenuDashboards">
                  <i class="bi-house-door nav-icon"></i>
                  <span class="nav-link-title">Tableaux de bord</span>
                </a>

                <div id="navbarVerticalMenuDashboards" class="nav-collapse collapse show" data-bs-parent="#navbarVerticalMenu">
                  <a class="nav-link {{$segment2==''?'active':''}}" href="{{url('/user')}}">Default</a>
                  {{-- <a class="nav-link " href="../dashboard-alternative.html">Alternative</a> --}}
                </div>
              </div>
              <!-- End Collapse -->

              <span class="dropdown-header mt-4">Application</span>
              <small class="bi-three-dots nav-subtitle-replacer"></small>

              <!-- Collapse -->
              <div class="navbar-nav nav-compact">

              </div>
              <div id="navbarVerticalMenuPagesMenu">

                <!-- Collapse -->
                <div class="nav-item">
                  <a class="nav-link dropdown-toggle {{$segment1=='galleries'?'active':''}}" href="#navGalleries" role="button" data-bs-toggle="collapse" data-bs-target="#navGalleries" aria-expanded="false" aria-controls="navGalleries">
                    <i class="bi-card-image nav-icon"></i>
                    <span class="nav-link-title">CMS</span>
                  </a>

                  <div id="navGalleries" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                    <a class="nav-link {{$segment1=='galleries' && $segment2==''?'active':''}}" href="{{url('/user/galleries')}}">Aperçu</a>
                    <a class="nav-link {{$segment1=='galleries' && $segment2=='create'?'active':''}}" href="{{url('/user/galleries/create')}}">Nouvelle photo</a>
                  </div>
                </div>
                <!-- End Collapse -->

                <!-- Collapse -->
                <div class="nav-item">
                  <a class="nav-link dropdown-toggle {{$segment1=='adverts'?'active':''}}" href="#navAds" role="button" data-bs-toggle="collapse" data-bs-target="#navAds" aria-expanded="false" aria-controls="navAds">
                    <i class="bi-badge-ad-fill nav-icon"></i>
                    <span class="nav-link-title">Annonces</span>
                  </a>

                  <div id="navAds" class="nav-collapse collapse"  data-bs-parent="#navbarVerticalMenuPagesMenu">
                    <a class="nav-link {{$segment1=='adverts' && $segment2==''?'active':''}}" href="{{url('/user/adverts')}}">Aperçu</a>
                    <a class="nav-link {{$segment1=='adverts' && $segment2=='create'?'active':''}}" href="{{url('/user/adverts/create')}}">Nouvelle Annonce</a>
                  </div>
                </div>
                <!-- End Collapse -->
              </div>
              <!-- End Collapse -->

              <span class="dropdown-header mt-4">Management</span>
              <small class="bi-three-dots nav-subtitle-replacer"></small>

                <!-- Collapse -->
                <div class="nav-item">
                  <a class="nav-link dropdown-toggle {{$segment1=='profile'?'active':''}}" href="#navProfile" role="button" data-bs-toggle="collapse" data-bs-target="#navProfile" aria-expanded="false" aria-controls="navProfile">
                    <i class="bi-person nav-icon"></i>
                    <span class="nav-link-title">Profiles</span>
                  </a>

                  <div id="navProfile" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                    <a class="nav-link {{$segment1=='company' && $segment2==''?'active':''}}" href="{{url('/user/company')}}">Aperçu</a>
                  </div>
                </div>
                <!-- End Collapse -->


              <span class="dropdown-header mt-4">Parametres</span>
              <small class="bi-three-dots nav-subtitle-replacer"></small>

                <!-- Collapse -->
                <div class="nav-item">
                  <a class="nav-link dropdown-toggle {{$segment1=='categories'?'active':''}}" href="#navCategories" role="button" data-bs-toggle="collapse" data-bs-target="#navCategories" aria-expanded="false" aria-controls="navCategories">
                    <i class="bi-bookmark-check nav-icon"></i>
                    <span class="nav-link-title">Categories</span>
                  </a>

                  <div id="navCategories" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                    <a class="nav-link {{$segment1=='categories' && $segment2==''?'active':''}}" href="{{url('/user/categories')}}">Aperçu</a>
                  </div>
                </div>
                <!-- End Collapse -->


                <!-- Collapse -->
                <div class="nav-item">
                  <a class="nav-link dropdown-toggle {{$segment1=='problems'?'active':''}}" href="#navStands" role="button" data-bs-toggle="collapse" data-bs-target="#navStands" aria-expanded="false" aria-controls="navStands">
                    <i class="bi-geo-alt-fill nav-icon"></i>
                    <span class="nav-link-title">Problemes/ Suggestions</span>
                  </a>

                  <div id="navStands" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                    <a class="nav-link {{$segment1=='problems' && $segment2==''?'active':''}}" href="{{url('/user/problems')}}">Aperçu</a>
                    <a class="nav-link {{$segment1=='problems' && $segment2=='create'?'active':''}}" href="{{url('/user/problems/create')}}">Nouveau Problem/Suggestion</a>
                  </div>
                </div>
                <!-- End Collapse -->

              <span class="dropdown-header mt-4">Se Deconnecter</span>
              <small class="bi-three-dots nav-subtitle-replacer"></small>

              <div class="nav-item">
                <a class="nav-link" href="#" id="logout"><i class="bi-box-arrow-left nav-icon"></i> Se Deconnecter</a>
              </div>


            </div>

          </div>
          <!-- End Content -->

          <!-- Footer -->
          <div class="navbar-vertical-footer">
            <ul class="navbar-vertical-footer-list">

              <li class="navbar-vertical-footer-list-item">
                <!-- Language -->
                <div class="dropdown dropup">
                  <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="selectLanguageDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                    <img class="avatar avatar-xss avatar-circle" src="{{asset('backend/vendor/flag-icon-css/flags/1x1/us.svg')}}" alt="United States Flag">
                  </button>

                  <div class="dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="selectLanguageDropdown">
                    <span class="dropdown-header">Choisir La Language</span>
                    <a class="dropdown-item" href="#">
                      <img class="avatar avatar-xss avatar-circle me-2" src="{{asset('backend/vendor/flag-icon-css/flags/1x1/us.svg')}}" alt="Flag">
                      <span class="text-truncate" title="English">En</span>
                    </a>
                    <a class="dropdown-item" href="#">
                      <img class="avatar avatar-xss avatar-circle me-2" src="{{asset('backend/vendor/flag-icon-css/flags/1x1/fr.svg')}}" alt="Flag">
                      <span class="text-truncate" title="English">Fr</span>
                    </a>
                  </div>
                </div>

                <!-- End Language -->
              </li>
            </ul>
          </div>
          <!-- End Footer -->
        </div>
      </div>
    </aside>
