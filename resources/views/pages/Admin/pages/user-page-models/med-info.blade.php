<div id="accordion" class="accordion mt-4 shadow">
    <div class="card mb-0">
       
        <div id="collapseThree" class="card-body " data-parent="#accordion">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="text-center">Medical Conditions</h5>
                    <hr>
                </div>
            </div>
            <div class="row">
                @foreach ($questions as $key=> $question)
                <div class="col-lg-11" id="mainQuestion">
                    <a class="collapsed card-link mb-2" data-toggle="collapse"
                        href="#b{{ $key }}">{{ $question->name }}</a>
                </div>
                <div class="col-lg-1" id="mainAnswer">
                    @if ($question->type==1)
                    <h5 class="mb-2"><b>{{ $question->answerAdmin($user->id)==1?'Yes':'No' }}</b></h5>
                    @endif
                </div>
                <div class="col-md-12">
                    <div id="b{{ $key }}" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            @foreach ($question->getChildQuestions($question->id) as $answers)
                            <div class="row">
                                <div class="col-md-4" id="subQuestion">
                                    <h5 class="mb-2">{{ $answers->name}}</h5>
                                </div>
                                <div class="col-md-4" id="subAnswer">
                                    @if ($answers->type==1)
                                    <h5 class="mb-2"><b>{{ $answers->answerAdmin($user->id)==1?'Yes':'No' }}</b></h5>

                                    @elseif($answers->type==2)
                                        @if ($answers->answerAdmin($user->id))
                                            @foreach ($answers->answerAdmin($user->id) as $answer)
                                            <a class="mb-2">{{ $answer->condition->name }},</a>
                                            @endforeach
                                        @endif

                                    @elseif($answers->type==3)
                                    <h5 class="mb-2">@if ($answers->answerAdmin($user->id))
                                        {{ $answers->answerAdmin($user->id)->condition->name }}
                                        @endif </h5>
                                    @elseif($answers->type==4)
                                    <h5 class="mb-2">{{ $answers->answerAdmin($user->id) }}</h5>

                                    @elseif($answers->type==5)
                                        @if ($answers->answerAdmin($user->id))
                                        <h5 class="mb-2">{{ $answers->answerAdmin($user->id) }}</h5>
                                        @endif

                                    @elseif($answers->type==6)
                                        @if ($answers->answerAdmin($user->id))
                                            @foreach ($answers->answerAdmin($user->id) as $answer)
                                            <a class="mb-2">{{ $answer->value }},</a>
                                            @endforeach
                                        @endif

                                    @elseif($answers->type==7)
                                        @if ($answers->answerAdmin($user->id))
                                            @foreach ($answers->answerAdmin($user->id) as $answer)
                                            <a class="mb-2">{{ $answer->condition->name }},</a>
                                            @endforeach
                                        @endif
                                    @endif
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>




        </div>
    </div>
</div>
