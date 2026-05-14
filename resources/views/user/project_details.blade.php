@extends('user.includes.master')

@section('title', $data->meta_title ?? 'Project Details')
@section('meta_description', $data->meta_description ?? '')
@section('meta_keywords', $data->meta_keyword ?? '')

@section('head')
<style>
    .thumbnail-img {
        width: 100px;
        height: 100px;
        object-fit: contain;
        background: #fff;
        padding: 10px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    .project-main-img {
        width: 100%;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        margin-bottom: 40px;
    }
    .project-details-content h2 {
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 20px;
        color: #1a1a1a;
    }
    .project-info-card {
        background: #f8f9fa;
        padding: 30px;
        border-radius: 20px;
        border: 1px solid #eee;
    }
    .info-item {
        margin-bottom: 25px;
    }
    .info-item:last-child { margin-bottom: 0; }
    .info-item h5 {
        font-size: 14px;
        text-transform: uppercase;
        color: #888;
        letter-spacing: 1px;
        margin-bottom: 5px;
    }
    .info-item p {
        font-size: 16px;
        color: #333;
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
            @if($data->thumbnail)
                <figure class="mb-4">
                    <img src="{{ asset('storage/' . $data->thumbnail) }}" class="thumbnail-img" alt="{{ $data->title }}">
                </figure>
            @endif
            <h1>Project Details</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ route('works') }}">Works</a></li>
                <li>Details</li>
            </ul>
        </div>
    </div>
</section>

<!-- Project Details Section -->
<section class="project-details py-5">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Sidebar -->
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="project-info-card sticky-top" style="top: 100px;">
                    <div class="info-item">
                        <h5>Project Name</h5>
                        <p>{{ $data->title }}</p>
                    </div>
                    <div class="info-item">
                        <h5>Technologies</h5>
                        <p>{{ $data->technology }}</p>
                    </div>
                    @if($data->created_at)
                    <div class="info-item">
                        <h5>Date</h5>
                        <p>{{ $data->created_at->format('M Y') }}</p>
                    </div>
                    @endif
                    <div class="mt-4">
                        <a href="{{ route('get-quote') }}" class="theme-btn btn-ten w-100 text-center">Get Similar Solution</a>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="project-details-content pl-lg-4">
                    @if($data->image)
                        <img src="{{ asset('storage/' . $data->image) }}" class="project-main-img" alt="{{ $data->title }}" onerror="this.src='{{ asset('frontend/assets/images/gallery/project-14.jpg') }}'">
                    @endif

                    <div class="description-section">
                        <h2>{{ $data->title }}</h2>
                        <div class="text mb-5">
                            {!! $data->full_description !!}
                        </div>

                        @if($data->screenshot_img)
                        <div class="screenshots mt-5">
                            <h3 class="mb-4">Project Screenshots</h3>
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{ asset('storage/' . $data->screenshot_img) }}" class="img-fluid rounded shadow-sm" alt="Screenshot">
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
