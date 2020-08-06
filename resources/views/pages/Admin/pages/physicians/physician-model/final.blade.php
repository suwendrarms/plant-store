<div id="accordion" class="">
    <div class="">
        <div id="collapseTwo" class="" data-parent="#accordion">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="text-center">Final Information</h5>
                    <hr>
                </div>
                <div class="col-md-12">
                    <h5 class="mt-2 text-blue">Final Information</h5>

                        <div class="col-md-12">
                            <h6 class="mt-2">Expected Patient Load Per Month</h6>
                            <strong> @if($user->getDocPrimary($user->id,1)!=[])
                                @switch($user->getDocPrimary($user->id,1)->patientcount)
                                @case(1)
                                <label>1-20</label>
                                @break
                                @case(2)
                                <label>21-50</label>
                                @break
                                @case(3)
                                <label>51-100</label>
                                @break
                                @case(4)
                                <label>101-250</label>
                                @break
                                @default
                                <label>250+</label>
                                @endswitch

                                @else
                                '-'
                                @endif</strong>
                        </div>
                        <div class="col-md-12">
                            <h6 class="mt-2">Would you like to be recommended as a PCP for Patients in your area that
                                are
                                looking for one?</h6>
                            <strong><label
                                    for="">{{ $user->getDocPrimary($user->id,1)!=[]?$user->getDocPrimary($user->id,1)->recommend==1?'Yes':'NO':'-'  }}</label></strong>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
