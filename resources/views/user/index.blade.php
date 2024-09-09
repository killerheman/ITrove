@extends('user.includes.master')
@section('title','Find Best IT Firm and top it companies in Lucknow - Innovation trove')
@section('meta_keywords','Best it company in Lucknow,Top it companies in Lucknow,Lucknow\'s best company')
@section('meta_description','Explore the top IT companies in Lucknow and find the best IT company for your needs. Discover the Lucknow best company offering innovative tech solutions and exceptional service.')
@section('title', 'Home')
@section('content')
 <!-- banner-section -->
 <section class="banner-style-six">
    <div class="pattern-layer"
        style="background-image: url({{ asset('frontend/assets/images/shape/shape-50.png') }});"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box">
                    <figure class="image image-1"><img
                            src="{{ asset('frontend/assets/images/banner/banner-11.png') }}" alt="">
                    </figure>
                    <figure class="image image-2"><img
                            src="{{ asset('frontend/assets/images/banner/banner-12.png') }}" alt="">
                    </figure>
                    <figure class="image image-3"><img
                            src="{{ asset('frontend/assets/images/banner/banner-13.png') }}" alt="">
                    </figure>
                    <figure class="image image-4 wow zoomIn animated" data-wow-delay="300ms"
                        data-wow-duration="1500ms"><img
                            src="{{ asset('frontend/assets/images/icons/chat-1.png') }}" alt="">
                    </figure>
                    <figure class="image image-5"><img
                            src="{{ asset('frontend/assets/images/banner/banner-14.png') }}" alt="">
                    </figure>
                    <figure class="image image-6 wow zoomIn animated" data-wow-delay="300ms"
                        data-wow-duration="1500ms"><img src="assets/images/icons/chat-2.png" alt="">
                    </figure>
                    <figure class="image image-7"><img
                            src="{{ asset('frontend/assets/images/banner/banner-15.png') }}" alt="">
                    </figure>
                    <figure class="image image-8 float-bob-y"><img
                            src="{{ asset('frontend/assets/images/banner/banner-16.png') }}" alt="">
                    </figure>
                    <figure class="image image-9 wow zoomIn animated" data-wow-delay="300ms"
                        data-wow-duration="1500ms"><img
                            src="{{ asset('frontend/assets/images/icons/chat-3.png') }}" alt="">
                    </figure>
                    <figure class="image image-10 float-bob-y" data-wow-duration="1500ms"><img
                            src="{{ asset('frontend/assets/images/banner/banner-17.png') }}" alt="">
                    </figure>
                    <figure class="image image-11 float-bob-y" data-wow-duration="1500ms"><img
                            src="{{ asset('frontend/assets/images/icons/icon-20.png') }}" alt="">
                    </figure>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content-box wow fadeInUp animated" data-wow-delay="00ms"
                    data-wow-duration="1500ms">
                    <h1>Best IT Company in Lucknow</h1>
                    <h5>Build Something Innovative</h5>
                    <p>Let technology accelerate your business. One Stop Solution for all your IT Needs.</p>
                    <div class="btn-box">
                        <a href="{{ route('home') }}" class="theme-btn btn-ten">Contact Team</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-section end -->


<!-- feature-style-two -->
<section class="feature-style-two centred">
    <div class="auto-container">
        <div class="sec-title style-two">
            <h5>Welcome To Innovation Trove</h5>
            <h2>Focus on your client with the <br />right back rub</h2>
            <div class="divider"
                style="background-image: url({{ asset('frontend/assets/images/icons/divider-1.png') }});">
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-two wow fadeInUp animated" data-wow-delay="00ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="icon-box"><img
                                src="{{ asset('frontend/assets/images/icons/icon-13.png') }}" alt="">
                        </figure>
                        <h3>User Prespective</h3>
                        <div class="text">
                            <p>To take a trivial example, which idea of our ever undertakes.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-two wow fadeInUp animated" data-wow-delay="300ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="icon-box"><img
                                src="{{ asset('frontend/assets/images/icons/icon-14.png') }}" alt="">
                        </figure>
                        <h3>Business Prespective</h3>
                        <div class="text">
                            <p>To take a trivial example, which idea of our ever undertakes.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-two wow fadeInUp animated" data-wow-delay="600ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="icon-box"><img
                                src="{{ asset('frontend/assets/images/icons/icon-15.png') }}" alt="">
                        </figure>
                        <h3>Expert Prespective</h3>
                        <div class="text">
                            <p>To take a trivial example, which idea of our ever undertakes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature-style-two end -->

<!-- about-style-five -->
<section class="about-style-five">
    <div class="pattern-layer"
        style="background-image: url({{ asset('frontend/assets/images/shape/shape-37.png') }});"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box">
                    <figure class="image js-tilt"><img
                            src="{{ asset('frontend/assets/images/resource/about-3.png') }}" alt="">
                    </figure>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_11">
                    <div class="content-box">
                        <div class="sec-title style-two">
                            <h5>ABOUT COMPANY</h5>
                            {{-- <h2>Let Technology Accelerate Your Business</h2> --}}
                            <h2>Top IT Companies in Lucknow</h2>
                            <div class="divider"
                                style="background-image: url({{ asset('frontend/assets/images/icons/divider-1.png') }});">
                            </div>
                        </div>
                        <div class="text">
                            <p>At <b>ITrove</b>, we pride ourselves on being <b>Lucknow's best IT company</b>, delivering cutting-edge technology solutions tailored to meet the diverse needs of businesses across industries. With years of expertise and a team of skilled professionals, we help organizations thrive in the digital age through innovative IT services.</p>
                        </div>
                        {{-- <div class="inner-box">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item">
                                        <figure class="icon-box"><img
                                                src="{{ asset('frontend/assets/images/icons/icon-6.png') }}"
                                                alt=""></figure>
                                        <h3>Worldwide Experience</h3>
                                        <p>Nor again is there any individual who loves or seeks after agony
                                            of...</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item">
                                        <figure class="icon-box"><img
                                                src="{{ asset('frontend/assets/images/icons/icon-7.png') }}"
                                                alt=""></figure>
                                        <h3>Incentive for Results</h3>
                                        <p>Aside from get a few focal points from ithas any to criticize an
                                            outcomes.</p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="btn-box">
                            <a href="{{ route('about') }}" class="theme-btn btn-ten">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-style-five end -->


<!-- service-style-five -->
<section class="service-style-five centred">
    <div class="auto-container">
        <div class="sec-title style-two">
            <h5>OUR SERVICES</h5>
            <h2>Focus on your client with the <br />right back rub</h2>
            <div class="divider"
                style="background-image: url({{ asset('frontend/assets/images/icons/divider-1.png') }});">
            </div>
        </div>
        <div class="three-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">

                @foreach ($services as $service)
                    <div class="service-block-five">
                        <div class="inner-box">

                            <figure class="image-box">
                                <img
                                    src="{{ asset($service->pic??'') }}" alt="" style="height:300px;">
                            </figure>
                            <h3><a href="{{route('service_details',$service->slug)}}">{{$service->title}}</a></h3>
                            {{-- <p>{{$service->description??''}}</p> --}}
                            <p style="text-align: justify";>{{ Str::limit($service->description ?? '', 400) }}</p>

                            <div class="btn-box"><a href="{{route('service_details',$service->slug)}}">Read More</a></div>
                        </div>
                    </div>
                @endforeach



        </div>
    </div>
</section>
<!-- service-style-five end -->


<!-- works-style-two -->
<section class="works-style-three centred">
    <div class="pattern-layer"
        style="background-image: url({{ asset('frontend/assets/images/shape/shape-38.png') }});"></div>
    <div class="auto-container">
        <div class="sec-title style-two light">
            <h5>HOW IT WORKS</h5>
            <h2>Easy and simple work process</h2>
            <div class="divider"
                style="background-image: url({{ asset('frontend/assets/images/icons/divider-2.png') }});">
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 works-block">
                <div class="works-block-two">
                    <div class="inner-box wow fadeInUp animated" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="text">
                            <h3>Casing the Issue</h3>
                            <p>To take a trivial example, which idea of ever undertakes.</p>
                        </div>
                        <div class="count-box">
                            <span class="count-text">01</span>
                            <span class="dot-1"></span>
                            <span class="dot-2"></span>
                        </div>
                        <div class="icon-box">
                            <div class="icon-bg"
                                style="background-image: url({{ asset('frontend/assets/images/icons/icon-bg-1.png') }});">
                            </div>
                            <i class="flaticon-cloud-network"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 works-block">
                <div class="works-block-two">
                    <div class="inner-box wow fadeInUp animated" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="text">
                            <h3>Gather the Information</h3>
                            <p>Best every pleasure is too welcomed every pain avoided.</p>
                        </div>
                        <div class="count-box">
                            <span class="count-text">02</span>
                            <span class="dot-1"></span>
                            <span class="dot-2"></span>
                        </div>
                        <div class="icon-box">
                            <div class="icon-bg"
                                style="background-image: url({{ asset('frontend/assets/images/icons/icon-bg-2.png') }});">
                            </div>
                            <i class="flaticon-computer"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 works-block">
                <div class="works-block-two">
                    <div class="inner-box wow fadeInUp animated" data-wow-delay="600ms"
                        data-wow-duration="1500ms">
                        <div class="text">
                            <h3>Cycle the Information</h3>
                            <p>Have to be repudiated annoyances accepted the wise.</p>
                        </div>
                        <div class="count-box">
                            <span class="count-text">03</span>
                            <span class="dot-1"></span>
                            <span class="dot-2"></span>
                        </div>
                        <div class="icon-box">
                            <div class="icon-bg"
                                style="background-image: url({{ asset('frontend/assets/images/icons/icon-bg-3.png') }});">
                            </div>
                            <i class="flaticon-circuit"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- works-style-two end -->


<!-- team-section -->
{{-- <section class="team-section">
    <div class="auto-container">
        <div class="sec-title style-two">
            <h5>TEAM MEMBERS</h5>
            <h2>Our best team person</h2>
            <div class="divider"
                style="background-image: url({{ asset('frontend/assets/images/icons/divider-1.png') }});">
            </div>
        </div>
        <div class="four-item-carousel owl-carousel owl-theme owl-dots-none">
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('frontend/assets/images/team/team-1.png') }}" alt="">
                    </figure>
                    <div class="lower-content">
                        <div class="text">
                            <h3><a href="#">Sanjay Gupta</a></h3>
                            <span class="designation">Director</span>
                        </div>
                        <div class="overlay-content">
                            <p><a href="mailto:info@innovationtrove.in">info@innovationtrove.in</a></p>
                            <ul class="social-links clearfix">
                                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('frontend/assets/images/team/team-1.png') }}" alt="">
                    </figure>
                    <div class="lower-content">
                        <div class="text">
                            <h3><a href="#">Himanshu Sharma</a></h3>
                            <span class="designation">Managing Director</span>
                        </div>
                        <div class="overlay-content">
                            <p><a href="mailto:info@innovationtrove.in">info@innovationtrove.in</a></p>
                            <ul class="social-links clearfix">
                                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('frontend/assets/images/team/team-1.png') }}" alt="">
                    </figure>
                    <div class="lower-content">
                        <div class="text">
                            <h3><a href="#">Manish Gupta</a></h3>
                            <span class="designation">CEO</span>
                        </div>
                        <div class="overlay-content">
                            <p><a href="mailto:info@innovationtrove.in">info@innovationtrove.in</a></p>
                            <ul class="social-links clearfix">
                                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('frontend/assets/images/team/team-3.png') }}" alt="">
                    </figure>
                    <div class="lower-content">
                        <div class="text">
                            <h3><a href="#">Shivam Jaiswal</a></h3>
                            <span class="designation">Marketing Mangaer (COE)</span>
                        </div>
                        <div class="overlay-content">
                            <p><a href="mailto:info@innovationtrove.in">info@innovationtrove.in</a></p>
                            <ul class="social-links clearfix">
                                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('frontend/assets/images/team/team-3.png') }}" alt="">
                    </figure>
                    <div class="lower-content">
                        <div class="text">
                            <h3><a href="#">Shivam Baranwal</a></h3>
                            <span class="designation">Software Developer</span>
                        </div>
                        <div class="overlay-content">
                            <p><a href="mailto:info@innovationtrove.in">info@innovationtrove.in</a></p>
                            <ul class="social-links clearfix">
                                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('frontend/assets/images/team/team-3.png') }}" alt="">
                    </figure>
                    <div class="lower-content">
                        <div class="text">
                            <h3><a href="#">Anil Yadav</a></h3>
                            <span class="designation">Senior Software Developer</span>
                        </div>
                        <div class="overlay-content">
                            <p><a href="mailto:info@innovationtrove.in">info@innovationtrove.in</a></p>
                            <ul class="social-links clearfix">
                                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('frontend/assets/images/team/team-3.png') }}" alt="">
                    </figure>
                    <div class="lower-content">
                        <div class="text">
                            <h3><a href="#">Sarvjeet Kushwaha</a></h3>
                            <span class="designation">Mern Developer</span>
                        </div>
                        <div class="overlay-content">
                            <p><a href="mailto:info@innovationtrove.in">info@innovationtrove.in</a></p>
                            <ul class="social-links clearfix">
                                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('frontend/assets/images/team/team-3.png') }}" alt="">
                    </figure>
                    <div class="lower-content">
                        <div class="text">
                            <h3><a href="#">Ganesh Kumar</a></h3>
                            <span class="designation">IT Head</span>
                        </div>
                        <div class="overlay-content">
                            <p><a href="mailto:info@innovationtrove.in">info@innovationtrove.in</a></p>
                            <ul class="social-links clearfix">
                                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('frontend/assets/images/team/team-3.png') }}" alt="">
                    </figure>
                    <div class="lower-content">
                        <div class="text">
                            <h3><a href="#">Parmod Kumar</a></h3>
                            <span class="designation">IT Developer</span>
                        </div>
                        <div class="overlay-content">
                            <p><a href="mailto:info@innovationtrove.in">info@innovationtrove.in</a></p>
                            <ul class="social-links clearfix">
                                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('frontend/assets/images/team/team-4.png') }}" alt="">
                    </figure>
                    <div class="lower-content">
                        <div class="text">
                            <h3><a href="#">Jagritee Srivastava</a></h3>
                            <span class="designation">Senior Software Developer</span>
                        </div>
                        <div class="overlay-content">
                            <p><a href="mailto:info@innovationtrove.in">info@innovationtrove.in</a></p>
                            <ul class="social-links clearfix">
                                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('frontend/assets/images/team/team-2.png') }}" alt="">
                    </figure>
                    <div class="lower-content">
                        <div class="text">
                            <h3><a href="#">Astha Yadav</a></h3>
                            <span class="designation">Senior System Engineer</span>
                        </div>
                        <div class="overlay-content">
                            <p><a href="mailto:info@innovationtrove.in">info@innovationtrove.in</a></p>
                            <ul class="social-links clearfix">
                                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('frontend/assets/images/team/team-3.png') }}" alt="">
                    </figure>
                    <div class="lower-content">
                        <div class="text">
                            <h3><a href="#">Deepak Gautam</a></h3>
                            <span class="designation">PHP Developer</span>
                        </div>
                        <div class="overlay-content">
                            <p><a href="mailto:info@innovationtrove.in">info@innovationtrove.in</a></p>
                            <ul class="social-links clearfix">
                                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- team-section end -->

<!-- video-section -->
<section class="video-section mt-5">
    <div class="bg-layer"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 video-column">
                <div class="video-content">
                    <div class="bg-shape-1"></div>
                    <div class="bg-shape-2"></div>
                    <figure class="image"><img
                            src="{{ asset('frontend/assets/images/resource/illestration-1.png') }}"
                            alt=""></figure>
                    <div class="video-btn">
                        <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image"
                            data-caption=""><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box">
                    <figure class="image"><img
                            src="{{ asset('frontend/assets/images/resource/women-1.png') }}" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- video-section end -->



<!-- project-style-four -->
<section class="project-style-four">
    <div class="auto-container">
        <div class="sec-title style-two">
            <h5>CASE STUDIES</h5>
            <h2>Our successful project</h2>
            <div class="divider"
                style="background-image: url({{ asset('frontend/assets/images/icons/divider-1.png') }});">
            </div>
        </div>
    </div>
    <div class="outer-container">
        <div class="four-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
            <div class="project-block-four">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('frontend/assets/images/gallery/project-7.jpg') }}"
                            alt="">
                        <div class="icon-box"><img
                                src="{{ asset('frontend/assets/images/icons/icon-16.png') }}" alt="">
                        </div>
                    </figure>
                    <div class="text">
                        <h5><a href="project-details.html">Artificial Intelligence</a></h5>
                    </div>
                </div>
            </div>
            <div class="project-block-four">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('frontend/assets/images/gallery/project-8.jpg') }}"
                            alt="">
                        <div class="icon-box"><img
                                src="{{ asset('frontend/assets/images/icons/icon-17.png') }}" alt="">
                        </div>
                    </figure>
                    <div class="text">
                        <h5><a href="project-details.html">Technology Vision Science</a></h5>
                    </div>
                </div>
            </div>
            <div class="project-block-four">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('frontend/assets/images/gallery/project-9.jpg') }}"
                            alt="">
                        <div class="icon-box"><img
                                src="{{ asset('frontend/assets/images/icons/icon-18.png') }}" alt="">
                        </div>
                    </figure>
                    <div class="text">
                        <h5><a href="project-details.html">Technology Vision Science</a></h5>
                    </div>
                </div>
            </div>
            <div class="project-block-four">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('frontend/assets/images/gallery/project-10.jpg') }}"
                            alt="">
                        <div class="icon-box"><img
                                src="{{ asset('frontend/assets/images/icons/icon-19.png') }}" alt="">
                        </div>
                    </figure>
                    <div class="text">
                        <h5><a href="project-details.html">Data Scientest Code</a></h5>
                    </div>
                </div>
            </div>
            <div class="project-block-four">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('frontend/assets/images/gallery/project-7.jpg') }}"
                            alt="">
                        <div class="icon-box"><img
                                src="{{ asset('frontend/assets/images/icons/icon-16.png') }}" alt="">
                        </div>
                    </figure>
                    <div class="text">
                        <h5><a href="project-details.html">Artificial Intelligence</a></h5>
                    </div>
                </div>
            </div>
            <div class="project-block-four">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('frontend/assets/images/gallery/project-8.jpg') }}"
                            alt="">
                        <div class="icon-box"><img
                                src="{{ asset('frontend/assets/images/icons/icon-17.png') }}" alt="">
                        </div>
                    </figure>
                    <div class="text">
                        <h5><a href="project-details.html">Technology Vision Science</a></h5>
                    </div>
                </div>
            </div>
            <div class="project-block-four">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('frontend/assets/images/gallery/project-9.jpg') }}"
                            alt="">
                        <div class="icon-box"><img
                                src="{{ asset('frontend/assets/images/icons/icon-18.png') }}" alt="">
                        </div>
                    </figure>
                    <div class="text">
                        <h5><a href="project-details.html">Technology Vision Science</a></h5>
                    </div>
                </div>
            </div>
            <div class="project-block-four">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('frontend/assets/images/gallery/project-10.jpg') }}"
                            alt="">
                        <div class="icon-box"><img
                                src="{{ asset('frontend/assets/images/icons/icon-19.png') }}" alt="">
                        </div>
                    </figure>
                    <div class="text">
                        <h5><a href="project-details.html">Data Scientest Code</a></h5>
                    </div>
                </div>
            </div>
            <div class="project-block-four">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('frontend/assets/images/gallery/project-7.jpg') }}"
                            alt="">
                        <div class="icon-box"><img
                                src="{{ asset('frontend/assets/images/icons/icon-16.png') }}" alt="">
                        </div>
                    </figure>
                    <div class="text">
                        <h5><a href="project-details.html">Artificial Intelligence</a></h5>
                    </div>
                </div>
            </div>
            <div class="project-block-four">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('frontend/assets/images/gallery/project-8.jpg') }}"
                            alt="">
                        <div class="icon-box"><img
                                src="{{ asset('frontend/assets/images/icons/icon-17.png') }}" alt="">
                        </div>
                    </figure>
                    <div class="text">
                        <h5><a href="project-details.html">Technology Vision Science</a></h5>
                    </div>
                </div>
            </div>
            <div class="project-block-four">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('frontend/assets/images/gallery/project-9.jpg') }}"
                            alt="">
                        <div class="icon-box"><img
                                src="{{ asset('frontend/assets/images/icons/icon-18.png') }}" alt="">
                        </div>
                    </figure>
                    <div class="text">
                        <h5><a href="project-details.html">Technology Vision Science</a></h5>
                    </div>
                </div>
            </div>
            <div class="project-block-four">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('frontend/assets/images/gallery/project-10.jpg') }}"
                            alt="">
                        <div class="icon-box"><img
                                src="{{ asset('frontend/assets/images/icons/icon-19.png') }}" alt="">
                        </div>
                    </figure>
                    <div class="text">
                        <h5><a href="project-details.html">Data Scientest Code</a></h5>
                    </div>
                </div>
            </div>
            <div class="project-block-four">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('frontend/assets/images/gallery/project-7.jpg') }}"
                            alt="">
                        <div class="icon-box"><img
                                src="{{ asset('frontend/assets/images/icons/icon-16.png') }}" alt="">
                        </div>
                    </figure>
                    <div class="text">
                        <h5><a href="project-details.html">Artificial Intelligence</a></h5>
                    </div>
                </div>
            </div>
            <div class="project-block-four">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('frontend/assets/images/gallery/project-8.jpg') }}"
                            alt="">
                        <div class="icon-box"><img
                                src="{{ asset('frontend/assets/images/icons/icon-17.png') }}" alt="">
                        </div>
                    </figure>
                    <div class="text">
                        <h5><a href="project-details.html">Technology Vision Science</a></h5>
                    </div>
                </div>
            </div>
            <div class="project-block-four">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('frontend/assets/images/gallery/project-9.jpg') }}"
                            alt="">
                        <div class="icon-box"><img
                                src="{{ asset('frontend/assets/images/icons/icon-18.png') }}" alt="">
                        </div>
                    </figure>
                    <div class="text">
                        <h5><a href="project-details.html">Technology Vision Science</a></h5>
                    </div>
                </div>
            </div>
            <div class="project-block-four">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('frontend/assets/images/gallery/project-10.jpg') }}"
                            alt="">
                        <div class="icon-box"><img
                                src="{{ asset('frontend/assets/images/icons/icon-19.png') }}" alt="">
                        </div>
                    </figure>
                    <div class="text">
                        <h5><a href="project-details.html">Data Scientest Code</a></h5>
                    </div>
                </div>
            </div>
            <div class="project-block-four">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('frontend/assets/images/gallery/project-7.jpg') }}"
                            alt="">
                        <div class="icon-box"><img
                                src="{{ asset('frontend/assets/images/icons/icon-16.png') }}" alt="">
                        </div>
                    </figure>
                    <div class="text">
                        <h5><a href="project-details.html">Artificial Intelligence</a></h5>
                    </div>
                </div>
            </div>
            <div class="project-block-four">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('frontend/assets/images/gallery/project-8.jpg') }}"
                            alt="">
                        <div class="icon-box"><img
                                src="{{ asset('frontend/assets/images/icons/icon-17.png') }}" alt="">
                        </div>
                    </figure>
                    <div class="text">
                        <h5><a href="project-details.html">Technology Vision Science</a></h5>
                    </div>
                </div>
            </div>
            <div class="project-block-four">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('frontend/assets/images/gallery/project-9.jpg') }}"
                            alt="">
                        <div class="icon-box"><img
                                src="{{ asset('frontend/assets/images/icons/icon-18.png') }}" alt="">
                        </div>
                    </figure>
                    <div class="text">
                        <h5><a href="project-details.html">Technology Vision Science</a></h5>
                    </div>
                </div>
            </div>
            <div class="project-block-four">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('frontend/assets/images/gallery/project-10.jpg') }}"
                            alt="">
                        <div class="icon-box"><img
                                src="{{ asset('frontend/assets/images/icons/icon-19.png') }}"
                                alt=""></div>
                    </figure>
                    <div class="text">
                        <h5><a href="project-details.html">Data Scientest Code</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- project-style-four end -->


<!-- team-style-two -->
{{-- <section class="team-style-two">
    <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-40.png')}});"></div>
    <div class="auto-container">
        <div class="sec-title style-two centred">
            <h5>TEAM MEMBERS</h5>
            <h2>Our best team person</h2>
            <div class="divider" style="background-image: url({{ asset('frontend/assets/images/icons/divider-1.png')}});"></div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('frontend/assets/images/team/team-5.png')}}" alt=""></figure>
                            <ul class="social-links clearfix">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Hard Branots</a></h3>
                            <div class="designation">
                                <p>Director</p>
                                <span class="bar"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-two wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('frontend/assets/images/team/team-6.png')}}" alt=""></figure>
                            <ul class="social-links clearfix">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Monica Bana</a></h3>
                            <div class="designation">
                                <p>Head of R&D</p>
                                <span class="bar"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-two wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('frontend/assets/images/team/team-7.png')}}" alt=""></figure>
                            <ul class="social-links clearfix">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Hard Branots</a></h3>
                            <div class="designation">
                                <p>Head of Data Science</p>
                                <span class="bar"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-two wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('frontend/assets/images/team/team-8.png')}}" alt=""></figure>
                            <ul class="social-links clearfix">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Neil Roberto</a></h3>
                            <div class="designation">
                                <p>Data Science</p>
                                <span class="bar"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="more-btn centred">
            <a href="team.html" class="theme-btn btn-ten">View More</a>
        </div>
    </div>
</section> --}}
<!-- team-style-two end -->


<!-- news-style-three -->
<section class="news-style-three sec-pad">
    <div class="auto-container">
        <div class="sec-title style-two centred">
            <h5>NEWS & UPDATES</h5>
            <h2>Latest thinking in Technology and <br />our company news</h2>
            <div class="divider"
                style="background-image: url({{ asset('frontend/assets/images/icons/divider-1.png') }});">
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ asset('frontend/assets/images/news/news-4.jpg') }}" alt="">
                            <a href="blog-details.html"><i class="fas fa-link"></i></a>
                        </figure>
                        <div class="lower-content">
                            <div class="category"><i class="far fa-folder-open"></i><a
                                    href="blog-details.html">Technology News</a></div>
                            <h3><a href="blog-details.html">Named as a Worldwide Innovator For Information</a>
                            </h3>
                            <span class="post-date">DECEMBER 29, 2020</span>
                            <div class="link-box"><a href="blog-details.html"><i
                                        class="fas fa-long-arrow-alt-right"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ asset('frontend/assets/images/news/news-5.jpg') }}" alt="">
                            <a href="blog-details.html"><i class="fas fa-link"></i></a>
                        </figure>
                        <div class="lower-content">
                            <div class="category"><i class="far fa-folder-open"></i><a
                                    href="blog-details.html">Technology News</a></div>
                            <h3><a href="blog-details.html">Present status of Man-made reasoning
                                    Infographic.</a></h3>
                            <span class="post-date">DECEMBER 28, 2020</span>
                            <div class="link-box"><a href="blog-details.html"><i
                                        class="fas fa-long-arrow-alt-right"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ asset('frontend/assets/images/news/news-6.jpg') }}" alt="">
                            <a href="blog-details.html"><i class="fas fa-link"></i></a>
                        </figure>
                        <div class="lower-content">
                            <div class="category"><i class="far fa-folder-open"></i><a
                                    href="blog-details.html">Technology News</a></div>
                            <h3><a href="blog-details.html">Bteach as the Champs in the Worldwide Office
                                    Award</a></h3>
                            <span class="post-date">DECEMBER 27, 2020</span>
                            <div class="link-box"><a href="blog-details.html"><i
                                        class="fas fa-long-arrow-alt-right"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- news-style-three end -->



@endsection
