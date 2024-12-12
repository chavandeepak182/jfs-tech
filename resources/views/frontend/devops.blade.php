@extends('frontend.layouts.header')
@section('title', "DevOps Services - JFS Technologies")
@section('description', "Elevate your online presence with our Digital marketing company services. Drive growth and engagement with tailored strategies.")
@section('keywords', "IT Services, Account Management services, Digital marketing services, Website Design company, Website design services, End to end sales, outsourcing, Affordable digital marketing services, Website marketing services, SEO service agency, Social media marketing, SEO company for business")

@section('content')

<div id="service_banner" class="banner-five-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right" data-aos-offset="500" data-aos-easing="ease-in-sine">
                <div class="banner-five-content">
                    <span></span>
                    <h1 class="text-white">DevOps <b><br>Services</b></h1>
                    <p class="text-white">At <strong>JFS Technologies</strong>, we help businesses effortlessly close the gap between development and operations with streamlined and effective DevOps practices. Our innovative solutions boost software delivery speed, foster cross-team collaboration, and embed strong security measures, empowering organizations to adapt and excel in a rapidly changing digital world.</p>
                    <!-- <p class="text-white">Through the implementation of CI/CD pipelines, we optimize the development process, guaranteeing the swift, reliable, and effective delivery of software updates, enhancements, and new features. Leveraging our deep proficiency in containers, orchestration tools, and microservices architecture, we design adaptable, scalable, and future-ready solutions that seamlessly adjust to evolving business requirements, industry trends, and technological advancements.</p> -->
                    <a href="#service-sec" class="default-btn btn-bg-one border-radius-50">Explore Our Solutions <i class="bx bx-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <video id="videobcg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
        <source src="../theme/assets/images/devops.mp4" type="video/mp4">
        <source src="movie.webm" type="video/webm">Sorry, your browser does not support HTML5 video.
    </video>
</div>


<div class="about-area pt-5">
    <div class="container">
        <div class="row align-items-center justify-content-center" data-aos="fade-up" data-aos-duration="750">
            <div class="col-lg-6">
                <div class="about-play">
                    <img src="{{ asset('theme') }}/assets/images/devops-intro.svg" alt="About Images">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content ml-25">
                	<div class="section-title">
						<span class="sp-color2">Future-Ready Platforms</span>
						<h2>What is DevOps?</h2>
						<p>DevOps is a culture, practice, and set of tools designed to automate and integrate the processes of software development and IT operations. By fostering collaboration between teams, DevOps shortens development cycles, enhances deployment quality, and ensures operational efficiency.</p>
                        <h3 class="pt-4">Why DevOps?</h3>
						<p>Modern businesses need to deliver updates and innovations faster than ever before. DevOps enables this by:</p>
                        <ul>
                            <li>Automating repetitive tasks to save time.</li>
                            <li>Enhancing collaboration between development, operations, and security teams.</li>
                            <li>Ensuring faster, more reliable deployments.</li>
                            <li>Integrating security at every stage of development.</li>
                        </ul>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>


<section class="services-style-area home_cards pt-5 pb-70" id="service-sec">
    <div class="container">
        <div class="section-title text-center" data-aos="fade-up" data-aos-duration="500">
            <span class="sp-color2">Code Meets Creativity</span>
            <h2>Our DevOps Solutions</h2>
            <p class="margin-auto">We provide a comprehensive suite of DevOps services tailored to meet your unique needs.</p>
        </div>
        <div class="row pt-45">
            <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="500">
                <div class="work-process-card-three">
                    <a href="{{ url('services/ci-cd-pipelines') }}">
                        <div class="number-title invisible">01.</div>
                        <h3>CI/CD Pipelines</h3>
                        <p>Streamline the software release process with automated integration and deployment.</p>
                        <!-- <i class="fad fa-infinity my-2"></i> -->
                        <img src="{{ asset('theme') }}/assets/images/icons/ci-cd.svg" class="brand-logo-one" alt="computer">
                        <div class="text-center mt-4">
                            <a href="{{ url('services/ci-cd-pipelines') }}" class="default-btn btn-bg-two border-radius-50 text-center">Explore Now</a>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="750">
                <div class="work-process-card-three">
                    <a href="{{ url('services/process-automation') }}">
                        <div class="number-title invisible">02.</div>
                        <h3>Process Automation</h3>
                        <p>Enhance operational efficiency by automating routine tasks & workflows.</p>
                        <!-- <i class="fad fa-random my-2"></i> -->
                        <img src="{{ asset('theme') }}/assets/images/icons/auto.svg" class="brand-logo-one" alt="computer">
                        <div class="text-center mt-4">
                            <a href="{{ url('services/process-automation') }}" class="default-btn btn-bg-two border-radius-50 text-center">Explore Now</a>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="work-process-card-three">
                    <a href="{{ url('services/containers-and-microservices') }}">
                        <div class="number-title invisible">03.</div>
                        <h3>Containers & Microservices</h3>
                        <p>Build scalable, modular architectures that support agile development.</p>
                        <!-- <i class="fad fa-cloud-upload my-2"></i> -->
                        <img src="{{ asset('theme') }}/assets/images/icons/micro-ser.svg" class="brand-logo-one" alt="computer">
                        <div class="text-center mt-4">
                            <a href="{{ url('services/containers-and-microservices') }}" class="default-btn btn-bg-two border-radius-50 text-center">Explore Now</a>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1250">
                <div class="work-process-card-three">
                    <a href="{{ url('services/devsecops') }}">
                        <div class="number-title invisible">04.</div>
                        <h3>DevSecOps</h3>
                        <p>Embed security into every phase of the development lifecycle for robust protection.</p>
                        <!-- <i class="fad fa-cloud-meatball my-2"></i> -->
                        <img src="{{ asset('theme') }}/assets/images/icons/dev-sec.svg" class="brand-logo-one" alt="computer">
                        <div class="text-center mt-4">
                            <a href="{{ url('services/devsecops') }}" class="default-btn btn-bg-two border-radius-50 text-center">Explore Now</a>
                        </div>
                    </a>
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
							<h2>Benefits of Choosing JFS Technologies for DevOps</h2>
                            <p>At JFS Technologies, we work closely with you to deliver optimal results for your business. Here’s why our DevOps services are the right choice:</p>
						</div>
						<div class="row">
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-pencil-ruler"></i>
										<h3>Tailored Strategies</h3>
									</div>
									<p>Tailored solutions designed to align seamlessly with your business goals.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
                                        <i class="fal fa-shield-check"></i>
										<h3>Integrated Security</h3>
									</div>
									<p>Proactive measures to identify and prevent potential vulnerabilities effectively.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
                                        <i class="fal fa-tachometer-alt-fastest"></i>
										<h3>Faster Time-to-Market</h3>
									</div>
									<p>Reduced delays with optimized pipelines, streamlined workflows, and efficient processes.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
                                        <i class="fal fa-exchange-alt"></i>
										<h3>End-to-End Automation:</h3>
									</div>
									<p>From development to deployment, we simplify the entire process.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="col-lg-6">
					<div class="choose-img">
						<img src="http://127.0.0.1:8000/theme/assets/images/choose-img.jpg" alt="Images">
					</div>
				</div> -->
			</div>
		</div>
	</div>


<div class="security-area pt-100 pb-70">
	<div class="container" data-aos="fade-up" data-aos-duration="750">
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


<div class="about-area about-bg2 pt-100 pb-70">
    <div class="container-fluid">
        <div class="row align-items-center" data-aos="fade-up" data-aos-duration="750">
            <div class="col-lg-6">
                <div class="about-img-4">
                    <img src="{{ asset('theme') }}/assets/images/about/about-img4.png" alt="About Images">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content-3 ml-20">
                    <div class="section-title">
                        <span class="sp-color1">Partner Up With Us</span>
                        <h2>Let’s Build the Future Together</h2>
                        <p>JFS Technologies is your trusted partner for transforming the way you develop, deploy & secure software. Our DevOps methodologies are:</p>
                        <ul class="text-white pt-3">
                            <li>Assess: Evaluate existing workflows and identify improvement opportunities.</li>
                            <li>Plan: Develop a customized roadmap for DevOps implementation.</li>
                            <li>Execute: Deploy tools, establish pipelines, and automate processes.</li>
                            <li>Monitor: Continuously improve and secure operations for maximum efficiency.</li>
                        </ul>
                    </div>
                    <a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-5 py-3">Contact Us Today</a>
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