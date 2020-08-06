<div id="accordion" class="">
    <div class="">

        <div id="collapseTwo" class="" data-parent="#accordion">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="text-center">Primary Information</h5>
                    <hr>
                </div>
                <div class="col-md-12">


                </div>
                <div class="col-lg-6">
                    <h6 class="mt-2">Address</h6>
                    <strong><label
                            for="">{{ $user->getDocPrimary($user->id,1)!=[]?$user->getDocPrimary($user->id,1)->address:'-' }}</label>
                    </strong>
                    <h6 class="mt-2">Zip Code</h6>
                    <strong><label
                            for="">{{ $user->getDocPrimary($user->id,1)!=[]?$user->getDocPrimary($user->id,1)->zip:'-' }}</label></strong>
                    <h6 class="mt-2">Location Type</h6>
                    <strong>
                        @if($user->getDocPrimary($user->id,1)!=[])
                        @switch($user->getDocPrimary($user->id,1)->location_type)
                        @case(1)
                        <label>Single Doctor Office</label>
                        @break
                        @case(2)
                        <label>Multi-Doctor Clinic</label>
                        @break
                        @case(3)
                        <label>Primary Care Clinic</label>
                        @break
                        @case(4)
                        <label>Specialty Care Clinic</label>
                        @break
                        @default

                        @endswitch

                        @else
                        '-'
                        @endif
                    </strong>

                </div>
                <div class="col-lg-6">
                    <h6 class="mt-2">City</h6>
                    <strong><label
                            for="">{{ $user->getDocPrimary($user->id,1)!=[]?$user->getDocPrimary($user->id,1)->city:'-'  }}</label></strong>
                    <h6 class="mt-2">State</h6>
                    <strong><label
                            for="">{{ $user->getDocPrimary($user->id,1)!=[]?$user->getDocPrimary($user->id,1)->state:'-'}}</label></strong>

                </div>
                @if ($user->getDocPrimary($user->id,2)!=[])
                <div class="col-md-12">
                    <h5 class="mt-2 text-blue">Address Information(secondary)</h6>

                </div>
                <div class="col-lg-6">
                    <h6 class="mt-2">Address</h6>
                    <strong><label for="">{{$user->getDocPrimary($user->id,2)->address}}</label></strong>
                    <h6 class="mt-2">Zip Code</h6>
                    <strong><label for="">{{ $user->getDocPrimary($user->id,2)->zip }}</label></strong>
                    <h6 class="mt-2">Location Type</h6>
                    <strong>

                        @switch($user->getDocPrimary($user->id,2)->location_type)
                        @case(1)
                        <label>Single Doctor Office</label>
                        @break
                        @case(2)
                        <label>Multi-Doctor Clinic</label>
                        @break
                        @case(3)
                        <label>Primary Care Clinic</label>
                        @break
                        @case(4)
                        <label>Specialty Care Clinic</label>
                        @break
                        @default

                        @endswitch

                    </strong>

                </div>
                <div class="col-lg-6">
                    <h6 class="mt-2">City</h6>
                    <strong><label for="">{{ $user->getDocPrimary($user->id,1)->city }}</label></strong>
                    <h6 class="mt-2">State</h6>
                    <strong><label for="">{{ $user->getDocPrimary($user->id,1)->state}}</label></strong>

                </div>
                @endif




            </div>

        </div>

    </div>
</div>
