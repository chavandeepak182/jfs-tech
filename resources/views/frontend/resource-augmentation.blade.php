@extends('frontend.layouts.header')
@section('title', "Resource Augmentation Services - JFS Technologies")
@section('description', "Elevate your online presence with our Digital marketing company services. Drive growth and engagement with tailored strategies.")
@section('keywords', "IT Services, Account Management services, Digital marketing services, Website Design company, Website design services, End to end sales, outsourcing, Affordable digital marketing services, Website marketing services, SEO service agency, Social media marketing, SEO company for business")

@section('content')

<div class="banner-five-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner-five-content">
                    <span>TECHNOLOGY & IT SOLUTIONS</span>
                    <h1 class="text-white">Resource <b>Augmentation</b></h1>
                    <p class="text-white">We have a team of highly skilled and experienced developers who are experts in these technologies. Whether you need additional support for a project or want to augment your existing team, our resource augmentation services can provide you with the talent you need to achieve your goals.</p>
                    <a href="{{ url('/contact-us') }}" class="default-btn btn-bg-two border-radius-50 ">Get A Quote</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner-five-img mx-auto">
                    <img src="{{ asset('theme') }}/assets/images/resource-aug.png" alt="Images">
                </div>
            </div>
        </div>
    </div>
</div>


<section class="work-process-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color2">Unlock the potential</span>
            <h2>Our Digital transformation Services Includes</h2>
        </div>
        <div class="row pt-45">
            <div class="col-lg-3 col-sm-6">
                <div class="work-process-card-three">
                    <a href="#">
                        <div class="number-title">01.</div>
                        <h3>Frontend Development</h3>
                        <p>Frontend development creates the visual and interactive elements of websites and applications to enhance user experience.</p>
                        <i class="fad fa-bring-front my-2"></i>
                        <div class="text-center mt-4">
                            <a href="#" class="default-btn btn-bg-two border-radius-50 text-center">Explore Now</a>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="work-process-card-three">
                    <a href="#">
                        <div class="number-title">02.</div>
                        <h3>Backend Development</h3>
                        <p>Backend development involves server-side programming & database management to ensure the seamless functionality of web applications.</p>
                        <i class="fad fa-send-back my-2"></i>
                        <div class="text-center mt-4">
                            <a href="#" class="default-btn btn-bg-two border-radius-50 text-center">Explore Now</a>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="work-process-card-three">
                    <a href="#">
                        <div class="number-title">03.</div>
                        <h3>Fullstack Development</h3>
                        <p>It involves creating both front-end and back-end components of web applications, ensuring seamless integration and functionality.</p>
                        <i class="fad fa-box-full my-2"></i>
                        <div class="text-center mt-4">
                            <a href="#" class="default-btn btn-bg-two border-radius-50 text-center">Explore Now</a>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="work-process-card-three">
                    <a href="#">
                        <div class="number-title">04.</div>
                        <h3>Q/A & Testing</h3>
                        <p>Quality Assurance (QA) and testing ensure software reliability and performance by identifying defects and validating functionality throughout the development process.</p>
                        <i class="fab fa-codepen my-2"></i>
                        <div class="text-center mt-4">
                            <a href="#" class="default-btn btn-bg-two border-radius-50 text-center">Explore Now</a>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="about-area about-bg2 pt-100 pb-70">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img-4">
                    <img src="{{ asset('theme') }}/assets/images/about/about-img4.png" alt="About Images">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content-3 ml-20">
                    <div class="section-title">
                        <span class="sp-color2">Partner Up With Us</span>
                        <h2>Ready to Embrace the Future of Technology?</h2>
                        <p>We have a team of highly skilled and experienced developers who are experts in these technologies. Whether you need additional support for a project or want to augment your existing team, our resource augmentation services can provide you with the talent you need to achieve your goals.</p>
                    </div>
                    <h3>Backed by over 24 years of experience, we offer top resource augmentation solutions.</h3>
                    <div class="all-skill-bar">
                        <div class="skill-bar" data-percentage="100%">
                            <h4 class="progress-title-holder clearfix">
                                <span class="progress-title">Development</span>
                                <span class="progress-number-wrapper">
                                <span class="progress-number-mark">
                                <span class="percent"></span>
                                </span>
                                </span>
                            </h4>
                            <div class="progress-content-outter">
                                <div class="progress-content"></div>
                            </div>
                        </div>
                        <div class="skill-bar mb-0" data-percentage="100%">
                            <h4 class="progress-title-holder clearfix">
                                <span class="progress-title">Testing</span>
                                <span class="progress-number-wrapper">
                                <span class="progress-number-mark">
                                <span class="percent"></span>
                                </span>
                                </span>
                            </h4>
                            <div class="progress-content-outter">
                                <div class="progress-content"></div>
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


    <div class="choose-area pt-100 pb-70">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-12">
					<div class="choose-content mr-20">
						<div class="section-title">
							<span class="sp-color1">We Are Best!!</span>
							<h2>Why Choose JFS Technologies?</h2>
						</div>
						<div class="row">
                            <div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-users-crown"></i>
										<h3>Expertise Across Technologies</h3>
									</div>
									<p>Our team brings deep expertise across diverse technologies, ensuring innovative, secure, and scalable solutions.</p>
								</div>
							</div>
                            <div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
                                        <i class="fal fa-file-chart-line"></i>
										<h3>Data-Driven Approach</h3>
									</div>
									<p>We use analytics and performance metrics to continually optimize and improve your digital marketing campaigns.</p>
								</div>
							</div>
                            <div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-pencil-ruler"></i>
										<h3>Tailored Strategies</h3>
									</div>
									<p>We understand that every business is unique. We create customized digital marketing strategies that align with your specific goals.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
                                        <i class="fal fa-puzzle-piece"></i>
										<h3>Comprehensive Solutions</h3>
									</div>
									<p>From SEO to social media management and paid advertising, we cover all aspects of digital marketing to ensure your business thrives online.</p>
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


<div class="brand-area ptb-100">
    <div class="container">
        <div class="row justify-content-center align-items-center">
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