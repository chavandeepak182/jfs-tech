@extends('frontend.layouts.header')
@section('title', "Application Modernisation Services - JFS Technologies")
@section('description', "Elevate your online presence with our Digital marketing company services. Drive growth and engagement with tailored strategies.")
@section('keywords', "IT Services, Account Management services, Digital marketing services, Website Design company, Website design services, End to end sales, outsourcing, Affordable digital marketing services, Website marketing services, SEO service agency, Social media marketing, SEO company for business")

@section('content')

<div id="banner" class="inner-banner">
    <div class="container">
        <div class="inner-title w-75">
            <h1>Transform & Modernize Your Applications for the Digital Age</h1>
            <p class="text-white"></p>
            <div class="banner-btn">
				<a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-50">Start Your Modernization Journey Today <i class="bx bx-chevron-right"></i></a>
			</div>
        </div>
    </div>

    <video id="videobcg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
        <source src="../theme/assets/images/modern-app.mp4" type="video/mp4">
        <source src="movie.webm" type="video/webm">Sorry, your browser does not support HTML5 video.
    </video>
</div>

<section class="services-style-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color2"></span>
            <h2>Reimagine Your Applications for a Digital-First Future</h2>
            <p class="margin-auto">Our Application Modernization services are designed to help your business stay competitive in an evolving digital landscape. Whether you’re upgrading legacy systems, migrating to the cloud, or enhancing user experience, our expert team is here to guide you every step of the way. Leveraging the latest technologies, we ensure that your applications are secure, efficient, and future-ready. Let us help you bring your applications into the modern era and drive business growth.</p>
        </div>
        <div class="row pt-45 mx-auto justify-content-center custom-card">
            <div class="col-lg-6 col-sm-6">
                <div class="services-card services-style-bg p-0">
                    <img src="{{ asset('theme') }}/assets/images/icons/applications.gif" class="brand-logo-one icons-img" alt="applications">
                    <h3><a href="#">1. Application Modernisation Consulting</a></h3>
                    <p>We specialize in assisting organizations in enhancing and modernizing their software applications to align with the latest technology trends and boost overall efficiency. Utilizing cutting-edge technologies such as cloud computing and automation tools, we strive to simplify operations, lower expenses, and elevate user satisfaction. Our team of skilled professionals will collaborate closely with your organization to evaluate your current applications, pinpoint areas in need of enhancement, and formulate a personalized modernization strategy for a seamless transition. Whether you seek to shift to a new platform, optimize code, or introduce innovative features, our application modernization solutions will ensure you remain competitive in today's rapidly evolving digital environment.</p>
                    <a href="#" class="learn-btn mb-3 invisible">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="services-card services-style-bg p-0">
                    <img src="{{ asset('theme') }}/assets/images/icons/responsive.gif" class="brand-logo-one icons-img" alt="responsive">
                    <h3><a href="#">2.UI/UX Modernisation</a></h3>
                    <p>In today's fast-paced digital landscape, where user expectations are constantly evolving, businesses need innovative and engaging interfaces to stay competitive. Our UI/UX Modernization services are crafted to help you excel and stand out. We start by thoroughly analyzing your current user interface and experience to identify opportunities for enhancement, optimization, and innovation. Our skilled team of designers and developers then collaborates to create a visually stunning, intuitive interface that not only enhances user experience but also drives engagement and conversion rates. Whether you need a complete overhaul or targeted updates, our experts are ready to elevate your UI/UX to new heights, setting your business apart in a crowded market.</p>
                    <a href="#" class="learn-btn mb-3 invisible">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="services-card services-style-bg p-0">
                    <img src="{{ asset('theme') }}/assets/images/icons/database.gif" class="brand-logo-one icons-img" alt="database">
                    <h3><a href="#">3. Legacy to Cloud Migration</a></h3>
                    <p>Our team of experts has years of experience in helping businesses seamlessly transition their legacy systems to cloud-based applications. With our proven methodology and technical expertise, we ensure a smooth and efficient migration process, minimizing downtime and maximizing cost savings. Trust us to guide you through every step of the migration journey, from planning and assessment to implementation and testing. Let us help you unlock the full potential of cloud technology and transform your business for the digital age.</p>
                    <a href="#" class="learn-btn mb-3 invisible">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="services-card services-style-bg p-0">
                    <img src="{{ asset('theme') }}/assets/images/icons/api.gif" class="brand-logo-one icons-img" alt="API">
                    <h3><a href="#">4. API Integration</a></h3>
                    <p>Our API integration services streamline the process of connecting different applications and systems, allowing for seamless data exchange and communication. With our experienced team of developers, we can ensure that your APIs are implemented efficiently and effectively. Whether you are looking to integrate third-party services or build custom APIs for your own platform, we have the expertise to meet your needs. Trust us to handle the complexities of API integration so you can focus on growing your business.</p>
                    <a href="#" class="learn-btn mb-3 invisible">Learn More <i class="bx bx-chevron-right"></i></a>
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
							<h2>Why Partner with Us for Application Modernization?</h2>
                            <p>Partnering with us for your Application Modernization needs means gaining access to:</p>
						</div>
						<div class="row">
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-pencil-ruler"></i>
										<h3>Tailored Solutions</h3>
									</div>
									<p>Our team brings extensive experience across multiple sectors, ensuring best practices tailored to your needs.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-users-crown"></i>
										<h3>Technology Prowess</h3>
									</div>
									<p>We stay on the cutting edge of technology trends, utilizing cloud, automation, and modern UI/UX design to enhance application functionality.</p>
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
                                        <i class="fal fa-headset"></i>
										<h3>Dedicated Support</h3>
									</div>
									<p>From consulting to post-implementation, we’re with you every step of the way to ensure success.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="col-lg-6">
					<div class="choose-img">
						<img src="{{ asset('theme') }}/assets/images/choose-img.jpg" alt="Images">
					</div>
				</div> -->
			</div>
		</div>
	</div>


    <div class="case-study-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span class="sp-color2">Success Stories</span>
                <h2>Success Stories in Application Modernization</h2>
                <p>See how our Application Modernization services have helped businesses transform:</p>
            </div>
            <div class="row pt-45">
                <div class="col-lg-4 col-md-6">
                    <div class="case-study-item">
                        <a href="#">
                            <img src="{{ asset('theme') }}/assets/images/case-study/case-study1.jpg" alt="Images">
                        </a>
                        <div class="content">
                            <h3><a href="#">Healthcare Platform Revamp</a></h3>
                            <p>We upgraded a healthcare system, improving access and efficiency.</p>
                            <a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="case-study-item">
                        <a href="#">
                            <img src="{{ asset('theme') }}/assets/images/case-study/case-study1.jpg" alt="Images">
                        </a>
                        <div class="content">
                            <h3><a href="#">Finance Cloud Migration</a></h3>
                            <p>We migrated a financial client to the cloud, enhancing performance and cutting costs.</p>
                            <a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
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
                <div class="col-lg-12 col-sm-6 text-center">
                    <a href="{{ url('/success-stories') }}" class="default-btn btn-bg-two border-radius-5 py-3">Explore Our Success Stories</a>
                </div>
            </div>
        </div>
    </div>


<div class="about-area about-bg2 pt-5 pb-1">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img-4">
                    <img src="{{ asset('theme') }}/assets/images/modern-cta.png" alt="About Images">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content-3 ml-20">
                    <div class="section-title">
                        <span class="sp-color1">Partner Up With Us</span>
                        <h2>Ready to Modernize Your Applications?</h2>
                        <p>Don’t let outdated applications hold your business back. Our Application Modernization services can bring new life to your software, helping you improve efficiency, enhance security, and deliver better experiences to your users.</p>
                    </div>
                    <h3>With 24+ years of expertise, we deliver cutting-edge Application Modernization solutions.</h3>
                    <a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-5 py-3">Get in Touch Today</a>
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
                                            What is digital marketing?
                                        </a>
                                        <div class="accordion-content show">
                                            <p>Digital marketing promotes businesses online, targeting specific audiences through SEO, social media, email marketing, website development, and customer engagement tools.</p>
                                            <p class="pt-3">Branding agencies shape your brand identity and market position, creating a cohesive experience across logos, websites, messaging, and visual design.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            What does a digital marketer do?
                                        </a>
                                        <div class="accordion-content">
                                            <p>A digital marketer is a marketing professional proficient in crafting and implementing successful online marketing strategies. They comprehend the intricacies of engaging with an online audience, ensuring your brand maintains consumer interaction from initial contact to post-sales support.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            Would my business benefit from digital marketing services?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Having an online presence is essential, but effective marketing is key. At JFS Technologies, our expert team delivers comprehensive digital marketing services, using the latest tools to optimize your online presence and maximize ROI.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            How cost effective is digital marketing compared to traditional marketing?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Digital marketing is cost-effective, targeting specific audiences with tailored messages and easy performance tracking. Partnering with top digital, advertising, and branding agencies helps maximize your online presence and drive lasting growth.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            How do you identify a successful digital marketing company?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Select a digital marketing agency that assesses your needs without promising instant results. Look for a team that identifies strategic gaps, collaborates on goals, and provides transparent reporting. As a leading digital marketing company in India, we offer tailored solutions to enhance your website and boost brand visibility, helping you achieve success.</p>
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