@extends('frontend.layouts.header')
@section('title', "Best B2B End-to-End Sales | Digital Marketing Company - JFS Technologies")
@section('keywords', "B2B End-to-End Sales, B2B End-to-End Sales Services, Digital marketing company, Lead generation services, Lead Qualification, Digital marketing services")
@section('description', "Discover comprehensive B2B End-to-End Sales services with our leading digital marketing company. Contact us for services.")

@section('content')
<div id="banner" class="inner-banner">
    <div class="container">
        <div class="inner-title w-75" data-aos="fade-down" data-aos-offset="600" data-aos-easing="ease-in-sine">
            <h1>About Us</h1>
            <p class="text-white">Holistic digital solutions meticulously crafted to transform your business, optimize processes, elevate customer experiences & foster sustainable growth through innovation, advanced technology, strategic automation, and data-driven insights.</p>
        </div>
    </div>
    
    <video id="videobcg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
        <source src="../theme/assets/images/services.mp4" type="video/mp4">
        <source src="movie.webm" type="video/webm">Sorry, your browser does not support HTML5 video.
    </video>
</div>


<div class="about-area pt-100">
    <div class="container">
        <div class="row align-items-center justify-content-center" data-aos="fade-up" data-aos-duration="750">
            <div class="col-lg-6">
                <div class="about-play">
                    <img src="{{ asset('theme') }}/assets/images/about/about-2.png" alt="About Images">
                    <!-- <div class="about-play-content">
                        <span>Watch Our Intro Video</span>
                        <h2>Perfect Solution for It Services!</h2>
                        <div class="play-on-area">
                            <a href="https://www.youtube.com/watch?v=tUP5S4YdEJo" class="play-on popup-btn"><i class="bx bx-play"></i></a>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content ml-25">
                	<div class="section-title">
						<span class="sp-color2">24+ Years Leadership Experience</span>
						<h2>Right Partner for Software Innovation</h2>
						<p>At JFS Technologies, we are a forward-thinking technology company committed to helping businesses thrive in a constantly evolving digital landscape. With a deep understanding of emerging technologies and industry trends, we design and implement innovative solutions tailored to your specific needs. Whether it&#39;s transforming legacy systems, building interactive experiences, or scaling your operations, we are your trusted partner in achieving sustainable growth. Founded on the principles of collaboration, innovation, and excellence, JFS Technologies brings together a team of experienced professionals dedicated to delivering measurable results. Our goal is to not only solve your current challenges but also prepare your business for the opportunities of tomorrow.</p>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>


<section class="services-style-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color2">What We Do</span>
            <h2 style="max-width: 725px;">Transforming Ideas into Reality</h2>
            <p class="margin-auto">We offer a diverse portfolio of services designed to address every aspect of your digital journey. Our expertise spans across the following four key areas:</p>
        </div>
        <div class="row pt-45 mx-auto justify-content-center custom-card">
            <div class="col-lg-6 col-sm-6" data-aos="fade-up" data-aos-duration="750">
                <div class="services-card services-style-bg p-0">
                    <img src="{{ asset('theme') }}/assets/images/icons/digitalization.gif" class="brand-logo-one icons-img" alt="digitalization">
                    <h3><a href="{{ url('/services/digital-transformation') }}">1. Digital Transformation</a></h3>
                    <p>Empowering businesses to stay competitive by leveraging modern technologies and strategies.</p>
                    <p><b>Key Features:</b>
                        <ul>
                            <li><strong>Data Science:</strong> Unlock the power of your data with advanced analytics and predictive modeling.</li>
                            <li><strong>AR/VR:</strong> Create immersive experiences to enhance customer engagement and training.</li>
                            <li><strong>Application Modernisation:</strong> Transform legacy applications to meet current and future business needs.</li>
                            <li><strong>Infrastructure Management: </strong>Optimize and maintain your IT infrastructure for maximum efficiency.</li>
                        </ul>
                    </p>
                    <a href="{{ url('/services/digital-transformation') }}" class="learn-btn mb-3">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6" data-aos="fade-up" data-aos-duration="750">
                <div class="services-card services-style-bg p-0">
                    <img src="{{ asset('theme') }}/assets/images/icons/digital-exp.gif" class="brand-logo-one icons-img" alt="digital-exp">
                    <h3><a href="{{ url('/services/digital-experience') }}">2. Digital Experience</a></h3>
                    <p>Creating impactful digital interactions that resonate with your target audience.</p>
                    <p><b>Key Features:</b>
                        <ul>
                            <li><strong>Digital Marketing:</strong> Reach and engage your customers through tailored marketing strategies.</li>
                            <li><strong>Website Development:</strong> Build responsive, fast, and user-friendly websites that reflect your brand.</li>
                            <li><strong>Mobile App Development:</strong> Deliver seamless mobile experiences for iOS and Android platforms.</li>
                            <li><strong>Creative Services:</strong> Enhance your brand identity with compelling visuals, designs, and content.</li>
                        </ul>
                    </p>
                    <a href="{{ url('/services/digital-experience') }}" class="learn-btn mb-3">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="services-card services-style-bg p-0">
                    <img src="{{ asset('theme') }}/assets/images/icons/cloud.gif" class="brand-logo-one icons-img" alt="dev-cloud">
                    <h3><a href="{{ url('/services/devops') }}">3. DevOps</a></h3>
                    <p>Accelerating development cycles and enhancing operational efficiency.</p>
                    <p><b>Key Features:</b>
                        <ul>
                            <li><strong>CI/CD Pipelines:</strong> Streamline your software delivery with continuous integration and deployment.</li>
                            <li><strong>Process Automation:</strong> Automate repetitive tasks to reduce errors and save time.</li>
                            <li><strong>Containers & Microservices:</strong> Build scalable applications using containerized architectures.</li>
                            <li><strong>DevSecOps:</strong> Integrate security into every stage of your software lifecycle.</li>
                        </ul>
                    </p>
                    <a href="{{ url('/services/devops') }}" class="learn-btn mb-3">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="services-card services-style-bg p-0">
                    <img src="{{ asset('theme') }}/assets/images/icons/select.gif" class="brand-logo-one icons-img" alt="Select">
                    <h3><a href="{{ url('/services/resource-augmentation') }}">4. Resource Augmentation</a></h3>
                    <p>Providing the right talent to complement and strengthen your teams.</p>
                    <p><b>Key Features:</b>
                        <ul>
                            <li><strong>Frontend Developers:</strong> Deliver intuitive and engaging user interfaces.</li>
                            <li><strong>Backend Developers:</strong> Build robust server-side solutions for your applications.</li>
                            <li><strong>Fullstack Developers:</strong> Get experts proficient in both frontend and backend technologies.</li>
                            <li><strong>Support Engineers:</strong> Ensure seamless operation and quick resolution of technical issues.</li>
                        </ul>
                    </p>
                    <a href="{{ url('/services/resource-augmentation') }}" class="learn-btn mb-3">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
            </div>
			<div class="col-12 text-center pt-5" data-aos="zoom-in" data-aos-duration="750">
				<img src="{{ asset('theme') }}/assets/images/vmv.png" alt="Our Core Values" style="width:85%;">
			</div>
        </div>
    </div>
</section>


<!-- Trust Us Area -->	
	<div class="choose-area pt-100 pb-70 home">
		<div class="container">
			<div class="row justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="750">
				<div class="col-lg-12">
					<div class="choose-content mr-20">
						<div class="section-title mb-3">
							<span class="sp-color1"></span>
							<h2>Why Choose JFS Technologies?</h2>
						</div>
						<div class="row">
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-pencil-ruler"></i>
										<h3>Tailored Solutions</h3>
									</div>
									<p>Each service is expertly tailored to meet your unique business challenges, objectives, and long-term growth and success goals.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-users-crown"></i>
										<h3>Technology Prowess</h3>
									</div>
									<p>Our team brings deep expertise across diverse technologies, ensuring innovative, secure, scalable, and future-proof solutions.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-analytics"></i>
										<h3>Proven Track Record</h3>
									</div>
									<p>We’ve helped numerous businesses transform their digital strategies, achieving significant and measurable growth.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-globe-asia"></i>
										<h3>Global Client Base</h3>
									</div>
									<p>With experience serving businesses globally, we ensure seamless execution and world-class service no matter where you are.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="counter-area pt-100" data-aos="fade-up" data-aos-duration="750">
		<div class="container">
			<div class="section-title text-center">
				<span class="sp-color2">Clientele</span>
				<h2>Our Impact in Numbers</h2>
			</div>
			<div class="row pt-45">
				<div class="col-lg-3 col-6 col-md-3">
					<div class="counter-another-content">
						<img src="{{ asset('theme') }}/assets/images/icons/projects.svg" class="brand-logo-one" alt="experience">
						<h3>150+</h3>
						<span>Projects Delivered</span>
					</div>
				</div>
				<div class="col-lg-3 col-6 col-md-3">
					<div class="counter-another-content">
						<img src="{{ asset('theme') }}/assets/images/icons/experts.svg" class="brand-logo-one" alt="experts">
						<h3>25+</h3>
						<span>Industries Served</span>
					</div>
				</div>
				<div class="col-lg-3 col-6 col-md-3">
					<div class="counter-another-content">
						<img src="{{ asset('theme') }}/assets/images/icons/exp.svg" class="brand-logo-one" alt="Customer Base">
						<h3>10+</h3>
						<span>Years of Excellence</span>
					</div>
				</div>
				<div class="col-lg-3 col-6 col-md-3">
					<div class="counter-another-content">
						<img src="{{ asset('theme') }}/assets/images/icons/clients.svg" class="brand-logo-one" alt="locations">
						<h3>100%</h3>
						<span>Client Satisfaction</span>
					</div>
				</div>
			</div>
		</div>
		<div class="counter-shape">
			<div class="shape1">
				<img src="{{ asset('theme') }}/assets/images/shape/shape1.png" alt="Images">
			</div>
			<div class="shape2">
				<img src="{{ asset('theme') }}/assets/images/shape/shape2.png" alt="Images">
			</div>
		</div>
	</div>


<!-- Clientele Area -->
	<div class="brand-area ptb-100" data-aos="fade-up" data-aos-duration="750">
		<div class="container-fluid">
			<div class="brand-slider owl-carousel owl-theme">
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

	
	<div class="call-us-area pt-100 pb-70">
		<div class="container">
			<div class="section-title text-center">
				<span class="sp-color1">Recognitions</span>
				<h2 class="text-white">Awards & Achievements</h2>
			</div>
			<div class="row align-items-center justify-content-center pt-5">
				<div class="col-lg-2 col-6" data-aos="fade-up" data-aos-duration="750">
					<div class="work-process-card rounded">
                        <img src="{{ asset('theme') }}/assets/images/it-firms.png" class="" alt="Images">
					</div>
				</div>
				<div class="col-lg-2 col-6" data-aos="fade-up" data-aos-duration="750">
					<div class="work-process-card rounded">
                        <img src="{{ asset('theme') }}/assets/images/top-dev.png" class="" alt="Images">
					</div>
				</div>
                <div class="col-lg-2 col-6" data-aos="fade-up" data-aos-duration="750">
					<div class="work-process-card rounded">
                        <img src="{{ asset('theme') }}/assets/images/soft-sug.png" class="" alt="Images">
					</div>
				</div>
				<div class="col-lg-2 col-6" data-aos="fade-up" data-aos-duration="750">
					<div class="work-process-card rounded">
                        <img src="{{ asset('theme') }}/assets/images/top-seo.png" class="" alt="Top Seo Company">
					</div>
				</div>
				<div class="col-lg-2 col-6" data-aos="fade-up" data-aos-duration="750">
					<div class="work-process-card rounded">
                        <img src="{{ asset('theme') }}/assets/images/app-dev.png" class="" alt="Technimply - Top Mobile App Dev Company">
					</div>
				</div>
			</div>
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-2 col-6" data-aos="fade-up" data-aos-duration="750">
					<div class="work-process-card rounded">
                        <img src="{{ asset('theme') }}/assets/images/g-partner.png" class="" alt="Google Partner">
					</div>
				</div>
				<div class="col-lg-2 col-6" data-aos="fade-up" data-aos-duration="750">
					<div class="work-process-card rounded">
                        <img src="{{ asset('theme') }}/assets/images/top-dmc.png" class="" alt="Top Digital Marketing Company">
					</div>
				</div>
				<div class="col-lg-2 col-6" data-aos="fade-up" data-aos-duration="750">
					<div class="work-process-card rounded">
                        <img src="{{ asset('theme') }}/assets/images/clutch.png" class="" alt="Top SEO Company">
					</div>
				</div>
				<div class="col-lg-2 col-6" data-aos="fade-up" data-aos-duration="750">
					<div class="work-process-card rounded">
                        <img src="{{ asset('theme') }}/assets/images/bcs.png" class="" alt="Software World - Best Customer Support">
					</div>
				</div>
				<div class="col-lg-2 col-6" data-aos="fade-up" data-aos-duration="750">
					<div class="work-process-card rounded">
                        <img src="{{ asset('theme') }}/assets/images/clutch1.png" class="" alt="TOP SMM Company">
					</div>
				</div>
			</div>
		</div>
	</div>


<div class="about-area about-bg2 pt-100 pb-2" style="background: #fff;">
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
                        <span class="sp-color2">Partner Up With Us</span>
                        <h2 class="text-dark">Unlock Your Project's Potential</h2>
                        <p class="text-dark">At JFS Technologies, we are more than a service provider—we are your partner in digital transformation. Our commitment to quality, innovation, and client satisfaction drives everything we do, ensuring that your business is equipped to succeed in the digital era. For more details on each service, visit our Services Pages to learn how JFS Technologies can help your business grow.</p>
                    </div>
                    <a href="{{ url('/services') }}" class="default-btn btn-bg-one border-radius-5 py-3">Request a Free Demo</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="team-area pt-100 pb-70">
	<div class="container">
		<div class="section-title text-center w-75 mx-auto">
			<span class="sp-color2">Our Team</span>
			<h2>The Minds Behind Our Success</h2>
			<p>Our team at JFS Technologies comprises seasoned professionals, passionate innovators, and industry experts. Every team member brings a unique perspective and specialized expertise, making us uniquely equipped to tackle complex digital challenges. From data scientists and AI engineers to UX designers and cybersecurity specialists, our team is dedicated to delivering solutions that drive real results.</p>
		</div>
		<div class="row pt-45">
			<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="750">
				<div class="team-card">
					<img src="{{ asset('theme') }}/assets/images/team/team-img1.jpg" alt="Team Images">
					<ul class="social-link">
						<li>
							<a href="https://www.facebook.com/" target="_blank">
								<i class="bx bxl-facebook"></i>
							</a>
						</li>
						<li>
							<a href="https://twitter.com/?lang=en" target="_blank">
								<i class="bx bxl-twitter"></i>
							</a>
						</li>
						<li>
							<a href="https://www.linkedin.com/in/dilip-kumar-83a65722/" target="_blank">
								<i class="bx bxl-linkedin-square"></i>
							</a>
						</li>
						<li>
							<a href="https://www.instagram.com/" target="_blank">
								<i class="bx bxl-instagram"></i>
							</a>
						</li>
					</ul>
					<div class="content">
						<h3>Dilip Kumar Yadav</h3>
						<span>Founder & CFO</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="750">
				<div class="team-card">
					<img src="{{ asset('theme') }}/assets/images/team/team-img3.jpg" alt="Team Images">
					<ul class="social-link">
						<li>
							<a href="https://www.facebook.com/" target="_blank">
								<i class="bx bxl-facebook"></i>
							</a>
						</li>
						<li>
							<a href="https://twitter.com/?lang=en" target="_blank">
								<i class="bx bxl-twitter"></i>
							</a>
						</li>
						<li>
							<a href="https://www.linkedin.com/in/sandeep-pawar-0949561a/" target="_blank">
								<i class="bx bxl-linkedin-square"></i>
							</a>
						</li>
						<li>
							<a href="https://www.instagram.com/" target="_blank">
								<i class="bx bxl-instagram"></i>
							</a>
						</li>
					</ul>
					<div class="content">
						<h3>Sandeep Pawar</h3>
						<span>Co-Founder & CEO</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="750">
				<div class="team-card">
					<img src="{{ asset('theme') }}/assets/images/team/team-img4.jpg" alt="Team Images">
					<ul class="social-link">
						<li>
							<a href="#" target="_blank">
								<i class="bx bxl-linkedin-square"></i>
							</a>
						</li>
					</ul>
					<div class="content">
						<h3>Gajanan Chavan</h3>
						<span>Marketing Head</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="750">
				<div class="team-card">
					<img src="{{ asset('theme') }}/assets/images/team/team-img5.jpg" alt="Team Images">
					<ul class="social-link">
						<li>
							<a href="https://www.linkedin.com/in/irfana-shaikh-bbb7b7a7/" target="_blank">
								<i class="bx bxl-linkedin-square"></i>
							</a>
						</li>
					</ul>
					<div class="content">
						<h3>Irfana Shaikh</h3>
						<span>Marketing Manager</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="750">
				<div class="team-card">
					<img src="{{ asset('theme') }}/assets/images/team/team-img6.jpg" alt="Team Images">
					<ul class="social-link">
						<li>
							<a href="https://www.linkedin.com/" target="_blank">
								<i class="bx bxl-linkedin-square"></i>
							</a>
						</li>
					</ul>
					<div class="content">
						<h3>Aniket Palekar</h3>
						<span>Business Development Manager</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="750">
				<div class="team-card">
					<img src="{{ asset('theme') }}/assets/images/team/team-img1.jpg" alt="Team Images">
					<ul class="social-link">
						<li>
							<a href="https://www.linkedin.com/in/vineet-nair-956961238/" target="_blank">
								<i class="bx bxl-linkedin-square"></i>
							</a>
						</li>
					</ul>
					<div class="content">
						<h3>Vineet Nair</h3>
						<span>Business Development Manager</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="750">
				<div class="team-card">
					<img src="{{ asset('theme') }}/assets/images/team/team-img3.jpg" alt="Team Images">
					<ul class="social-link">
						<li>
							<a href="#" target="_blank">
								<i class="bx bxl-linkedin-square"></i>
							</a>
						</li>
					</ul>
					<div class="content">
						<h3>Amol Dagale</h3>
						<span>Business Development Manager</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="750">
				<div class="team-card">
					<img src="{{ asset('theme') }}/assets/images/team/team-img4.jpg" alt="Team Images">
					<ul class="social-link">
						<li>
							<a href="http://www.linkedin.com/in/tarun-kumar-50478618" target="_blank">
								<i class="bx bxl-linkedin-square"></i>
							</a>
						</li>
					</ul>
					<div class="content">
						<h3>Tarun Pyne</h3>
						<span>Lead Designer</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="750">
				<div class="team-card">
					<img src="{{ asset('theme') }}/assets/images/team/team-img3.jpg" alt="Team Images">
					<ul class="social-link">
						<li>
							<a href="https://www.linkedin.com/in/shubhav97/" target="_blank">
								<i class="bx bxl-linkedin-square"></i>
							</a>
						</li>
					</ul>
					<div class="content">
						<h3>VaiBhav SaxEna</h3>
						<span>Sr. Fullstack Developer</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="750">
				<div class="team-card">
					<img src="{{ asset('theme') }}/assets/images/team/team-img4.jpg" alt="Team Images">
					<ul class="social-link">
						<li>
							<a href="#" target="_blank">
								<i class="bx bxl-linkedin-square"></i>
							</a>
						</li>
					</ul>
					<div class="content">
						<h3>Deepak Chavan</h3>
						<span>Sr. Fullstack Developer</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="750">
				<div class="team-card">
					<img src="{{ asset('theme') }}/assets/images/team/team-img2.jpg" alt="Team Images">
					<ul class="social-link">
						<li>
							<a href="https://www.linkedin.com/" target="_blank">
								<i class="bx bxl-linkedin-square"></i>
							</a>
						</li>
					</ul>
					<div class="content">
						<h3>Shalaka Nakhate</h3>
						<span>SEO Specialist</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="750">
				<div class="team-card">
					<img src="{{ asset('theme') }}/assets/images/team/team-img6.jpg" alt="Team Images">
					<ul class="social-link">
						<li>
							<a href="https://www.linkedin.com/in/aditya-sharma-60ba1a106/" target="_blank">
								<i class="bx bxl-linkedin-square"></i>
							</a>
						</li>
					</ul>
					<div class="content">
						<h3>Aditya Sharma</h3>
						<span>Business Development Executive</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="750">
				<div class="team-card">
					<img src="{{ asset('theme') }}/assets/images/team/team-img1.jpg" alt="Team Images">
					<ul class="social-link">
						<li>
							<a href="#" target="_blank">
								<i class="bx bxl-linkedin-square"></i>
							</a>
						</li>
					</ul>
					<div class="content">
						<h3>Saayam Sharma</h3>
						<span>Business Development Executive</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="750">
				<div class="team-card">
					<img src="{{ asset('theme') }}/assets/images/team/team-img3.jpg" alt="Team Images">
					<ul class="social-link">
						<li>
							<a href="#" target="_blank">
								<i class="bx bxl-linkedin-square"></i>
							</a>
						</li>
					</ul>
					<div class="content">
						<h3>Nikhil Veer</h3>
						<span>Business Development Executive</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="750">
				<div class="team-card">
					<img src="{{ asset('theme') }}/assets/images/team/team-img4.jpg" alt="Team Images">
					<ul class="social-link">
						<li>
							<a href="#/" target="_blank">
								<i class="bx bxl-linkedin-square"></i>
							</a>
						</li>
					</ul>
					<div class="content">
						<h3>Rahul Sonewane</h3>
						<span>Business Development Executive</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="750">
				<div class="team-card">
					<img src="{{ asset('theme') }}/assets/images/team/team-img5.jpg" alt="Team Images">
					<ul class="social-link">
						<li>
							<a href="https://www.linkedin.com/in/anusha-patil-505009b6/" target="_blank">
								<i class="bx bxl-linkedin-square"></i>
							</a>
						</li>
					</ul>
					<div class="content">
						<h3>Anusha Patil</h3>
						<span>HR-Operations</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection