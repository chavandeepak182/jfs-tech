@extends('frontend.layouts.header')
@section('title', "Our Services - JFS Technologies")
@section('keywords', "IT Services, Account Management services, Digital marketing services, Website Design company, Website design services, End to end sales, outsourcing, Affordable digital marketing services, Website marketing services, SEO service agency, Social media marketing, SEO company for business")

@section('content')

<div id="banner" class="inner-banner">
    <div class="container">
        <div class="inner-title w-75">
            <h1>End-to-End Digital Services for Business Transformation</h1>
            <p class="text-white">Holistic digital solutions meticulously crafted to transform your business, optimize processes, elevate customer experiences & foster sustainable growth through innovation, advanced technology, strategic automation, and data-driven insights.</p>
        </div>
    </div>
    
    <video id="videobcg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
        <source src="../theme/assets/images/services.mp4" type="video/mp4">
        <source src="movie.webm" type="video/webm">Sorry, your browser does not support HTML5 video.
    </video>
</div>


<section class="services-style-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color2"></span>
            <h2>Crafting Digital Journeys That Redefine Success</h2>
            <p class="margin-auto">Comprehensive digital solutions designed to transform your business, streamline operations, enhance customer experiences, and drive sustainable growth through innovative strategies and cutting-edge technologies. At <strong>JFS Technologies</strong>, we offer a range of innovative digital solutions to help your business thrive in a competitive digital landscape. Explore our key services below:</p>
        </div>
        <div class="row pt-45 mx-auto justify-content-center custom-card">
            <div class="col-lg-6 col-sm-6">
                <div class="services-card services-style-bg p-0">
                    <img src="{{ asset('theme') }}/assets/images/icons/digitalization.gif" class="brand-logo-one icons-img" alt="digitalization">
                    <h3><a href="{{ url('/services/digital-transformation') }}">1. Digital Transformation</a></h3>
                    <p>Through the integration of cutting-edge digital technology, our solutions have the potential to revolutionize your business processes. From harnessing the capabilities of Data Science and Data Practice, to streamlining Application Modernisation and perfecting Infrastructure Management, we are your trusted partner in facilitating a seamless transition towards a digital future.</p>
                    <p><b>Key Features:</b>
                        <ul>
                            <li>Data Science</li>
                            <li>AR/VR</li>
                            <li>Application Modernisation</li>
                            <li>Infrastructure Management</li>
                        </ul>
                    </p>
                    <a href="{{ url('/services/digital-transformation') }}" class="learn-btn mb-3">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="services-card services-style-bg p-0">
                    <img src="{{ asset('theme') }}/assets/images/icons/digital-exp.gif" class="brand-logo-one icons-img" alt="digital-exp">
                    <h3><a href="{{ url('/services/digital-experience') }}">2. Digital Experience</a></h3>
                    <p>Our digital experience services are designed to enhance your online presence and drive engagement with your target audience. From website development to digital marketing, mobile application development, and creative services, we provide a comprehensive suite of solutions to help you succeed in the digital realm. Partner with us to take your digital experience to the next level.</p>
                    <p><b>Key Features:</b>
                        <ul>
                            <li>Digital Marketing</li>
                            <li>Website Development</li>
                            <li>Mobile App Development</li>
                            <li>Creative Services</li>
                        </ul>
                    </p>
                    <a href="{{ url('/services/digital-experience') }}" class="learn-btn mb-3">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="services-card services-style-bg p-0">
                    <img src="{{ asset('theme') }}/assets/images/icons/dev-cloud.gif" class="brand-logo-one icons-img" alt="dev-cloud">
                    <h3><a href="{{ url('/services/devops') }}">3. DevOps</a></h3>
                    <p>Through the implementation of CI/CD pipelines, we optimize the development process, guaranteeing the swift and effective delivery of software updates. Leveraging our proficiency in containers and microservices, we design adaptable and scalable solutions that seamlessly adjust to evolving business requirements.</p>
                    <p><b>Key Features:</b>
                        <ul>
                            <li>CI/CD Pipelines</li>
                            <li>Process Automation</li>
                            <li>Containers & Microservices</li>
                            <li>DevSecOps</li>
                        </ul>
                    </p>
                    <a href="{{ url('/services/devops') }}" class="learn-btn mb-3">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="services-card services-style-bg p-0">
                    <img src="{{ asset('theme') }}/assets/images/icons/select.gif" class="brand-logo-one icons-img" alt="Select">
                    <h3><a href="{{ url('/services/resource-augmentation') }}">4. Resource Augmentation</a></h3>
                    <p>We have a team of highly skilled and experienced developers who are experts in these technologies. Whether you need additional support for a project or want to augment your existing team, our resource augmentation services can provide you with the talent you need to achieve your goals. Contact us today to learn more about the features & benefits.</p>
                    <p><b>Key Features:</b>
                        <ul>
                            <li>Frontend Developers</li>
                            <li>Backend Developers</li>
                            <li>Fullstack Developers</li>
                            <li>Support Engineers</li>
                        </ul>
                    </p>
                    <a href="{{ url('/services/resource-augmentation') }}" class="learn-btn mb-3">Learn More <i class="bx bx-chevron-right"></i></a>
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
							<span class="sp-color1"></span>
							<h2>Why Choose JFS Technologies?</h2>
						</div>
						<div class="row">
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-pencil-ruler"></i>
										<h3>Tailored Solutions</h3>
									</div>
									<p>Each service is expertly tailored to meet your unique business challenges, objectives, and long-term growth and success goals.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-users-crown"></i>
										<h3>Technology Prowess</h3>
									</div>
									<p>Our team brings deep expertise across diverse technologies, ensuring innovative, secure, scalable, and future-proof solutions.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-analytics"></i>
										<h3>Proven Track Record</h3>
									</div>
									<p>We’ve helped numerous businesses transform their digital strategies, achieving significant and measurable growth.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-globe-asia"></i>
										<h3>Global Client Base</h3>
									</div>
									<p>With experience serving businesses globally, we ensure seamless execution and world-class service no matter where you are.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


    <div class="case-study-area pt-100 pb-70">
		<div class="container-fluid p-0">
			<div class="section-title text-center">
				<span class="sp-color2">Case Study</span>
				<h2>Driving Success for Our Clients</h2>
				<p class="w-50 mx-auto">See how we’ve helped businesses achieve their digital goals:</p>
			</div>
			<div class="case-study-slider owl-carousel owl-theme pt-45 owl-loaded owl-drag">				
			    <div class="owl-stage-outer"><div class="owl-stage" style="transition: 0.25s; width: 4261px; transform: translate3d(-1742px, 0px, 0px);"><div class="owl-item cloned" style="width: 357.3px; margin-right: 30px;"><div class="case-study-item">
					<a href="#">
						<img src="{{ asset('theme') }}/assets/images/case-study/case-study3.jpg" alt="Images">
					</a>
					<div class="content">
						<h3><a href="#">Case Study 3</a></h3>
						<p>Read About Our Work in Healthcare Technology</p>
						<!-- <ul>
							<li><a href="#">Business</a></li>
							<li><a href="#">Planing</a> </li>
						</ul> -->
						<a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
					</div>
				</div></div><div class="owl-item cloned" style="width: 357.3px; margin-right: 30px;"><div class="case-study-item">
					<a href="#">
						<img src="{{ asset('theme') }}/assets/images/case-study/case-study1.jpg" alt="Images">
					</a>
					<div class="content">
						<h3><a href="#">Case Study 1</a></h3>
						<p>Learn How We Increased Organic Traffic by 200%.</p>
						<!-- <ul>
							<li><a href="#">Business</a></li>
							<li><a href="#">Planing</a> </li>
						</ul> -->
						<a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
					</div>
				</div></div><div class="owl-item cloned" style="width: 357.3px; margin-right: 30px;"><div class="case-study-item">
					<a href="#">
						<img src="{{ asset('theme') }}/assets/images/case-study/case-study2.jpg" alt="Images">
					</a>
					<div class="content">
						<h3><a href="#">Case Study 2</a></h3>
						<p>Discover How We Streamlined a Retailer’s Online Sales</p>
						<!-- <ul>
							<li><a href="#">Business</a></li>
							<li><a href="#">Planing</a> </li>
						</ul> -->
						<a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
					</div>
				</div></div><div class="owl-item cloned" style="width: 357.3px; margin-right: 30px;"><div class="case-study-item">
					<a href="#">
						<img src="{{ asset('theme') }}/assets/images/case-study/case-study3.jpg" alt="Images">
					</a>
					<div class="content">
						<h3><a href="#">Case Study 3</a></h3>
						<p>Read About Our Work in Healthcare Technology</p>
						<!-- <ul>
							<li><a href="#">Business</a></li>
							<li><a href="#">Planing</a> </li>
						</ul> -->
						<a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
					</div>
				</div></div><div class="owl-item" style="width: 357.3px; margin-right: 30px;"><div class="case-study-item">
					<a href="#">
						<img src="{{ asset('theme') }}/assets/images/case-study/case-study1.jpg" alt="Images">
					</a>
					<div class="content">
						<h3><a href="#">Case Study 1</a></h3>
						<p>Learn How We Increased Organic Traffic by 200%.</p>
						<!-- <ul>
							<li><a href="#">Business</a></li>
							<li><a href="#">Planing</a> </li>
						</ul> -->
						<a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
					</div>
				</div></div><div class="owl-item active" style="width: 357.3px; margin-right: 30px;"><div class="case-study-item">
					<a href="#">
						<img src="{{ asset('theme') }}/assets/images/case-study/case-study2.jpg" alt="Images">
					</a>
					<div class="content">
						<h3><a href="#">Case Study 2</a></h3>
						<p>Discover How We Streamlined a Retailer’s Online Sales</p>
						<!-- <ul>
							<li><a href="#">Business</a></li>
							<li><a href="#">Planing</a> </li>
						</ul> -->
						<a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
					</div>
				</div></div><div class="owl-item active center" style="width: 357.3px; margin-right: 30px;"><div class="case-study-item">
					<a href="#">
						<img src="{{ asset('theme') }}/assets/images/case-study/case-study3.jpg" alt="Images">
					</a>
					<div class="content">
						<h3><a href="#">Case Study 3</a></h3>
						<p>Read About Our Work in Healthcare Technology</p>
						<!-- <ul>
							<li><a href="#">Business</a></li>
							<li><a href="#">Planing</a> </li>
						</ul> -->
						<a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
					</div>
				</div></div><div class="owl-item cloned active" style="width: 357.3px; margin-right: 30px;"><div class="case-study-item">
					<a href="#">
						<img src="{{ asset('theme') }}/assets/images/case-study/case-study1.jpg" alt="Images">
					</a>
					<div class="content">
						<h3><a href="#">Case Study 1</a></h3>
						<p>Learn How We Increased Organic Traffic by 200%.</p>
						<!-- <ul>
							<li><a href="#">Business</a></li>
							<li><a href="#">Planing</a> </li>
						</ul> -->
						<a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
					</div>
				</div></div><div class="owl-item cloned active" style="width: 357.3px; margin-right: 30px;"><div class="case-study-item">
					<a href="#">
						<img src="{{ asset('theme') }}/theme/assets/images/case-study/case-study2.jpg" alt="Images">
					</a>
					<div class="content">
						<h3><a href="#">Case Study 2</a></h3>
						<p>Discover How We Streamlined a Retailer’s Online Sales</p>
						<!-- <ul>
							<li><a href="#">Business</a></li>
							<li><a href="#">Planing</a> </li>
						</ul> -->
						<a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
					</div>
				</div></div><div class="owl-item cloned" style="width: 357.3px; margin-right: 30px;"><div class="case-study-item">
					<a href="#">
						<img src="{{ asset('theme') }}/assets/images/case-study/case-study3.jpg" alt="Images">
					</a>
					<div class="content">
						<h3><a href="#">Case Study 3</a></h3>
						<p>Read About Our Work in Healthcare Technology</p>
						<!-- <ul>
							<li><a href="#">Business</a></li>
							<li><a href="#">Planing</a> </li>
						</ul> -->
						<a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
					</div>
				</div></div><div class="owl-item cloned" style="width: 357.3px; margin-right: 30px;"><div class="case-study-item">
					<a href="#">
						<img src="{{ asset('theme') }}/assets/images/case-study/case-study1.jpg" alt="Images">
					</a>
					<div class="content">
						<h3><a href="#">Case Study 1</a></h3>
						<p>Learn How We Increased Organic Traffic by 200%.</p>
						<!-- <ul>
							<li><a href="#">Business</a></li>
							<li><a href="#">Planing</a> </li>
						</ul> -->
						<a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
					</div>
				</div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
		</div>
	</div>


	<!-- Testimonials Area -->
	<section class="clients-area pt-100 pb-70">
		<div class="container">
			<div class="section-title text-center">
				<span class="sp-color1">Testimonials</span>
				<h2>What Our Clients Say</h2>
			</div>
			<div class="clients-slider owl-carousel owl-theme pt-45">
				<div class="clients-content">
					<div class="content">
						<img src="{{ asset('theme') }}/assets/images/clients-img/clients-img2.png" alt="Images">
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
						<img src="{{ asset('theme') }}/assets/images/clients-img/clients-img2.png" alt="Images">
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
						<img src="{{ asset('theme') }}/assets/images/clients-img/clients-img2.png" alt="Images">
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
			<div class="col-lg-5">
				<div class="choose-img">
				    <img src="{{ asset('theme') }}/assets/images/faq-1.png" alt="Images">
				</div>
			</div>
        </div>
    </div>
</div>
@endsection