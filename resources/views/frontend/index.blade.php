@extends('frontend.layouts.header')
@section('title', "Digital Marketing Services | Account Management Services")
@section('keywords', "IT Services, Account Management services, Digital marketing services, Website Design company, Website design services, End to end sales, outsourcing, Affordable digital marketing services, Website marketing services, SEO service agency, Social media marketing, SEO company for business")

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Banner Area -->
	<div class="banner-area">
		<div class="container-fluid p-0">
			<!-- <video id="background-video" autoplay loop muted poster="{{ asset('theme') }}/assets/images/hero-video.mp4">
				<source src="{{ asset('theme') }}/assets/images/hero-video-1.mp4" type="video/mp4">
			</video> -->
			<div class="container-max">
				<div class="banner-item-content banner-item-ptb">
					<h1>Transforming Businesses Through Digital Excellence</h1>
					<p>Empowering enterprises with innovative technology solutions, seamless digital experiences, and tailored strategies that drive growth and innovation.</p>
					<div class="banner-btn">
						<a href="{{ url('/services') }}" class="default-btn btn-bg-two border-radius-50 mr-20">Explore Our Services <i class="fal fa-arrow-right"></i></a>
						<a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-50">Get a Consultation <i class="bx bx-chevron-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- About Area -->
	<div class="about-area pt-100 pb-5">
		<div class="container">
			<div class="row justify-content-center align-items-center mx-auto">
				<div class="col-lg-12">
					<div class="about-content ml-25">
						<div class="section-title">
							<span class="sp-color2">24+ Years Leadership Experience</span>
							<h2 class="m-0">Right Partner for Software Innovation</h2>
							<p>At JFS Technologies, we are leaders in digital transformation, offering innovative and customized digital solutions that empower businesses to thrive in the digital age. From digital marketing to cloud services and AI-driven data analytics, we help organizations streamline operations, boost engagement, and scale efficiently. Our global team of experts works alongside you to unlock your business’s true potential, driving growth with secure, scalable, and high-performing solutions.</p>
							<p>Our global team of experts works alongside you to unlock your business’s true potential, driving growth with secure, scalable, and high-performing solutions. We pride ourselves on staying ahead of industry trends, delivering future-ready strategies tailored to meet the unique challenges of your business.</p>
						</div>
					</div>

					<!-- <div class="about-play mt-5 text-center">
						<img src="{{ asset('theme') }}/assets/images/about/about-img1.jpg" alt="About Images">
						<div class="about-play-content">
							<span>Watch Our Intro Video</span>
							<h2>Perfect Solution for IT Services!</h2>
							<div class="play-on-area">
								<a href="https://www.youtube.com/watch?v=tUP5S4YdEJo" class="play-on popup-btn"><i class="bx bx-play"></i></a>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>


<section class="video">
	<video class="w-100" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
		<source src="../theme/assets/images/intro.mp4" type="video/mp4">
		<source src="movie.webm" type="video/webm">Sorry, your browser does not support HTML5 video.
	</video>
</section>


<!-- Service Area -->
	<section class="services-area-two pt-100 pb-70">
		<div class="container-fluid">
			<div class="section-title text-center">
				<span class="sp-color1">What We Do?</span>
				<h2>Our Core Services</h2>
				<div class="text-white w-75 mx-auto pt-3">We create immersive, user-centric experiences with a focus to help your business thrive, using technology to its fullest potential. We specialise in a diverse range of services, excelling in:</div>
			</div>
			<div class="row pt-45 mx-auto justify-content-between custom-card desk-view">
				<div class="col-lg-3">
					<div class="card">
						<div class="face face1">
							<div class="content">
								<img src="{{ asset('theme') }}/assets/images/transform.webp" alt="">
								<h3>Digital Transformation</h3>
							</div>
						</div>
						<div class="face face2">
							<div class="content">
								<p class="mt-4">Empowering businesses with next-gen technologies to optimize processes, enhance efficiency & foster innovation.</p>
								<a href="{{ url('/services/digital-transformation') }}">Know More</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card">
						<div class="face face1">
							<div class="content">
								<img src="{{ asset('theme') }}/assets/images/experience.webp" alt="">
								<h3>Digital Experience</h3>
							</div>
						</div>
						<div class="face face2">
							<div class="content">
								<p class="mt-4">Creating impactful digital touchpoints to connect your brand with its audience effectively.</p>
								<a href="{{ url('/services/digital-experience') }}">Know More</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card">
						<div class="face face1">
							<div class="content">
								<img src="{{ asset('theme') }}/assets/images/devops.webp" alt="">
								<h3>DevOps</h3>
							</div>
						</div>
						<div class="face face2">
							<div class="content">
								<p class="mt-4">Accelerating your development lifecycle with streamlined processes and robust practices.</p>
								<a href="{{ url('/services/devops') }}">Know More</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card">
						<div class="face face1">
							<div class="content">
								<img src="{{ asset('theme') }}/assets/images/resource.webp" alt="">
								<h3>Resource Augmentation</h3>
							</div>
						</div>
						<div class="face face2">
							<div class="content">
								<p class="mt-4">Providing skilled professionals to seamlessly integrate with your team and scale your operations.</p>
								<a href="{{ url('/services/resource-augmentation') }}">Know More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row pt-45 mx-auto justify-content-between custom-card mobile-view">
				<div class="col-lg-3 col-sm-6">
					<div class="services-card services-style-bg p-0">
						<img src="{{ asset('theme') }}/assets/images/transform.webp" alt="">
						<h3><a href="{{ url('/services/digital-transformation') }}">Digital Transformation</a></h3>
						<p>Empowering businesses with next-gen technologies to optimize processes, enhance efficiency & foster innovation.</p>
						<a href="{{ url('/services/digital-transformation') }}" class="learn-btn mb-2">Learn More <i class="bx bx-chevron-right"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="services-card services-style-bg p-0">
						<img src="{{ asset('theme') }}/assets/images/experience.webp" alt="">
						<h3><a href="{{ url('/services/digital-experience') }}">Digital Experience</a></h3>
						<p>Creating impactful digital touchpoints to connect your brand with its audience effectively.</p>
						<a href="{{ url('/services/digital-experience') }}" class="learn-btn mb-2">Learn More <i class="bx bx-chevron-right"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="services-card services-style-bg p-0">
						<img src="{{ asset('theme') }}/assets/images/devops.webp" alt="">
						<h3><a href="{{ url('/services/devops') }}">DevOps</a></h3>
						<p>Accelerating your development lifecycle with streamlined processes and robust practices.</p>
						<a href="{{ url('/services/devops') }}" class="learn-btn mb-2">Learn More <i class="bx bx-chevron-right"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="services-card services-style-bg p-0">
						<img src="{{ asset('theme') }}/assets/images/resource.webp" alt="">
						<h3><a href="{{ url('/services/resource-augmentation') }}">Resource Augmentation</a></h3>
						<p>Providing skilled professionals to seamlessly integrate with your team and scale your operations.</p>
						<a href="{{ url('/services/resource-augmentation') }}" class="learn-btn">Learn More <i class="bx bx-chevron-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="work-process-area home_cards pt-100">
		<div class="container">
			<div class="section-title text-center">
				<span class="sp-color2">Unlock the potential</span>
				<h2>Who We Serve?</h2>
				<p>We cater to a broad spectrum of industries, offering customized solutions to meet their unique needs:</p>
			</div>
			<div class="row pt-45">
				<div class="col-lg-3 col-sm-6">
					<div class="work-process-card-three">
						<div class="number-title invisible ">01.</div>
						<h3>Small and Medium-Sized Enterprises (SMEs)</h3>
						<p>Achieve growth with tailored websites and digital marketing.</p>
						<img src="{{ asset('theme') }}/assets/images/icons/SMEs.svg" class="brand-logo-one" alt="SMEs">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="work-process-card-three">
						<div class="number-title invisible ">02.</div>
						<h3>Startups</h3>
						<p>Scale rapidly with advanced tech solutions for accelerated product development and marketing growth.</p>
						<img src="{{ asset('theme') }}/assets/images/icons/rocket.svg" class="brand-logo-one" alt="Startups">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="work-process-card-three">
						<div class="number-title invisible ">03.</div>
						<h3>Digital Agencies</h3>
						<p>Outsource complex projects and manage overflow with our dedicated development teams.</p>
						<img src="{{ asset('theme') }}/assets/images/icons/ads.svg" class="brand-logo-one" alt="Ads">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="work-process-card-three">
						<div class="number-title invisible ">04.</div>
						<h3>Large Enterprises</h3>
						<p>Leverage expert teams for scalable Java applications and enterprise solutions, ensuring robust performance and seamless integration.</p>
						<img src="{{ asset('theme') }}/assets/images/icons/enterprise.svg" class="brand-logo-one" alt="Large Enterprises">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="work-process-card-three">
						<div class="number-title invisible ">05.</div>
						<h3>E-commerce Companies</h3>
						<p>Create engaging learning platforms that foster collaboration and enhance education with interactive content.</p>
						<img src="{{ asset('theme') }}/assets/images/icons/cart.svg" class="brand-logo-one" alt="cart">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="work-process-card-three">
						<div class="number-title invisible ">06.</div>
						<h3>Educational Institutions</h3>
						<p>Create engaging learning platforms that foster collaboration and enhance education with interactive content.</p>
						<img src="{{ asset('theme') }}/assets/images/icons/elearning.svg" class="brand-logo-one" alt="Elearning">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="work-process-card-three">
						<div class="number-title invisible ">07.</div>
						<h3>Nonprofit Organizations</h3>
						<p>Boost outreach and fundraising with affordable digital solutions that enhance engagement.</p>
						<img src="{{ asset('theme') }}/assets/images/icons/care.svg" class="brand-logo-one" alt="engagement">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="work-process-card-three">
						<div class="number-title invisible ">08.</div>
						<h3>Tech & Software Companies</h3>
						<p>Achieve rapid growth with specialized development teams tailored to your needs for efficient project execution & quality results.</p>
						<img src="{{ asset('theme') }}/assets/images/icons/computer.svg" class="brand-logo-one" alt="computer">
					</div>
				</div>
			</div>
		</div>
	</section>


<!-- Technologies Area -->
	<div class="about-area ptb-100">
		<div class="container-fluid">
			<div class="row mx-auto">
				<div class="col-lg-12 text-center">
					<div class="about-content ml-25">
						<div class="section-title">
							<span class="sp-color2">Our Expertise</span>
							<h2 class="w-50 mx-auto">Technologies to Power Your Next Big Move</h2>
						</div>

						<div class="slider">
							<div class="slide-track">
								<div class="slide">
									<div class="work-process-cards">
										<img src="{{ asset('theme') }}/assets/technologies/html.png" alt="Images">
									</div>
								</div>
								<div class="slide">
									<div class="work-process-cards">
										<img src="{{ asset('theme') }}/assets/technologies/css.png" alt="Images">
									</div>
								</div>
								<div class="slide">
									<div class="work-process-cards">
										<img src="{{ asset('theme') }}/assets/technologies/js.png" alt="Images">
									</div>
								</div>
								<div class="slide">
									<div class="work-process-cards">
										<img src="{{ asset('theme') }}/assets/technologies/php.png" alt="Images">
									</div>
								</div>
								<div class="slide">
									<div class="work-process-cards">
										<img src="{{ asset('theme') }}/assets/technologies/react_js.png" alt="Images">
									</div>
								</div>
								<div class="slide">
									<div class="work-process-cards">
										<img src="{{ asset('theme') }}/assets/technologies/angular_js.png" alt="Images">
									</div>
								</div>
								<div class="slide">
									<div class="work-process-cards">
										<img src="{{ asset('theme') }}/assets/technologies/dot-net.png" alt="Images">
									</div>
								</div>
								<div class="slide">
									<div class="work-process-cards">
										<img src="{{ asset('theme') }}/assets/technologies/java.png" alt="Images">
									</div>
								</div>
								<div class="slide">
									<div class="work-process-cards">
										<img src="{{ asset('theme') }}/assets/technologies/laravel.png" alt="Images">
									</div>
								</div>
								<div class="slide">
									<div class="work-process-cards">
										<img src="{{ asset('theme') }}/assets/technologies/node_js.png" alt="Images">
									</div>
								</div>
								<div class="slide">
									<div class="work-process-cards">
										<img src="{{ asset('theme') }}/assets/technologies/vue_js.png" alt="Images">
									</div>
								</div>
								<div class="slide">
									<div class="work-process-cards">
										<img src="{{ asset('theme') }}/assets/technologies/cpp.png" alt="Images">
									</div>
								</div>
								<div class="slide">
									<div class="work-process-cards">
										<img src="{{ asset('theme') }}/assets/technologies/python.png" alt="Images">
									</div>
								</div>
								<div class="slide">
									<div class="work-process-cards">
										<img src="{{ asset('theme') }}/assets/technologies/next_js.png" alt="Images">
									</div>
								</div>
								<div class="slide">
									<div class="work-process-cards">
										<img src="{{ asset('theme') }}/assets/technologies/flutter.png" alt="Images">
									</div>
								</div>
								<div class="slide">
									<div class="work-process-cards">
										<img src="{{ asset('theme') }}/assets/technologies/ror.png" alt="Images">
									</div>
								</div>
								<div class="slide">
									<div class="work-process-cards">
										<img src="{{ asset('theme') }}/assets/technologies/laravel.png" alt="Images">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<!-- Trust Us Area -->	
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


<!-- Key highlights Area -->
	<div class="counter-area pt-100">
		<div class="container">
			<div class="section-title text-center">
				<span class="sp-color2">Clientele</span>
				<h2>Our Impact in Numbers</h2>
			</div>
			<div class="row pt-45">
				<div class="col-lg-3 col-6 col-md-3">
					<div class="counter-another-content">
						<img src="{{ asset('theme') }}/assets/images/icons/projects.svg" class="brand-logo-one" alt="experience">
						<h3>150+</h3>
						<span>Projects Delivered</span>
					</div>
				</div>
				<div class="col-lg-3 col-6 col-md-3">
					<div class="counter-another-content">
						<img src="{{ asset('theme') }}/assets/images/icons/experts.svg" class="brand-logo-one" alt="experts">
						<h3>25+</h3>
						<span>Industries Served</span>
					</div>
				</div>
				<div class="col-lg-3 col-6 col-md-3">
					<div class="counter-another-content">
						<img src="{{ asset('theme') }}/assets/images/icons/exp.svg" class="brand-logo-one" alt="Customer Base">
						<h3>10+</h3>
						<span>Years of Excellence</span>
					</div>
				</div>
				<div class="col-lg-3 col-6 col-md-3">
					<div class="counter-another-content">
						<img src="{{ asset('theme') }}/assets/images/icons/clients.svg" class="brand-logo-one" alt="locations">
						<h3>100%</h3>
						<span>Client Satisfaction</span>
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


<!-- Clientele Area -->
	<div class="brand-area ptb-100">
		<div class="container-fluid">
			<div class="brand-slider owl-carousel owl-theme">
				<div class="brand-item">
					<img src="{{ asset('theme') }}/assets/images/brand-logo/hb.png" class="brand-logo-one" alt="HealthBee">
				</div>
				<div class="brand-item">
					<img src="{{ asset('theme') }}/assets/images/brand-logo/kc.png" class="brand-logo-one" alt="KC Overseas">
				</div>
				<div class="brand-item">
					<img src="{{ asset('theme') }}/assets/images/brand-logo/apisdor.png" class="brand-logo-one" alt="apisdor">
				</div>
				<div class="brand-item">
					<img src="{{ asset('theme') }}/assets/images/brand-logo/lido.png" class="brand-logo-one" alt="LIDO Cabs">
				</div>
				<div class="brand-item">
					<img src="{{ asset('theme') }}/assets/images/brand-logo/krixi.png" class="brand-logo-one" alt="krixi">
				</div>
				<div class="brand-item">
					<img src="{{ asset('theme') }}/assets/images/brand-logo/krixic.png" class="brand-logo-one" alt="krixi care">
				</div>
				<div class="brand-item">
					<img src="{{ asset('theme') }}/assets/images/brand-logo/shyena-tech.png" class="brand-logo-one" alt="shyena-tech">
				</div>
				<div class="brand-item">
					<img src="{{ asset('theme') }}/assets/images/brand-logo/dev.png" class="brand-logo-one" alt="Dev Constructions">
				</div>
				<div class="brand-item">
					<img src="{{ asset('theme') }}/assets/images/brand-logo/hno.png" class="brand-logo-one" alt="HnO">
				</div>
				<div class="brand-item">
					<img src="{{ asset('theme') }}/assets/images/brand-logo/protowell.png" class="brand-logo-one" alt="protowell">
				</div>
				<div class="brand-item">
					<img src="{{ asset('theme') }}/assets/images/brand-logo/jfin.png" class="brand-logo-one" alt="jfinserv">
				</div>
			</div>
		</div>
	</div>

	
	<div class="call-us-area pt-100 pb-70">
		<div class="container">
			<div class="section-title text-center">
				<span class="sp-color1">Recognitions</span>
				<h2 class="text-white">Awards & Achievements</h2>
			</div>
			<div class="row align-items-center justify-content-center pt-5">
				<div class="col-lg-2 col-6">
					<div class="work-process-card rounded">
                        <img src="{{ asset('theme') }}/assets/images/it-firms.png" class="" alt="Images">
					</div>
				</div>
				<div class="col-lg-2 col-6">
					<div class="work-process-card rounded">
                        <img src="{{ asset('theme') }}/assets/images/top-dev.png" class="" alt="Images">
					</div>
				</div>
                <div class="col-lg-2 col-6">
					<div class="work-process-card rounded">
                        <img src="{{ asset('theme') }}/assets/images/soft-sug.png" class="" alt="Images">
					</div>
				</div>
				<div class="col-lg-2 col-6">
					<div class="work-process-card rounded">
                        <img src="{{ asset('theme') }}/assets/images/top-seo.png" class="" alt="Top Seo Company">
					</div>
				</div>
			</div>
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-2 col-6">
					<div class="work-process-card rounded">
                        <img src="{{ asset('theme') }}/assets/images/g-partner.png" class="" alt="Google Partner">
					</div>
				</div>
				<div class="col-lg-2 col-6">
					<div class="work-process-card rounded">
                        <img src="{{ asset('theme') }}/assets/images/top-dmc.png" class="" alt="Top Digital Marketing Company">
					</div>
				</div>
				<div class="col-lg-2 col-6">
					<div class="work-process-card rounded">
                        <img src="{{ asset('theme') }}/assets/images/clutch.png" class="" alt="Top SEO Company">
					</div>
				</div>
				<div class="col-lg-2 col-6">
					<div class="work-process-card rounded">
                        <img src="{{ asset('theme') }}/assets/images/clutch1.png" class="" alt="TOP SMM Company">
					</div>
				</div>
			</div>
		</div>
	</div>


<!-- Let's Build Area -->
    <div class="case-study-area pt-100 pb-70">
		<div class="container-fluid p-0">
			<div class="section-title text-center">
				<span class="sp-color2">Case Study</span>
				<h2>Driving Success for Our Clients</h2>
				<p class="w-50 mx-auto">See how we’ve helped businesses achieve their digital goals:</p>
			</div>
			<div class="case-study-slider owl-carousel owl-theme pt-45">
				<div class="case-study-item">
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
				</div>
				<div class="case-study-item">
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
				</div>
				<div class="case-study-item">
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
				</div>
			</div>
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
					“Because of JFS Technologies' end-to-end sales service, our business has experienced tremendous growth and expanded its reach. Their holistic approach and unwavering commitment have been truly instrumental. I highly recommend their outstanding services!”
					</p>
				</div>
			</div>
		</div>
		<!-- <div class="client-circle">
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
		</div> -->
	</section>


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
							<a href="https://jfstechnologies.com/top-seo-tools-to-boost-your-website-visibility-in-2024/">
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
									<a><i class="bx bx-purchase-tag-alt"></i>Accounting Services, Business</a>
								</li>
							</ul>
							<h3>
								<a>Top SEO Tools to Boost Your Website Visibility in 2024</a>
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
									<a>How to Choose the Best Free Client Management Software for Your Needs</a>
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
								<a>Why Every Business Needs a Digital Marketing Agency</a>
							</h3>
							<p>In today’s fast-paced digital landscape Why Every Business Needs a Digital Marketing Agency, staying ahead of the competition requires more than just a great product.</p>
							<a href="https://jfstechnologies.com/why-every-business-needs-a-digital-marketing-agency/" class="read-btn">Read More <i class="bx bx-chevron-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Call Us Area -->
	<!-- <div class="call-us-area">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6">
					<div class="call-contact">
						<h3>Call Us 24/7</h3>
						<a href="tel:+918329729190" class="call-btn">Ready to Take Your Business to the Next Level?</a>
						<p>Partner with JFS Technologies today and unlock the full potential of your digital strategy. From cloud solutions to data analytics and mobile app development, we’ll help you create custom solutions that drive results.</p>
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
										Schedule a Free Consultation<i class="bx bx-chevron-right"></i>
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
	</div> -->


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