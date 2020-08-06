@extends('Admin.Layouts/app')

@section('content')
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between">
        <h1 class="h3 mb-3 text-gray-800">Edit profile</h1>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Admin Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-4 text-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile">
                                <div class="avatar">
                                    @if (Auth::user()->image)
                                    <img src="{{ asset('uploads/crop/'.Auth::user()->image->name) }}"
                                        style="width: 200px; height:200px" alt="Circle Image"
                                        class="img-raised rounded-circle img-fluid">
                                    @else
                                    no image found
                                    @endif
                                </div>
                                <div class="name">
                                    <button data-toggle="modal" data-target="#profile-model"
                                        class="btn btn-just-icon btn-link btn-dribbble"><i
                                            class="fa fa-edit"></i></button>
                                    <h5 class="title">{{ $user->firstname.' '.$user->lastname }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card shadow mt-4">
                        <div class="card-body">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                                    role="tab" aria-controls="v-pills-home" aria-selected="true">Personal
                                    Information</a>
                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                                    role="tab" aria-controls="v-pills-profile" aria-selected="false">Address Information
                                </a>
                                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill"
                                    href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                    aria-selected="false">Password
                                    Information</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane shadow card card-body fade show active p-4" id="v-pills-home" role="tabpanel"
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
                                                id="firstname" name="firstname" placeholder="Enter Name Here" required>
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
                                                id="lastname" name="lastname" placeholder="Enter Name Here" required>
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
                                            <input type="text" value="{{ $user->email }}" class="form-control disabled"
                                                readonly>
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
                <div class="tab-pane shadow card card-body fade show p-4" id="v-pills-profile" role="tabpanel"
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
                                        class="form-control {{ $errors->has('state') ? ' is-invalid' : '' }}" id="state"
                                        name="state" placeholder="Enter State Here">

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
                <div class="tab-pane shadow card card-body fade show p-4" id="v-pills-messages" role="tabpanel"
                    aria-labelledby="v-pills-messages-tab">
                    <form class="tab-wizard wizard-circle wizard clearfix" action="{{ route('update-admin-password') }}"
                        method="POST">
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
                                    <label for="">New Password</label>
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
        <div class="col-md-3">

        </div>
    </div>

</div>
<div class="modal fade" id="profile-model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
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

@include('Admin.pages.profile.profile-css')
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
