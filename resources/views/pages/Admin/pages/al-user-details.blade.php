@extends('Admin.Layouts.app')
@section('header-content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">User Details</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-block ">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Start Here</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row justify-content-center">

            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="card shadow">
    <div class="card-body">
        <h1 class="h3 mb-0 text-gray-800">User Details</h1>

        <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-8">
                    <h6 class="text-left">
                        Verification status &nbsp;&nbsp;&nbsp; <span class="verStatus">
                            @if($userStatus!=[])
                            @if($userStatus->basic==1)
                            API Push
                            @elseif($userStatus->fraud==1)
                            Fraud Verify
                            @elseif($userStatus->cgx==1)
                            CGX Verify
                            @elseif($userStatus->apoinment==1)
                            Quest Appoint Verify
                            @else
                            Select All
                            @endif
                            @else
                            -
                            @endif
                        </span>
                    </h6>
                </div>
                <div class="col-lg-4">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal"><i
                            class="fas fa-cog"></i></a>

                </div>
            </div>
        </div>

    </div>
    {{-- <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Admin Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">User Details</li>
        </ol>
    </nav> --}}
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="col-md-12 mb-4">
                <div class="card  card-profile">
                    <div class="card-body">
                        <div class="profile">
                            <div class="card-profile-image">
                                @if ($user->image)
                                <img src="{{ asset('uploads/crop/'.$user->image->name) }}"
                                     alt="Circle Image"
                                    class="rounded-circle">
                                @else
                                no image found
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                                role="tab" aria-controls="v-pills-home" aria-selected="true">Personal
                                Information</a>
                            <a class="nav-link" id="v-pills-coverage-tab" data-toggle="pill" href="#v-pills-coverage"
                                role="tab" aria-controls="v-pills-coverage" aria-selected="false">Coverage Information
                            </a>
                            <a class="nav-link" id="v-pills-mdcl-tab" data-toggle="pill" href="#v-pills-mdcl" role="tab"
                                aria-controls="v-pills-mdcl" aria-selected="false">Medical Information
                            </a>
                            <a class="nav-link" id="v-pills-life-tab" data-toggle="pill" href="#v-pills-life" role="tab"
                                aria-controls="v-pills-life" aria-selected="false">Lifestyle Information
                            </a>
                            <a class="nav-link" id="v-pills-cgx-tab" data-toggle="pill" href="#v-pills-cgx" role="tab"
                                aria-controls="v-pills-cgx" aria-selected="false">Pre Qualification CGX</a>

                            <a class="nav-link" id="v-pills-pgx-tab" data-toggle="pill" href="#v-pills-pgx" role="tab"
                                aria-controls="v-pills-pgx" aria-selected="false">Pre Qualification PGX</a>

                            {{-- <a class="nav-link" id="v-pills-settlement-tab" data-toggle="pill"
                                href="#v-pills-settlement" role="tab" aria-controls="v-pills-settlement"
                                aria-selected="false">Settlement</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="tab-content" id="v-pills-tabContent">
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


            </div>
        </div>

    </div>
    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">


                <!-- Modal body -->
                <div class="modal-body">
                    <div align="left" class="mt-2 mb-4">
                        <a href="{{ route('verification-status',['user_id'=>$user->id, 'status'=>1]) }}">
                            <button class="btn btn-info mdl" type="submit"
                                {{$userStatus? $userStatus->basic!=0?'disabled':'':'' }}>API Push</button>
                        </a>
                        <a href="{{ route('verification-status',['user_id'=>$user->id, 'status'=>2]) }}"> <button
                                class="btn btn-info mdl" type="submit"
                                {{$userStatus? $userStatus->fraud!=0?'disabled':'':'' }}>Fraud Verify</button></a>

                        <a href="{{ route('verification-status',['user_id'=>$user->id, 'status'=>3]) }}"><button
                                class="btn btn-info mdl" type="submit"
                                {{$userStatus? $userStatus->cgx!=0?'disabled':'':'' }}>CGX Verify</button></a>

                        <a href="{{ route('verification-status',['user_id'=>$user->id, 'status'=>4]) }}"><button
                                class="btn btn-info mdl" type="submit"
                                {{$userStatus? $userStatus->apoinment!=0?'disabled':'':'' }}>Quest Appoint
                                Verify</button></a>

                        <a href="{{ route('verification-status',['user_id'=>$user->id, 'status'=>5]) }}"><button
                                class="btn btn-info mdl" type="submit">Complete All</button></a>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
@section('css')
<style>
    .header {
        background-image:linear-gradient(to bottom, rgba(249, 249, 249, 0.52), rgba(9, 50, 123, 0.73)),
        url('{{ asset("img/coverageinfo.jpg") }}');
        background-size: cover;
        background-position: center;
    }
    .mdl {
        font-size: 10px;
    }

    .verStatus {
        color: blue;
    }

    .main{
        color: black;
    }
    .col-md-3{
        padding-right: 0px !important;
    }
    .bm {
        padding-right: 0;
    }
    .col-md-9
    {
        padding-right: 0px !important;
    }
    .nav-pills .nav-link {
    font-size: .800rem !important;
    }

}

</style>

@endsection
@section('js')
<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        $('.dropify').dropify();
    });

</script>
@endsection

