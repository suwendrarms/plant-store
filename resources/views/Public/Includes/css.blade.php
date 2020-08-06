<!-- Stylesheets-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Asap:400,500,600,700%7CLato:400italic,400,700">
{{-- <link rel="stylesheet" href="bootstrap.css"> --}}
{{-- Style CSS --}}
<link rel="stylesheet" href="{{ asset('css/sptoast.css') }}">

<link href="{{ asset('publicArea/css/style.css') }}" rel="stylesheet">
<style>
    h6.small {
        font-size: 17px;
    }

    .martop {
        margin-top: 11px !important;
    }

    .short {
        max-height: 142px;
    }


    @media (min-width: 992px) {
        .sheldue .sheldue-item .sheldue-item-body {
            max-height: 300px !important;
            height: 300px !important;
        }
    }


    .modal {
        z-index: 10050;
    }

    .custom-paragraph {
        max-width: none;
    }

    .overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100%;
        width: 100%;
        opacity: 0.8;
        transition: .5s ease;
        background-color: rgba(0, 0, 0, 0.6);
    }

    .container:hover .overlay {
        opacity: 1;
    }

    .text {
        color: white;
        font-size: 20px;
        padding: 15%;
        text-align: center;
    }


    #loader {
        position: fixed;
        top: 0px;
        bottom: 0px;
        left: 0px;
        right: 0px;
        width: 100vw;
        height: 100vh;
        background-color: rgba(255, 255, 255, 0.98);
        z-index: 10000;
    }

    @keyframes load {
        0% {
            opacity: 0.08;
            filter: blur(5px);
            letter-spacing: 3px;
        }
    }

    .animate {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        margin: auto;
        font-family: Helvetica, sans-serif, Arial;
        animation: load 1.2s infinite 0s ease-in-out;
        animation-direction: alternate;
        text-shadow: 0 0 1px white;
        font-size: 1rem;
        font-weight: 900;
    }

    .notify-bar {
        background-color: rgb(144, 2, 17);
        padding: 10px;
        position: fixed;
        bottom: 0px;
        left: 0px;
        right: 0px;
        width: 100%;
        /* height: 50px; */
        z-index: 1001;
        animation: colorchange 5s infinite;
        -webkit-animation: colorchange 5s infinite;
        height: 40px;
    }

    @keyframes colorchange {
        0% {
            background: rgb(144, 2, 17);
        }

        50% {
            background: rgb(242, 3, 29);
        }

        100% {
            background: rgb(144, 2, 17);
        }
    }

    @-webkit-keyframes colorchange {

        /* Safari and Chrome - necessary duplicate */
        0% {
            background: rgb(144, 2, 17);
        }

        50% {
            background: rgb(242, 3, 29);
        }

        100% {
            background: rgb(144, 2, 17);
        }
    }


    #logoutModal {
        margin-left: 100px
    }

    @media only screen and (max-width: 768px) {
        #logoutModal {
            margin-left: 0px
        }
    }

</style>
@yield('css')
