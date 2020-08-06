@extends('Admin.Layouts.app')
@section('header-content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Physicians</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-block ">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Start Here</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Physicians</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-4 text-right">
                    <a href="{{ route('admin-dashboard-physician') }}"
                        class="btn btn-sm btn-neutral float-right text-success">
                        <i class="fa fa-plus-circle"></i>Active Physicians
                    </a>
                </div>
                <div class=" text-right">
                    <a href="{{route('admin-dashboard-new-physician')}}"
                        class="btn btn-sm btn-neutral float-right pl-3 pr-3">
                        <i class=" fa fa-plus-circle"></i>New Physician
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
<div class="card border-0 shadow ">
    <div class="card-body bg-transparent">
        <div class="table-responsive py-4">
            <table id="settlements" class="table align-items-center table-flush" id="dataTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Referrer</th>
                        <th>User Name</th>
                        <th>Join Date</th>
                        <th>Physician Code</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key=>$user)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $user->firstname }} {{ $user->lastname }}
                            <br>
                            <span class="badge badge-dark">{{ $user->email }}</span>
                        </td>
                        <td>
                            {{ $user->parent()?$user->parent()->firstname:"" }}
                            {{ $user->parent()?$user->parent()->lastname:"" }}
                            <br>
                            <span class="badge badge-success">
                                {{ $user->parent()?$user->parent()->email:"STARTNOW" }}
                            </span>
                        </td>
                        <td>
                            {{ $user->user_name }}
                        </td>
                        <td>
                            {{ $user->created_at }}
                        </td>

                        <td>{{$user->gotDoctorInformation?$user->gotDoctorInformation->doctor_id:''}}

                        <td>
                            <div class="dropdown no-arrow mb-4">
                                <a class="btn btn-sm btn-icon-only text-light" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-left shadow animated--fade-in"
                                    aria-labelledby="dropdownMenuButton" x-placement="bottom-start"
                                    style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">

                                    <a class="dropdown-item"
                                        href="{{ route('admin-dashboard-physician-details-deactivated', $user->id) }}"><i
                                            class="fas fa-eye text-primary"></i>&nbsp;View</a>
                                    <div class="dropdown-divider responsive-moblile"></div>
                                    <a href="{{route('admin-dashboard.activate' , $user->id)}}"> <i class="fa fa-users"
                                            style="margin-left:22px"> </i>
                                        Activate</a>
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
    });
    $('#settlements').DataTable({
        language: {
            paginate: {
                next: '<i class="ni ni-bold-right"></i>',
                previous: '<i class="ni ni-bold-left"></i>'
            }
        },
    });

    $(".delete-user").on('click', function () {
        var id = $(this).attr('data-id');
        $.confirm({
            title: 'Are you sure?',
            content: 'This will permenantly delete this user',
            buttons: {
                confirm: function () {
                    window.location.href = '{{ url("admin/delete-physician") }}/' + id;
                },
                cancel: function () {

                },

            }
        });
    });

</script>
@endsection
