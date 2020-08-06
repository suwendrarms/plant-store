@extends('Admin.Layouts.app')
@section('header-content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Messages</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-block ">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Start Here</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Inbox</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <div class="row justify-content-center">

            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card shadow">
            <div class="row">
                <div class="col-md-4 p-0" style="background-color:#ececec; border-radius: .375rem">
                    <div class="card-body">
                        <h5 class="card-title">Members</h5>
                        <select class="form-control" id="customer_id_search">
                            <option></option>
                        </select>
                        <hr>

                        <div class="scrollbar-chat scroller">
                            @foreach ($customers as $key=> $customer)
                            <ul class="list-style-none" @if($customer->unreadmessages())
                                style="background-color:powderblue;"
                                @endif
                                @if ($activated_customer) @if ($activated_customer->
                                id==$customer->id)
                                style="background-color:#FFFFFF;"
                                @endif
                                @endif>
                                <li>
                                    <div class="message-center">
                                        @if ($customer->deleted_at)
                                        <div>
                                            <a href="{{ route('admin-show-messages',$customer->id) }}"
                                                class="message-item " id="chat_user_1" data-user-id="1">
                                                <div class="row text-danger">
                                                    <div class="col-md-1">
                                                        <span class="user-img">
                                                            @if($customer->user_level==2)
                                                            <img width="35" height="35"
                                                                class="img-profile rounded-circle"
                                                                src="{{ $customer->image?asset('uploads/crop/'.$customer->image->name):asset('img/patients-default.png') }}">
                                                            @endif
                                                            @if($customer->user_level==3)
                                                            <img width="35" height="35"
                                                                class="img-profile rounded-circle"
                                                                src="{{ $customer->image?asset('uploads/crop/'.$customer->image->name):asset('img/physicians-default.png') }}">
                                                            @endif
                                                            @if($customer->user_level==4)
                                                            <img width="35" height="35"
                                                                class="img-profile rounded-circle"
                                                                src="{{ $customer->image?asset('uploads/crop/'.$customer->image->name):asset('img/lab-default.png') }}">
                                                            @endif
                                                            {{-- <img alt="Image placeholder"
                                                            src="{{ Auth::user()->image!=[]?asset('uploads/crop/'.Auth::user()->image->name):asset('images/no-thumbnail.png') }}">
                                                            --}}
                                                        </span>
                                                    </div>
                                                    <div class="col-md-11" @if ($activated_customer) @if ($customer->id
                                                        ==$activated_customer->id )
                                                        style="color: blueviolet; padding-top: 20px;"
                                                        @endif
                                                        @endif >
                                                        <div class="mail-contnet text-danger" @if ($customer->
                                                            messages->count()==1)
                                                            style="color: black" @endif>
                                                            <small class="message-title">{{ $customer->firstname }}
                                                                {{ $customer->lastname }}<br>
                                                                <small
                                                                    class="message-title">{{ $customer->email }}</small><br>
                                                                <span class="badge badge-danger text-dark mb-2">DISABLED
                                                                    ACCOUNT</span>
                                                                @if ($customer->reminder==1)
                                                                <i class="fa fa-bell" aria-hidden="true"></i>
                                                                @endif
                                                                @if($customer->gotReply!=[]?$customer->gotReply->from_who==0:false)
                                                                <i class="fa fa-history text-warning"></i>
                                                                @endif
                                                            </small> </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="mt-1 mb-1">
                                        </div>
                                        @else
                                        <div id="cat{{ $key}}">
                                            <a href="{{ route('admin-show-messages',$customer->id) }}"
                                                class="message-item " id="chat_user_1" data-user-id="1">
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <span class="user-img">
                                                            {{-- <img width="35" height="35" class="img-profile rounded-circle"
                                                        src="{{ $customer->image?asset('uploads/crop/'.$customer->image->name):asset('img/patients.jpeg') }}">
                                                            --}}
                                                            @if($customer->user_level==2)
                                                            <img width="35" height="35"
                                                                class="img-profile rounded-circle"
                                                                src="{{ $customer->image?asset('uploads/crop/'.$customer->image->name):asset('img/patients-default.png') }}">
                                                            @endif
                                                            @if($customer->user_level==3)
                                                            <img width="35" height="35"
                                                                class="img-profile rounded-circle"
                                                                src="{{ $customer->image?asset('uploads/crop/'.$customer->image->name):asset('img/physicians-default.png') }}">
                                                            @endif
                                                            @if($customer->user_level==4)
                                                            <img width="35" height="35"
                                                                class="img-profile rounded-circle"
                                                                src="{{ $customer->image?asset('uploads/crop/'.$customer->image->name):asset('img/lab-default.png') }}">
                                                            @endif
                                                        </span>
                                                    </div>

                                                    <div class="col-md-11" @if ($activated_customer) @if ($customer->id
                                                        ==$activated_customer->id )
                                                        style="color:black; "
                                                        @endif
                                                        @endif >
                                                        <div class="mail-contnet text-dark" @if ($customer->
                                                            messages->count()==1)
                                                            @endif>
                                                            <small class="message-title">{{ $customer->firstname }}
                                                                {{ $customer->lastname }}<br>
                                                                <small
                                                                    class="message-title mb-2">{{ $customer->email }}</small>
                                                                @if ($customer->reminder==1)
                                                                <i class="fa fa-bell" aria-hidden="true"></i>
                                                                @endif
                                                                @if($customer->gotReply!=[]?$customer->gotReply->from_who==0:false)
                                                                <i class="fa fa-history text-warning"></i>
                                                                @endif
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="mt-1 mb-1">
                                        </div>
                                        @endif
                                    </div>
                                </li>
                            </ul>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card-body">
                        @if ($activated_customer)
                        @if ($activated_customer->deleted_at)
                        <div class="card-body">
                            <h4 class="card-title bold text-center">Conversation With <span
                                    style="color: #18728F">{{ $activated_customer->firstname }}
                                    {{ $activated_customer->lastname }}</span></h4>
                            <h6 class=" text-center">{{ $activated_customer->email }}</h6>
                            <hr>
                            <div class="chat-card">
                                <ul class="chat-list">
                                    @forelse ($messages as $message)
                                    @if ($message->from_who)
                                    <li class="chat-item">
                                        <div class="row mr-4 mb-2">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-8">
                                                <div class="chat-content">
                                                    <div class="card bg-light-success"
                                                        style="background-color: #EBEBEB; padding-left:10px">
                                                        <h5 class="font-medium" style="color: dimgray">Me</h5>
                                                        <p class="font-light mb-0">{!! $message->message !!}</p>
                                                        <div class="chat-time">
                                                            <small><abbr class="timeago"
                                                                    title="{{ $message->created_at }}"></abbr></small>
                                                        </div>
                                                    </div>

                                                </div>
                                                @if ($message->message_read)
                                                <small>
                                                    <span class="chat-seen badge badge-sean">Seen:<abbr class="timeago"
                                                            title="{{ $message->updated_at }}"></abbr></span>
                                                </small>
                                                @else

                                                <span class="chat-seen badge badge-not-sean">Did Not Seen
                                                    Yet</span>
                                                @endif
                                            </div>
                                            <div class="col-md-1">
                                                <div class="chat-img">
                                                    <img width="35" height="35" class="img-profile rounded-circle"
                                                        src="{{ Auth::user()->image?asset('uploads/crop/'.Auth::user()->image->name):asset('img/admin.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @else
                                    <li class=" chat-item">
                                        <div class="row mr-4 mb-2">
                                            <div class="col-md-1">
                                                <div class="chat-img">
                                                    {{-- <img width="35" height="35" class="img-profile rounded-circle"
                                                    src="{{ $customer->image?asset('uploads/crop/'.$customer->image->name):asset('img/patients.jpeg') }}">
                                                    --}}
                                                    @if($activated_customer->user_level==2)
                                                    <img width="35" height="35" class="img-profile rounded-circle"
                                                        src="{{ $activated_customer->image?asset('uploads/crop/'.$activated_customer->image['name']):asset('img/patients-default.png') }}">
                                                    @endif
                                                    @if($activated_customer->user_level==3)
                                                    <img width="35" height="35" class="img-profile rounded-circle"
                                                        src="{{ $activated_customer->image?asset('uploads/crop/'.$activated_customer->image['name']):asset('img/physicians-default.png') }}">
                                                    @endif
                                                    @if($activated_customer->user_level==4)
                                                    <img width="35" height="35" class="img-profile rounded-circle"
                                                        src="{{ $activated_customer->image?asset('uploads/crop/'.$activated_customer->image['name']):asset('img/lab-default.png') }}">
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="">
                                                    <div class="card bg-light-success"
                                                        style="background-color: #18728F; padding: 5px;color: #EBEBEB">
                                                        {{--  <h5 class="font-medium">{{ $message->customer->name }}
                                                        </h5>
                                                        --}}
                                                        <p class="font-light mb-0">{!! $message->message !!}</p>
                                                        <div class="chat-time">
                                                            <small><abbr class="timeago"
                                                                    title="{{ $message->created_at }}"></abbr></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3"></div>
                                        </div>
                                    </li>
                                    @endif
                                    @empty
                                    <center class=" empty2 pt-4 mt-4 pb-4 mb-4">
                                        {{-- <img width="35" height="35" class="img-profile rounded-circle"
                                        src="{{ $customer->images?asset('uploads/crop/'.$customer->images->name):asset('img/admin.png') }}">
                                        --}}
                                        @if($activated_customer->user_level==2)
                                        <img width="35" height="35" class="img-profile rounded-circle"
                                            src="{{ $activated_customer->image?asset('uploads/crop/'.$activated_customer->image['name']):asset('img/patients-default.png') }}">
                                        @endif
                                        @if($activated_customer->user_level==3)
                                        <img width="35" height="35" class="img-profile rounded-circle"
                                            src="{{ $activated_customer->image?asset('uploads/crop/'.$activated_customer->image['name']):asset('img/physicians-default.png') }}">
                                        @endif
                                        @if($activated_customer->user_level==4)
                                        <img width="35" height="35" class="img-profile rounded-circle"
                                            src="{{ $activated_customer->image?asset('uploads/crop/'.$activated_customer->image['name']):asset('img/lab-default.png') }}">
                                        @endif
                                        <h6 class="text-muted">Still You have Not Started Conversation With
                                        </h6>
                                    </center>
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                        <div class="card-body border-top">
                            <form id="send-message-form" action="{{ route('admin-new-messages') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-11">
                                        <div class="input-field ">

                                            <span class="text-danger"> <i
                                                    class="fas fa-exclamation-circle mr-3"></i><small>You
                                                    Can not
                                                    Continue This
                                                    Conversation</small> </span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @else
                        <div class="card-body">
                            <h4 class="card-title bold text-center">Conversation With <span
                                    style="color: #18728F">{{ $activated_customer->firstname }}
                                    {{ $activated_customer->lastname }}</span></h4>
                            <h6 class=" text-center">{{ $activated_customer->email }}</h6>
                            <hr>
                            <div class="chat-card">
                                <ul class="chat-list">
                                    @forelse ($messages as $message)
                                    @if ($message->from_who)
                                    <li class="chat-item">
                                        <div class="row mr-4 mb-2">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-8">
                                                <div class="chat-content">
                                                    <div class="card bg-light-success"
                                                        style="background-color: #EBEBEB;">
                                                        <h5 class="font-medium" style="color: dimgray">Me</h5>
                                                        <p class="font-light mb-0">{!! $message->message !!}</p>
                                                        <div class="chat-time">
                                                            <small><abbr class="timeago"
                                                                    title="{{ $message->created_at }}"></abbr></small>
                                                        </div>
                                                    </div>

                                                </div>
                                                @if ($message->message_read)
                                                <small>
                                                    <span class="chat-seen badge badge-sean">Seen:<abbr class="timeago"
                                                            title="{{ $message->updated_at }}"></abbr></span>
                                                </small>
                                                @else

                                                <span class="chat-seen badge badge-not-sean">Did Not Seen
                                                    Yet</span>
                                                @endif
                                            </div>
                                            <div class="col-md-1">
                                                <div class="chat-img">
                                                    <img width="35" height="35" class="img-profile rounded-circle"
                                                        src="{{ Auth::user()->image?asset('uploads/crop/'.Auth::user()->image->name):asset('img/admin.jpg') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @else
                                    <li class=" chat-item">
                                        <div class="row mr-4 mb-2">
                                            <div class="col-md-1">
                                                <div class="chat-img">
                                                    {{-- <img width="35" height="35" class="img-profile rounded-circle"
                                                    src="{{ $customer->image?asset('uploads/crop/'.$customer->image->name):asset('img/admin.png') }}">
                                                    --}}
                                                    @if($activated_customer->user_level==2)
                                                    <img width="35" height="35" class="img-profile rounded-circle"
                                                        src="{{ $activated_customer->image?asset('uploads/crop/'.$activated_customer->image['name']):asset('img/patients-default.png') }}">
                                                    @endif
                                                    @if($activated_customer->user_level==3)
                                                    <img width="35" height="35" class="img-profile rounded-circle"
                                                        src="{{ $activated_customer->image?asset('uploads/crop/'.$activated_customer->image['name']):asset('img/physicians-default.png') }}">
                                                    @endif
                                                    @if($activated_customer->user_level==4)
                                                    <img width="35" height="35" class="img-profile rounded-circle"
                                                        src="{{ $activated_customer->image?asset('uploads/crop/'.$activated_customer->image['name']):asset('img/lab-default.png') }}">
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="">
                                                    <div class="card bg-light-success"
                                                        style="background-color: #18728F;color: #EBEBEB">
                                                        {{--  <h5 class="font-medium">{{ $message->customer->name }}
                                                        </h5>
                                                        --}}
                                                        <p class="font-light mb-0">{!! $message->message !!}</p>
                                                        <div class="chat-time">
                                                            <small><abbr class="timeago"
                                                                    title="{{ $message->created_at }}"></abbr></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3"></div>
                                        </div>
                                    </li>
                                    @endif
                                    @empty
                                    <center class=" empty2 pt-4 mt-4 pb-4 mb-4">
                                        {{-- <img width="35" height="35" class="img-profile rounded-circle"
                                        src="{{ $customer->images?asset('uploads/crop/'.$customer->images->name):asset('img/admin.png') }}">
                                        --}}
                                        @if($activated_customer->user_level==2)
                                        <img width="35" height="35" class="img-profile rounded-circle"
                                            src="{{ $activated_customer->image?asset('uploads/crop/'.$activated_customer->image['name']):asset('img/patients-default.png') }}">
                                        @endif
                                        @if($activated_customer->user_level==3)
                                        <img width="35" height="35" class="img-profile rounded-circle"
                                            src="{{ $activated_customer->image?asset('uploads/crop/'.$activated_customer->image['name']):asset('img/physicians-default.png') }}">
                                        @endif
                                        @if($activated_customer->user_level==4)
                                        <img width="35" height="35" class="img-profile rounded-circle"
                                            src="{{ $activated_customer->image?asset('uploads/crop/'.$activated_customer->image['name']):asset('img/lab-default.png') }}">
                                        @endif
                                        <h6 class="text-muted">Still You have Not Started Conversation With
                                        </h6>
                                    </center>
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                        <div class="card-body border-top">
                            <form id="send-message-form" action="{{ route('admin-new-messages') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-11">
                                        <div class="input-field ">
                                            <textarea placeholder="Type and enter" class="form-control border-0"
                                                name="message" id="inp_message" rows="5" minlength="2"
                                                required></textarea>
                                        </div>
                                    </div>
                                    <input type="hidden" id="user_id" value="{{ $activated_customer->id }}"
                                        name="user_id">
                                    <input type="hidden" value="1" name="from_who">
                                    <input type="hidden" value="0" name="message_read">
                                    <div class="col-md-1">
                                        <button type="submit"
                                            class="btn-circle btn-lg btn btn-outline-info float-right"><i
                                                class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endif

                        @else
                        <div class="card-body">
                            <div class="row empty">
                                <div class="col-lg-6">
                                    <center>
                                        <img width="35" height="35" class="img-profile rounded-circle"
                                            src="{{ Auth::user()->images?config('images.access_path').'/'.$customer->images->name:asset('img/admin.png') }}">
                                        <h5 class="text-muted">{{ Auth::user()->name }}</h5>
                                        <h3 class="text-center">
                                            Please Select Member To See Messages
                                        </h3>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
@endsection
{{--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">  --}}
<style>
    .empty {
        padding-top: 125px;
        padding-left: 200px;
    }

    .empty2 {
        padding-top: 125px;

    }

    .other {
        margin-right: 350px;
    }

    .odd {

        margin-left: 320px;
    }

    li {
        list-style-type: none;
    }

    p {
        font-size: 18px;
    }

    .chat-list {
        overflow-y: scroll;
        height: 220px;
        margin-bottom: 20px;
        margin-left: -30px;
    }

    .mailcard {
        overflow-y: scroll;
        height: 450px;
        margin-bottom: 20px;
        margin-left: -30px;
    }

    .col-md-9,
    .col-md-3,
    .col-md-10 {
        padding-right: 0px !important;
        padding-left: 0px !important;
    }


    .col-md-1 {
        padding-right: 5px !important;
        padding-left: 0px !important;
    }

    .mail-contnet {
        padding-left: 20px !important;
    }

    .header {
        background-image:linear-gradient(to bottom, rgba(249, 249, 249, 0.52), rgba(9, 50, 123, 0.73)),
        url('{{ asset("img/coverageinfo.jpg") }}');
        background-size: cover;
        background-position: center;
    }

    .scrollbar-chat {
        height: 600px;
        overflow-y: scroll;
        width: 100%;
        overflow-x: hidden;
    }

    .badge-danger {
        color: #FF0000
    }

    .selected {
        background-color: #ececec;
        opacity: 0.5;
    }

    .scroller {
        overflow-y: scroll;
    }

    .scroller::-webkit-scrollbar {
        display: none;
    }

</style>

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.6.7/jquery.timeago.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        $("abbr.timeago").timeago();
    })


    $('#customer_id_search').change(function () {
        window.location.href = "{{ url('support/admin-show-messages')}}/" + $(this).val();

    });

    $(function () {
        $('.cat').click(function () {
            $(this).addClass('selected');
        });
    });

    $("#customer_id_search").select2({
        ajax: {
            url: "{{ url('/support/admin-my-customers-list') }}",
            dataType: 'json',
            delay: 250,
            //data: { 'name': params.term},
            data: function (params) {
                x = {
                    filter_string: params.term,
                    filter_column: ['firstname', 'lastname', 'email']
                };
                return x;
            },
            processResults: function (data, params) {
                // parse the results into the format expected by Select2
                // since we are using custom formatting functions we do not need to
                // alter the remote JSON data, except to indicate that infinite
                // scrolling can be used
                console.log(data);
                params.page = params.page || 1;
                return {
                    results: data,
                    pagination: {
                        more: (params.page * 30) < data.length
                    }
                };
            },
            cache: true
        },
        placeholder: 'Search for a Member',
        theme: "bootstrap",
        escapeMarkup: function (markup) {
            return markup;
        }, // let our custom formatter work
        minimumInputLength: 1,
        templateResult: formatUser,
        templateSelection: formatRepoSelection
    });

    function formatUser(user) {
        if (user.loading) {
            return user.text;
        }

        var markup = "<div class='select2-result-repository clearfix'>" +
            "<div class='select2-result-repository__meta'>" +
            "<div class='select2-result-repository__title'><i class='fa fa-user'></i> " + user.firstname +
            "</div>";
        markup += "<div class='select2-result-repository__description'>" + user.email +
            "</div>";
        return markup;
    }

    function formatRepoSelection(user) {
        return user.firstname || user.text;
    }

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

</script>
@endsection
