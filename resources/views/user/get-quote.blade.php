@extends('user.includes.master')
@section('title', 'Get-Quote')
@section('content')
<!-- Page Title -->
<section class="page-title centred">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-87.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Get-Quote</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Get Quote</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->
<!-- contact-style-two -->
<section class="contact-style-two sec-pad centred">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-68.png);"></div>
    <div class="auto-container">
        <div class="sec-title style-two">
            <h5>SEND QUOTE</h5>
            <h2>We’d love to hear from you <br />for your quote</h2>
            <div class="divider" style="background-image: url(assets/images/icons/divider-1.png);"></div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-10 col-md-12 col-sm-12 offset-lg-1 inner-column">
                <div class="form-inner">
                    <form method="post" action="{{route('quote')}}" id="contact-form" class="default-form">
                        @csrf
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <i class="far fa-user"></i>
                                <input type="text" name="name" placeholder="Your Name" required="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <i class="far fa-envelope"></i>
                                <input type="email" name="email" placeholder="Your Email Address" required="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <i class="fas fa-phone"></i>
                                <input type="text" name="phone" required="" placeholder="Your Contact No.">
                            </div>
<<<<<<< HEAD

                            <Select class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <option value="0">Select Services</option>
                                <option value="Custom Software Development">Custom Software Development</option>
                                <option value="Social Media Marketing">Social Media Marketing</option>
                                <option value="Search Engine Optimization">Search Engine Optimization</option>
                                <option value="Website Design and Development">Website Design and Development</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                                <option value="System Administrator">System Administrator</option>
                                <option value="IT Support">IT Support</option>
                            </Select>
                        
=======
                            <select class="col-lg-6 col-md-6 col-sm-12 form-group quote-select" name="service">
                                <option value=" " selected disabled>Select Services</option>
                                @foreach ($services as $service)
                                    <option value="{{ $service->id }}" >{{ $service->title }}</option>
                                @endforeach
                            </select>

>>>>>>> 93598eb5b3490898c6239885f0c7cfd68b55d456

                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <textarea name="description" placeholder="Description"></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                <button class="theme-btn btn-seven" type="submit" name="submit-form">Send Quote</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-style-two end -->
<!-- contact-info-two -->
@include('user.includes.contact-info')
<!-- contact-info-two end -->



@endsection
