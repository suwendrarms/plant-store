@extends('Admin.Layouts.app')
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between pl-1  mt-3">
        <h1 class="h3 mb-0 text-gray-800">Edit User</h1>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Admin Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit User</li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="{{ route('update-user') }}" method="POST">
                            @csrf
                            <div class="form-group ">
                                <div class="col-sm-12 mb-6 mb-sm-0">
                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                    <label for="">Email</label>
                                    <input type="email"
                                        class="form-control @error('email') is-invalid @enderror form-control-user"
                                        id="email" value="{{ $user->email?$user->email:'' }}" name="email" required>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-sm-12 mb-6 mb-sm-0">
                                    <label for="">Password</label>
                                    <input type="password" value="{{ old('password') }}"
                                        class="form-control @error('password') is-invalid @enderror form-control-user"
                                        id="password" placeholder="Password" name="password" required>
                                    @error('password')
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
                            {{-- {{ dd(Auth::user()) }} --}}
                            <div class="form-group ">
                                <div class="col-sm-12 mb-6 mb-sm-0">
                                    <label for="">A Referrer</label>
                                    <input type="text" value="{{ old('referrer') }}"
                                        class="form-control @error('referrer') is-invalid @enderror form-control-user"
                                        id="referrer" placeholder="referrer" name="referrer" required>
                                    @error('referrer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div align="left">
                                <input class="btn btn-primary " type="submit" value="Push to API" />

                            </div>
                            <div class="form-group ">
                                <div class="col-sm-12 mb-6 mb-sm-0">
                                    <label for="">First Name</label>
                                    <input type="text"
                                        class="form-control @error('firstname') is-invalid @enderror form-control-user"
                                        id="firstname" value="{{ $user->firstname?$user->firstname:'' }} "
                                        name="firstname" required>
                                    @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-sm-12 mb-6 mb-sm-0">
                                    <label for="">Last Name</label>
                                    <input type="text" placeholder="{{ old('lastname') }}"
                                        class="form-control @error('lastname') is-invalid @enderror form-control-user"
                                        id="name" value=" {{ $user->lastname?$user->lastname:'' }}" name="lastname"
                                        required>
                                    @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-sm-12 mb-6 mb-sm-0">
                                    <label for="">Phone</label>
                                    <input type="number" placeholder="{{ old('phone') }}"
                                        class="form-control @error('phone') is-invalid @enderror form-control-user"
                                        id="phone" value="{{ $user->phone?$user->phone:'' }}" name="phone" required>
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-sm-12 mb-6 mb-sm-0">
                                    <label for="">Photo</label>
                                    {{-- {{ dd($user->image?$user->image->name:'') }} --}}

                                    <input name="image" type="file" class="dropify" data-height="300" @if ($user->image)
                                    data-default-file="{{ asset('uploads/crop/'.$user->image->name) }} "
                                    @endif />

                                    @error('image')
                                    <span class=" invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div align="left">
                                <input class="btn btn-primary " type="submit" value="Submit" />
                                <input class="btn btn-info " type="submit" value="Cancel" />
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function () {
        $('.dropify').dropify();
    });

</script>
@endsection
