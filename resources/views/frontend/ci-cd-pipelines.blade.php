@extends('frontend.layouts.header')
@section('title', "CI CD Pipeline services | Integrate and Automate DevOps")
@section('description', "DevOps CI/CD services enables you to automate continuous integration and deployment pipeline relentlessly in the software development cycle.")
@section('keywords', "IT Services, Account Management services, Digital marketing services, Website Design company, Website design services, End to end sales, outsourcing, Affordable digital marketing services, Website marketing services, SEO service agency, Social media marketing, SEO company for business")

@section('content')

<div id="banner" class="inner-banner">
    <div class="container">
        <div class="inner-title w-75" data-aos="fade-right" data-aos-offset="500" data-aos-easing="ease-in-sine">
            <h1>Streamline Development with Reliable CI/CD Pipeline Services</h1>
            <p class="text-white"></p>
            <div class="banner-btn">
				<a href="#service-sec" class="default-btn btn-bg-one border-radius-50">Explore Our Solutions <i class="bx bx-chevron-right"></i></a>
			</div>
        </div>
    </div>
    
    <video id="videobcg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
        <source src="../theme/assets/images/cicd-pipeline.mp4" type="video/mp4">
        <source src="movie.webm" type="video/webm">Sorry, your browser does not support HTML5 video.
    </video>
</div>


<div class="about-area">
    <div class="container">
        <div class="row align-items-center justify-content-center" data-aos="fade-up" data-aos-duration="750">
            <div class="col-lg-6">
                <div class="about-play p-4">
                    <img src="{{ asset('theme') }}/assets/images/code-to-cloud.jpg" alt="About Images">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content ml-25">
                	<div class="section-title">
						<span class="sp-color2">Pipeline to Perfection</span>
						<h2>From Code to Cloud.</h2>
						<p>Continuous Integration and Continuous Delivery (CI/CD) pipelines are the backbone of modern software development, enabling organizations to deliver high-quality software rapidly and reliably. At JFS Technologies, our CI/CD pipeline services streamline and automate the development lifecycle, empowering teams to focus on innovation while ensuring consistent and efficient software delivery.</p>
                        <h3 class="pt-4">Why CI/CD Pipelines?</h3>
						<p>In today’s competitive landscape, rapid and reliable software delivery is crucial for business success. CI/CD pipelines help by:</p>
                        <ul>
                            <li>Automating repetitive processes like building, testing, and deployment.</li>
                            <li>Detecting and resolving issues earlier in the development cycle.</li>
                            <li>Enhancing collaboration between development, QA, and operations teams.</li>
                            <li>Reducing time-to-market while maintaining high-quality standards.</li>
                        </ul>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>


<section class="services-style-area home_cards pt-3 pb-70" id="service-sec">
	<div class="container">
		<div class="section-title text-center" data-aos="fade-up" data-aos-duration="500">
			<span class="sp-color2">Built to Deliver Brilliance</span>
			<h2>From Code to Production: Faster, Smarter CI/CD</h2>
			<p class="margin-auto">Our CI/CD pipeline services streamline the process of building, testing, and deploying code changes efficiently and consistently. By automating key stages of the development lifecycle, we help teams accelerate their software delivery while ensuring quality and reliability. With our expertise in CI CD tools and best practices, we empower organizations to embrace a culture of continuous integration and continuous delivery for faster time-to-market and increased competitiveness.</p>
		</div>
		<div class="row pt-45">
			<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="500">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Build Automation</h3>
					<p>Services like Jenkins and Travis CI automate the process of compiling code, running tests, generating artifacts, monitoring builds, and seamlessly deploying applications with enhanced efficiency.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/build-auto.svg" class="brand-logo-one" alt="Build Automation">
				</div>
			</div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="750">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Deployment Automation</h3>
					<p>Streamline the process of deploying code changes across environments like staging and production using platforms such as AWS CodePipeline and Azure DevOps.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/deploy-auto.svg" class="brand-logo-one" alt="Deployment Automation">
				</div>
			</div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Continuous Testing</h3>
					<p>Integrate tools like GitLab CI/CD and CircleCI to ensure continuous validation of code changes, reducing defects and ensuring reliability throughout the pipeline.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/continue-test.svg" class="brand-logo-one" alt="Continuous Testing">
				</div>
			</div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1250">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Infrastructure as Code</h3>
					<p>Leverage tools such as Jenkins, GitLab CI/CD, and AWS CodePipeline to define and manage infrastructure using code, enabling consistent and repeatable deployments.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/infra-code.svg" class="brand-logo-one" alt="Infrastructure as Code">
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
						<h2>Benefits of CI/CD Pipelines</h2>
					</div>
					<div class="row">
						<div class="col-lg-3 col-6">
							<div class="choose-content-card">
								<div class="content">
                                    <i class="fal fa-tachometer-alt-fastest"></i>
									<h3>Faster Time-to-Market</h3>
								</div>
								<p>Accelerate the delivery of innovative new features and timely updates.</p>
							</div>
						</div>
						<div class="col-lg-3 col-6">
							<div class="choose-content-card">
								<div class="content">
                                    <i class="fal fa-code"></i>
									<h3>Improved Code Quality</h3>
								</div>
								<p>Continuous testing ensures robust, defect-free, and high-quality software.</p>
							</div>
						</div>
						<div class="col-lg-3 col-6">
							<div class="choose-content-card">
								<div class="content">
                                    <i class="far fa-compress-arrows-alt"></i>
									<h3>Enhanced Collaboration</h3>
								</div>
								<p>Seamless integration between development and operations teams.</p>
							</div>
						</div>
						<div class="col-lg-3 col-6">
							<div class="choose-content-card">
								<div class="content">
                                    <i class="fal fa-cogs"></i>
									<h3>Optimized Spending</h3>
								</div>
								<p>Automation minimizes manual errors and reduces resource utilization.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="case-study-area ptb-100">
    <div class="container" data-aos="fade-up" data-aos-duration="750">
        <div class="section-title text-center">
            <span class="sp-color2">Our Impact</span>
            <h2>Industries We Serve</h2>
            <p class="pb-5">Our CI/CD pipeline solutions are trusted by businesses across diverse industries, including:</p>
			<img src="{{ asset('theme') }}/assets/images/cicd-indus.png" alt="Images">
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


<div class="about-area about-bg2 pt-100 pb-70">
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
                        <h2>Deliver Smarter: The CI/CD Edge</h2>
                        <p>Ready to unlock the potential of CI/CD pipelines? Partner with JFS Technologies to revolutionize your software delivery process and stay ahead in a competitive market. Our CI/CD approach includes:</p>
                        <ul class="text-white pt-3">
                            <li>Assessment: Analyze your existing workflows and identify bottlenecks in the development lifecycle.</li>
                            <li>Design: Develop a customized CI/CD pipeline blueprint tailored to your organization’s goals.</li>
                            <li>Implementation: Deploy CI/CD tools, integrate automation, and establish best practices.</li>
                            <li>Monitoring &amp; Optimization: Continuously monitor the pipeline’s performance and fine-tune processes for maximum efficiency.</li>
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
                                            What is a CI/CD pipeline, and why does my business need it?
                                        </a>
                                        <div class="accordion-content show">
                                            <p>A CI/CD pipeline automates the process of building, testing, and deploying software. It ensures faster delivery, fewer errors, and smoother updates, helping your business stay ahead in today’s fast-paced tech environment.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            What services do you offer as part of your CI/CD pipeline solutions?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Our CI/CD pipeline services include build automation, deployment automation, continuous testing, and infrastructure as code (IaC). These services streamline your software development and delivery process from start to finish.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            How does build automation help my development team?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Build automation eliminates repetitive manual tasks, enabling your developers to focus on writing quality code. It speeds up the build process and ensures consistent results every time.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            What is Infrastructure as Code (IaC), and how does it benefit my business?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Infrastructure as Code allows you to manage and provision your IT infrastructure through code instead of manual processes. It improves scalability, reduces errors, and ensures consistency across environments.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            Can you integrate CI/CD pipelines with our existing tools and workflows?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Absolutely! We work with your existing tools and workflows to create a seamless integration. Whether you use Jenkins, GitLab, Azure DevOps, or other platforms, we ensure compatibility and smooth adoption.</p>
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