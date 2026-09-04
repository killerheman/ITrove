@extends('user.includes.master')

@section('meta_title', 'Privacy Policy | Innovation Trove')
@section('meta_description', 'Privacy Policy of Innovation Trove explaining how we collect, handle, and protect your personal information and project data.')
@section('title', 'Privacy Policy')

@section('content')
<!-- Page Title -->
<section class="page-title centred">
    <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-87.png') }});"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Privacy Policy</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Privacy Policy</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->

<section class="policy-content py-5">
    <div class="auto-container">
        <div class="bg-white p-4 p-md-5 rounded shadow-sm" style="border: 1px solid #edf2f7; line-height: 28px; color: #555;">
            <h2 style="font-size: 28px; font-weight: 800; color: #1c2d52; margin-bottom: 20px;">Innovation Trove Privacy Policy</h2>
            <p>At <strong>Innovation Trove</strong> (accessible from <a href="https://innovationtrove.in">https://innovationtrove.in</a>), safeguarding the privacy of our visitors, clients, and partners is paramount. This Privacy Policy details the types of information we collect, how it is processed, and the measures we take to protect your data.</p>
            
            <h3 style="font-size: 20px; font-weight: 700; color: #000279; margin-top: 30px; margin-bottom: 12px;">1. Information We Collect</h3>
            <p>When you contact us, request a project quote, or hire dedicated developers, we collect personal and business information that you voluntarily provide, including:</p>
            <ul>
                <li><strong>Contact Data:</strong> Name, professional email address, phone/WhatsApp number, company name, and location.</li>
                <li><strong>Project Requirements:</strong> Technical scopes, project briefs, RFP specifications, budget brackets, and target delivery dates.</li>
                <li><strong>Log & Analytics Data:</strong> IP address, browser type, device information, and page interaction timestamps used strictly to analyze website performance.</li>
            </ul>

            <h3 style="font-size: 20px; font-weight: 700; color: #000279; margin-top: 30px; margin-bottom: 12px;">2. How We Use Your Information</h3>
            <p>The information we collect is utilized strictly for legitimate business purposes:</p>
            <ul>
                <li>To evaluate project specifications and prepare architectural discovery proposals and cost estimates.</li>
                <li>To communicate technical updates, sprint deliverables, and customer support resolutions.</li>
                <li>To enforce our Non-Disclosure Agreements (NDAs) and protect confidential project specifications.</li>
                <li>To comply with international data security and legal statutory obligations.</li>
            </ul>

            <h3 style="font-size: 20px; font-weight: 700; color: #000279; margin-top: 30px; margin-bottom: 12px;">3. Data Protection & Confidentiality</h3>
            <p>We do not sell, rent, or monetize personal or business data under any circumstances. All client interactions and technical documentation shared with us are governed by strict confidentiality protocols and industry-standard AES-256 encryption.</p>

            <h3 style="font-size: 20px; font-weight: 700; color: #000279; margin-top: 30px; margin-bottom: 12px;">4. Your Rights</h3>
            <p>You have the right to request access to, update, or permanently delete any personal information held by Innovation Trove. To submit a request, contact our data protection team directly at <a href="mailto:info@innovationtrove.in">info@innovationtrove.in</a>.</p>

            <h3 style="font-size: 20px; font-weight: 700; color: #000279; margin-top: 30px; margin-bottom: 12px;">5. Contact Our Privacy Officer</h3>
            <p>If you have any questions or concerns regarding this policy, please reach out via email at <a href="mailto:info@innovationtrove.in">info@innovationtrove.in</a> / <a href="mailto:innovationtrove@gmail.com">innovationtrove@gmail.com</a> or by phone at <a href="tel:+919648061515">+91-9648061515</a> / <a href="tel:+919648471515">+91-9648471515</a> (India) or <a href="tel:+97517126364">+975-17126364</a> (Bhutan).</p>
        </div>
    </div>
</section>

@endsection
