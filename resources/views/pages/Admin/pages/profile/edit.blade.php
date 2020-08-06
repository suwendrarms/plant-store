@extends('Admin.Layouts.app')
@section('pg-title',Auth::user()->firstname.'`s Profile | Care Free Now')
@section('header-content')
<div class="header pb-6 d-flex align-items-center" style="min-height: 500px;
     background-image: url('@if (Auth::user()->image){{ asset('uploads/crop/'.Auth::user()->image->name) }}@else{{ asset('img/admin.png')  }}@endif');
     background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-12 col-md-10">
                <h1 class="display-2 text-white">Hello {{ Auth::user()->firstname }}</h1>
                <p class="text-white mt-0 mb-5">This is your profile page. You can update your personal information
                    here.</p>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="row">
    <div class="col-xl-4 order-xl-2">
        <div class="card card-profile">
            <img src="{{ asset('img/health3.jpg') }}" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
                <div class="col-lg-3 order-lg-2">
                    <div class="card-profile-image">
                        <a href="#">
                            @if (Auth::user()->image)
                            <img src="{{ asset('uploads/crop/'.Auth::user()->image->name) }}" alt="Profile Image"
                                class="rounded-circle">
                            @else

                            <img src="{{ asset('img/admin.png')  }}" alt="Progile Image" class="rounded-circle">
                            @endif
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                <div class="d-flex justify-content-between">
                    <button data-toggle="modal" data-target="#profile-model" class="btn btn-sm btn-info mr-4">
                        <i class="fas fa-pencil-alt"></i> Image</button>
                    {{-- <a href="{{route('support.member.messages.index')}}" class="btn btn-sm btn-default
                    float-right"><i class="fas fa-inbox"></i> Support</a> --}}
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col">
                        <div class="card-profile-stats d-flex justify-content-center">

                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <h5 class="h2">
                        {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}<span class="font-weight-light">
                        </span>
                    </h5>

                    <small>{{ Auth::user()->email }}<span>
                        </span></small>





                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8 order-xl-1">
        <div class="nav-wrapper">
            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0 active" id="v-pills-home-tab" data-toggle="pill"
                        href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i
                            class="ni ni-cloud-upload-96 mr-2"></i>Personal
                        Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="v-pills-profile-tab" data-toggle="pill"
                        href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i
                            class="ni ni-bell-55 mr-2"></i>Address Information
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="v-pills-messages-tab" data-toggle="pill"
                        href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i
                            class="ni ni-calendar-grid-58 mr-2"></i>Password
                        Information</a>
                </li>
            </ul>
        </div>
        <div class="card shadow bg-secondary">
            <div class="card-body bg-transparent">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active p-4" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">
                        <form class="tab-wizard wizard-circle wizard clearfix" action="{{ route('update-profile') }}"
                            method="get">
                            @csrf
                            <div class="row">
                                <div class="col-lg-8 ml-auto mr-auto">

                                    <h4 class="card-title text-center"><strong>
                                            Personal Information
                                        </strong> </h4>
                                    <hr>
                                    <div class="row text-left">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                <label for="first_name">First Name</label>
                                                <input type="text" value="{{ $user->firstname }}"
                                                    onkeypress="return checkSpcialChar(event)"
                                                    class="form-control {{ $errors->has('firstname') ? ' is-invalid' : '' }}"
                                                    id="firstname" name="firstname" placeholder="Enter Name Here"
                                                    required>
                                                @if ($errors->has('firstname'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('firstname') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group">

                                                <label for="first_name">Last Name</label>
                                                <input type="text" value="{{ $user->lastname }}"
                                                    onkeypress="return checkSpcialChar(event)"
                                                    class="form-control {{ $errors->has('lastname') ? ' is-invalid' : '' }}"
                                                    id="lastname" name="lastname" placeholder="Enter Name Here"
                                                    required>
                                                @if ($errors->has('lastname'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('lastname') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="first_name">Email</label>
                                                <input type="text" value="{{ $user->email }}"
                                                    class="form-control disabled" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="mobile">Phone</label>
                                                <input type="number" value="{{ $user->phone }}" name="mobile"
                                                    class="form-control " id="profileMobile" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 ">
                                            <h6 class="text-center">
                                                <button class="btn btn-info " type="submit">Submit</button>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade show show p-4" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">
                        <h4 class="card-title text-center"><strong>Address Information</strong></h4>
                        <hr>


                        <div class="blur" id="cc_card_blur">
                            <form class="tab-wizard wizard-circle wizard clearfix"
                                action="{{ route('update-admin-address') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 ml-auto mr-auto">
                                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                                        <label for="">Street</label>
                                        <input type="text" name="street" class="form-control"
                                            value="{{ Auth::user()->UserAddress?Auth::user()->UserAddress->street:'' }}"
                                            required>
                                        <label for="">city</label>
                                        <input type="text" name="city" class="form-control"
                                            value="{{ Auth::user()->UserAddress?Auth::user()->UserAddress->city:'' }}"
                                            required>

                                    </div>
                                    <div class="col-lg-4">
                                        <label for="">Country</label>
                                        <select required
                                            class="form-control {{ $errors->has('country') ? ' is-invalid' : '' }}"
                                            id="country" name="country" onchange="getStatus()"
                                            placeholder="Enter Country Here">

                                            <option></option>
                                            @foreach ($country_list as $sh => $country)
                                            <option
                                                {{ Auth::user()->UserAddress&&Auth::user()->UserAddress->country==$sh?'selected':'' }}
                                                value="{{ $sh }}">{{ $country }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="">State</label>
                                        <select required
                                            class="form-control {{ $errors->has('state') ? ' is-invalid' : '' }}"
                                            id="state" name="state" placeholder="Enter State Here">

                                            <option></option>
                                            @foreach ($states_list as $sh => $state)
                                            <option
                                                {{ Auth::user()->UserAddress&&Auth::user()->UserAddress->state==$sh?'selected':'' }}
                                                value="{{ $sh }}">{{ $state }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="">Zip</label>
                                        <input type="number" min="1" name="zip" required class="form-control"
                                            value="{{ Auth::user()->UserAddress?Auth::user()->UserAddress->zip:'' }}"
                                            placeholder="Zip">
                                    </div>
                                    <div class="col-lg-12 text-center mt-4 pt-4">
                                        <button class="btn btn-info" id="cc_update_btn" type="submit">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade show show p-4" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab">
                        <form class="tab-wizard wizard-circle wizard clearfix"
                            action="{{ route('update-admin-password') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 ml-auto mr-auto">
                                    <h4 class="card-title text-center"><strong>Change Password</strong></h4>
                                    <hr>
                                    <label for="">Enter Current Password</label>
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <input type="password" name="curr_password" id="curr_password"
                                        class="curr_password form-control">
                                    <small id="curr_pass_msg"></small>
                                    <br>
                                    <span id="new_pass_section" class="d-none">
                                        <label for="">New Password <a href="javascript:void(0)"
                                                id="passGen">Generate</a></label>
                                        <input type="password" name="password" id="new_pass" class="form-control">
                                        <label for="">Confirm Password</label>
                                        <input type="password" onkeyup="validatepasswordconf()" name="confirm_password"
                                            id="confirm_pass" class="form-control">
                                        <small id="conf_pass_msg"></small>
                                        <div class="col-lg-12 text-center mt-4 pt-4">
                                            <button onmouseover="validatepasswordconf()" class="btn btn-info"
                                                id="sumbit-btn" disabled type="submit">Update</button>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><input id="password" minlength="8" type="password"
        class="responsive-moblile form-control @error('password') is-invalid @enderror" name="password" required
        autocomplete="new-password">

    @error('password')
    <span class="invalid-feedback responsive-moblile" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="modal fade" id="profile-model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit profile image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('profile-picture-update') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="user_id" value="{{ $user->id }}">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="">Select Image</label>
                                <input type="file" class="form-control" name="image" id="inp_image"
                                    accept="image/jpg, image/jpeg, image/png" aria-describedby="helpId" placeholder=""
                                    onchange="readImageURL(this);">
                            </div>
                        </div>
                        <div class="col-lg-8 d-none cropping-elements">
                            <h6 class="text-center">Original Image</h6>
                            <hr>
                            <div class="image_container">
                                <img id="inp_image_pre" src="#" style="width:100%" alt="your image" />
                            </div>
                        </div>
                        <div class="col-lg-3 d-none cropping-elements">
                            <h6 class="text-center">Preview</h6>
                            <hr>
                            <div id="cropped_result"></div>
                        </div>
                        <input type="hidden" name="x1" id="inp_x1">
                        <input type="hidden" name="y1" id="inp_y1">
                        <input type="hidden" name="h" id="inp_h">
                        <input type="hidden" name="w" id="inp_w">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.0.0/cropper.min.css">
<style>
    #cropped_result {
        overflow: hidden;
        width: 200px;
        height: 200px;
    }

</style>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.0.0/cropper.min.js"></script>
<script>
    $('#passGen').on('click', function () {
        var pass = Math.random().toString(36).slice(-8);
        $('#new_pass').attr('type', 'text');
        $('#confirm_pass').attr('type', 'text');
        $('#new_pass').val(pass);
        $('#confirm_pass').val(pass);
    });


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

        getStatus('{{ Auth::user()->UserAddress?Auth::user()->UserAddress->state:"" }}');

        $('.curr_password').on('keyup', function () {
            $.ajax({
                url: "{{ route('admin-check-password') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                data: {
                    password: $(this).val()
                },
                success: function (response) {
                    if (response == 'true') {
                        $('#curr_pass_msg').addClass('text-success').removeClass(
                            'text-danger').html('Password is' +
                            ' correct');

                        $('#new_pass_section').removeClass('d-none');
                    } else {
                        $('#curr_pass_msg').addClass('text-danger').removeClass(
                            'text-success').html('Password is' +
                            ' incorrect');
                        $('#new_pass_section').addClass('d-none');
                    }
                }
            });
        })

    });


    function readImageURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#inp_image_pre').attr('src', e.target.result)
                initCropper();
            };
            reader.readAsDataURL(input.files[0]);
        }
        $('.cropping-elements').removeClass('d-none');
    }


    function initCropper() {

        var $image = $('#inp_image_pre');
        $image.cropper('destroy');
        $image.cropper({
            aspectRatio: 3 / 4,
            preview: '#cropped_result',
            crop: function (event) {
                $('#inp_x1').val(event.detail.x);
                $('#inp_y1').val(event.detail.y);
                $('#inp_w').val(event.detail.width);
                $('#inp_h').val(event.detail.height);
            }
        });

        var cropper = $image.data('cropper');

    }

    function destroye() {
        $currentCropper = $('#inp_image_pre').data('cropper');
        if ($currentCropper) {
            $currentCropper.destroy();
        }
    }

    function validatepasswordconf() {
        if ($('#new_pass').val() == $('#confirm_pass').val()) {
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

    function checkSpcialChar(event) {
        if (!((event.keyCode >= 65) && (event.keyCode <= 90) || (event.keyCode >= 97) && (event.keyCode <= 122) || (
                event.keyCode >= 48) && (event.keyCode <= 57))) {
            event.returnValue = false;
            return;
        }
        event.returnValue = true;
    }


    function getStatus(def = "") {
        var country = $('#country').val();
        $.ajax({
            url: "{{ route('admin-get-status') }}?country=" + country,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'GET',
            success: function (response) {
                var html = "<option></option>";
                $.each(response, function (key, state) {
                    html += "<option " + (def == key ? 'selected' : '') + " value='" + key + "'>" +
                        state + "</option>";
                });

                $('#state').html(html);
            }
        });
    }

</script>
@endsection
