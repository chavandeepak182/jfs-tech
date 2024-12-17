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
                    <h1 class="text-white">Digital <b>transformation</b></h1>
                    <p class="text-white"><em>The future of business is digital.</em> Digital transformation enables organizations to modernize their systems, adopt new technologies, and streamline their operations to meet evolving customer expectations. From automating tasks to leveraging data for better insights, digital transformation empowers businesses to stay agile, increase efficiency, and drive growth.</p>
                    <a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-50 ">Get A Quote</a>
                </div>
            </div>
        </div>
    </div>

    <video id="videobcg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
        <source src="../theme/assets/images/digital-trans.mp4" type="video/mp4">
        <source src="movie.webm" type="video/webm">Sorry, your browser does not support HTML5 video.
    </video>
</div>


<section class="services-style-area home_cards pt-100 pb-70">
	<div class="container">
		<div class="section-title text-center" data-aos="fade-up" data-aos-duration="500">
			<span class="sp-color2">Unlock the potential</span>
			<h2>Our Digital Transformation Services Includes</h2>
		</div>
		<div class="row pt-45">
			<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="500">
				<div class="work-process-card-three">
                    <a href="{{ url('/services/data-science') }}">
                        <div class="number-title invisible">01.</div>
                        <h3>Data Science</h3>
                        <p>Digital science utilizes digital tools and data analytics to enhance research and innovation, accelerating discovery and fostering collaboration.</p>
                        <img src="{{ asset('theme') }}/assets/images/icons/data-sci.svg" class="brand-logo-one" alt="computer">
                        <!-- <i class="fal fa-file-chart-line my-2"></i> -->
                        <div class="text-center mt-4">
                            <a href="{{ url('/services/data-science') }}" class="default-btn btn-bg-two border-radius-50 text-center">Explore Now</a>
                        </div>
                    </a>
				</div>
			</div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="750">
				<div class="work-process-card-three">
                    <a href="{{ url('/services/ar-vr') }}">
                        <div class="number-title invisible">02.</div>
                        <h3>AR/VR</h3>
                        <p>Data practice involves using data-driven strategies to inform decisions, optimize processes, and drive business growth.</p>
                        <!-- <i class="fal fa-head-vr my-2"></i> -->
                        <img src="{{ asset('theme') }}/assets/images/icons/ar-vr.svg" class="brand-logo-one" alt="computer">
                        <div class="text-center mt-4">
                            <a href="{{ url('/services/ar-vr') }}" class="default-btn btn-bg-two border-radius-50 text-center">Explore Now</a>
                        </div>
                    </a>
				</div>
			</div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
				<div class="work-process-card-three">
                    <a href="{{ url('/services/infrastructure-management') }}">
                        <div class="number-title invisible">03.</div>
                        <h3>Infrastructure Management</h3>
                        <p>Infrastructure Management ensures efficient operation, monitoring, and maintenance of IT systems to support business goals.</p>
                        <!-- <i class="fal fa-network-wired my-2"></i> -->
                        <img src="{{ asset('theme') }}/assets/images/icons/infra-mgmt.svg" class="brand-logo-one" alt="computer">
                        <div class="text-center mt-4">
                            <a href="{{ url('/services/infrastructure-management') }}" class="default-btn btn-bg-two border-radius-50 text-center">Explore Now</a>
                        </div>
                    </a>
				</div>
			</div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1250">
				<div class="work-process-card-three">
                    <a href="{{ url('/services/application-modernisation') }}">
                        <div class="number-title invisible">04.</div>
                        <h3>Application Modernization</h3>
                        <p>Application Modernization updates legacy software for improved performance, scalability, & compatibility with modern technologies.</p>
                        <!-- <i class="fal fa-network-wired my-2"></i> -->
                        <img src="{{ asset('theme') }}/assets/images/icons/modern-app.svg" class="brand-logo-one" alt="computer">
                        <div class="text-center mt-4">
                            <a href="{{ url('/services/application-modernisation') }}" class="default-btn btn-bg-two border-radius-50 text-center">Explore Now</a>
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
							<h2>Why Trust Our Digital Transformation Services?</h2>
                            <p>At JFS Technologies, we take a collaborative approach to deliver the best results for your business. Here’s why you can choose our digital transformation services:</p>
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
									<p>We’ve helped numerous businesses transform their digital strategies & achieving measurable growth.</p>
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


<div class="about-area about-bg2 pt-5 pb-2">
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
                        <h2>Are You Prepared to Embrace the Future of Technology?</h2>
                        <p>Through the integration of cutting-edge digital technology, our solutions have the potential to revolutionize your business processes. From harnessing the capabilities of Data Science and Data Practice, to streamlining Application Modernisation and perfecting Infrastructure Management, we are your trusted partner in facilitating a seamless transition towards a digital future.</p>
                    </div>
                    <h3>With more than 24 years of experience, we provide leading Digital transformation solutions.</h3>
                    <a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-5 py-3">Contact Us Today</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="brand-area ptb-100">
    <div class="container" data-aos="fade-up" data-aos-duration="500">
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
                                            What is digital transformation?
                                        </a>
                                        <div class="accordion-content show">
                                            <p>Digital transformation involves leveraging digital technologies to modernize business processes, enhance customer experiences, and improve operational efficiency. It is a holistic approach to integrating technology into every aspect of your business.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            How can JFS Technologies help with digital transformation?
                                        </a>
                                        <div class="accordion-content">
                                            <p>We provide tailored solutions across key areas such as Data Science, AR/VR, Infrastructure Management, and Application Modernization to address unique business challenges, enabling you to stay competitive and future-ready.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            Which industries can benefit from digital transformation services?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Our digital transformation services cater to a wide range of industries, including healthcare, retail, manufacturing, finance, education, and more.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            How long does a digital transformation project typically take?
                                        </a>
                                        <div class="accordion-content">
                                            <p>The timeline depends on the scope and complexity of the project. We assess your business needs and define a roadmap to ensure timely and effective implementation.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            Can I choose specific services based on my business needs?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Yes, our services are modular. You can select specific subservices like Data Science or AR/VR, depending on your transformation goals.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            Do you provide post-implementation support?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Yes, we offer ongoing support and maintenance to ensure the solutions implemented continue to deliver value.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            How can I get started with JFS Technologies’ digital transformation services?
                                        </a>
                                        <div class="accordion-content">
                                            <p>You can reach out to us through our website’s contact form or schedule a consultation to discuss your business requirements and explore suitable solutions.</p>
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