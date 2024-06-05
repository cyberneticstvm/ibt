<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    <meta name="keywords" content="{{ $keywords }}" />
    <meta name="description" content="{{ $description }}">
    <meta name="author" content="Cybernetics">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/assets/images/ibt-favicon.webp') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900%7CPoppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/theme-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/theme-shop.css') }}">

    <!-- Revolution Slider CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/rs-plugin/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/rs-plugin/css/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/rs-plugin/css/navigation.css') }}">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/demos/demo-law-firm.css') }}">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{ asset('/assets/css/skins/skin-law-firm.css') }}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/custom.css') }}">

</head>

<body>

    <div class="body">
        <header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 107, 'stickySetTop': '-107px', 'stickyChangeLogo': true}">
            <div class="header-body border-color-primary border-top-0 box-shadow-none">
                <div class="header-container container z-index-2">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-row">
                                <div class="header-logo">
                                    <a href="{{ route('index') }}">
                                        <img alt="IBT Trading" src="{{ asset('/assets/images/ibt-logo.webp') }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-column justify-content-end">
                            <div class="header-row h-100">
                                <ul class="header-extra-info d-flex h-100 align-items-center">
                                    <li class="align-items-center d-none d-lg-block h-100 py-4">
                                        <div class="header-extra-info-text h-100 py-2">
                                            <div class="feature-box feature-box-style-2 align-items-center">
                                                <div class="feature-box-icon">
                                                    <img width="34" height="28" src="{{ asset('/assets/img/demos/law-firm/icons/envelope.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 34px; height: 28px;" />
                                                </div>
                                                <div class="feature-box-info ps-1">
                                                    <label>SEND US AN EMAIL</label>
                                                    <strong><a href="mailto:info@ibtglobalpreciousmetal.com">info@ibtglobalpreciousmetal.com</a></strong>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="align-items-center d-none d-lg-block h-100 py-4">
                                        <div class="header-extra-info-text h-100 py-2">
                                            <div class="feature-box feature-box-style-2 align-items-center">
                                                <div class="feature-box-icon">
                                                    <img width="30" height="30" src="{{ asset('/assets/img/demos/law-firm/icons/phone.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-stroke-color-primary p-relative left-3'}" style="width: 30px; height: 30px;" />
                                                </div>
                                                <div class="feature-box-info ps-1">
                                                    <label>CALL US NOW</label>
                                                    <strong><a href="tel:+9711234567">+971 123 4567</a></strong>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="align-items-center d-none d-sm-block h-100 py-4">
                                        <div class="header-extra-info-text h-100 py-2">
                                            <div class="feature-box feature-box-style-2 align-items-center">
                                                <div class="feature-box-icon">
                                                    <img width="33" height="31" src="{{ asset('/assets/img/demos/law-firm/icons/comment.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 33px; height: 31px;" />
                                                </div>
                                                <div class="feature-box-info ps-1">
                                                    <label class="p-relative top-4">GET STARTED</label>
                                                    <strong class="text-uppercase"><a href="{{ route('contact') }}">Request Consultation <img width="27" height="27" src="{{ asset('/assets/img/demos/law-firm/icons/arrow-right.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ms-2 d-inline'}" /></a></strong>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @include("web.nav")
            </div>
        </header>

        <div role="main" class="main">

            @yield("content")

        </div>

        <footer id="footer" class="border-top-0 mt-0">
            <div class="container py-4">
                <div class="row py-5">
                    <div class="col-md-5 mb-4 mb-lg-0">
                        <a href="{{ route('index') }}" class="logo pe-0 pe-lg-3 pb-4">
                            <img alt="IBT Trading" src="{{ asset('/assets/images/ibt-logo.webp') }}">
                        </a>
                        <p class="pt-3 mb-2">IBT Global Trading is dedicated to the trading, import, and export of precious raw materials, particularly gold. With a global presence, we offer tailored solutions for the needs of our professional and institutional clients.</p>
                        <p class="mb-0"><a class="mt-3 text-primary font-weight-semi-bold" href="{{ route('about') }}">Learn More<img width="27" height="27" src="{{ asset('/assets/img/demos/law-firm/icons/arrow-right.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary d-inline-block ms-2 p-relative bottom-1'}" /></a></p>
                    </div>
                    <div class="col-md-4 mb-4 mb-lg-0">
                        <h5 class="text-4-5 text-transform-none custom-font-primary mb-3">Contact Us</h5>
                        <div class="row pb-3">
                            <div class="col">
                                <div class="feature-box feature-box-style-2 align-items-center">
                                    <div class="feature-box-icon">
                                        <img width="34" height="28" src="{{ asset('/assets/img/demos/law-firm/icons/envelope.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 34px; height: 28px;" />
                                    </div>
                                    <div class="feature-box-info ps-1">
                                        <label class="custom-footer-label-1">SEND US AN EMAIL</label>
                                        <strong class="custom-footer-strong-1"><a href="mailto:info@ibtglobalpreciousmetal.com">info@ibtglobalpreciousmetal.com</a></strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="feature-box feature-box-style-2 align-items-center">
                                    <div class="feature-box-icon">
                                        <img width="30" height="30" src="{{ asset('/assets/img/demos/law-firm/icons/phone.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-stroke-color-primary p-relative left-3'}" style="width: 30px; height: 30px;" />
                                    </div>
                                    <div class="feature-box-info ps-1">
                                        <label class="custom-footer-label-1">CALL US NOW</label>
                                        <strong class="custom-footer-strong-1"><a href="tel:+9711234567" class="text-color-light">+971 123 4567</a></strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h5 class="text-4-5 text-transform-none custom-font-primary mb-3">Follow Us</h5>

                        <ul class="custom-social-icons-style-1 social-icons social-icons-clean">
                            <li class="social-icons-instagram">
                                <a href="http://www.instagram.com/" class="no-footer-css" target="_blank" title="Instagram"><i class="text-primary fab fa-instagram"></i></a>
                            </li>
                            <li class="social-icons-twitter mx-4">
                                <a href="http://www.twitter.com/" class="no-footer-css" target="_blank" title="Twitter"><i class="text-primary fab fa-x-twitter"></i></a>
                            </li>
                            <li class="social-icons-facebook">
                                <a href="http://www.facebook.com/" class="no-footer-css" target="_blank" title="Facebook"><i class="text-primary fab fa-facebook-f"></i></a>
                            </li>
                        </ul>
                        <h5 class="text-4-5 text-transform-none custom-font-primary mb-3 mt-3">Legal Notices</h5>
                        <a href="{{ route('legal.notice') }}" class="no-footer-css" title="Legal Notice">Legal Notices</a>
                    </div>
                </div>
            </div>
            <div class="footer-copyright footer-copyright-style-2">
                <div class="container py-2">
                    <div class="row py-4">
                        <div class="col d-flex align-items-center justify-content-center">
                            <p>© Copyright {{ date('Y') }} IBT Trading. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Vendor -->
    <script src="{{ asset('/assets/vendor/plugins/js/plugins.min.js') }}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('/assets/js/theme.js') }}"></script>

    <!-- Revolution Slider Scripts -->
    <script src="{{ asset('/assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- Current Page Vendor and Views -->
    <script src="{{ asset('/assets/js/views/view.contact.js') }}"></script>

    <!-- Demo -->
    <script src="{{ asset('/assets/js/demos/demo-law-firm.js') }}"></script>

    <!-- Theme Custom -->
    <script src="{{ asset('/assets/js/custom.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('/assets/js/theme.init.js') }}"></script>

</body>

</html>