@extends('Public.Layouts.app')
@section('content')
<section class="register-sec landing-banner-area">
    <div class="container">

        <div class="row justify-content-center">

            <div class="con col-lg-6  col-md-6 text-center">
                <div class="card">
                    <div class="card-body">
                        <div class="sign-up-form">
                            <div class="responsive-tabs responsive-tabs-classic" data-type="horizontal"
                                style="width: 100%;">
                                <ul class="resp-tabs-list tabs-1 text-center tabs-group-default"
                                    data-group="tabs-group-default">
                                    <li class="resp-tab-item tabs-group-default resp-tab-active">
                                        Contact Us
                                    </li>
                                </ul>
                            </div>
                            <br>
                            <h5 class="sub-title">Let's get help.</h5>
                            <form class="user" action="{{ route('contact.send') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        aria-describedby="helpId" placeholder="Your email address" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="name"
                                        aria-describedby="helpId" placeholder="Your name " required>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        aria-describedby="helpId" placeholder="Email Subject " required>
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" rows="10"
                                        aria-describedby="helpId" placeholder="Your Message " required></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="g-recaptcha"
                                        data-sitekey="{{ config('services.google_recaptcha.site_key') }}">
                                    </div>
                                    @error('g-recaptcha-response')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="offset-top-20">
                                    <div class="reveal-sm-flex offset-none range-xs-middle text-center text-sm-left">
                                        <button class="btn btn-primary" type="submit">Send</button>
                                    </div>
                                </div>
                                {{--  <div class="row">
                                    <div class="col-lg-12">
                                        <h6 class="text-center">
                                            <button type="submit" class="btn btn-primary">Send</button>
                                        </h6>
                                    </div>
                                </div>  --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endSection
@section('css')
<style>
    .con {
        margin-top: 304px !important;
        margin-bottom: 100px !important;
    }

    .color-chng {
        color: #2a93c9;
    }

    .icon-gray-light {
        background: #e5e5e5;
    }

</style>

@endsection
@section('js')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    $(document).ready(function () {
        $('.color-chng').removeClass('text-white');
        $('.icon-gray-light').removeClass('icon-white-17');
        $('ul').find('li.active').removeClass('active');
        $('#contact').addClass('active');
    });

</script>

@endsection
