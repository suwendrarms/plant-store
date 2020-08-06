@extends('Public.Layouts.app')
@section('content')
<section class="register-sec landing-banner-area">
    <div class="container">

        <div class="row d-md-flex align-items-md-center">
            {{--  <div class="col-lg-4 col-md-6 left-sec">
                <a href="#" class="logo"><img src="{!! asset('home/img/logo.png') !!}"></a>
            </div>

            <div class="col-lg-4 text-center center-sec">
                <div class="mobile-banner-img">
                    <img src="{!! asset('home/img/mobile-banner.png') !!}">
                </div>
            </div>  --}}
            <div class="col-lg-4"></div>

            <div class="con col-lg-4  col-md-6 text-center">
                <div class="card">
                    <div class="card-body">
                        <div class="sign-up-form">
                            <div class="responsive-tabs responsive-tabs-classic" data-type="horizontal"
                                style="width: 100%;">
                                <ul class="resp-tabs-list tabs-1 text-center tabs-group-default"
                                    data-group="tabs-group-default">
                                    <li class="resp-tab-item tabs-group-default resp-tab-active">
                                        Log In
                                    </li>
                                </ul>
                            </div>
                            <br>
                            <h5 class="sub-title">Its free and only takes a minute.</h5>
                            <form class="user" action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="email"
                                        class="form-control form-control-lg @error('email') is-invalid @enderror form-control-user"
                                        id="exampleInputEmail" name="email" value="{{ old('email') }}"
                                        onkeyup="validate();" aria-describedby="emailHelp" required autocomplete="email"
                                        z autofocus placeholder="Email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password"
                                        class="form-control form-control-lg @error('password') is-invalid @enderror form-control-user"
                                        onkeyup="validate();" id="exampleInputPassword" name="password"
                                        placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        {{dd($message)}}
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="offset-top-20">
                                    <div class="text-center d-none" id="contact_page">
                                        <a href="" class="forgot-password text-center text-danger">
                                           Contact Us to reactivate your account </a>
                                    </div>
                                    <br>
                                    <div class="text-center">
                                        <button id="submit-btn" disabled class="btn btn-primary"
                                            type="submit">Login</button>
                                    </div>
                                    <br>
                                    <div class="text-center">
                                        <a href="{{ route('password.request') }}" class="forgot-password text-center"> I
                                            forgot
                                            my
                                            password</a>
                                    </div>
                                </div>
                                {{--  <div class="form-group text-left">
                                <button type="submit" class="btn btn-primary" id="submit-btn" disabled>Login</button>
                </div> --}}
                            </form>

                            <div class="have-account">Don't have an account ? <a href="{{ route('register') }}">Sign
                                    Up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('css')
<style>
    .con {
        margin-top: 304px !important;
        margin-bottom: 100px !important;

    }

    .color-chng {
        color: #2a93c9;
    }

    .icon-gray-light {
        background: #e5e5e5;
    }

</style>

@endsection
@section('js')
<script>
    $(document).ready(function () {
        $('.color-chng').removeClass('text-white');
        $('.icon-gray-light').removeClass('icon-white-17');
        $('ul').find('li.active').removeClass('active');
        $('#login-register').addClass('active');

        if("{{ !empty(Session::get('user_data')) && Session::get('user_data')=='userdisable' }}"){
            $('#contact_page').removeClass('d-none');
        }
    });

    function validate() {
        if ($('#exampleInputPassword').val() != '' && $('#exampleInputEmail').val() != '') {
            $("#submit-btn").prop("disabled", false);
        } else {
            $("#submit-btn").prop("disabled", true);
        }
    }

</script>

@endsection
