<div id="accordion" class="">
    <div class="">

        <div id="collapseThree" class="card-body " data-parent="#accordion">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="text-center">Time sensitive action</h5>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h6 class="mt-2 main">(1) Have you traveled to or from overseas in the last 30 days ?</h6>
                    <strong><label
                            for="">{{ $user->gotTimeSensitive!=[]?$user->gotTimeSensitive->overseas==1?'Yes':'No':'-' }}
                        </label>
                    </strong>
                </div>
                <div class="col-lg-12">
                    <h6 class="mt-2 main">(2) Do you have any of the following symptoms?</h6>
                    <label class="d-inline-block" style="font-size: 14px;color: blue" for="">(Fever, Cough,
                        Fatigue, Weakness
                        , Exhaution)</label>
                    <br>
                    <strong><label
                            for="">{{ $user->gotTimeSensitive!=[]?$user->gotTimeSensitive->symptoms==1?'Yes':'No':'-' }}
                        </label>
                    </strong>
                </div>
                <div class="col-lg-12">
                    <h6 class="mt-2 main">(3)Are you experiencing shortness of breath ?</h6>
                    <strong><label
                            for="">{{ $user->gotTimeSensitive!=[]?$user->gotTimeSensitive->breath==1?'Yes':'No':'-' }}
                        </label>
                    </strong>
                </div>
            </div>
        </div>
    </div>
</div>
