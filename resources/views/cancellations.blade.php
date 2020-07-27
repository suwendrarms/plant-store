@extends('Public.Layouts.app')
@section('content')

<div class="page animated" style="animation-duration: 500ms;">
    <!-- Page Header-->
    <header class="page-head">

    </header>
    <!-- Modern Breadcrumbs-->
    <section class="breadcrumb-modern context-dark text-md-left">
        <div class="shell section-34 section-md-top-110 section-md-bottom-41">
            <h2>Cancellation/Refund Policy</h2>
            <ul class="list-inline list-inline-arrows p offset-top-34 offset-md-top-70">
                <li><a class="text-white" href="{{ route('home') }}">Home&nbsp;</a>
                </li>
                <i class="fas fa-xs fa-arrow-right"></i>
                <li class="text-white-50">Cancellation/Refund Policy
                </li>
            </ul>
        </div>
    </section>
    <!-- Our Customers-->
    <section class="section-98 section-sm-110">
        <div class="shell">
            <div class="container">
                <p>The Company Cancellation/Refund Policy is hereby determined to be part of and in conjunction with the
                    Company
                    Terms and Conditions. Administration will be at the sole discretion of the Company based on the
                    Terms and
                    Conditions and Cancellation/Refund Policy as defined here on this website or as written in the
                    service
                    contract. When a customer has purchased and paid for, and/or has entered into a pre-approved payment
                    arrangement for our services contractually, said customer will be bound by the Company's
                    Cancellation/Refund
                    Policy and our Terms and Conditions.</p>
                <p>Depending on the service contract entered into between customer and Company, there may be a three to
                    ten day
                    rescission period established by the State where the service was purchased.</p>
                <p>In order to cancel and/or request a refund, you must submit a “NOTICE TO CANCEL AND REFUND REQUEST”
                    to the
                    Company in writing. The “NOTICE TO CANCEL AND REFUND REQUEST” must be delivered via either USPS
                    Certified
                    Mail with a Signed Return Receipt, or by Overnight Courier with a signature request sent directly to
                    the
                    Company address on the contract. The “NOTICE TO CANCEL AND REFUND REQUEST “ must clearly and
                    completely
                    define the reason for the request to cancel and/or request a refund. THE “NOTICE TO CANCEL AND
                    REFUND
                    REQUEST” MUST BE RECEIVED BY THE COMPANY BY THE DATE THE RESCISSION PERIOD EXPIRES (if applicable)
                    ACCORDING
                    TO THE PURCHASER'S STATE'S LAWS . IF THE “NOTICE TO CANCEL AND REFUND REQUEST” IS NOT RECEIVED
                    WITHIN THE
                    ESTABLISHED TIME FRAME, SUCH CANCELLATIONS/REFUNDS ARE NO LONGER REQUIRED AND THE DECISION TO CANCEL
                    ANY
                    PURCHASED SERVICES OR REFUND ANY PAID DOLLARS TO THE CUSTOMER IS RENDERED AT THE SOLE DISCRETION OF
                    THE
                    COMPANY.</p>
                <p>UNDER NO CIRCUMSTANCES WILL VERBAL OR TELEPHONE “NOTICE TO CANCEL AND REFUND REQUEST” BE ACCEPTED BY
                    THE
                    COMPANY. IN THE EVENT NO RESCISSION PERIOD IS MANDATED BY THE STATE FOR THE SERVICE CONTRACT IN
                    QUESTION,
                    COMPANY WILL RELY SOLELY UPON THE SERVICE CONTRACT REGARDING CANCELLATION OR REFUND, AS WRITTEN,
                    SIGNED AND
                    AGREED TO BETWEEN THE CUSTOMER AND THE COMPANY. COMPANY WILL ALWAYS HAVE THE LEGAL RIGHT, AS DEFINED
                    IN THE
                    SERVICE CONTRACT OR OTHER DOCUMENTS, TO FIRST SUBTRACT ANY OUT OF POCKET COSTS OR EXPENSES
                    ASSOCIATED WITH
                    THE SERVICE CONTRACT IN QUESTION BETWEEN CUSTOMER AND COMPANY BEFORE ISSUING ANY SUCH
                    CANCELLATIONS/REFUNDS.
                </p>
                <p>There will be no cancellation or refund of any service contract that has been performed in accordance
                    to the
                    Terms and Conditions of said service contract. In the event the customer entered into a payment
                    arrangement
                    with the company, said customer will remain legally and financially liable to Company as per the
                    terms of
                    the associated service contract. Company may use any and all legal remedies available to collect on
                    any
                    outstanding balance remaining from any service contract wherewith the company's contractual
                    obligations have
                    been fulfilled. In the event of such, the customer will be financially liable for any collection
                    costs
                    incurred in the collection attempt, including, but not limited to reasonable attorney fees, court
                    costs, and
                    late fees accrued on the unpaid balance.</p>
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
    });

</script>

@endsection
