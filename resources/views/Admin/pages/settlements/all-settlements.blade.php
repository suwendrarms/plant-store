@extends('Admin.Layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between pl-1  mt-3">
        <h1 class="h3 mb-0 text-gray-800">All settlements</h1>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Admin Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">All Settlements</li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-light table-sm" id="dataTable2">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Legel Type</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($intakes as $key=>$intake)


                                <tr>
                                    <td>{{ $key }}</td>
                                    <td>{{ $intake->user->firstname}} {{ $intake->user->lastname}}</td>
                                    <td>{{ $intake->user->email}}</td>
                                    <td>{{ $intake->legalType->name}}</td>
                                    <td>@switch($intake->status)
                                        @case(0)
                                        <span class="badge badge-warning">Draft</span>
                                        @break
                                        @case(1)
                                        <span class="badge badge-primary">Submitted</span>
                                        @break
                                        @case(2)
                                        <span class="badge badge-success">Approved</span>
                                        @break
                                        @default
                                        <span class="badge badge-danger">Declined</span>
                                        @endswitch</td>
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

                                                <a class="dropdown-item"
                                                    href="{{ route('admin-dashboard-view-settlement',$intake->id) }}"><i
                                                        class="fas fa-eye text-primary"></i>&nbsp;View</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item {{ $intake->status==2?'disabled':'' }}"
                                                    href="javascript:void(0)"
                                                    onclick="approve('{{ route('admin-dashboard-settlement-approve',$intake->id) }}')"><i
                                                        class="fas fa-check-circle text-success"></i>&nbsp;Approve</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item {{ $intake->status==2?'disabled':'' }}"
                                                    href="javascript:void(0)"
                                                    onclick="decline('{{ route('admin-dashboard-settlement-decline',$intake->id) }}')"><i
                                                        class="fas fa-ban text-danger"></i>&nbsp;Decline</a>


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
        </div>
    </div>

</div>
@endsection
@section('js')
<script>
    $(document).ready(function () {
        $('#dataTable2').DataTable();
    });

</script>
@endsection
