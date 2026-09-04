@extends('user.includes.master')

@section('meta_title', 'Contact Innovation Trove | Hire Developers & Software Consulting')
@section('meta_description', 'Get in touch with Innovation Trove for custom software development, web applications, and dedicated remote developer hiring. Fast 12-hour response guaranteed.')
@section('meta_keywords', 'contact innovation trove, hire software developers, software company contact, IT consulting India, offshore developers India, bespoke software agency')

@section('title', 'Contact Innovation Trove')

@section('content')
<!-- Page Title -->
<section class="page-title centred">
    <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-87.png') }});"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Contact Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Contact Now</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->

<!-- contact-style-two -->
<section class="contact-style-two sec-pad centred py-5">
    <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-68.png') }});"></div>
    <div class="auto-container">
        <div class="sec-title style-two">
            <h5>START A CONVERSATION</h5>
            <h2>Let’s Discuss Your Next Digital Breakthrough</h2>
            <div class="divider" style="background-image: url({{ asset('frontend/assets/images/icons/divider-1.png') }});"></div>
            <p style="max-width: 700px; margin: 0 auto; color: #666; font-size: 16px;">
                Whether you have an upcoming product roadmap, need dedicated engineering capacity, or require an architectural consultation, our team replies within 12 business hours.
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
                    <form method="post" action="{{ route('enquiry') }}" id="contact-form" class="default-form">
                        @csrf
                        <div class="row clearfix text-left">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <label style="font-weight: 600; color: #333; font-size: 14px;">Your Full Name *</label>
                                <input type="text" name="name" placeholder="e.g. John Doe / Rahul Sharma" required class="form-control" style="height: 50px;">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <label style="font-weight: 600; color: #333; font-size: 14px;">Official Business Email *</label>
                                <input type="email" name="email" placeholder="name@company.com" required class="form-control" style="height: 50px;">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <label style="font-weight: 600; color: #333; font-size: 14px;">Phone / WhatsApp Number *</label>
                                <input type="text" name="phone" required placeholder="+1 (US) or +91 (IN) Phone Number" class="form-control" style="height: 50px;">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <label style="font-weight: 600; color: #333; font-size: 14px;">What Are You Looking For? *</label>
                                <input type="text" name="subject" required placeholder="e.g. Custom Web App / Dedicated Developers" class="form-control" style="height: 50px;">
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <label style="font-weight: 600; color: #333; font-size: 14px;">Project Details & Scope *</label>
                                <textarea name="message" placeholder="Describe your business problem, target audience, timeline, or preferred technology stack..." required class="form-control" rows="5"></textarea>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn text-center mt-3">
                                <button class="theme-btn btn-seven" type="submit" name="submit-form">Send Message</button>
                                <p class="mt-2 mb-0 text-muted" style="font-size: 13px;">
                                    <i class="fas fa-lock text-success mr-1"></i> Strictly confidential &bull; NDA guaranteed &bull; No marketing spam
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
