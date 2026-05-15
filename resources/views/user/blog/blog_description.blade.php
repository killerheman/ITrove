@extends('user.includes.master')
@section('title', $blogdetails->blog_title)
@section('meta_title', $blogdetails->meta_title)
@section('meta_description', $blogdetails->meta_description)
@section('meta_keywords', $blogdetails->meta_keyword)
@section('content')
  <!-- Page Title -->
  <section class="page-title centred">
    <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-87.png') }});"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>{{ $blogdetails->blog_title }}</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('blog')}}">Blogs</a></li>
                <li>Blog Details</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->
 <!-- sidebar-page-container -->
 <section class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="blog-details-content">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{asset($blogdetails->blog_img??'')}}" alt="{{ $blogdetails->blog_title }}"  style="width:100%;">
                        </figure>
                        <div class="lower-content">
                            <span class="post-date">{{$blogdetails->create_date ? \Carbon\Carbon::parse($blogdetails->create_date)->format('M d, Y') : ''}}
                            </span>
                            <ul class="post-info clearfix">
                                <li><i class="far fa-folder-open"></i> {{ $blogdetails->blogCategory->category_name ?? 'Technology' }}</li>
                                <li><i class="far fa-user"></i> Admin</li>
                            </ul>
                            <h2>{{ $blogdetails->blog_title }}</h2>
                            <div class="text">
                                {!! $blogdetails->blog_description !!}
                            </div>
                        </div>
                    </div>
                    <div class="post-share-option clearfix">
                        <div class="text pull-left">
                            <h5>Share this post with your friends</h5>
                        </div>
                        <ul class="social-links pull-right clearfix">
                            <li><a href="blog-details.html"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="blog-details.html"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="blog-details.html"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="blog-details.html"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                    <div class="author-box">
                        <figure class="author-thumb">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-67.png);"></div>
                            <img src="assets/images/news/author-1.png" alt="">
                        </figure>
                        <div class="inner">
                            <h3>Chris Orwig</h3>
                            <span class="designation">intellegents for company</span>
                            <p>Chris Orwig is a celebrated photographer, author, and writer who brings passion to everything he does.</p>
                        </div>
                    </div>
                    <div class="comment-box">
                        <div class="group-title">
                            <h2>Comments</h2>
                        </div>
                        <div class="comment">
                            <figure class="thumb-box">
                                <img src="assets/images/news/comment-1.png" alt="">
                            </figure>
                            <div class="comment-inner">
                                <div class="comment-info clearfix">
                                    <h3>John Jones<span>APRIL 24, 2019 AT 10:59 AM</span></h3>
                                </div>
                                <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                                <a href="blog-details.html" class="reply-btn">Reply</a>
                            </div>
                        </div>
                        <div class="comment replay-comment">
                            <figure class="thumb-box">
                                <img src="assets/images/news/comment-2.png" alt="">
                            </figure>
                            <div class="comment-inner">
                                <div class="comment-info clearfix">
                                    <h3>Steven Smith<span>APRIL 23, 2019 AT 10:59 AM</span></h3>
                                </div>
                                <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                                <a href="blog-details.html" class="reply-btn">Reply</a>
                            </div>
                        </div>
                        <div class="comment">
                            <figure class="thumb-box">
                                <img src="assets/images/news/comment-3.png" alt="">
                            </figure>
                            <div class="comment-inner">
                                <div class="comment-info clearfix">
                                    <h3>Sarah Taylor<span>APRIL 22, 2019 AT 10:59 AM</span></h3>
                                </div>
                                <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                                <a href="blog-details.html" class="reply-btn">Reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="comments-form-area">
                        <div class="group-title">
                            <h2>Leave a Reply</h2>
                            <p>Your email address will not be published. Required fields are marked *</p>
                        </div>
                        <div class="form-inner">
                            <form method="post" action="https://azim.commonsupport.com/Bithlo/blog-details.html" class="comment-form"> 
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="name" placeholder="Name" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Type Massage"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control material-checkbox">
                                                <input type="checkbox" class="material-control-input">
                                                <span class="material-control-indicator"></span>
                                                <span class="description">Save my name, email, and website in this browser for the next time I comment.</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <button type="submit" class="theme-btn btn-two">Post Comments</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="blog-sidebar">
                    <div class="sidebar-widget search-widget">
                        <div class="widget-title">
                            <h3>Search</h3>
                        </div>
                        <div class="search-inner">
                            <form action="https://azim.commonsupport.com/Bithlo/blog-2.html" method="post" class="search-form">
                                <div class="form-group">
                                    <input type="search" name="search-field" placeholder="Search......" required="">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar-widget category-widget">
                        <div class="widget-title">
                            <h3>Categories</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="category-list clearfix">
                                @foreach ($categories as $category)
                                    <li><a href="#"><span>{{ $category->blogs_count }}</span>{{ $category->category_name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget post-widget">
                        <div class="widget-title">
                            <h3>Recent Post</h3>
                        </div>
                        <div class="post-inner">
                            @foreach ($recent_blogs as $recent)
                            <div class="post">
                                <figure class="post-thumb">
                                    <a href="{{ route('blog-details', $recent->slug) }}">
                                        <img src="{{ asset($recent->blog_img) }}" alt="{{ $recent->blog_title }}" style="width: 80px; height: 80px; object-fit: cover;">
                                    </a>
                                </figure>
                                <h4><a href="{{ route('blog-details', $recent->slug) }}">{{ Str::limit($recent->blog_title, 40) }}</a></h4>
                                <div class="category"><i class="far fa-folder-open"></i>{{ $recent->blogCategory->category_name ?? 'News' }}</div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="sidebar-widget project-widget">
                        <div class="widget-title">
                            <h3>Latest Work</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="project-list clearfix">
                                @foreach ($latest_works as $work)
                                <li>
                                    <figure class="image">
                                        <a href="{{ route('project-details', $work->slug) }}">
                                            <img src="{{ asset('storage/' . $work->thumbnail) }}" alt="{{ $work->title }}" style="width: 100px; height: 80px; object-fit: cover;">
                                        </a>
                                    </figure>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget tags-widget">
                        <div class="widget-title">
                            <h3>Tag Cloud</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="tags-list clearfix">
                                @foreach ($categories as $category)
                                    <li><a href="#">{{ $category->category_name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- sidebar-page-container end -->



@endsection