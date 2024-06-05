@extends("base")
@section("content")
<!-- start page title section -->
<section class="wow animate__fadeIn cover-background background-position-top top-space" style="background-image:url({{ asset('/assets/images/header-bg.svg') }});">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-12 d-flex flex-column text-center justify-content-center page-title-large padding-30px-tb">
                <!-- start page title -->
                <h1 class="alt-font text-deep-pink font-weight-600 mb-0">Precious Metals and Currency Prices</h1>
                <!-- end page title -->
            </div>
        </div>
    </div>
</section>
<!-- end page title section -->
<!-- start story section -->
<section class="wow animate__fadeIn">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6 text-center md-margin-30px-bottom wow animate__fadeInLeft">
                <script type="text/javascript">
                    document.write('<iframe width="300" height="260" src="https://liveindex.org/widget/300-light.php" frameborder="0" hspace="0" vspace="0" scrolling="0" style="background:transparent" ></iframe>')
                </script>
            </div>
            <div class="col-lg-7 col-md-6 text-center text-md-start padding-eight-lr lg-padding-six-lr md-padding-15px-lr wow animate__fadeInRight" data-wow-delay="0.2s">
                <span class="text-deep-pink alt-font margin-10px-bottom d-inline-block text-medium">Don’t worry, you’re in safe hands.</span>
                <h6 class="alt-font text-extra-dark-gray">We are committed to our customers’ success from start to finish. Our input helps make their solutions.</h6>
                <p>"Check the current prices of gold, silver, platinum, and major currencies. Updated in real-time to provide you with the most recent information. This feature allows you to stay informed about market trends and make timely decisions for your trading activities."</p>
                <a href="{{ route('index') }}" class="btn btn-dark-gray btn-small text-extra-small btn-rounded margin-5px-top"><i class="fa-solid fa-circle-play icon-very-small margin-5px-right no-margin-left" aria-hidden="true"></i> Our Services</a>
            </div>
        </div>
    </div>
</section>
<!-- end story section -->
@endsection