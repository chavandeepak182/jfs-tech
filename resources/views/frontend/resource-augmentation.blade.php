@extends('frontend.layouts.header')
@section('title', "Resource Augmentation Services - JFS Technologies")
@section('description', "Elevate your online presence with our Digital marketing company services. Drive growth and engagement with tailored strategies.")
@section('keywords', "IT Services, Account Management services, Digital marketing services, Website Design company, Website design services, End to end sales, outsourcing, Affordable digital marketing services, Website marketing services, SEO service agency, Social media marketing, SEO company for business")

@section('content')

<div id="service_banner" class="banner-five-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right" data-aos-offset="500" data-aos-easing="ease-in-sine">
                <div class="banner-five-content">
                    <span></span>
                    <h1 class="text-white">Resource <b>Augmentation</b></h1>
                    <p class="text-white">Our team comprises highly skilled and experienced developers who excel in cutting-edge technologies and are dedicated to delivering exceptional results. Whether you need extra support for a specific project, want to strengthen your existing team, or require specialized expertise to address complex challenges, our resource augmentation services are here to assist you.</p>
                    <a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-50 ">Get A Quote</a>
                    </div>
            </div>
        </div>
    </div>

    <video id="videobcg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
        <source src="../theme/assets/images/resource-aug.mp4" type="video/mp4">
        <source src="movie.webm" type="video/webm">Sorry, your browser does not support HTML5 video.
    </video>
</div>


<div class="about-area pt-3">
    <div class="container">
        <div class="row align-items-center justify-content-center" data-aos="fade-up" data-aos-duration="750">
            <div class="col-lg-6">
                <div class="about-play p-5">
                    <img src="{{ asset('theme') }}/assets/images/resource-aug-intro.png" alt="About Images">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content ml-25">
                	<div class="section-title">
						<span class="sp-color2">Skilled Experts, Anytime</span>
						<h2>Your Team, Supercharged</h2>
						<p>In today’s fast-paced digital world, having the right talent on hand is essential for the success of any project. Our <b>Resource Augmentation</b> services provide businesses with highly skilled developers who seamlessly integrate into existing teams to meet project demands. Whether you need additional support for a project or want to enhance your current team, our resource augmentation solutions provide the expertise you require.</p>
                        <p>Our developers are proficient in a range of technologies, ensuring that we can meet your specific needs for frontend, backend, full-stack, and support engineering roles. Explore our specialized services below to discover how we can assist you in achieving your business goals.</p>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>


<section class="services-style-area home_cards pt-80 pb-70">
    <div class="container">
        <div class="section-title text-center" data-aos="fade-up" data-aos-duration="500">
            <span class="sp-color2">Unlock the potential</span>
            <h2>Our Resource Augmentation Services Includes</h2>
        </div>
        <div class="row pt-45">
            <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="500">
                <div class="work-process-card-three">
                    <a href="{{ url('/services/frontend-developers') }}">
                        <div class="number-title invisible">01.</div>
                        <h3>Frontend Development</h3>
                        <p>Our frontend developers use HTML, CSS, JavaScript, React, Angular, and Vue.js to build responsive, user-friendly, and high-performance web experiences, from simple sites to complex applications.</p>
                        <!-- <i class="fad fa-bring-front my-2"></i> -->
                        <img src="{{ asset('theme') }}/assets/images/icons/frontend.svg" class="brand-logo-one" alt="computer">
                        <div class="text-center mt-4">
                            <a href="{{ url('/services/frontend-developers') }}" class="default-btn btn-bg-two border-radius-50 text-center">Explore Now</a>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="750">
                <div class="work-process-card-three">
                    <a href="{{ url('/services/backend-developers') }}">
                        <div class="number-title invisible">02.</div>
                        <h3>Backend Development</h3>
                        <p>Our backend developers are experts in Python, Java, PHP, .NET, Node.js, and more, delivering robust server-side logic, databases, and APIs for scalable, secure, reliable, and highly efficient software solutions.</p>
                        <!-- <i class="fad fa-send-back my-2"></i> -->
                        <img src="{{ asset('theme') }}/assets/images/icons/backend.svg" class="brand-logo-one" alt="computer">
                        <div class="text-center mt-4">
                            <a href="{{ url('/services/backend-developers') }}" class="default-btn btn-bg-two border-radius-50 text-center">Explore Now</a>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="work-process-card-three">
                    <a href="{{ url('/services/fullstack-developers') }}">
                        <div class="number-title invisible">03.</div>
                        <h3>Fullstack Development</h3>
                        <p>Our full-stack developers bridge the gap between frontend and backend, offering comprehensive, scalable, and innovative end-to-end solutions across various tech stacks such as MERN, MEAN, LAMP, and more.</p>
                        <!-- <i class="fad fa-box-full my-2"></i> -->
                        <img src="{{ asset('theme') }}/assets/images/icons/fullstack.svg" class="brand-logo-one" alt="computer">
                        <div class="text-center mt-4">
                            <a href="{{ url('/services/fullstack-developers') }}" class="default-btn btn-bg-two border-radius-50 text-center">Explore Now</a>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1250">
                <div class="work-process-card-three">
                    <a href="{{ url('/services/support-engineers') }}">
                        <div class="number-title invisible">04.</div>
                        <h3>Support Engineers</h3>
                        <p>Our support engineers offer a range of services to maintain system performance, from basic troubleshooting to handling complex issues and ensuring seamless operations across all systems.</p>
                        <!-- <i class="fab fa-codepen my-2"></i> -->
                        <img src="{{ asset('theme') }}/assets/images/icons/support.svg" class="brand-logo-one" alt="computer">
                        <div class="text-center mt-4">
                            <a href="{{ url('/services/support-engineers') }}" class="default-btn btn-bg-two border-radius-50 text-center">Explore Now</a>
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
							<h2>Why Choose Our Resource Augmentation Services?</h2>
                            <p>At JFS Technologies, we work closely with you to deliver optimal results for your business. Here’s why our Digital Experience services are the right choice:</p>
						</div>
						<div class="row">
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-pencil-ruler"></i>
										<h3>Tailored Expertise</h3>
									</div>
									<p>Access specialized skills for frontend, backend, full-stack, and support roles to enhance your team's capabilities.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
                                        <i class="fal fa-balance-scale"></i>
										<h3>Scalable Solutions</h3>
									</div>
									<p>Whether you need short-term or long-term assistance, we provide flexibility to match your project needs.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
                                        <i class="fal fa-tachometer-alt-fastest"></i>
										<h3>Faster Time-to-Market</h3>
									</div>
									<p>With experienced developers ready to integrate into your team, you can quickly accelerate project timelines.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
                                        <i class="fal fa-badge-percent"></i>
										<h3>Budget Efficiency</h3>
									</div>
									<p>Minimize overhead costs associated with hiring and training, while accessing top-tier talent.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<div class="security-area pt-100 pb-70">
	<div class="container">
		<div class="section-title text-center" data-aos="fade-up" data-aos-duration="500">
		    <span class="sp-color2">Plan Descriptions</span>
		    <h2>Choose the Best Plan For Your Business</h2>
		</div>
		<div class="row pt-45">
		    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="750">
		        <div class="security-card">
                    <i class="flaticon-cyber-security"></i>
                    <h3>Standard Plan</h3>
                    <p>Ideal for small businesses looking to establish a solid social media presence. This plan includes basic features such as post creation, page setups, and essential social media management.</p>
                </div>
		    </div>
		    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="security-card">
                    <i class="flaticon-computer"></i>
                    <h3>Professional Plan</h3>
                    <p>Designed for businesses seeking to boost engagement and visibility, this plan provides more frequent posts, captivating video content, and expanded group sharing to reach a wider audience.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1250">
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
                        <h2>Flexible Workforce, Limitless Potential</h2>
                        <p>At <b>JFS Technologies</b>, we offer flexible and scalable resource augmentation services to help businesses achieve their project goals. Connect with us to discover how our skilled developers can contribute to your success. Our process includes:</p>
                        <ul class="text-white pt-3">
                            <li>Identify Requirements: We collaborate with you to understand your project’s needs and the specific skills required.</li>
                            <li>Talent Matching: We match you with the right developers based on their expertise and your project’s scope.</li>
                            <li>Seamless Integration: Our developers quickly integrate into your existing teams, minimizing ramp-up time.</li>
                            <li>Ongoing Support: We provide continuous support to ensure that the resources we provide continue to meet your evolving needs.</li>
                        </ul>
                    </div>
                    <a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-5 py-3">Contact Us Today!</a>
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