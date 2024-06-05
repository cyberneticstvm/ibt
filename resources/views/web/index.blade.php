@extends("web.base")
@section("content")
<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-modern dots-modern-lg dots-horizontal-center show-dots-hover show-dots-xs nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 7000}" data-dynamic-height="['700px','700px','700px','550px','500px']" style="height: 700px;">
    <div class="owl-stage-outer">
        <div class="owl-stage">

            <!-- Carousel Slide 1 -->
            <div class="owl-item position-relative" style="background-image: url({{ asset('/assets/images/bg1.svg') }}); background-size: cover; background-position: center;">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-6">
                            <div class="d-flex flex-column justify-content-center h-100">
                                <p class="custom-font-slider-2 text-white" data-plugin-animated-letters data-plugin-options="{'startDelay': 750, 'minWindowWidth': 0, 'animationSpeed': 30}">Trading, Import, and Export of Precious Metals</p>
                                <h2 class="custom-font-slider-1 mb-0 font-weight-bold appear-animation text-white" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">IBT Global Trading</h2>
                                <div class="divider divider-primary divider-small text-start mt-2 mb-4 mx-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">
                                    <hr class="my-0">
                                </div>
                                <p class="text-3-5 line-height-9 appear-animation text-white" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">Welcome to IBT Global Precious Metal Trading, specializing in the trading, import, and export of precious metals. We provide secure and reliable services for professionals and institutions in the industry. Our commitment to excellence ensures that our clients receive the highest quality service and support for all their precious metal trading needs.</p>

                                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1250">
                                    <div class="d-flex align-items-center mt-2">
                                        <a href="{{ route('about') }}" class="btn btn-dark btn-modern text-uppercase font-weight-bold text-2 py-3 btn-px-4">Learn More</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--<div class="position-absolute left-100pct bottom-0 transform3dx-n50 w-75 ms-5">
                        <img src="{{ asset('/assets/img/demos/law-firm/slides/slide-1-1.png') }}" class="img-fluid mw-100 w-auto appear-animation" alt="" data-appear-animation="fadeIn" data-appear-animation-delay="100" />
                    </div>-->
                </div>
            </div>

            <!-- Carousel Slide 2 -->
            <div class="owl-item position-relative" style="background-image: url({{ asset('/assets/images/bg2.svg') }}); background-size: cover; background-position: center;">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col text-center">
                            <div class="d-flex flex-column justify-content-center h-100">
                                <p class="custom-font-slider-2 text-light" data-plugin-animated-letters data-plugin-options="{'startDelay': 750, 'minWindowWidth': 0, 'animationSpeed': 30}">Trading, Import, and Export of Precious Metals</p>
                                <h2 class="custom-font-slider-1 mb-0 font-weight-bold text-light appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">IBT Global Trading</h2>
                                <div class="divider divider-primary divider-small mt-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">
                                    <hr class="my-0 me-auto">
                                </div>
                                <p class="text-3-5 line-height-9 appear-animation text-white" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">Welcome to IBT Global Precious Metal Trading, specializing in the trading, import, and export of precious metals. We provide secure and reliable services for professionals and institutions in the industry. Our commitment to excellence ensures that our clients receive the highest quality service and support for all their precious metal trading needs.</p>

                                <div class="text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1250">
                                    <a href="{{ route('about') }}" class="btn btn-light text-dark btn-modern text-uppercase font-weight-bold text-2 py-3 btn-px-4">Learn More</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="owl-nav">
        <button type="button" role="presentation" class="owl-prev" aria-label="Previous"></button>
        <button type="button" role="presentation" class="owl-next" aria-label="Next"></button>
    </div>
    <div class="owl-dots mb-5">
        <button role="button" class="owl-dot active"><span></span></button>
        <button role="button" class="owl-dot"><span></span></button>
    </div>
</div>

<section class="section section-default section-no-border my-0">
    <div class="container pt-3 pb-4">
        <div class="row">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <h2 class="mb-0 font-weight-bold appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="100">Who We Are</h2>
                <div class="divider divider-primary divider-small mt-2 mb-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                    <hr class="my-0 me-auto">
                </div>
                <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                    <p class="text-3-5 line-height-9">IBT Global Trading is dedicated to the trading, import, and export of precious raw materials, particularly gold. With a global presence, we offer tailored solutions for the needs of our professional and institutional clients. Our team of experts brings years of experience in the precious metals market, ensuring that our services are both comprehensive and tailored to meet the specific needs of our clients. Our mission is to facilitate seamless and secure transactions for our clients worldwide.</p>

                    <a class="mt-3 font-weight-semi-bold" href="{{ route('about') }}">Learn More<img width="27" height="27" src="{{ asset('/assets/img/demos/law-firm/icons/arrow-right.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary d-inline-block ms-2 p-relative bottom-1'}" /></a>
                </div>
            </div>
            <div class="col-lg-4">
                <h4 class="mb-0 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="400">Our Commitment</h4>
                <div class="divider divider-primary divider-small mt-2 mb-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
                    <hr class="my-0 me-auto">
                </div>
                <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
                    <p class="mt-4 mb-0">Welcome to IBT Global Precious Metal Trading, specializing in the trading, import, and export of precious metals. We provide secure and reliable services for professionals and institutions in the industry. Our commitment to excellence ensures that our clients receive the highest quality service and support for all their precious metal trading needs.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section bg-transparent section-no-border my-0">
    <div class="container pt-3 pb-4">
        <div class="row">
            <div class="col text-center">
                <div class="appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="0">
                    <h2 class="mb-0 font-weight-bold">Our Services</h2>
                    <div class="divider divider-primary divider-small mt-2 mb-4 text-center">
                        <hr class="my-0 mx-auto">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6">
                <div class="feature-box feature-box-style-2 mb-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                    <div class="feature-box-icon mt-3">
                        <img width="50" height="50" src="{{ asset('/assets/img/demos/law-firm/icons/successfull-cases.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark'}" />
                    </div>
                    <div class="feature-box-info ms-3">
                        <h4 class="mb-2">Trading of Precious Metals</h4>
                        <p>We specialize in the trading of precious metals, primarily gold, for professional and institutional clients. Our trading services are designed to provide maximum value and security for your investments.</p>
                        <a class="mt-3 font-weight-semi-bold" href="{{ route('service') }}">Learn More<img width="27" height="27" src="{{ asset('/assets/img/demos/law-firm/icons/arrow-right.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary d-inline-block ms-2 p-relative bottom-1'}" /></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="feature-box feature-box-style-2 mb-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                    <div class="feature-box-icon mt-3">
                        <img width="48" height="48" src="{{ asset('/assets/img/demos/law-firm/icons/business-law.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                    </div>
                    <div class="feature-box-info ms-3">
                        <h4 class="mb-2">Import-Export of Precious Metals</h4>
                        <p>We handle the import and export of precious metals with rigorous attention to security and compliance. Our services ensure that your transactions are conducted smoothly and efficiently, adhering to international standards and regulations.</p>
                        <a class="mt-3 font-weight-semi-bold" href="{{ route('service') }}">Learn More<img width="27" height="27" src="{{ asset('/assets/img/demos/law-firm/icons/arrow-right.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary d-inline-block ms-2 p-relative bottom-1'}" /></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="feature-box feature-box-style-2 mb-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                    <div class="feature-box-icon mt-3">
                        <img width="48" height="48" src="{{ asset('/assets/img/demos/law-firm/icons/health-law.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                    </div>
                    <div class="feature-box-info ms-3">
                        <h4 class="mb-2">Consulting</h4>
                        <p>We offer consulting services to optimize international transactions and ensure the success of operations. Our experts provide valuable insights and strategies to help you navigate the complexities of the global precious metals market.</p>
                        <a class="mt-3 font-weight-semi-bold" href="{{ route('service') }}">Learn More<img width="27" height="27" src="{{ asset('/assets/img/demos/law-firm/icons/arrow-right.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary d-inline-block ms-2 p-relative bottom-1'}" /></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="feature-box feature-box-style-2 mb-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                    <div class="feature-box-icon mt-3">
                        <img width="48" height="48" src="{{ asset('/assets/img/demos/law-firm/icons/business-years.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': ''}" />
                    </div>
                    <div class="feature-box-info ms-3">
                        <h4 class="mb-2">Facilitator</h4>
                        <p>We leverage our experience to facilitate exchanges between buyers and sellers of precious metals, ensuring smooth and efficient transactions. Our facilitation services are designed to bridge the gap between parties, ensuring successful and reliable transactions.</p>
                        <a class="mt-3 font-weight-semi-bold" href="{{ route('service') }}">Learn More<img width="27" height="27" src="{{ asset('/assets/img/demos/law-firm/icons/arrow-right.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary d-inline-block ms-2 p-relative bottom-1'}" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection