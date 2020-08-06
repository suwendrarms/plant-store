<div id="accordion" class="">
    <div class="">

        <div id="collapseTwo" class="" data-parent="#accordion">
            <div class="row">
                <div class="accordion" id="accordionExample">
                <div class="col-lg-12">
                    <h5 class="text-center">Medical Information</h5>
                    <hr>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <div id="inline_quiz">
                                <div class="div-quiz mt-3 text-right">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="div-quiz-num mt-3 text-right">
                                    <h6 class="num-quiz">01.</h6>
                                </div>
                                <div class="div2">
                                    <h6 class="mt-2">
                                        <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                    Do you have any Diabetes?
                                    </a>
                                    </h6>
                                </div>
                            </div>
                            {{-- <h6 class="mt-1">
                                <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="fas fa-plus fasi"></i>01. Do you have any Diabetes?
                            </a>
                            </h6> --}}
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body cbody">
                                <strong><label>Answer:{{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->diabetes==1?'Yes':'No':'-' }}</label></strong>
                                @if($user->UserMedicalInfomation!=[])
                                @if($user->UserMedicalInfomation->diabetes==1)
                                <h6 class="mt-4">Q1. How many times a day do you test your blood sugar?</h6>
                                <strong><label>Answer:{{ $user->UserMedicalInfomation->test_blood }}</label></strong>
                                <h6 class="mt-4">Q2. Do you use insulin to treat your diabetes?</h6>
                                <strong><label>Answer:{{ $user->UserMedicalInfomation->use_insulin==1?'Yes':'No' }}</label></strong>
                                <h6 class="mt-4">Q3. How do you inject your insulin?</h6>
                                <strong><label>{{ $user->UserMedicalInfomation->inject_insulin==1?'Answer: Syringe & Vial':'' }}</label></strong>
                                <strong><label>{{ $user->UserMedicalInfomation->inject_insulin==2?'Answer: Pre-Filled Pen':'' }}</label></strong>
                                <strong><label>{{ $user->UserMedicalInfomation->inject_insulin==3?'Answer: Insulin Pump':'' }}</label></strong>
                                <h6 class="mt-4">Q4. Do you use a long or short needle?</h6>
                                <strong><label>Answer:{{ $user->UserMedicalInfomation->needle==1?'Yes':'No'}}</label></strong>



                                @endif
                                @endif

                            </div>
                        </div>
                    </div>
                    {{-- <h6 class="mt-2 main">01 Do you have any Diabetes? <strong><label
                                for="">{{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->diabetes==1?'Yes':'No':'-' }}
                            </label>
                        </strong></h6> --}}

                </div>
                {{-- @if($user->UserMedicalInfomation!=[])
                @if($user->UserMedicalInfomation->diabetes==1)
                <div class="col-lg-6">
                    <h6 class="mt-2">Q1. How many times a day do you test your blood sugar?</h6>
                    <strong><label for="">{{ $user->UserMedicalInfomation->test_blood }}
                        </label>
                    </strong>
                </div>
                <div class="col-lg-6">
                    <h6 class="mt-2">Q2. Do you use insulin to treat your diabetes?</h6>
                    <strong><label for="">{{ $user->UserMedicalInfomation->use_insulin==1?'Yes':'No' }}
                        </label>
                    </strong>
                </div>
                <div class="col-lg-6">
                    <h6 class="mt-2">Q3. How do you inject your insulin? </h6>
                    <strong><label for="">
                            {{ $user->UserMedicalInfomation->inject_insulin==1?'Syringe & Vial':'' }}
                            {{ $user->UserMedicalInfomation->inject_insulin==2?'Pre-Filled Pen':'' }}
                            {{ $user->UserMedicalInfomation->inject_insulin==3?'Insulin Pump':'' }}
                        </label>
                    </strong>
                </div>
                <div class="col-lg-6">
                    <h6 class="mt-2">Q4. Do you use a long or short needle?</h6>
                    <strong><label for="">{{ $user->UserMedicalInfomation->needle==1?'Yes':'No'}}
                        </label>
                    </strong>
                </div>
                @endif
                @endif --}}

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" id="heading_a">
                            <div id="inline_quiz">
                                <div class="div-quiz mt-3 text-right">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="div-quiz-num mt-3 text-right">
                                    <h6 class="num-quiz">02.</h6>
                                </div>
                                <div class="div2">
                                    <h6 class="mt-2">
                                        <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapse_a" aria-expanded="false" aria-controls="collapseOne">
                                                    Do you suffer from any of the following?
                                    </a>
                                    </h6>
                                </div>
                            </div>
                            {{-- <h6 class="mt-1">
                                <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse_a" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="fas fa-plus fasi"></i>02. Do you suffer from any of the following?
                            </a>
                            </h6> --}}
                        </div>
                        <div id="collapse_a" class="collapse" aria-labelledby="heading_a"
                            data-parent="#accordionExample">
                            <div class="card-body cbody">
                                @if($user->UserMedicalInfomation!=[])

                                @php
                                $split = str_split($user->UserMedicalInfomation->consistent_pain, 1);
                                @endphp
                                <strong><label>Answer:
                                {{ in_array('a', $split)?'Insomnia, ':'' }}
                                {{ in_array('b', $split)?'Difficulty sleeping/lack of consistent sleep, ':'' }}
                                {{ in_array('c', $split)?'Generalized Anxiety, ':'' }}
                                {{ in_array('d', $split)?'Panic attacks, ':'' }}
                                {{ in_array('e', $split)?'PTSD, ':'' }}
                                {{ in_array('f', $split)?'Consistent pain (such as low back, neck, leg), ':'' }}
                                {{ in_array('g', $split)?'Non of the above, ':'' }}</label></strong>
                                @endif

                            </div>
                        </div>
                    </div>
                    {{-- <h6 class="mt-2 main">02 Do you suffer from any of the following?
                    </h6> --}}
                </div>
                {{-- @if($user->UserMedicalInfomation!=[])

                @php
                $split = str_split($user->UserMedicalInfomation->consistent_pain, 1);
                @endphp

                <div class="col-lg-6">
                    <h6 class="mt-2">(1) Select one or more:</h6>
                    <strong><label for="">
                            {{ in_array('a', $split)?'Insomnia, ':'' }}
                            {{ in_array('b', $split)?'Difficulty sleeping/lack of consistent sleep, ':'' }}
                            {{ in_array('c', $split)?'Generalized Anxiety, ':'' }}
                            {{ in_array('d', $split)?'Panic attacks, ':'' }}
                            {{ in_array('e', $split)?'PTSD, ':'' }}
                            {{ in_array('f', $split)?'Consistent pain (such as low back, neck, leg), ':'' }}
                            {{ in_array('g', $split)?'Non of the above, ':'' }}
                        </label>
                    </strong>
                </div>
                @endif --}}



                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" id="heading_b">
                            <div id="inline_quiz">
                                <div class="div-quiz mt-3 text-right">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="div-quiz-num mt-3 text-right">
                                    <h6 class="num-quiz">03.</h6>
                                </div>
                                <div class="div2">
                                    <h6 class="mt-2">
                                        <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapse_b" aria-expanded="false" aria-controls="collapseOne">
                                                    Do you have personal history of cancer?
                                    </a>
                                    </h6>
                                </div>
                            </div>
                            {{-- <h6 class="mt-1">
                                <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse_b" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="fas fa-plus fasi"></i>03. Do you have personal history of cancer?
                            </a>
                            </h6> --}}
                        </div>
                        <div id="collapse_b" class="collapse" aria-labelledby="heading_b"
                            data-parent="#accordionExample">
                            <div class="card-body cbody">
                                <strong><label>Answer: {{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->personal_cancer==1?'Yes':'No':'-' }}</label></strong>
                                @if($user->UserMedicalInfomation!=[])
                                @if($user->UserMedicalInfomation->personal_cancer==1)
                                <h6 class="mt-4">Q1. Which cancer and what age?</h6>
                                <strong><label>Answer:
                                @foreach ($user->UserMedicalInfomation->cancer as $cancer)
                                <li>
                                    {{ $cancer->cancer->name }} - {{ $cancer->age }}&nbsp;years

                                </li>
                                @endforeach
                                @foreach ($user->userCancer as $cancer)
                                <li>
                                    {{ $cancer->cancer }} - {{$cancer->age }}&nbsp;years

                                 </li>
                                @endforeach
                                </label></strong>
                                <h6 class="mt-4">Are any of your indicated cancers currently active?</h6>
                                <strong><label>Answer:{{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->currently_active==1?'Yes':'No':'-' }}
                                </label></strong>
                                <h6 class="mt-4">Q1. Which Ones?</h6>
                                @if($user->UserMedicalInfomation->currently_active==1)
                                <strong><label>Answer:
                                {{ $user->UserMedicalInfomation->currently_active_name }}
                                </label></strong>
                                @endif
                                @endif
                                @endif

                            </div>
                        </div>
                    </div>
                    {{-- <h6 class="mt-2 main">03 Do you have personal history of cancer? <strong>
                            <label
                                for="">{{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->personal_cancer==1?'Yes':'No':'-' }}
                            </label>
                        </strong>
                    </h6>
                    </strong> --}}
                </div>
                {{-- @if($user->UserMedicalInfomation!=[])
                @if($user->UserMedicalInfomation->personal_cancer==1)

                <div class="col-lg-6">
                    <h6 class="mt-2">Q1. Which cancer and what age? </h6>
                    @foreach ($user->UserMedicalInfomation->cancer as $cancer)
                    <strong><label for="">Cancer: {{$cancer->cancer->name}}
                        </label>
                    </strong>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <strong><label for="">Age: {{$cancer->age}}
                        </label>
                    </strong>
                    <br>
                    @endforeach
                    @foreach ($user->userCancer as $cancer)
                    <strong><label for="">Cancer: {{$cancer->cancer}}
                        </label>
                    </strong>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <strong><label for="">Age: {{$cancer->age}}
                        </label>
                    </strong>
                    <br>
                    @endforeach

                    <h6 class="mt-2 main">Are any of your indicated cancers currently active? <strong><label
                                for="">{{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->currently_active==1?'Yes':'No':'-' }}
                            </label></h6>

                    </strong>
                    @if($user->UserMedicalInfomation->currently_active==1)

                    <div class="col-lg-6">
                        <h6 class="mt-2">Q1. Which Ones? </h6>
                        <strong><label for="">{{ $user->UserMedicalInfomation->currently_active_name }}
                            </label>
                        </strong>
                    </div>


                    @endif
                </div>

                @endif
                @endif --}}

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" id="heading_c">
                            <div id="inline_quiz">
                                <div class="div-quiz mt-3 text-right">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="div-quiz-num mt-3 text-right">
                                    <h6 class="num-quiz">04.</h6>
                                </div>
                                <div class="div2">
                                    <h6 class="mt-2">
                                        <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapse_c" aria-expanded="false" aria-controls="collapseOne">
                                                    Do you have a history of heart decease?
                                    </a>
                                    </h6>
                                </div>
                            </div>
                            {{-- <h6 class="mt-1">
                                <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse_c" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="fas fa-plus fasi"></i>04. Do you have a history of heart decease?
                            </a>
                            </h6> --}}
                        </div>
                        <div id="collapse_c" class="collapse" aria-labelledby="heading_c"
                            data-parent="#accordionExample">
                            <div class="card-body cbody">
                                <strong><label>Answer: {{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->per_heart_decease==1?'Yes':'No':'-' }}</label></strong>


                            </div>
                        </div>
                    </div>
                    {{-- <h6 class="mt-2 main">04 Do you have a history of heart decease? <strong><label
                                for="">{{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->per_heart_decease==1?'Yes':'No':'-' }}
                            </label>
                        </strong></h6> --}}

                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" id="heading_d">
                            <div id="inline_quiz">
                                <div class="div-quiz mt-3 text-right">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="div-quiz-num mt-3 text-right">
                                    <h6 class="num-quiz">05.</h6>
                                </div>
                                <div class="div2">
                                    <h6 class="mt-2">
                                        <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapse_d" aria-expanded="false" aria-controls="collapseOne">
                                                    Does your family have a history of heart
                                    </a>
                                    </h6>
                                </div>
                            </div>
                            {{-- <h6 class="mt-1">
                                <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse_d" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="fas fa-plus fasi"></i>05. Does your family have a history of heart
                            </a>
                            </h6> --}}
                        </div>
                        <div id="collapse_d" class="collapse" aria-labelledby="heading_d"
                            data-parent="#accordionExample">
                            <div class="card-body cbody">
                                <strong><label>Answer: {{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->fam_heart_decease==1?'Yes':'No':'-' }}</label></strong>

                            </div>
                        </div>
                    </div>
                    {{-- <h6 class="mt-2 main">05 Does your family have a history of heart
                        decease?<strong><label
                                for="">{{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->fam_heart_decease==1?'Yes':'No':'-' }}
                            </label>
                        </strong></h6> --}}

                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" id="heading_e">
                            <div id="inline_quiz">
                                <div class="div-quiz mt-3 text-right">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="div-quiz-num mt-3 text-right">
                                    <h6 class="num-quiz">06.</h6>
                                </div>
                                <div class="div2">
                                    <h6 class="mt-2">
                                        <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapse_e" aria-expanded="false" aria-controls="collapseOne">
                                                    Do you have a family history of any stomach, digestive, colon, pancreatic,
                                                    mouth, throat or liver cancer?
                                    </a>
                                    </h6>
                                </div>
                            </div>
                            {{-- <h6 class="mt-1">
                                <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse_e" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="fas fa-plus fasi"></i>06 Do you have a family history of any stomach, digestive, colon, pancreatic,
                                            mouth, throat or liver cancer?
                            </a>
                            </h6> --}}
                        </div>
                        <div id="collapse_e" class="collapse" aria-labelledby="heading_e"
                            data-parent="#accordionExample">
                            <div class="card-body cbody">
                                <strong><label>Answer: {{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->other_family_cancer==1?'Yes':'No':'-' }}</label></strong>
                                @if($user->UserMedicalInfomation!=[])
                                @if($user->UserMedicalInfomation->other_family_cancer==1)

                                @php
                                $split = str_split($user->UserMedicalInfomation->cancer_family_side, 1);
                                @endphp
                                <h6 class="mt-4">Q1. Cancer on maternal side or paternal side of family?</h6>
                                <strong><label>Answer:
                                {{ in_array('a', $split)?'Fathers side of the family':'' }}<br>
                                {{ in_array('b', $split)?'Mothers side of the family':'' }}<br>
                                {{ in_array('c', $split)?'I do not know, but there is or was Cancer':'' }}<br>
                                {{ in_array('d', $split)?'Both side of the family':'' }}</label></strong>

                                @endif
                                @endif

                            </div>
                        </div>
                    </div>
                    {{-- <h6 class="mt-2 main">06 Do you have a family history of any stomach, digestive, colon, pancreatic,
                        mouth, throat or liver cancer? <strong><label
                                for="">{{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->other_family_cancer==1?'Yes':'No':'-' }}
                            </label>
                        </strong></h6> --}}

                </div>
                {{-- @if($user->UserMedicalInfomation!=[])
                @if($user->UserMedicalInfomation->other_family_cancer==1)

                @php
                $split = str_split($user->UserMedicalInfomation->cancer_family_side, 1);
                @endphp

                <div class="col-lg-6">
                    <h6 class="mt-2">Q1. Cancer on maternal side or paternal side of family?</h6>
                    <strong><label for="">
                            {{ in_array('a', $split)?'Fathers side of the family':'' }}<br>
                            {{ in_array('b', $split)?'Mothers side of the family':'' }}<br>
                            {{ in_array('c', $split)?'I do not know, but there is or was Cancer':'' }}<br>
                            {{ in_array('d', $split)?'Both side of the family':'' }}
                        </label>
                    </strong>
                </div>

                @endif
                @endif --}}



                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" id="heading_f">
                            <div id="inline_quiz">
                                <div class="div-quiz mt-3 text-right">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="div-quiz-num mt-3 text-right">
                                    <h6 class="num-quiz">07.</h6>
                                </div>
                                <div class="div2">
                                    <h6 class="mt-2">
                                        <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapse_f" aria-expanded="false" aria-controls="collapseOne">
                                                    Have you ever had polyps or irregular findings such as polyps identified by
                                                    scan or colonoscopy?
                                    </a>
                                    </h6>
                                </div>
                            </div>
                            {{-- <h6 class="mt-1">
                                <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse_f" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="fas fa-plus fasi"></i>07 Have you ever had polyps or irregular findings such as polyps identified by
                                            scan or colonoscopy?
                            </a>
                            </h6> --}}
                        </div>
                        <div id="collapse_f" class="collapse" aria-labelledby="heading_f"
                            data-parent="#accordionExample">
                            <div class="card-body cbody">
                                <strong><label>Answer: {{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->scan==1?'Yes':'No':'-' }}</label></strong>
                                @if($user->UserMedicalInfomation!=[])
                                @if($user->UserMedicalInfomation->scan==1)
                                <h6 class="mt-4">Q1. Which Ones?</h6>
                                <strong><label>Answer: {{ $user->UserMedicalInfomation->polyps==1?'Yes':'No' }}</label></strong>
                                @endif
                                @endif

                            </div>
                        </div>
                    </div>
                    {{-- <h6 class="mt-2 main">07 Have you ever had polyps or irregular findings such as polyps identified by
                        scan or colonoscopy? <strong><label
                                for="">{{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->scan==1?'Yes':'No':'-' }}
                            </label>
                        </strong></h6> --}}

                </div>
                {{-- @if($user->UserMedicalInfomation!=[])
                @if($user->UserMedicalInfomation->scan==1)

                <div class="col-lg-6">
                    <h6 class="mt-2">Q1. Which Ones? </h6>
                    <strong><label for="">{{ $user->UserMedicalInfomation->polyps==1?'Yes':'No' }}
                        </label>
                    </strong>
                </div>

                @endif
                @endif --}}

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" id="heading_g">
                            <div id="inline_quiz">
                                <div class="div-quiz mt-3 text-right">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="div-quiz-num mt-3 text-right">
                                    <h6 class="num-quiz">08.</h6>
                                </div>
                                <div class="div2">
                                    <h6 class="mt-2">
                                        <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapse_g" aria-expanded="false" aria-controls="collapseOne">
                                                    Have you had any surgeries?
                                    </a>
                                    </h6>
                                </div>
                            </div>
                            {{-- <h6 class="mt-1">
                                <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse_g" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="fas fa-plus fasi"></i>08. Have you had any surgeries?
                            </a>
                            </h6> --}}
                        </div>
                        <div id="collapse_g" class="collapse" aria-labelledby="heading_g"
                            data-parent="#accordionExample">
                            <div class="card-body cbody">
                                <strong><label>Answer: {{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->surgeries==1?'Yes':'No':'-' }}</label></strong>
                                @if($user->UserMedicalInfomation!=[])
                                @if($user->UserMedicalInfomation->surgeries==1)
                                <h6 class="mt-4">Q1. List any surgeries you've had</h6>
                                <strong><label>Answer: {{ $user->UserMedicalInfomation->surgeries_list }}</label></strong>
                                @endif
                                @endif

                            </div>
                        </div>
                    </div>
                    {{-- <h6 class="mt-2 main">08 Have you had any surgeries? <strong><label
                                for="">{{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->surgeries==1?'Yes':'No':'-' }}
                            </label>
                        </strong></h6> --}}

                </div>
                {{-- @if($user->UserMedicalInfomation!=[])
                @if($user->UserMedicalInfomation->surgeries==1)

                <div class="col-lg-6">
                    <h6 class="mt-2">Q1. List any surgeries you've had </h6>
                    <strong><label for="">{{ $user->UserMedicalInfomation->surgeries_list }}
                        </label>
                    </strong>
                </div>

                @endif
                @endif --}}

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" id="heading_h">
                            <div id="inline_quiz">
                                <div class="div-quiz mt-3 text-right">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="div-quiz-num mt-3 text-right">
                                    <h6 class="num-quiz">09.</h6>
                                </div>
                                <div class="div2">
                                    <h6 class="mt-2">
                                        <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapse_h" aria-expanded="false" aria-controls="collapseOne">
                                                    Do you have any Pain?
                                    </a>
                                    </h6>
                                </div>
                            </div>
                            {{-- <h6 class="mt-1">
                                <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse_h" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="fas fa-plus fasi"></i>09. Do you have any Pain?
                            </a>
                            </h6> --}}
                        </div>
                        <div id="collapse_h" class="collapse" aria-labelledby="heading_h"
                            data-parent="#accordionExample">
                            <div class="card-body cbody">
                                <strong><label>Answer: {{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->pain==1?'Yes':'No':'-' }}</label></strong>
                                @if($user->UserMedicalInfomation!=[])
                                @if($user->UserMedicalInfomation->pain==1)
                                <h6 class="mt-4">Q1. Location of Pain? (like left leg, right foot, lower back, front of head and so
                                on)</h6>
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#painChartModal">Click here to
                                    view</a>
                                <br>
                                <h6 class="mt-4">Q2. Type of pain? (Example: sharp, throbbing, deep, consant, irregular)</h6>
                                <strong><label>Answer:
                                <ul>
                                    @foreach (\domain\Facades\MedicalConditionFacade::getPainTypes($user->id) as $pain_type)
                                    <li>
                                        <strong>
                                            <label for="">{{ $pain_type }}
                                            </label>
                                        </strong>
                                    </li>
                                    @endforeach
                                </ul>
                                </label></strong>
                                <h6 class="mt-4"> What do you take to relieve pain?</h6>
                                @if ($user->UserMedicalInfomation)
                                <strong><label>Answer:
                                @foreach($user->UserMedicalInfomation->painReliever as $pain_reliever)
                                <li>
                                    <strong>
                                        <label for="">{{ $pain_reliever->pain_reliever }}
                                        </label>
                                    </strong>
                                </li>
                                @endforeach
                                </label></strong>
                                @endif
                                <h6 class="mt-4">Q4. On a Scale of 1 to 10 for Pain what number are You?</h6>
                                <strong><label>Answer:
                                {{ $user->UserMedicalInfomation->pain_number==1?'1 Not very painful':'' }}
                                {{ $user->UserMedicalInfomation->pain_number==2?'2':'' }}
                                {{ $user->UserMedicalInfomation->pain_number==3?'3':'' }}
                                {{ $user->UserMedicalInfomation->pain_number==4?'4':'' }}
                                {{ $user->UserMedicalInfomation->pain_number==5?'5':'' }}
                                {{ $user->UserMedicalInfomation->pain_number==6?'6':'' }}
                                {{ $user->UserMedicalInfomation->pain_number==7?'7':'' }}
                                {{ $user->UserMedicalInfomation->pain_number==8?'8':'' }}
                                {{ $user->UserMedicalInfomation->pain_number==9?'9':'' }}
                                {{ $user->UserMedicalInfomation->pain_number==10?'10 Extreamly Painful':'' }}</label></strong>


                                @endif
                                @endif

                            </div>
                        </div>
                    </div>
                    {{-- <h6 class="mt-2 main">09 Do you have any Pain?<strong><label
                                for="">{{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->pain==1?'Yes':'No':'-' }}
                            </label>
                        </strong></h6> --}}

                </div>
                {{-- @if($user->UserMedicalInfomation!=[])
                @if($user->UserMedicalInfomation->pain==1)

                <div class="col-lg-6">
                    <h6 class="mt-2">Q1. Location of Pain? (like left leg, right foot, lower back, front of head and so
                        on) </h6>
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#painChartModal">Click here to
                        view</a>
                    <strong>
                        <label for="">{{ $user->UserMedicalInfomation->pain_location }}
                        </label>
                    </strong>
                </div>
                <div class="col-lg-6">
                    <h6 class="mt-2">Q2. Type of pain? (Example: sharp, throbbing, deep, consant, irregular) </h6>
                    <ul>
                        @foreach (\domain\Facades\MedicalConditionFacade::getPainTypes($user->id) as $pain_type)
                        <li>
                            <strong>
                                <label for="">{{ $pain_type }}
                                </label>
                            </strong>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-6">
                    <h6 class="mt-2">Q3. What do you take to relieve pain? </h6>
                    @if ($user->UserMedicalInfomation)
                    @foreach($user->UserMedicalInfomation->painReliever as $pain_reliever)
                    <li>
                        <strong>
                            <label for="">{{ $pain_reliever->pain_reliever }}
                            </label>
                        </strong>
                    </li>
                    @endforeach
                    @endif
                </div>
                <div class="col-lg-6">
                    <h6 class="mt-2">Q4. On a Scale of 1 to 10 for Pain what number are You? </h6>
                    <strong><label for="">
                            {{ $user->UserMedicalInfomation->pain_number==1?'1 Not very painful':'' }}
                            {{ $user->UserMedicalInfomation->pain_number==2?'2':'' }}
                            {{ $user->UserMedicalInfomation->pain_number==3?'3':'' }}
                            {{ $user->UserMedicalInfomation->pain_number==4?'4':'' }}
                            {{ $user->UserMedicalInfomation->pain_number==5?'5':'' }}
                            {{ $user->UserMedicalInfomation->pain_number==6?'6':'' }}
                            {{ $user->UserMedicalInfomation->pain_number==7?'7':'' }}
                            {{ $user->UserMedicalInfomation->pain_number==8?'8':'' }}
                            {{ $user->UserMedicalInfomation->pain_number==9?'9':'' }}
                            {{ $user->UserMedicalInfomation->pain_number==10?'10 Extreamly Painful':'' }}
                        </label>
                    </strong>
                </div>

                @endif
                @endif --}}

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" id="heading_i">
                            <div id="inline_quiz">
                                <div class="div-quiz mt-3 text-right">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="div-quiz-num mt-3 text-right">
                                    <h6 class="num-quiz">10.</h6>
                                </div>
                                <div class="div2">
                                    <h6 class="mt-2">
                                        <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapse_i" aria-expanded="false" aria-controls="collapseOne">
                                                    Do you have any Skin problems?
                                    </a>
                                    </h6>
                                </div>
                            </div>
                            {{-- <h6 class="mt-1">
                                <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse_i" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="fas fa-plus fasi"></i>10. Do you have any Skin problems?
                            </a>
                            </h6> --}}
                        </div>
                        <div id="collapse_i" class="collapse" aria-labelledby="heading_i"
                            data-parent="#accordionExample">
                            <div class="card-body cbody">
                                <strong><label>Answer: {{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->skin_problems==1?'Yes':'No':'-' }}</label></strong>
                                @if($user->UserMedicalInfomation!=[])
                                @if($user->UserMedicalInfomation->skin_problems==1)
                                <h6 class="mt-4"> List any skin problems</h6>
                                <strong><label>Answer: {{ $user->UserMedicalInfomation->skin_problems_list }}</label></strong>

                                @endif
                                @endif

                            </div>
                        </div>
                    </div>
                    {{-- <h6 class="mt-2 main">10 Do you have any Skin problems? <strong><label
                                for="">{{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->skin_problems==1?'Yes':'No':'-' }}
                            </label>
                        </strong></h6> --}}

                </div>
                {{-- @if($user->UserMedicalInfomation!=[])
                @if($user->UserMedicalInfomation->skin_problems==1)

                <div class="col-lg-6">
                    <h6 class="mt-2">Q1. List any skin problems</h6>
                    <strong><label for="">{{ $user->UserMedicalInfomation->skin_problems_list }}
                        </label>
                    </strong>
                </div>

                @endif
                @endif --}}

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" id="heading_j">
                            <div id="inline_quiz">
                                <div class="div-quiz mt-3 text-right">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="div-quiz-num mt-3 text-right">
                                    <h6 class="num-quiz">11.</h6>
                                </div>
                                <div class="div2">
                                    <h6 class="mt-2">
                                        <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapse_j" aria-expanded="false" aria-controls="collapseOne">
                                                    Do you have any scars?
                                    </a>
                                    </h6>
                                </div>
                            </div>
                            {{-- <h6 class="mt-1">
                                <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse_j" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="fas fa-plus fasi"></i>11. Do you have any scars?
                            </a>
                            </h6> --}}
                        </div>
                        <div id="collapse_j" class="collapse" aria-labelledby="heading_j"
                            data-parent="#accordionExample">
                            <div class="card-body cbody">
                                <strong><label>Answer: {{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->scars==1?'Yes':'No':'-' }}</label></strong>
                                @if($user->UserMedicalInfomation!=[])
                                @if($user->UserMedicalInfomation->scars==1)
                                <h6 class="mt-4">Q1. The Cause of Scars:</h6>
                                <strong><label>Answer: {{ $user->UserMedicalInfomation->scars_cause }}</label></strong>

                                @endif
                                @endif

                            </div>
                        </div>
                    </div>
                    {{-- <h6 class="mt-2 main">11 Do you have any scars? <strong><label
                                for="">{{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->scars==1?'Yes':'No':'-' }}
                            </label>
                        </strong></h6> --}}

                </div>
                {{-- @if($user->UserMedicalInfomation!=[])
                @if($user->UserMedicalInfomation->scars==1)

                <div class="col-lg-6">
                    <h6 class="mt-2">Q1. The Cause of Scars:</h6>
                    <strong><label for="">{{ $user->UserMedicalInfomation->scars_cause }}
                        </label>
                    </strong>
                </div>

                @endif
                @endif --}}


                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" id="heading_k">
                            <div id="inline_quiz">
                                <div class="div-quiz mt-3 text-right">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="div-quiz-num mt-3 text-right">
                                    <h6 class="num-quiz">12.</h6>
                                </div>
                                <div class="div2">
                                    <h6 class="mt-2">
                                        <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapse_k" aria-expanded="false" aria-controls="collapseOne">
                                                    Please check any medical problems you have now or have had in the past
                                    </a>
                                    </h6>
                                </div>
                            </div>
                            {{-- <h6 class="mt-1">
                                <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse_k" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="fas fa-plus fasi"></i>12 Please check any medical problems you have now or have had in the past
                            </a>
                            </h6> --}}
                        </div>
                        <div id="collapse_k" class="collapse" aria-labelledby="heading_k"
                            data-parent="#accordionExample">
                            <div class="card-body cbody">
                                <strong><label>Answer:
                                @if($user->UserMedicalInfomation!=[])
                                @if($user->UserMedicalInfomation->personalCondtion!=[])
                                @foreach ($user->UserMedicalInfomation->personalCondtion as $item)
                                {{ $item->medical->name }},
                                @endforeach
                                @if($user->UserMedicalInfomation->otherCondition==1)
                                @foreach ($user->UserMedicalInfomation->userOtherCondition as $condition)
                                {{ $condition->condition }},
                                @endforeach
                                @endif
                                @endif
                                @endif
                                </label></strong>

                            </div>
                        </div>
                    </div>
                    {{-- <h6 class="mt-2 main">12 Please check any medical problems you have now or have had in the past</h6> --}}

                </div>
                {{-- @if($user->UserMedicalInfomation!=[])
                @if($user->UserMedicalInfomation->personalCondtion!=[])

                <div class="col-lg-6">
                    <h6 class="mt-2">(1) Select One Or More</h6>
                    <strong><label for="">
                            @foreach ($user->UserMedicalInfomation->personalCondtion as $item)
                            {{ $item->medical->name }},
                            @endforeach
                            @if($user->UserMedicalInfomation->otherCondition==1)
                            @foreach ($user->UserMedicalInfomation->userOtherCondition as $condition)
                            {{ $condition->condition }},
                            @endforeach
                            @endif
                        </label>
                    </strong>
                </div>

                @endif
                @endif --}}

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" id="heading_l">
                            <div id="inline_quiz">
                                <div class="div-quiz mt-3 text-right">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="div-quiz-num mt-3 text-right">
                                    <h6 class="num-quiz">13.</h6>
                                </div>
                                <div class="div2">
                                    <h6 class="mt-2">
                                        <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapse_l" aria-expanded="false" aria-controls="collapseOne">
                                                    Please list any medical problems your family has or have had in the past.
                                                    (parents, brothers, sisters, children)
                                    </a>
                                    </h6>
                                </div>
                            </div>
                            {{-- <h6 class="mt-1">
                                <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse_l" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="fas fa-plus fasi"></i>13 Please list any medical problems your family has or have had in the past.
                                            (parents, brothers, sisters, children)
                            </a>
                            </h6> --}}
                        </div>
                        <div id="collapse_l" class="collapse" aria-labelledby="heading_l"
                            data-parent="#accordionExample">
                            <div class="card-body cbody">
                                @if($user->UserMedicalInfomation!=[])
                                @if($user->UserMedicalInfomation->familyCondition!=[])
                                <strong><label>Answer:
                                @foreach ($user->UserMedicalInfomation->familyCondition as $item)
                                {{ $item->medical->name }},
                                @endforeach
                                </label></strong>
                                @endif
                                @endif

                            </div>
                        </div>
                    </div>
                    {{-- <h6 class="mt-2 main">13 Please list any medical problems your family has or have had in the past.
                        (parents, brothers, sisters, children)</h6> --}}

                </div>
                {{-- @if($user->UserMedicalInfomation!=[])
                @if($user->UserMedicalInfomation->familyCondition!=[])

                <div class="col-lg-6">
                    <h6 class="mt-2">(1) Select One Or More</h6>
                    <strong><label for="">
                            @foreach ($user->UserMedicalInfomation->familyCondition as $item)
                            {{ $item->medical->name }},
                            @endforeach
                        </label>
                    </strong>
                </div>

                @endif
                @endif --}}


                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" id="heading_m">
                            <div id="inline_quiz">
                                <div class="div-quiz mt-3 text-right">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="div-quiz-num mt-3 text-right">
                                    <h6 class="num-quiz">14.</h6>
                                </div>
                                <div class="div2">
                                    <h6 class="mt-2">
                                        <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapse_m" aria-expanded="false" aria-controls="collapseOne">
                                                    Please check if you take any of the following.
                                    </a>
                                    </h6>
                                </div>
                            </div>
                            {{-- <h6 class="mt-1">
                                <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse_m" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="fas fa-plus fasi"></i>14. Please check if you take any of the following.
                            </a>
                            </h6> --}}
                        </div>
                        <div id="collapse_m" class="collapse" aria-labelledby="heading_m"
                            data-parent="#accordionExample">
                            <div class="card-body cbody">
                                @if($user->UserMedicalInfomation!=[])
                                @if($user->UserMedicalInfomation->medication_name!=[])

                                @php
                                $split = str_split($user->UserMedicalInfomation->medication_name, 1);
                                @endphp
                                <strong><label>Answer:
                                {{ in_array("a", $split)?'Blood pressure medications (hydrochlorothiazide, metoprolol, diovan)':'' }}
                                {{ in_array('b', $split)?'Diabetic medications (metformin, glipizide, insulin)':'' }}
                                {{ in_array('c', $split)?'Thyroid medications (synthroid, levothyroxine, thyroxine)':'' }}
                                {{ in_array('d', $split)?'Muscle relaxers (flexaril, robaxin, cyclobenzaprine)':'' }}
                                {{ in_array('e', $split)?'Any Narcotics? (oxycodone, percocet, morphine)':'' }}
                                {{ in_array('f', $split)?'Cholesterol medications (atorvastatin, lipitor)':'' }}
                                {{ in_array('g', $split)?'Antibiotics (currently on) (cipro, levaquin, floxin)':'' }}
                                {{ in_array('h', $split)?'Stomach or gerd medications (prilosex, nexium, pantoprazole)':'' }}
                                {{ in_array('i', $split)?'Mood medications (risperdal, cymbalta, duloxetine)':'' }}
                                {{ in_array('j', $split)?'Pain Relievers (motrin, tylenol, ibuprophen)':'' }}
                                {{ in_array('k', $split)?'Non of the above':'' }}</label></strong>
                                @endif
                                @endif


                            </div>
                        </div>
                    </div>
                    {{-- <h6 class="mt-2 main">14 Please check if you take any of the following.</h6> --}}

                </div>
                {{-- @if($user->UserMedicalInfomation!=[])
                @if($user->UserMedicalInfomation->medication_name!=[])

                @php
                $split = str_split($user->UserMedicalInfomation->medication_name, 1);
                @endphp

                <div class="col-lg-6">

                    <strong><label
                            for="">
                            {{ in_array("a", $split)?'Blood pressure medications (hydrochlorothiazide, metoprolol, diovan)':'' }}
                            {{ in_array('b', $split)?'Diabetic medications (metformin, glipizide, insulin)':'' }}
                            {{ in_array('c', $split)?'Thyroid medications (synthroid, levothyroxine, thyroxine)':'' }}
                            {{ in_array('d', $split)?'Muscle relaxers (flexaril, robaxin, cyclobenzaprine)':'' }}
                            {{ in_array('e', $split)?'Any Narcotics? (oxycodone, percocet, morphine)':'' }}
                            {{ in_array('f', $split)?'Cholesterol medications (atorvastatin, lipitor)':'' }}
                            {{ in_array('g', $split)?'Antibiotics (currently on) (cipro, levaquin, floxin)':'' }}
                            {{ in_array('h', $split)?'Stomach or gerd medications (prilosex, nexium, pantoprazole)':'' }}
                            {{ in_array('i', $split)?'Mood medications (risperdal, cymbalta, duloxetine)':'' }}
                            {{ in_array('j', $split)?'Pain Relievers (motrin, tylenol, ibuprophen)':'' }}
                            {{ in_array('k', $split)?'Non of the above':'' }}
                        </label>
                    </strong>
                </div>

                @endif
                @endif --}}

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" id="heading_n">
                            <div id="inline_quiz">
                                <div class="div-quiz mt-3 text-right">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="div-quiz-num mt-3 text-right">
                                    <h6 class="num-quiz">15.</h6>
                                </div>
                                <div class="div2">
                                    <h6 class="mt-2">
                                        <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapse_n" aria-expanded="false" aria-controls="collapseOne">
                                                    Please list any medications including prescription, supplements and over
                                                    the
                                                    counter.
                                    </a>
                                    </h6>
                                </div>
                            </div>
                            {{-- <h6 class="mt-1">
                                <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse_n" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="fas fa-plus fasi"></i>15 Please list any medications including prescription, supplements and over
                                            the
                                            counter.
                            </a>
                            </h6> --}}
                        </div>
                        <div id="collapse_n" class="collapse" aria-labelledby="heading_n"
                            data-parent="#accordionExample">
                            <div class="card-body cbody">
                                @if($user->UserMedicalInfomation!=[])
                                @if($user->UserMedicalInfomation->personalMedication!=[])
                                <strong><label>Answer:
                                @foreach ($user->UserMedicalInfomation->personalMedication as $item)
                                {{ $item->medication->name }},
                                @endforeach
                                </label></strong>
                                @if($user->UserMedicalInfomation->otherMedicationList==1)
                                <strong><label>Answer:
                                @foreach ($user->UserMedicalInfomation->UserOtherMedication as $condition)
                                {{ $condition->condition }},
                                @endforeach
                                </label></strong>
                                @endif
                                @endif
                                <h6 class="mt-4">Do you have trouble managing your medication?</h6>
                                <strong><label>Answer: {{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->trouble==1?'Yes':'No':'-' }}</label></strong>
                                @if($user->UserMedicalInfomation->trouble==1)
                                <strong><label>Answer:
                                @foreach ($user->UserMedicalInfomation->userSymptom as $item)
                                {{ $item->symptom->name }},
                                @endforeach
                                </label></strong>
                                @endif
                                @endif

                            </div>
                        </div>
                    </div>
                    {{-- <h6 class="mt-2 main">15 Please list any medications including prescription, supplements and over
                        the
                        counter.</h6> --}}

                </div>
                {{-- @if($user->UserMedicalInfomation!=[])
                @if($user->UserMedicalInfomation->personalMedication!=[])

                <div class="col-lg-6">
                    <h6 class="mt-2">(1) Select One Or More</h6>
                    <strong><label for="">
                            @foreach ($user->UserMedicalInfomation->personalMedication as $item)
                            {{ $item->medication->name }},
                            @endforeach
                            @if($user->UserMedicalInfomation->otherMedicationList==1)
                            @foreach ($user->UserMedicalInfomation->UserOtherMedication as $condition)
                            {{ $condition->condition }},
                            @endforeach
                            @endif
                        </label>
                    </strong>
                </div>

                @endif

                <div class="col-lg-12">
                    <h6 class="mt-2 main">Do you have trouble managing your medication?<strong><label
                                for="">{{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->trouble==1?'Yes':'No':'-' }}
                            </label>
                        </strong></h6>

                </div>
                @if($user->UserMedicalInfomation->trouble==1)
                <div class="col-lg-6">
                    <strong><label for="">
                            @foreach ($user->UserMedicalInfomation->userSymptom as $item)
                            {{ $item->symptom->name }},
                            @endforeach
                        </label>
                    </strong>
                </div>
                @endif
                @endif --}}


                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" id="heading_o">
                            <div id="inline_quiz">
                                <div class="div-quiz mt-3 text-right">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="div-quiz-num mt-3 text-right">
                                    <h6 class="num-quiz">16.</h6>
                                </div>
                                <div class="div2">
                                    <h6 class="mt-2">
                                        <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapse_o" aria-expanded="false" aria-controls="collapseOne">
                                                    Are you allergic to any medications, dyes and/or latex?
                                    </a>
                                    </h6>
                                </div>
                            </div>
                            {{-- <h6 class="mt-1">
                                <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse_o" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="fas fa-plus fasi"></i>16. Are you allergic to any medications, dyes and/or latex?
                            </a>
                            </h6> --}}
                        </div>
                        <div id="collapse_o" class="collapse" aria-labelledby="heading_o"
                            data-parent="#accordionExample">
                            <div class="card-body cbody">
                                <strong><label>Answer: {{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->allergies==1?'Yes':'No':'-' }}</label></strong>
                                @if($user->UserMedicalInfomation!=[])
                                @if($user->UserMedicalInfomation->allergies==1)
                                <h6 class="mt-4">Q1. List the all of them</h6>
                                <strong><label>Answer: {{ $user->UserMedicalInfomation->allergies_list }}</label></strong>
                                <h6 class="mt-4">Q2. Please give pharmacy (s) name and location (s)</h6>
                                <strong><label>Answer: {{ $user->UserMedicalInfomation->pharmacy_location }}</label></strong>
                                @endif
                                @endif

                            </div>
                        </div>
                    </div>
                    {{-- <h6 class="mt-2 main">16 Are you allergic to any medications, dyes and/or latex?<strong><label
                                for="">{{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->allergies==1?'Yes':'No':'-' }}
                            </label>
                        </strong></h6> --}}

                </div>
                {{-- @if($user->UserMedicalInfomation!=[])
                @if($user->UserMedicalInfomation->allergies==1)

                <div class="col-lg-6">
                    <h6 class="mt-2">Q1. List the all of them</h6>
                    <strong><label for="">{{ $user->UserMedicalInfomation->allergies_list }}
                        </label>
                    </strong>
                </div>

                <div class="col-lg-6">
                    <h6 class="mt-2">Q2. Please give pharmacy (s) name and location (s)</h6>
                    <strong><label for="">{{ $user->UserMedicalInfomation->pharmacy_location }}
                        </label>
                    </strong>
                </div>

                @endif
                @endif --}}


                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" id="heading_p">
                            <div id="inline_quiz">
                                <div class="div-quiz mt-3 text-right">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="div-quiz-num mt-3 text-right">
                                    <h6 class="num-quiz">17.</h6>
                                </div>
                                <div class="div2">
                                    <h6 class="mt-2">
                                        <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapse_p" aria-expanded="false" aria-controls="collapseOne">
                                                    Do you receive medical supplies on a regular basis? (oxygen, diabetes
                                                    supplies)
                                    </a>
                                    </h6>
                                </div>
                            </div>
                            {{-- <h6 class="mt-1">
                                <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse_p" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="fas fa-plus fasi"></i>17 Do you receive medical supplies on a regular basis? (oxygen, diabetes
                                            supplies)
                            </a>
                            </h6> --}}
                        </div>
                        <div id="collapse_p" class="collapse" aria-labelledby="heading_p"
                            data-parent="#accordionExample">
                            <div class="card-body cbody">
                                <strong><label>Answer: {{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->medical_supplies==1?'Yes':'No':'-' }}<br></label></strong>
                                @if($user->UserMedicalInfomation!=[])
                                @if($user->UserMedicalInfomation->medical_supplies==1)
                                <h6 class="mt-4">Please enter what supplies you currently receive</h6>
                                <strong><label>Answer: {{ $user->UserMedicalInfomation->receive_desc }}</label></strong>
                                @endif
                                @endif

                            </div>
                        </div>
                    </div>
                    {{-- <h6 class="mt-2 main">17 Do you receive medical supplies on a regular basis? (oxygen, diabetes
                        supplies) <strong><label
                                for="">{{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->medical_supplies==1?'Yes':'No':'-' }}
                            </label>
                        </strong></h6> --}}

                </div>
                {{-- @if($user->UserMedicalInfomation!=[])
                @if($user->UserMedicalInfomation->medical_supplies==1)

                <div class="col-lg-6">
                    <h6 class="mt-2">Please enter what supplies you currently receive</h6>
                    <strong><label for="">{{ $user->UserMedicalInfomation->receive_desc }}
                        </label>
                    </strong>
                </div>
                @endif
                @endif --}}


                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" id="heading_q">
                            <div id="inline_quiz">
                                <div class="div-quiz mt-3 text-right">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="div-quiz-num mt-3 text-right">
                                    <h6 class="num-quiz">18.</h6>
                                </div>
                                <div class="div2">
                                    <h6 class="mt-2">
                                        <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapse_q" aria-expanded="false" aria-controls="collapseOne">
                                                    Do you drink alcohol?
                                    </a>
                                    </h6>
                                </div>
                            </div>
                            {{-- <h6 class="mt-1">
                                <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse_q" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="fas fa-plus fasi"></i>18. Do you drink alcohol?
                            </a>
                            </h6> --}}
                        </div>
                        <div id="collapse_q" class="collapse" aria-labelledby="heading_q"
                            data-parent="#accordionExample">
                            <div class="card-body cbody">
                                <strong><label>Answer: {{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->drink_alcohol==1?'Yes':'No':'-' }}</label></strong>
                                @if($user->UserMedicalInfomation!=[])
                                @if($user->UserMedicalInfomation->drink_alcohol==1)
                                <h6 class="mt-4">Q1. How many drinks per day?</h6>
                                <strong><label>Answer: {{ $user->UserMedicalInfomation->drink_per_day }}</label></strong>

                                <h6 class="mt-4">Q2. How many years?</h6>
                                <strong><label>Answer: {{ $user->UserMedicalInfomation->drink_year }}</label></strong>
                                <h6 class="mt-4">Q3. Have you ever felt guilty about your drinking habits?</h6>
                                <strong><label>Answer: {{ $user->UserMedicalInfomation->drink_habit==1?'Yes':'No' }}</label></strong>
                                @endif
                                @endif

                            </div>
                        </div>
                    </div>
                    {{-- <h6 class="mt-2 main">18 Do you drink alcohol? <strong><label
                                for="">{{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->drink_alcohol==1?'Yes':'No':'-' }}
                            </label>
                        </strong></h6> --}}

                </div>
                {{-- @if($user->UserMedicalInfomation!=[])
                @if($user->UserMedicalInfomation->drink_alcohol==1)

                <div class="col-lg-6">
                    <h6 class="mt-2">Q1. How many drinks per day?</h6>
                    <strong><label for="">{{ $user->UserMedicalInfomation->drink_per_day }}
                        </label>
                    </strong>
                </div>

                <div class="col-lg-6">
                    <h6 class="mt-2">Q2. How many years?</h6>
                    <strong><label for="">{{ $user->UserMedicalInfomation->drink_year }}
                        </label>
                    </strong>
                </div>
                <div class="col-lg-6">
                    <h6 class="mt-2">Q3. Have you ever felt guilty about your drinking habits?</h6>
                    <strong><label for="">{{ $user->UserMedicalInfomation->drink_habit==1?'Yes':'No' }}
                        </label>
                    </strong>
                </div>

                @endif
                @endif --}}


                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" id="heading_r">
                            <div id="inline_quiz">
                                <div class="div-quiz mt-3 text-right">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="div-quiz-num mt-3 text-right">
                                    <h6 class="num-quiz">19.</h6>
                                </div>
                                <div class="div2">
                                    <h6 class="mt-2">
                                        <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapse_r" aria-expanded="false" aria-controls="collapseOne">
                                                    Do you smoke cigarettes?
                                    </a>
                                    </h6>
                                </div>
                            </div>
                            {{-- <h6 class="mt-1">
                                <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse_r" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="fas fa-plus fasi"></i>19. Do you smoke cigarettes?
                            </a>
                            </h6> --}}
                        </div>
                        <div id="collapse_r" class="collapse" aria-labelledby="heading_r"
                            data-parent="#accordionExample">
                            <div class="card-body cbody">
                                <strong><label>Answer: {{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->smoke==1?'Yes':'No':'-' }}</label></strong>
                                @if($user->UserMedicalInfomation!=[])
                                @if($user->UserMedicalInfomation->smoke==1)
                                <h6 class="mt-4">Q1. How many packs per day?</h6>
                                <strong><label>Answer: {{ $user->UserMedicalInfomation->packs_per_day }}</label></strong>
                                <h6 class="mt-4">Q2. How many years?</h6>
                                <strong><label>Answer: {{ $user->UserMedicalInfomation->smoke_year }}</label></strong>
                                <h6 class="mt-4">Q3. have you tried to quit within the last 12 months?</h6>
                                <strong><label>Answer: {{ $user->UserMedicalInfomation->quit_smoke==1?'Yes':'No' }}</label></strong>
                                @endif
                                @endif

                            </div>
                        </div>
                    </div>
                    {{-- <h6 class="mt-2 main">19 Do you smoke cigarettes? <strong><label
                                for="">{{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->smoke==1?'Yes':'No':'-' }}
                            </label>
                        </strong></h6> --}}

                </div>
                {{-- @if($user->UserMedicalInfomation!=[])
                @if($user->UserMedicalInfomation->smoke==1)

                <div class="col-lg-6">
                    <h6 class="mt-2">Q1. How many packs per day?</h6>
                    <strong><label for="">{{ $user->UserMedicalInfomation->packs_per_day }}
                        </label>
                    </strong>
                </div>

                <div class="col-lg-6">
                    <h6 class="mt-2">Q2. How many years?</h6>
                    <strong><label for="">{{ $user->UserMedicalInfomation->smoke_year }}
                        </label>
                    </strong>
                </div>
                <div class="col-lg-6">
                    <h6 class="mt-2">Q3. have you tried to quit within the last 12 months?</h6>
                    <strong><label for="">{{ $user->UserMedicalInfomation->quit_smoke==1?'Yes':'No' }}
                        </label>
                    </strong>
                </div>

                @endif
                @endif --}}

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" id="heading_s">
                            <div id="inline_quiz">
                                <div class="div-quiz mt-3 text-right">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="div-quiz-num mt-3 text-right">
                                    <h6 class="num-quiz">20.</h6>
                                </div>
                                <div class="div2">
                                    <h6 class="mt-2">
                                        <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapse_s" aria-expanded="false" aria-controls="collapseOne">
                                                    In the past 2 weeks, have you felt depressed, anxious, nervous, hopeless or
                                                    worried?
                                    </a>
                                    </h6>
                                </div>
                            </div>
                            {{-- <h6 class="mt-1">
                                <a class="btn btn-link blink collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse_s" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="fas fa-plus fasi"></i>20 In the past 2 weeks, have you felt depressed, anxious, nervous, hopeless or
                                            worried?
                            </a>
                            </h6> --}}
                        </div>
                        <div id="collapse_s" class="collapse" aria-labelledby="heading_s"
                            data-parent="#accordionExample">
                            <div class="card-body cbody">
                                <strong><label>Answer: {{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->worried==1?'Yes':'No':'-' }}</label></strong>
                                <br>
                                <h6 class="mt-4"> Is this affecting your day to day life?</h6>
                                <strong><label>Answer:{{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->affecting==1?'Yes':'No':'-' }}</label></strong>
                                <br>
                                <h6 class="mt-4"> Do you have trouble remembering things daily?</h6>
                                <strong><label>Answer: {{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->trouble_remembering==1?'Yes':'No':'-' }}</label></strong>

                            </div>
                        </div>
                    </div>
                    {{-- <h6 class="mt-2 main">In the past 2 weeks, have you felt depressed, anxious, nervous, hopeless or
                        worried? <strong><label
                                for="">{{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->worried==1?'Yes':'No':'-' }}
                            </label>
                        </strong> </h6> --}}

                </div>

                {{-- <div class="col-lg-12">
                    <h6 class="mt-2 main">Is this affecting your day to day life? <strong><label
                                for="">{{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->affecting==1?'Yes':'No':'-' }}
                            </label>
                        </strong></h6>

                </div>
                <div class="col-lg-12">
                    <h6 class="mt-2 main">Do you have trouble remembering things daily?<strong><label
                                for="">{{ $user->UserMedicalInfomation!=[]?$user->UserMedicalInfomation->trouble_remembering==1?'Yes':'No':'-' }}
                            </label>
                        </strong></h6>

                </div> --}}
            </div>
            </div>
        </div>
    </div>
</div>

@include('Admin.pages.user-page-models.pain-chart-modal')
