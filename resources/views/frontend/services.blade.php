@extends('frontend.layouts.header')
@section('title', "Our Services - JFS Technologies")
@section('keywords', "IT Services, Account Management services, Digital marketing services, Website Design company, Website design services, End to end sales, outsourcing, Affordable digital marketing services, Website marketing services, SEO service agency, Social media marketing, SEO company for business")

@section('content')

<div class="inner-banner">
    <div class="container">
        <div class="inner-title text-center">
            <h3>Our Top Notch Services</h3>
            <ul>
                <li>
                    <a href="{{ asset(' ') }}">Home</a>
                </li>
                <li>
                    <i class="bx bx-chevrons-right"></i>
                </li>
                <li>Our Services</li>
            </ul>
        </div>
    </div>
    <div class="inner-shape">
        <img src="{{ asset('theme') }}/assets/images/shape/inner-shape.png" alt="Images">
    </div>
</div>


<section class="services-style-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color2"></span>
            <h2>Our Key Services</h2>
            <p class="margin-auto">At JFS Technologies, we offer a range of innovative digital solutions to help your business thrive in a competitive digital landscape. Explore our key services below:</p>
        </div>
        <div class="row pt-45 mx-auto justify-content-center">
            <div class="col-lg-4 col-sm-6">
                <div class="services-card services-style-bg">
                    <i class="flaticon-web-development"></i>
                    <h3><a href="/website-design-and-development">1. Website Design & Development</a></h3>
                    <p><b>Custom, SEO-Friendly, & Mobile-Responsive Websites</b><br>We design and develop performance-optimized websites tailored to your brand’s unique needs. Our websites not only look great but are also optimized for search engines and mobile devices, ensuring the best user experience.</p>
                    <p><b>Key Features:</b>
                        <ul>
                            <li>Custom design tailored to your brand</li>
                            <li>SEO-friendly architecture</li>
                            <li>Mobile responsiveness for all devices</li>
                        </ul>
                    </p>
                    <a href="/website-design-and-development" class="learn-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="services-card services-style-bg">
                    <i class="flaticon-data-analytics"></i>
                    <h3><a href="/digital-marketing-company">2. Digital Marketing</a></h3>
                    <p><b>Data-Driven Strategies for Maximum Online Impact</b><br>Our digital marketing services are designed to boost your brand visibility, drive traffic, and generate leads. From SEO to social media and PPC campaigns, we implement data-driven strategies to help your business grow online.</p>
                    <p><b>Key Features:</b>
                        <ul>
                            <li>Search Engine Optimization (SEO)</li>
                            <li>Social media management</li>
                            <li>Paid advertising (PPC) for targeted lead generation</li>
                        </ul>
                    </p>
                    <a href="/digital-marketing-company" class="learn-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="services-card services-style-bg">
                    <i class="flaticon-consultant"></i>
                    <h3><a href="/mobile-app-development">3. Mobile Application Development</a></h3>
                    <p><b>Native, Hybrid, and Cross-Platform Mobile App Solutions</b><br>Our mobile application development services cover everything from native Android/iOS apps to hybrid and cross-platform solutions. We create apps that are secure, scalable, and provide a seamless user experience.</p>
                    <p><b>Key Features:</b>
                        <ul>
                            <li>Native app development for Android & iOS</li>
                            <li>Hybrid and cross-platform app solutions</li>
                            <li>Secure, scalable, and user-friendly designs</li>
                        </ul>
                    </p>
                    <a href="/mobile-app-development" class="learn-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="services-card services-style-bg">
                    <i class="flaticon-computer"></i>
                    <h3><a href="/app-maintenance-Support">4. Application Maintenance & Support</a></h3>
                    <p><b>Reliable, Scalable Software Solutions for Your Business</b><br>We develop robust applications using the latest backend and frontend technologies. Whether you need custom software or ongoing support, our team has the expertise to deliver secure and scalable solutions.</p>
                    <p><b>Key Features:</b>
                        <ul>
                            <li>Backend technologies: Java, Python, PHP, .NET</li>
                            <li>Frontend frameworks: Angular, React, Vue.js</li>
                            <li>Continuous support and maintenance</li>
                        </ul>
                    </p>
                    <a href="/app-maintenance-Support" class="learn-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="services-card services-style-bg">
                    <i class="flaticon-consulting"></i>
                    <h3><a href="/hire-dedicated-developer">5. Hire Dedicated Developers</a></h3>
                    <p><b>Flexible Hiring Models for Specialized Development Needs</b><br>Need expert developers for a specific project or ongoing work? Our flexible hiring models allow you to hire skilled developers in Full Stack, MEARN Stack, and MEAN Stack, among other technologies, on a full-time or part-time basis.</p>
                    <p><b>Key Features:</b>
                        <ul>
                            <li>Flexible hiring options (Full Stack, MEARN, MEAN)</li>
                            <li>Specialized developers in Java, Python, React Native, and more</li>
                            <li>Tailored to your project needs</li>
                        </ul>
                    </p>
                    <a href="/hire-dedicated-developer" class="learn-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="clients-area-three pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center mx-auto" style="max-width:650px">
            <span class="sp-color2"></span>
            <h2>Why choose Us</h2>
        </div>
        <div class="row pt-45 justify-content-center mx-auto">
            <div class="col-lg-4 col-sm-6">
                <div id="DMS_card">
                    <i class="fal fa-pencil-ruler pb-2"></i>
                    <h3><a>Tailored Solutions:</a></h3>
                    <p>Custom services designed to meet your business objectives.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div id="DMS_card">
                    <i class="fal fa-users-crown pb-2"></i>
                    <h3><a>Experienced Team:</a></h3>
                    <p>Highly skilled professionals with vast industry expertise.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div id="DMS_card">
                    <i class="fal fa-chart-line pb-2"></i>
                    <h3><a>Proven Success:</a></h3>
                    <p>Delivering measurable growth for businesses worldwide.</p>
                </div>
            </div>
            <div class="col-lg-12 col-sm-6 text-center">
                <a href="/contact-us" class="default-btn btn-bg-two border-radius-5 py-3">Contact Us for a Free Consultation</a>
            </div>
        </div>        
    </div>
</section>


    <section class="clients-area pt-100 pb-70">
		<div class="container">
			<div class="section-title text-center">
				<span class="sp-color1">Testimonials</span>
				<h2>Listen from our Clients</h2>
			</div>
			<div class="clients-slider owl-carousel owl-theme pt-45">
				<div class="clients-content">
					<div class="content">
						<img src="{{ asset('theme') }}/assets/images/clients-img/clients-img1.jpg" alt="Images">
						<i class="bx bxs-quote-alt-left"></i>
						<h3>Thomas Paul</h3>
						<span>Sr. Developer @ APISDOR</span>
					</div>
					<p>
					“Through JFS Technologies' account management service, our business has thrived. Their expertise & commitment have made a remarkable difference. Their holistic approach & unwavering commitment have been instrumental. I highly recommend their services!”
					</p>
				</div>
				<div class="clients-content">
					<div class="content">
						<img src="{{ asset('theme') }}/assets/images/clients-img/clients-img2.jpg" alt="Images">
						<i class="bx bxs-quote-alt-left"></i>
						<h3>Dan Fitzpatrick</h3>
						<span>President @ KRIXI</span>
					</div>
					<p>
					“Partnering with JFS Technologies has revolutionized our business. Their strategic insight and unwavering dedication have driven a significant surge in our sales. They possess a deep understanding of our needs, consistently deliver results, and truly invest in our success.”
					</p>
				</div>
				<div class="clients-content">
					<div class="content">
						<img src="{{ asset('theme') }}/assets/images/clients-img/clients-img3.jpg" alt="Images">
						<i class="bx bxs-quote-alt-left"></i>
						<h3>Anand Katti</h3>
						<span>COO @ Shyena Techyarns</span>
					</div>
					<p>
					“Because of JFS Technologies' end-to-end sales service, our business has experienced tremendous growth. Their holistic approach and unwavering commitment have been instrumental. I highly recommend their services!”
					</p>
				</div>
			</div>
		</div>
		<div class="client-circle">
			<div class="client-circle-1">
				<div class="circle"></div>
			</div>
			<div class="client-circle-2">
				<div class="circle"></div>
			</div>
			<div class="client-circle-3">
				<div class="circle"></div>
			</div>
			<div class="client-circle-4">
				<div class="circle"></div>
			</div>
			<div class="client-circle-5">
				<div class="circle"></div>
			</div>
			<div class="client-circle-6">
				<div class="circle"></div>
			</div>
			<div class="client-circle-7">
				<div class="circle"></div>
			</div>
		</div>
	</section>


<div class="brand-area ptb-100">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6">
				<div class="choose-img">
				    <img src="{{ asset('theme') }}/assets/images/faq-1.png" alt="Images">
				</div>
			</div>
            <div class="col-md-6">
                <div class="faq-area ">
                    <div class="container">
                        <div class="section-title">
                            <h2>Frequently Asked Questions</h2>
                            <p class="margin-auto">We are the agency who always gives you a priority on the free of question and you can easily make a question on the bunch.</p>
                        </div>
                        <div class="faq-content mt-4">
                            <div class="faq-accordion">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title active" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            What is a Infrastructure?
                                        </a>
                                        <div class="accordion-content show">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat, dignissim orci eget, viverra ante. Mauris ornare pellentesque augue.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            What is a Managed Security Services?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat, dignissim orci eget, viverra ante. Mauris ornare pellentesque augue.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            What is a Data Analysis?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat, dignissim orci eget, viverra ante. Mauris ornare pellentesque augue.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            How Can Make Secure My Website?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat, dignissim orci eget, viverra ante. Mauris ornare pellentesque augue.</p>
                                        </div>
                                    </li>
                                </ul>            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection