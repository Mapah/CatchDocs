<aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered bg-white  ">
      <div class="navbar-vertical-container">
        <div class="navbar-vertical-footer-offset">
          <!-- Logo -->
          <a class="navbar-brand" href="#" aria-label="Front">
            <span class="navbar-brand-logo btn text-info text-xl" style="font-size: 30px">CATCHDOC</span>
            {{-- <img class="navbar-brand-logo" src="{{active_setting() != null?asset('config/logos/'.active_setting()->logo):''}}" onerror="src='{{asset('backend/svg/logos/logo.svg')}}'" alt="Logo" data-hs-theme-appearance="default" height="60" width="200">
            <img class="navbar-brand-logo" src="{{active_setting() != null?asset('config/logos/'.active_setting()->logo):''}}" onerror="src='{{asset('backend/svg/logos-light/logo.svg')}}'" alt="Logo" data-hs-theme-appearance="dark" height="60" width="200">
            <img class="navbar-brand-logo-mini" src="{{active_setting() != null?asset('config/logos/'.active_setting()->logo):''}}" onerror="src='{{asset('backend/svg/logos/logo-short.svg')}}'" alt="Logo" data-hs-theme-appearance="default" height="60" width="200">
            <img class="navbar-brand-logo-mini" src="{{active_setting() != null?asset('config/logos/'.active_setting()->logo):''}}" onerror="src='{{asset('backend/svg/logos-light/logo-short.svg')}}'" alt="Logo" data-hs-theme-appearance="dark" height="60" width="200"> --}}
          </a>

          <!-- End Logo -->

          <!-- Navbar Vertical Toggle -->
          <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
            <i class="bi-arrow-bar-left navbar-toggler-short-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
            <i class="bi-arrow-bar-right navbar-toggler-full-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
          </button>

          <!-- End Navbar Vertical Toggle -->

           @php
              $segment1 = request()->segment(2);
              $segment2 = request()->segment(3);
          @endphp

          <!-- Content -->
          <div class="navbar-vertical-content" style="background-color: lightcyan">
            @php
                $admin=App\Models\Administration::where('user_id',Auth::user()->id)->first();
            @endphp
            <hr>
            <div class="text center"><span class="text-dark text-center  text-xl" style="font-size: 25px">Admin<br>({{$admin->name}})</span></div>
            <hr>
            <div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">
              <!-- Collapse -->
              <div class="nav-item">
                <a class="nav-link dropdown-toggle {{($segment2=='' && $segment1=='admin_dashboard')?'active':''}}" href="#navbarVerticalMenuDashboards" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuDashboards" aria-expanded="true" aria-controls="navbarVerticalMenuDashboards">
                  <i class="bi bi-speedometer nav-icon"></i>
                  <span class="nav-link-title">Tableaux de bord</span>
                </a>

                <div id="navbarVerticalMenuDashboards" class="nav-collapse collapse show" data-bs-parent="#navbarVerticalMenu">
                  <a class="nav-link {{$segment2==''?'active':''}}" href="{{url('/admin_dashboard')}}">Default</a>
                  {{-- <a class="nav-link " href="../dashboard-alternative.html">Alternative</a> --}}
                </div>
              </div>
              <!-- End Collapse -->


              <!-- Collapse -->
              <div class="navbar-nav nav-compact">

              </div>
              <div id="navbarVerticalMenuPagesMenu">

                <!-- Collapse -->
                <div class="nav-item mt-4">
                    <a class="nav-link dropdown-toggle {{$segment1=='admin_administrations'?'active':''}}" href="#navProdus" role="button" data-bs-toggle="collapse" data-bs-target="#navProjects" aria-expanded="false" aria-controls="navProjects">
                      <i class="bi-house nav-icon"></i>
                      <span class="nav-link-title">Administrations</span>
                    </a>

                    <div id="navProjects" class="nav-collapse collapse"  data-bs-parent="#navbarVerticalMenuPagesMenu">
                      <a class="nav-link {{$segment1=='admin_administrations' && $segment2==''?'active':''}}" href="{{url('/admin_administrations')}}">Aperçu</a>
                      {{-- <a class="nav-link {{$segment1=='administration' && $segment2=='create'?'active':''}}" href="{{url('/administration/create')}}">Nouveau Administration</a> --}}
                    </div>
                  </div>
                  <!-- End Collapse -->

                <!-- Collapse -->
                <div class="nav-item">
                  <a class="nav-link dropdown-toggle {{$segment1=='admin_bureaux'?'active':''}}" href="#navProdus" role="button" data-bs-toggle="collapse" data-bs-target="#navProdus" aria-expanded="false" aria-controls="navProdus">
                    <i class="bi bi-house nav-icon"></i>
                    <span class="nav-link-title">Bureaux</span>
                  </a>

                  <div id="navProdus" class="nav-collapse collapse"  data-bs-parent="#navbarVerticalMenuPagesMenu">
                    <a class="nav-link {{$segment1=='admin_bureaux' && $segment2==''?'active':''}}" href="{{url('/admin_bureaux')}}">Aperçu</a>
                    <a class="nav-link {{$segment1=='admin_bureau' && $segment2=='create'?'active':''}}" href="{{url('/admin_bureau/create')}}">Nouveau bureau</a>
                  </div>
                </div>
                <!-- End Collapse -->

              <!-- Collapse -->
                <div class="nav-item">
                  <a class="nav-link dropdown-toggle {{$segment1=='admin_document'?'active':''}}" href="#navServ" role="button" data-bs-toggle="collapse" data-bs-target="#navServ" aria-expanded="false" aria-controls="navServ">
                    <i class="bi bi-files nav-icon"></i>
                    <span class="nav-link-title">Documents</span>
                  </a>

                  <div id="navServ" class="nav-collapse collapse"  data-bs-parent="#navbarVerticalMenuPagesMenu">
                    <a class="nav-link {{$segment1=='admin_document' && $segment2==''?'active':''}}" href="{{url('/admin_document')}}">Aperçu</a>
                    <a class="nav-link {{$segment1=='admin_document' && $segment2=='create'?'active':''}}" href="{{url('/admin_document/create')}}">Nouveau Document</a>
                  </div>
                </div>
                <!-- End Collapse -->

              </div>
              <!-- End Collapse -->

              {{-- <span class="dropdown-header mt-4">Management</span>
              <small class="bi-three-dots nav-subtitle-replacer"></small> --}}
                <!-- Collapse -->
                 <div class="nav-item">
                  <a class="nav-link dropdown-toggle {{$segment1=='profile'?'active':''}}" href="#navProfile" role="button" data-bs-toggle="collapse" data-bs-target="#navProfile" aria-expanded="false" aria-controls="navProfile">
                    <i class="bi-person nav-icon"></i>
                    <span class="nav-link-title"> Utilisateurs </span>
                  </a>

                  <div id="navProfile" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                    {{-- @hasanyrole('SUPERADMIN|ADMIN') --}}
                    <a class="nav-link {{$segment1=='admin_users'?'active':''}}" href="{{url('/admin_users')}}">Aperçu</a>
                    {{-- @endhasanyrole --}}
                    <a class="nav-link {{$segment1=='admin_user' && $segment2=='create'?'active':''}}" href="{{url('/admin_user/create')}}">Nouveau Utilisateurs</a>
                  </div>
                </div>
                <!-- End Collapse -->


              {{-- <span class="dropdown-header mt-4">Parametres</span>
              <small class="bi-three-dots nav-subtitle-replacer"></small>

                {{-- @hasanyrole('SUPERADMIN|ADMIN') -}}
                <!-- Collapse -->
                <div class="nav-item">
                  <a class="nav-link dropdown-toggle {{$segment1=='settings'?'active':''}}" href="#navSessions" role="button" data-bs-toggle="collapse" data-bs-target="#navSessions" aria-expanded="false" aria-controls="navSessions">
                    <i class="bi-gear-wide-connected nav-icon"></i>
                    <span class="nav-link-title">Parametres</span>
                  </a>

                  <div id="navSessions" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                    <a class="nav-link {{$segment1=='settings' && $segment2==''?'active':''}}" href="{{url('/admin/settings')}}">Aperçu</a>
                    <a class="nav-link {{$segment1=='settings' && $segment2=='create'?'active':''}}" href="{{url('/admin/settings/create')}}">Ajouter Parametre</a>
                  </div>
                </div>
                <!-- End Collapse -->
                @endhasanyrole --}}


              {{-- <div class="nav-item">
                  <a class="nav-link {{$segment1=='problems' && $segment2==''?'active':''}}" role="button" href="{{url('/admin/problems')}}">
                    <i class="bi-chat-square-fill nav-icon"></i>
                    <span class="nav-link-title">Problemes/Suggestions</span>
                  </a>
              </div>


              <div class="nav-item">
                  <a class="nav-link {{$segment1=='notifications' && $segment2==''?'active':''}}" role="button" href="{{url('/admin/notifications')}}">
                    <i class="bi-bell nav-icon"></i>
                    <span class="nav-link-title">Notifications</span>
                  </a>
              </div> --}}




               <span class="dropdown-header mt-4">Se déconnecter</span>
              <small class="bi-three-dots nav-subtitle-replacer"></small>

              <div class="nav-item">
                  <a class="nav-link" role="button" href="#" id="logout">
                    <i class="bi-box-arrow-left nav-icon"></i>
                    <span class="nav-link-title">Se déconnecter</span>
                  </a>
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
                    <span class="dropdown-header">Choisir la langue</span>
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
