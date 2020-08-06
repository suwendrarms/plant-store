@extends('Admin.Layouts.app')
@section('header-content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Settlement of {{ $intakes->user->firstname }}
                        {{ $intakes->user->lastname }}</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-block ">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Start Here</a></li>
                            <li class="breadcrumb-item active" aria-current="page">View Settlement</li>
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
        <h1 class="h3 mb-0 text-gray-800">Settlement of {{ $intakes->user->firstname }}
{{ $intakes->user->lastname }}</h1>
</div>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin-dashboard-settlement') }}">Settlement</a></li>
        <li class="breadcrumb-item active" aria-current="page">View Settlement</li>
    </ol>
</nav> --}}
{{-- <div class="row"> --}}

{{-- <div class="col-md-12"> --}}
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <h6 class="text-center">Current Status: &nbsp;
                    @switch($intakes->status)
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
                    @endswitch
                    &nbsp;
                    <a class="btn btn-success btn-sm {{ $intakes->status==2?'d-none':'' }}"
                        onclick="approve('{{ route('admin-dashboard-settlement-approve',$intakes->id) }}')"
                        href="javascript:void(0)"><i class="fas fa-check-circle text-light"></i>&nbsp;Approve Now</a>
                    &nbsp;
                    <a class="btn btn-danger btn-sm {{ $intakes->status==2?'d-none':'' }}"
                        onclick="decline('{{ route('admin-dashboard-settlement-decline',$intakes->id) }}')"
                        href="javascript:void(0)"><i class="fas fa-ban text-light"></i>&nbsp;Decline Now</a>
                </h6>
            </div>
            <div class="col-lg-12">
                <h5 class="text-center">@if ( $intakes!=[]){{$intakes->legalType->slug}}@endif</h5>
                <hr>
            </div>
            <div class="over-y">
                @if ( $intakes!=[])
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q1.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Select Your State: (Where the incident occured)</h6>
                        </div>
                    </div>
                    <strong>

                        <label class="col-lg-12" for="">Answer: {{ $intakes!=[]?$intakes->acc_state:'-' }}</label>

                    </strong>
                </div>
                @switch($intakes->legalType->slug)
                @case("ROUND-UP")
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q2.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Did you use Round Up herbicide/pesticide/lawn care products at any
                                point after
                                1985?</h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12" for="">Answer: Yes</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q3.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Are you able to provide evidence of usage such as receipt OR picture of
                                container
                                from usage period OR signed affidavit from non family member witnessing usage?</h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12" for="">Answer:
                            {{ $intakes->rounds!=[]?$intakes->round->receipt==1?'Yes':'No':'-' }}</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q4.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Was your usage of RoundUp commercial or Residential</h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12" for="">Answer:
                            {{ $intakes->rounds!=[]? $intakes->round->usage==0?'Commercial':'':'' }}
                            {{ $intakes->rounds!=[]? $intakes->round->usage==1?'Residential':'':'' }}
                            {{ $intakes->rounds!=[]? $intakes->round->usage==2?'Both':'':'' }}</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q5.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">How many times would you estimate you used RoundUp</h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12" for="">Answer:
                            {{ $intakes->rounds!=[]? $intakes->round->times==0?'0-30':'':'' }}
                            {{ $intakes->rounds!=[]? $intakes->round->times==1?'30-100':'':'' }}
                            {{ $intakes->rounds!=[]? $intakes->round->times==2?'100+':'':'' }}</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q6.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Starting Month/Year</h6>
                        </div>
                    </div>
                    @php
                    if($intakes->rounds!=[]){
                    $month_num = $intakes->round->starting_month;
                    $month_name = date("F", mktime(0, 0, 0, $month_num, 10));
                    }
                    @endphp
                    <strong><label class="col-lg-12" for="">Answer:
                            {{ $month_name }}/{{ $intakes->rounds!=[]? $intakes->round->starting_year:'' }}</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q7.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Ending Month/Year</h6>
                        </div>
                    </div>
                    @php
                    if($intakes->rounds!=[]){
                    $month_num = $intakes->round->ending_month;
                    $month_name = date("F", mktime(0, 0, 0, $month_num, 10));
                    }
                    @endphp
                    <strong><label class="col-lg-12" for="">Answer:
                            {{ $month_name }}/{{ $intakes->rounds!=[]?$intakes->round->ending_year:'' }}</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q8.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Have you been diagnosed with any of the following</h6>
                        </div>
                    </div>
                    {{-- <div class="row"> --}}
                    @if ($intakes->rounds!=[])
                    @foreach ($intakes->rounds as $round)
                    @if ( $round->name==0)
                    <strong><label class="col-lg-12" for="">&nbsp;&nbsp;&nbsp;&nbsp;No</label></strong>
                    @else
                    <div class="col-lg-12"> <strong><label class="col-lg-12" for="">Answer:
                                @switch($round->name)
                                @case(1)Acute Lymphocytic Leukemia (ALL) @break
                                @case(2)Acute T-Cell Lymphoblastic Lymphoma @break
                                @case(3)Anaplastic Large T-Cell Lymphoma @break
                                @case(4)B-Cell Lymphoma @break
                                @case(5)Chronic Lymphocytic Leukemia @break
                                @case(6)Cutaneous C-Cell Lymphoma @break
                                @case(7)Follicular B-Cell Lymphoma @break
                                @case(8)Hairy Cell Leukemia @break
                                @case(9)High-Grade Mature B-Cell Lymphoma @break
                                @case(10)Large B-Cell Non-Hodgkins Lymphoma @break
                                @case(11)Mantle Cell Lymphoma @break
                                @case(12)Mediastinal B-Cell Lymphoma @break
                                @case(13)Mycosis Fungoides @break
                                @case(14)Non-Hodgkins Lymphoma @break
                                @case(15)T-Cell Lymphoma @break
                                @case(16)Thymic Lymphoma @break
                                @case(17)Essential Thrombocythemia Leukemia Lymphoma @break
                                @default
                                @endswitch
                            </label></strong></div><br>
                </div>
                {{-- <div class="col-md-12"> --}}
                <div class="sec-i">
                    <div class="col-md-12">
                        <h6>i.Diagnosis Date</h6>
                        <strong><label class="col-lg-12" for="">Answer: {{ $round->data }}</label></strong>
                    </div><br>
                    <div class="col-md-12">
                        <h6>ii.Treatment Date</h6>
                        <strong><label class="col-lg-12" for="">Answer: {{ $round->t_date }}</label></strong>
                    </div><br>
                    <div class="col-md-12">
                        <h6>iii.Type of Treatment</h6>
                        <strong><label v class="col-lg-12" for="">Answer:
                                {{ $round->treatment_type ? $round->treatment_type:'No Data' }}</label></strong>
                    </div><br>
                    <div class="col-md-12">
                        <h6>iv.Doctor</h6>
                        <strong><label class="col-lg-12" for="">Answer:
                                {{ $round->docter?$round->docter:'No Data' }}</label></strong>
                    </div><br>
                    <div class="col-md-12">
                        <h6>v.Hospital</h6>
                        <strong><label class="col-lg-12" for="">Answer:
                                {{ $round->hospital ?$round->hospital:'No Data'}}</label></strong>
                    </div><br>
                    <div class="col-md-12">
                        <h6>vi.Hospital Phone</h6>
                        <strong><label class="col-lg-12" for="">Answer:
                                {{ $round->hospital_phone ?$round->hospital_phone:'No Data'}}</label></strong>
                    </div><br>
                    <div class="col-md-12">
                        <h6>vii.Hospital Address</h6>
                        <strong><label class="col-lg-12" for="">Answer:
                                {{ $round->hospital_phone ?$round->hospital_address:'No Data'}}</label></strong>
                    </div><br>
                    <div class="col-md-12">
                        <h6>viii.Type of Proof</h6>
                        <strong><label class="col-lg-12" for="">Answer:
                                {{ $round->hospital_phone ?$round->proof:'No Data'}}</label></strong>
                    </div><br>
                    <div class="col-md-12">
                        <h6>ix.Case Notes</h6>
                        <strong><label class="col-lg-12" for="">Answer:
                                {{ $round->hospital_phone ?$round->case_note:'No Data'}}</label></strong>
                    </div><br>
                </div>
                {{-- <hr>
                                    </div> --}}
                @endif
                @endforeach
                @endif

                @break
                @case("AUTO ACCIDENT")

                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q2.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Was the accident your fault?</h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12" for="">Answer: No</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q3.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Were you physically injured? </h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12" for="">Answer: Yes</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q4.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Did the accident cause hospitalization or medical treatment? </h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12" for="">Answer: Yes</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q5.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Is an attorney helping you with your claim? </h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12" for="">Answer: No</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q6.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Did you have medical bills of greater than $5 000 ?</h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12" for="">Answer: Yes</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q7.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Estimated Medical Bills</h6>
                        </div>
                    </div>
                    <strong> $<label class="col-lg-12" for="">Answer:
                            {{ $intakes->legalAccident!=[]?$intakes->legalAccident->medical_bill:'-' }}
                        </label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q8.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">supply a case description</h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12" for="">Answer:
                            {{ $intakes->legalAccident!=[]?$intakes->legalAccident->description:'-' }}</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q9.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">State where the accident occurred</h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12" for="">Answer:
                            {{ $intakes->legalAccident!=[]?$intakes->legalAccident->accident_state:'-' }}</label></strong>
                </div>
                @break
                @case("PERSONAL INJURY")
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q2.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Type of Accident</h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12" for="">Answer:
                            {{ $intakes->legalInjury!=[]?$intakes->legalInjury->type_accident:'-' }}</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q3.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Was the accident your fault?</h6>
                        </div>
                    </div>
                    <strong><label for="">Answer: No</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q4.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Were you physically injured? </h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12" for="">Answer: Yes</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q5.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Did the accident cause hospitalization or medical treatment? </h6>
                        </div>
                    </div>
                    <strong><label for="">Answer: Yes</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q6.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Is an attorney helping you with your claim? </h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12" for="">Answer: No</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q7.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Did you have medical bills of greater than $5 000 ?</h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12" for="">Answer: Yes</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q8.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Estimated Medical Bills</h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12" for="">Answer:
                            {{ $intakes->legalInjury!=[]?$intakes->legalInjury->medical_bill:'-' }}
                            $</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q9.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">supply a case description</h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12" for="">Answer:
                            {{ $intakes->legalInjury!=[]?$intakes->legalInjury->description:'-' }}</label></strong>
                </div>
                @break
                @case("BANKRUPTCY")
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q2.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Do you have debt greater than $5,000?</h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12">Answer: Yes</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q3.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Do you currently have a source of income?</h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12">Answer: Yes</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q4.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">What is your current source of income?</h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12">Answer:
                            {{ $intakes->bankruptcy!=[]?$intakes->bankruptcy->income_name:'-' }}</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q5.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Have you filed for bankruptcy in the last 7 years?</h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12">Answer: No</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q6.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Are you already working with a bankruptcy attorney?</h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12">Answer: No</label></strong>
                </div>
                @break
                @case("WORKERS COMP")
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q2.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Were you injured on the job?</h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12">Answer: Yes</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q3.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Dis the injury cause you to miss 5 or more days of full-time work?</h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12">Answer: Yes</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q4.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Dis the injury cause you to miss 5 or more days of full-time work?</h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12">Answer: No</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q5.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Case description.(Please Describe the incident in your words in as much
                                details as posible)</h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12">Answer:
                            {{ $intakes->workersComp!=[]?$intakes->workersComp->description:'-' }}</label></strong>
                </div>

                @break
                @case("SOCIAL SECURITY DISABILITY")
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q2.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Are you already receiving disability benefits?</h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12" for="">Answer: No</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q3.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Is an attorney helping you with your claim?</h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12" for="">Answer: No</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q4.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Age( Must be between 49 and 64) </h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12" for="">Answer:
                            {{ $intakes->securityDisability!=[]?$intakes->securityDisability->sec_age:'-' }}</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q5.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Do you have a disability that stops you from working full-time? </h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12" for="">Answer: Yes</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q6.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Have you been treated for your disability within the past years? </h6>
                        </div>
                    </div>
                    <strong><label for="">Answer: Yes</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q7.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Out of the past 10 years, how many years have you worked?</h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12" for="">Answer:
                            {{ $intakes->securityDisability!=[]?$intakes->securityDisability->sec_work_time:'-' }}</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q8.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Case Descrption.(Please Describe the incident in your words in as much
                                details as posible)</h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12" for="">Answer:
                            {{ $intakes->securityDisability!=[]?$intakes->securityDisability->sec_description:'-' }}
                            $</label></strong>
                </div>

                @break
                @default
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q2.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Write down ANY questions or concerns here in Your own words - Also,
                                there is more
                                than enough space to write down exact details of the incident and any items You wish
                                to ask the
                                attorneys:</h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12" for="">Answer:
                            {{ $intakes->other!=[]?$intakes->other->exact_details:'-' }}</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q3.</h6>
                        </div>
                        <div class="div2">
                        <h6 class="mt-4">What month and year did the incident occur in??? Provide the closest
                            approximation if
                            you cannot recall the exact date.</h6>
                        </div>
                    </div>
                    <label class="col-lg-12">Month/Year</label><br>
                    @php
                    if($intakes->other!=[]){
                    $month_num = $intakes->other->exact_month;
                    $month_name = date("F", mktime(0, 0, 0, $month_num, 10));
                    }
                    @endphp
                    <strong><label class="col-lg-12" for="">Answer:
                            {{ $month_name}}/{{ $intakes->other!=[]?$intakes->other->exact_year:'-' }}</label></strong>
                    <div class="col-md-6"></div>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q4.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Please define specific financial impact this incident had on you.
                                Examples include
                                - additional bills, loss of income due to time off, loss of opportunity, secondary
                                impact such
                                as losing job or house.</h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12" for="">Answer:
                            {{ $intakes->other!=[]?$intakes->other->financial_impact:'-' }}</label></strong>
                </div>
                <div class="col-lg-12">
                    <div id="inline_quiz">
                        <div class="div-quiz mt-4">
                            <h6>Q5.</h6>
                        </div>
                        <div class="div2">
                            <h6 class="mt-4">Please define any specific emotional impact this incident had on you
                                that affected
                                your life adversly.</h6>
                        </div>
                    </div>
                    <strong><label class="col-lg-12" for="">Answer:
                            {{ $intakes->other!=[]?$intakes->other->emotional_impact:'-' }}</label></strong>
                </div>
                @break
                @endswitch
                @endif

                <div class="col-lg-12">
                    <h6 class="mt-4 text-center">Documents</h6>
                    <hr>
                    @if ($intakes!=[])
                    @if ($intakes->image!=[])
                    @foreach ($intakes->image as $item)
                    @php
                        $path_parts = pathinfo(asset('uploads/'.$item->image->name));
                        $temp = $path_parts['extension'];
                    @endphp
                    @if($temp=='pdf')
                    <a href="{{ asset('uploads/'.$item->image->name) }}" data-fancybox="images" data-caption=""><img
                        src="{{ asset('img/pdfthumbnail.png') }}" style="width: 100px; height:100px"
                        class="img-fluid img-edit"></a>
                    @else
                    <a href="{{ asset('uploads/'.$item->image->name) }}" data-fancybox="images" data-caption=""><img
                        src="{{ asset('uploads/'.$item->image->name) }}" style="width: 100px; height:100px"
                        class="img-fluid img-edit"></a>
                    @endif
                    @endforeach
                    @else
                    no image found
                    @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
{{-- </div> --}}

{{-- </div> --}}
@endsection
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css"
    integrity="sha256-P8k8w/LewmGk29Zwz89HahX3Wda5Bm8wu2XkCC0DL9s=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"
    integrity="sha256-Vzbj7sDDS/woiFS3uNKo8eIuni59rjyNGtXfstRzStA=" crossorigin="anonymous" />
<style>
    .header {
        background-image:linear-gradient(to bottom, rgba(249, 249, 249, 0.52), rgba(9, 50, 123, 0.73)),
        url('{{ asset("img/coverageinfo.jpg") }}');
        background-size: cover;
        background-position: center;
    }
    .img-edit{
        border: 2px solid;
    }

    .h6,
    h6 {
        font-size: 1rem;
        font-weight: 300;
    }

    strong {
        font-weight: 400;
        color: #0c4ef0;
        font-size: 0.9rem;
    }

    .over-y {
        height: 600px;
        overflow-y: scroll;
        width: 100%;
    }

    label {
        margin-left: 30px;
    }

    .sec-i {
        margin-left: 40px;
    }
    .fancybox-image {
        transform: scale(1);
        transition: transform 0.5s;
    }
    .fancybox-slide--complete .fancybox-image:hover {
        transform: scale(2);
    }

    .div-quiz{
        width:3%;
        height:auto;
    }

    .div2{
        width:97%;
        height:auto;
    }
    #inline_quiz{
        width:100%;
        height:auto;
        display:flex;
    }

</style>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"
    integrity="sha256-yt2kYMy0w8AbtF89WXb2P1rfjcP/HTHLT7097U8Y5b8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"
    integrity="sha256-yDarFEUo87Z0i7SaC6b70xGAKCghhWYAZ/3p+89o4lE=" crossorigin="anonymous"></script>
<script>
    $('[data-fancybox="images"]').fancybox({
        buttons: [
            'slideShow',
            'close'
        ],
        thumbs: {
            autoStart: true
        }
    });

</script>
@endsection
