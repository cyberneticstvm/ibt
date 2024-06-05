@extends("base")
@section("content")
<!-- start hero with parallax section -->
<section class="wow animate__fadeIn p-0 parallax sm-background-image-center" data-parallax-background-ratio="0.5" style="background-image:url({{ asset('/assets/images/bg3.svg') }});">
    <div class="container full-screen position-relative">
        <div class="row m-0 h-100 align-items-center">
            <div class="col-xl-12 col-md-12 text-center text-lg-start bg-white-opacity padding-six-all lg-padding-eight-all">
                <div class="alt-font text-extra-dark-gray text-uppercase font-weight-700 letter-spacing-minus-2 title-large text-center">IBT Global Trading</div>
                <div class="separator-line-horrizontal-full w-100 margin-35px-tb md-margin-25px-tb sm-margin-20px-tb bg-extra-dark-gray"></div>
                <span class="text-dark-gray text-extra-large font-weight-300 margin-35px-bottom d-block md-margin-25px-bottom sm-margin-15px-bottom text-justify">Welcome to IBT Global Precious Metal Trading, specializing in the trading, import, and export of precious metals. We provide secure and reliable services for professionals and institutions in the industry. Our commitment to excellence ensures that our clients receive the highest quality service and support for all their precious metal trading needs.</span>
                <a href="{{ route('index') }}" class="btn btn-dark-gray btn-medium">Know More</a>
            </div>
            <div class="down-section text-center">
                <a href="#why" class="section-link up-down-ani"><i class="ti-mouse icon-small bounce text-deep-pink"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- end hero banner with parallax section -->
<!-- start feature box section  -->
<section id="why" class="wow animate__fadeIn bg-extra-dark-gray wow animate__fadeIn lg-padding-two-lr sm-no-padding-lr">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center">
            <!-- start feature box item -->
            <div class="col-sm-8 feature-box-1 md-margin-60px-bottom sm-margin-40px-bottom wow animate__fadeIn">
                <div class="d-flex align-items-center margin-15px-bottom alt-font">
                    <h3 class="char-value letter-spacing-minus-1 text-medium-gray font-weight-300 mb-0">01.</h3>
                    <span class="text-large line-height-22 padding-20px-left padding-20px-left w-100">Trading of Precious Metals.</span>
                </div>
                <p class="w-90 lg-w-100">"We specialize in the trading of precious metals, primarily gold, for professional and institutional clients. Our trading services are designed to provide maximum value and security for your investments."</p>
                <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-start"></div>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col-sm-8 feature-box-1 md-margin-60px-bottom sm-margin-40px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                <div class="d-flex align-items-center margin-15px-bottom alt-font">
                    <h3 class="char-value letter-spacing-minus-1 text-medium-gray font-weight-300 mb-0">02.</h3>
                    <span class="text-large line-height-22 padding-20px-left w-100">Import-Export of Precious Metals.</span>
                </div>
                <p class="w-90 lg-w-100">"We handle the import and export of precious metals with rigorous attention to security and compliance. Our services ensure that your transactions are conducted smoothly and efficiently, adhering to international standards and regulations."</p>
                <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-start"></div>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col-sm-8 feature-box-1 wow animate__fadeIn" data-wow-delay="0.4s">
                <div class="d-flex align-items-center margin-15px-bottom alt-font">
                    <h3 class="char-value letter-spacing-minus-1 text-medium-gray font-weight-300 mb-0">03.</h3>
                    <span class="text-large line-height-22 padding-20px-left w-100">Consulting.</span>
                </div>
                <p class="w-90 lg-w-100">"We offer consulting services to optimize international transactions and ensure the success of operations. Our experts provide valuable insights and strategies to help you navigate the complexities of the global precious metals market."</p>
                <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-start"></div>
            </div>
            <!-- end feature box item -->
        </div>
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2">
            <!-- start feature box item -->
            <div class="col-sm-8 feature-box-1 md-margin-60px-bottom sm-margin-40px-bottom wow animate__fadeIn" data-wow-delay="0.6s">
                <div class="d-flex align-items-center margin-15px-bottom alt-font">
                    <h3 class="char-value letter-spacing-minus-1 text-medium-gray font-weight-300 mb-0">04.</h3>
                    <span class="text-large line-height-22 padding-20px-left w-100">Facilitator.</span>
                </div>
                <p class="w-90 lg-w-100">"We leverage our experience to facilitate exchanges between buyers and sellers of precious metals, ensuring smooth and efficient transactions. Our facilitation services are designed to bridge the gap between parties, ensuring successful and reliable transactions."</p>
                <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-start"></div>
            </div>
            <!-- end feature box item -->
        </div>
    </div>
</section>
<!-- end feature box section -->
<!-- start section -->
<section class="wow animate__fadeIn md-no-padding-bottom sm-padding-50px-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 col-xl-6 col-xxl-5 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                <h5 class="alt-font font-weight-700 text-extra-dark-gray margin-20px-bottom text-uppercase">About IBT Global Trading</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-sm-6 text-center ps-0 lg-padding-15px-left md-no-padding wow animate__fadeIn">
                <img src="{{ asset('/assets/images/1.svg') }}" alt="IBT Global Trading" class="w-100">
            </div>
            <div class="col-xl-3 col-sm-6 text-center ps-0 lg-padding-15px-left md-no-padding wow animate__fadeIn" data-wow-delay="0.2s">
                <img src="{{ asset('/assets/images/2.svg') }}" alt="IBT Global Trading" class="w-100">
            </div>
            <div class="col-xl-6 ps-0 lg-margin-15px-top md-no-margin-top md-no-padding-right wow animate__fadeIn" data-wow-delay="0.4s">
                <div class="d-flex flex-column align-content-center justify-content-center bg-extra-dark-gray padding-twelve-all md-padding-ten-all text-center text-lg-start sm-padding-five-lr sm-padding-fifteen-tb w-100 h-100">
                    <p class="text-justify">"IBT Global Trading is dedicated to the trading, import, and export of precious raw materials, particularly gold. With a global presence, we offer tailored solutions for the needs of our professional and institutional clients. Our team of experts brings years of experience in the precious metals market, ensuring that our services are both comprehensive and tailored to meet the specific needs of our clients. Our mission is to facilitate seamless and secure transactions for our clients worldwide."</p>
                    <a href="{{ route('index') }}" class="text-uppercase alt-font text-white-2 text-extra-small">Our Services <i class="fa-solid fa-arrow-right-long margin-5px-left text-deep-pink text-medium position-relative top-2" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start portfolio section -->
<section class="bg-extra-dark-gray wow animate__fadeIn lg-padding-two-lr md-no-padding-lr">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-4 col-md-6 col-sm-8 wow animate__fadeIn">
                <div class="padding-ten-right md-padding-ten-lr sm-no-padding-lr">
                    <div class="icon-box d-table w-100 mx-auto mx-lg-0 sm-w-100">
                        <div class="icon-box-holder align-middle d-table-cell position-relative">
                            <i class="icon-map icon-medium text-extra-medium-gray"></i>
                            <span class="text-large line-height-24 alt-font">Location.<br>MAJID SULTAN BLDG Al Muteena, DEIRA G01-010, PO Box: 60418.</span>
                        </div>
                    </div>
                    <div class="icon-box d-table w-100 mx-auto mx-lg-0 sm-w-100">
                        <div class="icon-box-holder align-middle d-table-cell position-relative">
                            <i class="icon-envelope icon-medium text-extra-medium-gray"></i>
                            <span class="text-large line-height-24 alt-font">Email.<br><a href="mailto:info@ibtglobalpreciousmetal.com">info@ibtglobalpreciousmetal.com</a></span>
                        </div>
                    </div>
                    <div class="icon-box d-table w-100 mx-auto mx-lg-0 sm-w-100">
                        <div class="icon-box-holder align-middle d-table-cell position-relative">
                            <i class="icon-mobile icon-medium text-extra-medium-gray"></i>
                            <span class="text-large line-height-24 alt-font">Contact.<br><a href="callto:+9711234567">+971 123 4567</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-8 sm-margin-five-tb wow animate__fadeIn" data-wow-delay="0.2s">
                <div class="md-padding-ten-right md-no-padding-right">
                    <img src="{{ asset('/assets/images/contact.svg') }}" alt="IBT Global Trading" class="w-100">
                </div>
            </div>
            <div class="col-xl-4 col-sm-10 lg-margin-seven-top wow animate__fadeIn" data-wow-delay="0.4s">
                <div class="padding-ten-left lg-no-padding-lr text-center text-lg-start md-padding-30px-lr sm-no-padding-lr">
                    <span class="text-extra-large text-medium-gray alt-font d-block margin-20px-bottom md-margin-15px-bottom">IBT Global Trading believe in the power of ideas.</span>
                    <p>"For any information requests, please contact us via the form below or use the provided contact details. Our team is available to assist you with any inquiries and provide the support you need."</p>
                    <a href="{{ route('index') }}" class="btn btn-very-small btn-transparent-white">Contact Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- start portfolio section -->
@endsection