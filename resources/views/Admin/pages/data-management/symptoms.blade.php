@extends('Admin.Layouts.app')
@section('header-content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Symptom</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-block ">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Start Here</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Symptom</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a
                        class="btn btn-sm btn-neutral float-right " data-toggle="modal" data-target="#addModal">
                        <i class=" fa fa-plus-circle"></i>New Symptom
                    </a>
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
        <h1 class="h3 mb-0 text-gray-800">Symptoms</h1>
        <a href="" class="btn btn-primary mb-4 float-right" data-toggle="modal" data-target="#addModal"><i class=" fa
            fa-plus-circle"></i>New Symptom</a>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Admin Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Symptoms</li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-12"> --}}
            <div class="card shadow">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="settlements" class="table align-items-center table-flush" id="dataTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($symptom as $sym)


                                <tr>
                                    <td>{{ $sym->id }}</td>
                                    <td>{{ $sym->name }}</td>
                                    <td>
                                        <div class="dropdown no-arrow mb-4">
                                            <button class="btn btn-sm btn-icon-only text-light" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-left shadow animated--fade-in"
                                                aria-labelledby="dropdownMenuButton" x-placement="bottom-start"
                                                style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item"
                                                    href="{{ route('admin-edit-symptom',$sym->id) }}"><i
                                                        class="fas fa-user-edit text-warning"></i>&nbsp;Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item delete-user" data-id="{{ $sym->id }}"
                                                    href="javascript:void(0)"><i
                                                        class="fas fa-user-times text-danger"></i>&nbsp;Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        {{-- </div>
    </div>
</div> --}}

<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Symptom</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('save-symptom') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Enter Symptom</label>
                        <input id="name" class="form-control" type="text" name="name">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
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

</style>

@endsection
@section('js')
<script>
    $(document).ready(function () {
        $('#dataTable').DataTable();

        $('#settlements').DataTable({
            language: {
                paginate: {
                    next: '<i class="ni ni-bold-right"></i>',
                    previous: '<i class="ni ni-bold-left"></i>'
                }
            },
        });
    });
    $(".delete-user").on('click', function () {
        var id = $(this).attr('data-id');
        $.confirm({
            title: 'Are you sure?',
            content: 'This will permenantly delete this symptom',
            buttons: {
                confirm: function () {
                    window.location.href = '{{ url("admin/delete-symptom") }}/' + id;
                },
                cancel: function () {

                },

            }
        });
    });

</script>
@endsection
