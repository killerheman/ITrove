@extends('user.includes.master')
@section('title', 'Project Details')
@section('head')
<style>
   .service-details-content .title-content .text h2 {
    position: relative;
    display: block;
    font-size: 36px;
    line-height: 48px;
    font-weight: 600;
    margin-bottom: 29px;
    color: #000279;
}

</style>
@endsection
@section('content')
  <!-- Page Title -->
  <section class="page-title centred">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-87.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Service Detail</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Service details</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->

  <!-- service-details -->
  <section class="service-details">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="service-sidebar">
                    <div class="category-widget">
                        <ul class="category-list clearfix">
                            @if($serviceData!='')
                                @foreach ($serviceData as $data)
                                  <li><a href="{{route('service_details',$data->slug)}}" class="{{ $loop->first ? 'current' : '' }}">{{$data->title??''}}<i class="fas fa-long-arrow-alt-right"></i></a></li>
                                @endforeach
                            @endif

                        </ul>
                    </div>
                    <div class="download-widget d-none">
                        <ul class="download-list clearfix">
                            <li>
                                <a href="advertising-marketing.html">
                                    <img src="assets/images/icons/icon-36.png" alt="">
                                    <h5>Research Report.pdf</h5>
                                    <span>65 KB</span>
                                    <i class="fas fa-download"></i>
                                </a>
                            </li>
                            <li>
                                <a href="advertising-marketing.html">
                                    <img src="assets/images/icons/icon-37.png" alt="">
                                    <h5>Service Details.txt</h5>
                                    <span>45 KB</span>
                                    <i class="fas fa-download"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="award-widget centred">
                        <div class="inner-box">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-90.png);"></div>
                            <h2>Award Winning Service</h2>
                            <div class="trophy-box">
                                <span class="curved-circle">ITrove The Best Servic Provider 2024</span>
                                <figure class="trophy"><img src="{{asset('frontend/assets/images/icons/trophy-1.png')}}" alt=""></figure>
                            </div>
                            <p>To take a trivial example, which idea of ever undertakes.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="service-details-content">
                    <div class="title-content">
                        <div class="text">
                            <h2>{{$servicedetail->title}}</h2>
                            {{-- <p>To take a trivial example, which of us ever under- takes laborious physical exercise, except to obtain some advantage from it but who has any right find fault with a man who chooses to enjoy a get pleasure that has annoying.</p>
                            <p>Undertakes laborious physical exercise, except to obtain some advantage from it but who has any find fault with a man who chooses.</p> --}}
                        </div>
                    </div>
                    <div class="content-one">
                        <figure class="image-box"><img src="{{asset($servicedetail->pic??'')}}" style="height:500px"alt=""></figure>
                    </div>
                    <div class="content-two">
                        {!!$servicedetail->full_description??''!!}
                    </div>
                    {{-- <div class="content-three">
                        <div class="text">
                            <h3>Technologies that we use</h3>
                            <p>We denounce with righteos indignation and dislikes men who are so beguiled demoralized cof pleasure of the moment.</p>
                            <ul class="list-style-one clearfix">
                                <li>Medical technology.</li>
                                <li>Manufacturing technology.</li>
                                <li>Construction technology.</li>
                                <li>Energy power technology.</li>
                                <li>Transportation technology.</li>
                                <li>Agriculture and bio technology.</li>
                            </ul>
                        </div>
                        <figure class="image-box"><img src="assets/images/icons/chart-1.png" alt=""></figure>
                    </div> --}}
                    <div class="content-four centred">
                        <div class="text">
                            <h3>Application areas</h3>
                            <p>We denounce with righteos indignation and dislikes men who are so <br />beguiled demoralized cof pleasure of the moment.</p>
                        </div>
                        <div class="four-item-carousel owl-carousel owl-theme dots-style-one owl-nav-none">
                            <div class="single-item">
                                <div class="icon-box"><i class="flaticon-product"></i></div>
                                <h5>Transportation & Coordinations</h5>
                            </div>
                            <div class="single-item">
                                <div class="icon-box"><i class="flaticon-gamepad"></i></div>
                                <h5>Amusement & Media</h5>
                            </div>
                            <div class="single-item">
                                <div class="icon-box"><i class="flaticon-medicines"></i></div>
                                <h5>Medical Care & Medication</h5>
                            </div>
                            <div class="single-item">
                                <div class="icon-box"><i class="flaticon-travel"></i></div>
                                <h5>Accommodation and Travel</h5>
                            </div>
                            <div class="single-item">
                                <div class="icon-box"><i class="flaticon-product"></i></div>
                                <h5>Transportation & Coordinations</h5>
                            </div>
                            <div class="single-item">
                                <div class="icon-box"><i class="flaticon-gamepad"></i></div>
                                <h5>Amusement & Media</h5>
                            </div>
                            <div class="single-item">
                                <div class="icon-box"><i class="flaticon-medicines"></i></div>
                                <h5>Medical Care & Medication</h5>
                            </div>
                            <div class="single-item">
                                <div class="icon-box"><i class="flaticon-travel"></i></div>
                                <h5>Accommodation and Travel</h5>
                            </div>
                            <div class="single-item">
                                <div class="icon-box"><i class="flaticon-product"></i></div>
                                <h5>Transportation & Coordinations</h5>
                            </div>
                            <div class="single-item">
                                <div class="icon-box"><i class="flaticon-gamepad"></i></div>
                                <h5>Amusement & Media</h5>
                            </div>
                            <div class="single-item">
                                <div class="icon-box"><i class="flaticon-medicines"></i></div>
                                <h5>Medical Care & Medication</h5>
                            </div>
                            <div class="single-item">
                                <div class="icon-box"><i class="flaticon-travel"></i></div>
                                <h5>Accommodation and Travel</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service-details end -->
@endsection
