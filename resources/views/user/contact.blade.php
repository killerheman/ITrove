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
            <h2>We’d love to hear from you <br />for your massage</h2>
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
                                <textarea name="message" placeholder="Massage"></textarea>
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
<section class="contact-info-two">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                <div class="content_block_21">
                    <div class="content-box">
                        <h2>Contact information</h2>
                        <div class="single-item">
                            <div class="icon-box"><i class="fas fa-headphones"></i></div>
                            <h3>Make a Call</h3>
                            <span>LET’S TALK WITH OUR EXPERTS</span>
                            <p><a href="tel:0088827240">+91-9434601912</a>, Mon - Fri: 09.00 to 18.00</p>
                        </div>
                        <div class="single-item">
                            <div class="icon-box"><i class="far fa-envelope"></i></div>
                            <h3>Send a Mail</h3>
                            <span>DONT’S HESITATE TO MAIL</span>
                            <p><a href="mailto:info@innovationtrove.in">info@innovationtrove.in</a>, <a href="mailto:innovationtrove@gmail.com">innovationtrove@gmail.com</a></p>
                        </div>
                        <div class="single-item">
                            <div class="icon-box"><i class="far fa-paper-plane"></i></div>
                            <h3>Location</h3>
                            <span>VISIT TO EXPLORE THE WORLD</span>
                            <p>Aragaon, Near Petrol Pump, Jaigaon
                                Jalpaiguri,West bengal (736182)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 map-column">
                <div class="map-inner">
                    <div
                        class="google-map"
                        id="contact-google-map"
                        data-map-lat="40.712776"
                        data-map-lng="-74.005974"
                        data-icon-path="assets/images/icons/map-marker.png"
                        data-map-title="Brooklyn, New York, United Kingdom"
                        data-map-zoom="12"
                        data-markers='{
                            "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/icons/map-marker.png"]
                        }'>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-info-two end -->

@endsection
