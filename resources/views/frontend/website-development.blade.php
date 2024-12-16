@extends('frontend.layouts.header')
@section('title', "Digital Marketing Services - JFS Technologies")
@section('description', "Elevate your online presence with our Digital marketing company services. Drive growth and engagement with tailored strategies.")
@section('keywords', "IT Services, Account Management services, Digital marketing services, Website Design company, Website design services, End to end sales, outsourcing, Affordable digital marketing services, Website marketing services, SEO service agency, Social media marketing, SEO company for business")

@section('content')

<div id="banner" class="inner-banner">
    <div class="container">
        <div class="inner-title w-75">
            <h1>Innovative Web Development to Elevate Your Online Presence</h1>
            <p class="text-white"></p>
            <div class="banner-btn">
				<a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-50">Let’s Start Today! <i class="bx bx-chevron-right"></i></a>
			</div>
        </div>
    </div>

    <video id="videobcg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
        <source src="../theme/assets/images/web-dev.mp4" type="video/mp4">
        <source src="movie.webm" type="video/webm">Sorry, your browser does not support HTML5 video.
    </video>
</div>


<section class="services-style-area pt-100 pb-70">
	<div class="container">
        <div class="section-title text-center">
            <span class="sp-color2"></span>
            <h2>Seamless Website Solutions: From Concept to Launch</h2>
            <p class="margin-auto">At <strong>JFS Technologies</strong>, we offer a comprehensive range of <strong>Website Design & Development</strong> services to meet the unique needs of your business. Whether you are looking for a simple static website, a dynamic platform, or a full-fledged e-commerce solution, we have the expertise to deliver scalable, secure, and high-performance websites.</p>
        </div>
		<div class="row pt-45 mx-auto justify-content-center custom-card">
            <div class="col-lg-4 col-sm-6">
                <div class="services-card services-style-bg p-0">
                    <img src="{{ asset('theme') }}/assets/images/icons/website.gif" class="brand-logo-one icons-img" alt="computer" style="width:22%;">
                    <h3><a>Static Website Creation</a></h3>
                    <p>Fast, informative websites that are ideal for small businesses looking to establish their digital presence, enhance brand visibility, connect with their target audience, and drive meaningful online engagement.</p>
				</div>
			</div>
            <div class="col-lg-4 col-sm-6">
                <div class="services-card services-style-bg p-0">
                    <img src="{{ asset('theme') }}/assets/images/icons/dashboard.gif" class="brand-logo-one icons-img" alt="computer" style="width:22%;">
                    <h3><a>Dynamic Website Creation</a></h3>
                    <p>Content-rich websites with integrated content management systems (CMS) that allow regular updates, enabling businesses to easily manage & improve their content & keep audience engaged with fresh, relevant information.</p>
				</div>
			</div>
            <div class="col-lg-4 col-sm-6">
                <div class="services-card services-style-bg p-0">
                    <img src="{{ asset('theme') }}/assets/images/icons/e-comm.gif" class="brand-logo-one icons-img" alt="computer" style="width:22%;">
                    <h3><a>Build Ecommerce Platforms</a></h3>
                    <p>Robust online stores with secure payment integration, inventory management, user-friendly navigation, and customizable features to deliver a seamless shopping experience and drive sales growth.</p>
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
                        <span class="sp-color1">Pricing Made Easy</span>
                        <h2>Website Design & Development Packages</h2>
                    </div>
					<div class="choose-content mt-4">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <table class="table text-center table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col"><h4 class="sp-color1">Features Comparison</h4></th>
                                            <th scope="col"><span style="color: #359ded; font-size: 25px;font-weight: 500;">Standard</span></th>
                                            <th scope="col"><span style="color: #0282c9; font-size: 25px;font-weight: 500;">Professional</span></th>
                                            <th scope="col"><span style="color: #488872; font-size: 25px;font-weight: 500;">Enterprise</span></th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                        <tr>
                                            <th>Cost</th>
                                            <td><strong style="color: #359ded; font-size: 18px;font-weight: 600;">₹30,000</strong></td>
                                            <td><strong style="color: #0282c9; font-size: 18px;font-weight: 600;">Starting from ₹50,000</strong></td>
                                            <td><strong style="color: #488872; font-size: 18px;font-weight: 600;">Starting from ₹100,000</strong></td>
                                        </tr>
                                        <tr>
                                            <th>Type of Website</th>
                                            <td>Static</td>
                                            <td>Dynamic</td>
                                            <td>E-Commerce</td>
                                        </tr>
                                        <tr>
                                            <th>Pages Included</th>
                                            <td>10 to 20</td>
                                            <td>21 to 40</td>
                                            <td>41 to 70</td>
                                        </tr>
                                        <tr>
                                            <th>Custom Design</th>
                                            <td>Template-Based Design</td>
                                            <td>Custom Design with 2 Revisions</td>
                                            <td>Fully Custom Design with Unlimited Revisions</td>
                                        </tr>
                                        <tr>
                                            <th>Mobile-Responsiveness</th>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <th>SEO-Friendly</th>
                                            <td>Basic SEO Setup</td>
                                            <td>Enhanced SEO Setup</td>
                                            <td>Full SEO Optimization</td>
                                        </tr>
                                        <tr>
                                            <th>Content Management System (CMS)</th>
                                            <td>WordPress or Similar</td>
                                            <td>WordPress, Joomla, or Custom CMS</td>
                                            <td>Custom CMS or Advanced Platforms</td>
                                        </tr>
                                        <tr>
                                            <th>E-Commerce Capabilities</th>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td>Basic E-Commerce (Up to 30 Products)</td>
                                            <td>Advanced E-Commerce (Unlimited Products)</td>
                                        </tr>
                                        <tr>
                                            <th>Website Hosting</th>
                                            <td>1 Year Free Basic Hosting</td>
                                            <td>1 Year Free Advanced Hosting</td>
                                            <td>1 Year Free Premium Hosting</td>
                                        </tr>
                                        <tr>
                                            <th>SSL Certificate</th>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <th>SSL Certificate</th>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <th>Blog Integration</th>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <th>Contact Form</th>
                                            <td>Basic Contact Form</td>
                                            <td>Advanced Form with Multiple Fields</td>
                                            <td>Dynamic Form with API Integrations</td>
                                        </tr>
                                        <tr>
                                            <th>Social Media Integration</th>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <th>Image Slider/Carousel</th>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <th>Google Analytics Integration</th>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <th>Payment Gateway Integration</th>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td>Up to 2 Gateways</td>
                                            <td>Multiple Gateways + Advanced Features</td>
                                        </tr>
                                        <tr>
                                            <th>Website Security Features</th>
                                            <td>Basic Security Setup</td>
                                            <td>Advanced Security Setup</td>
                                            <td>Enterprise-Level Security Features</td>
                                        </tr>
                                        <tr>
                                            <th>Backup & Restore Options</th>
                                            <td>Weekly Backups</td>
                                            <td>Daily Backups</td>
                                            <td>Real-Time Backup & Restore</td>
                                        </tr>
                                        <tr>
                                            <th>Technical Support</th>
                                            <td>3 Months Free Support</td>
                                            <td>6 Months Free Support</td>
                                            <td>12 Months Free Support</td>
                                        </tr>
                                        <tr>
                                            <th>Performance Optimization</th>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <th>Email Setup</th>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td>Up to 5 Business Emails</td>
                                            <td>Unlimited Business Emails</td>
                                        </tr>
                                        <tr>
                                            <th>Custom Features</th>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td>Limited Custom Features</td>
                                            <td>Full Custom Features Based on Business Needs</td>
                                        </tr>
                                        <tr>
                                            <th>API Integrations</th>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td>Limited API Integrations</td>
                                            <td>Full API Integrations</td>
                                        </tr>
                                        <tr>
                                            <th>Multilingual Support</th>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td>Available Upon Request</td>
                                            <td>Available Upon Request</td>
                                        </tr>
                                    </tbody>
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
                                            Do you integrate a Content Management System (CMS) into websites?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Certainly! As a top web design company, we seamlessly integrate Content Management Systems (CMS) into your website for easy content management. We offer custom CMS solutions and support popular platforms like WordPress, Magento, and Shopify.</p>
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