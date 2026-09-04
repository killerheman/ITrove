@extends('user.includes.master')

@section('meta_title', 'Custom Software & Web App Development Company | Innovation Trove')
@section('meta_keywords', 'custom software development company, web application development, SaaS development, mobile app development, hire dedicated developers, offshore development India, enterprise ERP, Laravel React agency')
@section('meta_description', 'Innovation Trove is a premier custom software and web application development company. We engineer high-performance web apps, mobile apps, SaaS, and ERPs for clients across USA, UK, Europe, and India.')
@section('title', 'Global Software Engineering & Web Solutions')

@section('content')
<!-- banner-section -->
<section class="banner-style-six">
    <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-50.png') }});"></div>
    <div class="auto-container">
        <div class="row clearfix align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box">
                    <figure class="image image-1"><img src="{{ asset('frontend/assets/images/banner/banner-11.png') }}" alt="Innovation Trove"></figure>
                    <figure class="image image-2"><img src="{{ asset('frontend/assets/images/banner/banner-12.png') }}" alt="Web App Architecture"></figure>
                    <figure class="image image-3"><img src="{{ asset('frontend/assets/images/banner/banner-13.png') }}" alt="Software Engineering"></figure>
                    <figure class="image image-4 wow zoomIn animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <img src="{{ asset('frontend/assets/images/icons/chat-1.png') }}" alt="Global Client Collaboration">
                    </figure>
                    <figure class="image image-5"><img src="{{ asset('frontend/assets/images/banner/banner-14.png') }}" alt="Cloud Platform"></figure>
                    <figure class="image image-6 wow zoomIn animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <img src="{{ asset('frontend/assets/images/icons/chat-2.png') }}" alt="Agile Sprints">
                    </figure>
                    <figure class="image image-7"><img src="{{ asset('frontend/assets/images/banner/banner-15.png') }}" alt="Enterprise Systems"></figure>
                    <figure class="image image-8 float-bob-y"><img src="{{ asset('frontend/assets/images/banner/banner-16.png') }}" alt="Mobile Solutions"></figure>
                    <figure class="image image-9 wow zoomIn animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <img src="{{ asset('frontend/assets/images/icons/chat-3.png') }}" alt="24/7 SLA Support">
                    </figure>
                    <figure class="image image-10 float-bob-y" data-wow-duration="1500ms">
                        <img src="{{ asset('frontend/assets/images/banner/banner-17.png') }}" alt="Innovation Trove Tech">
                    </figure>
                    <figure class="image image-11 float-bob-y" data-wow-duration="1500ms">
                        <img src="{{ asset('frontend/assets/images/icons/icon-20.png') }}" alt="Software Engineering Partner">
                    </figure>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content-box wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <span class="badge badge-pill px-3 py-2 mb-3" style="background: rgba(255,255,255,0.15); color: #ffffff; font-size: 13px; font-weight: 600; letter-spacing: 0.5px; border: 1px solid rgba(255,255,255,0.3);">
                        🚀 AGILE SOFTWARE ENGINEERING & DEV TEAMS
                    </span>
                    <h1 style="font-size: 44px; line-height: 54px; font-weight: 800; color: #ffffff; margin-bottom: 18px;">
                        Engineering Scalable Web, Mobile & SaaS Solutions for Global Visionaries
                    </h1>
                    <p style="font-size: 17px; line-height: 28px; color: #ffffff; margin-bottom: 25px;">
                        Partner with an elite IT agency and dedicated development team. We architect custom software, high-performance web platforms, SaaS products, and mobile apps for ambitious startups and established enterprises across the <strong>USA, UK, Europe, and India</strong>.
                    </p>
                    <div class="btn-box d-flex flex-wrap align-items-center">
                        <a href="{{ route('get-quote') }}" class="theme-btn btn-ten mr-3 mb-2">Hire Developers / Get Quote</a>
                        <a href="{{ route('works') }}" class="theme-btn btn-seven mb-2" style="background: rgba(255,255,255,0.15); color: #ffffff; border: 2px solid rgba(255,255,255,0.5);">View Our Portfolio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-section end -->

<!-- Trust Stats Bar -->
<section class="trust-stats-strip py-4" style="background: #ffffff; border-top: 1px solid #edf2f7; border-bottom: 1px solid #edf2f7;">
    <div class="auto-container">
        <div class="row text-center">
            <div class="col-lg-3 col-6 my-2">
                <h3 style="color: #000279; font-weight: 800; font-size: 36px; margin-bottom: 4px;">150+</h3>
                <p style="color: #666; font-size: 14px; font-weight: 600; margin-bottom: 0;">Completed Projects</p>
            </div>
            <div class="col-lg-3 col-6 my-2">
                <h3 style="color: #000279; font-weight: 800; font-size: 36px; margin-bottom: 4px;">98%</h3>
                <p style="color: #666; font-size: 14px; font-weight: 600; margin-bottom: 0;">Client Satisfaction</p>
            </div>
            <div class="col-lg-3 col-6 my-2">
                <h3 style="color: #000279; font-weight: 800; font-size: 36px; margin-bottom: 4px;">10+</h3>
                <p style="color: #666; font-size: 14px; font-weight: 600; margin-bottom: 0;">Countries Served (US, UK, EU, IN)</p>
            </div>
            <div class="col-lg-3 col-6 my-2">
                <h3 style="color: #000279; font-weight: 800; font-size: 36px; margin-bottom: 4px;">24/7</h3>
                <p style="color: #666; font-size: 14px; font-weight: 600; margin-bottom: 0;">Agile Time-Zone Overlap</p>
            </div>
        </div>
    </div>
</section>

<!-- feature-style-two (Core Value Pillars) -->
<section class="feature-style-two centred">
    <div class="auto-container">
        <div class="sec-title style-two">
            <h5>WHY INNOVATION TROVE</h5>
            <h2>Engineered for Performance, Scalability & Speed</h2>
            <div class="divider" style="background-image: url({{ asset('frontend/assets/images/icons/divider-1.png') }});"></div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="icon-box"><img src="{{ asset('frontend/assets/images/icons/icon-13.png') }}" alt="Client-Centric Innovation"></figure>
                        <h3>Client-Centric Architecture</h3>
                        <div class="text">
                            <p>We build software designed directly around your business model, customer conversion funnel, and revenue drivers—never generic one-size-fits-all templates.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-two wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="icon-box"><img src="{{ asset('frontend/assets/images/icons/icon-14.png') }}" alt="Global Standards"></figure>
                        <h3>Global Quality Standards</h3>
                        <div class="text">
                            <p>Modern full-stack technologies (Laravel, React, Node.js, Python, Flutter) with clean modular code, automated CI/CD testing, and enterprise cloud reliability.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-two wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="icon-box"><img src="{{ asset('frontend/assets/images/icons/icon-15.png') }}" alt="Agile Execution"></figure>
                        <h3>Agile & Transparent Sprints</h3>
                        <div class="text">
                            <p>Direct communication via Slack/Teams, weekly video sprint demos, Jira tracking, and full source code IP ownership with strict international NDA protection.</p>
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
    <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-37.png') }});"></div>
    <div class="auto-container">
        <div class="row clearfix align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box">
                    <figure class="image js-tilt">
                        <img src="{{ asset('frontend/assets/images/resource/about-3.png') }}" alt="Innovation Trove Agency">
                    </figure>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_11">
                    <div class="content-box">
                        <div class="sec-title style-two">
                            <h5>ABOUT INNOVATION TROVE</h5>
                            <h2>Your Trusted Technical Partner from Blueprint to Scale</h2>
                            <div class="divider" style="background-image: url({{ asset('frontend/assets/images/icons/divider-1.png') }});"></div>
                        </div>
                        <div class="text">
                            <p>At <strong>Innovation Trove</strong>, we help forward-thinking founders, product managers, and enterprises turn complex business logic into intuitive, high-velocity digital products. Based in India with a global delivery footprint, we combine top-tier technical craft with significant cost advantages for clients across North America, the UK, Europe, and India.</p>
                            <p>Whether you need an end-to-end bespoke software build, a dedicated squad of remote Laravel and React developers, or an enterprise ERP to unify multi-location operations, our agile development methodology ensures high reliability, clean architecture, and rapid time-to-market.</p>
                        </div>
                        <div class="row my-4">
                            <div class="col-sm-6 mb-2">
                                <h5 style="color: #000279; font-weight: 700; font-size: 16px;"><i class="fas fa-check-circle text-primary mr-2"></i> 100% IP & Code Ownership</h5>
                                <p style="font-size: 14px; color: #666;">Complete source code handover and documentation from day one.</p>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <h5 style="color: #000279; font-weight: 700; font-size: 16px;"><i class="fas fa-check-circle text-primary mr-2"></i> Dedicated Tech Leads</h5>
                                <p style="font-size: 14px; color: #666;">Fluent English project managers and senior architects assigned to your build.</p>
                            </div>
                        </div>
                        <div class="btn-box">
                            <a href="{{ route('about') }}" class="theme-btn btn-ten mr-3">Know More About Us</a>
                            <a href="{{ route('get-quote') }}" class="theme-btn btn-seven">Get Free Consultation</a>
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
            <h5>OUR CORE SERVICES</h5>
            <h2>Full-Lifecycle Software & Digital Solutions</h2>
            <div class="divider" style="background-image: url({{ asset('frontend/assets/images/icons/divider-1.png') }});"></div>
        </div>
        <div class="three-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
            @foreach ($services as $service)
                <div class="service-block-five">
                    <div class="inner-box" style="display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
                        <div>
                            <figure class="image-box">
                                <img src="{{ asset('storage/' . $service->pic) }}" 
                                     alt="{{ $service->title }}" 
                                     style="height:260px; width: 100%; object-fit: cover;"
                                     onerror="this.onerror=null;this.src='{{ asset('frontend/assets/images/service/service-1.jpg') }}';">
                            </figure>
                            <h3 style="font-size: 20px; font-weight: 700; margin-top: 15px; margin-bottom: 10px;">
                                <a href="{{ route('service_details', $service->slug) }}">{{ $service->title }}</a>
                            </h3>
                            <p style="text-align: justify; font-size: 14px; line-height: 22px; color: #666;">
                                {{ Str::limit(strip_tags($service->description ?? ''), 160) }}
                            </p>
                        </div>
                        <div class="btn-box mt-3">
                            <a href="{{ route('service_details', $service->slug) }}" class="theme-btn btn-ten" style="padding: 8px 22px; font-size: 13px;">Explore Service <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center mt-5">
            <a href="{{ route('services') }}" class="theme-btn btn-seven">View All Services & Capabilities</a>
        </div>
    </div>
</section>
<!-- service-style-five end -->

<!-- works-style-three (Agile Delivery Process) -->
<section class="works-style-three centred">
    <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-38.png') }});"></div>
    <div class="auto-container">
        <div class="sec-title style-two light">
            <h5>HOW WE DELIVER</h5>
            <h2>Our 4-Step Agile Engineering Framework</h2>
            <div class="divider" style="background-image: url({{ asset('frontend/assets/images/icons/divider-2.png') }});"></div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 works-block">
                <div class="works-block-two">
                    <div class="inner-box wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="text">
                            <h3>01. Discovery & Architecture</h3>
                            <p>We analyze user stories, map database architecture, select optimal tech stacks, and create realistic project milestones.</p>
                        </div>
                        <div class="count-box">
                            <span class="count-text">01</span>
                            <span class="dot-1"></span>
                            <span class="dot-2"></span>
                        </div>
                        <div class="icon-box">
                            <div class="icon-bg" style="background-image: url({{ asset('frontend/assets/images/icons/icon-bg-1.png') }});"></div>
                            <i class="flaticon-cloud-network"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 works-block">
                <div class="works-block-two">
                    <div class="inner-box wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="text">
                            <h3>02. UI/UX Prototyping</h3>
                            <p>Interactive Figma wireframes and clickable prototypes to validate customer experience and product flows before coding.</p>
                        </div>
                        <div class="count-box">
                            <span class="count-text">02</span>
                            <span class="dot-1"></span>
                            <span class="dot-2"></span>
                        </div>
                        <div class="icon-box">
                            <div class="icon-bg" style="background-image: url({{ asset('frontend/assets/images/icons/icon-bg-2.png') }});"></div>
                            <i class="flaticon-computer"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 works-block">
                <div class="works-block-two">
                    <div class="inner-box wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="text">
                            <h3>03. Agile Sprints & QA</h3>
                            <p>Bi-weekly sprint demos with automated unit testing, manual QA passes, and continuous integration pipelines.</p>
                        </div>
                        <div class="count-box">
                            <span class="count-text">03</span>
                            <span class="dot-1"></span>
                            <span class="dot-2"></span>
                        </div>
                        <div class="icon-box">
                            <div class="icon-bg" style="background-image: url({{ asset('frontend/assets/images/icons/icon-bg-3.png') }});"></div>
                            <i class="flaticon-circuit"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 works-block">
                <div class="works-block-two">
                    <div class="inner-box wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="text">
                            <h3>04. Cloud Deployment & SLA</h3>
                            <p>Production cloud release on AWS/GCP, continuous monitoring, security audits, and dedicated 24/7 post-launch support.</p>
                        </div>
                        <div class="count-box">
                            <span class="count-text">04</span>
                            <span class="dot-1"></span>
                            <span class="dot-2"></span>
                        </div>
                        <div class="icon-box">
                            <div class="icon-bg" style="background-image: url({{ asset('frontend/assets/images/icons/icon-bg-1.png') }});"></div>
                            <i class="flaticon-data-science"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- works-style-two end -->

<!-- project-style-four (Portfolio Showcase) -->
<section class="project-style-four">
    <div class="auto-container">
        <div class="sec-title style-two centred">
            <h5>PROVEN PORTFOLIO</h5>
            <h2>Featured Client Case Studies</h2>
            <div class="divider" style="background-image: url('{{ asset('frontend/assets/images/icons/divider-1.png') }}');"></div>
            <p style="max-width: 750px; margin: 0 auto 30px; color: #666; font-size: 16px;">
                Discover how we engineer high-performance platforms that drive measurable business outcomes across healthcare, logistics, fintech, cloud kitchens, and public sector governance.
            </p>
        </div>
    </div>
    <div class="outer-container">
        <div class="four-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
            @foreach ($works as $work)
            @php
                $workImg = $work->thumbnail ?? $work->image;
                $imgUrl = $workImg 
                    ? (Str::startsWith($workImg, ['http', 'frontend/']) ? asset($workImg) : asset('storage/' . $workImg))
                    : asset('frontend/assets/images/gallery/project-1.jpg');
            @endphp
            <div class="project-block-four">
                <div class="inner-box" style="background: #fff; border-radius: 14px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.06); border: 1px solid #edf2f7; transition: all 0.3s ease;">
                    <figure class="image-box" style="position: relative; height: 240px; overflow: hidden; background: #f8f9fa;">
                        <span style="position: absolute; top: 12px; left: 12px; background: rgba(0,2,121,0.85); backdrop-filter: blur(4px); color: #fff; font-size: 11px; font-weight: 700; padding: 4px 12px; border-radius: 20px; z-index: 2;">
                            {{ $work->category ?? 'Enterprise Platform' }}
                        </span>
                        @if($work->live_url)
                            <a href="{{ $work->live_url }}" target="_blank" rel="noopener noreferrer" style="position: absolute; bottom: 12px; right: 12px; background: #28a745; color: #fff; font-size: 11px; font-weight: 700; padding: 4px 12px; border-radius: 20px; text-decoration: none; z-index: 2; box-shadow: 0 2px 8px rgba(0,0,0,0.2);">
                                <i class="fas fa-circle mr-1" style="font-size: 7px; color: #a3ffc2;"></i> Live ↗
                            </a>
                        @endif
                        <img src="{{ $imgUrl }}"
                             alt="{{ $work->title }}" 
                             style="height: 100%; width: 100%; object-fit: cover;"
                             onerror="this.onerror=null;this.src='{{ asset('frontend/assets/images/gallery/project-1.jpg') }}';">
                    </figure>
                    <div class="text p-4">
                        <h4 style="font-size: 17px; font-weight: 700; margin-bottom: 8px; line-height: 24px;">
                            <a href="{{ route('project-details', $work->slug) }}" style="color: #1c2d52;">{{ $work->title }}</a>
                        </h4>
                        <p style="font-size: 13px; line-height: 20px; color: #666; margin-bottom: 15px;">
                            {{ Str::limit(strip_tags($work->short_description ?? ''), 100) }}
                        </p>
                        <div class="d-flex justify-content-between align-items-center pt-2 border-top">
                            <a href="{{ route('project-details', $work->slug) }}" style="color: #000279; font-weight: 700; font-size: 13px;">Case Study <i class="fas fa-arrow-right ml-1"></i></a>
                            @if($work->live_url)
                                <a href="{{ $work->live_url }}" target="_blank" rel="noopener noreferrer" style="color: #28a745; font-weight: 700; font-size: 12px;">Visit Site ↗</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="text-center mt-5">
        <a href="{{ route('works') }}" class="theme-btn btn-ten">Explore Complete Portfolio</a>
    </div>
</section>
<!-- project-style-four end -->

<!-- Flexible Engagement Models -->
<section class="engagement-models-section py-5" style="background: #f8fafd;">
    <div class="auto-container">
        <div class="sec-title style-two centred">
            <h5>COLLABORATION MODELS</h5>
            <h2>Flexible Ways to Partner with Us</h2>
            <div class="divider" style="background-image: url({{ asset('frontend/assets/images/icons/divider-1.png') }});"></div>
            <p style="max-width: 700px; margin: 0 auto; color: #666;">
                Tailored engagement options that fit your budget, timeline, and management preferences—from hiring full-time dedicated remote developers to fixed-scope project delivery.
            </p>
        </div>
        <div class="row clearfix mt-4">
            <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                <div class="card h-100 p-4 border-0 shadow-sm" style="border-radius: 16px;">
                    <div class="icon mb-3" style="font-size: 32px; color: #000279;">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <h3 style="font-size: 20px; font-weight: 700; color: #1c2d52;">Dedicated Remote Developers</h3>
                    <p style="font-size: 14px; color: #555; line-height: 24px; margin-top: 10px;">
                        Scale your existing engineering team quickly. Hire senior full-time developers (Laravel, React, Node.js, Python, Flutter) who integrate directly into your internal standups and sprints.
                    </p>
                    <ul class="list-unstyled mt-3" style="font-size: 13px; color: #666;">
                        <li><i class="fas fa-check text-success mr-2"></i> Direct Slack / Jira management</li>
                        <li><i class="fas fa-check text-success mr-2"></i> Time-zone aligned hours</li>
                        <li><i class="fas fa-check text-success mr-2"></i> Flexible monthly retainers</li>
                    </ul>
                    <a href="{{ route('get-quote') }}" class="theme-btn btn-ten mt-auto" style="padding: 8px 20px; font-size: 13px;">Hire Developers</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                <div class="card h-100 p-4 border-0 shadow-sm" style="border-radius: 16px; border: 2px solid #000279 !important;">
                    <span class="badge badge-primary px-3 py-1 mb-2" style="background: #000279; width: fit-content; font-size: 11px;">MOST POPULAR</span>
                    <div class="icon mb-3" style="font-size: 32px; color: #000279;">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <h3 style="font-size: 20px; font-weight: 700; color: #1c2d52;">Turnkey Project Delivery</h3>
                    <p style="font-size: 14px; color: #555; line-height: 24px; margin-top: 10px;">
                        Have a complete product idea or MVP? We handle the entire lifecycle—from UI/UX design and backend engineering to QA, cloud deployment, and documentation under fixed milestone pricing.
                    </p>
                    <ul class="list-unstyled mt-3" style="font-size: 13px; color: #666;">
                        <li><i class="fas fa-check text-success mr-2"></i> Guaranteed fixed price & timeline</li>
                        <li><i class="fas fa-check text-success mr-2"></i> Comprehensive UI/UX included</li>
                        <li><i class="fas fa-check text-success mr-2"></i> Free 60-day post-launch warranty</li>
                    </ul>
                    <a href="{{ route('get-quote') }}" class="theme-btn btn-ten mt-auto" style="padding: 8px 20px; font-size: 13px;">Start a Project</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                <div class="card h-100 p-4 border-0 shadow-sm" style="border-radius: 16px;">
                    <div class="icon mb-3" style="font-size: 32px; color: #000279;">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 style="font-size: 20px; font-weight: 700; color: #1c2d52;">Product Maintenance & SLA</h3>
                    <p style="font-size: 14px; color: #555; line-height: 24px; margin-top: 10px;">
                        Keep your mission-critical applications fast, secure, and updated. We provide continuous server monitoring, security patching, feature enhancements, and 24/7 emergency incident resolution.
                    </p>
                    <ul class="list-unstyled mt-3" style="font-size: 13px; color: #666;">
                        <li><i class="fas fa-check text-success mr-2"></i> Proactive security patching</li>
                        <li><i class="fas fa-check text-success mr-2"></i> Guaranteed SLA response times</li>
                        <li><i class="fas fa-check text-success mr-2"></i> Regular performance audits</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="theme-btn btn-ten mt-auto" style="padding: 8px 20px; font-size: 13px;">Talk to an Architect</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- video-section (Innovation Showcase) -->
<section class="video-section mt-5">
    <div class="bg-layer"></div>
    <div class="auto-container">
        <div class="row clearfix align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 video-column">
                <div class="video-content">
                    <div class="bg-shape-1"></div>
                    <div class="bg-shape-2"></div>
                    <figure class="image">
                        <img src="{{ asset('frontend/assets/images/resource/illestration-1.png') }}" alt="Innovation Trove Tech Delivery">
                    </figure>
                    <div class="video-btn">
                        <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A" class="lightbox-image" data-caption="">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box">
                    <figure class="image">
                        <img src="{{ asset('frontend/assets/images/resource/women-1.png') }}" alt="Software Consultation">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- video-section end -->

<!-- Final High-Converting Lead Generation Banner -->
<section class="cta-banner py-5" style="background: linear-gradient(135deg, #000279 0%, #151a99 100%); color: #fff;">
    <div class="auto-container text-center py-4">
        <h2 style="color: #fff; font-size: 38px; font-weight: 800; margin-bottom: 15px;">
            Ready to Build Your Next Market-Leading Digital Product?
        </h2>
        <p style="font-size: 18px; color: #e2e8f0; max-width: 750px; margin: 0 auto 30px; line-height: 28px;">
            Whether you need a dedicated software engineering team, an enterprise cloud platform, or a modern SaaS build, our architects are ready to assist.
        </p>
        <div class="d-flex justify-content-center flex-wrap">
            <a href="{{ route('get-quote') }}" class="theme-btn btn-ten mr-3 mb-2" style="background: #fb9506; color: #fff;">
                <i class="fas fa-calculator mr-2"></i> Request a Free Project Estimate
            </a>
            <a href="tel:+919648061515" class="theme-btn btn-seven mb-2" style="border: 2px solid #fff; color: #fff;">
                <i class="fas fa-phone mr-2"></i> Call +91 9648061515
            </a>
        </div>
        <p class="mt-3 mb-0" style="font-size: 13px; color: #cbd5e0;">
            <i class="fas fa-shield-alt text-warning mr-1"></i> 100% NDA Protected &bull; Response Guaranteed Within 12 Hours &bull; No Obligation
        </p>
    </div>
</section>

@endsection
