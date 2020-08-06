Personal History of Cancer
<div id="accordion" class="">
    <div class="">
        <div id="collapseFour" class="" data-parent="#accordion">
            <label class="form-check-label ml-2 mt-2">
                <input class="form-check-input" type="checkbox" onclick="return false;"
                    {{ $user->Questionnaire!=[]?$user->Questionnaire->not_performed==1?'checked':'':'' }} name="genetic"
                    id="" value="checkedValue"> I
                have NOT performed a CGX genetic
                screening
                test before.
            </label>
            <label class="form-check-label ml-2 mt-2">
                <input class="form-check-input" onclick="return false;"
                    {{ $user->Questionnaire!=[]?$user->Questionnaire->heritage==1?'checked':'':'' }} type="checkbox"
                    name="genetic" id="" value="checkedValue">
                My family's heritage is Ashkenazi Jewish
                (an
                ethnic background that may have higher likelyhood of hereditary
                cancers).

            </label>
            <div class="col-lg-12 mt-4">
                <h5 class="text-center">Personal History of Cancer</h5>
                <hr>
            </div>
            <div class="col-lg-12">
                <div class="table-responsive py-4">
                    <table class="table align-items-center table-flush">
                        <thead>
                            <th>#</th>
                            <th>Type of Cancer</th>
                            <th>Age at Diagnosis</th>
                        </thead>
                        <tbody>
                            @if ($questionnaire!=[])
                            @foreach ($questionnairePersonals as $key=>$questionnairePersonal)
                            <tr>
                                <td>{{ $key+1}}</td>
                                <td>{{ $questionnairePersonal->CancerType->name }}</td>
                                <td>{{ $questionnairePersonal->age }}</td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td></td>
                                <td> <label for="" style="color: red" class="float-right"> No Data</label>
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-12 mt-4">
                <h5 class="text-center">Family History of Cancer</h5>
                <hr>
            </div>

            {{-- <div class="row">
                <div class="form-check form-check-inline">
                    <label class="form-check-label ml-2 mt-2">
                        <input class="form-check-input" type="checkbox" name="cancer_history_family" id=""
                            value="checkedValue"> NO
                        Personal history of cancer

                    </label>
                </div>
            </div> --}}
            <div class="col-lg-12">
                <div class="table-responsive py-4">
                    <table class="table align-items-center table-flush" id="dataTable">
                        <thead>
                            <th>#</th>
                            <th>Type of Cancer</th>
                            <th>Relationship
                                1st degree relatives</th>
                            <th>Age at Diagnosis</th>
                            <th>Relationship
                                (2nd & 3rd degree relatives)
                                Mother's side</th>
                            <th>Age at Diagnosis</th>
                            <th>Relationship
                                (2nd & 3rd degree relatives)
                                Father's side</th>
                            <th>Age at Diagnosis</th>
                        </thead>
                        <tbody>
                            @if ($questionnaire!=[])
                            @foreach ($questionnaireFamilies as $key=>$questionnaireFamily)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $questionnaireFamily->CancerType->name }}</td>
                                <td>{{ $questionnaireFamily->relationship ? $questionnaireFamily->relationship :'No data'}}
                                </td>
                                <td>{{ $questionnaireFamily->relationship_age ? $questionnaireFamily->relationship_age:'No data'}}
                                </td>
                                <td>{{ $questionnaireFamily->relationship_mother ? $questionnaireFamily->relationship_mother :'No data'}}
                                </td>
                                <td>{{ $questionnaireFamily->relationship_mother_age ? $questionnaireFamily->relationship_mother_age:'No data'}}
                                </td>
                                <td>{{ $questionnaireFamily->relationship_father ? $questionnaireFamily->relationship_father :'No data'}}
                                </td>
                                <td>{{ $questionnaireFamily->relationship_father_age ? $questionnaireFamily->relationship_father_age:'No data'}}
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td></td>
                                <td></td>
                                <td> <label for="" style="color: red" class="float-right"> No Data</label></td>
                            </tr>

                            @endif

                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
</div>
@section('js')
<script>
    $(document).ready(function () {
        $('#dataTable').DataTable();
    });

</script>

@endsection
