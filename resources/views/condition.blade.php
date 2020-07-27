@extends('Public.Layouts.app')
@section('content')

<div class="page animated" style="animation-duration: 500ms;">
    <!-- Page Header-->
    <header class="page-head">

    </header>
    <!-- Modern Breadcrumbs-->
    <section class="breadcrumb-modern context-dark text-md-left">
        <div class="shell section-34 section-md-top-110 section-md-bottom-41">
            <h2>Terms & Conditions</h2>
            <ul class="list-inline list-inline-arrows p offset-top-34 offset-md-top-70">
                <li><a class="text-white" href="{{ route('home') }}">Home&nbsp;</a>
                </li>
                <i class="fas fa-xs fa-arrow-right"></i>
                <li class="text-white-50">Terms & Conditions
                </li>
            </ul>
        </div>
    </section>
    <!-- Our Customers-->
    <section class="section-98 section-sm-110">
        <div class="shell">
            <di<div class="container">
                <h4>1. Terms</h4>
                <p>By accessing the website at http://CareFree.com, you are agreeing to be bound by these terms of
                    service, all
                    applicable laws and regulations, and agree that you are responsible for compliance with any
                    applicable local
                    laws. If you do not agree with any of these terms, you are prohibited from using or accessing this
                    site. The
                    materials contained in this website are protected by applicable copyright and trademark law.</p>
                <h4>2. Use License</h4>
                <p>CareFree website is for personal, non-commercial transitory viewing only. This is the grant of a
                    license, not
                    a transfer of title, and under this license you may not:</p>
                <ul>
                    <li>modify or copy the materials;</li>
                    <li>use the materials for any commercial purpose, or for any public display (commercial or
                        non-commercial);
                    </li>
                    <li>attempt to decompile or reverse engineer any software contained on CareFree website;</li>
                    <li>remove any copyright or other proprietary notations from the materials; or transfer the
                        materials to
                        another person or "mirror" the materials on any other server.</li>
                </ul>
                <p>This license shall automatically terminate if you violate any of these restrictions and may be
                    terminated by
                    CareFree at any time. Upon terminating your viewing of these materials or upon the termination of
                    this
                    license, you must destroy any downloaded materials in your possession whether in electronic or
                    printed
                    format.</p>
                <h4>3. Disclaimer</h4>
                <p>The materials on CareFree website are provided on an 'as is' basis. CareFree makes no warranties,
                    expressed
                    or implied, and hereby disclaims and negates all other warranties including, without limitation,
                    implied
                    warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement
                    of
                    intellectual property or other violation of rights.Further, CareFree does not warrant or make any
                    representations concerning the accuracy, likely results, or reliability of the use of the materials
                    on its
                    website or otherwise relating to such materials or on any sites linked to this site.</p>
                <h4>4. Limitations</h4>
                <p>In no event shall CareFree or its suppliers be liable for any damages (including, without limitation,
                    damages
                    for loss of data or profit, or due to business interruption) arising out of the use or inability to
                    use the
                    materials on CareFree website, even if CareFree or a CareFree authorized representative has been
                    notified
                    orally or in writing of the possibility of such damage. Because some jurisdictions do not allow
                    limitations
                    on implied warranties, or limitations of liability for consequential or incidental damages, these
                    limitations may not apply to you.</p>
                <h4>5. Accuracy of materials</h4>
                <p>The materials appearing on CareFree website could include technical, typographical, or photographic
                    errors.
                    CareFree does not warrant that any of the materials on its website are accurate, complete or
                    current.
                    CareFree may make changes to the materials contained on its website at any time without notice.
                    However
                    CareFree does not make any commitment to update the materials.</p>
                <h4>6. Links</h4>
                <p>CareFree has not reviewed all of the sites linked to its website and is not responsible for the
                    contents of
                    any such linked site. The inclusion of any link does not imply endorsement by CareFree of the site.
                    Use of
                    any such linked website is at the user's own risk.</p>
                <h4>7. Modifications</h4>
                <p>CareFree may revise these terms of service for its website at any time without notice. By using this
                    website
                    you are agreeing to be bound by the then current version of these terms of service.</p>
                <h4>8. Governing Law</h4>
                <p>These terms and conditions are governed by and construed in accordance with the laws of Texas and you
                    irrevocably submit to the exclusive jurisdiction of the courts in that State or location.</p>
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
