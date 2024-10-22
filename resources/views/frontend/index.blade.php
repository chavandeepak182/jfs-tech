@extends('frontend.layouts.header')
@section('title', "Digital Marketing Services | Account Management Services")
@section('keywords', "IT Services, Account Management services, Digital marketing services, Website Design company, Website design services, End to end sales, outsourcing, Affordable digital marketing services, Website marketing services, SEO service agency, Social media marketing, SEO company for business")

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Banner Area -->
	<div class="banner-area">
		<div class="container-fluid p-0">
			<video id="background-video" autoplay loop muted poster="{{ asset('theme') }}/assets/images/hero-video.mp4">
				<source src="{{ asset('theme') }}/assets/images/hero-video-1.mp4" type="video/mp4">
			</video>
			<!-- <div class="container-max">
				<div class="banner-item-content banner-item-ptb">
					<h1>Fueling Growth with Tailored Digital Solutions</h1>
					<p>Over 10 years of proven track record delivering secure, scalable, and high-performance solutions that address your unique business needs.</p>
					<div class="banner-btn">
						<a href="#" class="default-btn btn-bg-two border-radius-50">Get In Touch <i class="bx bx-chevron-right"></i></a>
						<a href="#" class="default-btn btn-bg-one border-radius-50 ml-20">Explore More <i class="bx bx-chevron-right"></i></a>
					</div>
				</div>
			</div> -->
		</div>
	</div>


	<!-- About Area -->
	<div class="about-area ptb-100">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-6">
					<div class="about-play">
						<img src="{{ asset('theme') }}/assets/images/about/about-img1.jpg" alt="About Images">
						<div class="about-play-content">
							<span>Watch Our Intro Video</span>
							<h2>Perfect Solution for IT Services!</h2>
							<!-- <div class="play-on-area">
								<a href="https://www.youtube.com/watch?v=tUP5S4YdEJo" class="play-on popup-btn"><i class="bx bx-play"></i></a>
							</div> -->
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about-content ml-25">
						<div class="section-title">
							<span class="sp-color2">24+ Years Leadership Experience</span>
							<h2>Right Partner for Software Innovation</h2>
							<p>
							Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet.
							</p>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<ul class="about-list text-start">
									<li><i class="bx bxs-check-circle"></i>Cost of Supplies and Equipment</li>
									<li><i class="bx bxs-check-circle"></i>Bribed Autor Nisi Elit Volume</li>
									<li><i class="bx bxs-check-circle"></i>Cost of Supplies and Equipment</li>
								</ul>
							</div>
							<div class="col-lg-6 col-md-6">
								<ul class="about-list text-start about-list-2">
									<li><i class="bx bxs-check-circle"></i>Change the Volume of Expected</li>
									<li><i class="bx bxs-check-circle"></i>Easy to Customer Services</li>
									<li><i class="bx bxs-check-circle"></i>Good Quality Products Services</li>
								</ul>
							</div>
						</div>
						<p class="about-content-text">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
					</div>
				</div>
			</div>
		</div>
	</div>


<!-- Service Area -->
	<section class="services-area-two pt-100 pb-70">
		<div class="container">
			<div class="section-title text-center">
				<span class="sp-color1">Our Services</span>
				<h2>What We Do?</h2>
				<div class="text-white w-75 mx-auto pt-3">We create immersive, user-centric experiences with a focus to help your business thrive, using technology to its fullest potential. We specialise in a diverse range of services, excelling in:</div>
			</div>
			<div class="row pt-45 justify-content-center mx-auto">
				<div class="col-lg-4 col-md-6">
					<div class="services-item">
						<a href="/digital-marketing-company">
							<img src="{{ asset('theme') }}/assets/images/services/services-img6.jpg" alt="Images">
						</a>
						<div class="content">
							<i class="flaticon-data-analytics"></i>
							<span><a href="/digital-marketing-company">Digital Services</a></span>
							<h3><a href="/digital-marketing-company">Digital Marketing</a></h3>
						</div>
					</div>
				</div>	
				<div class="col-lg-4 col-md-6">
					<div class="services-item">
						<a href="/website-design-and-development">
							<img src="{{ asset('theme') }}/assets/images/services/services-img3.jpg" alt="Images">
						</a>
						<div class="content">
							<i class="flaticon-web-development"></i>
							<span><a href="/website-design-and-development">Web Services</a></span>
							<h3><a href="/website-design-and-development">Web Development</a></h3>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="services-item">
						<a href="/mobile-app-development">
							<img src="{{ asset('theme') }}/assets/images/services/services-img1.jpg" alt="Images">
						</a>
						<div class="content">
							<i class="flaticon-consultant"></i>
							<span><a href="/mobile-app-development">App Services</a></span>
							<h3><a href="/mobile-app-development"></a>App Development</h3>
						</div>
					</div>
				</div>	
				<div class="col-lg-4 col-md-6">
					<div class="services-item">
						<a href="#">
							<img src="{{ asset('theme') }}/assets/images/services/services-img2.jpg" alt="Images">
						</a>
						<div class="content">
							<i class="flaticon-structure"></i>
							<span><a href="#">Support Services</a></span>
							<h3><a href="#">App Maintenacne</a></h3>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="services-item">
						<a href="#">
							<img src="{{ asset('theme') }}/assets/images/services/services-img4.jpg" alt="Images">
						</a>
						<div class="content">
							<i class="flaticon-consulting"></i>
							<span><a href="#">Dedicated</a></span>
							<h3><a href="#">Hire Developer</a></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


<!-- Technologies Area -->
	<section class="work-process-area-two pt-100 pb-70">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-5">
					<div class="work-process-left">
						<div class="section-title">
							<span class="sp-color1">Our Expertise</span>
							<h2>Empowering Businesses With Expertise in 100+ Technologies</h2>
						</div>
						<a href="/contact-us" class="default-btn btn-bg-two border-radius-50 text-center">Get A Quote</a>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="row">
						<div class="col-lg-3 col-6">
							<div class="work-process-card">
                                <img src="{{ asset('theme') }}/assets/technologies/html-5.png" class="p-3" alt="Images">
							</div>
						</div>
						<div class="col-lg-3 col-6">
							<div class="work-process-card">
                                <img src="{{ asset('theme') }}/assets/technologies/css-3.png" class="p-3" alt="Images">
							</div>
						</div>
                        <div class="col-lg-3 col-6">
							<div class="work-process-card">
                                <img src="{{ asset('theme') }}/assets/technologies/js.png" class="p-3" alt="Images">
							</div>
						</div>
                        <div class="col-lg-3 col-6">
							<div class="work-process-card">
                                <img src="{{ asset('theme') }}/assets/technologies/php.png" class="p-3" alt="Images">
							</div>
						</div>
                        <div class="col-lg-3 col-6">
							<div class="work-process-card">
                                <img src="{{ asset('theme') }}/assets/technologies/react_js.png" class="" alt="Images">
							</div>
						</div>
                        <div class="col-lg-3 col-6">
							<div class="work-process-card">
                                <img src="{{ asset('theme') }}/assets/technologies/angular_js.png" class="p-3" alt="Images">
							</div>
						</div>
                        <div class="col-lg-3 col-6">
							<div class="work-process-card">
                                <img src="{{ asset('theme') }}/assets/technologies/.net.png" class="p-3" alt="Images">
							</div>
						</div>
                        <div class="col-lg-3 col-6">
							<div class="work-process-card">
                                <img src="{{ asset('theme') }}/assets/technologies/java.png" class="p-2" alt="Images">
							</div>
						</div>
                        <div class="col-lg-3 col-6">
							<div class="work-process-card">
                                <img src="{{ asset('theme') }}/assets/technologies/laravel.png" class="p-2" alt="Images">
							</div>
						</div>
                        <div class="col-lg-3 col-6">
							<div class="work-process-card">
                                <img src="{{ asset('theme') }}/assets/technologies/node_js.png" class="p-3" alt="Images">
							</div>
						</div>
                        <div class="col-lg-3 col-6">
							<div class="work-process-card">
                                <img src="{{ asset('theme') }}/assets/technologies/vue_js.png" class="p-3" alt="Images">
							</div>
						</div>
                        <div class="col-lg-3 col-6">
							<div class="work-process-card">
                                <img src="{{ asset('theme') }}/assets/technologies/cpp.png" class="p-3" alt="Images">
							</div>
						</div>
                        <div class="col-lg-3 col-6">
							<div class="work-process-card">
                                <img src="{{ asset('theme') }}/assets/technologies/python.png" class="p-3" alt="Images">
							</div>
						</div>
                        <div class="col-lg-3 col-6">
							<div class="work-process-card">
                                <img src="{{ asset('theme') }}/assets/technologies/next_js.png" class="p-2" alt="Images">
							</div>
						</div>
                        <div class="col-lg-3 col-6">
							<div class="work-process-card">
                                <img src="{{ asset('theme') }}/assets/technologies/flutter.png" class="p-3" alt="Images">
							</div>
						</div>
                        <div class="col-lg-3 col-6">
							<div class="work-process-card">
                                <img src="{{ asset('theme') }}/assets/technologies/ror.png" class="p-3" alt="Images">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


<!-- Trust Us Area -->	
	<div class="choose-area pt-100 pb-70">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-6">
					<div class="choose-content mr-20">
						<div class="section-title">
							<span class="sp-color1"></span>
							<h2>Why Trust Us?</h2>
						</div>
						<div class="row">
							<div class="col-lg-6 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-pencil-ruler"></i>
										<h3>Tailored Solutions</h3>
									</div>
									<p>We provide customised solutions that align with your business objectives, ensuring your goals are met effectively.</p>
								</div>
							</div>
							<div class="col-lg-6 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-users-crown"></i>
										<h3>Experienced Team</h3>
									</div>
									<p>Our expert developers and digital marketing professionals bring extensive industry experience and technical proficiency.</p>
								</div>
							</div>
							<div class="col-lg-6 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-analytics"></i>
										<h3>Proven Success</h3>
									</div>
									<p>We’ve helped numerous businesses transform their digital strategies, achieving significant and measurable growth.</p>
								</div>
							</div>
							<div class="col-lg-6 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-globe-asia"></i>
										<h3>Global Reach</h3>
									</div>
									<p>With clients worldwide, we ensure seamless project management and consistent, high-quality delivery across borders.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="choose-img">
						<img src="{{ asset('theme') }}/assets/images/choose-img.jpg" alt="Images">
					</div>
				</div>
			</div>
		</div>
	</div>


<!-- Clientele Area -->
	<div class="brand-area pt-100 pb-100">
		<div class="container-fluid">
			<h2 class="text-center pb-5">Clientele</h2>
			<div class="brand-slider owl-carousel owl-theme">
				<div class="brand-item">
					<img src="{{ asset('theme') }}/assets/images/brand-logo/apisdor.png" class="brand-logo-one" alt="apisdor">
					<img src="{{ asset('theme') }}/assets/images/brand-logo/brand-style1.png" class="brand-logo-two" alt="Images">
				</div>
				<div class="brand-item">
					<img src="{{ asset('theme') }}/assets/images/brand-logo/krixi.png" class="brand-logo-one" alt="krixi">
					<img src="{{ asset('theme') }}/assets/images/brand-logo/brand-style2.png" class="brand-logo-two" alt="Images">
				</div>
				<div class="brand-item">
					<img src="{{ asset('theme') }}/assets/images/brand-logo/krixic.png" class="brand-logo-one" alt="krixi care">
					<img src="{{ asset('theme') }}/assets/images/brand-logo/brand-style3.png" class="brand-logo-two" alt="Images">
				</div>
				<div class="brand-item">
					<img src="{{ asset('theme') }}/assets/images/brand-logo/shyena-tech.png" class="brand-logo-one" alt="shyena-tech">
					<img src="{{ asset('theme') }}/assets/images/brand-logo/brand-style4.png" class="brand-logo-two" alt="Images">
				</div>
				<div class="brand-item">
					<img src="{{ asset('theme') }}/assets/images/brand-logo/protowell.png" class="brand-logo-one" alt="protowell">
					<img src="{{ asset('theme') }}/assets/images/brand-logo/brand-style5.png" class="brand-logo-two" alt="Images">
				</div>
				<div class="brand-item">
					<img src="{{ asset('theme') }}/assets/images/brand-logo/jfin.png" class="brand-logo-one" alt="jfinserv">
					<img src="{{ asset('theme') }}/assets/images/brand-logo/brand-style3.png" class="brand-logo-two" alt="Images">
				</div>
				<div class="brand-item">
					<img src="{{ asset('theme') }}/assets/images/brand-logo/hno.png" class="brand-logo-one" alt="HnO">
					<img src="{{ asset('theme') }}/assets/images/brand-logo/brand-style3.png" class="brand-logo-two" alt="Images">
				</div>
				<div class="brand-item">
					<img src="{{ asset('theme') }}/assets/images/brand-logo/dev.png" class="brand-logo-one" alt="Dev Constructions">
					<img src="{{ asset('theme') }}/assets/images/brand-logo/brand-style3.png" class="brand-logo-two" alt="Images">
				</div>
				<div class="brand-item">
					<img src="{{ asset('theme') }}/assets/images/brand-logo/hb.png" class="brand-logo-one" alt="HealthBee">
					<img src="{{ asset('theme') }}/assets/images/brand-logo/brand-style3.png" class="brand-logo-two" alt="Images">
				</div>
				<div class="brand-item">
					<img src="{{ asset('theme') }}/assets/images/brand-logo/lido.png" class="brand-logo-one" alt="LIDO Cabs">
					<img src="{{ asset('theme') }}/assets/images/brand-logo/brand-style3.png" class="brand-logo-two" alt="Images">
				</div>
			</div>
		</div>
	</div>

	
	<div class="call-us-area">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-5">
					<div class="call-contact">
						<h3>Recognitions</h3>
						<a class="call-btn">Awards & Achievements</a>
						<p>We've earned honors as one of the top digital marketing agency across the nation and internationally.</p>
					</div>
				</div>
				<div class="col-lg-7 pt-5 pb-3">
					<div class="row">
						<div class="col-lg-4 col-4">
							<div class="work-process-card rounded">
                                <img src="{{ asset('theme') }}/assets/images/it-firms.png" class="" alt="Images">
							</div>
						</div>
						<div class="col-lg-4 col-4">
							<div class="work-process-card rounded">
                                <img src="{{ asset('theme') }}/assets/images/top-dev.png" class="" alt="Images">
							</div>
						</div>
                        <div class="col-lg-4 col-4">
							<div class="work-process-card rounded">
                                <img src="{{ asset('theme') }}/assets/images/soft-sug.png" class="" alt="Images">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<!-- Key highlights Area -->
	<div class="counter-area pt-100 pb-70">
		<div class="container">
			<div class="section-title text-center">
				<span class="sp-color2">Key highlights</span>
				<h2>Let’s Check Our Business Growth and Success Story</h2>
			</div>
			<div class="row pt-45">
				<div class="col-lg-3 col-6 col-md-3">
					<div class="counter-another-content">
						<i class="flaticon-web-development"></i>
						<h3>10+</h3>
						<span>Years Industry Experience</span>
					</div>
				</div>
				<div class="col-lg-3 col-6 col-md-3">
					<div class="counter-another-content">
						<i class="flaticon-web-development"></i>
						<h3>250+</h3>
						<span>Industry Experts</span>
					</div>
				</div>
				<div class="col-lg-3 col-6 col-md-3">
					<div class="counter-another-content">
						<i class="flaticon-startup"></i>
						<h3>5+</h3>
						<span>Locations</span>
					</div>
				</div>
				<div class="col-lg-3 col-6 col-md-3">
					<div class="counter-another-content">
						<i class="flaticon-consulting-1"></i>
						<h3>1000+</h3>
						<span>Clients Worldwide</span>
					</div>
				</div>
			</div>
		</div>
		<div class="counter-shape">
			<div class="shape1">
				<img src="{{ asset('theme') }}/assets/images/shape/shape1.png" alt="Images">
			</div>
			<div class="shape2">
				<img src="{{ asset('theme') }}/assets/images/shape/shape2.png" alt="Images">
			</div>
		</div>
	</div>


<!-- Testimonials Area -->
	<section class="clients-area pt-100 pb-70">
		<div class="container">
			<div class="section-title text-center">
				<span class="sp-color1">Testimonials</span>
				<h2>Listen from our Clients</h2>
			</div>
			<div class="clients-slider owl-carousel owl-theme pt-45">
				<div class="clients-content">
					<div class="content">
						<img src="{{ asset('theme') }}/assets/images/clients-img/office-man.png" alt="Images">
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
						<img src="{{ asset('theme') }}/assets/images/clients-img/office-man.png" alt="Images">
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
						<img src="{{ asset('theme') }}/assets/images/clients-img/office-man.png" alt="Images">
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


<!-- Let's Build Area -->
    <div class="case-study-area pt-100 pb-70">
		<div class="container-fluid p-0">
			<div class="section-title text-center">
				<span class="sp-color2">Case Study</span>
				<h2>Our Success Stories</h2>
			</div>
			<div class="case-study-slider owl-carousel owl-theme pt-45">
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
				<div class="case-study-item">
					<a href="#">
						<img src="{{ asset('theme') }}/assets/images/case-study/case-study2.jpg" alt="Images">
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
				<div class="case-study-item">
					<a href="#">
						<img src="{{ asset('theme') }}/assets/images/case-study/case-study3.jpg" alt="Images">
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
				<div class="case-study-item">
					<a href="#">
						<img src="{{ asset('theme') }}/assets/images/case-study/case-study4.jpg" alt="Images">
					</a>
					<div class="content">
						<h3><a href="#">UI/UX Research</a></h3>
						<ul>
							<li><a href="#">UI/UX Design</a></li>
							<li><a href="#">Research</a> </li>
						</ul>
						<a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
					</div>
				</div>
				<div class="case-study-item">
					<a href="#">
						<img src="{{ asset('theme') }}/assets/images/case-study/case-study6.jpg" alt="Images">
					</a>
					<div class="content">
						<h3><a href="#">Business Solution</a></h3>
						<ul>
							<li><a href="#">Solution</a></li>
							<li><a href="#">Business</a> </li>
						</ul>
						<a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
					</div>
				</div>
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
		</div>
	</div>


<!-- Call Us Area -->
	<div class="call-us-area">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6">
					<div class="call-contact">
						<h3>Call Us 24/7</h3>
						<a href="tel:+918329729190" class="call-btn">+91 83297 29190</a>
						<p>Connect with JFS Technologies for comprehensive Digital Marketing Agency that drive engagement, growth, and brand loyalty.</p>
						<a href="/contact-us" class="default-btn btn-bg-two border-radius-5">Contact Us</a>
					</div>
				</div>
				<div class="col-lg-5 pt-5 pb-3">
                    <div class="contact-form">
					<form id="contactForm" action="{{ route('contact.submit') }}" method="POST">
					@csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control rounded" required data-error="Please Enter Your Name" placeholder="Name*">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required data-error="Please Enter Your number" class="form-control rounded" placeholder="Phone Number*">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control rounded" required data-error="Please Enter Your Email" placeholder="Email*">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                        <textarea name="message" class="form-control" id="message" cols="20" rows="4" required data-error="Write your message" placeholder="Your Message*"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="agree-label">
                                        <input type="checkbox" id="chb1">
                                        <label for="chb1" class="text-white">
                                            Accept <a href="#">Terms & Conditions</a> And <a href="/privacy-policy">Privacy Policy.</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 text-center">
                                    <button type="submit" class="default-btn btn-bg-one border-radius-50">
                                        Send Message <i class="bx bx-chevron-right"></i>
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
				</div>
			</div>
		</div>
	</div>


	<div class="blog-area pt-100 pb-70">
		<div class="container">
			<div class="section-title text-center">
				<span class="sp-color2">Latest Blog</span>
				<h2>Let’s Check Some Latest Blog</h2>
			</div>
			<div class="row pt-45">
				<div class="col-lg-4 col-md-6">
					<div class="blog-card">
						<div class="blog-img">
							<a href="https://jfstechnologies.com/how-to-choose-the-best-free-client-management-software-for-your-needs/">
								<img src="https://jfstechnologies.com/wp-content/uploads/2024/09/Colorful-Playful-SEO-Informational-Presentation-2560-x-1025-px.png" alt="Blog Images">
							</a>
							<div class="blog-tag">
								<h3>18</h3>
								<span>Sept</span>
							</div>
						</div>
						<div class="content">
							<ul>
								<li>
									<a href="#"><i class="bx bx-purchase-tag-alt"></i>Accounting Services, Business</a>
								</li>
							</ul>
							<h3>
								<a href="https://jfstechnologies.com/top-seo-tools-to-boost-your-website-visibility-in-2024/">Top SEO Tools to Boost Your Website Visibility in 2024</a>
							</h3>
							<p>Digital marketing is an area that changes all the time, so it’s important for businesses to stay ahead of the curve. Search Engine Optimization (SEO) is still a key part of doing...</p>
							<a href="https://jfstechnologies.com/top-seo-tools-to-boost-your-website-visibility-in-2024/" class="read-btn">Read More <i class="bx bx-chevron-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="blog-card">
						<div class="blog-img">
							<a href="https://jfstechnologies.com/how-to-choose-the-best-free-client-management-software-for-your-needs/">
								<img src="https://jfstechnologies.com/wp-content/uploads/2024/08/How-to-Choose-the-Best-Free-Client-Management-Software-for-Your-Needs.png" alt="Blog Images">
							</a>
							<div class="blog-tag">
								<h3>21</h3>
								<span>Aug</span>
								</div>
							</div>
							<div class="content">
								<ul>
									<li>
										<a href="#"><i class="bx bx-purchase-tag-alt"></i>Accounting Services, Business</a>
									</li>
								</ul>
								<h3>
									<a href="https://jfstechnologies.com/how-to-choose-the-best-free-client-management-software-for-your-needs/">How to Choose the Best Free Client Management Software for Your Needs</a>
								</h3>
								<p>In today’s competitive business landscape, managing client relationships effectively is crucial for success.</p>
								<a href="https://jfstechnologies.com/how-to-choose-the-best-free-client-management-software-for-your-needs/" class="read-btn">Read More <i class="bx bx-chevron-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
						<div class="blog-card">
							<div class="blog-img">
								<a href="https://jfstechnologies.com/why-every-business-needs-a-digital-marketing-agency/">
									<img src="https://jfstechnologies.com/wp-content/uploads/2024/07/ban1.png" alt="Blog Images">
								</a>
								<div class="blog-tag">
									<h3>31</h3>
									<span>Jul</span>
								</div>
							</div>
							<div class="content">
							<ul>
								<li>
									<a href="#"><i class="bx bx-purchase-tag-alt"></i>Achive</a>
								</li>
							</ul>
							<h3>
								<a href="#">Why Every Business Needs a Digital Marketing Agency</a>
							</h3>
							<p>In today’s fast-paced digital landscape Why Every Business Needs a Digital Marketing Agency, staying ahead of the competition requires more than just a great product.</p>
							<a href="https://jfstechnologies.com/why-every-business-needs-a-digital-marketing-agency/" class="read-btn">Read More <i class="bx bx-chevron-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#contactForm').on('submit', function(e) {
            e.preventDefault(); // Prevent default form submission

            var formData = {
                name: $('#name').val(),
                email: $('#email').val(),
                phone_number: $('#phone_number').val(),
                msg_subject: $('#msg_subject').val(),
                message: $('#message').val(),
            };

            $.ajax({
                type: "POST",
                url: "{{ route('contact.submit') }}", // Use Laravel route
                data: JSON.stringify(formData),
                contentType: "application/json",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF Token
                },
                success: function(response) {
                    $('#msgSubmit').removeClass('hidden').text(response.message);
                    $('#contactForm')[0].reset(); // Reset form fields
                },
                error: function(error) {
                    $('#msgSubmit').removeClass('hidden').text('Error sending message: ' + error.responseJSON.message);
                }
            });
        });
    });
</script>
@endsection