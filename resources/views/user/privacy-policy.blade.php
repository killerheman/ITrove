@extends('user.includes.master')
@section('title', 'Privacy-Policy')
@section('content')
    <!-- Page Title -->
    <section class="page-title centred">
        <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-87.png') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>Privacy-Policy</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="#">Privacy-Policy</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->

<h1>Privacy Policy</h1>
<p>At Innovation Trove, accessible from https://innovationtrove.in, we value your privacy and are committed to protecting your personal information.</p>

<h2>Information We Collect</h2>
<p>We may collect personal data such as your name, email address, phone number, and business information when you use our website, WhatsApp services, or contact us.</p>

<h2>How We Use Your Information</h2>
<ul>
  <li>To provide WhatsApp Business API services</li>
  <li>To communicate with you and respond to inquiries</li>
  <li>To improve our services</li>
  <li>To comply with legal obligations</li>
</ul>

<h2>Data Sharing and Security</h2>
<p>We do not sell or share your personal information with third parties, except as necessary to provide services or comply with legal requirements. We implement industry-standard security measures to protect your data.</p>

<h2>Cookies</h2>
<p>We may use cookies to enhance your experience on our site. You can choose to disable cookies through your browser settings.</p>

<h2>Your Rights</h2>
<p>You may request to access, update, or delete your personal data at any time by contacting us.</p>

<h2>Contact Us</h2>
<p>If you have any questions about our Privacy Policy, please contact us at info@innovationtrove.in</p>




@endsection
