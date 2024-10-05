@extends('user.includes.master')
@section('meta_title','Works| Best it company in Lucknow | Top it companies in Lucknow | Lucknow\'s best company | It Company -  Innovation trove ')
@section('meta_description','Check out our \'Works\' section at Innovation Trove, where we showcase why we\'re the best IT company in Lucknow. As a top IT company in the city, we offer outstanding works and solutions. Discover how we stand out as Lucknow\'s best company for innovative IT services.')
@section('meta_keywords','Best IT company in Lucknow, Top IT companies in Lucknow, Lucknow\'s best company')
@section('title', 'Contact-Us')
@section('content')
<!-- Page Title -->
        <section class="page-title centred">
            <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-87.png') }});"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Works</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="#">Works</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        <!-- project-style-three -->
        <section class="project-style-three project-page-2 centred">
            <div class="auto-container">
                <div class="row clearfix">

                    @forelse ($works as $workdata)
                    <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                        <div class="project-block-three">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{$workdata->image??''}}" alt="Innovation trove">
                                    <a href="{{route('project-details',$workdata->slug)}}" class="link"><i class="fas fa-expand-arrows-alt"></i></a>
                                </figure>
                                <div class="lower-content">
                                    <figure class="icon-box"><img src="{{$workdata->thumbnail??''}}" alt="Innovation trove"></figure>
                                    <h3><a href="{{route('project-details',$workdata->slug)}}">{{$workdata->title??''}}</a></h3>
                                    <p>{{$workdata->short_description??''}}</p>
                                    <div class="btn-box">
                                        <a href="{{route('project-details',$workdata->slug)}}" class="theme-btn btn-eight">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                     <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                        <div class="project-block-three">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{ asset('frontend/assets/images/gallery/project-5.jpg')}}" alt="">
                                    <a href="#" class="link"><i class="fas fa-expand-arrows-alt"></i></a>
                                </figure>
                                <div class="lower-content">
                                    <figure class="icon-box"><img src="{{ asset('frontend/assets/images/icons/icon-18.png')}}" alt=""></figure>
                                    <h3><a href="#">ITrove Food Delivery System</a></h3>
                                    <p>A food delivery system is a service or platform that facilitates the ordering and delivery of food from restaurants or food outlets to customers. These systems have become increasingly popular, offering convenience for consumers and expanded customer reach for food businesses.</p>
                                    <div class="btn-box">
                                        <a href="#" class="theme-btn btn-eight">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                        <div class="project-block-three">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{ asset('frontend/assets/images/gallery/project-6.jpg')}}" alt="">
                                    <a href="#" class="link"><i class="fas fa-expand-arrows-alt"></i></a>
                                </figure>
                                <div class="lower-content">
                                    <figure class="icon-box"><img src="{{ asset('frontend/assets/images/icons/icon-19.png')}}" alt=""></figure>
                                    <h3><a href="#">ITrove ERP</a></h3>
                                    <p>ERP (Enterprise Resource Planning) system, possibly using "smothing" as a placeholder or generic term. ERP systems are comprehensive software platforms used by organizations to manage and integrate important parts of their businesses.</p>
                                    <div class="btn-box">
                                        <a href="#" class="theme-btn btn-eight">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                        <div class="project-block-three">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{ asset('frontend/assets/images/gallery/project-11.jpg')}}" alt="">
                                    <a href="#" class="link"><i class="fas fa-expand-arrows-alt"></i></a>
                                </figure>
                                <div class="lower-content">
                                    <figure class="icon-box"><img src="{{ asset('frontend/assets/images/icons/icon-16.png')}}" alt=""></figure>
                                    <h3><a href="#">Theorie Stampers</a></h3>
                                    <p>An online driving exam system represents a significant step toward modernizing the driver's licensing process, making it more efficient, accessible, and adaptable to the needs of a diverse population.</p>
                                    <div class="btn-box">
                                        <a href="#" class="theme-btn btn-eight">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                        <div class="project-block-three">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{ asset('frontend/assets/images/gallery/project-12.jpg')}}" alt="">
                                    <a href="#" class="link"><i class="fas fa-expand-arrows-alt"></i></a>
                                </figure>
                                <div class="lower-content">
                                    <figure class="icon-box"><img src="{{ asset('frontend/assets/images/icons/icon-18.png')}}" alt=""></figure>
                                    <h3><a href="#">Grievance Portal</a></a></h3>
                                    <p>A grievance portal is an online platform designed to manage and resolve complaints or grievances raised by employees, customers, citizens, or any specific group of users. These portals are widely used in various sectors, including corporate, government, educational institutions, and public service organizations. The primary goal is to provide a transparent, accessible, and efficient means of addressing concerns, ensuring that grievances are heard, processed, and resolved in a fair and timely manner.</p>
                                    <div class="btn-box">
                                        <a href="#" class="theme-btn btn-eight">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                        <div class="project-block-three">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{ asset('frontend/assets/images/gallery/project-13.jpg')}}" alt="">
                                    <a href="#" class="link"><i class="fas fa-expand-arrows-alt"></i></a>
                                </figure>
                                <div class="lower-content">
                                    <figure class="icon-box"><img src="{{ asset('frontend/assets/images/icons/icon-19.png')}}" alt=""></figure>
                                    <h3><a href="#">File Tracking System</a></h3>
                                    <p>
                                        A File Tracking System is a digital solution designed to track the movement, status, and management of files or documents within an organization. This system is especially useful in environments where numerous documents are processed and require approval from multiple departments or individuals, such as government offices, legal firms, large corporations, and educational institutions. By digitizing the tracking process, organizations can significantly improve efficiency, accountability, and transparency in their document handling processes.</p>
                                    <div class="btn-box">
                                        <a href="#" class="theme-btn btn-eight">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                        <div class="project-block-three">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{ asset('frontend/assets/images/gallery/project-13.jpg')}}" alt="">
                                    <a href="#" class="link"><i class="fas fa-expand-arrows-alt"></i></a>
                                </figure>
                                <div class="lower-content">
                                    <figure class="icon-box"><img src="{{ asset('frontend/assets/images/icons/icon-19.png')}}" alt=""></figure>
                                    <h3><a href="#">Pizza Paradise</a></h3>
                                    <p>This system has gained immense popularity due to its convenience, variety, and the ability to order easily through websites or mobile apps.</p>
                                    <div class="btn-box">
                                        <a href="#" class="theme-btn btn-eight">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                        <div class="project-block-three">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{ asset('frontend/assets/images/gallery/project-13.jpg')}}" alt="">
                                    <a href="#" class="link"><i class="fas fa-expand-arrows-alt"></i></a>
                                </figure>
                                <div class="lower-content">
                                    <figure class="icon-box"><img src="{{ asset('frontend/assets/images/icons/icon-19.png')}}" alt=""></figure>
                                    <h3><a href="#">Meencat PC</a></h3>
                                    <p>To create an interactive, user-friendly digital learning platform that enhances the educational experience for students and facilitates efficient teaching methodologies for educators.</p>
                                    <div class="btn-box">
                                        <a href="#" class="theme-btn btn-eight">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforelse
                </div>

                @isset($works)
                <div class="pagination-wrapper centred">
                    <ul class="pagination clearfix">
                        {{-- Previous Page Link --}}
                        @if ($works->onFirstPage())
                            <li class="disabled"><a><i class="fas fa-angle-left"></i></a></li>
                        @else
                            <li><a href="{{ $works->previousPageUrl() }}"><i class="fas fa-angle-left"></i></a></li>
                        @endif

                        {{-- Pagination Elements --}}
                        @foreach ($works as $project)
                            <li>
                                <a href="{{ $project->url }}">
                                    {{ $project->currentPage() == $project->getPage() ? $project->getPage() : $project->getPage() }}
                                </a>
                            </li>
                        @endforeach

                        {{-- Next Page Link --}}
                        @if ($works->hasMorePages())
                            <li><a href="{{ $works->nextPageUrl() }}"><i class="fas fa-angle-right"></i></a></li>
                        @else
                            <li class="disabled"><a><i class="fas fa-angle-right"></i></a></li>
                        @endif
                    </ul>
                </div>
                @endisset


            </div>
        </section>
        <!-- project-style-three end -->
@endsection
