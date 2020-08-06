@extends('Admin.Layouts.app')
@section('header-content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Settings</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-block ">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Start Here</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Settings</li>
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
        <h1 class="h3 mb-0 text-gray-800">Settings</h1>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Admin Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Settings</li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-8"> --}}
            <div class="card shadow">
                <h3 class="text-center m4">Coming Soon..</h3>
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="" method="post">
                            @csrf
<fieldset disabled="disabled">
                            <div class="form-group ">
                                <div class="col-sm-12 mb-6 mb-sm-0">
                                    <label for="">Site Title</label>
                                    <input type="text" value="{{ old('title') }}"
                                        class="form-control @error('title') is-invalid @enderror form-control-user"
                                        id="title" placeholder="title" name="title" required>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-sm-12 mb-6 mb-sm-0">
                                    <label for="">Address</label>
                                    <textarea id="address" class="form-control" placeholder="" name="address" rows="3"
                                        required></textarea> {{-- <input type="textarea" value="{{ old('name') }}"
                                    class="form-control @error('first_name') is-invalid @enderror form-control-user"
                                    id="exampleFirst" placeholder="" name="name" required> --}}
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-sm-12 mb-6 mb-sm-0">
                                    <label for="">Embed Map Iframe</label>
                                    <input type="text" value="{{ old('iframe') }}"
                                        class="form-control @error('iframe') is-invalid @enderror form-control-user"
                                        id="iframe" placeholder="iframe" name="iframe" required>
                                    @error('iframe')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group ">
                                <div class="col-sm-12 mb-6 mb-sm-0">
                                    <label for="">Email</label>
                                    <input type="text" value="{{ old('email') }}"
                                        class="form-control @error('email') is-invalid @enderror form-control-user"
                                        id="exampleFirst" placeholder="E-Mail" name="email" required>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group ">
                                <div class="col-sm-12 mb-6 mb-sm-0">
                                    <label for="">Phone Number</label>
                                    <input type="text" value="{{ old('phone') }}"
                                        class="form-control @error('phone') is-invalid @enderror form-control-user"
                                        id="phone" placeholder="" name="phone" required>
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group ">
                                <div class="col-sm-12 mb-6 mb-sm-0">
                                    <label for="">Facebook</label>
                                    <input type="text" value="{{ old('facebook') }}"
                                        class="form-control @error('facebook') is-invalid @enderror form-control-user"
                                        id="facebook" placeholder="" name="facebook" required>
                                    @error('facebook')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group ">
                                <div class="col-sm-12 mb-6 mb-sm-0">
                                    <label for="">Twitter</label>
                                    <input type="text" value="{{ old('twitter') }}"
                                        class="form-control @error('twitter') is-invalid @enderror form-control-user"
                                        id="exampleFirst" placeholder="" name="twitter" required>
                                    @error('twitter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group ">
                                <div class="col-sm-12 mb-6 mb-sm-0">
                                    <label for="">Linkedin</label>
                                    <input type="text" value="{{ old('linkedin') }}"
                                        class="form-control @error('first_name') is-invalid @enderror form-control-user"
                                        id="exampleFirst" placeholder="" name="linkedin" required>
                                    @error('linkedin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group ">
                                <div class="col-sm-12 mb-6 mb-sm-0">
                                    <label for="">Google Plus</label>
                                    <input type="text" value="{{ old('gplus') }}"
                                        class="form-control @error('gplus') is-invalid @enderror form-control-user"
                                        id="gplus" placeholder="" name="gplus" required>
                                    @error('gplus')
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


 </fieldset>
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
