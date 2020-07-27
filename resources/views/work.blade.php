@extends('Public.Layouts.app')
@section('content')

<div class="page animated" style="animation-duration: 500ms;">
    <!-- Page Header-->
    <header class="page-head">

    </header>
    <!-- Modern Breadcrumbs-->
    <section class="breadcrumb-modern context-dark text-md-left">
        <div class="shell section-34 section-md-top-110 section-md-bottom-41">
            <h2>How It Works</h2>
            <ul class="list-inline list-inline-arrows p offset-top-34 offset-md-top-70">
                <li><a class="text-white" href="{{ route('home') }}">Home&nbsp;</a>
                </li>
                <i class="fas fa-xs fa-arrow-right"></i>
                <li class="text-white-50">How It Works
                </li>
            </ul>
        </div>
    </section>
    <!-- Our Customers-->
    <section class="section-98 section-sm-110">
        <div class="shell">
            <div class="range range-xs-center range-md-left">
                <div class="container">
                    <h4>CareFreeNow is designed to be the most patient centric healthcare application today:</h4>
                    <h5>1. Qualify</h5>
                    <p>Create your 100% Free and Secure CFN account and complete your application with relevant medical
                        information.
                    </p>
                    <h5>2. Preventative &amp; Medical Services</h5>
                    <p>Based on your information and medical history, CFN identifies medical services that you will
                        beneift from.
                        This includes preventative options such as genetic screening for cancer and medications, or
                        medical care
                        options for pain management, and even legal windfall options under TORT. </p>
                    <h5>3. Physician Consult</h5>
                    <p>Based on the services recommended, physician consultations are scheduled within CFN. The
                        physician will
                        review your information and recommend services and tests that you are most likely to benefit
                        from. Vast
                        majority of these recommended services are provided at no cost to the patient as they are
                        covered by the
                        insurance provider (whether private, medicare, or medicaid). </p>
                    <h5>4. Legal Consults</h5>
                    <p>Based on your personal history, you may qualify for legal windfall benefits. For example, you may
                        be owed
                        benefits from a recently issued TORT settlement. Or you may qualify for benefits due to work
                        injury or
                        medical malpractice. A qualified attorney team will reach out based on your history. Once again,
                        this
                        service is provided at no cost to the patient! </p>
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
