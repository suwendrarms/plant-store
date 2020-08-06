@extends('Admin.Layouts.app')
@section('header-content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Change Password</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-block ">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Start Here</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Change Password</li>
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
{{-- <div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between pl-1  mt-3">
        <h1 class="h3 mb-0 text-gray-800">Change Password</h1>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Admin Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">Change Password</li>
</ol>
</nav>
<div class="row justify-content-center">
    <div class="col-md-8"> --}}
        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <form action="" method="post">
                        @csrf
                        <div class="form-group ">
                            <div class="col-sm-12 mb-6 mb-sm-0">
                                <label for="">Old Password</label>
                                <input type="password" value="{{ old('password') }}"
                                    class="form-control @error('title') is-invalid @enderror form-control-user"
                                    id="password" placeholder="password" name="password" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-sm-12 mb-6 mb-sm-0">
                                <label for="">New Password</label>
                                <input type="password" value="{{ old('new_password') }}"
                                    class="form-control @error('new_password') is-invalid @enderror form-control-user"
                                    id="new_password" placeholder="new_password" name="new_password" required>
                                @error('new_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-sm-12 mb-6 mb-sm-0">
                                <label for="">Confirm Password</label>
                                <input type="password" value="{{ old('new_password') }}"
                                    class="form-control @error('confirm_password') is-invalid @enderror form-control-user"
                                    id="confirm_password" placeholder="confirm_password" name="confirm_password"
                                    required>
                                @error('confirm_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div align="right">
                            <input class="btn btn-primary " type="submit" value="Submit" />
                            <input class="btn btn-info " type="submit" value="Cancel" />
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
