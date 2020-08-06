@extends('Admin.Layouts.app')
@section('header-content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">New patient</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-block ">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Start Here</a></li>
                            <li class="breadcrumb-item active" aria-current="page">New patient</li>
                        </ol>
                    </nav>
                </div>
                {{-- <div class="col-lg-6 col-5 text-right">
                    <a href="{{route('admin-dashboard-new-user')}}"
                class="btn btn-sm btn-neutral float-right ">
                <i class=" fa fa-plus-circle"></i>New User
                </a>
            </div> --}}
        </div>
        <div class="row justify-content-center">

        </div>
    </div>
</div>
</div>
@endsection
@section('content')
{{-- <div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between pl-1  mt-3">
        <h1 class="h3 mb-0 text-gray-800">New User</h1>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Admin Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">New User</li>
</ol>
</nav>
<div class="row justify-content-center">
    <div class="col-md-8"> --}}
        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{route('admin-dashboard-save-new-user')}}" method="POST">
                        @csrf
                        <div class="form-group ">
                            <div class="col-sm-12 mb-6 mb-sm-0">
                                <input type="hidden" name="user_level" value="2">
                                <label for="">First Name</label><sup class="text-danger">*</sup>
                                <input type="text"
                                    class="form-control @error('firstname') is-invalid @enderror form-control-user"
                                    id="firstname" value="" name="firstname" maxlength="20" required>
                                <span id="lblError" style="color: red; font-size:12px"></span>
                                @error('firstname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-sm-12 mb-6 mb-sm-0">
                                <label for="">Last Name</label><sup class="text-danger">*</sup>
                                <input type="text" placeholder="{{ old('lastname') }}"
                                    class="form-control @error('lastname') is-invalid @enderror form-control-user"
                                    id="name" value="" name="lastname" maxlength="20" required>
                                <span id="lblError-lastname" style="color: red; font-size:12px"></span>
                                @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <input type="hidden" name="status" value="1">
                        <div class="form-group ">
                            <div class="col-sm-12 mb-6 mb-sm-0">

                                <label>{{ __('E-Mail Address') }}<sup class="text-danger">*</sup></label>
                                <input type="email" onclick="validateEmail()" onkeyup="validateEmail()"
                                    value="{{ old('email') }}" required
                                    class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                    id="inp_email" aria-describedby="helpId">
                                <span class="invalid-feedback" id="email_msg">
                                    @if ($errors->has('email'))
                                    <strong>{{ $errors->first('email') }}</strong>
                                    @endif
                                </span>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-sm-12 mb-6 mb-sm-0">
                                <label>{{ __('Password') }}<a href="javascript:void(0)"
                                        id="passGen">Generate</a></label>
                                <input id="password" minlength="8" type="password"
                                    class="responsive-moblile form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback responsive-moblile" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-sm-12 mb-6 mb-sm-0">
                                <label>{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" minlength="8" type="password"
                                    class="responsive-moblile form-control" name="password_confirmation" required
                                    autocomplete="new-password">
                            </div>
                        </div>


                        <div align="left" class="text-center">
                            <button id="submit-btn" type="submit" class="btn btn-primary disabled"
                                onmouseover="validateEmail()">
                                Create patient
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- </div>
    </div>
</div> --}}
        @endsection
        @section('css')
        <style>
            .header {
                background-image:linear-gradient(to bottom, rgba(249, 249, 249, 0.52), rgba(9, 50, 123, 0.73)),
                url('{{ asset("img/coverageinfo.jpg") }}');
                background-size: cover;
                background-position: center;
            }

        </style>

        @endsection
        @section('js')
        <script>
            $(document).ready(function () {
                $('.dropify').dropify();
                $(function () {
                    $("#firstname").keypress(function (e) {
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
                    $("#lastname").keypress(function (e) {
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

            $('#passGen').on('click', function () {
                var pass = Math.random().toString(36).slice(-8);
                $('#password').attr('type', 'text');
                $('#password-confirm').attr('type', 'text');
                $('#password').val(pass);
                $('#password-confirm').val(pass);
            })

            function validateEmail() {
                $.ajax({
                    url: "{{ route('validate-email') }}?email=" + $('#inp_email').val() + "&is_member=true",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'GET',
                    success: function (response) {
                        if (response['status'] == 1) {
                            $('#inp_email').addClass("is-valid").removeClass("is-invalid");
                            email_valid = true;
                            $('#valid_email').val(1);
                            $('#submit-btn').removeClass('disabled');

                        } else {
                            $('#inp_email').addClass("is-invalid").removeClass("is-valid");
                            $('#email_msg').html(
                                "<strong class='text-danger'>" +
                                response['msg'] +
                                " </strong> ");
                            email_valid = false;
                            $('#valid_email').val(0);
                            $('#submit-btn').addClass('disabled', true);
                        }
                    }
                });
            }

        </script>
        @endsection
