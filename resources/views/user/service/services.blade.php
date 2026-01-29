@extends('user.includes.master')

@section('meta_title', $serviceData->first()->meta_title ?? 'Services | Innovation Trove')
@section('meta_description', $serviceData->first()->meta_description ?? 'Expert IT solutions in Lucknow.')
@section('meta_keywords', $serviceData->first()->meta_keyword ?? 'IT Services, Lucknow')

@section('title', 'Services')

@section('content')
<section class="page-title centred">
    <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-87.png') }});"></div>
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

<section class="service-section service-page">
    <div class="auto-container">
        <div class="sec-title style-two centred">
            <h5>Beyond Solutions</h5>
            <h2>Intelligent Tech for Startups and Enterprises</h2>
            <div class="divider" style="background-image: url({{ asset('frontend/assets/images/icons/divider-1.png') }});"></div>
        </div>

        <div class="row clearfix">
            @foreach ($serviceData as $data)
            <div class="col-lg-6 col-md-12 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <a href="{{ route('service_details', $data->slug) }}">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{ $data->pic ? asset('storage/' . $data->pic) : asset('frontend/assets/images/service/service-8.png') }}" alt="{{ $data->title }}">
                            </figure>

                            <div class="text">
                                <div class="icon-box">
                                    <i class="{{ $data->fa_icon ?? 'flaticon-it' }}"></i>
                                    <div class="hover-shape"></div>
                                </div>
                                <h3>{{ $data->title ?? '' }}</h3>
                                <p>{{ $data->description }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="works-section">
    <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-88.png') }});"></div>
    <div class="auto-container">
        <div class="sec-title">
            <h5>HOW IT WORKS</h5>
            <h2>Our Working Process</h2>
            <div class="divider" style="background-image: url({{ asset('frontend/assets/images/icons/divider-1.png') }});"></div>
        </div>
        <div class="row clearfix">
            @foreach($works as $key => $work)
            <div class="col-lg-4 col-md-6 col-sm-12 working-block">
                <div class="working-block-one wow fadeInUp animated" data-wow-delay="{{ $key * 200 }}ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        @if(!$loop->last)
                        <div class="arrow" style="background-image: url({{ asset('frontend/assets/images/shape/arrow-' . ($key + 1) . '.png') }});"></div>
                        @endif
                        
                        <div class="icon-box">
                            <i class="flaticon-cloud-network"></i>
                            <span>0{{ $key + 1 }}</span>
                            <div class="shape" style="background-image: url({{ asset('frontend/assets/images/shape/shape-4.png') }});"></div>
                            <div class="overlay-shape" style="background-image: url({{ asset('frontend/assets/images/shape/shape-5.png') }});"></div>
                        </div>
                        
                        <h3>{{ $work->title }}</h3>
                        <p>{{ $work->short_description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="newsletter-section">
    <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-28.png') }});"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                <div class="content_block_9">
                    <div class="content-box">
                         <div class="sec-title style-two light">
                            <h5>SUBSCRIBE US</h5>
                            <h2>Join our global community</h2>
                            <div class="divider" style="background-image: url({{ asset('frontend/assets/images/icons/divider-2.png') }});"></div>
                        </div>
                        <div class="form-inner">
                            <form action="#" method="post" class="newsletter-form">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Enter your Email Address" required="">
                                    <button type="submit" class="theme-btn btn-nine">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                <div class="image-box wow slideInRight animated">
                    <figure class="image js-tilt"><img src="{{ asset('frontend/assets/images/icons/email-1.png') }}" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection