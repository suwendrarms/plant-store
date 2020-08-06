@extends('Admin.Layouts.app')
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between pl-1  mt-3">
        <h1 class="h3 mb-0 text-gray-800">Email Templates</h1>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Admin Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Email Templates</li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="" method="post">
                            @csrf
                            <div class="col-lg-6">
                                <div class="form-check ">
                                    <label class="form-check-label mr-2">
                                        <input class="form-check-input" type="radio" name="diabetes" id=""
                                            value="checkedValue"> All
                                    </label><br>
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="diabetes" id=""
                                            value="checkedValue"> Verified
                                    </label><br>
                                    <label class="form-check-label mr-2">
                                        <input class="form-check-input" type="radio" name="diabetes" id=""
                                            value="checkedValue"> Step Personal Info
                                    </label><br>
                                    <label class="form-check-label mr-2">
                                        <input class="form-check-input" type="radio" name="diabetes" id=""
                                            value="checkedValue"> coverage Info
                                    </label><br>
                                    <label class="form-check-label mr-2">
                                        <input class="form-check-input" type="radio" name="diabetes" id=""
                                            value="checkedValue"> Step Med Info
                                    </label><br>
                                    <label class="form-check-label mr-2">
                                        <input class="form-check-input" type="radio" name="diabetes" id=""
                                            value="checkedValue"> Step CGX
                                    </label><br>
                                    <label class="form-check-label mr-2">
                                        <input class="form-check-input" type="radio" name="diabetes" id=""
                                            value="checkedValue"> Step PGX
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mt-2">
                                <div class="col-sm-12 mb-6 mb-sm-0">
                                    <label for="">Specific User</label>
                                    <select class="form-control select2" id="select_user" name="" required="required">
                                        <option value=""></option>

                                        <option value="">
                                        </option>

                                    </select>

                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-sm-12 mb-6 mb-sm-0">
                                    <label for="">Subject</label>
                                    <input type="text" value="{{ old('subject') }}"
                                        class="form-control @error('title') is-invalid @enderror form-control-user"
                                        id="subject" placeholder="subject" name="subject" required>
                                    @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group ">
                                <div class="col-sm-12 ">
                                    <label for="">Body</label>
                                    <textarea class="ckeditor" id="editor1" name="editor1" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12 mb-6 mb-sm-0">
                                    <label for="">Personalization Tags</label>
                                </div>
                            </div>
                            <div align="left">
                                <input class="btn btn-primary " type="submit" value="Preview" />
                                <input class="btn btn-success " type="submit" value="Send Now" />
                                <input class="btn btn-warning " type="submit" value="Send Later" />
                                <input class="btn btn-danger " type="submit" value="Cancel" />

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
        CKEDITOR.replace('editor1');
    });
    $('#select_user').select2();

</script>
@endsection
