@extends('frontend.layouts.header')
@section('title', "Success Stories - JFS Technologies")
@section('keywords', "IT Services, Account Management services, Digital marketing services, Website Design company, Website design services, End to end sales, outsourcing, Affordable digital marketing services, Website marketing services, SEO service agency, Social media marketing, SEO company for business")

@section('content')
<div class="inner-banner">
    <div class="container">
        <div class="inner-title text-center">
            <h1>Our Success Stories</h1>
            <ul>
                <li>
                    <a href="{{ asset('theme') }}">Home</a>
                </li>
                <li>
                    <i class="bx bx-chevrons-right"></i>
                </li>
                <li>Success Stories</li>
            </ul>
        </div>
    </div>
    <div class="inner-shape">
        <img src="{{ asset('theme') }}/{{ asset('theme') }}/assets/images/shape/inner-shape.png" alt="Images">
    </div>
</div>

<div class="case-study-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color2">Case Study</span>
            <h2>Introduce Our Projects and Check Recent Work </h2>
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
