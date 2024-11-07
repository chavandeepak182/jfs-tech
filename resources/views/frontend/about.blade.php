@extends('frontend.layouts.header')
@section('title', "Best B2B End-to-End Sales | Digital Marketing Company - JFS Technologies")
@section('keywords', "B2B End-to-End Sales, B2B End-to-End Sales Services, Digital marketing company, Lead generation services, Lead Qualification, Digital marketing services")
@section('description', "Discover comprehensive B2B End-to-End Sales services with our leading digital marketing company. Contact us for services.")

@section('content')
<div class="inner-banner">
    <div class="container">
        <div class="inner-title text-center">
            <h3>About Us</h3>
            <ul>
                <li>
                    <a href=" ">Home</a>
                </li>
                <li>
                    <i class="bx bx-chevrons-right"></i>
                </li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
    <div class="inner-shape">
        <img src="{{ asset('theme') }}/assets/images/shape/inner-shape.png" alt="Images">
    </div>
</div>


<div class="about-area ptb-100">
    <div class="container">
        <div class="row align-items-center justify-content-center">
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
						<p>At JFS Technologies, we believe in driving digital transformation with purpose and innovation. As a trusted partner for businesses across industries, we specialize in providing tailored digital solutions that elevate operational efficiency, enhance customer experience, and foster sustainable growth. Our expertise spans Data Science, AR/VR, Application Modernization, and Infrastructure Management, among other advanced digital services. Whether it’s revolutionizing customer engagement with AI or creating immersive AR/VR experiences, JFS Technologies is committed to empowering your business for the future.</p>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>


<!-- Trust Us Area -->	
	<div class="choose-area pt-100 pb-70">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-12">
					<div class="choose-content mr-20">
						<div class="section-title">
							<span class="sp-color1">We Are Best!!</span>
							<h2>Why Trust Us?</h2>
							<p>Partner with us for a digital journey built on trust, innovation, and a commitment to your success. Trust is the foundation of our relationship with clients. Here’s why businesses around the world choose JFS Technologies:</p>
						</div>
						<div class="row pt-4">
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-pencil-ruler"></i>
										<h3>Tailored Solutions</h3>
									</div>
									<p>Our services are designed to meet the specific needs of each client, ensuring a customized approach that aligns with your goals.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-users-crown"></i>
										<h3>Commitment to Security</h3>
									</div>
									<p>We prioritize data security and compliance, giving you peace of mind as you transition to digital.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-analytics"></i>
										<h3>Proven Expertise</h3>
									</div>
									<p>With years of experience across sectors, we bring a wealth of knowledge in digital transformation.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-globe-asia"></i>
										<h3>Innovation-Driven</h3>
									</div>
									<p>Staying at the forefront of technology, we constantly explore new tools and techniques to provide the best solutions.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="col-lg-6">
					<div class="choose-img">
						<img src="{{ asset('theme') }}/assets/images/choose-img.jpg" alt="Images">
					</div>
				</div> -->
			</div>
		</div>
	</div>

<div class="security-area pt-100 pb-70">
	<div class="container">
		<div class="section-title text-center w-75 mx-auto">
			<span class="sp-color2">IT Security & Computing</span>
			<h2>We Provide Truly Prominent Solutions</h2>
			<p>In a rapidly evolving digital landscape, IT security is essential. At JFS Technologies, our dedicated team ensures that your data and systems are protected against emerging threats. From implementing robust security protocols to real-time monitoring and proactive incident response, we are committed to safeguarding your operations. Our security services include:</p>
		</div>
		<div class="row pt-45">
			<div class="col-lg-4 col-sm-6">
				<div class="security-card">
					<i class="flaticon-cyber-security"></i>
					<h3><a>24/7 Monitoring</a></h3>
					<p>Around-the-clock vigilance ensures that potential threats are identified and mitigated swiftly.</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="security-card">
					<i class="flaticon-computer"></i>
					<h3><a>Data Protection</a></h3>
					<p>Advanced encryption and secure storage systems protect sensitive information.</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="security-card">
					<i class="flaticon-effective"></i>
					<h3><a>Compliance</a></h3>
					<p>We ensure your digital infrastructure meets industry standards and regulatory requirements, keeping your business compliant and secure.</p>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="brand-area-two ptb-100" style="background-color: #f4f4ff;">
    <div class="container-fluid">
        <div class="brand-slider owl-carousel owl-theme">
            <div class="brand-item">
				<img src="{{ asset('theme') }}/assets/images/brand-logo/apisdor.png" class="brand-logo-one" alt="apisdor">
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
				<img src="{{ asset('theme') }}/assets/images/brand-logo/protowell.png" class="brand-logo-one" alt="protowell">
			</div>
			<div class="brand-item">
				<img src="{{ asset('theme') }}/assets/images/brand-logo/jfin.png" class="brand-logo-one" alt="jfinserv">
			</div>
			<div class="brand-item">
				<img src="{{ asset('theme') }}/assets/images/brand-logo/hno.png" class="brand-logo-one" alt="HnO">
			</div>
			<div class="brand-item">
				<img src="{{ asset('theme') }}/assets/images/brand-logo/dev.png" class="brand-logo-one" alt="Dev Constructions">
			</div>
			<div class="brand-item">
				<img src="{{ asset('theme') }}/assets/images/brand-logo/hb.png" class="brand-logo-one" alt="HealthBee">
			</div>
			<div class="brand-item">
				<img src="{{ asset('theme') }}/assets/images/brand-logo/lido.png" class="brand-logo-one" alt="LIDO Cabs">
			</div>
        </div>
    </div>
</div>


    <div class="counter-area pt-100 pb-70">
		<div class="container">
			<div class="section-title text-center">
				<span class="sp-color2">Key highlights</span>
				<h2>Let’s Check Our Business Growth and Success Story</h2>
			</div>
			<div class="row pt-45">
				<div class="col-lg-3 col-6 col-md-3">
					<div class="counter-another-content">
						<i class="flaticon-web-development"></i>
						<h3>10+</h3>
						<span>Years Industry Experience</span>
					</div>
				</div>
				<div class="col-lg-3 col-6 col-md-3">
					<div class="counter-another-content">
						<i class="flaticon-web-development"></i>
						<h3>250+</h3>
						<span>Industry Experts</span>
					</div>
				</div>
				<div class="col-lg-3 col-6 col-md-3">
					<div class="counter-another-content">
						<i class="flaticon-startup"></i>
						<h3>5+</h3>
						<span>Locations</span>
					</div>
				</div>
				<div class="col-lg-3 col-6 col-md-3">
					<div class="counter-another-content">
						<i class="flaticon-consulting-1"></i>
						<h3>1000+</h3>
						<span>Clients Worldwide</span>
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


	<div class="call-us-area">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-5">
					<div class="call-contact">
						<h3>Recognitions</h3>
						<a class="call-btn">Awards &amp; Achievements</a>
						<p>We've earned honors as one of the top digital marketing agency across the nation and internationally.</p>
					</div>
				</div>
				<div class="col-lg-7 pt-5 pb-3">
					<div class="row">
						<div class="col-lg-4 col-4">
							<div class="work-process-card rounded">
                                <img src="{{ asset('theme') }}/assets/images/it-firms.png" class="" alt="Images">
							</div>
						</div>
						<div class="col-lg-4 col-4">
							<div class="work-process-card rounded">
                                <img src="{{ asset('theme') }}/assets/images/top-dev.png" class="" alt="Images">
							</div>
						</div>
                        <div class="col-lg-4 col-4">
							<div class="work-process-card rounded">
                                <img src="{{ asset('theme') }}/assets/images/soft-sug.png" class="" alt="Images">
							</div>
						</div>
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
			<div class="col-lg-3 col-md-6">
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
			<div class="col-lg-3 col-md-6">
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
			<div class="col-lg-3 col-md-6">
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
			<div class="col-lg-3 col-md-6">
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
			<div class="col-lg-3 col-md-6">
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
			<div class="col-lg-3 col-md-6">
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
			<div class="col-lg-3 col-md-6">
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
			<div class="col-lg-3 col-md-6">
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
			<div class="col-lg-3 col-md-6">
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
			<div class="col-lg-3 col-md-6">
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
			<div class="col-lg-3 col-md-6">
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
			<div class="col-lg-3 col-md-6">
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
			<div class="col-lg-3 col-md-6">
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
						<h3>Sayaam Sharma</h3>
						<span>Business Development Executive</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
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
			<div class="col-lg-3 col-md-6">
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
			<div class="col-lg-3 col-md-6">
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