@extends('Public.Layouts.app')
@section('content')

<div class="page animated" style="animation-duration: 500ms;">
    <!-- Page Header-->
    <header class="page-head">

    </header>
    <!-- Modern Breadcrumbs-->
    <section class="breadcrumb-modern context-dark text-md-left">
        <div class="shell section-34 section-md-top-110 section-md-bottom-41">
            <h2>Physician</h2>
            <ul class="list-inline list-inline-arrows p offset-top-34 offset-md-top-70">
                <li><a class="text-white" href="{{ route('home') }}">Home&nbsp;</a>
                </li>
                <i class="fas fa-xs fa-arrow-right"></i>
                <li class="text-white-50">Physician
                </li>
            </ul>
        </div>
    </section>
    <!-- Our Physicians -->
    <section class="section-98 section-sm-110 ml-5 mr-5">
        <!-- Header -->
        <div class="col-lg-12 mt-3 mb-5">
            <div class="row main-header justify-content-center">
                Create A Truly Care-Free Practice - Patient Centric and Profitable!
            </div>
        </div>
        <!-- Crete your free account  -->

        <div class="col-lg-11">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="row ">
                        <img class="physician-img" src="{{ asset('img/physician.jpg') }}" alt="physician">
                    </div>
                </div>
                <div class="col-lg-7 mt-2 physician-offers">
                    <ul>
                        <li>Attract More Patients</li>
                        <li>Increase Patient Encounters</li>
                        <li>Boost Revenue Per Patient</li>
                        <li>Better Patient Outcomes</li>
                        <li>Receive upto <b>$900,000</b> Just to Start Out!</li>
                    </ul>
                    <div class="row">
                        <div class="col-lg-12 mt-4">
                            <div class="row justify-content-center reg-btn left-btn">

                            <h6 class="text-center">
                            <a href="{{ route('pcp-register') }}" class="btn btn-primary">Create
                                Your Free Account Now</a></h6>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- section two -->
    <section class="section2 section-sm-110 ml-5 mr-5">
        <div class="col-lg-12 ">
            <div class="row main-header justify-content-center mb-5">
                Take Your Practice To The Next Level!
            </div>

            <div class="col-lg-12 mb-3 physician-offers">
                <div class="row justify-content-center mb-5">
                    <ul>
                        <li>Recover <b>$10,100+</b> within 30 days of creating your account</li>
                        <li>Offer cutting edge,hands-free HRA to your patients</li>
                        <li>Automated recurring monthly revenue with pre-designed
                            continuum patient <br> care via telehealth
                            program</li>
                        <li>Streamline your practice with automated patient management</li>
                        <li>Works seamlessly with your existing EHR/EMR systems</li>
                    </ul>
                </div>

            </div>
            <div class="col-lg-12">
                <div class="row justify-content-center mt-5">
                <h6 class="text-center">
                <a href="" class="btn btn-primary">Start Your Zero
                    Account Now!</a>
                </h6>
                </div>
            </div>
            <div class="row justify-content-center">
                <a href="#">or click here watch a demo</a>
            </div>
        </div>
    </section>
    <!-- section three -->
    {{-- <section class="Start-zero-account">
        <div class="container">
            <div class="row justify-content-center start-zero">
                <div class="col-lg-8">
                    <h6 class="text-center">
                    <a href="" class="btn btn-primary">Start Your Zero
                        Account Now!</a>
                    </h6>
                </div>

            </div>
            <div class="row justify-content-center mb-5">
                <a href="#">or click here watch a demo</a>
            </div>
        </div>
    </section> --}}

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

    .physician-img {
        width: 100%;
        height: 100%;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        display: block;
    }

    .physician-offers {

        font-size: 25px;
    }

    .main-header {

        font-size: 35px;
        font-family: asap, sans-serif;


    }
    .left-btn{
        margin-right: 110px !important;
    }

    .btn:hover {
        background-color: #1D86BC;
        color: white;
        border-color: #1D86BC;
    }

    @media only screen and (max-width: 768px) {

        /* For mobile phones: */
        [class*="ml-5"] {
            margin-left: 1rem!important;

        }
        [class*="mr-5"] {
            margin-right: 1rem!important;

        }
        [class*="reg-btn"] {
            margin-left: 110px !important;

        }
        [class*="main-header"] {
            font-size: 25px !important;
            line-height: 1.5;

        }
        [class*="physician-offers"] {
            font-size: 19px !important;

        }
    }

</style>

@endsection
@section('js')
<script>
    $(document).ready(function () {
        $('.color-chng').removeClass('text-white');
        $('.icon-gray-light').removeClass('icon-white-17');
        $('ul').find('li.active').removeClass('active');
        $('#physician').addClass('active');
    });

</script>

@endsection
