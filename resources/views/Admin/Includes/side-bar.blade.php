{{--  @php
$user_step = \domain\Facades\LifeServiceFacde::getOneUserStep(Auth::user()->id);

$r_access = in_array(Auth::user()->email,explode(',',config('app.availableMails')));
@endphp  --}}


<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="{{ asset('img/logo.png') }}" class="navbar-brand-img" alt="...">
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ $curr_url=='admin-dashboard'?'active':'' }}"
                            href="{{ route('admin-dashboard') }}">
                            <i class="ni ni-collection text-orange"></i>
                            <span>Dashboard</span></a>
                    </li>
                    <!-- Divider -->
                </ul>
                <hr class="my-3">
                <h6 class="navbar-heading p-0 text-muted">
                    <span class="docs-normal">User</span>
                </h6>
                <!-- Heading -->
                {{--  <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link {{ $curr_url=='admin-dashboard-lab'?'active':'' }}"
                            href="{{ route('admin-dashboard-lab')}}">
                            <i class="fas fa-flask text-yellow"></i>
                            <span class="nav-link-text">Laboratories</span></a>
                    </li>
                </ul>
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link {{ $curr_url=='admin-dashboard-physician'?'active':'' }}"
                            href="{{ route('admin-dashboard-physician')}}">
                            <i class="fa fa-user-md text-green"></i>
                            <span class="nav-link-text">Physicians</span></a>
                    </li>
                </ul>
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link {{ $curr_url=='admin-dashboard-users'?'active':'' }}"
                            href="{{ route('admin-dashboard-users')}}">
                            <i class="fas fa-users text-red"></i>
                            <span class="nav-link-text">Patients</span></a>
                    </li>
                </ul>
                <hr class="my-3">

                <h6 class="navbar-heading p-0 text-muted">
                    <span class="docs-normal">Support</span>
                </h6>
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link {{ $curr_url=='admin-messages'?'active':'' }}"
                            href="{{ route('admin-messages') }}">
                            <i class="fas fa-envelope text-primary"></i>
                            <span class="nav-link-text">Inbox</span></a>
                    </li>
                </ul>
                <hr class="my-3">

                <h6 class="navbar-heading p-0 text-muted">
                    <span class="docs-normal">Other</span>
                </h6>
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link {{ $your_information = in_array($curr_url,['admin-dashboard-settings','admin-dashboard-password'])?'active':'' }}"
                            href="#navbar-setting-informations" data-toggle="collapse" role="button"
                            aria-expanded="{{ $your_information==true?'true':'false' }}"
                            aria-controls="navbar-user-informations">
                            <i class="fas fa-wrench text-dark"></i>
                            <span class="nav-link-text">Settings</span>
                        </a>
                        <div class="collapse  {{ $your_information==true?'show':'' }}" id="navbar-setting-informations">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('admin-dashboard-settings') }}"
                                        class="nav-link {{ $curr_url=='admin-dashboard-settings'?'active':'' }}">
                                        <span class="sidenav-mini-icon"> S </span>
                                        <span class="sidenav-normal"> Genaral
                                            Settings
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin-dashboard-password') }}"
                                        class="nav-link {{ $curr_url=='admin-dashboard-password'?'active':'' }}">
                                        <span class="sidenav-mini-icon"> </span>
                                        <span class="sidenav-normal"> Change
                                            Password
                                        </span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                </ul>

                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link {{ $your_information = in_array($curr_url,['admin-dashboard-cancer-types','admin-dashboard-cancer-info','admin-dashboard-common-medication','admin-dashboard-medical-conditions','admin-dashboard-symptoms','admin-dashboard-insurance-type','admin-dashboard-insurance-provider','admin-dashboard-legal-category','admin-dashboard-legal-types'])?'active':'' }}"
                            href="#navbar-other-informations" data-toggle="collapse" role="button"
                            aria-expanded="{{ $your_information==true?'true':'false' }}"
                            aria-controls="navbar-user-informations">
                            <i class="fas fa-stethoscope text-dark"></i>
                            <span class="nav-link-text">Other</span>
                        </a>
                        <div class="collapse  {{ $your_information==true?'show':'' }}" id="navbar-other-informations">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('admin-dashboard-cancer-types') }}"
                                        class="nav-link {{ $curr_url=='admin-dashboard-cancer-types'?'active':'' }}">
                                        <span class="sidenav-mini-icon"> S </span>
                                        <span class="sidenav-normal"> Cancer types
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin-dashboard-cancer-info') }}"
                                        class="nav-link {{ $curr_url=='admin-dashboard-cancer-info'?'active':'' }}">
                                        <span class="sidenav-mini-icon"> </span>
                                        <span class="sidenav-normal"> Cancer Info
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin-dashboard-common-medication') }}"
                                        class="nav-link {{ $curr_url=='admin-dashboard-common-medication'?'active':'' }}">
                                        <span class="sidenav-mini-icon"> </span>
                                        <span class="sidenav-normal">Common Medication
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin-dashboard-medical-conditions') }}"
                                        class="nav-link {{ $curr_url=='admin-dashboard-medical-conditions'?'active':'' }}">
                                        <span class="sidenav-mini-icon"> </span>
                                        <span class="sidenav-normal">Medical Conditions
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin-dashboard-symptoms') }}"
                                        class="nav-link {{ $curr_url=='admin-dashboard-symptoms'?'active':'' }}">
                                        <span class="sidenav-mini-icon"> </span>
                                        <span class="sidenav-normal">Symptoms
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin-dashboard-insurance-type') }}"
                                        class="nav-link {{ $curr_url=='admin-dashboard-insurance-type'?'active':'' }}">
                                        <span class="sidenav-mini-icon"> </span>
                                        <span class="sidenav-normal">Insurance Type
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin-dashboard-insurance-provider') }}"
                                        class="nav-link {{ $curr_url=='admin-dashboard-insurance-provider'?'active':'' }}">
                                        <span class="sidenav-mini-icon"> </span>
                                        <span class="sidenav-normal">Insurance Provider
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin-dashboard-legal-category') }}"
                                        class="nav-link {{ $curr_url=='admin-dashboard-legal-category'?'active':'' }}">
                                        <span class="sidenav-mini-icon"> </span>
                                        <span class="sidenav-normal">Legal Category
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin-dashboard-legal-types') }}"
                                        class="nav-link {{ $curr_url=='admin-dashboard-legal-types'?'active':'' }}">
                                        <span class="sidenav-mini-icon"> </span>
                                        <span class="sidenav-normal">Legal Types
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin-human-pain-charts-all') }}"
                                        class="nav-link {{ $curr_url=='admin-human-pain-charts-all'?'active':'' }}">
                                        <span class="sidenav-mini-icon"> </span>
                                        <span class="sidenav-normal">Human Pain Charts
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>  --}}


                <hr class="my-3">


            </div>
        </div>
    </div>
</nav>
