@extends('user.includes.master')

@section('title', $servicedetail->title . ' | Innovation Trove')
@section('meta_title', $servicedetail->meta_title ?? $servicedetail->title . ' - Innovation Trove')
@section('meta_description', $servicedetail->meta_description ?? Str::limit(strip_tags($servicedetail->description), 155))
@section('meta_keywords', $servicedetail->meta_keyword ?? 'software development, it services, innovation trove')

@section('head')
<style>
    /* Service Detail Page Polish */
    .service-details {
        background-color: #fbfcff;
    }
    
    .service-hero-frame {
        position: relative;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 2, 121, 0.08);
        border: 1px solid #eef2f6;
        background: #ffffff;
    }
    .service-hero-frame img {
        width: 100%;
        height: 380px;
        object-fit: cover;
        transition: transform 0.6s ease;
    }
    .service-hero-frame:hover img {
        transform: scale(1.03);
    }
    .hero-floating-badge {
        position: absolute;
        bottom: 20px;
        left: 20px;
        background: rgba(7, 11, 40, 0.88);
        backdrop-filter: blur(8px);
        color: #ffffff;
        padding: 8px 18px;
        border-radius: 30px;
        font-size: 13px;
        font-weight: 700;
        border: 1px solid rgba(251, 149, 6, 0.4);
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    /* Key Metrics Highlights Bar */
    .service-metrics-bar {
        background: #ffffff;
        border: 1px solid #edf2f7;
        border-radius: 16px;
        padding: 20px;
        box-shadow: 0 4px 15px rgba(0, 2, 121, 0.04);
        margin: 25px 0 35px;
    }
    .metric-item {
        text-align: center;
        padding: 10px;
    }
    .metric-item .metric-number {
        font-size: 26px;
        font-weight: 800;
        color: #000279;
        margin-bottom: 2px;
        display: block;
    }
    .metric-item .metric-label {
        font-size: 12px;
        font-weight: 600;
        color: #718096;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* Sidebar Category Navigation */
    .service-sidebar-nav {
        background: #ffffff;
        border: 1px solid #edf2f7;
        border-radius: 16px;
        padding: 22px;
        box-shadow: 0 4px 15px rgba(0, 2, 121, 0.04);
    }
    .service-sidebar-nav .nav-title {
        font-size: 17px;
        font-weight: 800;
        color: #000279;
        margin-bottom: 16px;
        border-bottom: 2px solid #f0f4ff;
        padding-bottom: 10px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .service-nav-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 13px 18px;
        margin-bottom: 8px;
        border-radius: 12px;
        font-size: 14px;
        font-weight: 700;
        color: #2d3748;
        background: #f8fafd;
        border: 1px solid #edf2f7;
        text-decoration: none;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .service-nav-item:hover {
        color: #000279;
        background: #ebf4ff;
        border-color: #c3dafe;
        transform: translateX(4px);
    }
    .service-nav-item.active {
        background: linear-gradient(135deg, #000279 0%, #171d9d 100%);
        color: #ffffff !important;
        border-color: #000279;
        box-shadow: 0 6px 18px rgba(0, 2, 121, 0.25);
    }
    .service-nav-item .arrow-badge {
        width: 26px;
        height: 26px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 11px;
        background: rgba(0, 2, 121, 0.08);
        color: #000279;
        transition: all 0.3s ease;
    }
    .service-nav-item.active .arrow-badge {
        background: #fb9506;
        color: #ffffff;
    }

    /* Sidebar Glass Consultation Card */
    .sidebar-consultation-card {
        background: linear-gradient(145deg, #070b28 0%, #000279 70%, #1a1f5c 100%);
        border-radius: 16px;
        padding: 28px 24px;
        color: #ffffff;
        margin-top: 25px;
        box-shadow: 0 10px 30px rgba(0, 2, 121, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.1);
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    .sidebar-consultation-card::before {
        content: '';
        position: absolute;
        top: -30px;
        right: -30px;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(251, 149, 6, 0.3) 0%, transparent 70%);
    }

    /* Industry Verticals Grid */
    .industry-card {
        background: #ffffff;
        border: 1px solid #edf2f7;
        border-radius: 14px;
        padding: 22px 18px;
        text-align: center;
        transition: all 0.3s ease;
        margin-bottom: 20px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.03);
        height: calc(100% - 20px);
    }
    .industry-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 28px rgba(0, 2, 121, 0.1);
        border-color: #000279;
    }
    .industry-card .ind-icon-box {
        width: 56px;
        height: 56px;
        border-radius: 14px;
        background: #f0f4ff;
        color: #000279;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        margin: 0 auto 14px;
        transition: all 0.3s ease;
        border: 1px solid #d8e2fd;
    }
    .industry-card:hover .ind-icon-box {
        background: linear-gradient(135deg, #000279 0%, #fb9506 100%);
        color: #ffffff;
        border-color: transparent;
        transform: rotate(5deg);
    }
    .industry-card h5 {
        font-size: 15px;
        font-weight: 700;
        color: #1c2d52;
        margin-bottom: 0;
    }

    /* Content Body Formatting */
    .service-details-content .title-content h2 {
        font-size: 32px;
        line-height: 1.3;
        font-weight: 800;
        color: #070b28;
        margin-bottom: 15px;
    }
    .service-details-content p {
        font-size: 15px;
        line-height: 1.8;
        color: #4a5568;
    }
    .service-details-content h3 {
        font-size: 22px;
        font-weight: 800;
        color: #000279;
        margin: 30px 0 15px;
        border-left: 4px solid #fb9506;
        padding-left: 12px;
    }
    .service-details-content h4 {
        font-size: 18px;
        font-weight: 700;
        color: #1c2d52;
        margin: 25px 0 12px;
    }
    .service-details-content .list-style-one {
        list-style: none;
        padding-left: 0;
        margin-bottom: 25px;
    }
    .service-details-content .list-style-one li {
        position: relative;
        padding-left: 32px;
        margin-bottom: 12px;
        font-size: 15px;
        line-height: 1.7;
        color: #4a5568;
    }
    .service-details-content .list-style-one li::before {
        content: '\f00c' !important;
        font-family: 'Font Awesome 5 Free' !important;
        font-weight: 900 !important;
        position: absolute !important;
        left: 0 !important;
        top: 3px !important;
        width: 20px !important;
        height: 20px !important;
        background: #e6fffa !important;
        color: #38a169 !important;
        border-radius: 50% !important;
        font-size: 10px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        border: 1px solid #b2f5ea !important;
    }

    /* FAQ Custom Accordion */
    .faq-custom-card {
        border: 1px solid #edf2f7;
        border-radius: 12px !important;
        overflow: hidden;
        margin-bottom: 14px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.03);
        background: #ffffff;
    }
    .faq-custom-card .card-header {
        background: #ffffff;
        border-bottom: 0;
        padding: 16px 20px;
    }
    .faq-custom-card .faq-btn {
        color: #000279;
        font-weight: 700;
        font-size: 15px;
        text-decoration: none;
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        text-align: left;
        padding: 0;
    }
    .faq-custom-card .faq-btn:hover {
        color: #fb9506;
    }
    .faq-custom-card .card-body {
        font-size: 14px;
        line-height: 1.7;
        color: #4a5568;
        border-top: 1px solid #f0f4ff;
        background: #f8fafc;
        padding: 16px 20px;
    }

    /* 4-Step Engineering Process Cards */
    .step-pill-card {
        background: #ffffff;
        border: 1px solid #edf2f7;
        border-radius: 12px;
        padding: 16px;
        margin-bottom: 15px;
        box-shadow: 0 2px 10px rgba(0, 2, 121, 0.03);
        height: calc(100% - 15px);
    }
    .step-pill-card .step-num {
        font-size: 12px;
        font-weight: 800;
        color: #fb9506;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 4px;
        display: block;
    }
    .step-pill-card h5 {
        font-size: 15px;
        font-weight: 700;
        color: #000279;
        margin-bottom: 6px;
    }
    .step-pill-card p {
        font-size: 13px;
        line-height: 1.5;
        color: #718096;
        margin: 0;
    }
</style>
@endsection

@section('content')
<!-- Page Title -->
<section class="page-title centred">
    <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-87.png') }});"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>{{ $servicedetail->title }}</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li>{{ $servicedetail->title }}</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->

<!-- Service Details Section -->
<section class="service-details py-5">
    <div class="auto-container">
        <div class="row clearfix">
            
            <!-- Left Sticky Sidebar -->
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side mb-5 mb-lg-0">
                <div class="service-sidebar sticky-top" style="top: 100px; z-index: 10;">
                    
                    <!-- Category Navigation -->
                    <div class="service-sidebar-nav mb-4">
                        <div class="nav-title">
                            <i class="fas fa-layer-group text-warning mr-2"></i> Our Capabilities
                        </div>
                        <div class="category-list">
                            @foreach ($serviceData as $data)
                                <a href="{{ route('service_details', $data->slug) }}" class="service-nav-item {{ $data->slug == $servicedetail->slug ? 'active' : '' }}">
                                    <span>{{ $data->title }}</span>
                                    <div class="arrow-badge">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <!-- Sidebar Consultation Box -->
                    <div class="sidebar-consultation-card">
                        <div class="mb-3">
                            <span style="display: inline-block; background: rgba(251, 149, 6, 0.2); color: #fb9506; font-size: 11px; font-weight: 700; padding: 4px 12px; border-radius: 20px; text-transform: uppercase; letter-spacing: 0.8px; border: 1px solid rgba(251, 149, 6, 0.4);">
                                Fast 12-Hour SLA
                            </span>
                        </div>
                        <h3 style="color: #fff; font-size: 20px; font-weight: 800; margin-bottom: 10px; line-height: 1.3;">
                            Need Dedicated Engineers for this Solution?
                        </h3>
                        <p style="font-size: 13px; color: #cbd5e0; line-height: 1.6; margin-bottom: 20px;">
                            Talk directly with our senior technical architect. Receive a detailed architecture scope, sprint plan, and milestone estimate.
                        </p>
                        <a href="{{ route('get-quote') }}" class="theme-btn btn-seven w-100 text-center mb-2" style="background: #fb9506; border-color: #fb9506; color: #fff; font-weight: 700; padding: 12px 20px;">
                            Request Free Estimate &rarr;
                        </a>
                        <a href="https://wa.me/919648061515?text=Hi%20Innovation%20Trove%2C%20I%20am%20interested%20in%20your%20{{ urlencode($servicedetail->title) }}%20services." target="_blank" class="btn btn-outline-light w-100 text-center" style="font-size: 13px; font-weight: 700; border-radius: 30px; padding: 10px 16px;">
                            <i class="fab fa-whatsapp mr-1 text-success"></i> Chat on WhatsApp (+91 9648061515)
                        </a>
                    </div>

                    <!-- Service Guarantees Card -->
                    <div class="p-4 mt-4 bg-white border rounded shadow-sm" style="border-radius: 16px !important; border-color: #edf2f7 !important;">
                        <h5 style="font-size: 15px; font-weight: 800; color: #000279; margin-bottom: 15px; text-transform: uppercase; letter-spacing: 0.5px;">
                            <i class="fas fa-shield-alt text-success mr-1"></i> Engineering Guarantees
                        </h5>
                        <ul class="list-unstyled mb-0" style="font-size: 13px; color: #4a5568; line-height: 1.8;">
                            <li class="mb-2"><i class="fas fa-check-circle text-success mr-2"></i> <strong>100% IP & Code Ownership</strong></li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success mr-2"></i> <strong>Strict Mutual NDA Protection</strong></li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success mr-2"></i> <strong>US/UK/EU Working Overlap</strong></li>
                            <li><i class="fas fa-check-circle text-success mr-2"></i> <strong>24/7 Production SLA & Support</strong></li>
                        </ul>
                    </div>

                </div>
            </div>

            <!-- Right Main Content -->
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="service-details-content">
                    
                    <!-- Hero Visual Frame -->
                    <div class="service-hero-frame mb-4">
                        <img src="{{ asset('storage/' . $servicedetail->pic) }}" 
                             alt="{{ $servicedetail->title }}"
                             onerror="this.onerror=null;this.src='{{ asset('frontend/assets/images/service/service-1.jpg') }}';">
                        <div class="hero-floating-badge">
                            <i class="fas fa-certificate text-warning mr-1"></i> Enterprise Grade &bull; Full Lifecycle Engineering
                        </div>
                    </div>

                    <!-- Key Value Metrics Bar -->
                    <div class="service-metrics-bar">
                        <div class="row">
                            <div class="col-6 col-md-3 metric-item border-right">
                                <span class="metric-number">2x</span>
                                <span class="metric-label">Faster Time to Market</span>
                            </div>
                            <div class="col-6 col-md-3 metric-item border-right">
                                <span class="metric-number">99.9%</span>
                                <span class="metric-label">Uptime & Reliability</span>
                            </div>
                            <div class="col-6 col-md-3 metric-item border-right">
                                <span class="metric-number">100%</span>
                                <span class="metric-label">Source Code Rights</span>
                            </div>
                            <div class="col-6 col-md-3 metric-item">
                                <span class="metric-number">0</span>
                                <span class="metric-label">Vendor Lock-in</span>
                            </div>
                        </div>
                    </div>

                    <!-- Title & Lead Intro -->
                    <div class="title-content mb-4">
                        <h2>{{ $servicedetail->title }}</h2>
                        <p class="lead" style="font-size: 16px; line-height: 1.8; color: #2d3748; font-weight: 500; background: #edf2f7; padding: 18px 22px; border-radius: 12px; border-left: 4px solid #000279;">
                            {{ $servicedetail->description }}
                        </p>
                    </div>

                    <!-- Main Body Description -->
                    <div class="content-body mb-5">
                        {!! $servicedetail->full_description ?? '' !!}
                    </div>

                    <!-- 4-Step Engineering Lifecycle Component -->
                    <div class="engineering-framework mt-5 pt-4" style="border-top: 1px solid #edf2f7;">
                        <div class="sec-title mb-4">
                            <h5 style="color: #fb9506; font-weight: 700; font-size: 13px; text-transform: uppercase; letter-spacing: 0.8px;">HOW WE EXECUTE</h5>
                            <h3 style="margin-top: 4px; border-left: 0; padding-left: 0;">Our 4-Stage Agile Delivery Framework</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 mb-3">
                                <div class="step-pill-card">
                                    <span class="step-num">Step 01</span>
                                    <h5>Discovery & Technical Scoping</h5>
                                    <p>Comprehensive requirement analysis, database schema mapping, and architecture blueprinting.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-3">
                                <div class="step-pill-card">
                                    <span class="step-num">Step 02</span>
                                    <h5>Interactive UX/UI Prototyping</h5>
                                    <p>High-fidelity Figma wireframes and clickable component designs to validate flows before code.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-3">
                                <div class="step-pill-card">
                                    <span class="step-num">Step 03</span>
                                    <h5>Sprint-Based Coding & CI/CD QA</h5>
                                    <p>Bi-weekly sprint releases, automated unit tests, manual QA passes, and continuous client demos.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-3">
                                <div class="step-pill-card">
                                    <span class="step-num">Step 04</span>
                                    <h5>Cloud Deployment & SLA Maintenance</h5>
                                    <p>Zero-downtime production launch on AWS/GCP, continuous monitoring, and 24/7 SLA warranties.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Industry Applications Grid -->
                    <div class="content-four mt-5 pt-4" style="border-top: 1px solid #edf2f7;">
                        <div class="text mb-4">
                            <h3 style="margin-top: 0; border-left: 0; padding-left: 0;">Target Industry Applications</h3>
                            <p style="font-size: 15px; color: #666;">
                                Our {{ strtolower($servicedetail->title) }} capabilities are engineered for mission-critical operations across major enterprise sectors:
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6 mb-3">
                                <div class="industry-card">
                                    <div class="ind-icon-box"><i class="fas fa-heartbeat"></i></div>
                                    <h5>Healthcare & MedTech</h5>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-3">
                                <div class="industry-card">
                                    <div class="ind-icon-box"><i class="fas fa-university"></i></div>
                                    <h5>Fintech & Banking</h5>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-3">
                                <div class="industry-card">
                                    <div class="ind-icon-box"><i class="fas fa-truck"></i></div>
                                    <h5>Logistics & Supply Chain</h5>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-3">
                                <div class="industry-card">
                                    <div class="ind-icon-box"><i class="fas fa-shopping-bag"></i></div>
                                    <h5>Retail & E-Commerce</h5>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-3">
                                <div class="industry-card">
                                    <div class="ind-icon-box"><i class="fas fa-industry"></i></div>
                                    <h5>Manufacturing & IoT</h5>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-3">
                                <div class="industry-card">
                                    <div class="ind-icon-box"><i class="fas fa-cloud"></i></div>
                                    <h5>SaaS & Scale-Ups</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQs Section for Rich Answers & Authority -->
                    <div class="service-faqs mt-5 pt-4" style="border-top: 1px solid #edf2f7;">
                        <h3 style="margin-top: 0; border-left: 0; padding-left: 0; margin-bottom: 20px;">Frequently Asked Questions</h3>
                        
                        <div class="faq-custom-card">
                            <div class="card-header">
                                <a class="faq-btn" data-toggle="collapse" href="#faq1" role="button" aria-expanded="true">
                                    <span>How do you manage international time zones and daily standups?</span>
                                    <i class="fas fa-chevron-down text-primary"></i>
                                </a>
                            </div>
                            <div id="faq1" class="collapse show">
                                <div class="card-body">
                                    Our software engineers provide dedicated 4 to 5 hour daily working overlap with North American (EST/PST), UK (GMT), and European (CET) standard business hours. We coordinate via Slack, Microsoft Teams, Jira, and weekly live sprint demonstration calls.
                                </div>
                            </div>
                        </div>

                        <div class="faq-custom-card">
                            <div class="card-header">
                                <a class="faq-btn collapsed" data-toggle="collapse" href="#faq2" role="button" aria-expanded="false">
                                    <span>Who retains ownership of the source code and repository rights?</span>
                                    <i class="fas fa-chevron-down text-primary"></i>
                                </a>
                            </div>
                            <div id="faq2" class="collapse">
                                <div class="card-body">
                                    You retain 100% intellectual property (IP) and full source code ownership from day one. Prior to kick-off, we execute an international Non-Disclosure Agreement (NDA) and commit all code directly into your organization's private GitHub/GitLab repositories.
                                </div>
                            </div>
                        </div>

                        <div class="faq-custom-card">
                            <div class="card-header">
                                <a class="faq-btn collapsed" data-toggle="collapse" href="#faq3" role="button" aria-expanded="false">
                                    <span>Can we start with a small sprint or pilot trial before full engagement?</span>
                                    <i class="fas fa-chevron-down text-primary"></i>
                                </a>
                            </div>
                            <div id="faq3" class="collapse">
                                <div class="card-body">
                                    Yes. We offer flexible trial sprints and staff augmentation retainers where you can review architecture proposals, interview pre-vetted engineers (Laravel, React, Node.js, Python), and evaluate code velocity with zero long-term lock-in.
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Bottom Service Action Banner -->
                    <div class="p-4 p-md-5 mt-5 rounded text-center text-white" style="background: linear-gradient(135deg, #070b28 0%, #000279 60%, #1a1f5c 100%); border-radius: 18px !important; box-shadow: 0 10px 30px rgba(0, 2, 121, 0.15);">
                        <span style="display: inline-block; background: rgba(251, 149, 6, 0.2); color: #fb9506; font-size: 12px; font-weight: 700; padding: 4px 14px; border-radius: 20px; text-transform: uppercase; letter-spacing: 1px; border: 1px solid rgba(251, 149, 6, 0.4); margin-bottom: 12px;">
                            KICKSTART YOUR DIGITAL ROADMAP
                        </span>
                        <h3 style="color: #ffffff; font-weight: 800; font-size: 26px; margin-bottom: 12px; border-left: 0; padding-left: 0;">
                            Ready to Build Your {{ $servicedetail->title }} Platform?
                        </h3>
                        <p style="font-size: 15px; color: #cbd5e0; max-width: 620px; margin: 0 auto 24px; line-height: 1.6;">
                            Share your technical requirements with our engineering leads for a comprehensive scope analysis, roadmap, and milestone cost breakdown.
                        </p>
                        <div>
                            <a href="{{ route('get-quote') }}" class="theme-btn btn-seven mr-2" style="background: #fb9506; border-color: #fb9506; color: #fff; font-weight: 700; padding: 12px 28px;">
                                Request Project Estimate &rarr;
                            </a>
                            <a href="{{ route('contact') }}" class="btn btn-outline-light px-4 py-3" style="font-weight: 700; border-radius: 30px; font-size: 14px;">
                                Talk with Our Architects
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
@endsection
