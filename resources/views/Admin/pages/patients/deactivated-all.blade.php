@extends('Admin.Layouts.app')
@section('header-content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Patients</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-block ">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Start Here</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Patients</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-4 text-right">
                    <a href="{{ route('admin-dashboard-users') }}"
                        class="btn btn-sm btn-neutral float-right text-success">
                        <i class="fa fa-plus-circle"></i>Active Patients
                    </a>
                </div>
                <div class=" text-right">
                    <a href="{{route('admin-dashboard-new-user')}}"
                        class="btn btn-sm btn-neutral float-right pl-3 pr-3">
                        <i class=" fa fa-plus-circle"></i>New Patients
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
                        <th>Patient</th>
                        <th>Referrer</th>
                        <th>Step Completed</th>
                        <th>Join Date</th>
                        <th>Patient's Status</th>
                        <th>Admin Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)


                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->firstname }} {{ $user->lastname }}
                            <br>
                            <span class="badge badge-dark">{{ $user->email }}</span>
                        </td>
                        <td>
                            <span class="badge badge-success">
                                {{ $user->ub_reff_id?$user->ub_reff_id:"-" }}
                            </span>
                        </td>
                        <td>
                            c.soon
                        </td>
                        <td>
                            {{ $user->created_at }}
                        </td>
                        <td>


                        </td>
                        <td>@if ($user->vefificationStatus!=null)

                            @if ($user->vefificationStatus->basic==1)
                            <span class="badge badge-success">Basic</span>
                            @elseif($user->vefificationStatus->fraud==1)
                            <span class="badge badge-success">Fraud</span>
                            @elseif($user->vefificationStatus->cgx==1)
                            <span class="badge badge-success">CGX</span>
                            @elseif($user->vefificationStatus->apoinment==1)
                            <span class="badge badge-success">Appointment</span>
                            @elseif($user->vefificationStatus->apoinment==0
                            &&$user->vefificationStatus->cgx==0 && $user->vefificationStatus->fraud==0 &&
                            $user->vefificationStatus->basic==0 )
                            <span class="badge badge-warning">Not Verified</span>

                            @endif

                            @endif

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
                                        href="{{ route('admin-dashboard-patient-details-deactivated', $user->id) }}"><i
                                            class="fas fa-eye text-primary"></i>&nbsp;View</a>
                                    <div class="dropdown-divider responsive-moblile"></div>
                                    <a href="{{route('admin-dashboard.activate' , $user->id)}}"> <i
                                            class="fa fa-users" style="margin-left:22px"> </i>
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
                    window.location.href = '{{ url("admin/delete-user") }}/' + id;
                },
                cancel: function () {

                },

            }
        });
    });

</script>
@endsection
