@extends('user.includes.master')
@section('title', 'Contact-us')
@section('content')
<!-- Page Title -->
<section class="page-title centred">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-87.png);"></div>
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
<section class="contact-style-two sec-pad centred">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-68.png);"></div>
    <div class="auto-container">
        <div class="sec-title style-two">
            <h5>SEND MESSAGE</h5>
            <h2>We’d love to hear from you <br />for your message</h2>
            <div class="divider" style="background-image: url(assets/images/icons/divider-1.png);"></div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-10 col-md-12 col-sm-12 offset-lg-1 inner-column">
                <div class="form-inner">
                    <form method="post" action="{{route('enquiry')}}" id="contact-form" class="default-form">
                        @csrf
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <i class="far fa-user"></i>
                                <input type="text" name="name" placeholder="Your Name" required="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <i class="far fa-envelope"></i>
                                <input type="email" name="email" placeholder="Email Address" required="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <i class="fas fa-phone"></i>
                                <input type="text" name="phone" required="" placeholder="Phone">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <i class="far fa-user"></i>
                                <input type="text" name="subject" required="" placeholder="Subject">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                <button class="theme-btn btn-seven" type="submit" name="submit-form">Send Message</button>
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
