<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/plugins/images/favicon.png') }}">
    <title>Enter OTP</title>
    <link href="{{ asset('assets/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css') }}"
        rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/colors/default.css') }}" id="theme" rel="stylesheet">
</head>

<body>
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <section id="wrapper" class="login-register">
        <div class="login-box">
            <div class="white-box">
                <form class="form-horizontal form-material" action="{{ url('admin/') }}/checkotp" method="POST">
                    @csrf
                    <h3 class="box-title m-b-20">Enter OTP</h3>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" placeholder="Enter OTP" name="otp">
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light"
                                type="submit">Submit</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>Don't received an OTP?
                                <a href="{{ url('/admin/login') }}/resendReq" class="text-primary m-l-5"><b>Resend</b>
                                </a>
                            </p>
                        </div>
                        @if (session()->has('error'))
                            {{ session()->get('error') }}
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="{{ asset('assets/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/dist/js/tether.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js') }}">
    </script>
    <script src="{{ asset('assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/js/waves.js') }}"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js') }}"></script>
    <script src="{{ asset('assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
</body>

</html>
