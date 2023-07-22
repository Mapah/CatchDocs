
    
     <nav class="js-mega-menu navbar-nav-wrap navbar-floating-nav bg-white">
      <!-- Logo -->
      <a class="navbar-brand" href="https://allovaho.cm/" aria-label="Allo vaho">
        <img class="navbar-brand-logo" src="{{asset('frontend/assets/svg/logos/logo.svg')}}" alt="{{active_setting()->logo_name}}" data-hs-theme-appearance="default">
        <img class="navbar-brand-logo" src="{{asset('frontend/assets/svg/logos/logo.svg')}}" alt="{{active_setting()->logo_name}}" data-hs-theme-appearance="dark">
      </a>
      <!-- End Logo -->

      <!-- Secondary Content -->
      <div class="navbar-nav-wrap-secondary-content">
        <div class="d-none d-lg-block">

        </div>
        <div class="dropdown ">
         
          <!-- language -->
           <!-- Select -->

      <button class="d-none d-lg-flex btn btn-ghost-secondary   dropdown-toggle" type="button" id="dropdownMenuButtonGhostSecondary" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{asset('frontend/node_modules/flag-icon-css/flags/1x1/fr.svg')}}" alt="Image description" width="16" /> Français                                </button>
          <button class="d-flex d-lg-none btn btn-ghost-secondary dropdown-toggle" type="button" id="dropdownMenuButtonGhostSecondary" data-bs-toggle="dropdown" aria-expanded="false">
                           <span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{asset('frontend/node_modules/flag-icon-css/flags/1x1/fr.svg')}}" alt="Image description" width="16" /> Fr                                </button>
                               <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                         <a class="dropdown-item" href=""><span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{asset('frontend/node_modules/flag-icon-css/flags/1x1/gb.svg')}}" alt="Image description" width="16" />English</a>
             <a class="dropdown-item" href=""><span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{asset('frontend/node_modules/flag-icon-css/flags/1x1/fr.svg')}}" alt="Image description" width="16" />Français</a>
            </div>
                                                                                            
          <!-- End language -->
        </div>
        <!-- Style Switcher -->
        <div class="dropdown">
          <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="selectThemeDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>

          </button>

           <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="selectThemeDropdown">
              <a class="dropdown-item" href="#" data-icon="bi-moon-stars" data-value="auto">
                <i class="bi-moon-stars me-2"></i>
                <span class="text-truncate" title="Auto (system default)">Auto (système par défaut)</span>
              </a>
              <a class="dropdown-item" href="#" data-icon="bi-brightness-high" data-value="default">
                <i class="bi-brightness-high me-2"></i>
                <span class="text-truncate" title="Default (light mode)">Par défaut (mode claire)</span>
              </a>
              <a class="dropdown-item active" href="#" data-icon="bi-moon" data-value="dark">
                <i class="bi-moon me-2"></i>
                <span class="text-truncate" title="Dark">Sombre</span>
              </a>
            </div>
        </div>

        <!-- End Style Switcher -->

        <a class="d-none d-lg-flex btn btn-primary navbar-btn" href="/login">Se connecter</a>
      </div>
      <!-- End Secondary Content -->

      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContainerNavDropdown" aria-controls="navbarContainerNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-default">
          <i class="bi-list"></i>
        </span>
        <span class="navbar-toggler-toggled">
          <i class="bi-x"></i>
        </span>
      </button>
      <!-- End Toggler -->

      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="navbarContainerNavDropdown">
        <ul class="navbar-nav">

          <li class="nav-item"><a class="nav-link py-2 py-lg-3" href="/">Accueil</a></li>
          <li class="nav-item"><a class="nav-link py-2 py-lg-3" href="/pricing">Forfaits</a></li>
          <li class="nav-item"><a class="nav-link py-2 py-lg-3" href="/app">Application</a></li>
          <li class="nav-item"><a class="nav-link py-2 py-lg-3" href="/contact">Contact</a></li>
          <li class="nav-item"><a class="nav-link py-2 py-lg-3" href="/faq">FAQ</a></li>

          <li class="nav-item mt-2"><a class=" d-flex d-lg-none  btn btn-primary navbar-btn" target="_blank" href="login.html">Se connecter</a></li>

        </ul>
      </div>
      <!-- End Collapse -->
    </nav>