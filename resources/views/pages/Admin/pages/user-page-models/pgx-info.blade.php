<div id="accordion" class="">
    <div class="">

        <div id="collapseFive" class="" data-parent="#accordion">

            <label class="form-check-label ml-2 mt-2">
                <input class="form-check-input" onclick="return false;"
                    {{ $user->PgxQuestionnaire!=[]?$user->PgxQuestionnaire->main_question==1?'checked':'':'' }}
                    type="checkbox" name="genetic" id="" value="checkedValue"> I
                have NOT performed a PGX genetic screening test before.
            </label>
            <div class="col-lg-12 mt-4">
                <h5 class="text-center">Check what symptoms or experiences with medications apply to you:
                </h5>
                <hr>
            </div>
            <table class="table align-items-center table-flush">
                <thead>
                    <th>#</th>
                    <th>Check all that apply</th>

                </thead>
                <tbody>
                    @php
                        $symtops=$user->PgxQuestionnaire!=[]?$user->PgxQuestionnaire->symptom:[]
                    @endphp
                    @foreach ($symtops as $key=>$symptom)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $symptom->symptom['name'] }}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
