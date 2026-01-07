@extends('user.includes.master')
@section('title', 'Data-Deletion')
@section('content')
    <!-- Page Title -->
    <section class="page-title centred">
        <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-87.png') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>Data-Deletion</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="#">Data-Deletion</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->

    <div class="container">
<h1>Data Deletion Instructions</h1>
<p>At Innovation Trove, we respect your privacy and allow you to request the deletion of your personal data collected through our WhatsApp Business API services.</p>

<h2>How to Request Deletion</h2>
<p>If you wish to delete your data, please follow the steps below:</p>
<ol>
  <li>Send an email to <strong>info@innovationtrove.in</strong> with the subject line: <em>"Data Deletion Request"</em></li>
  <li>Include your full name, registered phone number, and reason for the deletion request.</li>
  <li>We will confirm your identity and delete your data within 7 business days.</li>
</ol>

<h2>Note</h2>
<p>Once deleted, your data cannot be recovered. Certain data may be retained as required by law or to comply with Meta’s WhatsApp Business API terms.</p>

<h2>Contact Us</h2>
<p>If you have any questions, please reach out to <strong>info@innovationtrove.in</strong>.</p>


        
    </div>



@endsection
