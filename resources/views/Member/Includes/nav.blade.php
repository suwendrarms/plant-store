<nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Search form -->
            <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                <div class="form-group mb-0">
                    <h5 class="text-left text-light">Member Area</h5>
                </div>
            </form>
            <!-- Navbar links -->
            <ul class="navbar-nav align-items-center  ml-md-auto ">
                <li class="nav-item d-xl-none">
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
                {{--  <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="ni ni-email-83"></i>

                    </a>
                    <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                        <!-- Dropdown header -->
                        <div class="px-3 py-3">
                            <
                        </div>
                        <!-- List group -->
                        <div class="list-group list-group-flush">  --}}

                            {{--  @forelse (Auth::user()->newMessages() as $message)

                            <a href="{{ route('support.member.messages.index') }}"
                                class="list-group-item list-group-item-action">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="avatar avatar-sm">

                                            @if ($message->user->image)
                                            <img src="{{ asset('uploads/crop/'.Auth::user()->image->name) }}"
                                                alt="Profile Image" class="rounded-circle">
                                            @else
                                            <img src="{{asset('img/patients.jpeg')}}" alt="Image placeholder"
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
                            </a>  --}}

                            {{-- <a class="dropdown-item d-flex align-items-left"
                                href="{{ route('support.member.messages.index') }}">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="{{ asset('images/user-profile.png') }}" alt="">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <div class="font-weight-bold">
                                <div class="text-truncate">
                                    {{ substr($message->message,15) }}{{ strlen($message->message)>15?'...':'' }}
                                </div>
                                <div class="small text-gray-500">Admin · {{ $message->created_at }}</div>
                            </div>
                            </a> --}}
                            {{--  @empty
                            <a class="dropdown-item d-flex align-items-left" href="javascript:void(0)">
                                <small>No New Messages From Admin</small>
                            </a>
                            @endforelse  --}}
                            {{-- <a class="dropdown-item text-center small text-gray-500"
                                href="{{ route('support.member.messages.index') }}">Inbox</a> --}}
                            {{--  <!-- View all -->
                            <a href="{{ route('support.member.messages.index') }}"
                                class="dropdown-item text-center text-primary font-weight-bold py-3">View
                                all</a>  --}}
                        {{--  </div>
                    </div>
                </li>  --}}

                {{-- <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="ni ni-ungroup"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                        <div class="row shortcuts px-4">
                            <a href="#!" class="col-4 shortcut-item">
                                <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                                    <i class="ni ni-calendar-grid-58"></i>
                                </span>
                                <small>Calendar</small>
                            </a>
                            <a href="#!" class="col-4 shortcut-item">
                                <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                                    <i class="ni ni-email-83"></i>
                                </span>
                                <small>Email</small>
                            </a>
                            <a href="#!" class="col-4 shortcut-item">
                                <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                                    <i class="ni ni-credit-card"></i>
                                </span>
                                <small>Payments</small>
                            </a>
                            <a href="#!" class="col-4 shortcut-item">
                                <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                                    <i class="ni ni-books"></i>
                                </span>
                                <small>Reports</small>
                            </a>
                            <a href="#!" class="col-4 shortcut-item">
                                <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                                    <i class="ni ni-pin-3"></i>
                                </span>
                                <small>Maps</small>
                            </a>
                            <a href="#!" class="col-4 shortcut-item">
                                <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                                    <i class="ni ni-basket"></i>
                                </span>
                                <small>Shop</small>
                            </a>
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
                                    src="{{ Auth::user()->image!=[]?asset('uploads/crop/'.Auth::user()->image->name):asset('img/patients-default.png') }}">
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
                        <a href="" class="dropdown-item">
                            <i class="ni ni-single-02"></i>
                            <span>My profile</span>
                        </a>
                        {{-- <a href="{{ route('coming-soon') }}" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>Settings</span>
                        </a>
                        <a href="{{ route('coming-soon') }}" class="dropdown-item">
                            <i class="ni ni-calendar-grid-58"></i>
                            <span>Activity</span>
                        </a> --}}
                        <a href="" class="dropdown-item">
                            <i class="ni ni-support-16"></i>
                            <span>Support</span>
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
