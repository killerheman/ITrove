@extends('user.includes.master')
@section('title','About us | Best it company in Lucknow | Top it companies in Lucknow | Lucknow\'s best company | It Company -  Innovation trove ')
@section('meta_keywords','Best it company in Lucknow,Top it companies in Lucknow,Lucknow\'s best company')
@section('meta_description','About us | As the best IT company in Lucknow, we pride ourselves on being among the top IT companies in the city. Our expert team delivers exceptional solutions, making us Lucknow\'s best company for all your IT needs. Discover what sets us apart!')
@section('title', 'Contact-us')
@section('content')
    <!-- Page Title -->
    <section class="page-title centred">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-87.png);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>About Us</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- about-style-nine -->
    <section class="about-style-nine">
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <figure class="image clearfix js-tilt"><img
                                src="{{ asset('frontend/assets/images/resource/about-7.png') }}" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_20">
                        <div class="content-box">
                            <div class="sec-title style-two">
                                <h5>ABOUT COMPANY</h5>
                                <h2>Mission is to bring force of simulated intelligence to business</h2>
                                <div class="divider" style="background-image: url(assets/images/icons/divider-1.png);">
                                </div>
                            </div>
                            <div class="text">
                                <p>To take a trivial example, which of us ever undertakes laborious physical exercise,
                                    except to obtain some advantage from it but right to find fault with a man who chooses
                                    enjoy.for your business work.</p>
                                <p>Which of us ever undertakes laborious physical exercise, except to obtain advantage from
                                    it who do not know how to pursue pleasure.</p>
                            </div>
                            <div class="video-inner">
                                <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image"
                                    data-caption=""><i class="fas fa-play"></i></a>
                                <h5>Video Intro <br />About Our Company</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-nine end -->

    <!-- works-style-two -->
    <section class="works-style-two centred bg-color-1">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-13.png);"></div>
        <div class="auto-container">
            <div class="sec-title style-two">
                <h5>HOW IT WORKS</h5>
                <h2>Easy and simple work process</h2>
                <div class="divider" style="background-image: url(assets/images/icons/divider-1.png);"></div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 works-block">
                    <div class="works-block-two">
                        <div class="inner-box wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
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
                                <div class="icon-bg" style="background-image: url(assets/images/icons/icon-bg-1.png);">
                                </div>
                                <i class="flaticon-cloud-network"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 works-block">
                    <div class="works-block-two">
                        <div class="inner-box wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
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
                                <div class="icon-bg" style="background-image: url(assets/images/icons/icon-bg-2.png);">
                                </div>
                                <i class="flaticon-computer"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 works-block">
                    <div class="works-block-two">
                        <div class="inner-box wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
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
                                <div class="icon-bg" style="background-image: url(assets/images/icons/icon-bg-3.png);">
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

    <!-- chooseus-style-three -->
    <section class="chooseus-style-three about-page centred">
        <div class="auto-container">
            <div class="sec-title style-two">
                <h5>Why chooose us</h5>
                <h2>Why people select us</h2>
                <div class="divider"
                    style="background-image: url({{ asset('frontend/assets/images/icons/divider-1.png') }});"></div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                    <div class="chooseus-block-two wow fadeInLeft animated" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="icon-box"><img src="{{ asset('frontend/assets/images/icons/icon-6.png') }}"
                                    alt=""></figure>
                            <h3>Worldwide Experience</h3>
                            <p>Nor again is there any individual who loves or seeks after agony of itself, since conditions.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                    <div class="chooseus-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="icon-box"><img src="{{ asset('frontend/assets/images/icons/icon-7.png') }}"
                                    alt=""></figure>
                            <h3>Incentive for Results</h3>
                            <p>Aside from get a few focal points from ithas any to criticize an outcomes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                    <div class="chooseus-block-two wow fadeInRight animated" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="icon-box"><img src="{{ asset('frontend/assets/images/icons/icon-9.png') }}"
                                    alt=""></figure>
                            <h3>High-Quality Results</h3>
                            <p>This mistakens idea of denouncing and was born complete system.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- chooseus-style-three end -->

    <!-- funfact-section -->
    <section class="funfact-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                        <div class="counter-block-two">
                            <div class="inner-box">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="2.5">0</span><span>k</span>
                                </div>
                                <h4>Completed Work</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                        <div class="counter-block-two">
                            <div class="inner-box">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="1.7">0</span><span>k</span>
                                </div>
                                <h4>Business Covered</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                        <div class="counter-block-two">
                            <div class="inner-box">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="50">0</span>
                                </div>
                                <h4>Expert <br />Developer</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                        <div class="counter-block-two">
                            <div class="inner-box">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="1">0</span><span>M</span>
                                </div>
                                <h4>Happy Customers</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- funfact-section end -->

    <!-- skills-section -->
    <section class="skills-section about-page">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-9.png);"></div>
        <div class="anim-icon">
            <div class="icon icon-1 rotate-me" style="background-image: url(assets/images/shape/anim-icon-2.png);"></div>
        </div>
        <div class="auto-container">
            <div class="sec-title centred">
                <h5>SKILLS & FACTS</h5>
                <h2>We keep our self refreshed with <br />most recent patterns</h2>
                <div class="divider" style="background-image: url(assets/images/icons/divider-1.png);"></div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box" data-wow-duration="1500ms">
                        <figure class="image js-tilt"><img
                                src="{{ asset('frontend/assets/images/resource/skills-1.png') }}" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_2">
                        <div class="content-box">
                            <div class="text">
                                <p>As a solution providing company we offer a range consulting, development quality testing
                                    services with 100% satisfaction.</p>
                            </div>
                            <div class="progress-inner">
                                <div class="progress-box">
                                    <div class="icon-box"><i class="fas fa-comments"></i></div>
                                    <h4>Website Development</h4>
                                    <div class="bar-box">
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="85%"></div>
                                        </div>
                                        <div class="count-text">85%</div>
                                    </div>
                                </div>
                                <div class="progress-box">
                                    <div class="icon-box"><i class="fas fa-mobile"></i></div>
                                    <h4>App Development </h4>
                                    <div class="bar-box">
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="65%"></div>
                                        </div>
                                        <div class="count-text">65%</div>
                                    </div>
                                </div>
                                <div class="progress-box">
                                    <div class="icon-box"><i class="fas fa-laptop"></i></div>
                                    <h4>Software Development</h4>
                                    <div class="bar-box">
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="75%"></div>
                                        </div>
                                        <div class="count-text">75%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- skills-section end -->



@endsection
