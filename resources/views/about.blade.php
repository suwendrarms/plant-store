@extends('Public.Layouts.app')
@section('content')
<section class="about-page-sec">
    <div class="banner">
        <div class="overly"></div>
        <div class="container ml-5 pl-5">
            <h2>About Us</h2>
        </div>
    </div>
    <div class="container my-3">
        <h2 class="text-center">About Us</h2>
        <p class="my-3">CareFree provides high-quality, physician-ordered, genetic testing. We include support for
            physicians, as well as genetic counseling as part of every testing procedure. Our goal is to provide
            awareness of genetic testing to help provide results of common hereditary cancers and to help save lives.
        </p>
        <br>
    </div>
    <div class="container">
        <div class="row ">
            <!-- Get Approved -->
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-header h5"><i class="fas fa-user-shield"></i> Get Approved</div>
                    <img src="{!! asset('home/img/customer-service.jpg') !!}"
                        class="card-img img-fluid mx-auto d-block">
                    <div class="card-body">
                        <p class="card-text">One of our physicians will review your medical history using our Electronic
                            Health Records platform to determine your testing needs.</p>
                    </div>
                </div>
            </div>
            <!--Get Swabbed-->
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-header h5"><i class="fas fa-dna"></i> Get Swabbed</div>
                    <img src="{!! asset('home/img/DNA_swab.jpg') !!}" class="card-img img-fluid mx-auto d-block">
                    <div class="card-body">
                        <p class="card-text">Once you have been approved, Your kit will be mailed to you. You swab
                            according to the enclosed instructions. Then mail the kit to the lab fulfillment center for
                            analysis. </p>
                    </div>
                </div>
            </div>
            <!-- Get Results -->
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-header h5"><i class="fas fa-user-md"></i> Get Results</div>
                    <img src="{!! asset('home/img/cancer-screening.jpg') !!}"
                        class="card-img img-fluid mx-auto d-block">
                    <div class="card-body">
                        <p class="card-text">Lab results are uploaded into our Electronic Health Record platform. A
                            board certified physician or genetic counselor is provided to discuss the results.</p>
                    </div>
                </div>
            </div>
        </div>
        <br> <br>
        <div class="row pb-5">
            <a class="btn btn-success btn-lg mx-auto d-block" href="{{ route('register') }}" role="button">Get
                Registered Now</a>
        </div>
    </div>
</section>
@endsection
