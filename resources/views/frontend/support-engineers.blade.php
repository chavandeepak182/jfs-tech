@extends('frontend.layouts.header')
@section('title', "Support Engineers Services - JFS Technologies")
@section('description', "Elevate your online presence with our Digital marketing company services. Drive growth and engagement with tailored strategies.")
@section('keywords', "IT Services, Account Management services, Digital marketing services, Website Design company, Website design services, End to end sales, outsourcing, Affordable digital marketing services, Website marketing services, SEO service agency, Social media marketing, SEO company for business")

@section('content')

<div id="banner" class="inner-banner">
    <div class="container">
        <div class="inner-title w-75">
            <h1>Professional Support Engineers for Your Business</h1>                 
            <p class="text-white"></p>
            <div class="banner-btn">
				<a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-50">Explore Our Solutions <i class="bx bx-chevron-right"></i></a>
			</div>
        </div>
    </div>
    
    <video id="videobcg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
        <source src="../theme/assets/images/pvr-1.mp4" type="video/mp4">
        <source src="movie.webm" type="video/webm">Sorry, your browser does not support HTML5 video.
    </video>
</div>

<section class="services-style-area home_cards pt-100 pb-70">
	<div class="container">
		<div class="section-title text-center">
			<span class="sp-color2"></span>
			<h2>Dedicated Support Engineers for Seamless Operations</h2>
			<p class="margin-auto">Our team of support engineers is structured to provide specialized assistance for a wide range of technical issues. Beginning with our L0 engineers, who offer basic troubleshooting and ticket routing, clients can escalate to L1 engineers with more experience when needed. Our L2 engineers are the experts in their field, equipped to handle complex problems that require a deep understanding. For the most challenging issues, our L3 engineers, senior specialists, collaborate directly with vendors to find solutions. Finally, our L4 engineers, the pinnacle of support, bring the highest level of expertise and are often instrumental in developing innovative solutions and technologies.</p>
		</div>
		<div class="row pt-45 justify-content-center">
			<div class="col-lg-3 col-sm-6">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Technical Support Engineer</h3>
					<p>They provide customer support for software products or services, resolving technical issues & answering queries through various channels such as phone, email, or chat.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/computer.svg" class="brand-logo-one" alt="computer">
				</div>
			</div>
            <div class="col-lg-3 col-sm-6">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Application Support Engineer</h3>
					<p>They focus on providing technical support for specific software applications, managing incidents & ensuring the availability & performance of the application.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/computer.svg" class="brand-logo-one" alt="computer">
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>System Support Engineer</h3>
					<p>System Support Engineers are responsible for maintaining and supporting IT infrastructure, including servers, networks, and hardware components.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/computer.svg" class="brand-logo-one" alt="computer">
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Helpdesk Support Engineer</h3>
					<p>They provide front-line support to end-users, addressing technical issues, providing guidance on system usage & escalating complex problems to teams.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/computer.svg" class="brand-logo-one" alt="computer">
				</div>
			</div>
		</div>
	</div>
</section>


<!-- Technologies Area -->
    <div class="about-area pb-70">
		<div class="container-fluid">
			<div class="row mx-auto">
				<div class="col-lg-12 text-center">
					<div class="about-content ml-25">
						<div class="section-title">
							<span class="sp-color2">Our Expertise</span>
							<h2 class="w-50 mx-auto">Technologies to Power Your Next Big Move</h2>
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


<div class="choose-area pt-100 pb-70 home">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-12">
					<div class="choose-content mr-20">
						<div class="section-title mb-3">
							<span class="sp-color1">Hire Us Now!!</span>
							<h2>Why Hire Support Engineers from JFS</h2>
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
					<a href="{{ url('/success-stories') }}" class="default-btn btn-bg-two border-radius-5 py-3">Explore Our Success Stories</a>
                </div>
            </div>
        </div>
    </div>


<!-- Testimonials Area -->
	<section class="clients-area pt-100 pb-70">
		<div class="container">
			<div class="section-title text-center">
				<span class="sp-color1">Testimonials</span>
				<h2>What Our Clients Say</h2>
			</div>
			<div class="clients-slider owl-carousel owl-theme pt-45">
				<div class="clients-content">
					<div class="content">
						<img src="{{ asset('theme') }}/assets/images/clients-img/clients-img2.png" alt="Images">
						<i class="bx bxs-quote-alt-left"></i>
						<h3>Thomas Paul</h3>
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
						<h3>Dan Fitzpatrick</h3>
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
						<h3>Anand Katti</h3>
						<span>COO @ Shyena Techyarns</span>
					</div>
					<p>
					“Because of JFS Technologies' end-to-end sales service, our business has experienced tremendous growth and expanded its reach. Their holistic approach and unwavering commitment have been truly instrumental. I highly recommend their outstanding services!”
					</p>
				</div>
			</div>
		</div>
		<!-- <div class="client-circle">
			<div class="client-circle-1">
				<div class="circle"></div>
			</div>
			<div class="client-circle-2">
				<div class="circle"></div>
			</div>
			<div class="client-circle-3">
				<div class="circle"></div>
			</div>
			<div class="client-circle-4">
				<div class="circle"></div>
			</div>
			<div class="client-circle-5">
				<div class="circle"></div>
			</div>
			<div class="client-circle-6">
				<div class="circle"></div>
			</div>
			<div class="client-circle-7">
				<div class="circle"></div>
			</div>
		</div> -->
	</section>


	<div class="case-study-area ptb-100">
        <div class="container">
            <div class="section-title text-center">
                <span class="sp-color2">Steps for Hiring </span>
                <h2 class="pb-5">Hire a Dedicated Support Engineer in Few Steps</h2>
				<img class="hire_steps" alt="Steps for Hiring">
            </div>
		</div>
	</div>


<div class="about-area about-bg2 pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-content-3">
                    <div class="section-title">
                        <span class="sp-color1">Let's Start Today!</span>
                        <h2>Hire a Top-Quality Support Engineer</h2>
                        <p>By hiring support engineers through resource augmentation services, organizations can augment their existing support teams with experienced professionals who can effectively handle technical support tasks, enhance customer satisfaction, and contribute to the overall success of their IT operations. Working together, our support engineers guarantee that our clients receive top-tier technical assistance for their network, storage, compute, and security requirements.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <form id="contactForm" action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please Enter Your Name" placeholder="Full Name*">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please Enter Your Email" placeholder="Business Email*">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_number" required data-error="Please Enter Your number" class="form-control" placeholder="Phone Number*">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="company_name" id="company_name" class="form-control" required data-error="Please Enter Your Company's Name" placeholder="Company Name*">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="4" required data-error="Write your message" placeholder="Tell us something about your requirement...*"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 text-center">
                                <button type="submit" class="default-btn btn-bg-one border-radius-5 px-5">
                                    Hire Us Now <i class="fal fa-exclamation"></i>
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
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