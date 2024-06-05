@extends("web.base")
@section("content")
<section class="page-header page-header-modern bg-color-dark page-header-lg border-0 m-0">
    <div class="container position-relative z-index-2">
        <div class="row text-center text-md-start py-3">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="font-weight-bold text-color-primary text-10 mb-0">Precious Metals and Currency Prices</h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb breadcrumb-dark font-weight-bold d-block text-md-end text-4 mb-0">
                    <li><a href="{{ route('index') }}" class="text-decoration-none text-color-primary">Home</a></li>
                    <li class="text-upeercase active text-white">Precious Metals and Currency Prices</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container py-5 my-3">
    <div class="row">
        <div class="col-lg-8 mb-4 mb-lg-0">
            <h2 class="mb-0 font-weight-bold">Precious Metals and Currency Prices</h2>
            <div class="divider divider-primary divider-small mt-2 mb-4">
                <hr class="my-0 me-auto">
            </div>
            <p class="text-3-5 line-height-9">Check the current prices of gold, silver, platinum, and major currencies. Updated in real-time to provide you with the most recent information. This feature allows you to stay informed about market trends and make timely decisions for your trading activities.</p>
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
            <script type="text/javascript">
                document.write('<iframe width="300" height="260" src="https://liveindex.org/widget/300-light.php" frameborder="0" hspace="0" vspace="0" scrolling="0" style="background:transparent" ></iframe>')
            </script>
        </div>
    </div>
</div>
@endsection