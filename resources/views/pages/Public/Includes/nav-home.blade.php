<!-- RD Navbar minimal-->
<div class="rd-navbar-wrap">
    <nav class="rd-navbar rd-navbar-minimal rd-navbar-light" data-md-device-layout="rd-navbar-fixed"
        data-lg-device-layout="rd-navbar-static" data-md-stick-up-offset="120px" data-lg-stick-up-offset="120px"
        data-lg-auto-height="true" data-body-class="rd-navbar-absolute" data-md-layout="rd-navbar-fixed"
        data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
        <div class="rd-navbar-inner">
            <div class="rd-navbar-top-panel">
                <!--Navbar Brand-->
                <div class="rd-navbar-brand veil reveal-md-inline-block"><a href="{{ route('home') }}"><img width='171'
                            height='52' class='img-responsive' src="{{ asset('publicArea/images/care.png') }}"
                            alt='' /><br> <small style="color:white; font-size:11px">Powered by Knowledge Health
                            Solutions</small>
                    </a>

                </div>
                <div>
                    <address class="contact-info reveal-sm-inline-block text-left offset-none">
                        <div class="p unit unit-spacing-xs unit-horizontal">
                            <div class="unit-left"><span
                                    class="icon icon-xs icon-circle icon-white-17 icon-gray-light"><i
                                        class="martop color-chng fas fa-phone fa-rotate-90"></i></span>
                            </div>
                            <div class="unit-body"><a class="text-white color-chng" href="tel:18002598897">1-800
                                    259-8897</a>
                            </div>
                        </div>
                    </address>
                    <address class="contact-info reveal-sm-inline-block text-left">
                        <div class="p unit unit-horizontal unit-spacing-xs">
                            <div class="unit-left"><span
                                    class="icon icon-xs icon-circle icon-white-17 icon-gray-light"><i
                                        class="fas color-chng fa-map-marker-alt martop"></i></span>
                            </div>
                            <div class="unit-body"><a class="color-chng text-white" href="#"> 11403 Barker Cypress, Ste
                                    J #122
                                    ,<br>
                                    Cypress, TX 77433</a></div>





                        </div>
                    </address>
                </div>
            </div>
            <!-- RD Navbar Panel-->
            <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle"
                    data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                <!--Navbar Brand-->
                <div class="rd-navbar-brand veil-lg"><a href="{{ route('home') }}"><img width='151' height='52'
                            class='img-responsive' src="{{ asset('../publicArea/images/logo-dark.png') }}" alt='' /></a>
                </div>
                <button class="rd-navbar-top-panel-toggle"
                    data-rd-navbar-toggle=".rd-navbar, .rd-navbar-top-panel"><span></span></button>
            </div>
            <div class="rd-navbar-menu-wrap">
                <div class="rd-navbar-nav-wrap">
                    <div class="rd-navbar-mobile-scroll">
                        <!--Navbar Brand Mobile-->
                        <div class="rd-navbar-mobile-brand"><a href="{{ route('home') }}"><img width='151' height='52'
                                    class='img-responsive' src="{{ asset('../publicArea/images/logo-dark.png') }}"
                                    alt='' /></a>
                        </div>
                        <div class="form-search-wrap">
                            <!-- RD Search Form-->
                            <form class="form-search rd-search" action="search-results.html" method="GET">
                                <div class="form-group">
                                    <label class="form-label form-search-label form-label-sm"
                                        for="rd-navbar-form-search-widget">Search</label>
                                    <input class="form-search-input form-control #{inputClass}"
                                        id="rd-navbar-form-search-widget" type="text" name="s" autocomplete="off" />
                                </div>
                                <button class="form-search-submit" type="submit"><span
                                        class="fa fa-search text-primary"></span></button>
                            </form>
                        </div>
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav">
                            <li class="active"><a class="page-scroll" href="#about"><span>Home</span></a>
                            </li>
                            <li id="abt"><a class="page-scroll" href="#about"><span>About</span></a>
                            </li>
                            <li id="adv"><a class="page-scroll" href="#advantages"><span>Advantages</span></a>
                            </li>

                            <li><a class="page-scroll" href="{{ route('physician') }}"><span>Physician</span></a>
                            </li>
                            {{-- <li id="testi"><a class="page-scroll" href="#testimonials"><span>Testimonials</span></a>
                            </li> --}}
                            <li><a class="page-scroll" href="{{ route('work') }}"><span>How It Works</span></a>
                            </li>

                            <li><a class="page-scroll" href="{{ route('contact') }}"><span>Contact Us</span></a>
                            </li>
                            <li><a href="javascript:void(0)"><span>Account</span></a>
                                <ul class="rd-navbar-dropdown">
                                    @if(Auth::user())
                                    @switch(Auth::user()->user_level)
                                    @case(\App\User::TYPES['ADMIN'])
                                    <li><a href="{{ route('admin-dashboard') }}"><span
                                                class="text-middle">Dashboard</span></a>
                                    </li>
                                    @break
                                    @case(\App\User::TYPES['USER'])
                                    <li><a href="{{ route('member-dashboard') }}"><span
                                                class="text-middle">Dashboard</span></a>
                                    </li>
                                    @break
                                    @case(\App\User::TYPES['DOCTOR'])
                                    <li><a href="{{ route('pcp-dashboard') }}"><span
                                                class="text-middle">Dashboard</span></a>
                                    </li>
                                    @break
                                    @case(\App\User::TYPES['LAB'])
                                    <li><a href="{{ route('lab-dashboard') }}"><span
                                                class="text-middle">Dashboard</span></a>
                                    </li>
                                    @break
                                    @default

                                    @endswitch

                                    <li><a href="javascript:void(0)" data-toggle="modal"
                                            data-target="#logoutModal"><span class="text-middle">Logout</span></a>
                                    </li>
                                    @else
                                    <li><a href="{{ route('register') }}"><span class="text-middle">Sign Up</span></a>
                                    </li>
                                    <li><a href="{{ route('login') }}"><span class="text-middle">Login</span></a>
                                    </li>
                                    @endif
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
