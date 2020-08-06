<div id="accordion" class="">
    <div class="">

        <div id="collapseThree" class="" data-parent="#accordion">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="text-center">Appointment Information</h5>
                    <hr>
                </div>
            </div>

            <div class="card bg-secondary shadow">
                <div class="table-responsive py-4">
                    <table class="table align-items-center table-flush" id="dataTable2">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Created at</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @if(count($user->appintment)!=0)
                            @foreach ($user->appintment as $key=>$appointment)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $appointment->user->email }}</td>
                                <td>{{ $appointment->date }}</td>
                                <td>{{ $appointment->timeMin<10?'0'.$appointment->timeMin:$appointment->timeMin}}:
                                    {{ $appointment->timeSec<10?'0'.$appointment->timeSec:$appointment->timeSec}}</td>
                                <td>{{ $appointment->created_at }}</td>

                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td></td>
                                <td></td>
                                <td> <label for="" style="color:#2E3D7B" class="float-right"> No data available</label>
                                </td>
                            </tr>
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
