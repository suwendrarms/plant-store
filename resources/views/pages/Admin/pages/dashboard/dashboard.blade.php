@extends('Admin.Layouts.app')
@section('header-content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Dashboard</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-block ">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Start Here</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- Card stats -->
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h6 class="card-title text-uppercase text-muted mb-0"><a href="">Patients</a></h6>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($members)??0 }}</div>
                                </div>

                                <div class="col-auto">
                                    <div
                                        class="icon icon-shape bg-gradient-red text-white rounded-circle shadow font-weight-bold">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($members)??0 }}</div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h6 class="card-title text-uppercase text-muted mb-0"><a href="">Physicians</a></h6>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($doctors)??0 }}</div>
                                </div>

                                <div class="col-auto">
                                    <div
                                        class="icon icon-shape bg-gradient-green text-white rounded-circle shadow font-weight-bold">
                                        <i class="fa fa-user-md"></i>
                                    </div>
                                    {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($members)??0 }}</div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h6 class="card-title text-uppercase text-muted mb-0"><a href="">Laboratory</a></h6>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($laboratory)??0 }}</div>
                                </div>

                                <div class="col-auto">
                                    <div
                                        class="icon icon-shape bg-gradient-yellow text-white rounded-circle shadow font-weight-bold">
                                        <i class="fas fa-flask"></i>
                                    </div>
                                    {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($members)??0 }}</div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h6 class="card-title text-uppercase text-muted mb-0"><a>Time Sensitive Action</a></h6>
                                    @if($status)
                                    @if($status->status==1)
                                    <div>
                                        <a href="#">
                                             <span id="MySpan">
                                                <input id="toggle-event" type="checkbox"  data-on="Activate" data-off="Deactivate" data-onstyle="success" data-offstyle="danger"  data-toggle="toggle" data-width="100" data-height="10">
                                                </span>
                                        </a>
                                    </div>
                                    @else
                                    <div>
                                        <a href="#">
                                            <span id="MySpan">
                                                    <input id="toggle-event" type="checkbox" checked data-on="Activate" data-off="Deactivate" data-onstyle="success" data-offstyle="danger"  data-toggle="toggle" data-width="100" data-height="10">
                                            </span>
                                        </a>
                                    </div>
                                    @endif
                                    @endif
                                </div>
                                <div class="col-auto">
                                    @if($status)
                                    @if($status->status==1)
                                    <div
                                        class="icon icon-shape bg-gradient-gray text-white rounded-circle shadow font-weight-bold">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                                    @else
                                    <div
                                        class="icon icon-shape bg-gradient-red text-white rounded-circle shadow font-weight-bold">
                                        <i class="fas fa-times-circle"></i>
                                    </div>
                                    @endif

                                    @else
                                    <div
                                        class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow font-weight-bold">
                                        <i class="far fa-plus-square"></i>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="container-fluid">

    {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-3">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
    <div class="d-sm-flex align-items-center  mb-4 mt-3">
        <!--My Orders -->



        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Members
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> --}}
</div>
@endsection
@section('css')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<style>
    .header {
        background-image:linear-gradient(to bottom, rgba(249, 249, 249, 0.52), rgba(9, 50, 123, 0.73)),
        url('{{ asset("img/coverageinfo.jpg") }}');
        background-size: cover;
        background-position: center;
    }
    .toggle-off{
        font-size: .530rem;
    }
    .toggle-on{
        font-size: .590rem;
    }

</style>

@endsection
@section('js')
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script>
    $(document).ready(function() {
       $('#MySpan').click(function() {
            var url ="{{ route('time-sensitive-actions') }}";
            window.location.href= url;

        });
    });
</script>
@endsection
