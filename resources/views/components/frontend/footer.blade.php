<footer class="bg-dark footer-sticky pt-6">
    <div class="container">
        <div class="row">

            <!-- Footer Widget 1 -->
            <div class="col-md-6 col-lg-3 mb-5">
                <h3 class="text-white">{{ active_setting()->company_name }}<span class="text-primary">.</span></h3>
                <p>{{ active_setting()->company_slogan }}</p>
                <div class="d-flex me-auto">
                    <h6 class="mt-2 me-4 text-white">{{ __('translate.follow_on') }}:</h6>
                    <div class="list-group-inline list-unstyled text-primary-hover">
                        <a href="https://www.facebook.com/{{ active_setting()->contact->facebook }}" class="list-group-item text-white bg-transparent">Fb</a>
                        <a href="https://www.twitter.com/{{ active_setting()->contact->twitter }}" class="list-group-item text-white bg-transparent">Tw</a>
                        <a href="https://www.linkedin.com/{{ active_setting()->contact->linkedin }}" class="list-group-item text-white bg-transparent">Li</a>
                    </div>
                </div>
            </div>

            <!-- Footer Widget 2 -->
            <div class="col-md-6 col-lg-3 mb-5">
                <h5 class="mb-4 text-white">{{ __('translate.our_offices') }}</h5>
                <!-- Address 1 -->
                <p class="text-white mb-2">{{ active_setting()->city->name }}, Cameroon ({{ __('translate.hq') }})</p>
                <address class="mb-0">{{ active_setting()->location }}</address>
                <p>{{ __('translate.call_us') }}: <a href="tel:237{{ active_setting()->contact->phone }}" class="text-body"><u>+237 {{ active_setting()->contact->phone }}</u></a> </p>
                <!-- Address 2 -->
                {{-- <p class="text-white mb-2">Mumbai, India</p>
                <address class="mb-0">2492 Centennial NW, Acworth, GA, 30102</address>
                <p>Call: <a href="#" class="text-body"><u>(678) 324-1251</u> (Toll-free)</a> </p> --}}
            </div>

            <!-- Footer Widget 3 -->
            <div class="col-md-6 col-lg-3 mb-5">
                <h5 class="mb-4 text-white">{{ __('translate.useful_links') }}</h5>
                <div class="row">
                    {{-- <div class="col-6">
                        <ul class="nav flex-column text-primary-hover">
                            <li class="nav-item"><a class="nav-link pt-0" href="/projects">Our Work</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Develop</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Builder</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Market</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Support</a></li>
                        </ul>
                    </div> --}}
                    <div class="col-6">
                        <ul class="nav flex-column text-primary-hover">
                            <li class="nav-item"><a class="nav-link pt-0" href="/#about">{{ __('translate.about') }}</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="/careers">
                                    {{ __('translate.career') }}
                                {{-- <span class="badge bg-danger ms-2">2 Job</span> --}}
                            </a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#">{{ __('translate.work') }}</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">{{ __('translate.news') }}</a></li>
                            <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Footer Widget 4 -->
            <div class="col-md-6 col-lg-3 mb-5">
                <h5 class="mb-4 text-white">{{ __('translate.stay_intouch') }}</h5>
                <form>
                    <label class="form-label">{{ __('translate.signup_newsletter') }}</label>
                    <div class="mb-3">
                        <input class="form-control" type="email" placeholder="email...">
                    </div>
                    <div class="mb-3">
                        <button type="submit" value="Subscribe" class="btn btn-primary mb-0">{{ __('translate.join_us') }}</button>
                    </div>
                </form>
            </div>

        </div>
        <!-- Divider -->
        <div class="divider-light opacity-1"></div>

        <!-- Footer copyright START -->

        <!-- Footer copyright END -->
    </div>
</footer>
