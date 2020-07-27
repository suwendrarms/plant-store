<html class="wide wow-animation scrollTo" lang="en">

<head>
    <!-- Site Title-->
    <title>Care Free Now</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
        content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="Care Free Now,">
    <link rel="shortcut icon" href="{{ asset('home/img/favicon.png')}}" type="image">

    @include('pages.Public.Includes.css')
    @php
    $curr_url = Route::currentRouteName();
    @endphp
</head>

<body>
    <div class="container-fluid notify-bar animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="text-center">
                    <small>
                        <a class="text-white" href=""> <i class="fas fa-exclamation-circle "
                                data-fa-transform="grow-6"></i>
                            <strong>Important</strong> Covid 19
                            Information</a>
                    </small>
                </h4>
            </div>
        </div>
    </div>
    @if ($curr_url=='home')
    @include('pages.Public.Includes.nav-home')

    @else
    @include('pages.Public.Includes.nav-other')

    @endif

    <div id="loader">
        <h2 class="animate">Care Free Now</h2>
    </div>
    @yield('content')

    <div class="modal fade" id="logoutModal" data-backdrop="static" role="dialog" aria-labelledby="modal-notification"
        aria-hidden="true">
        <div class="modal-dialog modal-primary modal-dialog-centered" role="document">
            <div class="modal-content modal-sm ">

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
                        <button type="Submit" class="btn btn-link">Sure, Logout</button>
                        <button type="button" class="btn btn-link ml-auto" data-dismiss="modal">Close</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    @include('pages.Public.Includes.footer')
    @include('pages.Public.Includes.js')
</body>

</html>
