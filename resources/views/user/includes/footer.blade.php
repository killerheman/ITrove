<footer class="main-footer footer-style-six">
    <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-60.png') }});"></div>
    <div class="auto-container">
        <div class="footer-top-two">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget">
                        <div class="widget-title">
                            <h3>Global IT Partner</h3>
                        </div>
                        <div class="widget-content">
                            <p style="color: #cfd8dc; line-height: 24px; margin-bottom: 20px;">
                                <strong>Innovation Trove</strong> is an agile software development company engineering custom web applications, SaaS platforms, mobile solutions, and enterprise ERPs for forward-thinking businesses across the <strong>USA, UK, Europe, and India</strong>.
                            </p>
                            <ul class="info-list clearfix">
                                <li>
                                    <h4>Head Office Location</h4>
                                    <p>Daragaon, Near Petrol Pump, Jaigaon, Jalpaiguri, West Bengal (736182)</p>
                                </li>
                                <li>
                                    <h4>Regional Delivery Center</h4>
                                    <p>Patna: 212 B Sahdeo Mahto Marg, Boring Rd, Bihar (800001)</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget">
                        <div class="widget-title">
                            <h3>Core Services</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                @foreach (App\Models\Service::take(7)->get() as $ser)
                                    <li><a href="{{ route('service_details', $ser->slug) }}">{{ $ser->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget">
                        <div class="widget-title">
                            <h3>Quick Links</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="{{ route('about') }}">About Innovation Trove</a></li>
                                <li><a href="{{ route('works') }}">Portfolio & Case Studies</a></li>
                                <li><a href="{{ route('services') }}">All IT Services</a></li>
                                <li><a href="{{ route('get-quote') }}">Hire Dedicated Developers</a></li>
                                <li><a href="{{ route('contact') }}">Contact Our Engineers</a></li>
                                <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                                <li><a href="{{ route('terms-of-service') }}">Terms of Service</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget subscribe-widget">
                        <div class="widget-title">
                            <h3>Direct Inquiries</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="info-list clearfix mb-4" style="list-style: none; padding-left: 0;">
                                <li style="margin-bottom: 12px;">
                                    <span style="color: #fb9506; font-weight: 600; display: block; font-size: 13px;">PHONE & WHATSAPP:</span>
                                    <a href="tel:+919648061515" style="color: #fff; font-size: 14px; font-weight: 600; display: block; line-height: 22px;">+91-9648061515 (India)</a>
                                    <a href="tel:+919648471515" style="color: #fff; font-size: 14px; font-weight: 600; display: block; line-height: 22px;">+91-9648471515 (India)</a>
                                    <a href="tel:+97517126364" style="color: #fff; font-size: 14px; font-weight: 600; display: block; line-height: 22px;">+975-17126364 (Bhutan)</a>
                                </li>
                                <li style="margin-bottom: 12px;">
                                    <span style="color: #fb9506; font-weight: 600; display: block; font-size: 13px;">CLIENT & INQUIRY EMAILS:</span>
                                    <a href="mailto:info@innovationtrove.in" style="color: #fff; font-size: 14px; display: block; line-height: 22px;">info@innovationtrove.in</a>
                                    <a href="mailto:innovationtrove@gmail.com" style="color: #fff; font-size: 14px; display: block; line-height: 22px;">innovationtrove@gmail.com</a>
                                </li>
                                <li>
                                    <span style="color: #fb9506; font-weight: 600; display: block; font-size: 13px;">GLOBAL SUPPORT:</span>
                                    <span style="color: #cfd8dc; font-size: 13px;">24/7 Dedicated Agile Support & Overlapping Time Zones</span>
                                </li>
                            </ul>

                            <form action="{{ route('newsletter') }}" method="post" class="subscribe-form">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Enter Business Email" required>
                                    <button type="submit" class="theme-btn btn-ten">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="bottom-inner d-flex justify-content-between align-items-center flex-wrap">
                <figure class="footer-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('frontend/assets/images/logo/logo6.png') }}" alt="Innovation Trove">
                    </a>
                </figure>
                <div class="copyright">
                    <p>Copyright &copy; {{ date('Y') }} <a href="{{ route('home') }}">Innovation Trove LLP</a>. All Rights Reserved. Enterprise Software & Web Development.</p>
                </div>
                <ul class="social-links clearfix">
                    <li><a href="https://www.facebook.com/profile.php?id=100089113158762" target="_blank" rel="noopener noreferrer" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.instagram.com/innovationtrove/" target="_blank" rel="noopener noreferrer" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/innovation-trove-llp" target="_blank" rel="noopener noreferrer" title="LinkedIn"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="https://x.com/InnovationTrove" target="_blank" rel="noopener noreferrer" title="Twitter / X"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
