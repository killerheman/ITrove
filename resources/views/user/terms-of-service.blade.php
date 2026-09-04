@extends('user.includes.master')

@section('meta_title', 'Terms of Service | Innovation Trove')
@section('meta_description', 'Terms of Service governing the use of Innovation Trove’s website, digital consulting, and software engineering services.')
@section('title', 'Terms of Service')

@section('content')
<!-- Page Title -->
<section class="page-title centred">
    <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-87.png') }});"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Terms of Service</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Terms of Service</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->

<section class="policy-content py-5">
    <div class="auto-container">
        <div class="bg-white p-4 p-md-5 rounded shadow-sm" style="border: 1px solid #edf2f7; line-height: 28px; color: #555;">
            <h2 style="font-size: 28px; font-weight: 800; color: #1c2d52; margin-bottom: 20px;">Terms and Conditions</h2>
            <p>Welcome to <strong>Innovation Trove</strong>. These Terms of Service delineate the legal framework and agreements governing the use of our website (<a href="https://innovationtrove.in">https://innovationtrove.in</a>) and our commercial software engineering, consulting, and development services.</p>

            <h3 style="font-size: 20px; font-weight: 700; color: #000279; margin-top: 30px; margin-bottom: 12px;">1. Acceptance of Terms</h3>
            <p>By browsing this website, requesting a project estimate, or engaging our engineering teams, you accept and agree to be bound by these terms. If you disagree with any part of these terms, please discontinue use of our site.</p>

            <h3 style="font-size: 20px; font-weight: 700; color: #000279; margin-top: 30px; margin-bottom: 12px;">2. Professional Services & Intellectual Property</h3>
            <p>All client engineering contracts, staff augmentation retainers, and turnkey software developments are executed under signed Statements of Work (SOW) and bilateral Non-Disclosure Agreements (NDAs). Unless otherwise mutually specified in a written contract, all delivered source code, database architectures, and digital assets become the exclusive intellectual property (IP) of the client upon complete settlement of agreed milestone invoices.</p>

            <h3 style="font-size: 20px; font-weight: 700; color: #000279; margin-top: 30px; margin-bottom: 12px;">3. Service Availability & Warranties</h3>
            <p>We strive to ensure continuous availability and performance of all hosted staging environments and platforms. For commercial client systems, warranties, SLA uptime guarantees, and ongoing support parameters are strictly governed by the corresponding Master Services Agreement (MSA).</p>

            <h3 style="font-size: 20px; font-weight: 700; color: #000279; margin-top: 30px; margin-bottom: 12px;">4. Contact & Inquiries</h3>
            <p>For questions or formal inquiries regarding our terms, please email our legal team at <a href="mailto:info@innovationtrove.in">info@innovationtrove.in</a> / <a href="mailto:innovationtrove@gmail.com">innovationtrove@gmail.com</a> or call <a href="tel:+919648061515">+91-9648061515</a> / <a href="tel:+919648471515">+91-9648471515</a> (India) or <a href="tel:+97517126364">+975-17126364</a> (Bhutan).</p>
        </div>
    </div>
</section>

@endsection
