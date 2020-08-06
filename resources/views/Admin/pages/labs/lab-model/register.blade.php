@extends('Admin.Layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 mt-4 mb-4 text-center">
            <img src="{{ asset('img/logo.png') }}" class="navbar-brand-img" alt="...">

            <h6 class="card-text text-center">Register As a Primary Care Physician</h6>
        </div>
        <div class="col-sm-10 col-sm-offset-2">
            <div class="card shadow bg-secondary">
                <div class="card-body bg-transparent">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{ route('admin-dashboard-save-new-laboratory') }}" method="post"
                                id="registerform">
                                @csrf
                                <div id="jquery-steps">
                                    <h3>Personal Information <strong>(1 / 2)</strong></h3>
                                    <section>
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="inp_first_name">First Name</label>
                                                    <input type="text"
                                                        class="form-control  form-control-alternative required @error('firstname') is-invalid @enderror"
                                                        name="firstname" id="inp_first_name" aria-describedby="helpId"
                                                        placeholder="Enter Your First Name Here" maxlength="20"
                                                        value="{{ old('firstname') }}">
                                                    <span id="lblError" style="color: red; font-size:12px"></span>
                                                    @error('firstname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                    <input type="hidden" value="4" name="user_level" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Last Name</label>
                                                    <input type="text"
                                                        class="form-control  form-control-alternative required @error('lastname') is-invalid @enderror"
                                                        name="lastname" id="inp_last_last" aria-describedby="helpId"
                                                        placeholder="Enter Your Last Name Here" maxlength="20"
                                                        value="{{ old('lastname') }}">
                                                    <span id="lblError-lastname"
                                                        style="color: red; font-size:12px"></span>
                                                    @error('lastname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <input type="hidden" name="status" value="1">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="inp_email_label">Email</label>
                                                    <input type="email"
                                                        class="form-control  form-control-alternative required @error('email') is-invalid @enderror"
                                                        name="email" id="inp_email" aria-describedby="helpId"
                                                        onkeyup="validate();" onchange="validateEmail()"
                                                        value="{{ old('email') }}" placeholder="Enter Your Email Here">
                                                    <span class="invalid-feedback" id="email_msg">
                                                        @if ($errors->has('msg'))
                                                        <strong>{{ $errors->first('msg') }}</strong>
                                                        @endif
                                                    </span>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Phone</label>
                                                    <input type="tel" minlength="12" maxlength="12" name="phone"
                                                        class="form-control  form-control-alternative  " id="inp_phone"
                                                        pattern="^\d{3}-\d{3}-\d{4}$"
                                                        title="Phone Number (format: xxx-xxx-xxxx) "
                                                        value="{{ old('phone') }}" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group ">

                                                    <label for="">Password<a href="javascript:void(0)"
                                                            id="passGen">Generate</a></label>
                                                    <input type="password" value="{{ old('password') }}"
                                                        class="form-control @error('password') is-invalid @enderror form-control-user"
                                                        id="new_password" placeholder="Password" name="password"
                                                        required>
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror

                                                </div>

                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group ">

                                                    <label for="">Confirm Password</label>
                                                    <input type="password" value="{{ old('new_password') }}"
                                                        class="form-control @error('confirm_password') is-invalid @enderror form-control-user"
                                                        id="confirm_pass" placeholder="Confirm Password"
                                                        name="confirm_password" required>
                                                    @error('confirm_password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <h3>Address Information<strong>(2 / 2)</strong></h3>
                                    <section>
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Address</label>
                                                    <textarea class="form-control  form-control-alternative required"
                                                        name="address" rows="5" id="inp_address1"
                                                        aria-describedby="helpId"
                                                        placeholder="Your Address Here">{{old('address')}}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="inp_city1">City</label>
                                                    <input type="text"
                                                        class="form-control  form-control-alternative required"
                                                        name="city" id="inp_city1" aria-describedby="helpId"
                                                        placeholder="Your City" value="{{old('city')}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inp_state1">State</label>
                                                    <select id="inp_state1"
                                                        class="form-control  form-control-alternative required"
                                                        name="state">
                                                        <option></option>
                                                        @foreach ($states as $short => $state)
                                                        <option value="{{ $short }}"
                                                            {{ old('state') == $short ? 'selected' : '' }}>{{ $state }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="inp_zip1">Zip Code</label>
                                                    <input type="text"
                                                        class="form-control  form-control-alternative required"
                                                        name="zip" id="inp_zip1" aria-describedby="helpId"
                                                        placeholder="Your Zip" value="{{old('zip')}}">
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js" type="text/javascript"></script>
<script src="{{ asset('pcp-area/public/js/jquery.steps.js') }}"></script>
<script>
    $(document).ready(function () {
        if ($('#profileMobile').val() != []) {
            $('#v-pills-profile-tab').click();
        }


        $('#state').select2({
            placeholder: "select State",
            theme: "bootstrap"
        });

        $('#country').select2({
            placeholder: "select Country",
            theme: "bootstrap"
        });
        $('#profileMobile').mask('000-000-0000');
        secondaryvalidate();
    });



    $('#jquery-steps').steps({
        headerTag: "h3",
        bodyTag: "section",
        onStepChanging: function (event, currentIndex, newIndex) {
            if (newIndex < currentIndex) {
                return true;
            }
            var form = $('#registerform');
            if (form.length == 1) {
                form.validate().settings.ignore = ":disabled,:hidden";
                return form.valid();
            }
            return true;
        },
        onFinishing: function (event, currentIndex) {
            var form = $('#registerform');

            if (form.length == 1) {
                form.validate().settings.ignore = ":disabled";
                return form.valid();
            }
            return true;
        },
        onFinished: function (event, currentIndex) {
            $('#loader').show();
            $("#registerform").submit();
        }
    });

    $('#passGen').on('click', function () {
        var pass = Math.random().toString(36).slice(-8);
        $('#new_password').attr('type', 'text');
        $('#confirm_pass').attr('type', 'text');
        $('#new_password').val(pass);
        $('#confirm_pass').val(pass);
    })



    function secondaryHave(id, target) {
        if ($('#' + id).prop("checked")) {
            $('#' + target).fadeIn();
        } else {
            $('#' + target).fadeOut();

        }
    }

    $(document).ready(function () {
        $('#inp_location_type1').select2({
            theme: 'bootstrap',
            placeholder: 'Select One',
        });

        $('#inp_location_type2').select2({
            theme: 'bootstrap',
            placeholder: 'Select One',
        });

        $('#inp_state1').select2({
            theme: 'bootstrap',
            placeholder: 'Select State',
        });

        $('#inp_state2').select2({
            theme: 'bootstrap',
            placeholder: 'Select State',
        });
        $('#inp_phone').mask('000-000-0000');

    });

    function validate() {
        if ($('#inp_password2').val() == '') {
            $('#message').html('');
        }
        if ($('#inp_password').val() != '' && $('#inp_email').val() != '' && $('#inp_password2')
            .val() != '' && $('#inp_first_last').val() != '') {

            if ($('#inp_password2').val() == $('#inp_password').val()) {
                $('#message').html('Password Matching').css('color', 'green');
            } else {
                $('#message').html('Password Not Matching').css('color', 'red');
            }
        }
    }

    function validatepasswordconf() {
        if ($('#inp_password').val() == $('#confirm_pass').val()) {
            $('#conf_pass_msg').addClass('text-success').removeClass('text-danger').html(
                '<i class="fa fa-check"></i>');
            $('#sumbit-btn').removeAttr('disabled');
        } else {
            $('#conf_pass_msg').addClass('text-danger').removeClass('text-success').html(
                'The password and confirmation' +
                ' password do not match');
            $('#sumbit-btn').attr('disabled', true);
        }
    }

    function secondaryvalidate() {
        if ($('#sec_address_yes').is(":checked")) {
            $("#inp_address2").attr('required', true);
            $("#inp_city2").attr('required', true);
            $("#inp_state2").attr('required', true);
            $("#inp_zip2").attr('required', true);
            $("#inp_location_type1").attr('required', true);
        } else {
            $("#inp_address2").attr('required', false);
            $("#inp_city2").attr('required', false);
            $("#inp_state2").attr('required', false);
            $("#inp_zip2").attr('required', false);
            $("#inp_location_type1").attr('required', false);
        }
    }

</script>
@endsection

@section('css')

<link rel="stylesheet" href="{{ asset('pcp-area/public/css/jquery.steps.css') }}" />

<style>
    .card-title {
        font-family: "Roboto", "Helvetica", "Arial", sans-serif;
        font-weight: 700;
        color: #ffffff;
    }

    .card-text {
        font-family: "Roboto", "Helvetica", "Arial", sans-serif;
        font-weight: 300;
        color: #ffffff;
    }

    .navbar-brand-img {
        width: 100px !important;
    }



    .wizard>.steps>ul>li.disabled {
        display: none;
    }

    .wizard>.steps>ul>li.done {
        display: none;
    }

    .wizard>.steps>ul>li:before,
    .wizard>.steps>ul>li:after {
        display: none;
    }

</style>
@endsection
