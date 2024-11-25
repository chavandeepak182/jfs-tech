@extends('frontend.layouts.header')
@section('title', "Portfolio - JFS Technologies")
@section('keywords', "IT Services, Account Management services, Digital marketing services, Website Design company, Website design services, End to end sales, outsourcing, Affordable digital marketing services, Website marketing services, SEO service agency, Social media marketing, SEO company for business")

@section('content')
<div class="inner-banner" style="background-image: url(../theme/assets/images/modern-app.webp);">
    <div class="container">
        <div class="inner-title text-center w-75 mx-auto">
            <h1>Top Projects by JFS Technologies: A Portfolio of Excellence</h1>
            <p class="text-white"></p>
            <div class="banner-btn">
				<a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-50 ml-20">Start Your Journey Today <i class="bx bx-chevron-right"></i></a>
			</div>
        </div>
    </div>
</div>

<div class="case-study-area pt-100 pb-70 portfolio-section" id="portfolio">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color2"></span>
            <h2>Introduce Our Projects and Check Recent Work </h2>
        </div>

        <div class="portfolio-menu mt-2 mb-4">
            <nav class="controls">
            <button type="button" class="control outline" data-filter="all">All</button>
            <button type="button" class="control outline" data-filter=".web">Web Design</button>
            <button type="button" class="control outline" data-filter=".dev">Development</button>
            <button type="button" class="control outline" data-filter=".wp">WordPress</button>
            </nav>
        </div>
        <ul class="row portfolio-item">
            <li class="mix dev col-xl-4 pd">
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
            </li>
            <li class="mix web col-xl-4 pd">
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
            </li>
            <li class="mix wp col-xl-4 pd">
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
            </li>
            <li class="mix dev col-xl-4 pd">
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
            </li>
            <li class="mix web col-xl-4 pd">
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
            </li>
            <li class="mix wp col-xl-4 pd">
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
            </li>
        </ul>
    </div>
</div>
@endsection
