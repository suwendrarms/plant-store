<div id="accordion" class="">
    <div class="">
        <div id="collapseTwo" class="" data-parent="#accordion">
            <form class="tab-wizard wizard-circle wizard clearfix"
            action="{{ route('update-physician-final') }}" method="POST">
            @csrf
            <input type="hidden" name="id"
                                value="{{ $user->getDocPrimary($user->id,1)->id }}">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="text-center">Final Information</h5>
                    <hr>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Expected Patient Load Per Month</label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="epl1" name="patientcount"
                                class="custom-control-input required" checked value="1"
                                @if($user->getDocPrimary($user->id,1)!=[]?$user->getDocPrimary($user->id,1)->patientcount==1:'') checked @endif>
                            <label class="custom-control-label" for="epl1">1-20</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="epl2" name="patientcount"
                                class="custom-control-input required" value="2"
                                @if($user->getDocPrimary($user->id,1)!=[]?$user->getDocPrimary($user->id,1)->patientcount==2:'') checked @endif>
                            <label class="custom-control-label" for="epl2">21-50</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="epl3" name="patientcount"
                                class="custom-control-input required" value="3"
                                @if($user->getDocPrimary($user->id,1)!=[]?$user->getDocPrimary($user->id,1)->patientcount==3:'') checked @endif>
                            <label class="custom-control-label" for="epl3">51-100</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="epl4" name="patientcount"
                                class="custom-control-input required" value="4"
                                @if($user->getDocPrimary($user->id,1)!=[]?$user->getDocPrimary($user->id,1)->patientcount==4:'') checked @endif>
                            <label class="custom-control-label" for="epl4">100-250</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="epl5" name="patientcount"
                                class="custom-control-input required" value="5"
                                @if($user->getDocPrimary($user->id,1)!=[]?$user->getDocPrimary($user->id,1)->patientcount==5:'') checked @endif>
                            <label class="custom-control-label" for="epl5">250+</label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="d-inline-block" for="recommend_yes">
                            Would you like to be recommended as a PCP for Patients in your
                            area
                            that are looking for one?
                        </label>
                        <label class="custom-toggle">
                            <input type="hidden" name="recommend" value="0">
                            <input type="checkbox" name="recommend" id="recommend_yes"
                                value="1" @if($user->getDocPrimary($user->id,1)!=[]?$user->getDocPrimary($user->id,1)->recommend==1:'' ) checked @endif>
                            <span class="custom-toggle-slider rounded-circle"
                                data-label-off="No" data-label-on="Yes"></span>
                        </label>
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
