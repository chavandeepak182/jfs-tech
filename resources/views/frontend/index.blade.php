@extends('frontend.layouts.header')
@section('title', "Digital Transformation Company | Digital Transformation consultant")
@section('description', "JFS Technologies is a leading digital transformation company, empowering businesses with innovative solutions, and seamless digital strategies to drive growth and success. ")
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
				<div class="banner-item-content banner-item-ptb" data-aos="fade-right" data-aos-offset="500" data-aos-easing="ease-in-sine">
					<h1 title="JFS Technologies - Digital Transformation Company">Transforming Businesses Through Digital Excellence</h1>
					<p>Empowering enterprises with innovative Data-Driven Digital Transformation solutions, seamless digital experiences, and tailored strategies that drive growth and innovation.</p>
					<div class="banner-btn">
						<a href="{{ url('/services') }}" class="default-btn btn-bg-two border-radius-50 mr-20">Explore Our Services <i class="fal fa-arrow-right"></i></a>
						<a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-50">Get a Consultation <i class="bx bx-chevron-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- About Area -->
	<div class="about-area pt-80 pb-70">
		<div class="container">
			<div class="row justify-content-center align-items-center mx-auto">
				<div class="col-lg-12">
					<div class="about-content ml-25" data-aos="fade-up" data-aos-duration="550">
						<div class="section-title text-center" data-aos="fade-up" data-aos-duration="500">
							<span class="sp-color2">24+ Years Leadership Experience</span>
							<h2 title="Digital transformation company for software development">Your Trusted Partner in Digital Transformation for Software Innovation</h2>
							<div class="mx-auto pt-3">At JFS Technologies, we are a digital transformation company, offering innovative and customized digital solutions that empower businesses to thrive in the digital age. From <strong>digital marketing services</strong> to <strong>Cloud services in Infrastructure management</strong> and AI-driven data analytics, we help organizations streamline operations, boost engagement, and scale efficiently. Our global team of experts works alongside you to unlock your business’s true potential, driving growth with secure, scalable, and high-performing solutions.</div>
							<div class="mx-auto pt-3">Our global team of experts collaborates with you to unlock your business’s true potential by driving growth through secure, scalable, and high-performing solutions. As a leading provider of <strong>DevOps cybersecurity services</strong>, <strong>CI/CD performance testing</strong>, and <strong>software development company services</strong>, we stay ahead of industry trends to deliver future-ready strategies tailored to your business's unique challenges.</div>
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


<section class="video" data-aos="zoom-in-right" data-aos-duration="700">
	<video class="w-100" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
		<source src="../theme/assets/images/intro.mp4" type="video/mp4">
		<source src="movie.webm" type="video/webm">Sorry, your browser does not support HTML5 video.
	</video>
</section>


<!-- Service Area -->
	<section class="services-area-two pt-100 pb-70">
		<div class="container-fluid">
			<div class="section-title text-center" data-aos="fade-up" data-aos-duration="500">
				<span class="sp-color1">What We Do?</span>
				<h2 title="Our Core Digital Transformation Services at JFS Technologies">Our Core Digital Transformation Services</h2>
				<div class="text-white w-75 mx-auto pt-3">We deliver immersive, user-centric experiences designed to help your business thrive by leveraging technology to its fullest potential. Our expertise spans a diverse range of services, including <strong>Infrastructure Management Consulting Services</strong>, <strong>Best Application Modernization Services</strong>, and <strong>Infrastructure Management in Cloud Computing</strong> to drive innovation and success.</div>
			</div>
			<div class="row pt-45 mx-auto justify-content-between custom-card desk-view">
				<div class="col-lg-3" data-aos="fade-up" data-aos-duration="500">
					<div class="card">
						<img src="{{ asset('theme') }}/assets/images/transform.png" alt="">
						<div class="card-content">
							<h3 title="Digital Transformation Services">Digital Transformation</h3>
							<p>Empowering businesses with advanced tech for optimization and innovation.</p>
							<a href="{{ url('/services/digital-transformation') }}" class="button">
								Know More <i class="far fa-long-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3" data-aos="fade-up" data-aos-duration="750">
					<div class="card">
						<img src="{{ asset('theme') }}/assets/images/experience.png" alt="">
						<div class="card-content">
							<h3 title="Digital Experience Platform">Digital Experience</h3>
							<p>Creating impactful digital touchpoints to connect your brand effectively.</p>
							<a href="{{ url('/services/digital-experience') }}" class="button">
								Know More <i class="far fa-long-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3" data-aos="fade-up" data-aos-duration="1000">
					<div class="card">
						<img src="{{ asset('theme') }}/assets/images/devops.png" alt="">
						<div class="card-content">
							<h3 title="Devops Cybersecurity Services">DevOps Services</h3>
							<p>Accelerating your development lifecycle with streamlined processes.</p>
							<a href="{{ url('/services/devops') }}" class="button">Know More <i class="far fa-long-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3" data-aos="fade-up" data-aos-duration="1250">
					<div class="card">
						<img src="{{ asset('theme') }}/assets/images/resource.png" alt="">
						<div class="card-content">
							<h3 title="Resource Augmentation Services">Resource Augmentation</h3>
							<p>Providing skilled professionals to integrate with your team and scale operations.</p>
							<a href="{{ url('/services/resource-augmentation') }}" class="button">
								Know More <i class="far fa-long-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row pt-45 mx-auto justify-content-between custom-card mobile-view">
				<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="500">
					<div class="services-card services-style-bg p-0">
						<img src="{{ asset('theme') }}/assets/images/transform.png" alt="">
						<h3><a href="{{ url('/services/digital-transformation') }}">Digital Transformation</a></h3>
						<p>Empowering businesses with next-gen technologies to optimize processes, enhance efficiency & foster innovation.</p>
						<a href="{{ url('/services/digital-transformation') }}" class="learn-btn mb-2">Learn More <i class="bx bx-chevron-right"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="500">
					<div class="services-card services-style-bg p-0">
						<img src="{{ asset('theme') }}/assets/images/experience.png" alt="">
						<h3><a href="{{ url('/services/digital-experience') }}">Digital Experience</a></h3>
						<p>Creating impactful digital touchpoints to connect your brand with its audience effectively.</p>
						<a href="{{ url('/services/digital-experience') }}" class="learn-btn mb-2">Learn More <i class="bx bx-chevron-right"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="500">
					<div class="services-card services-style-bg p-0">
						<img src="{{ asset('theme') }}/assets/images/devops.png" alt="">
						<h3><a href="{{ url('/services/devops') }}">DevOps</a></h3>
						<p>Accelerating your development lifecycle with streamlined processes and robust practices.</p>
						<a href="{{ url('/services/devops') }}" class="learn-btn mb-2">Learn More <i class="bx bx-chevron-right"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="500">
					<div class="services-card services-style-bg p-0">
						<img src="{{ asset('theme') }}/assets/images/resource.png" alt="">
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
			<div class="section-title text-center" data-aos="fade-up" data-aos-duration="500">
				<span class="sp-color2">Unlock the potential</span>
				<h2 title="Who We Serve at JFS Technologies">Who We Serve?</h2>
				<p>We cater to a wide range of industries, offering customized solutions such as Data Science Services, being among the top digital marketing companies for small businesses, DevSecOps software development lifecycle support, and Resource Augmentation to extend your team and meet unique business needs.</p>
			</div>
			<div class="row pt-45">
				<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="750">
					<div class="work-process-card-three">
						<div class="number-title invisible ">01.</div>
						<p class="title">Small and Medium-Sized Enterprises (SMEs)</p>
						<p>Achieve growth with tailored websites and digital marketing services for small businesses.</p>
						<img src="{{ asset('theme') }}/assets/images/icons/SMEs.svg" class="brand-logo-one" alt="SMEs">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="750">
					<div class="work-process-card-three">
						<div class="number-title invisible ">02.</div>
						<p class="title">Startups</p>
						<p>Scale rapidly with advanced tech solutions for accelerated product development, streamlined operations, and sustainable marketing growth.</p>
						<img src="{{ asset('theme') }}/assets/images/icons/rocket.svg" class="brand-logo-one" alt="Startups">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="750">
					<div class="work-process-card-three">
						<div class="number-title invisible ">03.</div>
						<p class="title">Digital Agencies</p>
						<p>Outsource complex projects and manage overflow with our dedicated development teams, ensuring efficiency, scalability, and on-time project delivery.</p>
						<img src="{{ asset('theme') }}/assets/images/icons/ads.svg" class="brand-logo-one" alt="Ads">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="750">
					<div class="work-process-card-three">
						<div class="number-title invisible ">04.</div>
						<p class="title">Large Enterprises</p>
						<p>Leverage expert teams for scalable Java applications and enterprise solutions, ensuring robust performance, seamless integration, and long-term reliability.</p>
						<img src="{{ asset('theme') }}/assets/images/icons/enterprise.svg" class="brand-logo-one" alt="Large Enterprises">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="750">
					<div class="work-process-card-three">
						<div class="number-title invisible ">05.</div>
						<p class="title">E-commerce Companies</p>
						<p>Create interactive platforms designed for e-commerce companies to boost collaboration, improve training, and increase engagement with dynamic content.</p>
						<img src="{{ asset('theme') }}/assets/images/icons/cart.svg" class="brand-logo-one" alt="cart">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="750">
					<div class="work-process-card-three">
						<div class="number-title invisible ">06.</div>
						<p class="title">Educational Institutions</p>
						<p>Create engaging learning platforms that foster collaboration, improve knowledge retention, and enhance education with interactive, user-friendly content.</p>
						<img src="{{ asset('theme') }}/assets/images/icons/elearning.svg" class="brand-logo-one" alt="Elearning">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="750">
					<div class="work-process-card-three">
						<div class="number-title invisible ">07.</div>
						<p class="title">Nonprofit Organizations</p>
						<p>Boost outreach and fundraising efforts with affordable, scalable digital solutions that enhance audience engagement, improve visibility, and drive measurable results.</p>
						<img src="{{ asset('theme') }}/assets/images/icons/care.svg" class="brand-logo-one" alt="engagement">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="750">
					<div class="work-process-card-three">
						<div class="number-title invisible ">08.</div>
						<p class="title">Tech & Software Companies</p>
						<p>Achieve rapid growth with specialized development teams tailored to your needs for efficient project execution, quality results, and accelerated time-to-market.</p>
						<img src="{{ asset('theme') }}/assets/images/icons/computer.svg" class="brand-logo-one" alt="computer">
					</div>
				</div>
			</div>
		</div>
	</section>


<!-- Technologies Area -->
	<div class="about-area ptb-100" data-aos="fade-up" data-aos-duration="750">
		<div class="container-fluid">
			<div class="row mx-auto">
				<div class="col-lg-12 text-center">
					<div class="about-content ml-25">
						<div class="section-title">
							<span class="sp-color2">Our Expertise</span>
							<h2 class="w-50 mx-auto" title="Digital transformation Technologies to Power Your Next Big Move at JFS Technologies">Technologies to Power Your Next Big Move</h2>
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
	<div class="choose-area pt-100 pb-70 home" data-aos="fade-up" data-aos-duration="750">
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
										<p class="title">Tailored Solutions</p>
									</div>
									<p>Each service is expertly tailored to meet your unique business challenges, objectives, and long-term growth and success goals.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-users-crown"></i>
										<p class="title">Technology Prowess</p>
									</div>
									<p>Our team brings deep expertise across diverse technologies, ensuring innovative, secure, scalable, and future-proof solutions.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-analytics"></i>
										<p class="title">Proven Track Record</p>
									</div>
									<p>We’ve helped numerous businesses transform their digital strategies, achieving significant and measurable growth.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-globe-asia"></i>
										<p class="title">Global Client Base</p>
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
	<div class="counter-area pt-100" data-aos="fade-up" data-aos-duration="750">
		<div class="container">
			<div class="section-title text-center">
				<span class="sp-color2">Clientele</span>
				<h2 title="JFS Technologies - Impact in Numbers">Our Impact in Numbers</h2>
			</div>
			<div class="row pt-45">
				<div class="col-lg-3 col-6 col-md-3">
					<div class="counter-another-content">
						<img src="{{ asset('theme') }}/assets/images/icons/projects.svg" class="brand-logo-one" alt="experience">
						<p class="title">150+</p>
						<span>Projects Delivered</span>
					</div>
				</div>
				<div class="col-lg-3 col-6 col-md-3">
					<div class="counter-another-content">
						<img src="{{ asset('theme') }}/assets/images/icons/experts.svg" class="brand-logo-one" alt="experts">
						<p class="title">25+</p>
						<span>Industries Served</span>
					</div>
				</div>
				<div class="col-lg-3 col-6 col-md-3">
					<div class="counter-another-content">
						<img src="{{ asset('theme') }}/assets/images/icons/exp.svg" class="brand-logo-one" alt="Customer Base">
						<p class="title">10+</p>
						<span>Years of Excellence</span>
					</div>
				</div>
				<div class="col-lg-3 col-6 col-md-3">
					<div class="counter-another-content">
						<img src="{{ asset('theme') }}/assets/images/icons/clients.svg" class="brand-logo-one" alt="locations">
						<p class="title">100%</p>
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
	<div class="brand-area ptb-100" data-aos="fade-up" data-aos-duration="750">
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
			<div class="section-title text-center" data-aos="fade-up" data-aos-duration="500">
				<span class="sp-color1">Recognitions</span>
				<h2 class="text-white" title="Awards & Achievements of JFS Technologies">Awards & Achievements</h2>
			</div>
			<div class="row align-items-center justify-content-center pt-5">
				<div class="col-lg-2 col-6" data-aos="fade-up" data-aos-duration="750">
					<div class="work-process-card rounded">
                        <img src="{{ asset('theme') }}/assets/images/it-firms.png" class="" alt="Images">
					</div>
				</div>
				<div class="col-lg-2 col-6" data-aos="fade-up" data-aos-duration="750">
					<div class="work-process-card rounded">
                        <img src="{{ asset('theme') }}/assets/images/top-dev.png" class="" alt="Images">
					</div>
				</div>
                <div class="col-lg-2 col-6" data-aos="fade-up" data-aos-duration="750">
					<div class="work-process-card rounded">
                        <img src="{{ asset('theme') }}/assets/images/soft-sug.png" class="" alt="Images">
					</div>
				</div>
				<div class="col-lg-2 col-6" data-aos="fade-up" data-aos-duration="750">
					<div class="work-process-card rounded">
                        <img src="{{ asset('theme') }}/assets/images/top-seo.png" class="" alt="Top Seo Company">
					</div>
				</div>
				<div class="col-lg-2 col-6" data-aos="fade-up" data-aos-duration="750">
					<div class="work-process-card rounded">
                        <img src="{{ asset('theme') }}/assets/images/app-dev.png" class="" alt="Technimply - Top Mobile App Dev Company">
					</div>
				</div>
			</div>
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-2 col-6" data-aos="fade-up" data-aos-duration="750">
					<div class="work-process-card rounded">
                        <img src="{{ asset('theme') }}/assets/images/g-partner.png" class="" alt="Google Partner">
					</div>
				</div>
				<div class="col-lg-2 col-6" data-aos="fade-up" data-aos-duration="750">
					<div class="work-process-card rounded">
                        <img src="{{ asset('theme') }}/assets/images/top-dmc.png" class="" alt="Top Digital Marketing Company">
					</div>
				</div>
				<div class="col-lg-2 col-6" data-aos="fade-up" data-aos-duration="750">
					<div class="work-process-card rounded">
                        <img src="{{ asset('theme') }}/assets/images/clutch.png" class="" alt="Top SEO Company">
					</div>
				</div>
				<div class="col-lg-2 col-6" data-aos="fade-up" data-aos-duration="750">
					<div class="work-process-card rounded">
                        <img src="{{ asset('theme') }}/assets/images/bcs.png" class="" alt="Software World - Best Customer Support">
					</div>
				</div>
				<div class="col-lg-2 col-6" data-aos="fade-up" data-aos-duration="750">
					<div class="work-process-card rounded">
                        <img src="{{ asset('theme') }}/assets/images/clutch1.png" class="" alt="TOP SMM Company">
					</div>
				</div>
			</div>
		</div>
	</div>


<!-- Let's Build Area -->
    <div class="case-study-area pt-100 pb-70" data-aos="fade-up" data-aos-duration="750">
		<div class="container-fluid p-0">
			<div class="section-title text-center">
				<span class="sp-color2">Success Stories</span>
				<h2 title="Driving Success for Clients of JFS Technologies">Driving Success for Our Clients</h2>
				<p class="w-50 mx-auto">See how we’ve helped businesses achieve their digital goals:</p>
			</div>
			<div class="case-study-slider owl-carousel owl-theme pt-45">
				<div class="case-study-item">
                    <a href="#">
                        <!-- <img src="{{ asset('theme') }}/assets/images/case-study/case-study1.jpg" alt="Images"> -->
						<img src="https://img.freepik.com/premium-photo/ecommerce-market-shopping-online-vector-illustration_1121250-166764.jpg" alt="Images">
                    </a>
                    <div class="content">
                        <a href="#">E-Commerce Platform UI/UX Redesign</a>
                        <a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                    </div>
                </div>
				<div class="case-study-item">
                    <a href="#">
                        <!-- <img src="{{ asset('theme') }}/assets/images/case-study/case-study1.jpg" alt="Images"> -->
						<img src="https://img.freepik.com/free-photo/man-designing-websites-high-angle_23-2149930945.jpg?t=st=1733395227~exp=1733398827~hmac=58abe747fe9042ef67ce04b577ededb45f4d93fa689081079ed2a842bd37b700" alt="Images">
                    </a>
                    <div class="content">
                        <a href="#">Mobile App UX Optimization</a>
						<a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                    </div>
                </div>
				<div class="case-study-item">
                    <a href="#">
                        <!-- <img src="{{ asset('theme') }}/assets/images/case-study/case-study1.jpg" alt="Images"> -->
						<img src="https://img.freepik.com/free-photo/neon-hologram-tiger_23-2151558738.jpg?t=st=1733395368~exp=1733398968~hmac=4b5fb495db5f47616159f02bc9725ea07a4f9ebd14fa0df005030a92e916e1cd" alt="Images">
                    </a>
                    <div class="content">
                        <a href="#">3D Visualization for a Product Launch</a>
                        <a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                    </div>
                </div>
				<div class="case-study-item">
					<a href="#">
						<!-- <img src="{{ asset('theme') }}/assets/images/case-study/case-study3.jpg" alt="Images"> -->
						<img src="https://img.freepik.com/free-vector/cloud-storage-realistic-composition-with-digital-elements-bright-lights-city_1284-26975.jpg?t=st=1733398978~exp=1733402578~hmac=fe1634140eb1b7b4fb612119759994de86cad40c5c362a872ec8521ae6dada4a" alt="Images">
					</a>
					<div class="content">
						<a href="#">Secure Cloud Migration</a>
						<a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>


<!-- Testimonials Area -->
	<section class="clients-area pt-100 pb-70" data-aos="fade-up" data-aos-duration="750">
		<div class="container">
			<div class="section-title text-center">
				<span class="sp-color1">Testimonials</span>
				<h2 titles="What Our Clients Say about JFS Technologies">What Our Clients Say</h2>
			</div>
			<div class="clients-slider owl-carousel owl-theme pt-45">
				<div class="clients-content">
					<div class="content">
						<img src="{{ asset('theme') }}/assets/images/clients-img/clients-img2.png" alt="Images">
						<i class="bx bxs-quote-alt-left"></i>
						<p class="title">Thomas Paul</p>
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
						<p class="title">Dan Fitzpatrick</p>
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
						<p class="title">Anand Katti</p>
						<span>COO @ Shyena Techyarns</span>
					</div>
					<p>
					“Because of JFS Technologies' end-to-end sales service, our business has experienced tremendous growth and expanded its reach. Their holistic approach and unwavering commitment have been truly instrumental. I highly recommend their outstanding services!”
					</p>
				</div>
			</div>
		</div>
	</section>


	<div class="blog-area pt-100 pb-70" data-aos="fade-up" data-aos-duration="750">
		<div class="container">
			<div class="section-title text-center">
				<span class="sp-color2">Latest Blog</span>
				<h2 title="Latest blog from JFS Technologies">Let’s Check Some Latest Blog</h2>
			</div>
			<div class="row pt-45">
				<div class="col-lg-4 col-md-6">
					<div class="blog-card">
						<div class="blog-img">
							<a href="#">
								<img src="{{ asset('theme') }}/assets/images/blog-1.png" alt="Blog Images">
							</a>
							<div class="blog-tag">
								<h3>18</h3>
								<span>Sept</span>
							</div>
						</div>
						<div class="content">
							<a class="blog-title">Top SEO Tools to Boost Your Website Visibility in 2024</a>
							<p>Digital marketing is an area that changes all the time, so it’s important for businesses to stay ahead of the curve. Search Engine Optimization (SEO) is still a key part of doing...</p>
							<a href="#" class="read-btn">Read More <i class="bx bx-chevron-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="blog-card">
						<div class="blog-img">
							<a href="#">
								<img src="{{ asset('theme') }}/assets/images/blog-2.png" alt="Blog Images">
							</a>
							<div class="blog-tag">
								<h3>21</h3>
								<span>Aug</span>
								</div>
							</div>
							<div class="content">
								<a class="blog-title">How to Choose the Best Free Client Management Software for Your Needs</a>
								<p>In today’s competitive business landscape, managing client relationships effectively is crucial for success.</p>
								<a href="#" class="read-btn">Read More <i class="bx bx-chevron-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
						<div class="blog-card">
							<div class="blog-img">
								<a href="#">
									<img src="{{ asset('theme') }}/assets/images/blog-3.png" alt="Blog Images">
								</a>
								<div class="blog-tag">
									<h3>31</h3>
									<span>Jul</span>
								</div>
							</div>
							<div class="content">
							<a class="blog-title">Why Every Business Needs a Digital Marketing Agency</a>
							<p>In today’s fast-paced digital landscape Why Every Business Needs a Digital Marketing Agency, staying ahead of the competition requires more than just a great product.</p>
							<a href="#" class="read-btn">Read More <i class="bx bx-chevron-right"></i></a>
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