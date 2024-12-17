@extends('frontend.layouts.header')
@section('title', "Containers &amp; Microservices Services - JFS Technologies")
@section('description', "Elevate your online presence with our Digital marketing company services. Drive growth and engagement with tailored strategies.")
@section('keywords', "IT Services, Account Management services, Digital marketing services, Website Design company, Website design services, End to end sales, outsourcing, Affordable digital marketing services, Website marketing services, SEO service agency, Social media marketing, SEO company for business")

@section('content')

<div id="banner" class="inner-banner">
    <div class="container">
        <div class="inner-title w-75" data-aos="fade-right" data-aos-offset="500" data-aos-easing="ease-in-sine">
            <h1>Efficient, Scalable Solutions with Microservices Architecture</h1>
            <p class="text-white"></p>
            <div class="banner-btn">
				<a href="#service-sec" class="default-btn btn-bg-one border-radius-50">Explore Our Solutions <i class="bx bx-chevron-right"></i></a>
			</div>
        </div>
    </div>
    
    <video id="videobcg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
        <source src="../theme/assets/images/containers-micro.mp4" type="video/mp4">
        <source src="movie.webm" type="video/webm">Sorry, your browser does not support HTML5 video.
    </video>
</div>


<div class="about-area pt-5">
    <div class="container">
        <div class="row align-items-center justify-content-center" data-aos="fade-up" data-aos-duration="750">
            <div class="col-lg-6">
                <div class="about-play p-3">
                    <img src="{{ asset('theme') }}/assets/images/cam-intro.png" alt="About Images">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content ml-25">
                	<div class="section-title">
						<span class="sp-color2">Microservices in Motion</span>
						<h2>Scale with Containers</h2>
						<p>In today’s fast-paced software world, agility & scalability are essential. At <b>JFS Technologies</b>, we leverage Containers and Microservices to transform application development, deployment & management, enabling modularity, flexibility & seamless scaling.</p>
                        <h3 class="pt-4">Why Containers and Microservices?</h3>
						<p>Containers package applications and dependencies into portable units that run consistently across environments. Microservices break monolithic apps into modular components, simplifying development, deployment, and maintenance. Together, they empower businesses to:</p>
                        <ul>
                            <li>Enhance scalability and flexibility.</li>
                            <li>Improve fault isolation and resilience.</li>
                            <li>Accelerate software delivery cycles.</li>
                            <li>Simplify the management of complex systems.</li>
                        </ul>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>


<section class="services-style-area home_cards pt-80 pb-70" id="service-sec">
	<div class="container">
		<div class="section-title text-center" data-aos="fade-up" data-aos-duration="500">
			<span class="sp-color2">Build Faster, Scale Smarter</span>
			<h2>Containers + Microservices = Endless Possibilities</h2>
			<p class="margin-auto">We are specialists in leveraging containers and microservices to enhance your software development and deployment strategies. Containers streamline application packaging and deployment, while microservices architecture simplifies complex applications into manageable components. Together, these technologies offer scalability, flexibility, and resilience for your software projects. Our experienced team has a wealth of knowledge in designing, implementing, and managing containers & microservices for various applications.</p>
		</div>
		<div class="row pt-45" data-aos="fade-up" data-aos-duration="750">
            <h2 class="pb-3">Our Containers Services:</h2>
			<div class="col-lg-3 col-sm-6">
                <div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Docker</h3>
					<p>Package and deploy applications seamlessly with Docker, one of the most popular containerization platforms, ensuring portability and consistency across environments.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/docker.svg" class="brand-logo-one" alt="computer">
				</div>
			</div>
            <div class="col-lg-3 col-sm-6">
                <div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Podman</h3>
					<p>Podman is a container engine that provides a secure and fully-featured alternative to Docker, supporting container creation, management, orchestration, and networking.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/podman.svg" class="brand-logo-one" alt="computer">
				</div>
			</div>
            <div class="col-lg-3 col-sm-6">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Kubernetes</h3>
					<p>Kubernetes is an open-source container orchestration platform that automates the deployment, scaling, and management of containerized applications across clusters of nodes.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/kubernetes.svg" class="brand-logo-one" alt="computer">
				</div>
			</div>
            <div class="col-lg-3 col-sm-6">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>LXC/LXD</h3>
					<p>LXC (Linux Containers) and LXD are system container technologies that enable the secure isolation of applications at the operating system level, providing lightweight virtualization.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/lxc-lxd.svg" class="brand-logo-one" alt="computer">
				</div>
			</div>
            <h2 class="pt-3 pb-3">Our Microservices Services:</h2>
            <div class="col-lg-3 col-sm-6">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Spring Boot</h3>
					<p>Spring Boot is a Java-based framework that simplifies the development of microservices by providing a robust set of tools and libraries for building, deploying, and scaling applications.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/spring-boot.svg" class="brand-logo-one" alt="computer">
				</div>
			</div>
            <div class="col-lg-3 col-sm-6">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Node.js</h3>
					<p>Node.js is a powerful JavaScript runtime environment that is commonly used for building lightweight and fast microservices, leveraging a non-blocking, event-driven architecture.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/node-js.svg" class="brand-logo-one" alt="computer">
				</div>
			</div>
            <div class="col-lg-3 col-sm-6">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>.NET Core</h3>
					<p>.NET Core is a cross-platform framework that supports the creation of microservices using C# and ASP.NET, enabling developers to build scalable and high-performance applications.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/dotnet-core.svg" class="brand-logo-one" alt="computer">
				</div>
			</div>
            <div class="col-lg-3 col-sm-6">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Flask</h3>
					<p>Flask is a lightweight Python web framework that is well-suited for developing microservices, offering simplicity and flexibility for building RESTful APIs and web services.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/flask.svg" class="brand-logo-one" alt="computer">
				</div>
			</div>
		</div>
	</div>
</section>


<div class="choose-area pt-100 pb-70 home">
	<div class="container">
		<div class="row justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="750">
			<div class="col-lg-12">
				<div class="choose-content mr-20">
					<div class="section-title mb-3">
						<span class="sp-color1">We Are The Best!!</span>
						<h2>Key Benefits of Containers &amp; Microservices</h2>
					</div>
					<div class="row">
						<div class="col-lg-3 col-6">
							<div class="choose-content-card">
								<div class="content">
                                    <i class="fal fa-sync"></i>
									<h3>Agility</h3>
								</div>
								<p>Adapt quickly to changing business needs, market demands, and emerging opportunities.</p>
							</div>
						</div>
						<div class="col-lg-3 col-6">
							<div class="choose-content-card">
								<div class="content">
                                    <i class="fal fa-balance-scale"></i>
									<h3>Scalability</h3>
								</div>
								<p>Scale individual components of your application effortlessly & seamlessly across environments.</p>
							</div>
						</div>
						<div class="col-lg-3 col-6">
							<div class="choose-content-card">
								<div class="content">
                                    <i class="fal fa-stream"></i>
									<h3>Resilience</h3>
								</div>
								<p>Isolate faults effectively to prevent system-wide failures and ensure continuous operation.</p>
							</div>
						</div>
						<div class="col-lg-3 col-6">
							<div class="choose-content-card">
								<div class="content">
                                    <i class="fal fa-tasks"></i>
									<h3>Efficiency</h3>
								</div>
								<p>Optimize resource utilization, enhance performance, and simplify system management for greater efficiency.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="case-study-area ptb-100">
    <div class="container">
        <div class="section-title text-center" data-aos="fade-up" data-aos-duration="750">
            <span class="sp-color2">Our Impact</span>
            <h2>Industries We Serve</h2>
            <p class="pb-5">Our Process Automation solutions cater to diverse industries, including:</p>
			<img src="{{ asset('theme') }}/assets/images/cont-micro-indus.png" alt="Images">
        </div>
	</div>
</div>


<div class="case-study-area pt-3 pb-70">
    <div class="container" data-aos="fade-up" data-aos-duration="750">
        <div class="section-title text-center">
            <span class="sp-color2">Success Stories</span>
            <h2>Client Milestones Achieved</h2>
        </div>
        <div class="row pt-45">
            <div class="col-lg-3 col-md-6">
                <div class="case-study-item">
                    <a href="#">
                        <!-- <img src="{{ asset('theme') }}/assets/images/case-study/case-study1.jpg" alt="Images"> -->
						<img src="https://img.freepik.com/premium-photo/ecommerce-market-shopping-online-vector-illustration_1121250-166764.jpg" alt="Images">
                    </a>
                    <div class="content">
                        <h3><a href="#">E-Commerce Platform UI/UX Redesign</a></h3>
                        <a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="case-study-item">
                    <a href="#">
                        <!-- <img src="{{ asset('theme') }}/assets/images/case-study/case-study1.jpg" alt="Images"> -->
						<img src="https://img.freepik.com/free-photo/man-designing-websites-high-angle_23-2149930945.jpg?t=st=1733395227~exp=1733398827~hmac=58abe747fe9042ef67ce04b577ededb45f4d93fa689081079ed2a842bd37b700" alt="Images">
                    </a>
                    <div class="content">
                        <h3><a href="#">Mobile App UX Optimization</a></h3>
						<a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="case-study-item">
                    <a href="#">
                        <!-- <img src="{{ asset('theme') }}/assets/images/case-study/case-study1.jpg" alt="Images"> -->
						<img src="https://img.freepik.com/free-photo/neon-hologram-tiger_23-2151558738.jpg?t=st=1733395368~exp=1733398968~hmac=4b5fb495db5f47616159f02bc9725ea07a4f9ebd14fa0df005030a92e916e1cd" alt="Images">
                    </a>
                    <div class="content">
                        <h3><a href="#">3D Visualization for a Product Launch</a></h3>
                        <a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                    </div>
                </div>
            </div>
			<div class="col-lg-3 col-md-6">
                <div class="case-study-item">
                    <a href="#">
                        <!-- <img src="{{ asset('theme') }}/assets/images/case-study/case-study1.jpg" alt="Images"> -->
						<img src="https://img.freepik.com/free-photo/online-shopping-concept_23-2151896852.jpg?t=st=1733395434~exp=1733399034~hmac=a8aca7bbd7f4511c0db661d0526f3422d7c5f3653ef53822a6dbcc4349d98db0" alt="Images">
                    </a>
                    <div class="content">
                        <h3><a href="#">3D Visualization for a Product Launch</a></h3>
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


<div class="about-area about-bg2 pt-5 pb-3">
    <div class="container-fluid">
        <div class="row align-items-center" data-aos="fade-up" data-aos-duration="750">
            <div class="col-lg-6">
                <div class="about-img-4">
                    <img src="{{ asset('theme') }}/assets/images/modern-cta.png" alt="About Images">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content-3 ml-20">
                    <div class="section-title">
                        <span class="sp-color1">Partner Up With Us</span>
                        <h2>Microservices for Fast, Scalable Applications</h2>
                        <p>Unlock the potential of modern application development with JFS Technologies’ Containers and Microservices services. Whether you’re modernizing existing systems or building from scratch, we’ll help you achieve faster delivery, improved scalability, and enhanced resilience.</p>
                        <ul class="text-white pt-3">
                            <li>Assessment: Evaluate existing systems to identify opportunities for containerization and microservices adoption.</li>
                            <li>Design: Develop a customized architecture tailored to your business needs, ensuring modularity and scalability.</li>
                            <li>Implementation: Containerize applications, integrate orchestration tools like Kubernetes, and deploy microservices for optimized performance.</li>
                            <li>Management: Provide ongoing monitoring, optimization, and support to maintain system reliability and performance.</li>
                        </ul>
                    </div>
                    <a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-5 py-3">Let’s Start Today!</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="brand-area ptb-100">
    <div class="container">
        <div class="row justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="750">
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
                                            What are containers, and why use them?
                                        </a>
                                        <div class="accordion-content show">
                                            <p>Containers are portable packages that include everything needed to run software, ensuring consistency across environments. They streamline development and deployment, making it easier to manage dependencies and scale applications.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            How do Docker and Podman differ?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Docker requires a background daemon to run, while Podman is daemonless, making it more secure since it doesn’t need root privileges. Both manage containers, but Docker has a larger community, while Podman integrates well with Kubernetes.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            What is Kubernetes?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Kubernetes is an open-source platform that automates the deployment, scaling, and management of containerized applications. It helps manage multiple containers, ensuring reliability and availability across your application.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            Can I use microservices with my existing apps?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Yes! You can gradually transition to microservices by breaking down functionalities in your existing applications into separate services, enhancing scalability and flexibility without a complete rewrite.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            Which microservices framework should I choose?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Choose based on your needs:</p>
                                            <ul>
                                                <li>Spring Boot for Java developers,</li>
                                                <li>Node.js for JavaScript,</li>
                                                <li>.NET Core for Microsoft ecosystems,</li>
                                                <li>Flask for Python. (Consider your team's expertise and project requirements!)</li>
                                            </ul>
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