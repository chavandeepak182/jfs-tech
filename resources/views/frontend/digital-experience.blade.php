@extends('frontend.layouts.header')
@section('title', "Digital transformation Services - JFS Technologies")
@section('description', "Elevate your online presence with our Digital marketing company services. Drive growth and engagement with tailored strategies.")
@section('keywords', "IT Services, Account Management services, Digital marketing services, Website Design company, Website design services, End to end sales, outsourcing, Affordable digital marketing services, Website marketing services, SEO service agency, Social media marketing, SEO company for business")

@section('content')

<div id="service_banner" class="banner-five-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right" data-aos-offset="500" data-aos-easing="ease-in-sine">
                <div class="banner-five-content">
                    <span></span>
                    <h1 class="text-white">Digital <b><br>Experience</b></h1>
                    <p class="text-white">Our digital experience services are designed to enhance your online presence and drive engagement with your target audience. From website development to digital marketing, mobile application development, and creative services, we provide a comprehensive suite of solutions to help you succeed in the digital realm.</p>
                    <a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-50 ">Get A Quote</a>
                </div>
            </div>
        </div>
    </div>

    <video id="videobcg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
        <source src="../theme/assets/images/digital-exp.mp4" type="video/mp4">
        <source src="movie.webm" type="video/webm">Sorry, your browser does not support HTML5 video.
    </video>
</div>


<section class="services-style-area home_cards pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center" data-aos="fade-up" data-aos-duration="500">
            <span class="sp-color2">Unlock the potential</span>
            <h2>Our Digital Experience Services Includes</h2>
        </div>
        <div class="row pt-45">
			<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="500">
				<div class="work-process-card-three">
                    <a href="{{ url('/services/digital-marketing-company') }}">
                        <div class="number-title invisible">01.</div>
                        <h3>Digital Marketing</h3>
                        <p>Digital marketing leverages online platforms to promote products and engage customers, using strategies like SEO and social media to enhance visibility and drive growth.</p>
                        <!-- <i class="fal fa-ad my-2"></i> -->
                        <img src="{{ asset('theme') }}/assets/images/icons/digi-mkt.svg" class="brand-logo-one" alt="computer">
                        <div class="text-center mt-4">
                            <a href="{{ url('/services/digital-marketing-company') }}" class="default-btn btn-bg-two border-radius-50 text-center">Explore Now</a>
                        </div>
                    </a>
				</div>
			</div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="750">
                <div class="work-process-card-three">
                    <a href="{{ url('/services/website-design-and-development') }}">
                        <div class="number-title invisible">02.</div>
                        <h3>Website Development</h3>
                        <p>Website development involves creating and maintaining websites to enhance user experience and drive online engagement.</p>
                        <!-- <i class="fal fa-desktop-alt my-2"></i> -->
                        <img src="{{ asset('theme') }}/assets/images/icons/web-dev.svg" class="brand-logo-one" alt="computer">
                        <div class="text-center mt-4">
                            <a href="{{ url('/services/website-design-and-development') }}" class="default-btn btn-bg-two border-radius-50 text-center">Explore Now</a>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="work-process-card-three">
                    <a href="{{ url('/services/mobile-app-development') }}">
                        <div class="number-title invisible">03.</div>
                        <h3>Mobile App Development</h3>
                        <p>Mobile app development involves creating applications for smartphones and tablets to enhance user experience and drive engagement.</p>
                        <!-- <i class="fas fa-mobile-alt my-2"></i> -->
                        <img src="{{ asset('theme') }}/assets/images/icons/app-dev.svg" class="brand-logo-one" alt="computer">
                        <div class="text-center mt-4">
                            <a href="{{ url('/services/mobile-app-development') }}" class="default-btn btn-bg-two border-radius-50 text-center">Explore Now</a>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1250">
                <div class="work-process-card-three">
                    <a href="#">
                        <div class="number-title invisible">04.</div>
                        <h3>Creative Services</h3>
                        <p>It provide innovative design, branding & content solutions to enhance brand identity & engagement, including graphic design, copywriting & video production.</p>
                        <!-- <i class="fal fa-lightbulb-on my-2"></i> -->
                        <img src="{{ asset('theme') }}/assets/images/icons/creative.svg" class="brand-logo-one" alt="computer">
                        <div class="text-center mt-4">
                            <a href="{{ url('/services/creative-services') }}" class="default-btn btn-bg-two border-radius-50 text-center">Explore Now</a>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


    <div class="choose-area pt-100 pb-70 home">
		<div class="container">
			<div class="row justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="500">
				<div class="col-lg-12">
					<div class="choose-content mr-20">
						<div class="section-title mb-3">
							<span class="sp-color1">We Are Best!!</span>
							<h2>Why Trust Our Digital Experience Services?</h2>
                            <p>At JFS Technologies, we work closely with you to deliver optimal results for your business. Here’s why our Digital Experience services are the right choice:</p>
						</div>
						<div class="row">
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-pencil-ruler"></i>
										<h3>Tailored Strategies</h3>
									</div>
									<p>We work closely with you to create solutions designed around your unique business needs.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-users-crown"></i>
										<h3>Technology Prowess</h3>
									</div>
									<p>Our team brings deep expertise across diverse technologies, ensuring innovative, secure, and scalable solutions.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-analytics"></i>
										<h3>Proven Track Record</h3>
									</div>
									<p>We’ve helped numerous businesses transform their digital strategies &amp; achieving measurable growth.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
                                        <i class="fal fa-headset"></i>
										<h3>Ongoing Support</h3>
									</div>
									<p>We’re here to guide you through every step of your data journey and help you get the most out of your data.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="col-lg-6">
					<div class="choose-img">
						<img src="http://127.0.0.1:8000/theme/assets/images/choose-img.jpg" alt="Images">
					</div>
				</div> -->
			</div>
		</div>
	</div>


<div class="security-area pt-100 pb-70">
	<div class="container" data-aos="fade-up" data-aos-duration="500">
		<div class="section-title text-center">
		    <span class="sp-color2">Plan Descriptions</span>
		    <h2>Choose the Best Plan For Your Business</h2>
		</div>
		<div class="row pt-45">
		    <div class="col-lg-4 col-sm-6">
		        <div class="security-card">
                    <i class="flaticon-cyber-security"></i>
                    <h3>Standard Plan</h3>
                    <p>Ideal for small businesses looking to establish a solid social media presence. This plan includes basic features such as post creation, page setups, and essential social media management.</p>
                </div>
		    </div>
		    <div class="col-lg-4 col-sm-6">
                <div class="security-card">
                    <i class="flaticon-computer"></i>
                    <h3>Professional Plan</h3>
                    <p>Designed for businesses seeking to boost engagement and visibility, this plan provides more frequent posts, captivating video content, and expanded group sharing to reach a wider audience.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="security-card">
                    <i class="flaticon-effective"></i>
                    <h3>Enterprise Plan</h3>
                    <p>Ideal for larger organizations seeking robust social media strategies, this plan offers advanced features such as higher posting frequency, multi-platform video content, and detailed performance analytics.</p>
                </div>
            </div>
		</div>
	</div>
</div>


<div class="about-area about-bg2 pt-100 pb-70">
    <div class="container-fluid">
        <div class="row align-items-center" data-aos="fade-up" data-aos-duration="500">
            <div class="col-lg-6">
                <div class="about-img-4">
                    <img src="{{ asset('theme') }}/assets/images/about/about-img4.png" alt="About Images">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content-3 ml-20">
                    <div class="section-title">
                        <span class="sp-color1">Partner Up With Us</span>
                        <h2>Ready to Launch Your Inaugural Campaign?</h2>
                        <p>Whether you need a new website design or a mobile application to reach your customers on the        go, our services are tailored to meet your unique requirements. Our digital marketing expertise will help you reach and engage with your target audience through various online channels, while our creative services will ensure that your brand identity is reflected consistently across all digital touchpoints.</p>
                        <p>Partner with us to take your digital experience to the next level and drive meaningful results for your business. With our comprehensive suite of services and experienced team, we can help you achieve your digital goals and stand out in today's fast-paced digital world.</p>
                    </div>
                    <h3>We Have 24+ Years Of Experience. We Offer Digital Experience with IT Solutions</h3>
                    <a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-5 py-3">Contact Us Today</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="brand-area ptb-100">
    <div class="container">
        <div class="row justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="500">
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
                                            What is Digital Experience?
                                        </a>
                                        <div class="accordion-content show">
                                            <p>Digital Experience refers to the interactions and experiences users have with a business across digital platforms like websites, mobile apps, and other digital touchpoints. It focuses on delivering seamless, engaging, and user-friendly digital interactions.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            How is Digital Experience useful for businesses?
                                        </a>
                                        <div class="accordion-content">
                                            <p>A well-crafted digital experience enhances customer satisfaction, drives engagement, improves brand loyalty, and boosts conversions. By meeting user expectations online, businesses can achieve greater growth and competitive advantage.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            What is included in Digital Experience services?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Digital Experience services typically include UI/UX design, website and mobile app development, customer journey mapping, omnichannel optimization, performance analysis, and personalized user engagement strategies.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            Why is improving Digital Experience important for customer retention?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Customers expect fast, intuitive, and personalized experiences online. Improving digital experience ensures better satisfaction, reduces bounce rates, and encourages repeat interactions, leading to long-term customer loyalty.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            How do you measure the success of a Digital Experience strategy?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Success is measured through key performance indicators (KPIs) such as user engagement metrics, bounce rates, conversion rates, customer satisfaction scores, and overall digital platform performance.</p>
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