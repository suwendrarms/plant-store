@extends('Admin.Layouts.app')
@section('header-content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Edit Human Pain Chart</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-block ">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Start Here</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Human Pain Chart</li>
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

<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('admin-human-pain-charts-update', $pain_chart->id) }}" method="post">
            @csrf
            <label for="">Select Gender</label>
            <div class="form-group pl-4">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="gender_male" name="gender"
                        value="{{\app\HumanPainChart::GENDER['MALE']}}"
                        {{$pain_chart->gender ==\app\HumanPainChart::GENDER['MALE']?'checked':''}}>
                    <label class="custom-control-label" for="gender_male">Male</label>
                </div>

                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="gender_female" name="gender"
                        value="{{\app\HumanPainChart::GENDER['FEMALE']}}"
                        {{$pain_chart->gender ==\app\HumanPainChart::GENDER['FEMALE']?'checked':''}}>
                    <label class="custom-control-label" for="gender_female">Female</label>
                </div>
            </div>

            <label for="">Select Type</label>
            <div class="form-group pl-4">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="type_front" name="type"
                        value="{{\app\HumanPainChart::TYPE['FRONT']}}"
                        {{$pain_chart->type ==\app\HumanPainChart::TYPE['FRONT']?'checked':''}}>
                    <label class="custom-control-label" for="type_front">Front</label>
                </div>

                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="type_back" name="type"
                        value="{{\app\HumanPainChart::TYPE['BACK']}}"
                        {{$pain_chart->type ==\app\HumanPainChart::TYPE['BACK']?'checked':''}}>
                    <label class="custom-control-label" for="type_back">Back</label>
                </div>
            </div>

            <div class="form-group">
                <label for="name">Enter Body Part</label>
                <input id="name" class="form-control" type="text" name="body_part" value="{{$pain_chart->body_part}}">
            </div>
            <div class="form-group">
                <label for="coordinates">Enter Coordinates</label>
                <textarea class="form-control" id="coordinates" name="coordinates" rows="3">
                        {{$pain_chart->coordinates}}
                </textarea>
            </div>
            <div align="center">
                <button type="submit" class="btn btn-primary ">Save</button>
            </div>
        </form>
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
