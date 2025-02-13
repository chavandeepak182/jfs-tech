@extends('frontend.layouts.header')
@section('title', "Success Stories of JFS: Transforming Businesses with Digital Excellence")
@section('description', "Explore the success stories of JFS, where we empower businesses with innovative digital marketing solutions, driving growth and achieving outstanding results.")
@section('keywords', "Success Stories of JFS")

@section('content')
<div id="banner" class="inner-banner">
    <div class="container">
        <div class="inner-title w-75">
            <h1>Introduce Our Projects and Check Recent Work</h1>                 
            <p class="text-white"></p>
            <div class="banner-btn">
				<a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-50">Let's Start Today! <i class="bx bx-chevron-right"></i></a>
			</div>
        </div>
    </div>
    
    <video id="videobcg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
        <source src="../theme/assets/images/pvr-1.mp4" type="video/mp4">
        <source src="movie.webm" type="video/webm">Sorry, your browser does not support HTML5 video.
    </video>
</div>

<div class="case-study-area ss-page pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color2"></span>
            <h2>Our Success Stories</h2>
        </div>
        <div class="row pt-45">
            <div class="col-lg-4 col-md-6">
                <div class="case-study-item">
                    <a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss1.pdf">
                        <img src="{{ asset('theme') }}/assets/images/case-study/ss1.webp" alt="Images">
                    </a>
                    <div class="content">
                        <h3><a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss1.pdf">Baby Diaper Size Recommendation for Consumer Goods Manufacturer</a></h3>
                        <a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss1.pdf" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="case-study-item">
                    <a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss2.pdf">
                        <img src="{{ asset('theme') }}/assets/images/case-study/ss2.webp" alt="Images">
                    </a>
                    <div class="content">
                        <h3><a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss2.pdf">Billing Automation using Face & Object Recognition</a></h3>
                        <a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss2.pdf" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="case-study-item">
                    <a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss3.pdf">
                        <img src="{{ asset('theme') }}/assets/images/case-study/ss3.webp" alt="Images">
                    </a>
                    <div class="content">
                        <h3><a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss3.pdf">Employee Safety Monitoring Solution for a Cast Alloy Company</a></h3>
                        <a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss3.pdf" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="case-study-item">
                    <a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss4.pdf">
                        <img src="{{ asset('theme') }}/assets/images/case-study/ss4.webp" alt="Images">
                    </a>
                    <div class="content">
                        <h3><a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss4.pdf">Solid Waste Classification for a European Municipal Corporation</a></h3>
                        <a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss4.pdf" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="case-study-item">
                    <a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss5.pdf">
                    <img src="{{ asset('theme') }}/assets/images/case-study/ss5.webp" alt="Images">
                    </a>
                    <div class="content">
                        <h3><a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss5.pdf">Leather Quality Monitoring for a Shoe Manufacturer</a></h3>
                        <a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss5.pdf" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="case-study-item">
                    <a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss6.pdf">
                        <img src="{{ asset('theme') }}/assets/images/case-study/ss6.webp" alt="Images">
                    </a>
                    <div class="content">
                        <h3><a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss6.pdf">Enhancing Customer Experience with Alexa Voice Bot for Shipping</a></h3>
                        <a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss6.pdf" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="case-study-item">
                    <a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss7.pdf">
                        <img src="{{ asset('theme') }}/assets/images/case-study/ss7.jpg" alt="Images">
                    </a>
                    <div class="content">
                        <h3><a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss7.pdf">AI-Powered Waste Management for European Municipality</a></h3>
                        <a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss7.pdf" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="case-study-item">
                    <a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss8.pdf">
                        <img src="{{ asset('theme') }}/assets/images/case-study/ss8.jpg" alt="Images">
                    </a>
                    <div class="content">
                        <h3><a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss8.pdf">AI-Powered Non-Compliance Monitoring for Remote Workforce</a></h3>
                        <a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss8.pdf" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="case-study-item">
                    <a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss9.pdf">
                        <img src="{{ asset('theme') }}/assets/images/case-study/ss9.jpg" alt="Images">
                    </a>
                    <div class="content">
                        <h3><a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss9.pdf">AI Powered Document Data Success Story Extractor Platform</a></h3>
                        <a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss9.pdf" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="case-study-item">
                    <a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss10.pdf">
                        <img src="{{ asset('theme') }}/assets/images/case-study/ss10.jpg" alt="Images">
                    </a>
                    <div class="content">
                        <h3><a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss10.pdf">No-Code AI Platform for Business Success</a></h3>
                        <a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss10.pdf" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="case-study-item">
                    <a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss11.pdf">
                        <img src="{{ asset('theme') }}/assets/images/case-study/ss11.jpg" alt="Images">
                    </a>
                    <div class="content">
                        <h3><a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss11.pdf">AI Powered Intrusion Detection Platform</a></h3>
                        <a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss11.pdf" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="case-study-item">
                    <a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss12.pdf">
                        <img src="{{ asset('theme') }}/assets/images/case-study/ss12.jpg" alt="Images">
                    </a>
                    <div class="content">
                        <h3><a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss12.pdf">AI-Powered Demand Forecasting for Water Heater Manufacturer</a></h3>
                        <a target="_blank" href="{{ url('/') }}/theme/assets/images/case-study/ss12.pdf" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
