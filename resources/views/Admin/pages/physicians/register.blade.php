@extends('Admin.Layouts.app')

{{-- @section('header-content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Physicians</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-block ">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Start Here</a></li>
<li class="breadcrumb-item active" aria-current="page">Physicians</li>
</ol>
</nav>
</div>
<div class="col-lg-6 col-5 text-right">
    <a href="{{route('admin-dashboard-new-physician')}}" class="btn btn-sm btn-neutral float-right ">
        <i class=" fa fa-plus-circle"></i>New Physician
    </a>
</div>
</div>
<div class="row justify-content-center">

</div>
</div>
</div>
</div>
@endsection --}}
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 mt-4 mb-4 text-center">
            <img src="{{ asset('img/logo.png') }}" class="navbar-brand-img" alt="...">
            {{-- <h1 class="card-title text-center">Register</h1> --}}
            <h6 class="card-text text-center">Register As a Primary Care Physician</h6>
        </div>
        <div class="col-sm-10 col-sm-offset-2">
            <div class="card shadow bg-secondary">
                <div class="card-body bg-transparent">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{ route('admin-dashboard-save-new-physician') }}" method="post"
                                id="registerform">
                                @csrf
                                <div id="jquery-steps">
                                    <h3>Personal Information <strong>(1 / 4)</strong></h3>
                                    <section>
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="inp_first_name">First Name</label>
                                                    <input type="text"
                                                        class="form-control  form-control-alternative required @error('firstname') is-invalid @enderror"
                                                        name="firstname" id="inp_first_name" aria-describedby="helpId"
                                                        placeholder="Enter Your First Name Here"
                                                        value="{{ old('firstname') }}">
                                                    @error('firstname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                    <input type="hidden" value="3" name="user_level" required>
                                                    <input type="hidden" name="parent_id" value="{{ $parent_id ?? ''}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Last Name</label>
                                                    <input type="text"
                                                        class="form-control  form-control-alternative required @error('lastname') is-invalid @enderror"
                                                        name="lastname" id="inp_first_last" aria-describedby="helpId"
                                                        placeholder="Enter Your Last Name Here"
                                                        value="{{ old('lastname') }}">
                                                    @error('lastname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="inp_email_label">Email</label>
                                                    <input type="email"
                                                        class="form-control  form-control-alternative required @error('email') is-invalid @enderror"
                                                        name="email" id="inp_email" aria-describedby="helpId"
                                                        onkeyup="validate();" value="{{ old('email') }}"
                                                        placeholder="Enter Your Email Here">
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
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="">Username</label>
                                                    <input type="tel"
                                                        class="form-control  form-control-alternative required @error('user_name') is-invalid @enderror"
                                                        name="user_name" id="user_name" aria-describedby="helpId"
                                                        placeholder="Enter Your Username Here"
                                                        value="{{ old('user_name') }}">
                                                    @error('user_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="inp_passwordLabel">Password<a href="javascript:void(0)" id="passGen">Generate</a></label>
                                                    <input type="password"
                                                        class="form-control  form-control-alternative required @error('password') is-invalid @enderror"
                                                        name="password" id="inp_password" aria-describedby="helpId"
                                                        placeholder="Enter Your Password Here">
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="inp_passwordLabel2">Confirm Password</label>
                                                    <input type="password"
                                                        class="form-control  form-control-alternative required  @error('password_confirmation') is-invalid @enderror"
                                                        name="password_confirmation" id="confirm_pass"
                                                        onkeyup="validatepasswordconf()" aria-describedby="helpId"
                                                        placeholder="Confirm Your Password Here">
                                                    @error('password_confirmation')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                    <small id="conf_pass_msg"></small>

                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <h3>Address Information (Primary) <strong>(2 / 4)</strong></h3>
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
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="inp_city1">City</label>
                                                            <input type="text"
                                                                class="form-control  form-control-alternative required"
                                                                name="city" id="inp_city1" aria-describedby="helpId"
                                                                placeholder="Your City" value="{{old('city')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group select-box-lg">
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
                                            <div class="col-lg-6">
                                                <div class="form-group select-box-lg">
                                                    <label for="inp_location_type2">Location Type</label>
                                                    <select class="form-control  form-control-alternative required"
                                                        name="location_type" id="inp_location_type2">
                                                        <option></option>

                                                        <option value="1"
                                                            {{ old('location_type') == 1 ? 'selected' : '' }}>Single
                                                            Doctor Office</option>
                                                        <option value="2"
                                                            {{ old('location_type') == 2 ? 'selected' : '' }}>
                                                            Multi-Doctor Clinic</option>
                                                        <option value="3"
                                                            {{ old('location_type') == 3 ? 'selected' : '' }}>Primary
                                                            Care Clinic</option>
                                                        <option value="4"
                                                            {{ old('location_type') == 4 ? 'selected' : '' }}>Specialty
                                                            Care Clinic</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <h3>Address Information (Secondary) <strong>(3 / 4)</strong></h3>
                                    <section>
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="d-inline-block" for="sec_address_yes">
                                                        Secondary Address
                                                    </label>
                                                    <label class="custom-toggle">
                                                        <input type="hidden" name="sec_inf" value="0">
                                                        <input type="checkbox" name="sec_inf" id="sec_address_yes"
                                                            value="1"
                                                            onclick="secondaryHave('sec_address_yes','secondaryAddres')"
                                                            onchange="secondaryvalidate()" @if(old('sec_inf')==1)
                                                            checked @endif>
                                                        <span class="custom-toggle-slider rounded-circle"
                                                            data-label-off="No" data-label-on="Yes"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" @if(old('sec_inf')==1) @else style="display:none" @endif
                                            id="secondaryAddres">

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Address</label>
                                                    <textarea class="form-control  form-control-alternative "
                                                        name="sec_address" rows="5" id="inp_address2"
                                                        aria-describedby="helpId"
                                                        placeholder="Your Address Here">{{ old('sec_address') }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="inp_city1">City</label>
                                                            <input type="text" class="form-control  form-control-alternative "
                                                                name="sec_city" id="inp_city2" aria-describedby="helpId"
                                                                placeholder="Your City" value="{{old('sec_city')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group select-box-lg">
                                                            <label for="inp_state2">State</label>
                                                            <select id="inp_state2"
                                                                class="form-control  form-control-alternative " name="sec_state"
                                                                required>
                                                                <option></option>
                                                                @foreach ($states as $short => $state)
                                                                <option value="{{ $short }}"
                                                                    {{ old('sec_state') == $short ? 'selected' : '' }}>
                                                                    {{ $state }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="inp_zip1">Zip Code</label>
                                                    <input type="text" class="form-control  form-control-alternative "
                                                        name="sec_zip" id="inp_zip2" aria-describedby="helpId"
                                                        placeholder="Your Zip" value="{{old('sec_zip')}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group select-box-lg">
                                                    <label for="inp_location_type1">Location Type</label>
                                                    <select class="form-control  form-control-alternative "
                                                        name="sec_location_type" id="inp_location_type1">
                                                        <option></option>
                                                        <option value="1"
                                                            {{ old('sec_location_type') == 1 ? 'selected' : '' }}>Single
                                                            Doctor Office</option>
                                                        <option value="2"
                                                            {{ old('sec_location_type') == 2 ? 'selected' : '' }}>
                                                            Multi-Doctor Clinic</option>
                                                        <option value="3"
                                                            {{ old('sec_location_type') == 3 ? 'selected' : '' }}>
                                                            Primary Care Clinic</option>
                                                        <option value="4"
                                                            {{ old('sec_location_type') == 4 ? 'selected' : '' }}>
                                                            Specialty Care Clinic</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <h3>Finally <strong>(4 / 4)</strong></h3>
                                    <section>
                                        @csrf
                                        <div class="row">

                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Expected Patient Load Per Month</label>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="epl1" name="patientcount"
                                                            class="custom-control-input required" checked value="1"
                                                            @if(old('patientcount')==1) checked @endif>
                                                        <label class="custom-control-label" for="epl1">1-20</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="epl2" name="patientcount"
                                                            class="custom-control-input required" value="2"
                                                            @if(old('patientcount')==2) checked @endif>
                                                        <label class="custom-control-label" for="epl2">21-50</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="epl3" name="patientcount"
                                                            class="custom-control-input required" value="3"
                                                            @if(old('patientcount')==3) checked @endif>
                                                        <label class="custom-control-label" for="epl3">51-100</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="epl4" name="patientcount"
                                                            class="custom-control-input required" value="4"
                                                            @if(old('patientcount')==4) checked @endif>
                                                        <label class="custom-control-label" for="epl4">100-250</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="epl5" name="patientcount"
                                                            class="custom-control-input required" value="5"
                                                            @if(old('patientcount')==5) checked @endif>
                                                        <label class="custom-control-label" for="epl5">250+</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="d-inline-block" for="recommend_yes">
                                                        Would you like to be recommended as a PCP for Patients in your
                                                        area
                                                        that are looking for one?
                                                    </label>
                                                    <label class="custom-toggle">
                                                        <input type="hidden" name="recommend" value="0">
                                                        <input type="checkbox" name="recommend" id="recommend_yes"
                                                            value="1" @if(old('recommend')==1) checked @endif>
                                                        <span class="custom-toggle-slider rounded-circle"
                                                            data-label-off="No" data-label-on="Yes"></span>
                                                    </label>
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

        $('#passGen').on('click', function () {
            var pass = Math.random().toString(36).slice(-8);
            $('#inp_password').attr('type', 'text');
            $('#confirm_pass').attr('type', 'text');
            $('#inp_password').val(pass);
            $('#confirm_pass').val(pass);
        });
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

    .select-box-lg label.error {
        font-size: 1rem !important;
        top:80px !important;
    }

</style>
@endsection
