<!-- Search START -->
<div class="search-full collapse bg-dark p-3 pb-lg-0" id="search-open">
    <div class="container position-relative">
        <h2 class="position-absolute start-0 bottom-0 mb-n5 display-1 text-white-stroke opacity-1">
            <span class="d-block">{{ __('translate.search') }}</span>
        </h2>
        <div class="row vh-100">
            <div class="d-flex flex-column my-auto py-5 w-100">
                <!-- Search form START -->
                <form class="form-dark form-line position-relative w-100">
                    <div class="mb-3 input-group-lg input-text-white-stroke mb-0">
                        <!-- Search input -->
                        <input class="form-control font-heading caret-primary mb-0 pe-6" type="text" name="search" placeholder="{{ __('translate.search') }}?">
                        <span class="focus-border"></span>
                    </div>
                    <!-- Search button -->
                    <button type="button" class="position-absolute end-0 top-0 btn pb-3 text-primary-hover h-100">
                        <i class="bi bi-search display-8"></i>
                    </button>
                </form>
                <!-- Search form END -->
                <p class="small mt-2 mb-0"> </p>
            </div>

            <!-- Search button close START -->
            <a class="position-fixed top-0 end-0 m-3 m-md-5 btn btn-white btn-round zoom-hover" data-bs-toggle="collapse" href="javascript:void(0)" data-bs-target="#search-open" aria-expanded="true">
                <i class="fas fa-times p-0"></i>
            </a>
            <!-- Search button close END -->
        </div>
    </div>
</div>
<!-- Search END -->

<!-- Login Popup START -->
<div class="modal fade" id="topbarlogin" >
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header bg-primary pattern-overlay-7">
                    <div class="modal-title p-3 text-white-force">
                        <h5 class="mb-0">{{ __('translate.sign_in') }}!</h5>
                        {{-- <p class="mb-0">Nice to see you! Please log in with your account.</p> --}}
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
        <div class="modal-body">
            <div class="w-100 p-3">
                        <!-- Form START -->
                        <form method="POST" action="{{ url('/login') }}">
                            @csrf
                            <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label" for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail">
                        </div>
                        <!-- Password -->
                        <div class="mb-3">
                            <label class="form-label" for="exampleInputPassword1">{{ __('translate.password') }}</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="*********">
                        </div>
                        <!-- Checkbox -->
                        {{-- <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">keep me signed in</label>
                        </div> --}}
                            <!-- Button -->
                        <div class="row align-items-center">
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-dark btn-line">{{ __('translate.login') }}</button>
                                </div>
                                {{-- <div class="col-sm-8 text-sm-end">
                                    <span class="text-muted">Don't have an account? <a href="sign-up.html">Signup here</a></span>
                                </div> --}}
                            </div>
                        </form>
                        <!-- Form END -->
                    </div>
        </div>
        </div>
    </div>
</div>
<!-- Login Popup END -->
<header class="navbar-light header-static navbar-sticky">
    <!-- Logo Nav START -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo START -->
            <a class="navbar-brand" href="/">
                <!-- Logo SVG Code -->
                <img src="{{ asset('config/logos/'.active_setting()->logo)  }}" class="w-40 h-40">
            </a>
            <!-- Logo END -->

            <!-- Responsive navbar toggler -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"> </span>
        </button>

            <!-- Main Menu START -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav navbar-nav-scroll navbar-nav-scroll mx-auto">
                    <li class="nav-item">	<a class="nav-link" href="/#about">{{ __('translate.about') }}</a></li>
                    <!-- Menu item 5 Services-->
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="/services">Services</a>
                    </li>
                    <!-- Menu item 3 Portfolio -->
                    <li class="nav-item dropdown dropdown-fullwidth">
                        <a class="nav-link " href="/products">{{ __('translate.product') }}s</a>
                    </li>
                    <!-- Menu item 4 Elements -->
                    <li class="nav-item dropdown dropdown-fullwidth">
                        <a class="nav-link " href="/projects">{{ __('translate.projects') }}</a>
                    </li>
                    <!-- Menu item 2 Pages -->
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="/pricing">{{ __('translate.pricing') }}</a>
                    </li>
                    <!-- Menu item 1 Demos -->
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="/careers">{{ __('translate.career') }}s</a>
                    </li>
                    <!-- Menu item 6 link-->
                    <li class="nav-item">	<a class="nav-link " href="/contact">Contact</a></li>
                    <!-- Menu item 1 Demos -->
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="/faq">FAQ</a>
                    </li>
                </ul>
            </div>
            <!-- Main Menu END -->

            <!-- Nav right START -->
            <div class="nav flex-nowrap align-items-center">
                <!-- Nav Search Opener-->
                <div class="nav-item">
                    <a class="nav-link ms-2" data-bs-toggle="collapse" href="javascript:void(0)" data-bs-target="#search-open">
                        <i class="bi bi-search display-9 "> </i>
                    </a>
                </div>
                <!-- Nav Button -->
                <div class="nav-item d-none d-xl-block">
                    <a href="/contact" class="btn btn-sm btn-primary mb-0 mx-2">{{ __('translate.get_estimate') }}!</a>
                </div>
                <!-- Nav side Opener -->
                <div class="nav-item">
                    <a class="nav-link pe-0" data-bs-toggle="offcanvas" href="#offcanvasEnd" role="button" aria-controls="offcanvasEnd">
                        <i class="bi bi-text-right rtl-flip display-8" data-bs-target="#offcanvasEnd"></i>
                    </a>
                </div>
            </div>
            <!-- Nav right END -->
        </div>
    </nav>
    <!-- Logo Nav END -->
</header>
