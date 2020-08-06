


<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="{{ asset('img/logo.png') }}" class="navbar-brand-img" alt="..."><br>
                <small style="color:black; font-size:9.5px">Powered by Knowledge Health
                    Solutions</small>
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link"
                            href="">
                            <i class="ni ni-collection text-orange"></i>
                            <span>Start Here</span></a>
                    </li>
                    <!-- Divider -->
                </ul>
                {{-- <hr class="my-3">
                <!-- Heading -->
                <h6 class="navbar-heading p-0 text-muted">
                    <span class="docs-normal">Life</span>
                </h6>
                <ul class="navbar-nav">
                    <li class="nav-item  @if($user_step ?? '')
                    {{ $user_step!=[]?$user_step->profile_completed!=1?'disabled':'':'disabled' }}
                @else
                disabled
                @endif ">
                <a class="nav-link {{ $life = in_array($curr_url,['member-life-settlements','member-life-page1','member-edit-legal-intake'])?'active':'' }}"
                    href="#navbar-dashboards" data-toggle="collapse" role="button"
                    aria-expanded="{{ $life==true?'true':'false' }}" aria-controls="navbar-dashboards">
                    <i class="ni ni-shop text-primary"></i>
                    <span class="nav-link-text">Carefree Life</span>
                </a>
                <div class="collapse {{ $life==true?'show':'' }}" id="navbar-dashboards">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{ route('member-life-settlements') }}"
                                class="nav-link {{ $curr_url=='member-life-settlements'?'active':'' }} {{ Auth::user()->UserAddress ?:'disabled' }}">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal"> Settlements &nbsp;<i
                                        class="fas text-muted {{ Auth::user()->UserAddress ?"fa-lock-open":'fa-lock' }}"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
                </li>
                </ul> --}}
                <hr class="my-3">
                <!-- Heading -->
                {{--  <h6 class="navbar-heading p-0 text-muted">
                    <span class="docs-normal">Health</span>
                </h6>
                <ul class="navbar-nav">
                    @php
                    $uinfo = Auth::user()->UserInfomation;
                    $user = Auth::user();
                    @endphp
                    <li class="nav-item @if($user_step ?? '')
                    {{ $user_step!=[]?$user_step->profile_completed!=1?'disabled':'':'disabled' }}
                    @else
                    disabled
                    @endif">
                        <a class="nav-link {{ $your_information = in_array($curr_url,['member-health-your-information','member-health-coverage-information','member-health-medical-information-new','member-health-lifestyle-information'])?'active':'' }}"
                            href="#navbar-user-informations" data-toggle="collapse" role="button"
                            aria-expanded="{{ $your_information==true?'true':'false' }}"
                            aria-controls="navbar-user-informations">
                            <i class="ni ni-briefcase-24 text-dark"></i>
                            <span class="nav-link-text">Your Information</span>
                        </a>
                        <div class="collapse  {{ $your_information==true?'show':'' }}" id="navbar-user-informations">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item " disabled>
                                    <a href="{{ $uinfo ?($r_access?route('member-health-your-information'):route('coming-soon')):'javascript:void(0)' }}"
                                        class="nav-link {{ $curr_url=='member-health-your-information'?'active':'' }} {{ $user->UserAddress ?:'disabled' }}">
                                        <span class="sidenav-mini-icon"> S </span>
                                        <span class="sidenav-normal"> Personal Information &nbsp;<i
                                                class="fas text-muted {{ $user->UserAddress ?"fa-lock-open":'fa-lock' }}"></i>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ $uinfo&& ($uinfo->height_feet!="")?($r_access?route('member-health-coverage-information'):route('coming-soon')):'javascript:void(0)' }}"
                                        class="nav-link {{ $curr_url=='member-health-coverage-information'?'active':'' }} {{ $uinfo&& ($uinfo->height_feet!="")?'':'disabled' }}">
                                        <span class="sidenav-mini-icon"> S </span>
                                        <span class="sidenav-normal"> Coverage Information &nbsp;<i
                                                class="fas text-muted {{ $uinfo&& ($uinfo->height_feet!="")?"fa-lock-open":'fa-lock' }}"></i>
                                        </span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ $uinfo && $user->UserInsuranceInformation ?($r_access?route('member-health-medical-information-new'):route('coming-soon')):'javascript:void(0)' }}"
                                        class="nav-link {{ $curr_url=='member-health-medical-information-new'?'active':'' }} {{  $user->UserInsuranceInformation ?:'disabled' }}">
                                        <span class="sidenav-mini-icon"> S </span>
                                        <span class="sidenav-normal"> Medical Information&nbsp;<i
                                                class="fas text-muted {{ $uinfo && $user->UserInsuranceInformation?"fa-lock-open":'fa-lock' }}"></i>
                                        </span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ $uinfo&& $user->UserInsuranceInformation && $user->UserMedicalInfomation ?($r_access?route('member-health-lifestyle-information'):route('coming-soon')):'javascript:void(0)' }}"
                                        class="nav-link {{ $curr_url=='member-health-lifestyle-information'?'active':'' }} {{  $user->UserMedicalInfomation ?:'disabled' }}">
                                        <span class="sidenav-mini-icon"> S </span>
                                        <span class="sidenav-normal"> Lifestyle Information &nbsp;
                                            <i
                                                class="fas text-muted {{ $uinfo && $user->UserInsuranceInformation && $user->UserMedicalInfomation?"fa-lock-open":'fa-lock' }}"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    @php
                    $uprofile = Auth::user()->profile_completed;
                    @endphp  --}}
                    {{-- <li class="nav-item @if($user_step ?? '')
                    {{ $user_step!=[]?$user_step->profile_completed!=1?'disabled':'':'disabled' }}
                    @else
                    disabled
                    @endif">
                        <a class="nav-link {{ $symptoms = in_array($curr_url,['member-health-cgx','member-question-pgx'])?'active':'' }}"
                            href="#navbar-symptom-informations" data-toggle="collapse" role="button"
                            aria-expanded="{{ $symptoms==true?'true':'false' }}"
                            aria-controls="navbar-user-informations">
                            <i class="ni ni-favourite-28 text-danger"></i>
                            <span class="nav-link-text">Symptoms</span>
                        </a>
                        <div class="collapse  {{ $symptoms==true?'show':'' }}" id="navbar-symptom-informations">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ $uinfo ?($r_access?route('member-health-cgx'):route('coming-soon')):'javascript:void(0)' }}"
                                        class="nav-link {{ $curr_url=='member-health-cgx'?'active':'' }}">
                                        <span class="sidenav-mini-icon"> C </span>
                                        <span class="sidenav-normal"> Questions CGX
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ $uinfo&&($uinfo->height_feet!="")?($r_access?route('member-question-pgx'):route('coming-soon')):'javascript:void(0)' }}"
                                        class="nav-link {{ $curr_url=='member-question-pgx'?'active':'' }}">
                                        <span class="sidenav-mini-icon"> P </span>
                                        <span class="sidenav-normal"> Questions PGX
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li> --}}
                    {{--  <li class="nav-item @if($user_step ?? '' )
                        {{ $user_step!=[]?$user_step->profile_completed!=1?'disabled':'':'disabled' }} @endif">
                        <a class="nav-link" href="{{ route('member-suggested-suggested') }}">
                            <i class="ni ni-chart-bar-32 text-info"></i>
                            <span class="nav-link-text">Suggested Products</span>
                        </a>
                    </li>  --}}

                    {{-- <li class="nav-item @if($user_step ?? '' )
                        {{ $user_step!=[]?$user_step->profile_completed!=1?'disabled':'':'disabled' }} @endif">
                    <a class="nav-link {{ $curr_url=='member-health-results'?'active':'' }}"
                        href="{{ $r_access?route('member-health-results'):route('coming-soon') }}">
                        <i class="ni ni-chart-bar-32 text-info"></i>
                        <span class="nav-link-text">Result</span>
                    </a>
                    </li>
                    <li class="nav-item @if($user_step ?? '' )
                    {{ $user_step!=[]?$user_step->profile_completed!=1?'disabled':'':'disabled' }} @endif">
                        <a class="nav-link {{ $curr_url=='member-health-analysis'?'active':'' }}"
                            href="{{ $r_access?route('member-health-analysis'):route('coming-soon') }}">
                            <i class="ni ni-books"></i>
                            <span class="nav-link-text">Analysis</span>
                        </a>
                    </li> --}}
                    {{--  <li class="nav-item @if($user_step ?? '' )
                {{ $user_step!=[]?$user_step->profile_completed!=1?'disabled':'':'disabled' }} @endif">
                        <a class="nav-link {{ $curr_url=='member-tele-care'?'active':'' }}"
                            href="{{ $r_access?route('member-tele-care'):route('coming-soon') }}">
                            <i class="fas fa-calendar-day text-success"></i>
                            <span class="nav-link-text">Tele Care
                            </span>
                        </a>
                    </li>  --}}
                    {{-- <li class="nav-item @if($user_step ?? '' )
                    {{ $user_step!=[]?$user_step->profile_completed!=1?'disabled':'':'disabled' }} @endif">
                    <a class="nav-link {{ $curr_url=='member-health-steps'?'active':'' }}"
                        href="{{ $r_access?route('member-health-steps'):route('coming-soon') }}">
                        <i class="ni ni-user-run text-primary"></i>
                        <span class="nav-link-text">Your Action Steps
                        </span>
                    </a>
                    </li> --}}
                    {{--  @php
                    $supplier=\domain\Facades\InformationFacade::getTimeStatus();
                    @endphp

                    <li class="nav-item @if($user_step ?? '' )
                    {{ $user_step!=[]?$user_step->profile_completed!=1?'disabled':'':'disabled' }}
                    @endif {{ $supplier?$supplier->status==1?'':'d-none':'d-none' }}">
                        <a class="nav-link {{ $curr_url=='new-time-sensitive'?'active':'' }}"
                            href="{{ $uinfo?route('new-time-sensitive'):'' }}">
                            <i class="fas fa-history"></i>
                            <span class="nav-link-text">Time Sensitive Action
                            </span>
                        </a>
                    </li>


                </ul>
                <hr class="my-3">
                <!-- Heading -->
                <h6 class="navbar-heading p-0 text-muted">
                    <span class="docs-normal">Support</span>
                </h6>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ $curr_url=='support.member.messages.index'?'active':'' }}"
                            href="{{route('support.member.messages.index')}}">
                            <i class="ni ni-email-83"></i>
                            <span class="nav-link-text">Messages
                            </span>
                        </a>
                    </li>
                </ul>  --}}
            </div>
        </div>
    </div>
</nav>
