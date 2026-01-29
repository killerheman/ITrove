@extends('user.includes.master')

{{-- Dynamic Meta for SEO --}}
@section('meta_title', $works->first()->meta_title ?? 'Our Works | Innovation Trove')
@section('meta_description', $works->first()->meta_description ?? 'Check out our latest projects and solutions.')
@section('meta_keywords', $works->first()->meta_keyword ?? 'IT Projects, Lucknow')

@section('title', 'Works')

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
            <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                <div class="project-block-three">
                    <div class="inner-box">
                        <figure class="image-box">
                            {{-- Main Project Image --}}
                            <img src="{{ $workdata->image ? asset('storage/' . $workdata->image) : asset('frontend/assets/images/gallery/project-5.jpg') }}" alt="Innovation trove">
                            <a href="{{ route('project-details', $workdata->slug) }}" class="link"><i class="fas fa-expand-arrows-alt"></i></a>
                        </figure>
                        <div class="lower-content">
                            {{-- Thumbnail Icon --}}
                            <figure class="icon-box">
                                <img src="{{ $workdata->thumbnail ? asset('storage/' . $workdata->thumbnail) : asset('frontend/assets/images/icons/icon-18.png') }}" alt="Innovation trove">
                            </figure>
                            <h3><a href="{{ route('project-details', $workdata->slug) }}">{{ $workdata->title ?? '' }}</a></h3>
                            <p>{{ Str::limit($workdata->short_description ?? '', 150) }}</p>
                            <div class="btn-box">
                                <a href="{{ route('project-details', $workdata->slug) }}" class="theme-btn btn-eight">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <h3>No Works Found.</h3>
            </div>
            @endforelse

        </div>

        {{-- Pagination --}}
        @if(isset($works) && $works->hasPages())
        <div class="pagination-wrapper centred">
            <ul class="pagination clearfix">
                @if ($works->onFirstPage())
                    <li class="disabled"><a><i class="fas fa-angle-left"></i></a></li>
                @else
                    <li><a href="{{ $works->previousPageUrl() }}"><i class="fas fa-angle-left"></i></a></li>
                @endif

                @foreach($works->getUrlRange(1, $works->lastPage()) as $page => $url)
                    @if ($page == $works->currentPage())
                        <li class="active"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach

                @if ($works->hasMorePages())
                    <li><a href="{{ $works->nextPageUrl() }}"><i class="fas fa-angle-right"></i></a></li>
                @else
                    <li class="disabled"><a><i class="fas fa-angle-right"></i></a></li>
                @endif
            </ul>
        </div>
        @endif

    </div>
</section>
@endsection