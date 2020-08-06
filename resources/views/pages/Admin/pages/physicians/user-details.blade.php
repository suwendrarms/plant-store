@extends('Admin.Layouts.app')
@section('pg-title',$user->firstname.'`s Profile | Care Free Now')
@section('header-content')
<div class="header pb-6 d-flex align-items-center" style="min-height: 200px;
     background-image: url('@if ($user->image){{ asset('uploads/crop/'.$user->image->name) }}@else{{ asset('img/physicians-default.png')  }}@endif');
     background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-12 col-12">
                <h6 class="h2 text-white d-inline-block mb-0"> {{ $user->firstname }} Details</h6>
                <nav aria-label="breadcrumb" class="d-none d-md-block ">
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Start Here</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> {{ $user->firstname }} Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="row">
    <div class="col-xl-3 order-xl-1">
        <div class="card card-profile">
            <img src="{{ asset('img/health3.jpg') }}" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
                <div class="col-lg-3 order-lg-2">
                    <div class="card-profile-image">
                        <a href="#">
                            @if ($user->image)
                            <img src="{{ asset('uploads/crop/'.$user->image->name) }}" alt="Profile Image"
                                class="rounded-circle">
                            @else

                            <img src="{{ asset('img/physicians-default.png')  }}" alt="Progile Image" class="rounded-circle">
                            @endif
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col">
                        <div class="card-profile-stats d-flex justify-content-center">

                        </div>
                    </div>
                </div><br><br>
                <div class="text-center">
                    <h6 class="h3">
                        {{ $user->firstname }} {{ $user->lastname }}<span class="font-weight-light">
                        </span>
                    </h6>

                    <h6 class="h5">
                        {{ $user->email }}<span class="font-weight-light">
                        </span>
                    </h6>
                </div>
            </div>
        </div>
        <div class="" id="sidelink">
            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0 active" id="v-pills-home-tab" data-toggle="pill"
                        href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Personal
                        Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="v-pills-coverage-tab" data-toggle="pill"
                        href="#v-pills-coverage" role="tab" aria-controls="v-pills-coverage"
                        aria-selected="false">Address Information
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="v-pills-final-tab" data-toggle="pill" href="#v-pills-final"
                        role="tab" aria-controls="v-pills-final" aria-selected="false">Final
                        Information
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-xl-9 order-xl-2">
        <div class="card shadow bg-secondary">
            <div class="card-body bg-transparent">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane    fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">
                        @include('Admin/pages/physicians/physician-model/personal-info')
                    </div>

                    <div class="tab-pane    fade show    " id="v-pills-coverage" role="tabpanel"
                        aria-labelledby="v-pills-coverage-tab">
                        @include('Admin/pages/physicians/physician-model/address-info')
                    </div>

                    <div class="tab-pane    fade show    " id="v-pills-final" role="tabpanel"
                        aria-labelledby="v-pills-final-tab">
                        @include('Admin/pages/physicians/physician-model/final-info')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.0.0/cropper.min.css">
<style>
    #cropped_result {
        overflow: hidden;
        width: 200px;
        height: 200px;
    }

    .nav-pills .nav-link {
        font-size: .790rem;
    }

    #sidelink .nav-pills .nav-item {

        padding-bottom: 1rem !important;
        padding-right: 0rem !important;
        /* padding-left: 1rem !important; */
        width: 100%;

    }

    .h6,
    h6 {
        font-size: 1rem;
        font-weight: 300;
    }

    .opacity-8 {
        opacity: 0.1 !important;
    }

</style>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.0.0/cropper.min.js"></script>
<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        if ($('#profileMobile').val() != []) {
            $('#v-pills-profile-tab').click();
        }
        getPhysicion();
        $('#mobile').mask('000-000-0000');


        $('#state').select2({
            placeholder: "select State",
            theme: "bootstrap"
        });

        $('#country').select2({
            placeholder: "select Country",
            theme: "bootstrap"
        });
        $('#profileMobile').mask('000-000-0000');


        getStatus('{{ Auth::user()->UserAddress?Auth::user()->UserAddress->state:"" }}');

        $('.curr_password').on('keyup', function () {
            $.ajax({
                url: "{{ route('check-password') }}",
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
            aspectRatio: 6 / 4,
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
            url: "{{ route('get-status') }}?country=" + country,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'GET',
            success: function (response) {
                var html = "<option></option>";
                $.each(response, function (key, state) {
                    html += "<option " + (def == key ? 'selected' : '') + " value='" + key +
                        "'>" +
                        state + "</option>";
                });

                $('#state').html(html);
            }
        });
    }

    function secondaryHave(id, target) {
        console.log('sssss');
        if ($('#' + id).prop("checked")) {
            $('#' + target).fadeIn();
        } else {
            $('#' + target).fadeOut();

        }
    }

    $('#passGen').on('click', function () {
        var pass = Math.random().toString(36).slice(-8);
        $('#new_password').attr('type', 'text');
        $('#confirm_password').attr('type', 'text');
        $('#new_password').val(pass);
        $('#confirm_password').val(pass);
    });


    //get parent for code
    function getPhysicion() {
        var code = $('#pcpCode').val();
        $.ajax({
            url: "{{ route('admin-get-doctor') }}?code=" + code,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'GET',
            success: function (response) {
                if(response.status==1){
                    if(response.data.email=='{{$user->email}}'){
                        $('.errorMessg').fadeOut();
                        $('#submitBasic').attr('disabled',false);
                    }else{
                        $('.errorMessg').fadeIn();
                        $('#submitBasic').attr('disabled',true);
                    }
                }else{
                    $('.errorMessg').fadeOut();
                    $('#submitBasic').attr('disabled',false);
                }
            }
        });
    }

</script>
@include('Member.pages.Health.includes.js')
@endsection
