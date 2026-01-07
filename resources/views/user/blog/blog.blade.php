@extends('user.includes.master')
@section('meta_title','Blog| Best it company in Lucknow | Top it companies in Lucknow | Lucknow\'s best company | It Company -  Innovation trove ')
@section('meta_description','Discover the top IT companies in Lucknow, where innovation meets excellence. Explore the best firms leading in technology solutions and driving digital transformation in this dynamic city.')
@section('meta_keywords','IT companies in Lucknow, top it companies in Lucknow, best it company\'s best company')
@section('title', 'blog')
@section('content')
<!-- Page Title -->
<section class="page-title centred">
    <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-87.png') }});"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Blog </h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('home')}}">Home</a></li>
                <li ><a href="{{route('blog')}}">Blogs</a></li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->
  <!-- blog-grid -->
  <section class="blog-grid">
    <div class="auto-container">
        <div class="row clearfix">
            @forelse ($blogs as  $blog)
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-two wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{asset($blog->blog_img)}}" alt="">
                            <a href="{{route('blog-details',encrypt($blog->id))}}"><i class="fas fa-link"></i></a>
                        </figure>
                        <div class="lower-content">
                            <div class="inner">
                                <span class="post-date">{{$blog->create_date ? \Carbon\Carbon::parse($blog->create_date)->format('M d') : ''}}
                                </span>
                                <ul class="post-info clearfix">
                                    {{-- <li><i class="far fa-folder-open"></i><a href="blog-details.html">Technology News</a></li> --}}
                                    {{-- <li><i class="far fa-user"></i><a href="blog-details.html">Admin</a></li> --}}
                                </ul>
                                <h3><a href="{{route('blog-details',encrypt($blog->id))}}">{{$blog->blog_title}}</a></h3>
                                <div class="btn-box"><a href="{{route('blog-details',encrypt($blog->id))}}">Read More +</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <p class="text-center">No blog available...</p>
            @endforelse



        </div>
        @isset($blogs)
            <div class="pagination-wrapper centred">
                <ul class="pagination clearfix">
                    {{-- Previous Page Link --}}
                    @if ($blogs->onFirstPage())
                        <li class="disabled"><a><i class="fas fa-angle-left"></i></a></li>
                    @else
                        <li><a href="{{ $blogs->previousPageUrl() }}"><i class="fas fa-angle-left"></i></a></li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($blogs as $project)
                        <li>
                            <a href="{{ $project->url }}">
                                {{ $project->currentPage() == $project->getPage() ? $project->getPage() : $project->getPage() }}
                            </a>
                        </li>
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($blogs->hasMorePages())
                        <li><a href="{{ $blogs->nextPageUrl() }}"><i class="fas fa-angle-right"></i></a></li>
                    @else
                        <li class="disabled"><a><i class="fas fa-angle-right"></i></a></li>
                    @endif
                </ul>
            </div>
        @endisset
    </div>
</section>
<!-- blog-grid end -->
@endsection
