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

<div class="case-study-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color2"></span>
            <h2>Our Success Stories</h2>
        </div>
        <div class="row pt-45">
            <div class="col-lg-4 col-md-6">
                <div class="case-study-item">
                    <a href="#">
                        <img src="{{ asset('theme') }}/assets/images/case-study/case-study1.jpg" alt="Images">
                    </a>
                    <div class="content">
                        <h3><a href="#">Business Solution</a></h3>
                        <ul>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Planing</a> </li>
                        </ul>
                        <a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="case-study-item">
                    <a href="#">
                        <img src="{{ asset('theme') }}/assets/images/case-study/case-study2.jpg" alt="Images">
                    </a>
                    <div class="content">
                        <h3><a href="#">Web Development</a></h3>
                        <ul>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Development</a> </li>
                        </ul>
                        <a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="case-study-item">
                    <a href="#">
                        <img src="{{ asset('theme') }}/assets/images/case-study/case-study3.jpg" alt="Images">
                    </a>
                    <div class="content">
                        <h3><a href="#">Social Media App</a></h3>
                        <ul>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Social</a> </li>
                        </ul>
                        <a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                    </div>
                </div>
            </div>
<div class="col-lg-4 col-md-6">
<div class="case-study-item">
<a href="#">
<img src="{{ asset('theme') }}/assets/images/case-study/case-study4.jpg" alt="Images">
</a>
<div class="content">
<h3><a href="#">UI/UX Research</a></h3>
<ul>
<li><a href="#">UI/UX Design</a></li>
<li><a href="#">Research</a></li>
</ul>
<a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="case-study-item">
<a href="#">
<img src="{{ asset('theme') }}/assets/images/case-study/case-study5.jpg" alt="Images">
</a>
<div class="content">
<h3><a href="#">Business Growth</a></h3>
<ul>
<li><a href="#">Business</a></li>
<li><a href="#">Growth</a></li>
</ul>
<a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="case-study-item">
<a href="#">
<img src="{{ asset('theme') }}/assets/images/case-study/case-study6.jpg" alt="Images">
</a>
<div class="content">
<h3><a href="#">Consulting</a></h3>
<ul>
<li><a href="#">Consulting</a></li>
<li><a href="#">Planing</a></li>
</ul>
<a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="case-study-item">
<a href="#">
<img src="{{ asset('theme') }}/assets/images/case-study/case-study7.jpg" alt="Images">
</a>
<div class="content">
<h3><a href="#">IT Management</a></h3>
<ul>
<li><a href="#">IT</a></li>
<li><a href="#">Management</a></li>
</ul>
<a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="case-study-item">
<a href="#">
<img src="{{ asset('theme') }}/assets/images/case-study/case-study8.jpg" alt="Images">
</a>
<div class="content">
<h3><a href="#">Data Analysis</a></h3>
<ul>
<li><a href="#">Data</a></li>
<li><a href="#">Analysis</a></li>
</ul>
<a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
<div class="case-study-item">
<a href="#">
<img src="{{ asset('theme') }}/assets/images/case-study/case-study9.jpg" alt="Images">
</a>
<div class="content">
<h3><a href="#">Business Reform</a></h3>
<ul>
<li><a href="#">Business</a></li>
<li><a href="#">Reform</a></li>
</ul>
<a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
</div>
</div>
</div>
</div>
</div>
@endsection
