@extends('user.includes.master')
@section('title', 'Project Details')
@section('head')
<style>
    .thumbnail{
        width:60%;
    }
</style>
@endsection
@section('content')
 <!-- Page Title -->
 <section class="page-title centred">
    <div class="pattern-layer" style="background-image: url({{asset('frontend/assets/images/shape/shape-87.png')}});"></div>
    <div class="auto-container">
        <div class="content-box">
            <figure class="icon-box"><img src="{{asset($data->thumbnail??'')}}" class="thumbnail" alt=""></figure>
            <h2>Project Details</h2>
            <p>{{$data->title??''}}</p>
        </div>
    </div>
</section>
<!-- End Page Title -->

 <!-- project-details -->
 <section class="project-details">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="project-sidebar">
                    <div class="project-info">
                        {{-- <div class="single-item">
                            <div class="icon-box"><i class="fas fa-user"></i></div>
                            <h5>SUPPORT TEAM</h5>
                            <p>Rakson Mara <br />Robet Juli</p>
                        </div> --}}
                        <div class="single-item">
                            <div class="icon-box"><i class="fal fa-dot-circle"></i></div>
                            <h5>TECHNOLOGIES</h5>
                            <p>{{$data->technology??''}}t</p>
                        </div>
                        {{-- <div class="single-item">
                            <div class="icon-box"><i class="fas fa-calendar-alt"></i></div>
                            <h5>TIME PERIOD</h5>
                            <p>3 Weeks</p>
                        </div> --}}
                        {{-- <div class="single-item">
                            <div class="icon-box"><i class="fas fa-globe"></i></div>
                            <h5>WEBSITE</h5>
                            <p><a href="project-details.html">info@example.com</a></p>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="project-details-content">
                    <div class="content-one">
                        <div class="text">
                            <h2>Information catch and ML counseling administrations to outline the path to a custom</h2>
                            <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born will give you a complete account of the system pain can procure him some great pleasure expound the actual of the master-builder of human happiness.</p>
                        </div>
                        <figure class="image-box"><img src="assets/images/gallery/project-14.jpg" alt=""></figure>
                    </div>
                    <div class="two-column">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                <div class="single-item">
                                    <h3>CHALLENGES</h3>
                                    <span>staticase way to know</span>
                                    <p>Idea of denouncing pleasure and praising pain was born and give you a complete account of the system.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                <div class="single-item">
                                    <h3>SOLUTIONS</h3>
                                    <span>staticase way to know</span>
                                    <p>Undertakes laborious physical exercise, except to obtain some from it man who chooses to enjoy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-two">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/gallery/project-7.png" alt=""></figure>
                            <div class="text">
                                <h3>Processing System</h3>
                                <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born will give you a complete account of the system pain can procure.</p>
                                <p>There anyone who loves or pursues or desires to obtain pain of itself, because it pain but because occasionally circumstances occurs in which toil and pain procures him some great pleasure take a trivial example physical exercise.</p>
                            </div>
                        </div>
                        <div class="text">
                            <h3>Results</h3>
                            <p>Any right to find fault with a man who chooses to enjoy a pleasure that has annoying consequences, or one who avoids a pain that produces no resultant encounter.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="related-project">
            <div class="sec-title style-two">
                <h5>CASE STUDIES</h5>
                <h2>Our Related project</h2>
                <div class="divider" style="background-image: url(assets/images/icons/divider-1.png);"></div>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                <div class="project-block-four">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="assets/images/gallery/project-7.jpg" alt="">
                            <div class="icon-box"><img src="assets/images/icons/icon-16.png" alt=""></div>
                        </figure>
                        <div class="text">
                            <h5><a href="project-details.html">Artificial Intelligence</a></h5>
                        </div>
                    </div>
                </div>
                <div class="project-block-four">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="assets/images/gallery/project-8.jpg" alt="">
                            <div class="icon-box"><img src="assets/images/icons/icon-17.png" alt=""></div>
                        </figure>
                        <div class="text">
                            <h5><a href="project-details.html">Technology Vision Science</a></h5>
                        </div>
                    </div>
                </div>
                <div class="project-block-four">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="assets/images/gallery/project-9.jpg" alt="">
                            <div class="icon-box"><img src="assets/images/icons/icon-18.png" alt=""></div>
                        </figure>
                        <div class="text">
                            <h5><a href="project-details.html">Technology Vision Science</a></h5>
                        </div>
                    </div>
                </div>
                <div class="project-block-four">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="assets/images/gallery/project-10.jpg" alt="">
                            <div class="icon-box"><img src="assets/images/icons/icon-19.png" alt=""></div>
                        </figure>
                        <div class="text">
                            <h5><a href="project-details.html">Data Scientest Code</a></h5>
                        </div>
                    </div>
                </div>
                <div class="project-block-four">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="assets/images/gallery/project-7.jpg" alt="">
                            <div class="icon-box"><img src="assets/images/icons/icon-16.png" alt=""></div>
                        </figure>
                        <div class="text">
                            <h5><a href="project-details.html">Artificial Intelligence</a></h5>
                        </div>
                    </div>
                </div>
                <div class="project-block-four">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="assets/images/gallery/project-8.jpg" alt="">
                            <div class="icon-box"><img src="assets/images/icons/icon-17.png" alt=""></div>
                        </figure>
                        <div class="text">
                            <h5><a href="project-details.html">Technology Vision Science</a></h5>
                        </div>
                    </div>
                </div>
                <div class="project-block-four">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="assets/images/gallery/project-9.jpg" alt="">
                            <div class="icon-box"><img src="assets/images/icons/icon-18.png" alt=""></div>
                        </figure>
                        <div class="text">
                            <h5><a href="project-details.html">Technology Vision Science</a></h5>
                        </div>
                    </div>
                </div>
                <div class="project-block-four">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="assets/images/gallery/project-10.jpg" alt="">
                            <div class="icon-box"><img src="assets/images/icons/icon-19.png" alt=""></div>
                        </figure>
                        <div class="text">
                            <h5><a href="project-details.html">Data Scientest Code</a></h5>
                        </div>
                    </div>
                </div>
                <div class="project-block-four">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="assets/images/gallery/project-7.jpg" alt="">
                            <div class="icon-box"><img src="assets/images/icons/icon-16.png" alt=""></div>
                        </figure>
                        <div class="text">
                            <h5><a href="project-details.html">Artificial Intelligence</a></h5>
                        </div>
                    </div>
                </div>
                <div class="project-block-four">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="assets/images/gallery/project-8.jpg" alt="">
                            <div class="icon-box"><img src="assets/images/icons/icon-17.png" alt=""></div>
                        </figure>
                        <div class="text">
                            <h5><a href="project-details.html">Technology Vision Science</a></h5>
                        </div>
                    </div>
                </div>
                <div class="project-block-four">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="assets/images/gallery/project-9.jpg" alt="">
                            <div class="icon-box"><img src="assets/images/icons/icon-18.png" alt=""></div>
                        </figure>
                        <div class="text">
                            <h5><a href="project-details.html">Technology Vision Science</a></h5>
                        </div>
                    </div>
                </div>
                <div class="project-block-four">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="assets/images/gallery/project-10.jpg" alt="">
                            <div class="icon-box"><img src="assets/images/icons/icon-19.png" alt=""></div>
                        </figure>
                        <div class="text">
                            <h5><a href="project-details.html">Data Scientest Code</a></h5>
                        </div>
                    </div>
                </div>
                <div class="project-block-four">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="assets/images/gallery/project-7.jpg" alt="">
                            <div class="icon-box"><img src="assets/images/icons/icon-16.png" alt=""></div>
                        </figure>
                        <div class="text">
                            <h5><a href="project-details.html">Artificial Intelligence</a></h5>
                        </div>
                    </div>
                </div>
                <div class="project-block-four">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="assets/images/gallery/project-8.jpg" alt="">
                            <div class="icon-box"><img src="assets/images/icons/icon-17.png" alt=""></div>
                        </figure>
                        <div class="text">
                            <h5><a href="project-details.html">Technology Vision Science</a></h5>
                        </div>
                    </div>
                </div>
                <div class="project-block-four">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="assets/images/gallery/project-9.jpg" alt="">
                            <div class="icon-box"><img src="assets/images/icons/icon-18.png" alt=""></div>
                        </figure>
                        <div class="text">
                            <h5><a href="project-details.html">Technology Vision Science</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</section>
<!-- project-details end -->
@endsection