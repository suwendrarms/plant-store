<div id="accordion" class="">
    <div class="">

        <div id="collapseThree" class="" data-parent="#accordion">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="text-center">Lifestyle Information</h5>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h6 class="mt-2">How often do you eat a healthy diet per week?</h6>
                    <span
                        class="{{$user->UserLifestyle?$user->UserLifestyle->diet==0?'':'d-none':'d-none'}}"><b>Always</b></span>
                    <span class="{{$user->UserLifestyle?$user->UserLifestyle->diet==1?'':'d-none':'d-none'}}"><b>Some
                            Days</b></span>
                    <span
                        class="{{$user->UserLifestyle?$user->UserLifestyle->diet==2?'':'d-none':'d-none'}}"><b>Never</b></span>
                </div>
                <div class="col-md-6">
                    <h6 class="mt-2">Do you exercise at least 3 days per week?</h6>
                    <span
                        class="{{$user->UserLifestyle?$user->UserLifestyle->exercise==0?'':'d-none':'d-none'}}"><b>Yes</b></span>
                    <span class="{{$user->UserLifestyle?$user->UserLifestyle->exercise==1?'':'d-none':'d-none'}}">
                        <b>No</b></span>
                </div>

                <div class="col-md-6">
                    <h6 class="mt-2">In general, would you say your health is:</h6>
                    <span
                        class="{{$user->UserLifestyle?$user->UserLifestyle->say_health==0?'':'d-none':'d-none'}}"><b>Excellent</b></span>
                    <span class="{{$user->UserLifestyle?$user->UserLifestyle->say_health==1?'':'d-none':'d-none'}}"><b>Very
                            Good</b></span>
                    <span
                        class="{{$user->UserLifestyle?$user->UserLifestyle->say_health==2?'':'d-none':'d-none'}}"><b>Good</b></span>
                    <span
                        class="{{$user->UserLifestyle?$user->UserLifestyle->say_health==3?'':'d-none':'d-none'}}"><b>Fair</b></span>
                    <span
                        class="{{$user->UserLifestyle?$user->UserLifestyle->say_health==4?'':'d-none':'d-none'}}"><b>Fair</b></span>
                </div>

                <div class="col-md-6">
                    <h6 class="mt-2">Do you visit the dentist every 6 months?</h6>
                    <span
                        class="{{$user->UserLifestyle?$user->UserLifestyle->dentist==0?'':'d-none':'d-none'}}"><b>Yes</b></span>
                    <span class="{{$user->UserLifestyle?$user->UserLifestyle->dentist==1?'':'d-none':'d-none'}}">
                        <b>No</b></span>
                </div>

                <div class="col-md-6">
                    <h6 class="mt-2">Do you get your vision checked every 1-2 years?</h6>
                    <span
                        class="{{$user->UserLifestyle?$user->UserLifestyle->vision==0?'':'d-none':'d-none'}}"><b>Yes</b></span>
                    <span class="{{$user->UserLifestyle?$user->UserLifestyle->vision==1?'':'d-none':'d-none'}}">
                        <b>No</b></span>
                </div>

                <div class="col-md-6">
                    <h6 class="mt-2">In the past 4 weeks, how much pain have you experienced?</h6>
                    <span class="{{$user->UserLifestyle?$user->UserLifestyle->pain==0?'':'d-none':'d-none'}}"><b>No
                            Pain</b></span>
                    <span class="{{$user->UserLifestyle?$user->UserLifestyle->pain==1?'':'d-none':'d-none'}}"><b>Very
                            Mild Pain</b></span>
                    <span class="{{$user->UserLifestyle?$user->UserLifestyle->pain==2?'':'d-none':'d-none'}}"><b>Mild
                            Pain</b></span>
                    <span class="{{$user->UserLifestyle?$user->UserLifestyle->pain==3?'':'d-none':'d-none'}}"><b>Moderate
                            Pain</b></span>
                    <span class="{{$user->UserLifestyle?$user->UserLifestyle->pain==4?'':'d-none':'d-none'}}"><b>Severe
                            Pain</b></span>
                </div>

                <div class="col-md-6">
                    <h6 class="mt-2">Do you get an average of 6-8 hours of sleep each night?</h6>
                    <span
                        class="{{$user->UserLifestyle?$user->UserLifestyle->sleep_avg==0?'':'d-none':'d-none'}}"><b>Yes</b></span>
                    <span class="{{$user->UserLifestyle?$user->UserLifestyle->sleep_avg==1?'':'d-none':'d-none'}}">
                        <b>No</b></span>
                </div>

                <div class="col-md-6">
                    <h6 class="mt-2">Where is your pain?</h6>
                    <span><b>{{$user->UserLifestyle?$user->UserLifestyle->where_pain:''}}</b></span>
                </div>

                <div class="col-md-6">
                    <h6 class="mt-2">Do you ever find yourself dozing off suddenly/unexpectantly?</h6>
                    <span
                        class="{{$user->UserLifestyle?$user->UserLifestyle->dozing==0?'':'d-none':'d-none'}}"><b>Yes</b></span>
                    <span class="{{$user->UserLifestyle?$user->UserLifestyle->dozing==1?'':'d-none':'d-none'}}">
                        <b>No</b></span>
                </div>
                <div class="col-md-6">
                    <h6 class="mt-2">Do you wear a seatbelt?</h6>
                    <span
                        class="{{$user->UserLifestyle?$user->UserLifestyle->seatbelt==0?'':'d-none':'d-none'}}"><b>Yes</b></span>
                    <span class="{{$user->UserLifestyle?$user->UserLifestyle->seatbelt==1?'':'d-none':'d-none'}}">
                        <b>No</b></span>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="text-center">Activities of Daily Living</h5>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h6 class="mt-2">Do you have trouble hearing?</h6>
                    <span
                        class="{{$user->UserLifestyle?$user->UserLifestyle->trouble==0?'':'d-none':'d-none'}}"><b>Yes</b></span>
                    <span class="{{$user->UserLifestyle?$user->UserLifestyle->trouble==1?'':'d-none':'d-none'}}">
                        <b>No</b></span>
                </div>

                <div class="col-md-6">
                    <h6 class="mt-2">Have you fallen recently?</h6>
                    <span
                        class="{{$user->UserLifestyle?$user->UserLifestyle->fallen==0?'':'d-none':'d-none'}}"><b>Yes</b></span>
                    <span class="{{$user->UserLifestyle?$user->UserLifestyle->fallen==1?'':'d-none':'d-none'}}">
                        <b>No</b></span>
                </div>

                <div class="col-md-6">
                    <h6 class="mt-2">do you wear hearing aids?</h6>
                    <span
                        class="{{$user->UserLifestyle?$user->UserLifestyle->aids==0?'':'d-none':'d-none'}}"><b>Yes</b></span>
                    <span class="{{$user->UserLifestyle?$user->UserLifestyle->aids==1?'':'d-none':'d-none'}}">
                        <b>No</b></span>
                </div>

                <div class="col-md-6">
                    <h6 class="mt-2">Are there any daily activities are you having trouble with?</h6>
                    <span class="{{$user->UserLifestyle?$user->UserLifestyle->activity==0?'':'d-none':'d-none'}}"><b>Personal
                            Hygiene</b></span>
                    <span
                        class="{{$user->UserLifestyle?$user->UserLifestyle->activity==1?'':'d-none':'d-none'}}"><b>Dressing</b></span>
                    <span
                        class="{{$user->UserLifestyle?$user->UserLifestyle->activity==2?'':'d-none':'d-none'}}"><b>Eating</b></span>
                    <span
                        class="{{$user->UserLifestyle?$user->UserLifestyle->activity==3?'':'d-none':'d-none'}}"><b>Transferring/Mobility</b></span>
                    <span
                        class="{{$user->UserLifestyle?$user->UserLifestyle->activity==4?'':'d-none':'d-none'}}"><b>Other</b></span>
                    <span><b>{{$user->UserLifestyle?$user->UserLifestyle->activity==4?$user->UserLifestyle->other_activity:'':''}}</b></span>
                </div>

                <div class="col-md-6">
                    <h6 class="mt-2">Do you use a walker/cane/wheelchair?</h6>
                    <span
                        class="{{$user->UserLifestyle?$user->UserLifestyle->walker==0?'':'d-none':'d-none'}}"><b>Yes</b></span>
                    <span class="{{$user->UserLifestyle?$user->UserLifestyle->walker==1?'':'d-none':'d-none'}}">
                        <b>No</b></span>
                </div>

                <div class="col-md-6">
                    <h6 class="mt-2">Do you have a living will?</h6>
                    <span
                        class="{{$user->UserLifestyle?$user->UserLifestyle->living_will==0?'':'d-none':'d-none'}}"><b>Yes</b></span>
                    <span class="{{$user->UserLifestyle?$user->UserLifestyle->living_will==1?'':'d-none':'d-none'}}">
                        <b>No</b></span>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="text-center">Health Screenings/Vaccinations</h5>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h6 class="mt-2">Have you received any health screenings in the last 5 years (cancer, diabetes,
                        heart, prostate, breast etc.)?</h6>
                    <span
                        class="{{$user->UserLifestyle?$user->UserLifestyle->health_screening==0?'':'d-none':'d-none'}}"><b>Yes</b></span>
                    <span
                        class="{{$user->UserLifestyle?$user->UserLifestyle->health_screening==1?'':'d-none':'d-none'}}">
                        <b>No</b></span>
                    <br>
                    <h6 class="{{$user->UserLifestyle?$user->UserLifestyle->health_screening==1?'':'d-none':'d-none'}}">
                        please list which ones and the year received:</h6>
                    <span><b>{{$user->UserLifestyle?$user->UserLifestyle->health_screening==1?$user->UserLifestyle->year_received:'':''}}</b></span>
                </div>
                @if($user->UserLifestyle)
                @php
                $split = str_split($user->UserLifestyle->vaccination, 1);
                @endphp
                @endif
                <div class="col-md-12">
                    <h6 class="mt-2">Please check off the following vaccinations you’ve received:</h6>
                    <span class="{{ $user->UserLifestyle? in_array('0', $split)?'':'d-none':'d-none' }}"><b>Flu shot in
                            the last year</b></span><br>
                    <span class="{{ $user->UserLifestyle? in_array('1', $split)?'':'d-none':'d-none' }}"><b>Tetanus
                            booster in the last 10 years</b></span><br>
                    <span class="{{ $user->UserLifestyle? in_array('2', $split)?'':'d-none':'d-none' }}"><b>Pneumonia
                            shot</b></span>
                </div>
                <div class="col-md-12">
                    <h6 class="mt-2">PROVIDERS NOTES:</h6>
                    <span><b>{{$user->UserLifestyle?$user->UserLifestyle->provider:''}}</b></span>
                </div>
            </div>

        </div>
    </div>
</div>
