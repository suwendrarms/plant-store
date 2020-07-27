@extends('Public.Layouts.app')
@section('content')

<div class="page animated" style="animation-duration: 500ms;">
    <!-- Page Header-->
    <header class="page-head">

    </header>
    <!-- Modern Breadcrumbs-->
    <section class="bg-covid-image context-dark text-md-left">
        <div class="shell section-34 section-md-top-110 section-md-bottom-41">
            <h2>Covid-19</h2>
            <ul class="list-inline list-inline-arrows p offset-top-34 offset-md-top-70">
                <li><a class="text-white" href="{{ route('home') }}"></a>
                </li>

                <li class="text-white-50">
                </li>
            </ul>
            {{-- <div class="background background-image" style="background-image: url(https://cv19kit.com/wp-content/uploads/2016/11/ewscripps.brightspotcdn.jpg);max-width:100%;height:400px;filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='https://cv19kit.com/wp-content/uploads/2016/11/ewscripps.brightspotcdn.jpg', sizingMethod='scale');" data-imgwidth="1280">
            </div> --}}
        </div>
    </section>
    <!-- Our Customers-->
    <section class="section-98 section-sm-110">
        <div class="shell">
            <div class="range range-xs-center range-md-left">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="text-lefts">
                                <strong>CareFreeNow can help you and your loved ones gain the peace of mind
                                    during the Covid-19
                                    pandemic.</strong>
                            </h4>
                            <h5>On creating your account, you will be prompted with a few questions that will help
                                identify your risks, and help you prepare by providing:</h5>
                            <ul>
                                <li> At-home Testing options</li>
                                <li>Self-screening directions</li>
                                <li>Access to your PCP via telemedicine</li>
                                <li>First-line-of-defense products such as masks, gloves, hand sanitizers and so on.
                                </li>
                            </ul>
                            <h4>During this time, we are also making all sections of CareFreeNow available at no cost to
                                ensure health risk assessments can be completed without any concerns. </h4>


                        </div>
                        <div class="col-lg-12" style="margin-top:50px;">
                            <h6 class="text-center">
                                <a href="{{ route('register') }}" class="btn btn-primary">Get Started Now</a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('css')
<style>
    .breadcrumb-modern {
        margin-top: 13%;
    }

    .color-chng {
        color: #2a93c9;
    }

    .icon-gray-light {
        background: #e5e5e5;
    }

    .bg-covid-image {
        background: url("{{ asset('../publicArea/images/covid.jpg') }}");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        margin-top: 170px;

    }

</style>

@endsection
@section('js')
<script>
    $(document).ready(function () {
        $('.color-chng').removeClass('text-white');
        $('.icon-gray-light').removeClass('icon-white-17');
        $('ul').find('li.active').removeClass('active');
        $('#work').addClass('active');
    });

</script>

@endsection
