@extends('Public.Layouts.app')
@section('content')
<div class="page text-center">
    <!-- Page Head-->
    <header class="page-head page-head-main">
        <div class="swiper-wrapper">
            <div class="swiper-container swiper-slider bg-white" data-loop="true" data-height=""
                data-slide-effect="fade" data-dragable="false" data-min-height="400px" data-autoplay="5000">
                <div class="swiper-wrapper text-center">
                    <div class="swiper-slide" id="page-loader"
                        data-slide-bg="{{ asset('publicArea/images/slide-01.jpg') }}">
                        <div class="swiper-caption">
                            <div class="swiper-slide-caption">
                                <div class="shell">
                                    <div class="range">
                                        <div class="cell-md-7 section-slider-custom">
                                            <div class="inset-lg-right-80 text-md-left">
                                                <h2>Take Care of<br class="veil reveal-md-block"> Your Health
                                                </h2>
                                                <h5 class="veil reveal-md-block mw-400">At Care Free Now, we are
                                                    dedicated
                                                    to diagnosing all kinds of diseases.</h5><a
                                                    class="btn btn-ellipse btn-white offset-top-24"
                                                    href="{{ route('login') }}">get
                                                    started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-slide-bg="{{ asset('publicArea/images/slide-02.jpg') }}">
                        <div class="swiper-caption">
                            <div class="swiper-slide-caption">
                                <div class="shell">
                                    <div class="range">
                                        <div class="cell-md-6 section-slider-custom to-front">
                                            <div class="text-md-left">
                                                <h2>Years of<br class="veil reveal-md-block">Experience
                                                </h2>
                                                <h5 class="veil reveal-md-block mw-400">Since our foundation, we
                                                    deliver the best solutions in diagnosing various diseases.</h5>
                                                <a class="btn btn-ellipse btn-white offset-top-24"
                                                    href="{{ route('login') }}">get
                                                    started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-slide-bg="{{ asset('publicArea/images/slide-03.jpg') }}">
                        <div class="swiper-caption">
                            <div class="swiper-slide-caption">
                                <div class="shell">
                                    <div class="range">
                                        <div class="cell-md-7 section-slider-custom">
                                            <div class="text-md-left">
                                                <h2>Qualified Team<br class="veil reveal-md-block">of Experts</h2>
                                                <h5 class="veil reveal-md-block mw-400">Our team of diagnosticians
                                                    is always ready to help you be more healthy.</h5><a
                                                    class="btn btn-ellipse btn-white offset-top-24"
                                                    href="{{ route('login') }}">get
                                                    started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </header>
    <!--Sheldue-->
    <section class="bg-white-liac">
        <div class="shell section-top-34 section-lg-top-0">
            <div
                class="range range-condensed range-xs-center range-lg-left offset-lg-top-34-negative sheldue text-xs-left to-front">
                <div class="cell-sm-8 cell-md-5 cell-lg-3">
                    <div class="sheldue-item first">
                        <div class="sheldue-item-body">
                            <div class="icon icon-xs text-white-50"><i class="far fa-clock"></i></div>
                            <h6 class="small reveal-inline-block inset-left-10 text-white">Qualify</h6>
                            <hr style="margin-bottom: 5px;">
                            <div class="offset-top-24 text-gray-light">
                                <p>Create your 100% Free and Secure CFN account and complete your application with
                                    relevant medical information.</p>
                            </div>
                        </div>
                        <div class="sheldue-more"><a class="btn btn-white btn-block btn-rect"
                                href="">READ
                                MORE</a></div>
                    </div>
                </div>
                <div class="cell-sm-8 cell-md-5 cell-lg-3 offset-top-70 offset-md-top-0">
                    <div class="sheldue-item light">
                        <div class="sheldue-item-body">
                            <div class="icon icon-xs text-white-50"><i class="fas fa-calendar-day"></i></div>
                            <h6 class="small reveal-inline-block inset-left-10 text-white">Preventative</h6>
                            <hr style="margin-bottom: 5px;">
                            <div class="offset-top-12 text-gray-light">
                                <p>Based on your information and medical history, CFN identifies medical services that
                                    you will beneift from. This includes preventative options such as genetic screening
                                    for cancer and medications.</p>
                            </div>
                        </div>
                        <div class="sheldue-more"><a class="btn btn-white btn-block btn-rect"
                                href="">READ
                                MORE</a></div>
                    </div>
                </div>
                <div class="cell-sm-8 cell-md-5 cell-lg-3 offset-top-70 offset-lg-top-0">
                    <div class="sheldue-item">
                        <div class="sheldue-item-body">
                            <div class="icon icon-xs text-white-50"><i class="fas fa-phone fa-rotate-90"></i>
                            </div>
                            <h6 class="small reveal-inline-block inset-left-10 text-white">Physician Consult</h6>
                            <hr style="margin-bottom: 5px;">
                            <div class="offset-top-24 text-gray-light">
                                <p>Based on the services recommended, physician consultations are scheduled within CFN.
                                    The physician will review your information and recommend services and tests that you
                                    are most likely to benefit from.</p>
                            </div>
                        </div>
                        <div class="sheldue-more"><a class="btn btn-white btn-block btn-rect"
                                href="">READ
                                MORE</a></div>
                    </div>
                </div>
                <div class="cell-sm-8 cell-md-5 cell-lg-3 offset-top-70 offset-lg-top-0">
                    <div class="sheldue-item light last">
                        <div class="sheldue-item-body">
                            <div class="icon icon-xs text-white-50"><i class="fas fa-first-aid"></i></div>
                            <h6 class="small reveal-inline-block inset-left-10 text-white">Legal Consults</h6>
                            <hr>
                            <div class="offset-top-24 text-gray-light">
                                <p>Based on your personal history, you may qualify for legal windfall benefits. For
                                    example, you may be owed benefits from a recently issued TORT settlement..</p>
                            </div>
                        </div>
                        <div class="sheldue-more"><a class="btn btn-white btn-block btn-rect"
                                href="">READ
                                MORE</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--What makes us different-->
    <section class="section-98 section-sm-110 bg-white-liac">
        <div id="about" class="shell">
            <h3>About Us</h3>
            <h6 style="text-transform:none;">CareFree provides high-quality, physician-ordered,
                genetic testing. We include
                support for physicians,
                as well as genetic counseling as part of every testing procedure. Our goal is to provide awareness of
                genetic testing to help provide results of common hereditary cancers and to help save lives.</h6>
            <div class="range offset-top-60">
                <div class="cell-md-4">
                    <div class="icon icon-xlg icon-circle icon-default icon-pills-xl"></div>
                    <h5 class="text-bold text-gray-darkest">Get Approved</h5>
                    <p>One of our physicians will review your medical history using our Electronic Health Records
                        platform to determine your testing needs.</p>
                </div>
                <div class="cell-md-4 offset-top-50 offset-md-top-0">
                    <div class="icon icon-xlg icon-circle icon-default icon-doctor-xl"></div>
                    <h5 class="text-bold text-gray-darkest">Get Swabbed</h5>
                    <p>Once you have been approved, Your kit will be mailed to you. You swab according to the enclosed
                        instructions. Then mail the kit to the lab fulfillment center for analysis.</p>
                </div>
                <div class="cell-md-4 offset-top-50 offset-md-top-0">
                    <div class="icon icon-xlg icon-circle icon-default icon-medical-car-xl"></div>
                    <h5 class="text-bold text-gray-darkest">Get Results</h5>
                    <p>Lab results are uploaded into our Electronic Health Record platform. A board certified physician
                        or genetic counselor is provided to discuss the results.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Material Parallax-->
    <section id="services" class="parallax-container" data-parallax-img="{{ asset('publicArea/images/wall1.jpg') }}">
        <div class="parallax-content section-98 section-sm-110 context-dark">
            <div class="shell text-left">
                <div class="range range-xs-center range-md-left">
                    <div class="col-lg-8">
                        <h2>YOUR CARE SHOULD<br class="veil reveal-lg-inline-block">BE IN YOUR CONTROL...</h2>
                    </div>
                    <div class="cell-sm-10 cell-md-8 cell-lg-5">
                        <p class="offset-top-30 text-white">From cutting edge medical care, to hidden legal medical
                            settlements - all at no cost!</p>
                        <div class="offset-top-30"><a class="btn btn-ellipse btn-white"
                                href="{{ route('register') }}">Create 100% free account now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- main services-->
    <section class="section-98 section-sm-110">
        <div id="advantages" class="shell">
            <h3>Carefree advantages</h3>
            <div class="offset-top-41">
                <p class="custom-paragraph">
                    We are passionate about our work because we know how much is at stake for you.
                    We succeed in our mission every time your family gets a little bit safer.
                    In today's rapidly evolving world, what we do at Consumer Reports must be as transformative and
                    groundbreaking as the new technologies,products and services entering people's lives every day.</p>
            </div>
            <div class="range offset-top-60 text-md-left">
                <div class="container cell-sm-6 cell-md-4">
                    <div class="service"><img class="img-responsive"
                            src="{{ asset('../publicArea/images/foreverfree2.jpg') }}" width="320" height="320"
                            alt="" />
                        <div class="overlay">
                            <div class="text">CareFreeNow is completely free to use!</div>
                        </div><a class="service-desc h6" href="{{  route('register') }}">Forever Free</a>
                    </div>
                </div>
                <div class="container cell-sm-6 cell-md-4 offset-top-50 offset-sm-top-0">
                    <div class="service"><img class="img-responsive"
                            src="{{ asset('../publicArea/images/secure.jpg') }}" width="320" height="320" alt="" />
                        <div class="overlay">
                            <div class="text">Your data is always kept safe and never shared with third parties!</div>
                        </div><a class="service-desc h6" href="{{  route('register') }}">100% Secure</a>
                    </div>
                </div>
                <div class="container cell-sm-6 cell-md-4 offset-top-50 offset-md-top-0">
                    <div class="service"><img class="img-responsive"
                            src="{{ asset('../publicArea/images/unique.jpeg') }}" width="320" height="320" alt="" />
                        <div class="overlay">
                            <div class="text">get access to personalized healthcare options at low to no cost via your
                                insurance</div>
                        </div><a class="service-desc h6" href="{{  route('register') }}">Unique options</a>
                    </div>
                </div>
                <div class="container cell-sm-6 cell-md-4 offset-top-50">
                    <div class="service"><img class="img-responsive"
                            src="{{ asset('../publicArea/images/carefree.jpeg') }}" width="320" height="320" alt="" />
                        <div class="overlay">
                            <div class="text">Patient Reimbursements of upto $680,000 available through TORT and injury
                                settlements!</div>
                        </div><a class="service-desc h6" href="{{  route('register') }}">CareFree Life</a>
                    </div>
                </div>
                <div class="container cell-sm-6 cell-md-4 offset-top-50">
                    <div class="service"><img class="img-responsive"
                            src="{{ asset('../publicArea/images/technology2.jpg') }}" width="320" height="320" alt="" />
                        <div class="overlay">
                            <div class="text">Access doctor approved cutting edge wellness technologies.</div>
                        </div><a class="service-desc h6" href="{{  route('register') }}">Technology</a>
                    </div>
                </div>
                <div class="container cell-sm-6 cell-md-4 offset-top-50">
                    <div class="service"><img class="img-responsive"
                            src="{{ asset('../publicArea/images/discount.jpg') }}" width="320" height="320" alt="" />
                        <div class="overlay">
                            <div class="text">Receive discounts to towards doctor approved, best in class supplements.
                            </div>
                        </div><a class="service-desc h6" href="{{  route('register') }}">Discounts</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Team-->
    {{--  <section>
        <div class="reveal-md-flex range-xs-center">
            <!-- Thumbnail Josip-->
            <figure class="thumbnail-josip thumbnail-big odd"><a href="team-member.html"><img width="384" height="410"
                        src="{{ asset('publicArea/images/our-team-05-384x410.jpg') }}" alt="" /></a>
    <div class="thumbnail-desc">
        <h5 class="thumbnail-josip-title text-medium text-white">Dr. Scott Riley</h5>
        <p class="veil reveal-md-block text-italic text-white offset-top-0">Chief Medical Officer,
            Pathologist</p>
    </div>
    <figcaption><a class="btn btn-block btn-rect text-md-left btn-white" href="team-member.html">view
            full profile</a></figcaption>
    </figure>
    <!-- Thumbnail Josip-->
    <figure class="thumbnail-josip thumbnail-big offset-top-41 offset-md-top-0"><a href="team-member.html"><img
                width="384" height="410" src="{{ asset('publicArea/images/our-team-06-384x410.jpg') }}" alt="" /></a>
        <div class="thumbnail-desc">
            <h5 class="thumbnail-josip-title text-medium text-white">Dr. Jane Fowler</h5>
            <p class="veil reveal-md-block text-italic text-white offset-top-0">Clinical Laboratory
                Technologist</p>
        </div>
        <figcaption><a class="btn btn-block btn-rect text-md-left btn-white" href="team-member.html">view
                full profile</a></figcaption>
    </figure>
    <!-- Thumbnail Josip-->
    <figure class="thumbnail-josip thumbnail-big offset-top-41 offset-md-top-0 odd"><a href="team-member.html"><img
                width="384" height="410" src="{{ asset('publicArea/images/our-team-07-384x410.jpg') }}" alt="" /></a>
        <div class="thumbnail-desc">
            <h5 class="thumbnail-josip-title text-medium text-white">Dr. Eric Snyder</h5>
            <p class="veil reveal-md-block text-italic text-white offset-top-0">MRI Technologist</p>
        </div>
        <figcaption><a class="btn btn-block btn-rect text-md-left btn-white" href="team-member.html">view
                full profile</a></figcaption>
    </figure>
    <!-- Thumbnail Josip-->
    <figure class="thumbnail-josip thumbnail-big offset-top-41 offset-md-top-0"><a href="team-member.html"><img
                width="384" height="410" src="{{ asset('publicArea/images/our-team-08-384x410.jpg') }}" alt="" /></a>
        <div class="thumbnail-desc">
            <h5 class="thumbnail-josip-title text-medium text-white">Dr. Martha Schmidt</h5>
            <p class="veil reveal-md-block text-italic text-white offset-top-0">EKG Technician</p>
        </div>
        <figcaption><a class="btn btn-block btn-rect text-md-left btn-white" href="">view
                full profile</a></figcaption>
    </figure>
    <!-- Thumbnail Josip-->
    <figure class="thumbnail-josip thumbnail-big offset-top-41 offset-md-top-0 odd"><a href="team-member.html"><img
                width="384" height="410" src="{{ asset('publicArea/images/our-team-09-384x410.jpg') }}" alt="" /></a>
        <div class="thumbnail-desc short">
            <h5 class="thumbnail-josip-title text-medium text-white">Dr. James Wilson</h5>
            <p class="veil reveal-md-block text-italic text-white offset-top-0">Radiology Technician</p>
        </div>
        <figcaption><a class="btn btn-block btn-rect text-md-left btn-white" href="team-member.html">view
                full profile</a></figcaption>
    </figure>
</div>
</section> --}}
<!-- testimonials-->
{{-- <section id="testimonials" class="section-98 section-sm-110 bg-white-liac">
    <div class="shell">
        <h3>Testimonials</h3>
        <div class="offset-top-66">
            <div class="owl-carousel owl-carousel-default owl-carousel-class-light" data-loop="false" data-items="1"
                data-dots="true" data-mouse-drag="false" data-md-items="2" data-nav="false">
                <div class="owl-item">
                    <blockquote class="quote quote-classic">
                        <div class="quote-body">
                            <p class="text-italic text-gray-dark">
                                <q>I had a colonoscopy at Medina Diagnostic Center. From the moment I entered
                                    the center, I was greeted and treated warmly and respectfully and it was the
                                    best experience.</q>
                            </p>
                            <div class="quote-meta unit unit-horizontal unit-spacing-sm unit-middle">
                                <div class="unit-left unit-item-narrow"><img class="img-circle quote-img" width="60"
                                        height="60" src="{{ asset('publicArea/images/user-betty-wade-60x60.jpg') }}"
alt="" />
</div>
<div class="unit-body unit-item-wide">
    <h5 class="quote-author text-capitalize text-bold text-primary">
        <cite class="text-normal">Betty Wade</cite>
    </h5>
    <p class="quote-desc text-capitalize text-gray text-italic">Patient</p>
</div>
</div>
</div>
</blockquote>
</div>
<div class="owl-item">
    <blockquote class="quote quote-classic">
        <div class="quote-body">
            <p class="text-italic text-gray-dark">
                <q>I would like to thank and compliment the staff at Medina, including the
                    outpatient, laboratory staff and cardiac division during my stay at your
                    facility on July 9th and 10th.</q>
            </p>
            <div class="quote-meta unit unit-horizontal unit-spacing-sm unit-middle">
                <div class="unit-left unit-item-narrow"><img class="img-circle quote-img" width="60" height="60"
                        src="{{ asset('publicArea/images/user-bryan-green-60x60.jpg') }}" alt="" />
                </div>
                <div class="unit-body unit-item-wide">
                    <h5 class="quote-author text-capitalize text-bold text-primary">
                        <cite class="text-normal">Bryan Green</cite>
                    </h5>
                    <p class="quote-desc text-capitalize text-gray text-italic">Patient</p>
                </div>
            </div>
        </div>
    </blockquote>
</div>
<div class="owl-item">
    <blockquote class="quote quote-classic">
        <div class="quote-body">
            <p class="text-italic text-gray-dark">
                <q>I had a colonoscopy at Medina Diagnostic Center. From the moment I entered
                    the center, I was greeted and treated warmly and respectfully and it was the
                    best experience.</q>
            </p>
            <div class="quote-meta unit unit-horizontal unit-spacing-sm unit-middle">
                <div class="unit-left unit-item-narrow"><img class="img-circle quote-img" width="60" height="60"
                        src="{{ asset('publicArea/images/user-bryan-green-60x60.jpg') }}" alt="" />
                </div>
                <div class="unit-body unit-item-wide">
                    <h5 class="quote-author text-capitalize text-bold text-primary">
                        <cite class="text-normal">Bryan Green</cite>
                    </h5>
                    <p class="quote-desc text-capitalize text-gray text-italic">Patient</p>
                </div>
            </div>
        </div>
    </blockquote>
</div>
<div class="owl-item">
    <blockquote class="quote quote-classic">
        <div class="quote-body">
            <p class="text-italic text-gray-dark">
                <q>I would like to thank and compliment the staff at Medina, including the
                    outpatient, laboratory staff and cardiac division during my stay at your
                    facility on July 9th and 10th.</q>
            </p>
            <div class="quote-meta unit unit-horizontal unit-spacing-sm unit-middle">
                <div class="unit-left unit-item-narrow"><img class="img-circle quote-img" width="60" height="60"
                        src="{{ asset('publicArea/images/user-betty-wade-60x60.jpg') }}" alt="" />
                </div>
                <div class="unit-body unit-item-wide">
                    <h5 class="quote-author text-capitalize text-bold text-primary">
                        <cite class="text-normal">Betty Wade</cite>
                    </h5>
                    <p class="quote-desc text-capitalize text-gray text-italic">Patient</p>
                </div>
            </div>
        </div>
    </blockquote>
</div>
</div>
</div>
</div>
<!-- RD Parallax-->
</section> --}}
<section class="parallax-container" data-parallax-img="{{ asset('publicArea/images/background-04-1920x980.jpg') }}">
    <div class="parallax-content section-98 section-sm-110 context-dark">
        <div class="shell text-left">
            <div class="range range-xs-center range-md-left">
                <div class="cell-sm-10 cell-md-8 cell-lg-5">
                    <h2>Aligned with your life</h2>
                    <p class="offset-top-30 text-white">Partnering you with a doctor who really gets to know you,
                        listens to you, and has time for you.
                        We support anyone who does not have a primary care doctor, or has a primary care doctor but is
                        looking for more convenient and more personalized care.</p>
                    <div class="offset-top-30"><a class="btn btn-ellipse btn-white"
                            href="">Connect As Physician</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- latest blog posts-->
{{--  <section class="section-98 section-sm-110">
    <div class="shell">
        <h3>Latest Blog Posts</h3>
        <div class="range range-xs-center offset-top-60">
            <div class="cell-sm-8 cell-md-4">
                <!-- Post Modern-->
                <article class="post post-modern post-modern-classic">
                    <!-- Post media-->
                    <div class="post-media"><a class="link-image" href="single-post.html"><img
                                class="img-responsive img-cover" width="370" height="250"
                                src="{{ asset('publicArea/images/post-13-370x250.jpg') }}" alt="" /></a>
</div>
<!-- Post content-->
<section class="post-content text-left">
    <!-- Post Title-->
    <div class="post-title offset-top-8">
        <h5 class="text-bold"><a href="single-post.html">Reasons to Visit a Breast
                Specialist</a></h5>
    </div>
    <ul class="list-inline list-inline-dashed">
        <li>June 21, 2018 at 8:12pm</li>
        <li><a class="text-primary" href="blog-masonry.html">News</a></li>
    </ul>
    <!-- Post Body-->
    <div class="post-body">
        <p>There are a lot of women that are unaware of the numerous risks associated with
            their health and eventually ignore the importance of visiting...</p>
    </div>
    <div class="tags group group-sm">
    </div>
</section>
</article>
</div>
<div class="cell-sm-8 cell-md-4 offset-top-50 offset-md-top-0">
    <!-- Post Modern-->
    <article class="post post-modern post-modern-classic">
        <!-- Post media-->
        <div class="post-media"><a class="link-image" href="single-post.html"><img class="img-responsive img-cover"
                    width="370" height="250" src="{{ asset('publicArea/images/post-14-370x250.jpg') }}" alt="" /></a>
        </div>
        <!-- Post content-->
        <section class="post-content text-left">
            <!-- Post Title-->
            <div class="post-title offset-top-8">
                <h5 class="text-bold"><a href="single-post.html">Picking the Right Diagnostic
                        Services for Efficient Results</a></h5>
            </div>
            <ul class="list-inline list-inline-dashed">
                <li>June 21, 2018 at 8:12pm</li>
                <li><a class="text-primary" href="blog-masonry.html">News</a></li>
            </ul>
            <!-- Post Body-->
            <div class="post-body">
                <p>There have been a lot of cases in which people were not provided with accurate
                    reports that eventually affected their medical treatment. There is always...</p>
            </div>
            <div class="tags group group-sm">
            </div>
        </section>
    </article>
</div>
<div class="cell-sm-8 cell-md-4 offset-top-50 offset-md-top-0">
    <!-- Post Modern-->
    <article class="post post-modern post-modern-classic">
        <!-- Post media-->
        <div class="post-media"><a class="link-image" href="single-post.html"><img class="img-responsive img-cover"
                    width="370" height="250" src="{{ asset('publicArea/images/post-15-370x250.jpg') }}" alt="" /></a>
        </div>
        <!-- Post content-->
        <section class="post-content text-left">
            <!-- Post Title-->
            <div class="post-title offset-top-8">
                <h5 class="text-bold"><a href="single-post.html">Preparing for an ECG in 8 Easy
                        Steps: Tips From Our Diagnosticians</a></h5>
            </div>
            <ul class="list-inline list-inline-dashed">
                <li>June 21, 2018 at 8:12pm</li>
                <li><a class="text-primary" href="blog-masonry.html">News</a></li>
            </ul>
            <!-- Post Body-->
            <div class="post-body">
                <p>An ECG stands for an "electrocardiogram," which is a test that measures and
                    records the electrical activity of the heart. It is used by doctors to obtain...
                </p>
            </div>
            <div class="tags group group-sm">
            </div>
        </section>
    </article>
</div>
</div>
<div class="offset-top-50"><a class="btn btn-ellipse btn-primary" href="blog-grid.html">View all blog
        posts</a></div>
</div>
</section> --}}
</div>
@endsection
@section('js')
<script>
    $(document).ready(function () {
        var pathname = $(location).attr('hash');
        if (pathname == '#about') {
            $('ul').find('li.active').removeClass('active');
            $('#abt').addClass('active');
        } else if (pathname == '#advantages') {
            $('ul').find('li.active').removeClass('active');
            $('#adv').addClass('active');
        } else if (pathname == '#testimonials') {
            $('ul').find('li.active').removeClass('active');
            $('#testi').addClass('active');
        }
    });

</script>
@endsection
