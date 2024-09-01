<section class="clients-style-three centred">
    <div class="auto-container">
        <div class="inner-container">
            <ul class="clients-logo-list clearfix">
                <li class="clients-logo-box">
                    <a href="index.html"><img src="{{ asset('frontend/assets/images/logo/up.png')}}"  style="height:120px;width:120px"alt=""></a>
                </li>
                <li class="clients-logo-box">
                    <a href="index.html"><img src="{{ asset('frontend/assets/images/logo/bihar.png')}}"  style="height:120px;width:120px"alt=""></a>
                </li>
                <li class="clients-logo-box">
                    <a href="index.html"><img src="{{ asset('frontend/assets/images/logo/nei.jpeg')}}"  style="height:120px;width:120px"alt=""></a>
                </li>
                <li class="clients-logo-box">
                    <a href="index.html"><img src="{{ asset('frontend/assets/images/logo/us.png')}}"  style="height:120px;width:120px" alt=""></a>
                </li>
                <li class="clients-logo-box">
                    <a href="index.html"><img src="{{ asset('frontend/assets/images/logo/south1.png')}}"  style="height:120px;width:120px"alt=""></a>
                </li>
            </ul>
        </div>
    </div>
</section>
<footer class="main-footer footer-style-six">
    <div class="pattern-layer"
        style="background-image: url({{ asset('frontend/assets/images/shape/shape-60.png') }});"></div>
    <div class="auto-container">
        <div class="footer-top-two">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget">
                        <div class="widget-title">
                            <h3>Location</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="info-list clearfix">
                                <li>
                                    <h4>Head Office Location</h4>
                                    <p>Aragaon, Near Petrol Pump, Jaigaon <br/>Jalpaiguri,West bengal (736182)</p>
                                </li>
                                {{-- <li>
                                    <h4>Branch Office Location</h4>
                                    <p>Munshipulia,Lucknow ,U.P., India</p>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget">
                        <div class="widget-title">
                            <h3>Service Link</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                @foreach (App\Models\Service::take(10)->get() as $ser)
                                <li><a href="{{route('service_details',$ser->slug)}}">{{$ser->title}}</a></li>
                            @endforeach
                            
                             
                                {{-- <li><a href="#">Agency</a></li>
                                <li><a href="#">Social Media</a></li>
                                <li><a href="#">Branding</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Search engine</a></li>
                                <li><a href="#">Online support</a></li>
                                <li><a href="#">Development</a></li>
                                <li><a href="#">Pay per click</a></li>
                                <li><a href="#">Event activation</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget">
                        <div class="widget-title">
                            <h3>Contact Us</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="info-list clearfix">
                                <li>
                                    <h4>Phone No.</h4>
                                    <p><a href="tel:9434601912">+91-9434601912</a></p>
                                </li>
                                <li>
                                    <h4>Email Address</h4>
                                    <p><a href="mailto:info@innovationtrove.in">info@innovationtrove.in</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget subscribe-widget">
                        <div class="widget-title">
                            <h3>Newsletter</h3>
                        </div>
                        <div class="widget-content">
                            <div class="text">
                                <p>Subscribe To Our Update Newsletter For Our Latest Update.</p>
                            </div>
                            <form action="{{route('newsletter')}}" method="post" class="subscribe-form">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Your Email Address"
                                        >
                                    <button type="submit" class="theme-btn btn-ten">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="bottom-inner">
                <figure class="footer-logo"><a href="#"><img
                            src="{{ asset('frontend/assets/images/logo/logo6.png') }}"
                            alt=""></a></figure>
                <div class="copyright">
                    <p>Copyright &copy; <a href="#">Innovation Trove</a>, All Rights Reserved.</p>
                </div>
                <ul class="social-links clearfix">
                    <li><a href="https://www.facebook.com/profile.php?id=100089113158762"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.instagram.com/innovationtrove/"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com/posts/innovation-trove-llp_happynewyear-activity-7147578868239970305-_yy9"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
