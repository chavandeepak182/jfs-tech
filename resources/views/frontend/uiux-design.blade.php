@extends('frontend.layouts.header')
@section('title', "UI/UX Design - JFS Technologies")
@section('description', "Elevate your online presence with our Digital marketing company services. Drive growth and engagement with tailored strategies.")
@section('keywords', "IT Services, Account Management services, Digital marketing services, Website Design company, Website design services, End to end sales, outsourcing, Affordable digital marketing services, Website marketing services, SEO service agency, Social media marketing, SEO company for business")

@section('content')

<div id="banner" class="inner-banner">
    <div class="container">
        <div class="inner-title text-center w-75 mx-auto">
            <h1>User-Centered Design for Memorable Digital Experiences</h1>
            <p class="text-white"></p>
            <div class="banner-btn">
				<a href="url('/contact-us') }}" class="default-btn btn-bg-one border-radius-50 ml-20">Explore Our Solutions <i class="bx bx-chevron-right"></i></a>
			</div>
        </div>
    </div>
    
    <video id="videobcg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
        <source src="../theme/assets/images/pvr-1.mp4" type="video/mp4">
        <source src="movie.webm" type="video/webm">Sorry, your browser does not support HTML5 video.
    </video>
</div>

<section class="work-process-area home_cards pt-100 pb-70">
	<div class="container">
		<div class="section-title text-center">
			<span class="sp-color2"></span>
			<h2>UX/UI Design Services for Seamless User Experiences</h2>
			<p>Our UX/UI design process is rooted in empathy and precision. We begin with a thorough understanding of your audience, followed by creating prototypes, and testing every element to ensure usability and aesthetic appeal. Every step is focused on delivering a digital experience that users find effortless and engaging. We cater to a broad spectrum of industries, offering customized solutions to meet their unique needs:</p>
		</div>
		<div class="row pt-45">
			<div class="col-lg-4 col-sm-6">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Website and App Design</h3>
					<p>We create clean, user-friendly interfaces that adapt seamlessly across devices, prioritizing form & function. Our designs enhance user journeys, boost engagement, & reflect your brand’s identity—whether for web, mobile, or desktop applications.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/computer.svg" class="brand-logo-one" alt="computer" style="width:22%;">
				</div>
			</div>
            <div class="col-lg-4 col-sm-6">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>UX Research & Strategy</h3>
					<p>Through user interviews, surveys, and heat mapping, we gather insights into behaviors and preferences that drive our design decisions. These insights help us create intuitive, visually engaging UI/UX designs aligned with your business goals.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/computer.svg" class="brand-logo-one" alt="computer" style="width:22%;">
				</div>
			</div>
            <div class="col-lg-4 col-sm-6">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Wireframing & Prototyping</h3>
					<p>Starting with initial layouts and prototypes, we test, refine, and align designs with your vision. This iterative approach ensures a user-centered, polished final product that meets both business goals and user expectations.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/computer.svg" class="brand-logo-one" alt="computer" style="width:22%;">
				</div>
			</div>
		</div>
	</div>
</section>


<div class="choose-area pt-100 pb-70 home">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-12">
					<div class="choose-content mr-20">
						<div class="section-title mb-3">
							<span class="sp-color1">We Are Best!!</span>
							<h2>Why Our UI/UX Design Service Stands Out?</h2>
						</div>
						<div class="row">
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-pencil-ruler"></i>
										<h3>Custom Solutions</h3>
									</div>
									<p>Our designers, developers, and content creators bring a wealth of experience to every project.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-users-crown"></i>
										<h3>Experienced Team</h3>
									</div>
									<p>Our designers, developers, and content creators bring a wealth of experience to every project.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-analytics"></i>
										<h3>Holistic Approach</h3>
									</div>
									<p>We consider every aspect of the user journey to create cohesive, engaging digital experiences.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
                                        <i class="fal fa-headset"></i>
										<h3>Commitment to Quality</h3>
									</div>
									<p>From concept to execution, we prioritize high standards to ensure outstanding results.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


    <div class="case-study-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span class="sp-color2"></span>
                <h2>Client Success Stories</h2>
            </div>
            <div class="row pt-45">
                <div class="col-lg-4 col-md-6">
                    <div class="case-study-item">
                        <a href="#">
                            <img src="{{ asset('theme') }}/assets/images/case-study/case-study1.jpg" alt="Images">
                        </a>
                        <div class="content">
                            <h3><a href="#">E-Commerce Platform UI/UX Redesign</a></h3>
                            <p>Enhanced navigation & visuals led to a 30% boost in user engagement.</p>
                            <a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="case-study-item">
                        <a href="#">
                            <img src="{{ asset('theme') }}/assets/images/case-study/case-study1.jpg" alt="Images">
                        </a>
                        <div class="content">
                            <h3><a href="#">Mobile App UX Optimization</a></h3>
                            <p>Redesigned the booking flow, boosting satisfaction.</p>
                            <a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="case-study-item">
                        <a href="#">
                            <img src="{{ asset('theme') }}/assets/images/case-study/case-study1.jpg" alt="Images">
                        </a>
                        <div class="content">
                            <h3><a href="#">3D Visualization for a Product Launch</a></h3>
                            <p>Built a cohesive visual identity to enhance brand recognition.</p>
                            <a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-6 text-center">
                    <a href="{{ url('/portfolio') }}" class="default-btn btn-bg-two border-radius-5 py-3">View Our Portfolio</a>
                </div>
            </div>
        </div>
    </div>


<div class="about-area about-bg2 pt-5">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img-4">
                    <img src="{{ asset('theme') }}/assets/images/modern-cta.png" alt="About Images">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content-3 ml-20">
                    <div class="section-title">
                        <span class="sp-color1">Partner Up With Us</span>
                        <h2>Ready to deliver a user experience that drives results?</h2>
                        <p>Built a cohesive visual identity to enhance brand recognition. Whether you're looking to refresh your brand’s image, elevate user experiences, or craft compelling content, our creative team is ready to bring your vision to life and drive impactful results.</p>
                    </div>
                    <a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-5 py-3">Let’s Talk UX/UI Design</a>
                </div>
            </div>
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