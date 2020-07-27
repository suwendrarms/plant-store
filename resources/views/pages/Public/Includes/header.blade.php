<?php
//http://man.carefree.svs152?a=dhsvipl&tid=123
$ref = request()->query();
if ($ref) {
    $refCode = isset($ref['a']) ? $ref['a'] : "";
    $tid = isset($ref['tid']) ? $ref['tid'] : "";
    if($refCode){
        setcookie('ref', $refCode, time() + (86400 * 30), "/"); // 86400 = 1 day
    }
    if($tid){
        setcookie('tid', $tid, time() + (86400 * 30), "/"); // 86400 = 1 day
    }
}
?>
<header class="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="logo-home">
                        <a href="/">
                            <img src="{!! asset('home/img/logo-home.png') !!}" class="logo-mobile-hide">
                            <img src="{!! asset('home/img/logo.png') !!}" class="logo-mobile">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 top-right d-lg-flex justify-content-end">
                    {{-- <ul class="user-link">
                        <li><a href="/register">Register</a><span>|</span></li>
                        <li><a href="/login">Login</a></li>
                    </ul> --}}
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg menu-main">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07"
                aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>
            <div class="row collapse navbar-collapse" id="navbarsExample07">
                <div class="col-lg-4">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('work') }}">How It Works</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About Us</a>
                        </li> --}}
                    </ul>
                </div>
                <div class="col-lg-4"></div>
                <div class="col-lg-4 d-lg-flex justify-content-end">
                    <ul class="navbar-nav ml-auto">
                        {{-- <li class="nav-item active">
                            <a class="nav-link" href="/">Contact</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
