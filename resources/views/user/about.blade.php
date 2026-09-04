@extends('user.includes.master')

@section('meta_title', 'About Us | Custom Software & Web App Engineering Company - Innovation Trove')
@section('meta_keywords', 'about innovation trove, software development company, bespoke software engineers, offshore IT agency India, agile developers for hire, global software team')
@section('meta_description', 'Learn about Innovation Trove: an agile software engineering partner delivering custom software, SaaS web apps, enterprise ERPs, and dedicated developer teams to clients in USA, UK, Europe, and India.')
@section('title', 'About Innovation Trove')

@section('content')
<!-- Page Title -->
<section class="page-title centred">
    <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-87.png') }});"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>About Innovation Trove</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->

<!-- about-style-nine -->
<section class="about-style-nine py-5">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box">
                    <figure class="image clearfix js-tilt">
                        <img src="{{ asset('frontend/assets/images/resource/about-7.png') }}" alt="About Innovation Trove">
                    </figure>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_20">
                    <div class="content-box">
                        <div class="sec-title style-two">
                            <h5>WHO WE ARE</h5>
                            <h3>Engineering Digital Excellence for Forward-Thinking Enterprises</h3>
                            <div class="divider" style="background-image: url({{ asset('frontend/assets/images/icons/divider-1.png') }});"></div>
                        </div>
                        <div class="text">
                            <p style="font-size: 16px; line-height: 28px; color: #555;">
                                <strong>Innovation Trove (ITrove)</strong> is a full-lifecycle custom software development company and digital engineering partner. We specialize in transforming complex business challenges into resilient, scalable, and high-performing digital platforms.
                            </p>
                            <p style="font-size: 15px; line-height: 26px; color: #666;">
                                Serving startups, scale-ups, and established enterprises across <strong>North America, the United Kingdom, Europe, and India</strong>, we combine deep technical craft with agile methodologies to deliver software that accelerates revenue, eliminates operational bottlenecks, and delights end users.
                            </p>
                        </div>
                        <div class="video-inner mt-4">
                            <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A" class="lightbox-image" data-caption="">
                                <i class="fas fa-play"></i>
                            </a>
                            <h5>Engineering Craftsmanship <br />Explore Our Capabilities</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-style-nine end -->

<!-- chooseus-style-three (Why Partner with Us) -->
<section class="chooseus-style-three about-page centred py-5 bg-color-1">
    <div class="auto-container">
        <div class="sec-title style-two">
            <h5>THE ITROVE ADVANTAGE</h5>
            <h2>Why Global Leaders Choose Innovation Trove</h2>
            <div class="divider" style="background-image: url({{ asset('frontend/assets/images/icons/divider-1.png') }});"></div>
            <p style="max-width: 750px; margin: 0 auto 30px; color: #666;">
                We bridge the gap between high-level architectural strategy and rapid sprint execution, delivering reliable offshore and onshore collaboration without friction.
            </p>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block mb-4">
                <div class="chooseus-block-two wow fadeInLeft animated p-4 bg-white h-100 shadow-sm" style="border-radius: 12px;">
                    <div class="inner-box">
                        <div class="icon mb-3" style="font-size: 32px; color: #000279;">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3 style="font-size: 19px; font-weight: 700; margin-bottom: 10px;">Bespoke Software Engineering</h3>
                        <p style="font-size: 14px; color: #666; line-height: 22px;">
                            We develop software purpose-built around your specific operational workflows, data schemas, and user journeys rather than shoehorning your business into restrictive templates.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block mb-4">
                <div class="chooseus-block-two wow fadeInUp animated p-4 bg-white h-100 shadow-sm" style="border-radius: 12px;">
                    <div class="inner-box">
                        <div class="icon mb-3" style="font-size: 32px; color: #000279;">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3 style="font-size: 19px; font-weight: 700; margin-bottom: 10px;">Time-Zone Aligned Collaboration</h3>
                        <p style="font-size: 14px; color: #666; line-height: 22px;">
                            Our dedicated engineering teams provide direct daily overlap with US (EST/PST), UK (GMT), and European (CET) time zones for real-time standups and Slack collaboration.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block mb-4">
                <div class="chooseus-block-two wow fadeInRight animated p-4 bg-white h-100 shadow-sm" style="border-radius: 12px;">
                    <div class="inner-box">
                        <div class="icon mb-3" style="font-size: 32px; color: #000279;">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 style="font-size: 19px; font-weight: 700; margin-bottom: 10px;">100% IP & NDA Security</h3>
                        <p style="font-size: 14px; color: #666; line-height: 22px;">
                            Complete intellectual property protection. All source code, Git repositories, architecture schematics, and databases are 100% owned by the client from day one.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block mb-4">
                <div class="chooseus-block-two wow fadeInLeft animated p-4 bg-white h-100 shadow-sm" style="border-radius: 12px;">
                    <div class="inner-box">
                        <div class="icon mb-3" style="font-size: 32px; color: #000279;">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <h3 style="font-size: 19px; font-weight: 700; margin-bottom: 10px;">Agile Velocity & Bi-Weekly Demos</h3>
                        <p style="font-size: 14px; color: #666; line-height: 22px;">
                            Iterative development sprints with visible feature demonstrations every two weeks. You always know what is being built, tested, and shipped.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block mb-4">
                <div class="chooseus-block-two wow fadeInUp animated p-4 bg-white h-100 shadow-sm" style="border-radius: 12px;">
                    <div class="inner-box">
                        <div class="icon mb-3" style="font-size: 32px; color: #000279;">
                            <i class="fas fa-layer-group"></i>
                        </div>
                        <h3 style="font-size: 19px; font-weight: 700; margin-bottom: 10px;">Modern Full-Stack Mastery</h3>
                        <p style="font-size: 14px; color: #666; line-height: 22px;">
                            Specialized proficiency across Laravel, React, Next.js, Node.js, Python, Flutter, Docker, and AWS cloud infrastructure for reliable performance at scale.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block mb-4">
                <div class="chooseus-block-two wow fadeInRight animated p-4 bg-white h-100 shadow-sm" style="border-radius: 12px;">
                    <div class="inner-box">
                        <div class="icon mb-3" style="font-size: 32px; color: #000279;">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h3 style="font-size: 19px; font-weight: 700; margin-bottom: 10px;">Post-Launch Warranty & SLA Support</h3>
                        <p style="font-size: 14px; color: #666; line-height: 22px;">
                            Our partnership extends beyond deployment. We provide dedicated SLA maintenance, proactive security patches, server optimization, and continuous feature growth.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- chooseus-style-three end -->

<!-- funfact-section (Verifiable Company Stats) -->
<section class="funfact-section py-5">
    <div class="auto-container">
        <div class="inner-container" style="background: #000279; border-radius: 16px; padding: 40px 20px;">
            <div class="row clearfix text-center">
                <div class="col-lg-3 col-md-6 col-sm-12 counter-block my-2">
                    <div class="counter-block-two">
                        <div class="inner-box">
                            <h2 style="color: #fff; font-size: 42px; font-weight: 800;">150+</h2>
                            <h4 style="color: #cbd5e0; font-size: 16px; margin-top: 5px;">Successful Deployments</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-block my-2">
                    <div class="counter-block-two">
                        <div class="inner-box">
                            <h2 style="color: #fff; font-size: 42px; font-weight: 800;">98%</h2>
                            <h4 style="color: #cbd5e0; font-size: 16px; margin-top: 5px;">Client Retention Rate</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-block my-2">
                    <div class="counter-block-two">
                        <div class="inner-box">
                            <h2 style="color: #fff; font-size: 42px; font-weight: 800;">10+</h2>
                            <h4 style="color: #cbd5e0; font-size: 16px; margin-top: 5px;">Countries Served (US, UK, EU, IN)</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-block my-2">
                    <div class="counter-block-two">
                        <div class="inner-box">
                            <h2 style="color: #fff; font-size: 42px; font-weight: 800;">45+</h2>
                            <h4 style="color: #cbd5e0; font-size: 16px; margin-top: 5px;">Vetted Software Engineers</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- funfact-section end -->

<!-- skills-section (Technology Competencies) -->
<section class="skills-section about-page py-5">
    <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-9.png') }});"></div>
    <div class="auto-container">
        <div class="sec-title centred">
            <h5>ENGINEERING CAPABILITIES</h5>
            <h2>Our Core Technology Competencies</h2>
            <div class="divider" style="background-image: url({{ asset('frontend/assets/images/icons/divider-1.png') }});"></div>
        </div>
        <div class="row clearfix align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box" data-wow-duration="1500ms">
                    <figure class="image js-tilt">
                        <img src="{{ asset('frontend/assets/images/resource/skills-1.png') }}" alt="Innovation Trove Tech Skills">
                    </figure>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_2">
                    <div class="content-box">
                        <div class="text mb-4">
                            <p style="font-size: 15px; color: #555; line-height: 26px;">
                                We leverage modern, battle-tested software engineering frameworks that maximize runtime efficiency, eliminate vulnerabilities, and ensure seamless horizontal scaling under peak production traffic.
                            </p>
                        </div>
                        <div class="progress-inner">
                            <div class="progress-box mb-4">
                                <div class="d-flex justify-content-between mb-1">
                                    <h4 style="font-size: 16px; font-weight: 700; color: #1a1a1a;">Custom Web Applications & SaaS (Laravel, React, Next.js)</h4>
                                    <span style="font-weight: 700; color: #000279;">98%</span>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar" role="progressbar" style="width: 98%; background: #000279;"></div>
                                </div>
                            </div>
                            <div class="progress-box mb-4">
                                <div class="d-flex justify-content-between mb-1">
                                    <h4 style="font-size: 16px; font-weight: 700; color: #1a1a1a;">Mobile App Development (Flutter, React Native, iOS/Android)</h4>
                                    <span style="font-weight: 700; color: #000279;">92%</span>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar" role="progressbar" style="width: 92%; background: #000279;"></div>
                                </div>
                            </div>
                            <div class="progress-box mb-4">
                                <div class="d-flex justify-content-between mb-1">
                                    <h4 style="font-size: 16px; font-weight: 700; color: #1a1a1a;">Enterprise ERP, CRM & API Integrations</h4>
                                    <span style="font-weight: 700; color: #000279;">95%</span>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar" role="progressbar" style="width: 95%; background: #000279;"></div>
                                </div>
                            </div>
                            <div class="progress-box mb-4">
                                <div class="d-flex justify-content-between mb-1">
                                    <h4 style="font-size: 16px; font-weight: 700; color: #1a1a1a;">Cloud Architecture, Docker & DevOps CI/CD (AWS, GCP)</h4>
                                    <span style="font-weight: 700; color: #000279;">90%</span>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar" role="progressbar" style="width: 90%; background: #000279;"></div>
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

<!-- CTA Strip -->
<section class="cta-banner py-5" style="background: linear-gradient(135deg, #000279 0%, #151a99 100%); color: #fff;">
    <div class="auto-container text-center py-4">
        <h2 style="color: #fff; font-size: 36px; font-weight: 800; margin-bottom: 15px;">
            Let’s Build Something Innovative Together
        </h2>
        <p style="font-size: 17px; color: #e2e8f0; max-width: 700px; margin: 0 auto 30px; line-height: 26px;">
            Schedule a 30-minute technical roadmap consultation with our software architects. Discuss your project scope, timeline, and cost estimates with zero obligation.
        </p>
        <div class="d-flex justify-content-center flex-wrap">
            <a href="{{ route('get-quote') }}" class="theme-btn btn-ten mr-3 mb-2" style="background: #fb9506; color: #fff;">
                Request Project Quote
            </a>
            <a href="{{ route('contact') }}" class="theme-btn btn-seven mb-2" style="border: 2px solid #fff; color: #fff;">
                Contact Our Team
            </a>
        </div>
    </div>
</section>

@endsection
