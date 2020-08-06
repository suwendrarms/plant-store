@extends('Admin.Layouts.app')
@section('pg-title',$user->firstname.'`s Profile | Care Free Now')
@section('header-content')
<div class="header pb-6 d-flex align-items-center" style="min-height: 200px;
     background-image: url('@if ($user->image){{ asset('uploads/crop/'.$user->image->name) }}@else{{ asset('img/patients-default.png')  }}@endif');
     background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-12 col-12">
                <h6 class="h2 text-white d-inline-block mb-0"> {{ $user->firstname }}'s Details</h6>
                <nav aria-label="breadcrumb" class="d-none d-md-block ">
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Start Here</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> {{ $user->firstname }}'s Details</li>
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

                            <img src="{{ asset('img/patients-default.png')  }}" alt="Progile Image"
                                class="rounded-circle">
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
        <div class="col-xl-12 order-xl-1 center px-0">
            <div class="nav-wrapper" id="sidelink">
                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0 active" id="v-pills-home-tab" data-toggle="pill"
                            href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Personal
                            Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="v-pills-coverage-tab" data-toggle="pill"
                            href="#v-pills-coverage" role="tab" aria-controls="v-pills-coverage"
                            aria-selected="false">Coverage Information
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="v-pills-mdcl-tab" data-toggle="pill"
                            href="#v-pills-mdcl" role="tab" aria-controls="v-pills-mdcl" aria-selected="false">Medical
                            Information
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="v-pills-life-tab" data-toggle="pill"
                            href="#v-pills-life" role="tab" aria-controls="v-pills-life" aria-selected="false">Lifestyle
                            Information
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="v-pills-cgx-tab" data-toggle="pill" href="#v-pills-cgx"
                            role="tab" aria-controls="v-pills-cgx" aria-selected="false">Pre Qualification CGX</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="v-pills-pgx-tab" data-toggle="pill" href="#v-pills-pgx"
                            role="tab" aria-controls="v-pills-pgx" aria-selected="false">Pre Qualification PGX</a>
                    </li> --}}
                    {{-- <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="v-pills-settlement-tab" data-toggle="pill"
                            href="#v-pills-settlement" role="tab" aria-controls="v-pills-settlement"
                            aria-selected="false">&nbsp;&nbsp;&nbsp;Settlements &nbsp;&nbsp;&nbsp;&nbsp;</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="v-pills-sensitive-tab" data-toggle="pill"
                            href="#v-pills-sensitive" role="tab" aria-controls="v-pills-sensitive"
                            aria-selected="false">Time sensitive action</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="v-pills-appointment-tab" data-toggle="pill"
                            href="#v-pills-appointment" role="tab" aria-controls="v-pills-appointment"
                            aria-selected="false">Appointments</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xl-9 order-xl-2">
        <div class="card shadow bg-secondary">
            <div class="card-body bg-transparent">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane    fade show active    " id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">
                        @include('Admin.pages/user-page-models/personal-info')

                    </div>
                    <div class="tab-pane    fade show    " id="v-pills-coverage" role="tabpanel"
                        aria-labelledby="v-pills-coverage-tab">
                        @include('Admin.pages/user-page-models/coverage-info')
                    </div>
                    <div class="tab-pane    fade show    " id="v-pills-mdcl" role="tabpanel"
                        aria-labelledby="v-pills-mdcl-tab">
                        @include('Admin.pages/user-page-models/medical-infor')
                    </div>
                    <div class="tab-pane    fade show    " id="v-pills-med" role="tabpanel"
                        aria-labelledby="v-pills-med-tab">

                        @include('Admin.pages/user-page-models/med-info')
                    </div>
                    <div class="tab-pane    fade show    " id="v-pills-life" role="tabpanel"
                        aria-labelledby="v-pills-life-tab">
                        @include('Admin.pages/user-page-models/lifestyle')
                    </div>
                    <div class="tab-pane    fade show    " id="v-pills-cgx" role="tabpanel"
                        aria-labelledby="v-pills-cgx-tab">

                        @include('Admin.pages/user-page-models/cgx-info')
                    </div>
                    <div class="tab-pane    fade show    " id="v-pills-pgx" role="tabpanel"
                        aria-labelledby="v-pills-pgx-tab">

                        @include('Admin.pages/user-page-models/pgx-info')
                    </div>
                    <div class="tab-pane    fade show    " id="v-pills-settlement" role="tabpanel"
                        aria-labelledby="v-pills-settlement-tab">

                        @include('Admin.pages/user-page-models/legal_intake_info')
                    </div>
                    <div class="tab-pane    fade show    " id="v-pills-sensitive" role="tabpanel"
                        aria-labelledby="v-pills-sensitive-tab">

                        @include('Admin.pages/user-page-models/time-sensitive')
                    </div>
                    <div class="tab-pane    fade show    " id="v-pills-appointment" role="tabpanel"
                        aria-labelledby="v-pills-appointment-tab">

                        @include('Admin.pages/user-page-models/appointment')
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

    .accordion>.col-lg-12>.card:not(:last-of-type) {
        border: 1px solid #b3ddff;
        background: #eff6fb;
        border-radius: 0px;
        margin-bottom: 12%;
    }

    .accordion>.col-lg-6>.card:not(:last-of-type) {
        border: 1px solid #b3ddff;
        background: #eff6fb;
        border-radius: 0px;
        margin-bottom: 12%;
    }

    .accordion>.col-lg-12>.card>.card-header {
        border-radius: 0;
    }
    .accordion>.col-lg-6>.card>.card-header {
        border-radius: 0;
    }

    .card-header {
        border-bottom: 0px solid rgba(0, 0, 0, 0);
        background-color: rgba(0, 0, 0, 0);
        padding-top: .25rem;
        padding-right: .5rem;
        padding-bottom: .25rem;
        padding-left: .5rem;
    }

    a[aria-expanded="true"] {
        color: #5b75e7 !important;
    }

    .cbody {
        padding: 0px 40px 20px 70px;
        font-weight: 400;
    }

    .blink {
        color: #1a264a;
        font: 400 18px/20px "Montserrat", sans-serif;
    }

    .fasi {
        font-weight: 900;
        margin-right: 20px;
        color: #007bff;
    }

    .accordion>.col-lg-12>.card {
        background: #eff6fb;
        border: 1px solid #b3ddff;
    }

    .accordion>.col-lg-6>.card {
        background: #eff6fb;
        border: 1px solid #b3ddff;
    }
    .accordion .card-header:after{
        display: none;
    }
    #accordionExample strong {
        font-weight: 400;
        color: #0c4ef0;
        font-size: 1rem;
    }
    #accordionExample label{
        margin-left: 30px;
    }

    #accordionExample .btn{
        text-align: left;
    }

    .div-quiz{
        width:5%;
        height:auto;
        color: #007bff;
    }
    .div-quiz-num{
        width:6%;
        height:auto;
        font: 400 18px/20px "Montserrat", sans-serif;
        font-size: 2rem;
    }

    .div2{
        width:89%;
        height:auto;
    }
    #inline_quiz{
        width:100%;
        height:auto;
        display:flex;
    }
    .num-quiz{
        font-size: 1.1rem;
    }
    #inline_quiz .btn{
        padding-left: 0.5rem;
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
        $('#dataTable').DataTable({
            language: {
                paginate: {
                    next: '<i class="ni ni-bold-right"></i>',
                    previous: '<i class="ni ni-bold-left"></i>'
                }
            },
        });

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

</script>
@endsection
