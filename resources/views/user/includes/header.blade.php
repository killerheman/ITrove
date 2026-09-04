<!-- main header -->
<header class="main-header header-style-six">
    <!-- header-lower -->
    <div class="header-lower">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <div class="logo-box pull-left">
                    <figure class="logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('frontend/assets/images/logo/logo1.png') }}" alt="Innovation Trove" style="max-height: 52px; width: auto;">
                        </a>
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
                                <li class="{{ Request::is('/') ? 'current' : '' }}">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="{{ Request::is('about') ? 'current' : '' }}">
                                    <a href="{{ route('about') }}">About Us</a>
                                </li>
                                <li class="{{ Request::is('services') || Request::is('service-details*') ? 'current' : '' }}">
                                    <a href="{{ route('services') }}">Services</a>
                                </li>
                                <li class="{{ Request::is('works') || Request::is('project-details*') ? 'current' : '' }}">
                                    <a href="{{ route('works') }}">Works / Portfolio</a>
                                </li>
                                <li class="{{ Request::is('blog*') ? 'current' : '' }}">
                                    <a href="{{ route('blog') }}">Blog</a>
                                </li>
                                <li class="{{ Request::is('contact-us') ? 'current' : '' }}">
                                    <a href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="nav-right-content clearfix">
                        <div class="btn-box">
                            <a href="{{ route('get-quote') }}" class="theme-btn btn-ten">Get a Quote</a>
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
                    <a href="{{ route('home') }}"><img src="{{ asset('frontend/assets/images/logo/logo6.png') }}" alt="Innovation Trove" style="max-height: 48px; width: auto;"></a>
                </figure>
                <div class="menu-area pull-right clearfix">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                    <div class="nav-right-content clearfix">
                        <div class="btn-box">
                            <a href="{{ route('get-quote') }}" class="theme-btn btn-ten">Get a Quote</a>
                        </div>
                    </div>
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
        <div class="nav-logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('frontend/assets/images/logo/logo1.png') }}" alt="Innovation Trove" title="Logo" style="max-height: 52px; width: auto;">
            </a>
        </div>
        <div class="menu-outer">
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        </div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li><i class="fas fa-map-marker-alt mr-2"></i> Jaigaon (HQ), Jalpaiguri, WB | Patna, Bihar</li>
                <li><i class="fas fa-phone mr-2"></i> <a href="tel:+919648061515">+91-9648061515</a> / <a href="tel:+97517126364">+975-17126364</a></li>
                <li><i class="far fa-envelope mr-2"></i> <a href="mailto:info@innovationtrove.in">info@innovationtrove.in</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="https://x.com/InnovationTrove" target="_blank" rel="noopener noreferrer"><span class="fab fa-twitter"></span></a></li>
                <li><a href="https://www.facebook.com/profile.php?id=100089113158762" target="_blank" rel="noopener noreferrer"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="https://www.linkedin.com/company/innovation-trove-llp" target="_blank" rel="noopener noreferrer"><span class="fab fa-linkedin-in"></span></a></li>
                <li><a href="https://www.instagram.com/innovationtrove/" target="_blank" rel="noopener noreferrer"><span class="fab fa-instagram"></span></a></li>
            </ul>
        </div>
    </nav>
</div>
<!-- End Mobile Menu -->
