@extends('user.includes.master')

@section('meta_title', 'Software Development & IT Engineering Services | Innovation Trove')
@section('meta_description', 'Full-lifecycle software engineering and digital services: Custom software development, web applications, mobile apps, enterprise ERPs, cloud DevOps, and dedicated remote developers.')
@section('meta_keywords', 'custom software development, web application development, mobile app development, enterprise ERP CRM, cloud DevOps services, hire dedicated developers, AI business automation')

@section('title', 'Software & IT Services')

@section('head')
<style>
    .service-block-one .inner-box {
        border-radius: 18px !important;
        box-shadow: 0 4px 20px rgba(0, 2, 121, 0.05);
        border: 1px solid #edf2f7;
        transition: all 0.35s ease;
        overflow: hidden;
    }
    .service-block-one .inner-box:hover {
        transform: translateY(-6px);
        box-shadow: 0 15px 35px rgba(0, 2, 121, 0.12);
        border-color: #000279;
    }
    .service-block-one .image-box img {
        transition: transform 0.5s ease;
    }
    .service-block-one .inner-box:hover .image-box img {
        transform: scale(1.04);
    }
    .service-block-one .text h3 a {
        color: #000279;
        font-weight: 700;
        transition: color 0.2s ease;
    }
    .service-block-one .text h3 a:hover {
        color: #fb9506;
    }
</style>
@endsection

@section('content')
<!-- Page Title -->
<section class="page-title centred">
    <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-87.png') }});"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Software & IT Engineering Services</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Services</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->

<!-- service-section -->
<section class="service-section service-page py-5">
    <div class="auto-container">
        <div class="sec-title style-two centred">
            <h5>END-TO-END CAPABILITIES</h5>
            <h2>Scalable Digital Solutions for Modern Enterprises</h2>
            <div class="divider" style="background-image: url({{ asset('frontend/assets/images/icons/divider-1.png') }});"></div>
            <p style="max-width: 750px; margin: 0 auto 30px; color: #666; font-size: 16px;">
                From early-stage architecture to enterprise-scale deployment, we provide agile software engineering, modern cloud platforms, and dedicated remote development teams.
            </p>
        </div>

        <div class="row clearfix">
            @foreach ($serviceData as $data)
            <div class="col-lg-6 col-md-12 col-sm-12 service-block mb-4">
                <div class="service-block-one wow fadeInUp animated h-100" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box h-100 d-flex flex-column justify-content-between p-4 bg-white">
                        <div>
                            <figure class="image-box mb-3 text-center" style="height: 200px; display: flex; align-items: center; justify-content: center; background: #f8fafc; border-radius: 12px; overflow: hidden;">
                                <img src="{{ $data->pic ? asset('storage/' . $data->pic) : asset('frontend/assets/images/service/service-1.png') }}" 
                                     alt="{{ $data->title }}"
                                     style="max-height: 180px; width: auto; object-fit: contain;"
                                     onerror="this.onerror=null;this.src='{{ asset('frontend/assets/images/service/service-1.png') }}';">
                            </figure>

                            <div class="text text-left">
                                <div class="icon-box mb-2">
                                    <i class="{{ $data->fa_icon ?? 'fas fa-laptop-code' }}" style="font-size: 32px; color: #000279;"></i>
                                </div>
                                <h3 style="font-size: 20px; margin-bottom: 8px;">
                                    <a href="{{ route('service_details', $data->slug) }}">{{ $data->title ?? '' }}</a>
                                </h3>
                                <p style="font-size: 14px; line-height: 24px; color: #555;">{{ Str::limit(strip_tags($data->description), 140) }}</p>
                            </div>
                        </div>

                        <div class="pt-3 mt-3 border-top d-flex justify-content-between align-items-center">
                            <a href="{{ route('service_details', $data->slug) }}" class="font-weight-bold" style="color: #000279; font-size: 14px; text-decoration: none;">
                                Explore Capabilities <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                            <a href="{{ route('get-quote') }}" class="btn btn-sm btn-outline-primary" style="border-radius: 20px; font-size: 12px; font-weight: 700; color: #000279; border-color: #000279;">
                                Get Estimate
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Dedicated Staff Augmentation Highlight -->
<section class="staff-augmentation py-5" style="background: #f8fafd; border-top: 1px solid #eef2f6; border-bottom: 1px solid #eef2f6;">
    <div class="auto-container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12">
                <span class="badge badge-pill badge-primary px-3 py-2 mb-3" style="background: #000279; font-size: 13px;">STAFF AUGMENTATION</span>
                <h2 style="font-size: 32px; font-weight: 800; color: #1c2d52; margin-bottom: 15px;">
                    Need Dedicated Remote Developers to Scale Your Sprint Velocity?
                </h2>
                <p style="font-size: 16px; color: #555; line-height: 26px; margin-bottom: 20px;">
                    Hire vetted senior full-stack developers, frontend specialists, and DevOps architects dedicated solely to your company. Enjoy fluent English communication, daily Scrum overlap with US/UK/European hours, and flexible monthly retainers with 40-60% cost efficiency.
                </p>
                <div class="row mb-3">
                    <div class="col-sm-6 mb-2">
                        <i class="fas fa-check-circle text-success mr-2"></i> Full-Stack Laravel, React & Vue
                    </div>
                    <div class="col-sm-6 mb-2">
                        <i class="fas fa-check-circle text-success mr-2"></i> Flutter & React Native Mobile
                    </div>
                    <div class="col-sm-6 mb-2">
                        <i class="fas fa-check-circle text-success mr-2"></i> Python, Node.js & Microservices
                    </div>
                    <div class="col-sm-6 mb-2">
                        <i class="fas fa-check-circle text-success mr-2"></i> AWS Cloud & CI/CD DevOps
                    </div>
                </div>
                <a href="{{ route('get-quote') }}" class="theme-btn btn-ten">Hire Dedicated Developers <i class="fas fa-arrow-right ml-1"></i></a>
            </div>
            <div class="col-lg-5 col-md-12 text-center mt-4 mt-lg-0">
                <img src="{{ asset('frontend/assets/images/resource/illestration-2.png') }}" alt="Staff Augmentation Squad" class="img-fluid" style="max-height: 320px;">
            </div>
        </div>
    </div>
</section>

<!-- Working Process (Accurate 4-Step Engineering Process) -->
<section class="works-section py-5">
    <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-88.png') }});"></div>
    <div class="auto-container">
        <div class="sec-title style-two centred">
            <h5>THE DELIVERY LIFECYCLE</h5>
            <h2>How We Build & Ship Software</h2>
            <div class="divider" style="background-image: url({{ asset('frontend/assets/images/icons/divider-1.png') }});"></div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 working-block mb-4">
                <div class="working-block-one wow fadeInUp animated h-100" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box p-4 bg-white h-100 shadow-sm" style="border-radius: 15px;">
                        <div class="icon-box mb-3" style="position: relative;">
                            <i class="flaticon-cloud-network" style="font-size: 40px; color: #000279;"></i>
                            <span style="position: absolute; top: -10px; right: -10px; font-weight: 800; color: #fb9506; font-size: 20px;">01</span>
                        </div>
                        <h3 style="font-size: 19px; font-weight: 700; margin-bottom: 10px;">Discovery & Scope</h3>
                        <p style="font-size: 14px; color: #666; line-height: 22px;">We audit your business logic, map out database schemas, select the optimal tech stack, and deliver an actionable technical roadmap.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 working-block mb-4">
                <div class="working-block-one wow fadeInUp animated h-100" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="inner-box p-4 bg-white h-100 shadow-sm" style="border-radius: 15px;">
                        <div class="icon-box mb-3" style="position: relative;">
                            <i class="flaticon-computer" style="font-size: 40px; color: #000279;"></i>
                            <span style="position: absolute; top: -10px; right: -10px; font-weight: 800; color: #fb9506; font-size: 20px;">02</span>
                        </div>
                        <h3 style="font-size: 19px; font-weight: 700; margin-bottom: 10px;">UI/UX Prototyping</h3>
                        <p style="font-size: 14px; color: #666; line-height: 22px;">Clickable Figma prototypes and component design systems to test workflows and ensure complete aesthetic and user alignment.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 working-block mb-4">
                <div class="working-block-one wow fadeInUp animated h-100" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="inner-box p-4 bg-white h-100 shadow-sm" style="border-radius: 15px;">
                        <div class="icon-box mb-3" style="position: relative;">
                            <i class="flaticon-circuit" style="font-size: 40px; color: #000279;"></i>
                            <span style="position: absolute; top: -10px; right: -10px; font-weight: 800; color: #fb9506; font-size: 20px;">03</span>
                        </div>
                        <h3 style="font-size: 19px; font-weight: 700; margin-bottom: 10px;">Agile Sprints & QA</h3>
                        <p style="font-size: 14px; color: #666; line-height: 22px;">Iterative 2-week sprints with automated testing, continuous integration, and live demo reviews so you track real tangible progress.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 working-block mb-4">
                <div class="working-block-one wow fadeInUp animated h-100" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box p-4 bg-white h-100 shadow-sm" style="border-radius: 15px;">
                        <div class="icon-box mb-3" style="position: relative;">
                            <i class="flaticon-data-science" style="font-size: 40px; color: #000279;"></i>
                            <span style="position: absolute; top: -10px; right: -10px; font-weight: 800; color: #fb9506; font-size: 20px;">04</span>
                        </div>
                        <h3 style="font-size: 19px; font-weight: 700; margin-bottom: 10px;">Cloud Deploy & SLA</h3>
                        <p style="font-size: 14px; color: #666; line-height: 22px;">Zero-downtime production deployment on AWS/GCP, post-launch warranty, continuous security patches, and 24/7 SLA maintenance.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final Consultation CTA -->
<section class="cta-banner py-5" style="background: linear-gradient(135deg, #000279 0%, #151a99 100%); color: #fff;">
    <div class="auto-container text-center py-4">
        <h2 style="color: #fff; font-size: 36px; font-weight: 800; margin-bottom: 15px;">
            Have a Software Concept or Platform to Build?
        </h2>
        <p style="font-size: 17px; color: #e2e8f0; max-width: 700px; margin: 0 auto 30px; line-height: 26px;">
            Let’s review your architectural requirements, timeline, and budget. Our senior technical leads are ready to prepare a complimentary discovery roadmap.
        </p>
        <div class="d-flex justify-content-center flex-wrap">
            <a href="{{ route('get-quote') }}" class="theme-btn btn-ten mr-3 mb-2" style="background: #fb9506; color: #fff;">
                Request Free Scope & Quote
            </a>
            <a href="{{ route('contact') }}" class="theme-btn btn-seven mb-2" style="border: 2px solid #fff; color: #fff;">
                Contact Engineering Team
            </a>
        </div>
    </div>
</section>

@endsection