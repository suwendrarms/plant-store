<div id="accordion" class="">
    <div class="">
        <div id="collapseSix" class="" data-parent="#accordion">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush" id="dataTable2">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Legel Type</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($intakes as $key=>$intake)


                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $intake->user->firstname}} {{ $intake->user->lastname}}</td>
                                    <td>{{ $intake->user->email}}</td>
                                    <td>{{ $intake->legalType->name}}</td>
                                    <td>@switch($intake->status)
                                        @case(0)
                                        <span class="badge badge-warning">Draft</span>
                                        @break
                                        @case(1)
                                        <span class="badge badge-primary">Submitted</span>
                                        @break
                                        @case(2)
                                        <span class="badge badge-success">Approved</span>
                                        @break
                                        @default
                                        <span class="badge badge-danger">Declined</span>
                                        @endswitch</td>
                                    <td>

                                        <div class="dropdown no-arrow mb-4">
                                            <button class="btn btn-sm btn-icon-only text-light" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-left shadow animated--fade-in"
                                                aria-labelledby="dropdownMenuButton" x-placement="bottom-start"
                                                style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">

                                                <a class="dropdown-item {{ !in_array($intake->status,[0,1,])?'disabled':'' }}"
                                                    href="{{ route('admin-dashboard-view-settlement',$intake->id) }}"><i
                                                        class="fas fa-eye text-primary"></i>&nbsp;View</a>

                                                <div class="dropdown-divider"></div>

                                                <a class="dropdown-item {{ !in_array($intake->status,[0,1,])?'disabled':'' }}"
                                                    href="{{ route('admin-dashboard-settlement-approve',$intake->id) }}"><i
                                                        class="fas fa-check-circle text-success"></i>&nbsp;approve</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item {{ !in_array($intake->status,[0,1,])?'disabled':'' }}"
                                                    href="{{ route('admin-dashboard-settlement-decline',$intake->id) }}"><i
                                                        class="fas fa-ban text-danger"></i>&nbsp;decline</a>

                                            </div>

                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
