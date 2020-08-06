<script src='https://code.jquery.com/jquery-2.1.3.js'></script>
<script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/js-cookie/js.cookie.js') }}"></script>
<script src="{{ asset('vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
<!-- Optional JS -->
<script src="{{ asset('vendor/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ asset('vendor/chart.js/dist/Chart.extension.js') }}"></script>
<!-- Argon JS -->
<script src="{{ asset('js/argon.js?v=1.2.0')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.0.0/cropper.min.js"></script>

<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>

<script src="{{ asset('js/sptoast.js') }}"></script>
<script src="{{ asset('js/pb.calendar.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/lobibox@1.2.7/dist/js/lobibox.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.2/fullcalendar.js'></script>
<script src="{{ asset('js/fullcalendar-rightclick.js') }}"></script>
<script src="//media.twiliocdn.com/sdk/js/video/v1/twilio-video.min.js"></script>

@yield('js')
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
    $(document).ready(function () {

        getAppointment();
        //personal info progress br
        $('.pro').on('change', function () {

            var nonblanks = $('.pro').filter(function () {
                return !$(this).val();
            }).length;
            if ($('.pro-select').val() == []) {
                nonblanks = nonblanks + 1;
            }
            var x = ((12 - nonblanks) / 12) * 100;
            $("#pi-pro-bar").css("width", x + '%');

        })

        $('.coverage-pro').on('change', function () {

            var nonblanks = $('.coverage-pro').filter(function () {
                return !$(this).val();
            }).length;
            if ($('.coverage-pro-select').val() == []) {
                nonblanks = nonblanks + 6;
            }
            var x = ((22 - nonblanks) / 22) * 100;
            $("#cov-pro-bar").css("width", x + '%');

        })



        $('#loader').fadeOut();
        $('.data-table').DataTable();
        @foreach(['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-'.$msg))
        var msg = '@php echo Session("alert-".$msg); @endphp';
        @if($msg == 'success')
        setTimeout(() => {
            alertSuccess(msg);
        }, 500);
        @endif
        @if($msg == 'danger')
        setTimeout(() => {
            alertDanger(msg);
        }, 500);
        @endif
        @if($msg == 'info')
        setTimeout(() => {
            alertInfo(msg);
        }, 500);
        @endif
        @if($msg == 'warning')
        setTimeout(() => {
            alertWarning(msg);
        }, 500);
        @endif
        @endif
        @endforeach

    });

    $('form').submit(function () {
        $('#loader').fadeIn();
    });

    $("#error").click(function () {

    })

    function alertDanger(msg) {
        $.toast({
            heading: 'Oops',
            text: msg,
            icon: 'error',
            loader: true,
            loaderBg: '#fff',
            showHideTransition: 'slide',
            hideAfter: 6000,
            position: 'top-right',
        })
    }

    function alertSuccess(msg) {
        $.toast({
            heading: 'Success',
            text: msg,
            icon: 'success',
            loader: true,
            loaderBg: '#fff',
            showHideTransition: 'slide',
            hideAfter: 6000,
            allowToastClose: false,
            position: 'bottom-center',
        })
    }

    function alertWarning(msg) {
        $.toast({
            heading: 'Warning',
            text: msg,
            icon: 'warning',
            loader: true,
            loaderBg: '#fff',
            showHideTransition: 'slide',
            hideAfter: 6000,
            allowToastClose: false,
            position: 'bottom-center',
        })
    }

    function alertInfo(msg) {
        $.toast({
            heading: 'Attention',
            text: msg,
            icon: 'info',
            loader: true,
            loaderBg: '#fff',
            showHideTransition: 'slide',
            hideAfter: 6000,
            allowToastClose: false,
            position: 'bottom-center',
        })
    }




    function delconf(url) {
        $.confirm({
            title: 'Are You Sure!',
            content: 'Do You Want To Remove This!',
            autoClose: 'cancel|8000',
            type: 'red',
            theme: 'material',
            backgroundDismiss: false,
            backgroundDismissAnimation: 'glow',
            buttons: {
                tryAgain: {
                    text: "Yes Remove It ",
                    action: function () {
                        $.ajax({
                            url: url,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: 'GET',
                            success: function () {
                                location.reload();
                            }
                        });
                    }
                },
                cancel: function () {}
            }
        });
    }

    function approve(url, title = "Do You Want To Approve It") {
        $.confirm({
            title: 'Are you sure?',
            content: title,
            autoClose: 'cancel|8000',
            type: 'green',
            theme: 'material',
            backgroundDismiss: false,
            backgroundDismissAnimation: 'glow',
            buttons: {
                confirm: function () {
                    window.location.href = url;
                },
                cancel: function () {

                },

            }
        });
    }

    function decline(url) {
        $.confirm({
            title: 'Are you sure?',
            content: 'Do You Want To Decline It',
            autoClose: 'cancel|8000',
            type: 'red',
            theme: 'material',
            backgroundDismiss: false,
            backgroundDismissAnimation: 'glow',
            buttons: {
                confirm: function () {
                    window.location.href = url;
                },
                cancel: function () {

                },

            }
        });
    }

</script>
