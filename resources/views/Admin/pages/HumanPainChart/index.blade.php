@extends('Admin.Layouts.app')
@section('header-content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Human Pain Charts</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-block ">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Start Here</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cancer Types</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a class="btn btn-sm btn-neutral float-right " data-toggle="modal" data-target="#addModal">
                        <i class=" fa fa-plus-circle"></i>New Human Pain Chart
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

<div class="card shadow">
    <div class="card-body">
        <div class="table-responsive">
            <table id="settlements" class="table align-items-center table-flush">

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Gender</th>
                        <th>Body Part</th>
                        <th>Type</th>
                        <th>Coordinates</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pain_charts as $key => $pain_chart )


                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>
                            {{$pain_chart->gender == \app\HumanPainChart::GENDER['MALE']?'Male':'Female'}}
                        </td>
                        <td>
                            {{$pain_chart->type == \app\HumanPainChart::TYPE['FRONT']?'Front':'Back'}}
                        </td>
                        <td>
                            {{ $pain_chart->body_part }}
                        </td>
                        <td>
                            {{ $pain_chart->coordinates }}
                        </td>
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
                                        href="{{ route('admin-human-pain-charts-edit',$pain_chart->id) }}"><i
                                            class="fas fa-user-edit text-warning"></i>&nbsp;Edit</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item delete-user" data-id="{{ $pain_chart->id }}"
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



<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Human Pain Chart</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin-human-pain-charts-store') }}" method="post">
                    @csrf
                    <label for="">Select Gender</label>
                    <div class="form-group pl-4">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="gender_male" name="gender"
                                value="{{\app\HumanPainChart::GENDER['MALE']}}">
                            <label class="custom-control-label" for="gender_male">Male</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="gender_female" name="gender"
                                value="{{\app\HumanPainChart::GENDER['FEMALE']}}">
                            <label class="custom-control-label" for="gender_female">Female</label>
                        </div>
                    </div>

                    <label for="">Select Type</label>
                    <div class="form-group pl-4">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="type_front" name="type"
                                value="{{\app\HumanPainChart::TYPE['FRONT']}}">
                            <label class="custom-control-label" for="type_front">Front</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="type_back" name="type"
                                value="{{\app\HumanPainChart::TYPE['BACK']}}">
                            <label class="custom-control-label" for="type_back">Back</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Enter Body Part</label>
                        <input id="name" class="form-control" type="text" name="body_part">
                    </div>
                    <div class="form-group">
                        <label for="coordinates">Enter Coordinates</label>
                        <textarea class="form-control" id="coordinates" name="coordinates" rows="3"></textarea>
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
            content: 'This will permenantly delete this user',
            buttons: {
                confirm: function () {
                    window.location.href = '{{ url("admin/human-pain-charts/delete") }}/' + id;
                },
                cancel: function () {

                },

            }
        });
    });

</script>
@endsection
