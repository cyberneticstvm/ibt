<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- title -->
    <title>{{ $title }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="author" content="Cybernetics">
    <!-- description -->
    <meta name="description" content="{{ $description }}">
    <!-- keywords -->
    <meta name="keywords" content="{{ $keywords }}">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('/assets/images/ibt-favicon.webp') }}">

    <!-- style sheets and font icons  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootsnav.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/font-icons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/theme-vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/responsive.css') }}" />
</head>

<body>
    @include("nav")
    <div class="sidebar-wrapper mobile-height">
        @yield("content")
        <!-- start footer -->
        <footer class="footer-center-logo bg-light-gray padding-five-tb sm-padding-30px-tb">
            <div class="container">
                <div class="row align-items-center">
                    <!-- start copyright -->
                    <div class="col-lg-4 col-md-5 text-small text-center alt-font sm-margin-15px-bottom">
                        &copy; {{ date('Y') }} <a href="{{ route('index') }}">IBT Global Trading</a>.
                    </div>
                    <!-- end copyright -->
                    <!-- start logo -->
                    <div class="col-lg-4 col-md-2 text-center sm-margin-10px-bottom">
                        <a href="{{ route('index') }}"><img class="footer-logo" src="{{ asset('/assets/images/ibt-logo.webp') }}" alt="IBT Global Trading"></a>
                    </div>
                    <!-- end logo -->
                    <!-- start social media -->
                    <div class="col-lg-4 col-md-5 text-center">
                        <span class="alt-font text-small margin-20px-right md-margin-15px-right"><a href="{{ route('index') }}">Legal Notices</a></span>
                        <div class="social-icon-style-8 d-inline-block align-middle">
                            <ul class="small-icon mb-0">
                                <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                                <li><a class="twitter" href="https://twitter.com/" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a class="google" href="https://instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a class="instagram" href="https://linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin me-0" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end social media -->
                </div>
            </div>
        </footer>
        <!-- end footer -->
    </div>
    <!-- start scroll to top -->
    <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
    <!-- end scroll to top  -->

    <!-- javascript -->
    <script type="text/javascript" src="{{ asset('/assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/bootsnav.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/jquery.nav.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/hamburger-menu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/theme-vendors.min.js') }}"></script>
    <!-- setting -->
    <script type="text/javascript" src="{{ asset('/assets/js/main.js') }}"></script>
</body>

</html>