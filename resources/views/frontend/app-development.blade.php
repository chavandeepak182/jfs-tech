@extends('frontend.layouts.header')
@section('title', "Mobile Application Development - JFS Technologies")
@section('description', "Elevate your online presence with our Digital marketing company services. Drive growth and engagement with tailored strategies.")
@section('keywords', "IT Services, Account Management services, Digital marketing services, Website Design company, Website design services, End to end sales, outsourcing, Affordable digital marketing services, Website marketing services, SEO service agency, Social media marketing, SEO company for business")

@section('content')

<div class="inner-banner" style="background-image: url(../theme/assets/images/infra.webp);">
    <div class="container">
        <div class="inner-title text-center w-75 mx-auto">
            <h1>Transform Your Ideas into Cutting-Edge Mobile Applications</h1>
            <p class="text-white"></p>
            <div class="banner-btn">
				<a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-50 ml-20">Explore Our Solutions <i class="bx bx-chevron-right"></i></a>
			</div>
        </div>
    </div>
</div>


<section class="services-style-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color2"></span>
            <h2>Crafting Your Ideas into Next-Gen Mobile Solutions</h2>
            <p class="margin-auto">At <strong>JFS Technologies</strong>, we specialize in delivering high-performance mobile app development services tailored to businesses of all sizes. With experience across various industries, we create mobile solutions that ensure your app excels in today’s competitive market.</p>
        </div>
        <div class="row pt-45 mx-auto justify-content-center custom-card">
            <div class="col-lg-4 col-sm-6">
                <div class="services-card services-style-bg p-0">
                    <img src="{{ asset('theme') }}/assets/images/icons/native.gif" class="brand-logo-one icons-img" alt="Startups" style="width:22%;">
                    <h3><a href="#">Native App Development</a></h3>
					<p>Our iOS developers create feature-rich, optimized applications that deliver a premium experience on all Apple devices. From concept to App Store submission, we provide end-to-end iOS development services using the latest technologies like Swift and Objective-C to maximize your app's impact.</p>
                    <a href="#" class="learn-btn mb-3">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="services-card services-style-bg p-0">
                    <img src="{{ asset('theme') }}/assets/images/icons/cross.gif" class="brand-logo-one icons-img" alt="Startups" style="width:22%;">
                    <h3><a href="#">Cross-Platform Development</a></h3>
					<p>Maximize your reach with our cross-platform development expertise using Flutter, React Native, and Xamarin. We build applications that provide a consistent experience on both iOS and Android, reducing development time and costs while delivering high-quality, native-like performance.</p>
                    <a href="#" class="learn-btn mb-3">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="services-card services-style-bg p-0">
                    <img src="{{ asset('theme') }}/assets/images/icons/hybrid.gif" class="brand-logo-one icons-img" alt="Startups" style="width:22%;">
                    <h3><a href="#">Hybrid App Development</a></h3>
					<p>Our hybrid app development combines web & native app benefits for a cost-effective, cross-platform solution. Using frameworks like Ionic, Cordova, PhoneGap & NativeScript, we deliver native-like functionality, seamless user experiences & reduced development time.</p>
                    <a href="#" class="learn-btn mb-3">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
            </div>
		</div>
	</div>
</section>


<div class="choose-area pt-100 pb-70 home">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-12">
				<div class="choose-content mr-20">
					<div class="section-title mb-3">
						<span class="sp-color1">We Are Best!!</span>
						<h2>Why Choose JFS Technologies?</h2>
					</div>
					<div class="row">
						<div class="col-lg-3 col-6">
							<div class="choose-content-card">
								<div class="content">
									<i class="fal fa-pencil-ruler"></i>
									<h3>Tailored Solutions</h3>
								</div>
								<p>We offer personalized design & development solutions aligned with your business goals.</p>
							</div>
						</div>
						<div class="col-lg-3 col-6">
							<div class="choose-content-card">
								<div class="content">
									<i class="fal fa-users-crown"></i>
									<h3>Responsive & SEO-Optimized</h3>
								</div>
								<p>Each website is responsive & optimized for search engines from the ground up.</p>
							</div>
						</div>
						<div class="col-lg-3 col-6">
							<div class="choose-content-card">
								<div class="content">
									<i class="fal fa-analytics"></i>
									<h3>Advanced Security</h3>
								</div>
								<p>We provide high-level security features to ensure that your site is safe and secure.</p>
							</div>
						</div>
						<div class="col-lg-3 col-6">
							<div class="choose-content-card">
								<div class="content">
                                    <i class="fal fa-headset"></i>
									<h3>Ongoing Support</h3>
								</div>
								<p>Our support extends well beyond delivery, ensuring your website performs optimally.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


    <div class="about-area pt-100 pb-70">
		<div class="container">
            <div class="row justify-content-center align-items-center">
				<div class="col-lg-10">
                    <div class="section-title text-center mx-auto" style="max-width:650px">
                        <span class="sp-color2">Pricing Made Easy</span>
                        <h2>Get Started with the Right Package</h2>
                    </div>
					<div class="choose-content mt-4">
                        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">For India</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">For Other Countries</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <table class="table text-center table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col"><span style="color: #359ded; font-size: 25px;font-weight: 500;">10-20 Pages</span><br>₹30000/Month</th></th>
                                            <th scope="col"><span style="color: #0282c9; font-size: 25px;font-weight: 500;">21-40 Pages</span><br>₹50000/Month</th>
                                            <th scope="col"><span style="color: #4DA73D; font-size: 25px;font-weight: 500;">41-70 Pages</span><br>₹80000/Month</th>
                                            <th scope="col"><span style="color: #488872; font-size: 25px;font-weight: 500;">70-100 Pages</span><br>₹100000/Month</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <table class="table text-center table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col"><span style="color: #359ded; font-size: 25px;font-weight: 500;">10-20 Pages</span><br>$1000/Month</th></th>
                                            <th scope="col"><span style="color: #0282c9; font-size: 25px;font-weight: 500;">21-40 Pages</span><br>$1500/Month</th>
                                            <th scope="col"><span style="color: #4DA73D; font-size: 25px;font-weight: 500;">41-70 Pages</span><br>$5000/Month</th>
                                            <th scope="col"><span style="color: #488872; font-size: 25px;font-weight: 500;">70-100 Pages</span><br>$10000/Month</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>


<div class="about-area about-bg2 pt-5">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img-4">
                    <img src="../theme/assets/images/about/web-dev.png" alt="About Images">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content-3 ml-20">
                    <div class="section-title">
                        <span class="sp-color1">Partner Up With Us</span>
                        <h2>For Success In The Digital World!</h2>
                        <p>Our team combines cutting-edge technologies with proven methodologies to deliver stunning, user-friendly websites that drive results. From responsive design to custom applications, we offer a comprehensive suite of services to meet your digital needs. With expert guidance and ongoing support, we’re committed to helping your business thrive online. Experience exceptional website design for small business with JFS Technologies. Let’s build something extraordinary together.</p>
                    </div>
                    <a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-5 py-3">Get Started Today</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="brand-area ptb-100">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-7">
                <div class="faq-area ">
                    <div class="container">
                        <div class="section-title">
                            <h2>Frequently Asked Questions</h2>
                        </div>
                        <div class="faq-content mt-4">
                            <div class="faq-accordion">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title active" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            What is the website development agency approach largely following these days?
                                        </a>
                                        <div class="accordion-content show">
                                            <p>In modern website development agencies integrate user-centric design, agile methods, and responsive principles, focusing on mobile-first approaches. Their goal: create robust, visually appealing websites delivering seamless experiences across devices and platforms.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            Why is Responsive Web Design important?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Responsive Web Design is vital for effective display on different screens, prioritizing user experience. Our Indian website development firm focuses on the mobile-first approach, ensuring optimal performance and adaptability across devices. This strategy enhances engagement, prolongs stay time, and boosts conversion rates.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            Do you offer content writing services in website design for small business?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Certainly! As a website development agency, we offer content writing services alongside web design and development. Our skilled writers collaborate closely with you to create engaging content that resonates with your audience, aiming to drive user interaction on your website.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            How do you handle content and images in website development?
                                        </a>
                                        <div class="accordion-content">
                                            <p>As a web design company, we recognize the importance of content and imagery in website development. We collaborate closely with you to align content with your goals, offering assistance in creation or refinement. Our team suggests suitable images to enhance visual appeal, sourced from professional photography or online galleries, ensuring they complement your content seamlessly.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            Will my website be SEO friendly and get ranked once it's completed?
                                        </a>
                                        <div class="accordion-content">
                                            <p>To rank your website well, ongoing SEO efforts are essential. As a top web design company, we ensure your site is SEO-ready, but achieving a high SERP position requires continuous SEO practices. Consider our SEO services to enhance your site's ranking. Our experts create custom strategies to boost visibility and attract more visitors. We monitor and optimize your site for SEO success.</p>
                                        </div>
                                    </li>
                                </ul>            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
				<div class="choose-img">
				    <img src="{{ asset('theme') }}/assets/images/faq-1.png" alt="Images">
				</div>
			</div>
        </div>
    </div>
</div>
@endsection