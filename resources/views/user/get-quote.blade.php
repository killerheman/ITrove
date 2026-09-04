@extends('user.includes.master')

@section('meta_title', 'Request a Free Project Estimate & Cost Breakdown | Innovation Trove')
@section('meta_description', 'Get a transparent, itemized project estimate and technical discovery proposal for your software, web application, or dedicated remote developer requirements.')
@section('meta_keywords', 'software cost estimate, web development quote, hire dedicated developers quote, offshore software pricing India, MVP build estimate')

@section('title', 'Get a Project Estimate')

@section('content')
<!-- Page Title -->
<section class="page-title centred">
    <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-87.png') }});"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Request a Free Project Estimate</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Get a Quote</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->

<!-- contact-style-two (Quote Form) -->
<section class="contact-style-two sec-pad centred py-5">
    <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-68.png') }});"></div>
    <div class="auto-container">
        <div class="sec-title style-two">
            <h5>TRANSPARENT ESTIMATES</h5>
            <h2>Tell Us About Your Vision & Technical Scope</h2>
            <div class="divider" style="background-image: url({{ asset('frontend/assets/images/icons/divider-1.png') }});"></div>
            <p style="max-width: 700px; margin: 0 auto; color: #666; font-size: 16px;">
                Receive a complimentary architectural review, timeline estimate, and milestone cost breakdown from our senior technical leads within 12 hours.
            </p>
        </div>

        <div class="row clearfix mt-4">
            <div class="col-lg-10 col-md-12 col-sm-12 offset-lg-1 inner-column">
                @if(session('toast_success'))
                    <div class="alert alert-success alert-dismissible fade show text-left mb-4" role="alert">
                        <i class="fas fa-check-circle mr-2"></i> {{ session('toast_success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if(session('toast_error'))
                    <div class="alert alert-danger alert-dismissible fade show text-left mb-4" role="alert">
                        <i class="fas fa-exclamation-triangle mr-2"></i> {{ session('toast_error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <div class="form-inner p-4 p-md-5 bg-white rounded shadow-sm" style="border: 1px solid #edf2f7;">
                    <form method="post" action="{{ route('quote') }}" id="quote-form" class="default-form">
                        @csrf
                        <div class="row clearfix text-left">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <label style="font-weight: 600; color: #333; font-size: 14px;">Your Full Name *</label>
                                <input type="text" name="name" placeholder="John Doe / Jane Smith" required class="form-control" style="height: 50px;">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <label style="font-weight: 600; color: #333; font-size: 14px;">Business Email *</label>
                                <input type="email" name="email" placeholder="john@yourcompany.com" required class="form-control" style="height: 50px;">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <label style="font-weight: 600; color: #333; font-size: 14px;">Phone / WhatsApp with Country Code *</label>
                                <input type="text" name="phone" required placeholder="+1 (US) / +44 (UK) / +91 (IN)" class="form-control" style="height: 50px;">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <label style="font-weight: 600; color: #333; font-size: 14px;">Primary Service Needed *</label>
                                <select class="form-control" name="service" required style="height: 50px;">
                                    <option value="" selected disabled>Select Core Technology / Service</option>
                                    @foreach ($services as $service)
                                        <option value="{{ $service->title }}">{{ $service->title }}</option>
                                    @endforeach
                                    <option value="Dedicated Full-Time Developers">Hire Dedicated Remote Developers</option>
                                    <option value="Other Bespoke Project">Other Custom Software Build</option>
                                </select>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <label style="font-weight: 600; color: #333; font-size: 14px;">Project Scope, Requirements & Target Launch Date *</label>
                                <textarea name="description" placeholder="Briefly describe your project goals, key features, target audience, timeline, or current bottlenecks..." required class="form-control" rows="5"></textarea>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn text-center mt-3">
                                <button class="theme-btn btn-seven" type="submit" name="submit-form">Send Quote Request</button>
                                <p class="mt-2 mb-0 text-muted" style="font-size: 13px;">
                                    <i class="fas fa-shield-alt text-success mr-1"></i> Strictly confidential &bull; 100% Free Architectural Scoping &bull; NDA Guaranteed
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-style-two end -->

<!-- contact-info-two -->
@include('user.includes.contact-info')
<!-- contact-info-two end -->

@endsection
