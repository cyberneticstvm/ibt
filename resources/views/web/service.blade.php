@extends("web.base")
@section("content")
<section class="page-header page-header-modern bg-color-dark page-header-lg border-0 m-0">
    <div class="container position-relative z-index-2">
        <div class="row text-center text-md-start py-3">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="font-weight-bold text-color-primary text-10 mb-0">Our Services</h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb breadcrumb-dark font-weight-bold d-block text-md-end text-4 mb-0">
                    <li><a href="{{ route('index') }}" class="text-decoration-none text-color-primary">Home</a></li>
                    <li class="text-upeercase active text-white">Our Services</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container py-5 my-3">
    <div class="row">
        <div class="col-lg-12 mb-4 mb-lg-0">
            <h2 class="mb-0 font-weight-bold">Our Services</h2>
            <div class="divider divider-primary divider-small mt-2 mb-4">
                <hr class="my-0 me-auto">
            </div>
        </div>
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
@endsection