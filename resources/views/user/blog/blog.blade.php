@extends('user.includes.master')
@section('meta_title','Blog| Best it company in Lucknow | Top it companies in Lucknow | Lucknow\'s best company | It Company -  Innovation trove ')
@section('meta_description','Discover the top IT companies in Lucknow, where innovation meets excellence. Explore the best firms leading in technology solutions and driving digital transformation in this dynamic city.')
@section('meta_keywords','IT companies in Lucknow, top it companies in Lucknow, best it company\'s best company')
@section('title', 'blog')
@section('content')
<!-- Page Title -->
<section class="page-title centred">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-87.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Blog </h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('home')}}">Home</a></li>
                <li ><a href="{{route('blog')}}">Blog</a></li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->
  <!-- blog-grid -->
  <section class="blog-grid">
    <div class="auto-container">
        <div class="row clearfix">
            @foreach ($blog as  $blog)
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
            @endforeach



        </div>
        <div class="pagination-wrapper centred">
            <ul class="pagination clearfix">
                <li><a href="#"><i class="fas fa-angle-left"></i></a></li>
                <li><a href="#">1</a></li>
                <li><a href="#" class="current">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fas fa-angle-right"></i></a></li>
            </ul>
        </div>
    </div>
</section>
<!-- blog-grid end -->
@endsection
