<div id="accordion" class="">
    <div class="">

        <div class="" data-parent="#accordion">
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                    <a data-toggle="pill" class="nav-link active" href="#basic">Basic Information</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#password" role="tab"
                        aria-controls="profile" aria-selected="false">Password Information</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="basic" role="tabpanel" aria-labelledby="home-tab">

                    <form action="{{ route('update-physician') }}" method="POST">
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
                                        onkeyup="validateEmail();" class="required" value="{{ $user->email}}" readonly>
                                    <span class="invalid-feedback" id="email_msg">
                                        @if ($errors->has('email'))
                                        <strong>{{ $errors->first('email') }}</strong>
                                        @endif
                                    </span>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="user_info_id"
                                        value="{{ $userInfomation?$userInfomation->id:'' }}">
                                    <label for="userName">Username</label>
                                    <input id="UName" class="form-control pro" name="user_name" type="text"
                                        class="required" value="{{ $user->user_name}}">
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="userName">Last Name</label>
                                    <input id="userName" class="form-control pro" name="lastname" type="text"
                                        class="required" value="{{ $user->lastname}}">
                                </div>
                                <div class="form-group">
                                    <label for="userName">Mobile Phone Number</label>
                                    <input id="mobile" class="form-control pro" name="phone" type="tel" min="10"
                                        maxlength="11" value="{{ $user->phone}}" pattern="^\d{3}-\d{3}-\d{4}$"
                                        title="xxx-xxx-xxxx " required>
                                </div>
                                <div class="form-group">
                                    <label for="userName">PCP code</label>
                                    <input id="pcpCode" class="form-control pro" name="pcp"
                                     value="{{ $user->gotDoctorInformation->doctor_id}}" readonly>

                                </div>
                            </div>
                            <div class="col-sm-12 mb-6 mb-sm-0 text-center">
                                <input class="btn btn-primary " type="submit" id="submitBasic" value="Submit" />
                            </div>

                        </div>
                    </form>
                </div>

                <div class="tab-pane" id="password" role="tabpanel" aria-labelledby="profile-tab">
                    <hr>
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{ route('update-user-password') }}" method="POST">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <div class="form-group ">
                                    <div class="col-sm-12 mb-6 mb-sm-0">
                                        <label for="">Password<a href="javascript:void(0)"
                                                id="passGen">Generate</a></label>
                                        <input type="password" value="{{ old('password') }}"
                                            class="form-control @error('password') is-invalid @enderror form-control-user"
                                            id="new_password" placeholder="Password" name="password" required>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <div class="col-sm-12 mb-6 mb-sm-0">
                                        <label for="">Confirm Password</label>
                                        <input type="password" value="{{ old('new_password') }}"
                                            class="form-control @error('confirm_password') is-invalid @enderror form-control-user"
                                            id="confirm_password" placeholder="Confirm Password" name="confirm_password"
                                            required>
                                        @error('confirm_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 mb-6 mb-sm-0 text-center">
                                        <input class="btn btn-primary" type="submit" value="Update" />
                                    </div>
                                </div>
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
    $(document).ready(function () {
        getPhysicion();
        $('#mobile').mask('000-000-0000');
    });
    $('#passGen').on('click', function () {
        var pass = Math.random().toString(36).slice(-8);
        $('#new_password').attr('type', 'text');
        $('#confirm_password').attr('type', 'text');
        $('#new_password').val(pass);
        $('#confirm_password').val(pass);
    })


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
                if(response.status==1){
                    if(response.data.email=='{{$user->email}}'){
                        $('.errorMessg').fadeOut();
                        $('#submitBasic').attr('disabled',false);
                    }else{
                        $('.errorMessg').fadeIn();
                        $('#submitBasic').attr('disabled',true);
                    }
                }else{
                    $('.errorMessg').fadeOut();
                    $('#submitBasic').attr('disabled',false);
                }
            }
        });
    }
</script>
@include('Member.pages.Health.includes.js')
@endsection
