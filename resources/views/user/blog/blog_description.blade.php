@extends('user.includes.master')
@section('title', 'Home')
@section('content')
  <!-- Page Title -->
  <section class="page-title centred">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-87.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Blog Details</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="#">Blog Details</a></li>
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
                            <img src="{{asset($blogdetails->blog_img??'')}}" alt=""  style="width:100%;">
                        </figure>
                        <div class="lower-content">
                            <span class="post-date">{{$blogdetails->create_date ? \Carbon\Carbon::parse($blogdetails->create_date)->format('M d, Y') : ''}}
                            </span>
                            <ul class="post-info clearfix">
                                <li><i class="far fa-folder-open"></i><a href="blog-details.html">Technology</a>,<a href="blog-details.html">License</a>,<a href="blog-details.html">Manintainl</a>,<a href="blog-details.html">Software</a></li>
                                <li><i class="far fa-user"></i><a href="blog-details.html">Admin</a></li>
                            </ul>
                            <h2>Algorithm tells robots where nearby humans are headed</h2>
                            <div class="text">
                                <p>Equal blame belongs too those who fail in their through weakness will shrinking duty the obligation of business it will frequently occur that pleasures have to be repudiated annoyances accepted the wise man therefore always holds in these matters this principle selection rejects greater pleasures, or else he endures pains to avoid worse.</p>
                                <h3>Increment business profitability by 40%?</h3>
                                <p>To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it but who has any right to find fault with a man who chooses to enjoy a that annoying consequences, or one who avoids a pain that produces.</p>
                                <p>Their through weakness will shrinking duty the obligations of business it will frequently occur that pleasures have to repudiated annoyances accepted the wise man therefore always holds in these matters this principle selection rejects greater pleasures.</p>
                                <blockquote>
                                    <div class="icon-box"><i class="fas fa-quote-left"></i></div>
                                    <h4>Business it will frequently occur that gerater pleasures have repudiated chooses to enjoy a pleasure that has no annoying.</h4>
                                    <span class="designation">K. L. Dertram Irvin</span>
                                </blockquote>
                                <p>Find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one avoidspain that produces no resultant teachings of the great explorer of the truth one who avoids a pain that produces no resultant pleasure.</p>
                                <p>Praising pain was born will you a complete account of the system expound the actual teachings except to obtain some advantage from it but who has any right to find fault.</p>
                            </div>
                            <div class="content-one clearfix">
                                <h3>Assessment of simulated intelligence</h3>
                                <div class="inner">
                                    <div class="single-item">
                                        <h5>1975 - Machine Learning</h5>
                                        <span>52% in business</span>
                                    </div>
                                    <div class="single-item">
                                        <h5>1990 - Deep Learning</h5>
                                        <span>25% in business</span>
                                    </div>
                                </div>
                                <figure class="image-box"><img src="assets/images/news/news-1.png" alt=""></figure>
                            </div>
                            <div class="lower-text">
                                <h3>AI in Industries</h3>
                                <p>Denouncing pleasure and praising pain was born will you a complete account of the system, and expound the actual teachings except to obtain some advantage.</p>
                                <p>Praising pain was born will you a complete account of the system expound the actual teachings except to obtain some advantage from it but who has any right to find fault.</p>
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
                                <li><a href="blog-details.html"><span>05</span>AGI</a></li>
                                <li><a href="blog-details.html"><span>02</span>Cloud robotics‎</a></li>
                                <li><a href="blog-details.html"><span>07</span>ASI</a></li>
                                <li><a href="blog-details.html"><span>11</span>Chatbots‎</a></li>
                                <li><a href="blog-details.html"><span>01</span>Data science</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget post-widget">
                        <div class="widget-title">
                            <h3>Tranding Post</h3>
                        </div>
                        <div class="post-inner">
                            <div class="post">
                                <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/news/post-1.jpg" alt=""></a></figure>
                                <h4><a href="blog-details.html">Present status of Man-made reasoning Infographic.</a></h4>
                                <div class="category"><a href="blog-details.html"><i class="far fa-folder-open"></i>Technology News</a></div>
                            </div>
                            <div class="post">
                                <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/news/post-2.jpg" alt=""></a></figure>
                                <h4><a href="blog-details.html">Bteach as the champs in the worldwide office award</a></h4>
                                <div class="category"><a href="blog-details.html"><i class="far fa-folder-open"></i>Technology News</a></div>
                            </div>
                            <div class="post">
                                <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/news/post-3.jpg" alt=""></a></figure>
                                <h4><a href="blog-details.html">Reinforcement Learning With Prediction-Based Rewards</a></h4>
                                <div class="category"><a href="blog-details.html"><i class="far fa-folder-open"></i>Technology News</a></div>
                            </div>
                            <div class="post">
                                <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/news/post-4.jpg" alt=""></a></figure>
                                <h4><a href="blog-details.html">Interpretable Machine Learning Through Teaching</a></h4>
                                <div class="category"><a href="blog-details.html"><i class="far fa-folder-open"></i>Technology News</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget project-widget">
                        <div class="widget-title">
                            <h3>Latest Work</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="project-list clearfix">
                                <li><figure class="image"><a href="assets/images/news/gallery-1.jpg" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/news/gallery-1.jpg" alt=""></a></figure></li>
                                <li><figure class="image"><a href="assets/images/news/gallery-2.jpg" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/news/gallery-2.jpg" alt=""></a></figure></li>
                                <li><figure class="image"><a href="assets/images/news/gallery-3.jpg" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/news/gallery-3.jpg" alt=""></a></figure></li>
                                <li><figure class="image"><a href="assets/images/news/gallery-4.jpg" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/news/gallery-4.jpg" alt=""></a></figure></li>
                                <li><figure class="image"><a href="assets/images/news/gallery-5.jpg" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/news/gallery-5.jpg" alt=""></a></figure></li>
                                <li><figure class="image"><a href="assets/images/news/gallery-6.jpg" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/news/gallery-6.jpg" alt=""></a></figure></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget tags-widget">
                        <div class="widget-title">
                            <h3>Tag Cloud</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="tags-list clearfix">
                                <li><a href="blog-details.html">Analysis</a></li>
                                <li><a href="blog-details.html">Consulting</a></li>
                                <li><a href="blog-details.html">Hi-Tech</a></li>
                                <li><a href="blog-details.html">Data</a></li>
                                <li><a href="blog-details.html">Industries</a></li>
                                <li><a href="blog-details.html">Engineering</a></li>
                                <li><a href="blog-details.html">Solutions</a></li>
                                <li><a href="blog-details.html">Manintainl</a></li>
                                <li><a href="blog-details.html">Infographic</a></li>
                                <li><a href="blog-details.html">Global</a></li>
                                <li><a href="blog-details.html">Software</a></li>
                                <li><a href="blog-details.html">Strategy</a></li>
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