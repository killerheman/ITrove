@extends('user.includes.master')

@php
    $firstWork = $works->first();
@endphp

{{-- Dynamic Meta for SEO --}}
@section('meta_title', $firstWork->meta_title ?? 'Our Works | Innovation Trove')
@section('meta_description', $firstWork->meta_description ?? 'Check out our latest projects and solutions.')
@section('meta_keywords', $firstWork->meta_keyword ?? 'IT Projects, Lucknow')

@section('title', 'Works')

<style>
.icon-box {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #f5f5f5;
}

.icon-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
</style>
@section('content')

<section class="page-title centred">
    <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-87.png') }});"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Works</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="#">Works</a></li>
            </ul>
        </div>
    </div>
</section>

<section class="project-style-three project-page-2 centred">
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
                                <img src="{{ $mainImage }}" loading="lazy" alt="{{ $workdata->title ?? 'Project Image' }}">
                                <a href="{{ $detailUrl }}" class="link">
                                    <i class="fas fa-expand-arrows-alt"></i>
                                </a>
                            </figure>

                            <div class="lower-content">

                                {{-- Thumbnail Icon --}}
                                <figure class="icon-box">
                                    <img src="{{ $thumbImage }}" loading="lazy" alt="{{ $workdata->title ?? 'Thumbnail' }}">
                                </figure>

                                <h3>
                                    <a href="{{ $detailUrl }}">
                                        {{ $workdata->title ?? '' }}
                                    </a>
                                </h3>

                                <p>
                                    {{ Str::limit(strip_tags($workdata->short_description ?? ''), 150) }}
                                </p>

                                <div class="btn-box">
                                    <a href="{{ $detailUrl }}" class="theme-btn btn-eight">
                                        Read More
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            @empty
                <div class="col-12 text-center">
                    <h3>No Works Found 😕</h3>
                    <p>Try checking back later or explore other sections.</p>
                </div>
            @endforelse

        </div>

        {{-- Pagination --}}
        @if($works->hasPages())
            <div class="pagination-wrapper centred">
                {{ $works->links() }}
            </div>
        @endif

    </div>
</section>

@endsection