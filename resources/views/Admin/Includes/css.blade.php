  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('css/argonpro.css?v=1.2.0') }}" type="text/css">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css">

  <!-- Default theme -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/default.min.css" />
  <!-- Semantic UI theme -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/semantic.min.css" />
  <!-- Bootstrap theme -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/bootstrap.min.css" />
  <!-- Custom styles for this template-->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.0.0/cropper.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

  <link rel="stylesheet" href="{{ asset('css/sptoast.css') }}">

  <style>
      .card-profile-image img {
          width: 120px;
          height: 120px;
      }

      .bg-primary {
          background-color: #2b2c5a !important;
      }

      .bootstrap-tagsinput {
          transition: box-shadow .15s ease !important;
          border: 0 !important;
          box-shadow: 0 1px 3px rgba(50, 50, 93, .15), 0 1px 0 rgba(0, 0, 0, .02) !important;
      }

      .custom-toggle {
          vertical-align: middle;
      }

      .custom-toggle-slider {
          border: 1px solid #f30303;
      }

      .custom-toggle-slider:before {
          background-color: #f71515;
      }

      .custom-toggle-slider:after {
          color: #ec2727;
      }

      .d-inline-block {
          display: inline-block;
      }

      .select-box label.error {
          color: red;
          font-size: 0.8rem !important;
          position: absolute !important;
          top: 36px !important;
      }

      .select-box-lg label.error {
          color: red;
          font-size: 0.8rem !important;
          position: absolute !important;
          top: 70px !important;
      }


      .error:before {
          font-family: "Font Awesome 5 Free";
          content: "\f071";
          display: inline-block;
          padding-right: 3px;
          vertical-align: middle;
          font-weight: 900;
      }

      .error {
          margin-top: 0.8rem;
          font-weight: 400;
          font-size: 0.8rem !important;
      }

      /* Data table css */
      .dataTables_length {
          padding-left: 1.5rem;
      }

      .dataTables_filter {
          padding-right: 1.5rem;

      }

      .dataTables_info {
          padding-left: 1.5rem;
      }

      .dataTables_wrapper .dataTables_paginate {
          padding-right: 1.5rem;
      }

      .hrs-1 {
          border: 0;
          height: 0;
          border-top: 3px solid #8c8c8c;
      }

      .bl-4 {
          border-left: 1px solid #8c8c8c;

      }

      /* Select2 custom style */
      .select2-container--default .select2-selection--single {
          background-color: #fff;
          border-radius: 4px;
          height: calc(2.75rem + 2px);
          box-shadow: 0 1px 3px rgba(50, 50, 93, 0.15), 0 1px 0 rgba(0, 0, 0, 0.02);
          border: 0;
          transition: box-shadow .15s ease;
          line-height: 1.5rem;
          font-size: 0.875rem;
          padding: 0.625rem 0.75rem;
      }

      .select2-dropdown {
          box-shadow: 0 1px 3px rgba(50, 50, 93, 0.15), 0 1px 0 rgba(0, 0, 0, 0.02);
          border: 0;
          transition: box-shadow .15s ease;
      }


      .select2-container--default .select2-selection--single .select2-selection__arrow b {
          margin-top: 6px;
      }

      .select2-selection.select2-selection--single {
          transition: box-shadow .15s ease;
          border: 0;
          box-shadow: 0 1px 3px rgba(50, 50, 93, .15), 0 1px 0 rgba(0, 0, 0, .02);
          font-size: .875rem;
          height: calc(1.5em + 1.25rem + 5px);
          line-height: 1.875rem;
      }

      .avatar img {
          height: 100% !important;
          width: 100% !important;
      }

      .sidenav-normal {
          width: 100%;
      }

      .sidenav-normal i {
          float: right;
      }

      .wizard>.actions>ul>li.disabled {
          display: none;
      }

      a.disabled {

          color: gray;
          pointer-events: none;
      }

      a>i.f1 {
          margin-left: 15px;
      }

      a>i.f2 {
          margin-left: 10px;
      }

      a>i.f3 {
          margin-left: 20px;
      }

      a>i.f4 {
          margin-left: 16px;
      }

      .br-0 {
          border-radius: 0px !important;
      }

      .bg-gradient-primary {
          background-color: #4e73df;
          background-image: -webkit-gradient(linear, left top, left bottom, color-stop(10%, #00248e), to(#030e2d));
          background-image: linear-gradient(180deg, #00248e 10%, #030e2d 100%);
          background-size: cover;
      }


      #admin-logged-in {
          position: fixed;
          bottom: 20px;
          right: 0px;
          width: 20%;
          height: 70px;
          padding: 10px;
          color: #ffffff;
          box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
          border-radius: 10px;
      }

      @media (max-width: 767.98px) {
          .wizard>.content>.body {
              padding: 0 !important;
          }

          .wizard>.actions {
              padding: 0px !important;
          }
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
      }

      .breadcrumb-dark .breadcrumb-item a {
          color: #2b2c5ab0;
      }

      .breadcrumb-dark .breadcrumb-item.active {
          color: #2b2c5ab0;
      }

      .breadcrumb-dark .breadcrumb-item+.breadcrumb-item::before {
          color: #2b2c5ab0;
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
