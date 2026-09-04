@extends('user.includes.master')

@section('title', ($data->meta_title ?? $data->title) . ' | Innovation Trove')
@section('meta_title', $data->meta_title ?? $data->title . ' Case Study | Innovation Trove')
@section('meta_description', $data->meta_description ?? Str::limit(strip_tags($data->short_description), 155))
@section('meta_keywords', $data->meta_keyword ?? 'software case study, custom development, innovation trove')

@section('head')
<style>
    .project-main-img {
        width: 100%;
        height: 420px;
        object-fit: cover;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        margin-bottom: 35px;
    }
    .project-details-content h2 {
        font-size: 32px;
        font-weight: 800;
        margin-bottom: 20px;
        color: #1c2d52;
        line-height: 42px;
    }
    .project-details-content h3 {
        font-size: 22px;
        font-weight: 700;
        margin-top: 30px;
        margin-bottom: 12px;
        color: #000279;
    }
    .project-details-content h4 {
        font-size: 18px;
        font-weight: 700;
        margin-top: 25px;
        margin-bottom: 12px;
        color: #1c2d52;
    }
    .project-details-content p {
        font-size: 15px;
        line-height: 28px;
        color: #555;
    }
    .project-info-card {
        background: #f8fafd;
        padding: 30px;
        border-radius: 16px;
        border: 1px solid #edf2f7;
    }
    .info-item {
        margin-bottom: 22px;
    }
    .info-item:last-child { margin-bottom: 0; }
    .info-item h5 {
        font-size: 13px;
        text-transform: uppercase;
        color: #888;
        letter-spacing: 1px;
        font-weight: 700;
        margin-bottom: 6px;
    }
    .info-item p {
        font-size: 15px;
        color: #1c2d52;
        font-weight: 600;
        margin-bottom: 0;
    }
</style>
@endsection

@section('content')
<!-- Page Title -->
<section class="page-title centred">
    <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-87.png') }});"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Case Study Details</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ route('works') }}">Works</a></li>
                <li>{{ Str::limit($data->title, 35) }}</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->

<!-- Project Details Section -->
<section class="project-details py-5">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Main Content Area -->
            <div class="col-lg-8 col-md-12 col-sm-12 content-side mb-5 mb-lg-0">
                <div class="project-details-content">
                    @php
                        $mainImgUrl = $data->image 
                            ? (Str::startsWith($data->image, 'http') ? $data->image : asset($data->image))
                            : asset('frontend/assets/images/gallery/project-1.jpg');
                    @endphp
                    <div style="position: relative;">
                        <img src="{{ $mainImgUrl }}" 
                             class="project-main-img" 
                             alt="{{ $data->title }}"
                             onerror="this.onerror=null;this.src='{{ asset('frontend/assets/images/gallery/project-7.jpg') }}';">
                        
                        @if($data->live_url)
                            <a href="{{ $data->live_url }}" target="_blank" rel="noopener noreferrer" style="position: absolute; top: 20px; right: 20px; background: #28a745; color: #fff; font-weight: 700; font-size: 13px; padding: 8px 18px; border-radius: 30px; text-decoration: none; box-shadow: 0 4px 15px rgba(0,0,0,0.25);">
                                <i class="fas fa-circle mr-1" style="font-size: 8px; color: #a3ffc2;"></i> Live in Production ↗
                            </a>
                        @endif
                    </div>

                    <h2>{{ $data->title }}</h2>

                    <div class="mb-4">
                        @foreach(explode(',', $data->technology) as $tech)
                            <span class="tech-pill">{{ trim($tech) }}</span>
                        @endforeach
                    </div>

                    <div class="project-summary p-4 bg-light rounded mb-4" style="border-left: 4px solid #000279;">
                        <h4 style="margin-top: 0; font-size: 16px; font-weight: 700; color: #000279;">Executive Project Overview</h4>
                        <p style="margin-bottom: 0; font-size: 15px; line-height: 26px; color: #444;">
                            {{ $data->short_description }}
                        </p>
                    </div>

                    <div class="case-study-body">
                        {!! $data->full_description !!}
                    </div>

                    <!-- Trust Bar -->
                    <div class="p-4 mt-5 bg-white border rounded shadow-sm">
                        <h4 style="font-size: 18px; font-weight: 700; color: #1c2d52; margin-bottom: 10px;">Looking to Architect a Similar Platform?</h4>
                        <p style="font-size: 14px; color: #666; margin-bottom: 20px;">
                            Our technical leads will review your product specifications, prepare a technical architecture proposal, and provide fixed-milestone pricing.
                        </p>
                        <a href="{{ route('get-quote') }}" class="theme-btn btn-ten mr-3">Request Architecture Discovery</a>
                        <a href="{{ route('works') }}" class="theme-btn btn-seven">Browse All Works</a>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="project-info-card sticky-top">
                    <h3 style="font-size: 20px; font-weight: 700; color: #1c2d52; margin-bottom: 20px; padding-bottom: 12px; border-bottom: 2px solid #edf2f7;">
                        Case Study Highlights
                    </h3>

                    @if($data->live_url)
                        <div class="mb-4">
                            <a href="{{ $data->live_url }}" target="_blank" rel="noopener noreferrer" class="btn btn-success w-100 py-3 text-center" style="font-size: 14px; font-weight: 700; border-radius: 8px; box-shadow: 0 4px 15px rgba(40,167,69,0.25);">
                                <i class="fas fa-external-link-alt mr-2"></i> Visit Live Platform ↗
                            </a>
                        </div>
                    @endif

                    <div class="info-item">
                        <h5>Platform / Project</h5>
                        <p>{{ $data->title }}</p>
                    </div>

                    <div class="info-item">
                        <h5>Category</h5>
                        <p>{{ $data->category ?? 'Enterprise Platform' }}</p>
                    </div>

                    @if($data->live_url)
                        <div class="info-item">
                            <h5>Live Production URL</h5>
                            <p><a href="{{ $data->live_url }}" target="_blank" rel="noopener noreferrer" style="color: #000279; font-weight: 700; word-break: break-all;">{{ $data->live_url }} ↗</a></p>
                        </div>
                    @endif

                    <div class="info-item">
                        <h5>Core Technology Stack</h5>
                        <div class="mt-1">
                            @foreach(explode(',', $data->technology) as $tech)
                                <span class="tech-pill" style="font-size: 11px;">{{ trim($tech) }}</span>
                            @endforeach
                        </div>
                    </div>

                    <div class="info-item">
                        <h5>Delivery Model</h5>
                        <p>Dedicated Agile Engineering Squad</p>
                    </div>

                    <div class="info-item">
                        <h5>Deployment Architecture</h5>
                        <p>High-Availability Cloud & Data Security</p>
                    </div>

                    <div class="info-item">
                        <h5>Compliance & Standards</h5>
                        <p>100% Client IP Ownership &amp; NDA Protected</p>
                    </div>

                    <div class="mt-4 pt-3 border-top">
                        <a href="{{ route('get-quote') }}" class="theme-btn btn-ten w-100 text-center mb-2">
                            Request Similar Solution
                        </a>
                        <a href="tel:+919648061515" class="btn btn-outline-secondary w-100 text-center" style="font-size: 14px; font-weight: 600;">
                            <i class="fas fa-phone mr-1"></i> Call +91-9648061515
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Project Details Section End -->
@endsection
