@extends('frontend.layouts.header')
@section('title', "Frontend Developers Services - JFS Technologies")
@section('description', "Elevate your online presence with our Digital marketing company services. Drive growth and engagement with tailored strategies.")
@section('keywords', "IT Services, Account Management services, Digital marketing services, Website Design company, Website design services, End to end sales, outsourcing, Affordable digital marketing services, Website marketing services, SEO service agency, Social media marketing, SEO company for business")

@section('content')

<div id="banner" class="inner-banner">
    <div class="container">
        <div class="inner-title w-75">
            <h1>Expert Frontend Development Services for Stunning UI/UX</h1>                 
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
			<h2>Pixel-Perfect Frontend Development for Your Brand</h2>
			<p class="margin-auto">Our team of front-end developers are experts in various technologies and frameworks, including HTML, CSS, JavaScript, React, Angular, Vue.js, and more. Whether you require a basic static website or a sophisticated web application, our team has the skills and experience to turn your vision into reality. We continuously stay informed on the newest trends in front-end development to guarantee that your project is contemporary, easy to use, and adaptable. Allow our talented team of front-end developers to elevate your website or web applications to new heights.</p>
		</div>
		<div class="row pt-45 justify-content-center">
			<div class="col-lg-3 col-sm-6">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>UI/UX Designers</h3>
					<p>These developers design the user interface and experience of websites or applications, creating visually appealing and user-friendly designs that boost engagement and satisfaction.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/uiux.svg" class="brand-logo-one" alt="UI/UX">
				</div>
			</div>
            <div class="col-lg-3 col-sm-6">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Front-End Developers</h3>
					<p>These developers write front-end code using HTML, CSS, and JavaScript, implementing designs and ensuring functionality across browsers and devices.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/frontend.svg" class="brand-logo-one" alt="frontend dev">
				</div>
			</div>
            <div class="col-lg-3 col-sm-6">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>React Developers</h3>
					<p>React is a popular JavaScript library for building user interfaces. These developers create interactive web apps & are skilled in components, state management & React-specific features.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/react-js.svg" class="brand-logo-one" alt="computer">
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Angular Developers</h3>
					<p>Angular developers build dynamic, scalable web apps using powerful features like modules, components, services & routing, ensuring efficient & maintainable code.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/angular-js.svg" class="brand-logo-one" alt="computer">
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Vue.js Developers</h3>
					<p>Vue.js developers use the progressive JavaScript framework to build interactive and responsive web apps, leveraging components, directives, and Vuex state management.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/vue-js.svg" class="brand-logo-one" alt="computer">
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Responsive Web Designers</h3>
					<p>Responsive web designers create websites that adapt to various screen sizes and devices, ensuring a seamless and consistent user experience across all screens.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/responsive-dev.svg" class="brand-logo-one" alt="computer">
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Accessibility Specialists</h3>
					<p>They ensure websites and apps are usable for users with disabilities by implementing design & development practices that comply with WCAG standards.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/accessibility.svg" class="brand-logo-one" alt="computer">
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
										<img src="{{ asset('theme') }}/assets/technologies/vue_js.png" alt="Images">
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
							<h2>Why Hire Frontend Developers from JFS</h2>
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
                <span class="sp-color2">Steps to Hire Top Frontend Talent</span>
                <h2 class="pb-5">Hire a Frontend Developers in Few Steps</h2>
				<img class="hire_steps" alt="Steps for Hiring">
            </div>
		</div>
	</div>


<div class="about-area about-bg2 pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-content-3 mr-20">
                    <div class="section-title">
                        <span class="sp-color1">Let's Start Today!</span>
                        <h2>Hire a Dedicated Frontend Developer For Your Next Project</h2>
                        <p>We are here to help you containerize your applications, orchestrate them using tools like Kubernetes, and utilize microservices to create agile, modular systems. Whether you are looking to update existing applications or build new ones from scratch, we will guide you through the process to ensure efficient and seamless operation of your containers and microservices.</p>
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