@extends('user.includes.master')
@section('title', 'Terms-Of-Service')
@section('content')
    <!-- Page Title -->
    <section class="page-title centred">
        <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-87.png') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>Terms-Of-Service</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="#">Terms-Of-Service</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->

    <div class="container">
        <h1>Terms of Service</h1>
<p>Welcome to Innovation Trove. These terms and conditions outline the rules and regulations for the use of our WhatsApp Business API services.</p>

<h2>Acceptance of Terms</h2>
<p>By accessing or using our website or services, you agree to be bound by these terms. If you do not agree, please do not use our services.</p>

<h2>Use of Services</h2>
<ul>
  <li>You must provide accurate and complete information when registering.</li>
  <li>You are responsible for maintaining the confidentiality of your account credentials.</li>
  <li>You agree not to use our services for any illegal or unauthorized purposes.</li>
</ul>

<h2>Service Access</h2>
<p>We reserve the right to suspend or terminate access to the WhatsApp API services at our sole discretion, especially in cases of policy violation or abuse.</p>

<h2>Limitation of Liability</h2>
<p>We are not liable for any indirect or consequential damages arising from the use of our services.</p>

<h2>Changes to Terms</h2>
<p>We reserve the right to update these terms at any time. Changes will be posted on this page and will become effective immediately.</p>

<h2>Contact</h2>
<p>If you have questions about these Terms, contact us at info@innovationtrove.in</p>

        
    </div>



@endsection
