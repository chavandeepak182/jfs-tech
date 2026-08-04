@extends('frontend.layouts.header')
@section('title', "Digital Transformation Services & AI Solutions | JFS Technologies")
@section('description',"Transform your business with AI-powered digital transformation, software development, DevOps, digital marketing, and technology solutions from JFS Technologies.")
@section('keywords', "Digital Transformation Services,Digital Transformation Company, AI Development Services, Software Development Company, Digital Marketing Services, Application Modernization Services, DevOps Services, Resource Augmentation Services, Data Science Services")
@section('canonical')
<link rel="canonical" href="https://jfstechnologies.com/" />
<meta name="robots" content="index, follow">
@endsection
@section('schema')

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "https://jfstechnologies.com/"
    }
  ]
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
  "@context":"https://schema.org",
  "@type":"FAQPage",
  "mainEntity":[
    {
      "@type":"Question",
      "name":"What services does JFS Technologies provide?",
      "acceptedAnswer":{
        "@type":"Answer",
        "text":"JFS Technologies provides Digital Transformation, Digital Experience, Resource Augmentation, Custom Software Development, Web Development, Mobile App Development, Cloud Solutions, DevOps, UI/UX Design, and technology consulting services. Our solutions help businesses improve operational efficiency, accelerate innovation, and achieve sustainable digital growth."
      }
    },
    {
      "@type":"Question",
      "name":"Which industries does JFS Technologies serve?",
      "acceptedAnswer":{
        "@type":"Answer",
        "text":"JFS Technologies delivers technology solutions for startups, SMEs, and enterprises across healthcare, finance, logistics, manufacturing, retail, education, real estate, travel, and SaaS industries. Every solution is customized to meet industry-specific business challenges and digital transformation goals."
      }
    },
    {
      "@type":"Question",
      "name":"Why should businesses choose JFS Technologies?",
      "acceptedAnswer":{
        "@type":"Answer",
        "text":"Businesses choose JFS Technologies for its expertise in modern software development, cloud technologies, AI-driven solutions, agile methodologies, and user-centric design. Our team focuses on building scalable, secure, and future-ready digital solutions that deliver measurable business value."
      }
    },
    {
      "@type":"Question",
      "name":"Does JFS Technologies develop custom software?",
      "acceptedAnswer":{
        "@type":"Answer",
        "text":"Yes. JFS Technologies designs and develops custom software solutions, enterprise applications, SaaS platforms, customer portals, mobile applications, and business automation systems tailored to unique business requirements."
      }
    },
    {
      "@type":"Question",
      "name":"Can I hire dedicated developers from JFS Technologies?",
      "acceptedAnswer":{
        "@type":"Answer",
        "text":"Yes. JFS Technologies offers flexible Resource Augmentation services, allowing businesses to hire dedicated Frontend Developers, Backend Developers, Full Stack Developers, Mobile App Developers, UI/UX Designers, QA Engineers, DevOps Engineers, and cloud specialists."
      }
    },
    {
      "@type":"Question",
      "name":"How do I start a project with JFS Technologies?",
      "acceptedAnswer":{
        "@type":"Answer",
        "text":"You can contact JFS Technologies through our website to schedule a consultation. Our experts will understand your business objectives, recommend the right technology solution, define the project scope, and provide a tailored implementation roadmap."
      }
    }
  ]
}
</script>
@endsection

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Banner Area -->
<div class="banner-area" style="background-image: url('{{ asset('theme') }}/assets/images/hero.webp');">
    <div class="container">
        <div class="banner-item-content">
            <h1>From Legacy to Leading Edge – End-to-End Digital Transformation Services</h1>
            <p>Empowering enterprises with innovative <a href="{{ url('/services') }}"><strong>Best Data-Driven Digital Transformation Services</strong></a>, seamless digital experiences, and tailored strategies that drive growth and innovation.</p>
            <div class="banner-btn">
                <a href="{{ url('/contact-us') }}">Contact Our Expert <i class="bx bx-chevron-right"></i></a>
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
						<p class="mx-auto pt-3">JFS Technologies is a leading <a href="{{ url('/services/digital-transformation-services') }}">digital transformation company</a>, providing end-to-end technology solutions for startups, SMEs, enterprises, and digital agencies. Our expertise includes AI development, custom software development, website development, mobile app development, cloud solutions, DevOps services, UI/UX design, digital marketing, and dedicated development teams. We help businesses automate processes, modernize systems, improve customer experiences, and scale with secure, innovative, and future-ready digital solutions. 

                       <a href="{{ url('/services/infrastructure-management-services') }}">Cloud services in Infrastructure management</a> and AI-driven data analytics, we help organizations streamline operations, boost engagement, and scale efficiently. Our global team of experts works alongside you to unlock your business’s true potential, driving growth with secure, scalable, and high-performing solutions.</p>
						<p class="mx-auto pt-3">Our global team of experts collaborates with you to unlock your business’s true potential by driving growth through secure, scalable, and high-performing solutions. As a leading provider of <a href="{{ url('/services/devops-software-development') }}">DevOps cybersecurity services</a>, <a href="{{ url('/services/ci-cd-pipeline-deployment') }}">CI/CD performance testing</a>, and software development company services, we stay ahead of industry trends to deliver future-ready strategies tailored to your business's unique challenges.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="about-content ml-25" data-aos="fade-down" data-aos-duration="700">
					<div class="section-title text-center">
						<img src="{{ asset('theme') }}/assets/images/stats.webp" loading="lazy" width="800" height="600" alt="Impact in numbers">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<section class="video bg-dark">
    <video preload="metadata" autoplay muted loop playsinline poster="{{ asset('theme/assets/images/video-poster.webp') }}">
        <source src="{{ asset('theme/assets/images/intro-1.mp4') }}" type="video/mp4">
    </video>
</section>

<div class="case-study-area pt-80 pb-80">
    <div class="container">
        <div class="section-title text-center" data-aos="fade-up" data-aos-duration="750">
            <span class="sp-color2">Our Approach</span>
            <h2 class="pb-5">How We Work</h2>

            <picture>
                <!-- Mobile Image -->
                <source media="(max-width: 767px)" srcset="{{ asset('theme') }}/assets/images/team/home_step_final_2.webp">

                <!-- Desktop Image -->
                <img src="{{ asset('theme') }}/assets/images/team/home_step_final_1.webp"
                     alt="How We Work"
                     class="img-fluid">
            </picture>

        </div>
    </div>
</div>
<style>
	.section-title picture img{
    width: 100%;
    max-width: 100%;
    height: auto;
    display: block;
    margin: 0 auto;
}
</style>

<!-- Service Area -->
<!-- <section class="services-area-two pt-80 pb-80">
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
</section> -->

<section class="services-process py-5">
    <div class="container">

         <div class="section-title text-center mb-5">
            <span class="sp-color2">What We Do</span>
            <h2 title="Latest Articles from JFS Technologies">
                Our Best Data Driven Digital Transformation Services
            </h2>
			<p class="mt-3">
                We deliver immersive, user-centric experiences designed to help your business thrive by leveraging technology to its fullest potential.
            </p>
        </div>

       <div class="row gx-5 gy-5 justify-content-center">

            <!-- Card 1 -->
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="service-box blue">

                    <div class="service-card">

                        <img src="{{ asset('theme/assets/images/transform-1.jpg') }}" alt="Digital Transformation">

                        <div class="card-content">
                            <h3>Digital Transformation</h3>

                            <p>
                                Empowering businesses with next-gen digital transformation and software solutions.
                            </p>

                            <a href="{{ url('/services/digital-transformation-services') }}" class="know-more-btn">
                                Know More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>

                    </div>

                    <span class="number">01</span>

                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="service-box cyan">

                    <div class="service-card">

                        <img src="{{ asset('theme/assets/images/experience-1.jpg') }}" alt="Digital Experience">

                        <div class="card-content">
                            <h3>Digital Experience</h3>

                            <p>
                                Connect your brand, positioning us among the top digital marketing companies for businesses.
                            </p>

                            <a href="{{ url('/services/digital-experience') }}" class="know-more-btn">
                                Know More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>

                    </div>

                    <span class="number">02</span>

                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="service-box purple">

                    <div class="service-card">

                        <img src="{{ asset('theme/assets/images/devops-1.jpg') }}" alt="DevOps">

                        <div class="card-content">
                            <h3>DevOps Services</h3>

                            <p>
                                Accelerating your SDLC with streamlined processes through expert DevOps & Cybersecurity services.
                            </p>

                            <a href="{{ url('/services/devops-software-development') }}" class="know-more-btn">
                                Know More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>

                    </div>

                    <span class="number">03</span>

                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="service-box pink">

                    <div class="service-card">

                        <img src="{{ asset('theme/assets/images/resource-1.jpg') }}" alt="Resource Augmentation">

                        <div class="card-content">
                            <h3>Resource Augmentation</h3>

                            <p>
                                Offering Resource Augmentation for digital transformation who integrate.
                            </p>

                            <a href="{{ url('/services/resource-augmentation-services') }}" class="know-more-btn">
                                Know More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>

                    </div>

                    <span class="number">04</span>

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


<section class="jfs-choose-section pt-80 pb-80">
    <div class="container">

         <div class="section-title text-center mb-5">
            <span class="sp-color2">Why Choose Us</span>
            <h2 title="Latest Articles from JFS Technologies">
                Why Businesses Choose JFS Technologies
            </h2>
        </div>

        <div class="row align-items-center">

            <!-- Left Image -->
            <div class="col-lg-5">
                <div class="choose-image">
                    <img src="{{ asset('theme') }}/assets/images/team/why_choose.jpeg" loading="lazy" width="800" height="600" alt="why choose">
                </div>
            </div>

            <!-- Right Features -->
            <div class="col-lg-7">

                <div class="feature-grid">

                    <div class="feature-item">
                        <!-- <div class="number">01</div> -->
                        <div>
                            <h4>Custom-built Solutions</h4>
                            <p>Tailored software crafted around your business goals.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <!-- <div class="number">02</div> -->
                        <div>
                            <h4>Agile Delivery</h4>
                            <p>Rapid development with continuous improvements.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <!-- <div class="number">03</div> -->
                        <div>
                            <h4>AI-first Approach</h4>
                            <p>Smart automation powered by Artificial Intelligence.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <!-- <div class="number">04</div> -->
                        <div>
                            <h4>Transparent Communication</h4>
                            <p>Complete project visibility and regular updates.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <!-- <div class="number">05</div> -->
                        <div>
                            <h4>Enterprise-grade Security</h4>
                            <p>Secure, scalable and reliable digital solutions.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <!-- <div class="number">06</div> -->
                        <div>
                            <h4>Dedicated Support</h4>
                            <p>Reliable support before, during and after delivery.</p>
                        </div>
                    </div>
					

                </div>

            </div>

        </div>

    </div>
</section>
<style>
	.jfs-choose-section{
    background:#fff;
}

.choose-image img{
    width:100%;
    border-radius:20px;
    box-shadow:0 20px 60px rgba(0,0,0,.12);
}

.feature-grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:25px;
}

.feature-item{
    display:flex;
    gap:20px;
    padding:25px;
    border-left:4px solid #0d6efd;
    background:#f8fbff;
    transition:.4s;
}

.feature-item:hover{
    background:#0d6efd;
    transform:translateY(-8px);
}

.feature-item:hover h4,
.feature-item:hover p,
.feature-item:hover .number{
    color:#fff;
}

.number{
    font-size:34px;
    font-weight:800;
    color:#0d6efd;
    min-width:60px;
}

.feature-item h4{
    font-size:20px;
    margin-bottom:10px;
    font-weight:700;
}

.feature-item p{
    margin:0;
    color:#666;
    line-height:1.7;
}

@media(max-width:991px){

.feature-grid{
    grid-template-columns:1fr;
    margin-top:40px;
}

}
</style>
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
					<img src="{{ asset('theme/assets/images/case-study/e-commerce-platform.avif') }}" alt="E-Commerce Platform UI/UX Redesign">
				</a>
				<div class="content">
					<a href="{{ url('/success-stories') }}">E-Commerce Platform UI/UX Redesign</a>
					<a href="{{ url('/success-stories') }}" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
				</div>
			</div>
			<div class="case-study-item">
				<a href="{{ url('/success-stories') }}">
					<!-- <img src="{{ asset('theme') }}/assets/images/case-study/case-study1.jpg" alt="Images"> -->
					<img src="{{ asset('theme/assets/images/case-study/mobile-app.avif') }}" alt="Mobile App UX Optimization">
				</a>
				<div class="content">
					<a href="{{ url('/success-stories') }}">Mobile App UX Optimization</a>
					<a href="{{ url('/success-stories') }}" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
				</div>
			</div>
			<div class="case-study-item">
				<a href="{{ url('/success-stories') }}">
                    <img src="{{ asset('theme/assets/images/case-study/3d-vis.avif') }}" alt="3D Visualization for a Product Launch">
				</a>
				<div class="content">
					<a href="{{ url('/success-stories') }}">3D Visualization for a Product Launch</a>
					<a href="{{ url('/success-stories') }}" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
				</div>
			</div>
			<div class="case-study-item">
				<a href="{{ url('/success-stories') }}">
                    <img src="{{ asset('theme/assets/images/case-study/secure-cloud.avif') }}" alt="Secure Cloud Migration">
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


<section class="blog-area pt-80 pb-80" data-aos="fade-up" data-aos-duration="750">
    <div class="container">

        <div class="section-title text-center mb-5">
            <span class="sp-color2">Latest Blog</span>
            <h2 title="Latest Articles from JFS Technologies">
                Latest Articles from Our Engineering Team
            </h2>
        </div>

        <div class="row g-4">

            <!-- Blog 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card h-100">

                    <div class="blog-img">
                        <a href="https://jfstechnologies.com/blog/why-every-business-needs-a-digital-marketing-agency/" target="_blank">
                           <img src="{{ asset('theme') }}/assets/images/blog-3.png"
                                alt="Custom Software Development vs SaaS">
                        </a>

                        <div class="blog-tag">
                            <h3>31</h3>
                            <span>Jul</span>
                        </div>
                    </div>

                    <div class="content">

                        <h3 class="blog-title">
                            <a href="https://jfstechnologies.com/blog/why-every-business-needs-a-digital-marketing-agency/" target="_blank">
                                Why Every Business Needs a Digital Marketing Agency
                            </a>
                        </h3>

                        <p>
                            Discover why partnering with a digital marketing agency helps businesses
                            improve online visibility, generate quality leads.
                        </p>

                        <a href="https://jfstechnologies.com/blog/why-every-business-needs-a-digital-marketing-agency/" class="read-btn" target="_blank">
                            Read More
                            <i class="bx bx-chevron-right"></i>
                        </a>

                    </div>

                </div>
            </div>

            <!-- Blog 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card h-100">

                    <div class="blog-img">
                        <a href="https://jfstechnologies.com/blog/how-to-choose-the-best-free-client-management-software-for-your-needs/" target="_blank">
                            <img src="{{ asset('theme') }}/assets/images/blog-2.png"
                                alt="How to Choose the Best Free Client Management Software">
                        </a>

                        <div class="blog-tag">
                            <h3>21</h3>
                            <span>Aug</span>
                        </div>
                    </div>

                    <div class="content">

                        <h3 class="blog-title">
                            <a href="https://jfstechnologies.com/blog/how-to-choose-the-best-free-client-management-software-for-your-needs/" target="_blank">
                                How to Choose the Best Free Client Management Software
                            </a>
                        </h3>

                        <p>
                            Learn how to select the right client management software that improves
                            customer relationships, productivity, and business growth.
                        </p>

                        <a href="https://jfstechnologies.com/blog/how-to-choose-the-best-free-client-management-software-for-your-needs/" class="read-btn" target="_blank">
                            Read More
                            <i class="bx bx-chevron-right"></i>
                        </a>

                    </div>

                </div>
            </div>

            <!-- Blog 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card h-100">

                    <div class="blog-img">
                        <a href="https://jfstechnologies.com/blog/why-every-business-needs-a-digital-marketing-agency/" target="_blank">
                            <img src="{{ asset('theme') }}/assets/images/blog-4.png"
                                alt="Custom Software Development vs SaaS">
                        </a>

                        <div class="blog-tag">
                            <h3>29</h3>
                            <span>Jul</span>
                        </div>
                    </div>

                    <div class="content">

                        <h3 class="blog-title">
                            <a href="https://jfstechnologies.com/blogs/custom-software-development-vs-saas" target="_blank">
                                Custom Software Development vs SaaS: Which One is Right for Your Business?
                            </a>
                        </h3>

                        <p>
                            Compare custom software development and SaaS solutions to determine
                            
                        </p>

                        <a href="https://jfstechnologies.com/blogs/custom-software-development-vs-saas" class="read-btn" target="_blank">
                            Read More
                            <i class="bx bx-chevron-right"></i>
                        </a>

                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

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