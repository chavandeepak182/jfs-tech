@extends('frontend.layouts.header')
@section('title', "Best Data Driven Digital Transformation Services | JFS Technologies")
@section('description', "Transform your business with JFS Technologies best data-driven digital transformation services. Leverage insights and innovation to stay ahead in the digital era.")
@section('keywords', "Best Data Driven Digital Transformation Services , Digital Transformation Company, Data Science Consulting services, Cloud services in Infrastructure management, Digital marketing services company, best mobile app development company, Devsecops cybersecurity services, IT staff augmentation services, Website Development Services")
@section('canonical')
<link rel="canonical" href="https://jfstechnologies.com/" />
<meta name="robots" content="index, follow">
@endsection
@section('schema')
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LG94TD129M"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-LG94TD129M');
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "JFS Technologies",
    "item": "https://jfstechnologies.com/"  
  }]
}
</script>

<meta property="og:type" content="business.business">
<meta property="og:title" content="Best Data Driven Digital Transformation Services">
<meta property="og:url" content="https://jfstechnologies.com/">
<meta property="og:image" content="https://jfstechnologies.com/theme/assets/images/favicon.png">
<meta property="og:description" content="JFS Technologies logo">
<meta property="business:contact_data:street_address" content="416, Platinum Square, Sakore Nagar, Viman Nagar">
<meta property="business:contact_data:locality" content="Pune">
<meta property="business:contact_data:region" content="Maharashtra">
<meta property="business:contact_data:postal_code" content="411014">
<meta property="business:contact_data:country_name" content="India">
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
        "@type": "Question",
        "name": "What is Data-Driven Digital Transformation Services, and how can JFS Technologies help?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Best Data-Driven Digital Transformation involves using data insights to drive business decisions and optimize processes. At JFS Technologies, we implement advanced analytics, AI, and machine learning techniques to help businesses modernize their operations and achieve more efficient and scalable results."
        }
      },{
        "@type": "Question",
        "name": "How can JFS Technologies assist with software development and digital transformation?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "As a leading Digital Transformation Company for Software Development, we offer end-to-end solutions—from custom software development to system integration, helping businesses enhance their digital capabilities. Our team leverages modern technologies like cloud computing and data science to build scalable and secure software that supports your growth."
        }
      },{
        "@type": "Question",
        "name": "What are your Data Science Consulting services, and how can they benefit my business?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Our Data Science Consulting Services provide businesses with insights derived from large datasets to improve decision-making and optimize business processes. From predictive analytics to automation, our experts guide you through leveraging data for innovation and efficiency."
        }
      },{
        "@type": "Question",
        "name": "Do you provide Cloud Services for Infrastructure Management?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we specialize in Cloud Services in Infrastructure Management, offering reliable cloud solutions that ensure seamless data storage, scalability, and security. Whether it’s optimizing your current infrastructure or migrating to the cloud, we provide tailored solutions for better performance and cost-efficiency."
        }
      },{
        "@type": "Question",
        "name": "What makes JFS Technologies the best for mobile app development?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "As one of the Best Mobile App Development Companies, we deliver high-quality, custom mobile apps that are user-friendly, scalable, and secure. Whether you're looking to develop apps for iOS, Android, or cross-platform solutions, our team ensures exceptional performance and seamless user experience."
        }
      }]
    }
</script>
@endsection

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Banner Area -->
<div class="banner-area">
	<div class="container">
		<div class="banner-item-content banner-item-ptb">
			<h1>Best Data-Driven Digital Transformation Services</h1>
			<p>Empowering enterprises with innovative <a href="{{ url('/services') }}" style="color:#FFF;"><strong>Best Data-Driven Digital Transformation Services</strong></a>, seamless digital experiences, and tailored strategies that drive growth and innovation.</p>
			<div class="banner-btn">
				<!-- <a href="{{ url('/services') }}" class="default-btn btn-bg-two border-radius-50 mr-20">Explore Our Services <i class="fal fa-arrow-right"></i></a> -->
				<a href="{{ url('/contact-us') }}" class="default-btn btn-bg-two border-radius-50">Contact Our Expert <i class="bx bx-chevron-right"></i></a>
			</div>
		</div>
	</div>
</div>


<!-- About Area -->
<div class="about-area pt-80 pb-80">
	<div class="container">
		<div class="row align-items-center justify-content-center mx-auto">
			<div class="col-lg-6">
				<div class="about-content ml-25" data-aos="fade-up" data-aos-duration="550">
					<div class="section-title">
						<span class="sp-color2">24+ Years Leadership Experience</span>
						<h2>Your Transformation Partner</h2>
						<p class="mx-auto pt-3">At JFS Technologies, we are a <a href="{{ url('/services/digital-transformation-services') }}">digital transformation company</a>, offering innovative and Digital transformation company for software development to thrive in the digital age. From <a href="{{ url('/services/best-digital-marketing-agency') }}">digital marketing services</a> to <a href="{{ url('/services/infrastructure-management-services') }}">Cloud services in Infrastructure management</a> and AI-driven data analytics, we help organizations streamline operations, boost engagement, and scale efficiently. Our global team of experts works alongside you to unlock your business’s true potential, driving growth with secure, scalable, and high-performing solutions.</p>
						<p class="mx-auto pt-3">Our global team of experts collaborates with you to unlock your business’s true potential by driving growth through secure, scalable, and high-performing solutions. As a leading provider of <a href="{{ url('/services/devops-software-development') }}">DevOps cybersecurity services</a>, <a href="{{ url('/services/ci-cd-pipeline-deployment') }}">CI/CD performance testing</a>, and software development company services, we stay ahead of industry trends to deliver future-ready strategies tailored to your business's unique challenges.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="about-content ml-25" data-aos="fade-down" data-aos-duration="700">
					<div class="section-title text-center">
						<img src="{{ asset('theme') }}/assets/images/stats.webp" alt="Impact in numbers">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<section class="video bg-dark" data-aos="zoom-in-right" data-aos-duration="700">
	<video preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
		<source src="https://jfstechnologies.com/theme/assets/images/intro.mp4" type="video/mp4">
		<source src="https://jfstechnologies.com/theme/assets/images/services.mp4" type="video/webm">Sorry, your browser does not support HTML5 video.
	</video>
</section>

<div class="case-study-area pt-80 pb-80">
	<div class="container">
		<div class="section-title text-center" data-aos="fade-up" data-aos-duration="750">
			<span class="sp-color2">Our Approach</span>
			<h2 class="pb-5">How We Work</h2>
			<img src="{{ asset('theme') }}/assets/images/home-steps.webp" alt="How we Work">
		</div>
	</div>
</div>

<!-- Service Area -->
<section class="services-area-two pt-80 pb-80">
	<div class="container-fluid">
		<div class="section-title text-center" data-aos="fade-up" data-aos-duration="500">
			<span class="sp-color1">What We Do?</span>
			<h2 title="Our Core Digital Transformation Services for all businesses at JFS Technologies">Our Best Data Driven Digital Transformation Services</h2>
			<div class="text-white w-75 mx-auto pt-3">We deliver immersive, user-centric experiences designed to help your business thrive by leveraging technology to its fullest potential. Our expertise spans a diverse range of services, including <a href="{{ url('/services/ar-vr-services') }}" ><font color="#FFFFFF"><strong>AR/VR Services</a></font></strong>, <a href="{{ url('/services/application-modernisation-services') }}"><font color="#FFFFFF"><strong>Best Application Modernization Services</a></font></strong>, and <a href="{{ url('/services/process-automation-services') }}"><font color="#FFFFFF"><strong>Business Process Automation</a></font></strong> to <a href="{{ url('/services/container-based-microservices') }}"><font color="#FFFFFF"><strong>Containers and Microservices.</a></font></strong></div>
		</div>
		<div class="row pt-45 mx-auto justify-content-between custom-card desk-view">
			<div class="col-lg-3" data-aos="fade-up" data-aos-duration="500">
				<div class="card">
					<img src="{{ asset('theme') }}/assets/images/transform-1.jpg" alt="Best Data Driven Digital Transformation Services">
					<div class="card-content">
						<h3 title="Digital Transformation Services">Digital Transformation</h3>
						<p>Empowering businesses with next-gen digital transformation and software solutions.</p>
						<a href="{{ url('/services/digital-transformation-services') }}" class="button">
							Know More <i class="far fa-long-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3" data-aos="fade-up" data-aos-duration="750">
				<div class="card">
					<img src="{{ asset('theme') }}/assets/images/experience-1.jpg" alt="Best Data-Driven Digital Transformation Services">
					<div class="card-content">
						<h3 title="Digital Experience Platform">Digital Experience</h3>
						<p>Connect your brand, positioning us among the top digital marketing companies for businesses.</p>
						<a href="{{ url('/services/digital-experience') }}" class="button">
							Know More <i class="far fa-long-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3" data-aos="fade-up" data-aos-duration="1000">
				<div class="card">
					<img src="{{ asset('theme') }}/assets/images/devops-1.jpg" alt="Best Data Driven Digital Transformation Services">
					<div class="card-content">
						<h3 title="Devops Cybersecurity Services">DevOps Services</h3>
						<p>Accelerating your SDLC with streamlined processes through expert DevOps & cybersecurity services.</p>
						<a href="{{ url('/services/devops-software-development') }}" class="button">Know More <i class="far fa-long-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3" data-aos="fade-up" data-aos-duration="1250">
				<div class="card">
					<img src="{{ asset('theme') }}/assets/images/resource-1.jpg" alt="Best Data Driven Digital Transformation Services">
					<div class="card-content">
						<h3 title="Resource Augmentation Services">Resource Augmentation</h3>
						<p>Offering Resource Augmentation for digital transformation who integrate to scale your operations.</p>
						<a href="{{ url('/services/resource-augmentation-services') }}" class="button">
							Know More <i class="far fa-long-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row pt-45 mx-auto justify-content-between custom-card mobile-view">
			<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="500">
				<div class="services-card services-style-bg p-0">
					<img src="{{ asset('theme') }}/assets/images/transform.png" alt="Best Data Driven Digital Transformation Services">
					<h3><a href="{{ url('/sservices/digital-transformation-services') }}">Digital Transformation</a></h3>
					<p>Empowering businesses with next-gen technologies to optimize processes, enhance efficiency & foster innovation.</p>
					<a href="{{ url('/services/digital-transformation-services') }}" class="learn-btn mb-2">Learn More <i class="bx bx-chevron-right"></i></a>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="500">
				<div class="services-card services-style-bg p-0">
					<img src="{{ asset('theme') }}/assets/images/experience.png" alt="Best Data Driven Digital Transformation Services">
					<h3><a href="{{ url('/services/digital-experience') }}">Digital Experience</a></h3>
					<p>Creating impactful digital touchpoints to connect your brand with its audience effectively.</p>
					<a href="{{ url('/services/digital-experience') }}" class="learn-btn mb-2">Learn More <i class="bx bx-chevron-right"></i></a>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="500">
				<div class="services-card services-style-bg p-0">
					<img src="{{ asset('theme') }}/assets/images/devops.png" alt="Best Data Driven Digital Transformation Services">
					<h3><a href="{{ url('/services/devops-software-development') }}">DevOps</a></h3>
					<p>Accelerating your development lifecycle with streamlined processes and robust practices.</p>
					<a href="{{ url('/services/devops-software-development') }}" class="learn-btn mb-2">Learn More <i class="bx bx-chevron-right"></i></a>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="500">
				<div class="services-card services-style-bg p-0">
					<img src="{{ asset('theme') }}/assets/images/resource.png" alt="Best Data Driven Digital Transformation Services">
					<h3><a href="{{ url('/services/resource-augmentation-services') }}">Resource Augmentation</a></h3>
					<p>Providing skilled professionals to integrate with your team and scale your operations.</p>
					<a href="{{ url('/services/resource-augmentation-services') }}" class="learn-btn">Learn More <i class="bx bx-chevron-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="work-process-area home_cards pt-80">
	<div class="container">
		<div class="section-title text-center" data-aos="fade-up" data-aos-duration="500">
			<span class="sp-color2">Unlock the potential</span>
			<h2 title="Who We Serve for digital transformation services">Industries We Cater</h2>
			<p>We cater to a wide range of industries, offering customized solutions such as <a href="{{ url('/services/data-science-services') }}"><strong>Data Science Services</a></strong>, being among the top digital marketing companies for small businesses, <a href="{{ url('/services/devsecops-software-developmentdevsecops') }}"><strong>DevSecOps software development</a></strong> lifecycle support, and Resource Augmentation to extend your team and meet unique business needs.</p>
		</div>
		<div class="row pt-45 justify-content-center">
			<div class="col-lg-3 col-sm-6 bg-blue" data-aos="fade-up" data-aos-duration="750">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<p class="title">Small and Medium-Sized Enterprises (SMEs)</p>
					<p>Achieve growth with tailored websites and digital marketing services for small businesses.</p>
					<img src="{{ asset('theme') }}/assets/images/icons/SMEs.svg" class="brand-logo-one" alt="SMEs">
				</div>
			</div>
			<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
				<div class="work-process-card-three">
					<div class="number-title invisible ">02.</div>
					<p class="title">Startups</p>
					<p>Scale rapidly with advanced tech solutions for accelerated product development services for startups and marketing growth, ensuring sustainable success</p>
					<img src="{{ asset('theme') }}/assets/images/icons/rocket.svg" class="brand-logo-one" alt="Startups">
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 bg-blue" data-aos="fade-up" data-aos-duration="1250">
				<div class="work-process-card-three">
					<div class="number-title invisible ">03.</div>
					<p class="title">Digital Agencies</p>
					<p>Outsource complex projects and manage overflow with our dedicated development teams, ensuring efficiency, scalability, and on-time project delivery.</p>
					<img src="{{ asset('theme') }}/assets/images/icons/ads.svg" class="brand-logo-one" alt="Ads">
				</div>
			</div>
			<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1500">
				<div class="work-process-card-three">
					<div class="number-title invisible ">04.</div>
					<p class="title">Large Enterprises</p>
					<p>Leverage expert teams for scalable Java applications and enterprise solutions, ensuring robust performance, seamless integration, and long-term reliability.</p>
					<img src="{{ asset('theme') }}/assets/images/icons/enterprise.svg" class="brand-logo-one" alt="Large Enterprises">
				</div>
			</div>
			<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1750">
				<div class="work-process-card-three">
					<div class="number-title invisible ">05.</div>
					<p class="title">E-commerce Companies</p>
					<p>Create interactive platforms designed for e-commerce companies to boost collaboration, improve training, and increase engagement with dynamic content.</p>
					<img src="{{ asset('theme') }}/assets/images/icons/cart.svg" class="brand-logo-one" alt="cart">
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 bg-blue" data-aos="fade-up" data-aos-duration="2000">
				<div class="work-process-card-three">
					<div class="number-title invisible ">06.</div>
					<p class="title">Educational Institutions</p>
					<p>Create engaging learning platforms that foster collaboration, improve knowledge retention, and enhance education with interactive, user-friendly content.</p>
					<img src="{{ asset('theme') }}/assets/images/icons/elearning.svg" class="brand-logo-one" alt="Elearning">
				</div>
			</div>
			<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="2250">
				<div class="work-process-card-three">
					<div class="number-title invisible ">07.</div>
					<p class="title">Nonprofit Organizations</p>
					<p>Boost outreach and fundraising with affordable digital solutions services that enhance engagement, driving donor participation and support, leading to increased contributions.</p>
					<img src="{{ asset('theme') }}/assets/images/icons/care.svg" class="brand-logo-one" alt="engagement">
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 bg-blue" data-aos="fade-up" data-aos-duration="2500">
				<div class="work-process-card-three">
					<div class="number-title invisible ">08.</div>
					<p class="title">Tech & Software Companies</p>
					<p>chieve rapid growth with software development company teams tailored to your needs for efficient project execution & quality results, ensuring seamless scalability & innovation.</p>
					<img src="{{ asset('theme') }}/assets/images/icons/computer.svg" class="brand-logo-one" alt="computer">
				</div>
			</div>
			<div class="col-md-4 mt-4 text-center" data-aos="fade-up" data-aos-duration="2750">
				<a href="{{ url('/contact-us') }}" class="default-btn btn-bg-two border-radius-50">Contact Our Experts</a>
			</div>
		</div>
	</div>
</section>

<!-- Technologies Area -->
<div class="about-area pt-80 pb-80" data-aos="fade-up" data-aos-duration="750">
	<div class="container-fluid">
		<div class="row mx-auto">
			<div class="col-lg-12 text-center">
				<div class="about-content">
					<div class="section-title">
						<span class="sp-color2">Our Experties</span>
						<h2 class="w-50 mx-auto" title="Digital transformation Technologies to Power Your Next Big Move at JFS Technologies">Technologies to Power Your Next Big Move</h2>
					</div>

					<div class="choose-content mt-4">
                        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="frontend-tab" data-bs-toggle="pill" data-bs-target="#pills-front" type="button" role="tab" aria-controls="pills-front" aria-selected="true">Frontend</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="backend-tab" data-bs-toggle="pill" data-bs-target="#pills-back" type="button" role="tab" aria-controls="pills-back" aria-selected="false">Backend</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active expert-tech" id="pills-front" role="tabpanel" aria-labelledby="pills-home-tab">
                                <ul class="d-flex px-0">
									<li><img src="{{ asset('theme') }}/assets/technologies/css.png" alt="CSS"></li>
									<li><img src="{{ asset('theme') }}/assets/technologies/js.png" alt="JS"></li>
									<li><img src="{{ asset('theme') }}/assets/technologies/react_js.png" alt="ReactJs"></li>
									<li><img src="{{ asset('theme') }}/assets/technologies/angular_js.png" alt="AngularJs"></li>
									<li><img src="{{ asset('theme') }}/assets/technologies/next_js.png" alt="NextJs"></li>
									<li><img src="{{ asset('theme') }}/assets/technologies/vue_js.png" alt="VueJs"></li>
									<li><img src="{{ asset('theme') }}/assets/technologies/swift.png" alt="Swift"></li>
									<li><img src="{{ asset('theme') }}/assets/technologies/flutter.png" alt="Flutter"></li>
								</ul>
                            </div>
                            <div class="tab-pane fade expert-tech" id="pills-back" role="tabpanel" aria-labelledby="pills-profile-tab">
								<ul class="d-flex px-0">
									<li><img src="{{ asset('theme') }}/assets/technologies/laravel.png" alt="php Laravel"></li>
									<li><img src="{{ asset('theme') }}/assets/technologies/node_js.png" alt="Nodejs"></li>
									<li><img src="{{ asset('theme') }}/assets/technologies/php.png" alt="php"></li>
									<li><img src="{{ asset('theme') }}/assets/technologies/cpp.png" alt="C++"></li>
									<li><img src="{{ asset('theme') }}/assets/technologies/python.png" alt="Python"></li>
									<li><img src="{{ asset('theme') }}/assets/technologies/ror.png" alt="Ruby On Rails"></li>
									<li><img src="{{ asset('theme') }}/assets/technologies/java.png" alt="Java"></li>
									<li><img src="{{ asset('theme') }}/assets/technologies/dot-net.png" alt=".Net"></li>
								</ul>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Trust Us Area -->	
<div class="choose-area pt-80 pb-80 home" data-aos="fade-up" data-aos-duration="750">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-12">
				<div class="choose-content mr-20">
					<div class="section-title mb-5 text-center">
						<span class="sp-color1"></span>
						<h2>Why Choose JFS Technologies?</h2>
					</div>
					<div class="row">
						<div class="col-lg-3 col-6">
							<div class="choose-content-card">
								<div class="content">
									<img src="{{ asset('theme') }}/assets/images/icons/tailored-sol.png" alt="" width="90">
									<p class="title pt-3">Tailored Solutions</p>
								</div>
								<p>Each service is expertly tailored to meet your unique business challenges, objectives, and long-term growth and success goals.</p>
							</div>
						</div>
						<div class="col-lg-3 col-6">
							<div class="choose-content-card">
								<div class="content">
									<img src="{{ asset('theme') }}/assets/images/icons/nano.png" alt="" width="90">
									<p class="title pt-3">Technology Prowess</p>
								</div>
								<p>Our team brings deep expertise across diverse technologies, ensuring innovative, secure, scalable, and future-proof solutions.</p>
							</div>
						</div>
						<div class="col-lg-3 col-6">
							<div class="choose-content-card">
								<div class="content">
									<img src="{{ asset('theme') }}/assets/images/icons/market-share.png" alt="" width="90">
									<p class="title pt-3">Proven Track Record</p>
								</div>
								<p>We’ve helped numerous businesses transform their digital strategies, achieving significant and measurable growth.</p>
							</div>
						</div>
						<div class="col-lg-3 col-6">
							<div class="choose-content-card">
								<div class="content">
									<img src="{{ asset('theme') }}/assets/images/icons/gdp.png" alt="" width="90">
									<p class="title pt-3">Global Client Base</p>
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

<!-- Clientele Area -->
<div class="brand-area bg-light pt-80 pb-80" data-aos="fade-up" data-aos-duration="750">
	<div class="container">
		<div class="section-title text-center">
			<span class="sp-color2"></span>
			<p>Trusted by 1500+ happy clients, including some top fortune 500 companies</p>
		</div>
		<div class="brand-slider owl-carousel owl-theme pt-4">
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

	
<div class="call-us-area pt-80 pb-80">
	<div class="container">
		<div class="section-title text-center" data-aos="fade-up" data-aos-duration="500">
			<span class="sp-color1">Recognitions</span>
			<h2 class="text-white" title="Awards & Achievements of Digital transformation company">Awards & Achievements</h2>
		</div>
		<div class="row align-items-center justify-content-center pt-2">
			<div class="col-lg-2 col-6" data-aos="fade-up" data-aos-duration="750">
				<div class="work-process-card rounded">
					<img src="{{ asset('theme') }}/assets/images/it-firms.png" class="" alt="Best Data Driven Digital Transformation Services">
				</div>
			</div>
			<div class="col-lg-2 col-6" data-aos="fade-up" data-aos-duration="750">
				<div class="work-process-card rounded">
					<img src="{{ asset('theme') }}/assets/images/top-dev.png" class="" alt="Best Data Driven Digital Transformation Services">
				</div>
			</div>
			<div class="col-lg-2 col-6" data-aos="fade-up" data-aos-duration="750">
				<div class="work-process-card rounded">
					<img src="{{ asset('theme') }}/assets/images/soft-sug.png" class="" alt="Best Data Driven Digital Transformation Services">
				</div>
			</div>
			<div class="col-lg-2 col-6" data-aos="fade-up" data-aos-duration="750">
				<div class="work-process-card rounded">
					<img src="{{ asset('theme') }}/assets/images/top-seo.png" class="" alt="Top Seo Company">
				</div>
			</div>
			<div class="col-lg-2 col-6" data-aos="fade-up" data-aos-duration="750">
				<div class="work-process-card rounded">
					<img src="{{ asset('theme') }}/assets/images/clutch1.png" class="" alt="TOP SMM Company">
				</div>
			</div>
			<div class="col-lg-2 col-6" data-aos="fade-up" data-aos-duration="750">
				<div class="work-process-card rounded">
					<img src="{{ asset('theme') }}/assets/images/bcs.png" class="" alt="Software World - Best Customer Support">
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Let's Build Area -->
<div class="case-study-area pt-80 pb-60" data-aos="fade-up" data-aos-duration="750">
	<div class="container-fluid p-0">
		<div class="section-title text-center">
			<span class="sp-color2">Success Stories</span>
			<h2 title="Driving Success for clients with Digital Transformation services of JFS Technologies">Driving Success for Our Clients</h2>
			<p class="w-50 mx-auto">See how we’ve helped businesses achieve their digital goals:</p>
		</div>
		<div class="case-study-slider owl-carousel owl-theme pt-45">
			<div class="case-study-item">
				<a href="{{ url('/success-stories') }}">
					<!-- <img src="{{ asset('theme') }}/assets/images/case-study/case-study1.jpg" alt="Images"> -->
					<img src="https://img.freepik.com/premium-photo/ecommerce-market-shopping-online-vector-illustration_1121250-166764.jpg" alt="Best Data Driven Digital Transformation Services">
				</a>
				<div class="content">
					<a href="{{ url('/success-stories') }}">E-Commerce Platform UI/UX Redesign</a>
					<a href="{{ url('/success-stories') }}" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
				</div>
			</div>
			<div class="case-study-item">
				<a href="{{ url('/success-stories') }}">
					<!-- <img src="{{ asset('theme') }}/assets/images/case-study/case-study1.jpg" alt="Images"> -->
					<img src="https://img.freepik.com/free-photo/man-designing-websites-high-angle_23-2149930945.jpg?t=st=1733395227~exp=1733398827~hmac=58abe747fe9042ef67ce04b577ededb45f4d93fa689081079ed2a842bd37b700" alt="Best Data Driven Digital Transformation Services">
				</a>
				<div class="content">
					<a href="{{ url('/success-stories') }}">Mobile App UX Optimization</a>
					<a href="{{ url('/success-stories') }}" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
				</div>
			</div>
			<div class="case-study-item">
				<a href="{{ url('/success-stories') }}">
					<!-- <img src="{{ asset('theme') }}/assets/images/case-study/case-study1.jpg" alt="Images"> -->
					<img src="https://img.freepik.com/free-photo/neon-hologram-tiger_23-2151558738.jpg?t=st=1733395368~exp=1733398968~hmac=4b5fb495db5f47616159f02bc9725ea07a4f9ebd14fa0df005030a92e916e1cd" alt="Best Data Driven Digital Transformation Services">
				</a>
				<div class="content">
					<a href="{{ url('/success-stories') }}">3D Visualization for a Product Launch</a>
					<a href="{{ url('/success-stories') }}" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
				</div>
			</div>
			<div class="case-study-item">
				<a href="{{ url('/success-stories') }}">
					<!-- <img src="{{ asset('theme') }}/assets/images/case-study/case-study3.jpg" alt="Images"> -->
					<img src="https://img.freepik.com/free-vector/cloud-storage-realistic-composition-with-digital-elements-bright-lights-city_1284-26975.jpg?t=st=1733398978~exp=1733402578~hmac=fe1634140eb1b7b4fb612119759994de86cad40c5c362a872ec8521ae6dada4a" alt="Best Data Driven Digital Transformation Services">
				</a>
				<div class="content">
					<a href="{{ url('/success-stories') }}">Secure Cloud Migration</a>
					<a href="{{ url('/success-stories') }}" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Testimonials Area -->
<section class="clients-area pt-80 pb-70" data-aos="fade-up" data-aos-duration="750">
	<div class="container">
		<div class="section-title text-center">
			<span class="sp-color1">Testimonials</span>
			<h2 titles="What Our Clients Say about JFS Technologies">What Our Clients Say</h2>
		</div>
		<div class="clients-slider owl-carousel owl-theme pt-45">
			<div class="clients-content">
				<p>“Through JFS Technologies' account management service, our business has thrived. Their expertise & commitment have made a remarkable difference. Their holistic approach & unwavering commitment have been instrumental. I highly recommend their services!”</p>
				<div class="content">
					<i class="bx bxs-quote-alt-left"></i>
					<p class="title">Thomas Paul</p>
					<span>Sr. Developer @ APISDOR</span>
				</div>
			</div>
			<div class="clients-content">
				<p>“Partnering with JFS Technologies has revolutionized our business. Their strategic insight and unwavering dedication have driven a significant surge in our sales. They possess a deep understanding of our needs, consistently deliver results, and truly invest in our success.”</p>
				<div class="content">
					<i class="bx bxs-quote-alt-left"></i>
					<p class="title">Dan Fitzpatrick</p>
					<span>President @ KRIXI</span>
				</div>
			</div>
			<div class="clients-content">
				<p>“Because of JFS Technologies' best data-driven digital transformation services, our business has experienced tremendous growth and expanded its reach. Their holistic approach and unwavering commitment have been truly instrumental. I highly recommend their outstanding services!”</p>
				<div class="content">
					<i class="bx bxs-quote-alt-left"></i>
					<p class="title">Anand Katti</p>
					<span>COO @ Shyena Techyarns</span>
				</div>
			</div>
		</div>
	</div>
</section>


<div class="blog-area pt-80 pb-80" data-aos="fade-up" data-aos-duration="750">
	<div class="container">
		<div class="section-title text-center">
			<span class="sp-color2">Latest Blog</span>
			<h2 title="Latest blog from JFS Technologies">Let’s Check Some Latest Blog</h2>
		</div>
		<div class="row pt-45">
			<div class="col-lg-4 col-md-6">
				<div class="blog-card">
					<div class="blog-img">
						<a href="https://jfstechnologies.com/blog/top-seo-tools-to-boost-your-website-visibility-in-2024/">
							<img src="{{ asset('theme') }}/assets/images/blog-1.png" alt="Best Data Driven Digital Transformation Services">
						</a>
						<div class="blog-tag">
							<h3>18</h3>
							<span>Sept</span>
						</div>
					</div>
					<div class="content">
						<a class="blog-title">Top SEO Tools to Boost Your Website Visibility in 2024</a>
						<p>Digital marketing is an area that changes all the time, so it’s important for businesses to stay ahead of the curve. Search Engine Optimization (SEO) is still a key part of doing...</p>
						<a href="https://jfstechnologies.com/blog/top-seo-tools-to-boost-your-website-visibility-in-2024/" class="read-btn">Read More <i class="bx bx-chevron-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="blog-card">
					<div class="blog-img">
						<a href="https://jfstechnologies.com/blog/how-to-choose-the-best-free-client-management-software-for-your-needs/">
							<img src="{{ asset('theme') }}/assets/images/blog-2.png" alt="Best Data Driven Digital Transformation Services">
						</a>
						<div class="blog-tag">
							<h3>21</h3>
							<span>Aug</span>
							</div>
						</div>
						<div class="content">
							<a class="blog-title">How to Choose the Best Free Client Management Software for Your Needs</a>
							<p>In today’s competitive business landscape, managing client relationships effectively is crucial for success.</p>
							<a href="https://jfstechnologies.com/blog/how-to-choose-the-best-free-client-management-software-for-your-needs/" class="read-btn">Read More <i class="bx bx-chevron-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
					<div class="blog-card">
						<div class="blog-img">
							<a href="https://jfstechnologies.com/blog/why-every-business-needs-a-digital-marketing-agency/">
								<img src="{{ asset('theme') }}/assets/images/blog-3.png" alt="Best Data Driven Digital Transformation Services">
							</a>
							<div class="blog-tag">
								<h3>31</h3>
								<span>Jul</span>
							</div>
						</div>
						<div class="content">
						<a class="blog-title">Why Every Business Needs a Digital Marketing Agency</a>
						<p>In today’s fast-paced digital landscape Why Every Business Needs a Digital Marketing Agency, staying ahead of the competition requires more than just a great product.</p>
						<a href="https://jfstechnologies.com/blog/why-every-business-needs-a-digital-marketing-agency/" class="read-btn">Read More <i class="bx bx-chevron-right"></i></a>
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