<div id="accordion" class="">
    <div class="">
        <div id="collapseTwo" class="" data-parent="#accordion">
            <form class="tab-wizard wizard-circle wizard clearfix"
            action="{{ route('update-physician-address') }}" method="POST">
            @csrf
            <div class="row">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="card-title text-center"><strong>Address
                                Information (Primary)</strong>
                        </h4>
                        <hr>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Address</label>
                            <textarea class="form-control  form-control-alternative required"
                                name="address" rows="5" id="inp_address1" aria-describedby="helpId"
                                placeholder="Your Addrress Here">{{ $user->getDocPrimary($user->id,1)->address }}</textarea>
                            <input type="hidden" name="id"
                                value="{{ $user->getDocPrimary($user->id,1)->id }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="inp_city1">City</label>
                            <input type="text"
                                class="form-control  form-control-alternative required" name="city"
                                id="inp_city1" aria-describedby="helpId" placeholder="Your City"
                                value="{{ $user->getDocPrimary($user->id,1)->city }}">
                        </div>
                        <div class="form-group">
                            <label for="inp_state1">State</label>
                            <select id="inp_state1"
                                class="form-control  form-control-alternative required"
                                name="state">
                                <option></option>
                                @foreach ($states as $short => $state)
                                <option value="{{ $short }}"
                                    {{ $user->getDocPrimary($user->id,1)->state==$short?'selected':'' }}>
                                    {{ $state }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="inp_zip1">Zip Code</label>
                            <input type="text"
                                class="form-control  form-control-alternative required" name="zip"
                                id="inp_zip1" aria-describedby="helpId" placeholder="Your Zip"
                                value="{{ $user->getDocPrimary($user->id,1)->zip }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="inp_location_type2">Location Type</label>
                            <select class="form-control  form-control-alternative required"
                                name="location_type" id="inp_location_type2">
                                <option></option>

                                <option value="1"
                                    {{ $user->getDocPrimary($user->id,1)->location_type==1?'selected':'' }}>
                                    Single Doctor Office</option>
                                <option value="2"
                                    {{ $user->getDocPrimary($user->id,1)->location_type==2?'selected':'' }}>
                                    Multi-Doctor Clinic</option>
                                <option value="3"
                                    {{ $user->getDocPrimary($user->id,1)->location_type==3?'selected':'' }}>
                                    Primary Care Clinic</option>
                                <option value="4"
                                    {{ $user->getDocPrimary($user->id,1)->location_type==4?'selected':'' }}>
                                    Specialty Care Clinic</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <h4 class="card-title text-center"><strong>Address
                            Information (Secondary)</strong>
                    </h4>
                    <hr>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="d-inline-block" for="sec_address_yes">
                            Have Secondary Address
                        </label>
                        <label class="custom-toggle">
                            <input type="hidden" name="sec_inf" value="0">
                            <input type="checkbox" name="sec_inf" id="sec_address_yes" value="1"
                                onclick="secondaryHave('sec_address_yes','secondaryAddres')"
                                {{ $user->getDocPrimary($user->id,2)!='' ?'checked':''}}>
                            <span class="custom-toggle-slider rounded-circle" data-label-off="No"
                                data-label-on="Yes"></span>
                        </label>
                    </div>
                </div>
                <div class="row" @if ($user->getDocPrimary($user->id,2)=='')
                    style="display:none" @endif id="secondaryAddres">

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Address</label>
                            <textarea class="form-control  form-control-alternative "
                                name="sec_address" rows="5" id="inp_address1"
                                aria-describedby="helpId" placeholder="Your Addrress Here">
                                {{ $user->getDocPrimary($user->id,2)?$user->getDocPrimary($user->id,2)->address:'' }}
                            </textarea>
                            <input type="hidden" name="sec_id"
                                value="{{ $user->getDocPrimary($user->id,2)?$user->getDocPrimary($user->id,2)->id:'' }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="inp_city1">City</label>
                            <input type="text" class="form-control  form-control-alternative "
                                name="sec_city" id="inp_city1" aria-describedby="helpId"
                                placeholder="Your City"
                                value="{{ $user->getDocPrimary($user->id,2)?$user->getDocPrimary($user->id,2)->city:'' }}">
                        </div>
                        <div class="form-group">
                            <label for="inp_state2">State</label>
                            <select id="inp_state2" class="form-control  form-control-alternative "
                                name="sec_state">
                                <option></option>
                                @foreach ($states as $short => $state)
                                <option value="{{ $short }}"
                                    {{ $user->getDocPrimary($user->id,2)?$user->getDocPrimary($user->id,2)->state==$short?'selected':'':'' }}>
                                    {{ $state }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="inp_zip1">Zip Code</label>
                            <input type="text" class="form-control  form-control-alternative "
                                name="sec_zip" id="inp_zip1" aria-describedby="helpId"
                                placeholder="Your Zip"
                                value="{{ $user->getDocPrimary($user->id,2)?$user->getDocPrimary($user->id,2)->zip:'' }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="inp_location_type1">Location Type</label>
                            <select class="form-control  form-control-alternative "
                                name="sec_location_type" id="inp_location_type1">
                                <option></option>
                                <option value="1"
                                    {{ $user->getDocPrimary($user->id,2)?$user->getDocPrimary($user->id,2)->location_type==1?'selected':'':'' }}>
                                    Single Doctor Office</option>
                                <option value="2"
                                    {{ $user->getDocPrimary($user->id,2)?$user->getDocPrimary($user->id,2)->location_type==2?'selected':'':'' }}>
                                    Multi-Doctor Clinic</option>
                                <option value="3"
                                    {{ $user->getDocPrimary($user->id,2)?$user->getDocPrimary($user->id,2)->location_type==3?'selected':'':'' }}>
                                    Primary Care Clinic</option>
                                <option value="4"
                                    {{ $user->getDocPrimary($user->id,2)?$user->getDocPrimary($user->id,2)->location_type==4?'selected':'':'' }}>
                                    Specialty Care Clinic</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center mt-4 pt-4">
                    <button class="btn btn-primary" id="cc_update_btn" type="submit">Update</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
