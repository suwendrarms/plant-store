<div id="accordion" class="">
    <div class="">

        <div id="collapseTwo" class="" data-parent="#accordion">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="text-center">Primary Insurance Information</h5>
                    <hr>
                </div>
                {{--  {{ dd($coverageFirst) }} --}}
                <div class="col-lg-6">
                    <h6 class="mt-2">Insurance Type</h6>
                    <strong><label
                            for="">{{ $coverageFirst!=[]?$coverageFirst->InsuranceType['name']:'-' }}</label></strong>
                    <h6 class="mt-2">Insurance Member ID</h6>
                    <strong><label for="">{{ $coverageFirst!=[]?$coverageFirst->member_id:'-' }}</label></strong>
                    <h6 class="mt-2">Relationship to Insured</h6>
                    <strong>
                        @if($coverageFirst!=[])
                        <label>{{ $coverageFirst->relationship==1?'Self':'' }}</label>
                        <label>{{ $coverageFirst->relationship==2?'Defendent':'' }}</label>
                        <label>{{ $coverageFirst->relationship==3?'Co-Insured':'' }}</label>
                        @else
                        '-'
                        @endif
                    </strong>
                    <h6 class="mt-2">First Name of Insured</h6>
                    <strong><label
                            for="">{{ $coverageFirst!=[]?$coverageFirst->insurance_firstname:'-' }}</label></strong>
                    <div class="row">
                        <div class="col-md-4">
                            <h6 class="mt-2">Month of Birth</h6>
                            <strong><label
                                    for="">{{ $coverageFirst!=[]?$coverageFirst->birth_month:'-' }}</label></strong>
                        </div>
                        <div class="col-md-3">
                            <h6 class="mt-2">Day of Birth</h6>
                            <strong><label
                                    for="">{{ $coverageFirst!=[]?$coverageFirst->birth_day:'-' }}</label></strong>
                        </div>
                        <div class="col-md-3">
                            <h6 class="mt-2">Year of Birth</h6>
                            <strong><label
                                    for="">{{ $coverageFirst!=[]?$coverageFirst->birth_year:'-' }}</label></strong>
                        </div>
                    </div>
                    <h6 class="mt-2">Patient RX PCN</h6>
                    <strong><label for="">{{ $coverageFirst!=[]?$coverageFirst->patient_rx_pcn:'-' }}</label></strong>
                </div>
                <div class="col-lg-6">
                    <h6 class="mt-2">Insurance or Coverage Provider</h6>
                    <strong><label
                            for="">{{ $coverageFirst!=[]?$coverageFirst->InsuranceProvider['name']:'-' }}</label></strong>
                    <h6 class="mt-2">Insurance Group ID</h6>
                    <strong><label for="">{{ $coverageFirst!=[]?$coverageFirst->group_id:'-' }}</label></strong>
                    <h6 class="mt-2">Gender</h6>
                    <strong><label
                            for="">{{ $coverageFirst!=[]?$coverageFirst->gender==1?'Male':'Female':'' }}</label></strong>
                    <h6 class="mt-2">Last Name of Insured</h6>
                    <strong><label
                            for="">{{ $coverageFirst!=[]?$coverageFirst->insurance_lastname:'-' }}</label></strong>
                    <h6 class="mt-2">Patient RX BIN</h6>
                    <strong><label for="">{{ $coverageFirst!=[]?$coverageFirst->patient_rx_bin:'-' }}</label></strong>

                </div>
            </div>
            @if($coverageSecond!=[] && $coverageSecond->count==2)
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="text-center">Secondary Insurance Information</h5>
                    <hr>
                </div>
                <div class="col-lg-6">
                    <h6 class="mt-2">Insurance Type</h6>
                    <strong><label
                            for="">{{ $coverageSecond!=[]?$coverageSecond->InsuranceType['name']:'-' }}</label></strong>
                    <h6 class="mt-2">Insurance Member ID</h6>
                    <strong><label for="">{{ $coverageSecond!=[]?$coverageSecond->member_id:'-' }}</label></strong>
                    <h6 class="mt-2">Relationship to Insured</h6>
                    <strong>
                        @if($coverageSecond!=[])
                        <label>{{ $coverageSecond->relationship==1?'Self':'' }}</label>
                        <label>{{ $coverageSecond->relationship==2?'Defendent':'' }}</label>
                        <label>{{ $coverageSecond->relationship==3?'Co-Insured':'' }}</label>
                        @else
                        -
                        @endif
                    </strong>
                    <h6 class="mt-2">First Name of Insured</h6>
                    <strong><label
                            for="">{{ $coverageFirst!=[]?$coverageFirst->insurance_firstname:'-' }}</label></strong>
                    <div class="row">
                        <div class="col-md-4">
                            <h6 class="mt-2">Month of Birth</h6>
                            <strong><label
                                    for="">{{ $coverageSecond!=[]?$coverageSecond->birth_month:'-' }}</label></strong>
                        </div>
                        <div class="col-md-3">
                            <h6 class="mt-2">Day of Birth</h6>
                            <strong><label
                                    for="">{{ $coverageSecond!=[]?$coverageSecond->birth_day:'-' }}</label></strong>
                        </div>
                        <div class="col-md-3">
                            <h6 class="mt-2">Year of Birth</h6>
                            <strong><label
                                    for="">{{ $coverageSecond!=[]?$coverageSecond->birth_year:'-' }}</label></strong>
                        </div>
                    </div>
                    <h6 class="mt-2">Patient RX PCN</h6>
                    <strong><label for="">{{ $coverageSecond!=[]?$coverageSecond->patient_rx_pcn:'-' }}</label></strong>
                </div>
                <div class="col-lg-6">
                    <h6 class="mt-2">Insurance or Coverage Provider</h6>
                    <strong><label
                            for="">{{ $coverageSecond!=[]?$coverageSecond->InsuranceProvider['name']:'-' }}</label></strong>
                    <h6 class="mt-2">Insurance Group ID</h6>
                    <strong><label for="">{{ $coverageSecond!=[]?$coverageSecond->group_id:'-' }}</label></strong>
                    <h6 class="mt-2">Gender</h6>
                    <strong><label
                            for="">{{ $coverageSecond!=[]?$coverageSecond->gender==1?'Male':'Female':'' }}</label></strong>
                    <h6 class="mt-2">Last Name of Insured</h6>
                    <strong><label
                            for="">{{ $coverageSecond!=[]?$coverageSecond->insurance_lastname:'-' }}</label></strong>
                    <h6 class="mt-2">Patient RX BIN</h6>
                    <strong><label for="">{{ $coverageSecond!=[]?$coverageSecond->patient_rx_bin:'-' }}</label></strong>

                </div>
            </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="text-center">Primary Care Physician Information</h5>
                    <hr>
                </div>

                <div class="col-lg-12">
                    <form action="{{ route('admin-update-pcp') }}" method="POST">
                    <div class="form-group">
                        <label class="d-inline-block" for="pcp_yes">have a primary care
                            physician?</label>
                        <label class="custom-toggle">
                            <input type="hidden" name="pcp" value="1">
                            <input type="checkbox" name="pcp" id="pcp_yes" value="0"
                                {{ $user->UserPrimaryCareInformation!=[]?$user->UserPrimaryCareInformation->pcp==0 ? 'checked':'':'' }} onchange="checkPcp()">
                            <span class="custom-toggle-slider rounded-circle" data-label-off="No"
                                data-label-on="Yes"></span>
                        </label>
                    </div>
                    <div class="row">
                        <div class="col-md-6 recDetailsName d-none">
                            <label for="">Physician Name</label>
                            <input class="form-control  form-control-alternative coverage-pro"
                                name="physician_name" type="text" value="{{ $user->UserPrimaryCareInformation!=[]?$user->UserPrimaryCareInformation->physician_name:'' }}">
                        </div>
                        <div class="col-md-6 recDetailsName d-none">
                            <label for="">Address</label>
                            <input class="form-control  form-control-alternative coverage-pro"
                                name="physician_location" type="text"
                                value="{{  $user->UserPrimaryCareInformation!=[]?$user->UserPrimaryCareInformation->physician_location:'' }}">
                        </div>
                        <div class="col-md-6 recDetailsName d-none mt-4">
                            <label for="mobile">Phone Number</label>
                            <input id="pcp_mobile" class="form-control  form-control-alternative pro-select"
                                name="physician_mobile" type="tel"
                                value="{{  $user->UserPrimaryCareInformation!=[]?$user->UserPrimaryCareInformation->physician_mobile:''}}" pattern="^\d{3}-\d{3}-\d{4}$"
                                title="Phone Number (format: xxx-xxx-xxxx) ">
                        </div>
                        <div class="col-md-6 recDetailsName d-none mt-4">
                            <h6 class="mt-2">PCP Code</h6>
                                        <input class="form-control  form-control-alternative coverage-pro"
                                            name="pcp_code" type="number" id="pcpCode" onkeyup="getPhysicion()"
                                            value="{{$user->UserPrimaryCareInformation!=[]?$user->UserPrimaryCareInformation->pcp_code:''}}">
                                        <input name="parent_id" id="parentId" type="hidden" value="">
                                        <input name="user_id" type="hidden" value="{{$user->id}}">
                                        <label class="text-red" id="errorMessage" style="font-size: 15px">Invalid
                                            code</label>
                                        <div class="physicionData">

                                        </div>

                        </div>
                        <div class="col-md-6 mt-5">
                            <button type="submit" id="pcpSubmit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                    </form>
                </div>
                {{-- <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="mt-2">Do you have a primary care physician?</h6>
                            @if( $user->UserPrimaryCareInformation!=[])
                            <strong><label
                                    for="">{{ $user->UserPrimaryCareInformation->pcp==0?'Yes':'No' }}</label></strong>
                            @else
                            <strong><label for="">-</label></strong>
                            @endif
                        </div>

                    </div>
                </div>
                <div class="col-md-12">
                    @if( $user->UserPrimaryCareInformation!=[])
                    @if( $user->UserPrimaryCareInformation->pcp==0)
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="mt-2">Name</h6>
                            <strong><label
                                    for="">{{ $user->UserPrimaryCareInformation->physician_name }}</label></strong>
                        </div>
                        <div class="col-md-6">
                            <h6 class="mt-2">Location</h6>
                            <strong><label
                                    for="">{{ $user->UserPrimaryCareInformation->physician_location }}</label></strong>
                        </div>

                        <div class="col-md-12">
                            <form action="{{ route('admin-update-pcp') }}" method="POST">
                                <div class="row">

                                    <div class="col-md-6 mt-1">
                                        <h6 class="mt-2">PCP Code</h6>
                                        <input class="form-control  form-control-alternative coverage-pro"
                                            name="pcp_code" type="number" id="pcpCode" onkeyup="getPhysicion()"
                                            value="{{$user->UserPrimaryCareInformation!=[]?$user->UserPrimaryCareInformation->pcp_code:''}}">
                                        <input name="parent_id" id="parentId" type="hidden" value="">
                                        <input name="user_id" type="hidden" value="{{$user->id}}">
                                        <label class="text-red" id="errorMessage" style="font-size: 15px">Invalid
                                            code</label>
                                        <div class="physicionData">

                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-5">
                                        <button type="submit" id="pcpSubmit" class="btn btn-success">Update</button>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                    @else
                    <h6 class="mt-2">Would you like to CFN to make a recommendation based on your symptoms & profile
                    </h6>
                    <strong><label
                            for="">{{ $user->UserPrimaryCareInformation->cfn_recommendation==0?'Yes':'No' }}</label></strong>
                    @endif
                    @endif
                </div> --}}
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.physicionData').hide();
        getPhysicion();
        $('#errorMessage').fadeOut();
        checkPcp();
        $('#pcp_mobile').mask('000-000-0000');

    });
    //get parent for code
    function getPhysicion() {
        var code = $('#pcpCode').val();
        $.ajax({
            url: "{{ route('admin-get-doctor') }}?code=" + code,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'GET',
            success: function (response) {
                showPhysicionDetails(response);
            }
        });
    }

    //show physicion details
    function showPhysicionDetails(data) {
        if (data.status == 1) {
            $('#errorMessage').fadeOut();
            var html = '<label class="text-green" style="font-size: 10px">Name:' +
                data.data.firstname + ' ' + data.data.lastname + '</label>'

            $('.physicionData').html(html);
            $('#parentId').val(data.data.id);
            $('.physicionData').fadeIn();
            $('#pcpSubmit').attr('disabled', false);

        } else {
            $('.physicionData').fadeOut();
            $('#parentId').val(null);
            $('#pcpSubmit').attr('disabled', true);
            $('#errorMessage').fadeIn();
        }

        if ($('#pcpCode').val() == '') {
            $('#errorMessage').fadeOut();
            $('.physicionData').hide();
        }

    }

    function checkPcp() {
        if ($('#pcp_yes').is(":checked")) {
            $('.recDetailsName').removeClass("d-none");
            $(".recDetails").addClass('d-none');
            $("#pcp_mobile").attr('required', true);
            $("#pcp_mobile").attr("maxLength", 12);
            $("#pcp_mobile").attr("minLength", 12);
        } else {
            $('.recDetails').removeClass("d-none");
            $(".recDetailsName").addClass('d-none');
            $("#pcp_mobile").attr('required', false);
            $("#pcp_mobile").attr("maxLength", '');
            $("#pcp_mobile").attr("minLength", '');
        }
    }

</script>
