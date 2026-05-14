@extends('user.includes.master')

@php
    $firstWork = $works->first();
@endphp

{{-- Dynamic Meta for SEO --}}
@section('meta_title', $firstWork->meta_title ?? 'Our Works | Innovation Trove')
@section('meta_description', $firstWork->meta_description ?? 'Check out our latest projects and solutions.')
@section('meta_keywords', $firstWork->meta_keyword ?? 'IT Projects, Lucknow')

@section('title', 'Works')

@section('head')
<style>
.icon-box-thumb {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #fff;
    border: 3px solid #f0f0f0;
    margin: -35px auto 20px;
    position: relative;
    z-index: 10;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.icon-box-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.project-block-three .inner-box {
    background: #fff;
    border: 1px solid #eee;
    border-radius: 15px;
    transition: all 0.3s ease;
    margin-bottom: 30px;
    height: 100%; /* Ensure consistent height */
    display: flex;
    flex-direction: column;
}

.project-block-three .inner-box:hover {
    box-shadow: 0 15px 40px rgba(0,0,0,0.1);
    transform: translateY(-5px);
}

.project-block-three .lower-content {
    padding: 20px 25px 40px; /* Increased bottom padding */
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.project-block-three .lower-content h3 {
    font-size: 20px;
    margin-bottom: 10px;
}

.project-block-three .image-box {
    position: relative;
    height: 250px;
    overflow: hidden;
    border-radius: 15px 15px 0 0; /* Match parent radius */
}

.project-block-three .image-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
</style>
@endsection

@section('content')

<section class="page-title centred">
    <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-87.png') }});"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Our Works</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Works</li>
            </ul>
        </div>
    </div>
</section>

<section class="project-page-2 centred py-5">
    <div class="auto-container">
        <div class="row clearfix">

            @forelse ($works as $workdata)

                @php
                    $mainImage = $workdata->image 
                        ? asset('storage/' . $workdata->image) 
                        : asset('frontend/assets/images/gallery/project-5.jpg');

                    $thumbImage = $workdata->thumbnail 
                        ? asset('storage/' . $workdata->thumbnail) 
                        : asset('frontend/assets/images/icons/icon-18.png');

                    $detailUrl = route('project-details', $workdata->slug);
                @endphp

                <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                    <div class="project-block-three">
                        <div class="inner-box">

                            {{-- Main Project Image --}}
                            <figure class="image-box">
                                <img src="{{ $mainImage }}" loading="lazy" alt="{{ $workdata->title }}" onerror="this.src='{{ asset('frontend/assets/images/gallery/project-7.jpg') }}'">
                                <a href="{{ $detailUrl }}" class="link">
                                    <i class="fas fa-link"></i>
                                </a>
                            </figure>

                            <div class="lower-content">

                                {{-- Thumbnail Icon --}}
                                <figure class="icon-box-thumb">
                                    <img src="{{ $thumbImage }}" loading="lazy" alt="icon" onerror="this.src='{{ asset('frontend/assets/images/icons/icon-18.png') }}'">
                                </figure>

                                <h3>
                                    <a href="{{ $detailUrl }}">
                                        {{ $workdata->title }}
                                    </a>
                                </h3>

                                <p class="mb-4">
                                    {{ Str::limit(strip_tags($workdata->short_description ?? ''), 120) }}
                                </p>

                                <div class="btn-box">
                                    <a href="{{ $detailUrl }}" class="theme-btn btn-ten">
                                        Read More
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            @empty
                <div class="col-12 text-center py-5">
                    <h3>No Works Found</h3>
                    <p>We are currently updating our portfolio. Please check back soon!</p>
                </div>
            @endforelse

        </div>

        {{-- Pagination --}}
        @if($works->hasPages())
            <div class="pagination-wrapper centred mt-4">
                {{ $works->links() }}
            </div>
        @endif

    </div>
</section>

@endsection