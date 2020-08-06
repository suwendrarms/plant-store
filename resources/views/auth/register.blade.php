@extends('Public.Layouts.app')

@section('content')
<section class="register-sec landing-banner-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="con col-lg-4  col-md-6 text-center">
                <div class="card">
                    <div class="card-body">
                        <div class="sign-up-form">
                            <div class="responsive-tabs responsive-tabs-classic" data-type="horizontal"
                                style="width: 100%;">
                                <ul class="resp-tabs-list tabs-1 text-center tabs-group-default"
                                    data-group="tabs-group-default">
                                    <li class="resp-tab-item tabs-group-default resp-tab-active">
                                        Sign Up
                                    </li>
                                </ul>
                            </div>
                            <br>
                            <h5 class="sub-title">Its free and only takes a minute.</h5>

                            <form action="{{ route('register') }}" class="user" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="email"
                                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}" id="exampleInputEmail" placeholder="Email Address"
                                        onclick="validateEmail()" onkeyup="validateEmail()" name="email" required>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert" style="font-size:14px;">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                    <input type="hidden" value="2" name="user_level" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" value="{{ old('firstname') }}"
                                        class="form-control @error('firstname') is-invalid @enderror form-control-user"
                                        id="exampleFirstName" placeholder="First Name" onkeyup="validate();"
                                        name="firstname" maxlength="20" required>
                                    <span id="lblError" style="color: red; font-size:12px"></span>
                                    @error('firstname')
                                    <span class="invalid-feedback" role="alert" style="font-size:14px;">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" value="{{ old('lastname') }}"
                                        class="form-control @error('lastname') is-invalid @enderror form-control-user"
                                        id="exampleLastName" placeholder="Last Name" onkeyup="validate();"
                                        name="lastname" maxlength="20" required>
                                    <span id="lblError-lastname" style="color: red; font-size:12px"></span>
                                    @error('lastname')
                                    <span class="invalid-feedback" role="alert" style="font-size:14px;">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password"
                                        class="form-control @error('password') is-invalid @enderror form-control-user"
                                        id="exampleInputPassword" onkeyup="validate();" name="password"
                                        placeholder="Password" required>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert" style="font-size:14px;">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="password"
                                        class="form-control @error('password_confirmation') is-invalid @enderror form-control-user"
                                        id="exampleRepeatPassword" name="password_confirmation" onkeyup="validate();"
                                        placeholder="Repeat Password" required>
                                    <span style="font-size:14px;" id="message"></span>
                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert" style="font-size:14px;">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                    <input type="hidden" name="parent_id" value="{{ $parent_id ?? ''}}">
                                </div>
                                <div class="g-recaptcha"
                                    data-sitekey="{{ config('services.google_recaptcha.site_key') }}">
                                </div>
                                @error('g-recaptcha-response')
                                <span class="text-danger" style="font-size:14px;" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                                <br>
                                <div class="offset-top-40">
                                    <div class="reveal-sm-flex offset-none range-xs-middle text-center text-sm-left">
                                        <button id="submit-btn" disabled class="btn btn-primary"
                                            onmouseover="validateEmail()" type="submit">Sign
                                            Up</button>
                                    </div>
                                </div>
                                {{--  <button type="submit" class="btn btn-primary" id="submit-btn" disabled>Sign Up</button>  --}}
                            </form>
                            <div class="have-account">Have an account ? <a href="{{ route('login') }}">Log in</a></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
    $(document).ready(function () {
        $('.color-chng').removeClass('text-white');
        $('.icon-gray-light').removeClass('icon-white-17');
        $('ul').find('li.active').removeClass('active');
        $('#login-register').addClass('active');
        $(function () {
            $("#exampleFirstName").keypress(function (e) {
                var keyCode = e.keyCode || e.which;

                $("#lblError").html("");

                //Regex for Valid Characters i.e. Alphabets and Numbers.
                var regex = /^[A-Za-z0-9]+$/;

                //Validate TextBox value against the Regex.
                var isValid = regex.test(String.fromCharCode(keyCode));
                if (!isValid) {
                    $("#lblError").html("Only Alphabets and Numbers allowed.");
                }

                return isValid;
            });
        });
        $(function () {
            $("#exampleLastName").keypress(function (e) {
                var keyCode = e.keyCode || e.which;

                $("#lblError-lastname").html("");

                //Regex for Valid Characters i.e. Alphabets and Numbers.
                var regex = /^[A-Za-z0-9]+$/;

                //Validate TextBox value against the Regex.
                var isValid = regex.test(String.fromCharCode(keyCode));
                if (!isValid) {
                    $("#lblError-lastname").html("Only Alphabets and Numbers allowed.");
                }

                return isValid;
            });
        });
    });

    function validate() {
        if ($('#exampleRepeatPassword').val() == '') {
            $('#message').html('');
        }
        if ($('#exampleInputPassword').val() != '' && $('#exampleInputEmail').val() != '' && $('#exampleRepeatPassword')
            .val() != '' && $('#exampleFirstName').val() != '') {

            if ($('#exampleRepeatPassword').val() == $('#exampleInputPassword').val()) {
                $('#message').html('Password Matching').css('color', 'green');
                $("#submit-btn").prop("disabled", false);
            } else {
                $('#message').html('Password Not Matching').css('color', 'red');

                $("#submit-btn").prop("disabled", true);
            }
        } else {

            $("#submit-btn").prop("disabled", true);
        }
    }

</script>

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
