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
    <link rel="stylesheet" href="https://www.ifcmarkets.co.in/css/amcharts/style.css" type="text/css">
    <link rel="stylesheet" href="https://www.ifcmarkets.co.in/css/front/charts.css" type="text/css">
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

    <script type="text/javascript">
        var lang_cw = "en";
        var hname_cw = "www.ifcmarkets.co.in";
        var instrument_list = "AUDCAD,AUDCHF,AUDJPY,AUDNZD,AUDUSD,CADCHF,CADJPY,CHFJPY,EURAUD,EURCAD,EURCHF,EURCZK,EURGBP,EURHKD,EURJPY,EURMXN,EURNZD,EURPLN,EURRUB,EURSEK,EURTRY,EURUSD,EURZAR,GBPAUD,GBPCAD,GBPCHF,GBPJPY,GBPNZD,GBPSEK,GBPUSD,NZDCAD,NZDCHF,NZDJPY,NZDUSD,USDCAD,USDCHF,USDCZK,USDDKK,USDJPY,USDMXN,USDNOK,USDPLN,USDRUB,USDSEK,USDSGD,USDTRY,USDZAR,CAC40,DAX,DJI,FTSE100,NIKKEI,Nd100,SP500,USDIDX,#C-BRENT,#C-COCOA,#C-COFFEE,#C-COPPER,#C-CORN,#C-COTTON,#C-FCATTLE,#C-HEATOIL,#C-LCATTLE,#C-NATGAS,#C-OATS,#C-ORANGE,#C-SOYB,#C-SOYBM,#C-SUGAR,#C-WHEAT,OIL,#S-AA,#S-AAPL,#S-ACI,#S-ADBE,#S-AEP,#S-AES,#S-AIG,#S-AMZN,#S-ANR,#S-AXP,#S-BA,#S-BAC,#S-BK,#S-BP,#S-C,#S-CAT,#S-COP,#S-CSCO,#S-CVX,#S-CX,#S-DAL,#S-DD,#S-DIS,#S-DOW,#S-EBAY,#S-F,#S-FB,#S-GE,#S-GG,#S-GM,#S-GOOG,#S-GS,#S-GT,#S-HD,#S-HOG,#S-HON,#S-HPQ,#S-HTZ,#S-IBM,#S-INTC,#S-JNJ,#S-JPM,#S-KO,#S-LCC,#S-LLY,#S-MA,#S-MAR,#S-MBI,#S-MCD,#S-MET,#S-MMM,#S-MO,#S-MRK,#S-MS,#S-MSFT,#S-NKE,#S-NOK,#S-OXY,#S-PBR,#S-PEP,#S-PFE,#S-PG,#S-PM,#S-RF,#S-SD,#S-T,#S-TM,#S-TOT,#S-TROX,#S-UNH,#S-UTX,#S-V,#S-VZ,#S-WFC,#S-WFT,#S-WMT,#S-WU,#S-XOM,#S-XRX,#S-YHOO,XAGEUR,XAGUSD,XAUEUR,XAUUSD,XPDUSD,XPTUSD,XAUOIL,XAUSnP,XAUXAG";
        var selected_instr_array = "1:AUDCAD,1:AUDCHF,1:AUDJPY,1:AUDNZD,1:AUDUSD,1:CADCHF,1:CADJPY,1:CHFJPY,1:EURAUD,1:EURCAD,1:EURCHF,1:EURCZK,1:EURGBP,1:EURHKD,1:EURJPY,1:EURMXN,1:EURNZD,1:EURPLN,1:EURRUB,1:EURSEK,1:EURTRY,1:EURUSD,1:EURZAR,1:GBPAUD,1:GBPCAD,1:GBPCHF,1:GBPJPY,1:GBPNZD,1:GBPSEK,1:GBPUSD,1:NZDCAD,1:NZDCHF,1:NZDJPY,1:NZDUSD,1:USDCAD,1:USDCHF,1:USDCZK,1:USDDKK,1:USDJPY,1:USDMXN,1:USDNOK,1:USDPLN,1:USDRUB,1:USDSEK,1:USDSGD,1:USDTRY,1:USDZAR,2:CAC40,2:DAX,2:DJI,2:FTSE100,2:NIKKEI,2:Nd100,2:SP500,2:USDIDX,3:#C-BRENT,3:#C-COCOA,3:#C-COFFEE,3:#C-COPPER,3:#C-CORN,3:#C-COTTON,3:#C-FCATTLE,3:#C-HEATOIL,3:#C-LCATTLE,3:#C-NATGAS,3:#C-OATS,3:#C-ORANGE,3:#C-SOYB,3:#C-SOYBM,3:#C-SUGAR,3:#C-WHEAT,3:OIL,4:#S-AA,4:#S-AAPL,4:#S-ACI,4:#S-ADBE,4:#S-AEP,4:#S-AES,4:#S-AIG,4:#S-AMZN,4:#S-ANR,4:#S-AXP,4:#S-BA,4:#S-BAC,4:#S-BK,4:#S-BP,4:#S-C,4:#S-CAT,4:#S-COP,4:#S-CSCO,4:#S-CVX,4:#S-CX,4:#S-DAL,4:#S-DD,4:#S-DIS,4:#S-DOW,4:#S-EBAY,4:#S-F,4:#S-FB,4:#S-GE,4:#S-GG,4:#S-GM,4:#S-GOOG,4:#S-GS,4:#S-GT,4:#S-HD,4:#S-HOG,4:#S-HON,4:#S-HPQ,4:#S-HTZ,4:#S-IBM,4:#S-INTC,4:#S-JNJ,4:#S-JPM,4:#S-KO,4:#S-LCC,4:#S-LLY,4:#S-MA,4:#S-MAR,4:#S-MBI,4:#S-MCD,4:#S-MET,4:#S-MMM,4:#S-MO,4:#S-MRK,4:#S-MS,4:#S-MSFT,4:#S-NKE,4:#S-NOK,4:#S-OXY,4:#S-PBR,4:#S-PEP,4:#S-PFE,4:#S-PG,4:#S-PM,4:#S-RF,4:#S-SD,4:#S-T,4:#S-TM,4:#S-TOT,4:#S-TROX,4:#S-UNH,4:#S-UTX,4:#S-V,4:#S-VZ,4:#S-WFC,4:#S-WFT,4:#S-WMT,4:#S-WU,4:#S-XOM,4:#S-XRX,4:#S-YHOO,5:XAGEUR,5:XAGUSD,5:XAUEUR,5:XAUUSD,5:XPDUSD,5:XPTUSD,6:XAUOIL,6:XAUSnP,6:XAUXAG";
        var vi = document.createElement("script");
        vi.type = "text/javascript";
        vi.async = true;
        vi.src = "https://www.ifcmarkets.co.in/js/chartsWidgetAM.js";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(vi, s);
    </script>

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