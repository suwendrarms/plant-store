@extends('Admin.Layouts.app')
@section('header-content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Edit Common Medication</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-block ">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Start Here</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Common Medication</li>
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
        <h1 class="h3 mb-0 text-gray-800">Edit Common Medication</h1>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Admin Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Common Medication</li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-8"> --}}
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('admin-update-common-medication') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="my-input">Edit Common Medical Condition</label>
                            <input type="hidden" name="id" value="{{ $common_meditation->id }}">

                            <input id="my-input" class="form-control" type="text" name="name"
                                value="{{ $common_meditation->name }}" required>
                        </div>
                        <div align="center">
                            <button type="submit" class="btn btn-primary ">Save</button>
                        </div>
                    </form>
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
