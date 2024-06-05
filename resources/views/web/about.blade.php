@extends("web.base")
@section("content")
<section class="page-header page-header-modern bg-color-dark page-header-lg border-0 m-0">
    <div class="container position-relative z-index-2">
        <div class="row text-center text-md-start py-3">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="font-weight-bold text-color-primary text-10 mb-0">About</h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb breadcrumb-dark font-weight-bold d-block text-md-end text-4 mb-0">
                    <li><a href="{{ route('index') }}" class="text-decoration-none text-color-primary">Home</a></li>
                    <li class="text-upeercase active text-white">About Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container py-5 my-3">
    <div class="row">
        <div class="col-lg-12 mb-4 mb-lg-0">
            <h2 class="mb-0 font-weight-bold">About Us</h2>
            <div class="divider divider-primary divider-small mt-2 mb-4">
                <hr class="my-0 me-auto">
            </div>
            <p class="text-3-5 line-height-9">IBT Global Trading is dedicated to the trading, import, and export of precious raw materials, particularly gold. With a global presence, we offer tailored solutions for the needs of our professional and institutional clients. Our team of experts brings years of experience in the precious metals market, ensuring that our services are both comprehensive and tailored to meet the specific needs of our clients. Our mission is to facilitate seamless and secure transactions for our clients worldwide.</p>
        </div>
    </div>
</div>
@endsection