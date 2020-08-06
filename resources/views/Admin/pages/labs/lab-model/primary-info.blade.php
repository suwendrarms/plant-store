<div id="accordion" class="">
    <div class="">

        <div id="collapseTwo" class="" data-parent="#accordion">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="text-center">Address Information</h5>
                    <hr>
                </div>
                <div class="col-md-12">


                </div>
                <div class="col-lg-6">


                    <label for="userName">Address</label>
                    <input id="add" class="form-control pro" name="firstname" type="text" class="required"
                        value="{{$user->lab->address }}">






                    <label for="userName">Zip Code</label>
                    <input id="add" class="form-control pro" name="firstname" type="text" class="required"
                        value="{{ $user->lab->zip}}">


                </div>
                <div class="col-lg-6">


                    <label for="userName">City</label>
                    <input id="add" class="form-control pro" name="firstname" type="text" class="required"
                        value="{{ $user->lab->city}}">






                    <label for="userName">State</label>
                    <input id="add" class="form-control pro" name="firstname" type="text" class="required"
                        value="{{ $user->lab->state}}">

                </div>

            </div>

        </div>

    </div>
</div>
