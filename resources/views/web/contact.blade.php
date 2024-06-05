@extends("web.base")
@section("content")
<section class="page-header page-header-modern bg-color-dark page-header-lg border-0 m-0">
    <div class="container position-relative z-index-2">
        <div class="row text-center text-md-start py-3">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="font-weight-bold text-color-primary text-10 mb-0">Contact</h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb breadcrumb-dark font-weight-bold d-block text-md-end text-4 mb-0">
                    <li><a href="{{ route('index') }}" class="text-decoration-none text-color-primary">Home</a></li>
                    <li class="text-upeercase active text-white">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container py-5 my-3">
    <div class="row">
        <div class="col-lg-12 mb-4 mb-lg-0">
            <h2 class="mb-0 font-weight-bold">Contact Us</h2>
            <div class="divider divider-primary divider-small mt-2 mb-4">
                <hr class="my-0 me-auto">
            </div>
            <p class="text-3-5 line-height-9">For any information requests, please contact us via the form below or use the provided contact details. Our team is available to assist you with any inquiries and provide the support you need.</p>
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
            <p class="mb-0"><strong class="text-dark text-4">Address</strong></p>
            <p class="mb-0">MAJID SULTAN BLDG Al Muteena</p>
            <p class="mb-0">DEIRA G01-010, PO Box: 60418</p>
            <p class="mb-0">Dubai, UAE</p>

            <p class="mb-0 mt-3"><strong class="text-dark text-4">Business Hours:</strong></p>
            <p class="mb-0">Mon - Sat 9:00am - 6:00pm</p>
            <p class="mb-0">Sunday - CLOSED</p>

            <p class="mb-0 mt-3"><strong class="text-dark text-4">Inquiries</strong></p>
            <p class="mb-3"><a href="tel:+9711234567" class="text-color-dark">+971 123 4567</a></p>

            <p class="mb-0 mt-3"><strong class="text-dark text-4">Email:</strong></p>
            <p class="mb-0"><a href="mailto:info@ibtglobalpreciousmetal.com">info@ibtglobalpreciousmetal.com</a></p>
        </div>
        <div class="col-lg-8 mb-4 mb-lg-0 bg-muted">
            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                <p class="font-weight-medium text-4">Consult right now with our experienced team for complete solutions to your trading requirements.</p>
            </div>
            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
                <form class="form-style-2" action="{{ route('contact') }}" method="POST">
                    <div class="contact-form-success alert alert-success d-none mt-4">
                        <strong>Success!</strong> Your message has been sent to us.
                    </div>

                    <div class="contact-form-error alert alert-danger d-none mt-4">
                        <strong>Error!</strong> There was an error sending your message.
                        <span class="mail-error-message text-1 d-block"></span>
                    </div>

                    <div class="row pb-2 mb-1">
                        <div class="form-group col">
                            <input type="text" value="" placeholder="Full Name" data-msg-required="Please enter your name." maxlength="100" class="form-control form-control-sm text-3 h-auto py-2" name="name" required>
                        </div>
                    </div>
                    <div class="row pb-2 mb-1">
                        <div class="form-group col-lg-6">
                            <input type="text" value="" placeholder="Contact Number" data-msg-required="Please enter the Contact Number." maxlength="100" class="form-control text-3 h-auto py-2" name="contact" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="email" value="" placeholder="Email Address" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" required>
                        </div>
                    </div>
                    <div class="row pb-2 mb-1">
                        <div class="form-group col">
                            <textarea maxlength="5000" placeholder="Message" data-msg-required="Please enter your message." rows="8" class="form-control text-3 h-auto py-2" name="message" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col text-end">
                            <input type="submit" value="Submit Form" class="btn btn-dark btn-modern text-uppercase font-weight-bold text-2 py-3 btn-px-4" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection