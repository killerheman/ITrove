<!-- main header -->
<header class="main-header header-style-six">
    <!-- header-lower -->
    <div class="header-lower">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <div class="col-1 logo-box pull-left">
                    <figure class="logo"><a href="#">
                            <img src="{{ asset('frontend/assets/images/logo/logo1.png') }}" alt=""></a>
                    </figure>
                </div>
                <div class="menu-area pull-right clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="{{route('home')}}">Home</a>
                                </li>
                                <li class=""><a href="{{route('about')}}">About Us</a>
                                </li>
                                <li class=""><a href="{{ route('services') }}">Services</a>
                                </li>
                                <li class=""><a href="{{ route('works') }}">Works</a>
                                </li>
                                <li class=""><a href="{{route('blog')}}">Blog</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="nav-right-content clearfix">
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn" type="button" id="dropdownMenu3"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="fas fa-search"></i></button>
                                <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu3">
                                    <div class="form-container">
                                        <form method="post" action="#">
                                            <div class="form-group">
                                                <input type="search" name="search-field" value=""
                                                    placeholder="Search...." required="">
                                                <button type="submit" class="search-btn"><span
                                                        class="fas fa-search"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-box">
                            <a href="{{ route('contact') }}" class="theme-btn btn-ten">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <figure class="sticky-logo pull-left">
                    <a href="#"><img src="{{ asset('frontend/assets/images/logo/logo6.png') }}"
                            alt=""></a>
                </figure>
                <div class="menu-area pull-right clearfix">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->

<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>

    <nav class="menu-box">
        <div class="nav-logo"><a href="#"><img
                    src="{{ asset('frontend/assets/images/logo/logo1.png') }}" alt="InnovationTrove Logo"
                    title="Logo"></a></div>
        <div class="menu-outer">
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        </div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Munshipulia, Lucknow, India</li>
                <li><a href="tel:+8801682648101">+91 8896@gmail.com</a></li>
                <li><a href="mailto:info@example.com">info@innovationtrove.in</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                <li><a href="#"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div>
<!-- End Mobile Menu -->
