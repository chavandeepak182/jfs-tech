@extends('frontend.layouts.header')
@section('title', "DevSecOps Services - JFS Technologies")
@section('description', "Elevate your online presence with our Digital marketing company services. Drive growth and engagement with tailored strategies.")
@section('keywords', "IT Services, Account Management services, Digital marketing services, Website Design company, Website design services, End to end sales, outsourcing, Affordable digital marketing services, Website marketing services, SEO service agency, Social media marketing, SEO company for business")

@section('content')

<div id="banner" class="inner-banner">
    <div class="container">
        <div class="inner-title w-75" data-aos="fade-right" data-aos-offset="500" data-aos-easing="ease-in-sine">
            <h1>Empowering DevOps with Built-in Security and Compliance</h1>
            <p class="text-white"></p>
            <div class="banner-btn">
				<a href="#service-sec" class="default-btn btn-bg-one border-radius-50">Explore Our Solutions <i class="bx bx-chevron-right"></i></a>
			</div>
        </div>
    </div>
    
    <video id="videobcg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
        <source src="../theme/assets/images/pvr-1.mp4" type="video/mp4">
        <source src="movie.webm" type="video/webm">Sorry, your browser does not support HTML5 video.
    </video>
</div>


<div class="about-area pt-5">
    <div class="container">
        <div class="row align-items-center justify-content-center" data-aos="fade-up" data-aos-duration="750">
            <div class="col-lg-6">
                <div class="about-play p-5">
                    <img src="{{ asset('theme') }}/assets/images/devsecops-intro.png" alt="About Images">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content ml-25">
                	<div class="section-title">
						<span class="sp-color2">Code Secure, Deliver Faster</span>
						<h2>Security-First DevOps</h2>
						<p>In the ever-evolving digital landscape, security cannot be an afterthought. At <b>JFS Technologies</b>, our DevSecOps services integrate security into every stage of the development and operations lifecycle, ensuring that your applications are protected from potential cyber threats. By embedding security practices into DevOps workflows, we enable you to build and deploy secure software with efficiency and confidence.</p>
                        <h3 class="pt-4">Why DevSecOps?</h3>
						<p>Traditional security methods often slow down development cycles or leave vulnerabilities undetected until later stages. DevSecOps shifts security left—integrating it from the start of development through deployment. This approach helps organizations:</p>
                        <ul>
                            <li>Identify and resolve vulnerabilities early.</li>
                            <li>Maintain compliance with industry standards.</li>
                            <li>Automate repetitive security tasks.</li>
                            <li>Strengthen the overall security posture of applications and infrastructure.</li>
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
			<span class="sp-color2">DevSecOps: The Future of Security</span>
			<h2>Code, Secure, Deploy: Complete DevSecOps Services</h2>
			<p class="margin-auto">Our DevSecOps services focus on integrating security practices early on in the development process to ensure that your applications are secure from the start. We work closely with your development and operations teams to implement security controls, automate security testing, and continuously monitor and improve the security of your applications. Our goal is to help you build and deploy secure software more efficiently and effectively. With our DevSecOps services, you can have peace of mind knowing that your applications are protected against cyber threats.</p>
		</div>
		<div class="row pt-45 justify-content-center">
			<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="500">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Security Automation</h3>
					<p>Automate security testing in CI/CD pipelines. Continuous testing ensures real-time identification of vulnerabilities without disrupting development.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/computer.svg" class="brand-logo-one" alt="computer">
				</div>
			</div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="750">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Infrastructure as Code Security</h3>
					<p>Safeguard your IaC by scanning for vulnerabilities, enforcing configurations, and maintaining compliance across cloud resources.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/computer.svg" class="brand-logo-one" alt="computer">
				</div>
			</div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Compliance Monitoring</h3>
					<p>Ensure your systems align with regulatory and industry-specific standards through automated compliance checks and reporting.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/computer.svg" class="brand-logo-one" alt="computer">
				</div>
			</div>
            <div class="col-lg-3 col-sm-6">
				<div class="work-process-card-three" data-aos="fade-up" data-aos-duration="1250">
					<div class="number-title invisible ">01.</div>
					<h3>Secure Code Review</h3>
					<p>Equip your development team with tools and best practices to detect and fix security issues during the coding process, reducing risks early.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/computer.svg" class="brand-logo-one" alt="computer">
				</div>
			</div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Vulnerability Management</h3>
					<p>Proactively detect and address vulnerabilities in applications and infrastructure. Our tools and processes help mitigate risks before they can be exploited.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/computer.svg" class="brand-logo-one" alt="computer">
				</div>
			</div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1250">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Container Security</h3>
					<p>Secure your containerized applications by implementing best practices and utilizing specialized tools to prevent vulnerabilities in environments.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/computer.svg" class="brand-logo-one" alt="computer">
				</div>
			</div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1500">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Incident Response Planning</h3>
					<p>Prepare for potential security incidents with comprehensive planning and training. Develop effective response strategies to minimize impact and downtime.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/computer.svg" class="brand-logo-one" alt="computer">
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
							<h2>Benefits of DevSecOps</h2>
						</div>
						<div class="row">
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
                                        <i class="fal fa-shield-check"></i>
										<h3>Integrated Security</h3>
									</div>
									<p>Embed robust security practices directly into your DevOps processes.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
                                        <i class="fal fa-tachometer-alt-fast"></i>
										<h3>Speed Up Development</h3>
									</div>
									<p>Address security concerns proactively without delaying development timelines.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
                                        <i class="fal fa-clipboard-list-check"></i>
										<h3>Regulatory Compliance</h3>
									</div>
									<p>Maintain adherence to global and industry-specific security standards.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
                                        <i class="fal fa-user-shield"></i>
										<h3>Enhanced Resilience</h3>
									</div>
									<p>Build applications that are secure by design and resistant to threats.</p>
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
			<img src="{{ asset('theme') }}/assets/images/devsecops-indus.png" alt="Images">
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
                        <h2>DevOps Meets Security with DevSecOps</h2>
                        <p>At JFS Technologies, we recognize that security is key to your success. With our DevSecOps services, you can drive innovation while we safeguard your applications, ensuring they are secure, compliant, and resilient to cyber threats. Our approach to DevSecOps includes:</p>
                        <ul class="text-white pt-3">
                            <li>Assessment: Analyze existing workflows and security practices to identify gaps and areas for improvement.</li>
                            <li>Implementation: Integrate security tools and processes into CI/CD pipelines and operations workflows, ensuring seamless adoption.</li>
                            <li>Automation: Automate repetitive security tasks, from vulnerability scanning to compliance checks, for efficiency and accuracy.</li>
                            <li>Monitoring &amp; Improvement: Continuously monitor security metrics and refine processes to adapt to new threats and evolving requirements.</li>
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