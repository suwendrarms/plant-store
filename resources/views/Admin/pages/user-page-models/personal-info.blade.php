<div id="accordion" class="">
    <div class="">

        <div class="" data-parent="#accordion">
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                    <a data-toggle="pill" class="nav-link active" href="#basic">Basic Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#address" role="tab"
                        aria-controls="profile" aria-selected="false">Address Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#emergency" role="tab"
                        aria-controls="profile" aria-selected="false">Emergency Contact</a> </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#password" role="tab"
                        aria-controls="profile" aria-selected="false">Password Information</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="basic" role="tabpanel" aria-labelledby="home-tab">
                    <form action="{{ route('update-user') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <div class="row">
                            <div class="col-lg-12">

                                <hr>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="hidden" name="user_info_id"
                                        value="{{ $userInfomation?$userInfomation->id:'' }}">
                                    <label for="userName">First Name</label>
                                    <input id="fName" class="form-control pro" name="firstname" type="text"
                                        class="required" value="{{ $user->firstname}}">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input id="inp_email" class="form-control pro" name="email" type="email"
                                        onkeyup="validateEmail();" class="required" value="{{ $user->email}}">
                                    <span class="invalid-feedback" id="email_msg">
                                        @if ($errors->has('email'))
                                        <strong>{{ $errors->first('email') }}</strong>
                                        @endif
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="userName">Mobile Phone Numberr</label>
                                    <input id="mobile" class="form-control pro" name="mobile" type="tel" min="10"
                                        maxlength="11" @if($userInfomation) value="{{ $userInfomation->mobile}}" @endif
                                        pattern="^\d{3}-\d{3}-\d{4}$" title="xxx-xxx-xxxx " required>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            Height
                                            <br>
                                            <label>Feet</label>
                                            <select name="height_feet" class="form-control pro-select" required>
                                                @for($i = 2; $i < 9; $i++) <option value="{{ $i }}"
                                                    {{ $userInfomation?$userInfomation->height_feet==$i?'selected':'':''}}>
                                                    0{{ $i }}</option>
                                                    @endfor
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <div class="form-group">
                                            <label>Inches</label>
                                            <select name="height_inches" class="form-control pro-select" required>
                                                @for($i = 0; $i < 12; $i++) <option value="{{ $i }}"
                                                    {{ $userInfomation?$userInfomation->height_inches==$i?'selected':'':''}}>
                                                    0{{ $i }}</option>
                                                    @endfor
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="userName">Last Name</label>
                                    <input id="userName" class="form-control pro" name="lastname" type="text"
                                        class="required" value="{{ $user->lastname}}">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4 bm">
                                            <label>Month of Birth</label>
                                            <select name="birth_month" class="form-control" id="BirthMonth"
                                                onchange="isValiddate();" required>
                                                <option></option>
                                                @foreach ($hc->months() as $month_id => $month_name)
                                                <option
                                                    {{ $userInfomation?$userInfomation->birth_month==$month_id?'selected':'':''}}
                                                    value="{{ $month_id }}">{{ $month_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Day of Birth</label>
                                            <select name="birth_day" class="form-control pro-select" required>
                                                <option></option>
                                                @for($i = 1; $i < 32; $i++) <option
                                                    {{ $userInfomation?$userInfomation->birth_day==$i?'selected':'':''}}
                                                    class="{{$i}}" value="{{ $i }}">{{ $i }}
                                                    </option>
                                                    @endfor
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Year of Birth</label>
                                            <select name="birth_year" class="form-control pro-select" required>
                                                <option></option>
                                                @for($i = \Carbon\Carbon::now()->year-100; $i <=\Carbon\Carbon::now()->
                                                    year; $i++)
                                                    <option value="{{$i}}"
                                                        {{ $userInfomation?$userInfomation->birth_year==$i?'selected':'':''}}>
                                                        {{$i}}</option>
                                                    @endfor
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Weight</label>
                                            <input id="weight" class="form-control pro" name="weight" type="number"
                                                min="0" class="required" @if ($userInfomation)
                                                value="{{ $userInfomation->weight}}" @endif
                                                onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label>Kilograms or Pounds </label>
                                            <select name="weight_type" class="form-control pro-selec
                                            t" required>
                                                <option value="1"
                                                    {{ $userInfomation?$userInfomation->weight_type==1?'selected':'':''}}>
                                                    kgs</option>
                                                <option value="2"
                                                    {{ $userInfomation?$userInfomation->weight_type==2?'selected':'':''}}>
                                                    lbs</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <br>
                                        <div class="form-group">
                                            <label>Ethnicity</label>
                                            <select name="ethnicity" id="select-other" class="form-control pro-select"
                                                onchange="yesnoCheck(this);" required>

                                                @foreach (\app\UserInfomation::ETHNICITIES as
                                                $key=> $ethnicity)
                                                <option
                                                    {{ $userInfomation&&$userInfomation->ethnicity==$key?'selected':'' }}
                                                    value="{{ $key }}">
                                                    {{ $ethnicity }}
                                                </option>
                                                @endforeach
                                            </select> <br>
                                            <div id="ifYes" style="display: none;">
                                                <label for="car">Enter Other Ethnicity</label>
                                                <input type="text" id="car" class="form-control pro"
                                                    @if($user->userInfomation!=[])
                                                @if($ethinicity_other && $ethinicity_other->ethnicity)
                                                value="{{ $ethinicity_other->ethnicity }}"
                                                @endif
                                                @endif
                                                name="ethnicity_other" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 mb-6 mb-sm-0">
                                <input class="btn btn-primary " type="submit" value="Submit" />
                            </div>

                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="address" role="tabpanel" aria-labelledby="profile-tab">
                    <form action="{{ route('update-user-address') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <div class="row">
                            <div class="col-lg-12">

                                <hr>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input id="street" class="form-control pro" name="street" type="text"
                                        class="required" @if($userAddresse) value="{{ $userAddresse->street}}" @endif>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Country</label>
                                    <select class="form-control select2" name="country" id="country"
                                        onchange="getStatus();">
                                        @foreach($country_list as $sn => $country)
                                        <option @if ($userAddresse) {{ $userAddresse->country == $sn ?'selected':''}}
                                            @else {{ $sn == "US"?'selected':''}} @endif value="{{ $sn }}">{{$country}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>State</label>

                                            <select required
                                                class="form-control {{ $errors->has('state') ? ' is-invalid' : '' }}"
                                                id="state" name="state" placeholder="Enter State Here" class="required">

                                                <option></option>
                                                @if($user->UserAddress!=[])
                                                @foreach ($states_list as $sh => $state)
                                                <option {{$userAddresse?$userAddresse->state==$sh?'selected':'':'' }}
                                                    value="{{ $sh }}">{{ $state }}</option>
                                                @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>City</label>
                                            <input id="city" class="form-control pro" name="city" type="text"
                                                class="required" @if($userAddresse) value="{{ $userAddresse->city}}"
                                                @endif>
                                        </div>
                                    </div>
                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <label>Zip</label>
                                            <input type="zip" class="form-control pro" name="zip" type="number"
                                                class="required" @if($userAddresse) value="{{ $userAddresse->zip}}"
                                                @endif>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input class="btn btn-primary " type="submit" value="Submit" />
                    </form>
                </div>
                <div class="tab-pane" id="emergency" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                        <div class="col-lg-12">
                            <hr>
                        </div>

                        <div class="col-lg-6">
                            <h6 class="mt-4">Emergency Contact Name</h6>
                            <strong><label
                                    for="">{{ $user->UserEmergency!=[]?$user->UserEmergency->emergency_name:'-' }}</label></strong>
                            <h6 class="mt-4">Emergency Contact Number</h6>
                            <strong><label
                                    for="">{{ $user->UserEmergency!=[]?$user->UserEmergency->emergency_mobile:'-' }}</label></strong>


                        </div>
                        <div class="col-lg-6">
                            <h6 class="mt-4">Relationship</h6>
                            <strong><label for="">
                                    @foreach (\app\UserEmergencyContact::TYPES as $key=> $type)
                                    {{ $user->UserEmergency!=[]?$user->UserEmergency->relationship==$key?$type:'':'-' }}
                                    @endforeach
                                </label></strong>
                            @if($user->UserEmergency!=[])
                            @if($user->UserEmergency->relationship==0)

                            <h6 class="mt-4">Other relationship</h6>
                            <strong><label>
                                    {{ $user->UserEmergency->other_relation}}
                                </label></strong>

                            @endif
                            @endif
                        </div>
                    </div>

                </div>
                <div class="tab-pane" id="password" role="tabpanel" aria-labelledby="profile-tab">
                    <hr>
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{ route('update-user-password') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 ml-auto mr-auto">
                                        <h4 class="card-title text-center"><strong>Change Password</strong></h4>
                                        <hr>
                                        <label for="">Enter Current Password</label>
                                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                                        <input type="password" name="curr_password" id="curr_password"
                                            class="curr_password form-control">
                                        <small id="curr_pass_msg"></small>
                                        <br>



                                        <label for="">New Password
                                        </label>
                                        <input type="password" name="password" id="new_pass" class="form-control">
                                        <label for="">Confirm Password</label>
                                        <input type="password" onkeyup="validatepasswordconf()" name="confirm_password"
                                            id="confirm_pass" class="form-control">
                                        <small id="conf_pass_msg"></small>
                                        <div class="col-lg-12 text-center mt-4 pt-4">
                                            <input class="btn btn-primary " disabled type="submit" id="sumbit-btn"
                                                type="submit" value="Update" onmouseover="validatepasswordconf()" />
                                        </div>
                                        </span>
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                    <div class="col-sm-12 mb-6 mb-sm-0">
                                        <input class="btn btn-primary " disabled type="submit" id="sumbit-btn"
                                            type="submit" value="Update" onmouseover="validatepasswordconf()" />
                                    </div>
                                </div> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('js')
<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js" type="text/javascript"></script>
<script>
    $('#passGen').on('click', function () {
        var pass = Math.random().toString(36).slice(-8);
        $('#new_pass').attr('type', 'text');
        $('#confirm_pass').attr('type', 'text');
        $('#new_pass').val(pass);
        $('#confirm_pass').val(pass);
    });

    $(document).ready(function () {

        $('.curr_password').on('keyup', function () {
            $.ajax({
                url: "{{ route('admin-check-password') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                data: {
                    password: $(this).val()
                },
                success: function (response) {
                    if (response == 'true') {
                        $('#curr_pass_msg').addClass('text-success').removeClass(
                            'text-danger').html('Password is' +
                            ' correct');

                        $('#new_pass_section').removeClass('d-none');
                    } else {
                        $('#curr_pass_msg').addClass('text-danger').removeClass(
                            'text-success').html('Password is' +
                            ' incorrect');
                        $('#new_pass_section').addClass('d-none');
                    }
                }
            });
        })

        getStatus('{{ $userAddresse?$userAddresse->state:"" }}');
        $('#dob').datepicker({
            autoHide: true,
            endDate: "today",
        });
        $('select').select2({
            theme: 'bootstrap',
            placeholder: 'Please Select One'
        });
        $('#mobile').mask('000-000-0000');
        checkRelation();
        var ethnicity_value = $('#select-other').val();
        if (ethnicity_value == 4)
            document.getElementById("ifYes").style.display = "block";
        else
            document.getElementById("ifYes").style.display = "none";
    });

    function yesnoCheck(that) {
        if (that.value == 4) {
            document.getElementById("ifYes").style.display = "block";
        } else {
            document.getElementById("ifYes").style.display = "none";
        }
    }

    function isValiddate() {

        // var month = $('#month').val();
        var day = 31;
        var monthArray = ['4', '6', '9', '11'];
        var monthArrayTwo = ['1', '3', ' 5', '7', '8', '10', '12']

        // var optionDrop = document.getElementsById("31a");
        i = $('#BirthMonth').val();

        if (monthArrayTwo.includes(i)) {
            // var month = document.getElementById("30a");
            // var month = document.getElementById("31a");
            // month.remove(month.selectedIndex);

        } else if (monthArray.includes(i)) {
            $('.31').remove();
        } else {
            $('.30').remove();
            $('.31').remove();

        }

    }

    function validatepasswordconf() {
        if ($('#new_pass').val() == $('#confirm_pass').val()) {
            $('#conf_pass_msg').addClass('text-success').removeClass('text-danger').html(
                '<i class="fa fa-check"></i>');
            $('#sumbit-btn').removeAttr('disabled');
        } else {
            $('#conf_pass_msg').addClass('text-danger').removeClass('text-success').html(
                'The password and confirmation' +
                ' password do not match');
            $('#sumbit-btn').attr('disabled', true);
        }
    }

    function getStatus(def = "") {
        var country = $('#country').val();
        $.ajax({
            url: "{{ route('admin-get-status') }}?country=" + country,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'GET',
            success: function (response) {
                var html = "<option></option>";
                $.each(response, function (key, state) {
                    html += "<option " + (def == key ? 'selected' : '') + " value='" + key + "'>" +
                        state + "</option>";
                });

                $('#state').html(html);
            }
        });
    }

    function checkRelation() {
        if ($('#relationship').val() == 0) {
            $("#other_relation").fadeIn();
        } else {
            $("#other_relation").fadeOut();
        }
    }

    function validateEmail() {
        $.ajax({
            url: "{{ route('validate-email') }}?email=" + $('#inp_email').val(),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'GET',
            success: function (response) {
                if (response['status'] == 1) {
                    $('#inp_email').addClass("is-valid").removeClass("is-invalid");
                    email_valid = true;
                    $('#valid_email').val(1);
                    $('#submit-btn').removeClass('disabled');

                } else {
                    $('#inp_email').addClass("is-invalid").removeClass("is-valid");
                    $('#email_msg').html(
                        "<strong class='text-danger'>" +
                        response['msg'] +
                        " </strong> ");
                    email_valid = false;
                    $('#valid_email').val(0);
                    $('#submit-btn').addClass('disabled', true);
                }
            }
        });
    }

</script>
@include('Member.pages.Health.includes.js')
@endsection
