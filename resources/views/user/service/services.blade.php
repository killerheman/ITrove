@extends('user.includes.master')
@section('meta_title','Services| Best it company in Lucknow | Top it companies in Lucknow | Lucknow\'s best company | It Company -  Innovation trove ')
@section('meta_description','Explore our services at Innovation Trove, where we stand as the best IT company in Lucknow. As one of the top IT companies in the city, we offer cutting-edge solutions tailored to your needs. Discover why we are Lucknow\'s best company for innovative IT services.')
@section('meta_keywords','Best it company in Lucknow,Top it companies in Lucknow,Lucknow\'s best company')
@section('title', 'Contact-us')
@section('content')
<!-- Page Title -->
        <section class="page-title centred">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-87.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Services</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="#">Services</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->
        <!-- service-section -->
        <section class="service-section service-page">
            <div class="auto-container">
                <div class="sec-title style-two centred">
                    <h5>MORE THAN SOLUTIONS</h5>
                    <h2>Information science answers for <br />startup furthermore, ventures</h2>
                    <div class="divider" style="background-image: url(assets/images/icons/divider-1.png);"></div>
                </div>
                {{-- @dd($serviceData) --}}
                <div class="row clearfix">
                    @foreach ($serviceData as $data)

                    <div class="col-lg-6 col-md-12 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <a href="{{route('service_details',$data->slug)}}">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{asset('frontend/assets/images/service/service-8.png')}}" alt=""></figure>
                                    <div class="text">
                                        <div class="icon-box">
                                            <i class=" {{$data->fa_icon??''}}"></i>
                                            <div class="hover-shape"></div>
                                        </div>
                                        <h3>{{$data->title??''}}</h3>
                                        <p>{{$data->description}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach

                    {{-- <div class="col-lg-6 col-md-12 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="assets/images/service/service-9.png" alt=""></figure>
                                <div class="text">
                                    <div class="icon-box">
                                        <i class="flaticon-virtual-reality"></i>
                                        <div class="hover-shape"></div>
                                    </div>
                                    <h3><a href="{{ route('home') }}">Website Development and Design</a></h3>
                                    <p> Creating and maintaining websites, including web design, web programming, eCommerce solutions, and content management systems.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="assets/images/service/service-10.png" alt=""></figure>
                                <div class="text">
                                    <div class="icon-box">
                                        <i class="flaticon-artificial-intelligence"></i>
                                        <div class="hover-shape"></div>
                                    </div>
                                    <h3><a href="{{ route('home') }}">Mobile App Development</a></h3>
                                    <p>Creating applications for various mobile platforms like iOS and Android.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="assets/images/service/service-10.png" alt=""></figure>
                                <div class="text">
                                    <div class="icon-box">
                                        <i class="flaticon-artificial-intelligence"></i>
                                        <div class="hover-shape"></div>
                                    </div>
                                    <h3><a href="{{ route('home') }}">Blockchain Services</a></h3>
                                    <p>Developing blockchain solutions, including smart contracts, cryptocurrency applications, and distributed ledger technologies</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="assets/images/service/service-10.png" alt=""></figure>
                                <div class="text">
                                    <div class="icon-box">
                                        <i class="flaticon-artificial-intelligence"></i>
                                        <div class="hover-shape"></div>
                                    </div>
                                    <h3><a href="{{ route('home') }}">Database Management and Development</a></h3>
                                    <p>Designing, developing, and managing database systems to store and retrieve data efficiently.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="assets/images/service/service-11.png" alt=""></figure>
                                <div class="text">
                                    <div class="icon-box">
                                        <i class="flaticon-data-science"></i>
                                        <div class="hover-shape"></div>
                                    </div>
                                    <h3><a href="{{ route('home') }}">E-commerce Solutions</a></h3>
                                    <p>Building and maintaining online stores, including shopping cart integration, payment gateway setup, and inventory management.</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        <!-- service-section end -->

        <!-- works-section -->
        <section class="works-section">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-88.png);"></div>
            <div class="auto-container">
                <div class="sec-title">
                    <h5>HOW IT WORKS</h5>
                    <h2>Information science <br />arrangements for startup</h2>
                    <div class="divider" style="background-image: url(assets/images/icons/divider-1.png);"></div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 working-block">
                        <div class="working-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="arrow" style="background-image: url(assets/images/shape/arrow-1.png);"></div>
                                <div class="icon-box">
                                    <i class="flaticon-cloud-network"></i>
                                    <span>01</span>
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-4.png);"></div>
                                    <div class="overlay-shape" style="background-image: url(assets/images/shape/shape-5.png);"></div>
                                </div>
                                <h3>Casing the Issue</h3>
                                <p>To take a trivial example, which idea of ever undertakes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 working-block">
                        <div class="working-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="arrow" style="background-image: url(assets/images/shape/arrow-2.png);"></div>
                                <div class="icon-box">
                                    <i class="flaticon-computer"></i>
                                    <span>02</span>
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-4.png);"></div>
                                    <div class="overlay-shape" style="background-image: url(assets/images/shape/shape-5.png);"></div>
                                </div>
                                <h3>Gather the Information</h3>
                                <p>Best every pleasure is too welcomed every pain avoided.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 working-block">
                        <div class="working-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <i class="flaticon-circuit"></i>
                                    <span>03</span>
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-4.png);"></div>
                                    <div class="overlay-shape" style="background-image: url(assets/images/shape/shape-5.png);"></div>
                                </div>
                                <h3>Cycle the Information</h3>
                                <p>Have to be repudiated annoyances accepted the wise.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- works-section end -->

        <!-- newsletter-section -->
        <section class="newsletter-section">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-28.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                        <div class="content_block_9">
                            <div class="content-box">
                                 <div class="sec-title style-two light">
                                    <h5>SUBSCRIBE US</h5>
                                    <h2>Join our global community and take latest update</h2>
                                    <div class="divider" style="background-image: url(assets/images/icons/divider-2.png);"></div>
                                </div>
                                <div class="form-inner">
                                    <form action="https://azim.commonsupport.com/Bithlo/contact.html" method="post" class="newsletter-form">
                                        <div class="form-group">
                                            <div class="single-checkbox">
                                                <input type="radio" name="check-box" id="check1">
                                                <label for="check1"><span></span>accept ITrove private policy</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Enter your Email Address" required="">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="theme-btn btn-nine">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                                {{--  <ul class="other-links clearfix">
                                    <li><a href="index-4.html">Exclusive Offers & Discount</a></li>
                                    <li><a href="index-4.html">Expert Advice & Tutorial</a></li>
                                    <li><a href="index-4.html">Regular Updates in Inbox</a></li>
                                </ul>  --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                        <div class="image-box wow slideInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <figure class="image js-tilt"><img src="{{ asset('frontend/assets/images/icons/email-1.png') }}" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- newsletter-section end -->
        <!-- testimonial-style-three -->
        <section class="testimonial-style-three service-page">
            <div class="pattern-layer wow slideInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="background-image: url(assets/images/shape/shape-89.png);"></div>
            <div class="auto-container">
                <div class="sec-title style-two">
                    <h5>TESTIMONIALS</h5>
                    <h2>What clients say about our <br />amazing work</h2>
                    <div class="divider" style="background-image: url({{ asset('frontend/assets/images/icons/divider-1.png') }});"></div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 thumb-column">
                        <div class="thumb-box">
                            <figure class="testimonial-thumb">
                                <div class="shape" style="background-image: url(assets/images/shape/shape-26.png);"></div>
                                <img src="{{ asset('frontend/assets/images/resource/testimonial-3.png')}}" alt="Innovation trove">
                            </figure>
                            <div class="dotted-box">
                                <div class="dotted dotted-1"></div>
                                <div class="dotted dotted-2"></div>
                                <div class="dotted dotted-3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                        <div class="testimonial-content">
                            <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-quotes"></i></div>
                                    <div class="text">
                                        <p>Your teams proactive approach in suggesting improvements and future-proofing our IT infrastructure has been invaluable. The advice and consultation provided have helped us make informed decisions and stay ahead in our industry.</p>
                                    </div>
                                    <div class="author-info">
                                        <h3>Ganesh Paswan</h3>
                                        <span class="designation">IT Head</span>
                                        <ul class="rating clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-quotes"></i></div>
                                    <div class="text">
                                        <p> The attention to detail and the quality of work delivered by your team have been exceptional. Its evident that your team takes great pride in their work, and this is reflected in the end product we received.</p>
                                    </div>
                                    <div class="author-info">
                                        <h3>A. Ahamad</h3>
                                        <span class="designation"></span>
                                        <ul class="rating clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                {{--  <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-quotes"></i></div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor amet consectetur adipisicing elit sed eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim eniam quis nostrud exercitation.</p>
                                    </div>
                                    <div class="author-info">
                                        <h3>Nicolas Lawson</h3>
                                        <span class="designation">STO Expert of Bussiness</span>
                                        <ul class="rating clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>  --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-style-three end -->
@endsection
