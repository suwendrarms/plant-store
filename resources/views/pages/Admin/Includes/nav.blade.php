<nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Search form -->
            <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                <div class="form-group mb-0">
                    <h5 class="text-left text-light">Admin Area</h5>
                </div>
            </form>
            <!-- Navbar links -->
            <ul class="navbar-nav align-items-center  ml-md-auto ">
                {{-- <li class="nav-item d-xl-none">
                    <!-- Sidenav toggler -->
                    <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin"
                        data-target="#sidenav-main">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="ni ni-email-83"></i>
                        @if (count(Auth::user()->newMessages())>0)
                        <span class="badge badge-danger badge-counter">{{ count(Auth::user()->newMessages()) }}</span>
                        @endif
                    </a>
                    <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                        <!-- Dropdown header -->
                        <div class="px-3 py-3">
                            <h6 class="text-sm text-muted m-0">You have <strong
                                    class="text-primary">{{count(Auth::user()->newMessages())}}</strong>
                                notifications.</h6>
                        </div>
                        <!-- List group -->
                        <div class="list-group list-group-flush">

                            @forelse (Auth::user()->newMessages() as $message)

                            <a href="{{ route('support.member.messages.index') }}"
                                class="list-group-item list-group-item-action">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="avatar avatar-sm">

                                            @if ($message->user->image)
                                            <img src="{{ asset('uploads/crop/'.Auth::user()->image->name) }}"
                                                alt="Profile Image" class="rounded-circle">
                                            @else
                                            <img src="{{asset('img/male.jpg')}}" alt="Image placeholder"
                                                class="avatar rounded-circle">
                                            @endif
                                        </div>
                                        <!-- Avatar -->
                                    </div>
                                    <div class="col ml--2">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h4 class="mb-0 text-sm">{{ $message->user->firstname }}&nbsp;
                                                    {{ $message->user->lastname }}
                                                </h4>
                                            </div>
                                            <div class="text-right text-muted">
                                                <small>{{ $message->created_at }}</small>
                                            </div>
                                        </div>
                                        <p class="text-sm mb-0">{{ $message->message }}</p>
                                    </div>
                                </div>
                            </a>


                            @empty
                            <a class="dropdown-item d-flex align-items-left" href="javascript:void(0)">
                                <small>No New Messages From Admin</small>
                            </a>
                            @endforelse

                            <a href="{{ route('support.member.messages.index') }}"
                                class="dropdown-item text-center text-primary font-weight-bold py-3">View
                                all</a>
                        </div>
                    </div>
                </li> --}}


            </ul>
            <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                <li class="nav-item dropdown">
                    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="media align-items-center">
                            <span class="avatar avatar-sm rounded-circle">
                                <img alt="Image placeholder"
                                    src="{{ Auth::user()->image!=[]?asset('uploads/crop/'.Auth::user()->image->name):asset('img/admin.png') }}">
                            </span>
                            <div class="media-body  ml-2  d-none d-lg-block">
                                <span
                                    class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->firstname.' '.Auth::user()->lastname }}</span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu  dropdown-menu-right ">
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome!</h6>
                        </div>
                        <a href="{{ route('edit-profile') }}" class="dropdown-item">
                            <i class="ni ni-single-02"></i>
                            <span>My profile</span>
                        </a>

                        <div class="dropdown-divider"></div>
                        <a href="#!" data-toggle="modal" data-target="#logoutModal" class="dropdown-item">
                            <i class="ni ni-user-run"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
