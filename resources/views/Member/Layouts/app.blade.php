<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-6">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#2b2c5a">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#2b2c5a">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#2b2c5a">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Care Free Now Platform">
    <meta name="description" content="A Member Dashboard for Care Free Now Platform">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/png">
    <title>@yield('pg-title','Member Area | Care Free Now')</title>
    @include('Member.Includes.css')

</head>

<body>
    <div id="">
        <h2 class="animate">Care Free Now</h2>
    </div>
    <!-- Sidenav -->
    @include('Member.Includes.side-bar')
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        @include('Member.Includes.nav')
        <!-- Header -->
        <!-- Header -->
        @yield('header-content')
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div style="min-height:400px;">
                @yield('content')
            </div>
            <!-- Footer -->
            @include('Member.Includes.footer')
        </div>
    </div>


    <div class="modal fade" id="logoutModal" tabindex="-1" data-backdrop="static" role="dialog"
        aria-labelledby="modal-notification" aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
            <div class="modal-content bg-gradient-danger modal-sm ">

                <div class="modal-header">
                    <h6 class="modal-title " id="modal-title-notification">Logout</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="py-3 text-center">

                        <h4 class="heading mt-4">Are You Sure!</h4>
                        <p>
                            Do You Want To Logout Now ?
                        </p>
                    </div>

                </div>
                <div class="modal-footer">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="Submit" class="btn btn-white">Sure, Logout</button>
                        <button type="button" class="btn btn-link text-white ml-auto"
                            data-dismiss="modal">Close</button>
                    </form>
                </div>

            </div>
        </div>
    </div>


    @if (Cookie::get('adminsimid'))

    <div id="admin-logged-in" class="bg-gradient-danger">
        <div class="row">
            <div class="col-lg-12">
                <h5 class="text-center text-white">
                    <small>Logged As :{{ Auth::user()->email }}</small>

                </h5>
                <h6 class="text-center">
                    <a href="{{route('simulate-admin.loginback' , Cookie::get('adminsimid'))}}"
                        class="btn btn-link text-light">
                        <i class="fas fa-chevron-left"></i> Back To Admin
                    </a>
                </h6>
            </div>
        </div>
    </div>
    @endif
    <!-- Argon Scripts -->
    <!-- Core -->
    @include('Member.Includes.js')


</body>

</html>
