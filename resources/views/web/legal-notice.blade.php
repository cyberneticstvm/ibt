@extends("web.base")
@section("content")
<section class="page-header page-header-modern bg-color-dark page-header-lg border-0 m-0">
    <div class="container position-relative z-index-2">
        <div class="row text-center text-md-start py-3">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="font-weight-bold text-color-primary text-10 mb-0">Legal Notices</h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb breadcrumb-dark font-weight-bold d-block text-md-end text-4 mb-0">
                    <li><a href="{{ route('index') }}" class="text-decoration-none text-color-primary">Home</a></li>
                    <li class="text-upeercase active text-white">Legal Notices</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container py-5 my-3">
    <div class="row">
        <div class="col-lg-12 mb-4 mb-lg-0">
            <h2 class="mb-0 font-weight-bold">Legal Notices</h2>
            <div class="divider divider-primary divider-small mt-2 mb-4">
                <hr class="my-0 me-auto">
            </div>
            <p class="text-3-5 line-height-9">This website is owned and operated by IBT Global Trading. The following legal notices and terms of use apply to all visitors and users of this website:</p>
            <p class="text-3-5 line-height-9">Privacy Policy: We are committed to protecting your privacy. Our privacy policy outlines how we collect, use, and protect your personal information.</p>
            <p class="text-3-5 line-height-9">Terms of Service: By using this website, you agree to comply with our terms of service, which govern the use of our website and the services we provide.</p>
            <p class="text-3-5 line-height-9">Disclaimer: All information provided on this website is for informational purposes only and does not constitute financial advice. We make no warranties regarding the accuracy or completeness of the information provided.</p>
            <p class="text-3-5 line-height-9">Intellectual Property: All content on this website, including text, images, and logos, is the property of IBT Global Trading and is protected by copyright laws. Unauthorized use of any content is strictly prohibited.</p>
            <p class="text-3-5 line-height-9">Contact Information: For any questions or concerns regarding these legal notices, please contact us at <a href="mailto:info@ibtglobalpreciousmetal.com">info@ibtglobalpreciousmetal.com</a> or at our business address.</p>
        </div>
    </div>
</div>
@endsection