@extends('Admin.Layouts.app')
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between pl-1  mt-3">
        <h1 class="h3 mb-0 text-gray-800">Email List</h1>
        <a href="" class="btn btn-primary mb-4 float-right"><i class=" fa fa-plus-circle"></i>Add Email</a>

    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Admin Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Email List</li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-light table-sm" id="dataTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Subject</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>


                                    <td>
                                        <div class="dropdown no-arrow mb-4">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fas fa-cog"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-left shadow animated--fade-in"
                                                aria-labelledby="dropdownMenuButton" x-placement="bottom-start"
                                                style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">


                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="{{ route('admin-edit-email') }}"><i
                                                        class="fas fa-user-edit text-warning"></i>&nbsp;Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item delete-user" data-id=""
                                                    href="javascript:void(0)"><i
                                                        class="fas fa-user-times text-danger"></i>&nbsp;Delete</a>
                                                <div class="dropdown-divider"></div>

                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
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
        $('#dataTable').DataTable();
    });

</script>
@endsection
