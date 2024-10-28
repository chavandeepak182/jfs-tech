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
                    <a href="index.html">Home</a>
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
                    <img src="{{ asset('theme') }}/assets/images/about/about-img1.jpg" alt="About Images">
                    <div class="about-play-content">
                        <span>Watch Our Intro Video</span>
                        <h2>Perfect Solution for It Services!</h2>
                        <!-- <div class="play-on-area">
                            <a href="https://www.youtube.com/watch?v=tUP5S4YdEJo" class="play-on popup-btn"><i class="bx bx-play"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content ml-25">
                	<div class="section-title">
						<span class="sp-color2">24+ Years Leadership Experience</span>
						<h2>Right Partner for Software Innovation</h2>
						<p>Welcome to JFS Technologies, where we accelerate your company’s growth with our innovative B2B end-to-end sales and account management solutions. Our dedicated team of professionals generates leads and encourage valuable connections for your business. We specialize in acquiring new clients and putting efforts on partnerships that drive your enterprise to new heights.</p>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<ul class="about-list text-start">
								<li><i class="bx bxs-check-circle"></i>Integrity: Our foundation, your trust</li>
								<li><i class="bx bxs-check-circle"></i>Transparency: Fostering connections with honesty & openness</li>
							</ul>
						</div>
						<div class="col-lg-6 col-md-6">
							<ul class="about-list text-start about-list-2">
								<li><i class="bx bxs-check-circle"></i>Ownership: Empowering success, together</li>
								<li><i class="bx bxs-check-circle"></i>Adaptability: Embracing change with flexibility and resilience</li>
							</ul>
						</div>
					</div>
					<p class="about-content-text">As industry leaders, we provide unparalleled services tailored for software companies in both the US and European markets. Partner with JFS Technologies to harness the full potential of our solutions, optimizing your sales pipeline for exceptional growth and success.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Trust Us Area -->	
	<div class="choose-area pt-100 pb-70">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-6">
					<div class="choose-content mr-20">
						<div class="section-title">
							<span class="sp-color1"></span>
							<h2>Why Trust Us?</h2>
						</div>
						<div class="row">
							<div class="col-lg-6 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-pencil-ruler"></i>
										<h3>Tailored Solutions</h3>
									</div>
									<p>We provide customised solutions that align with your business objectives, ensuring your goals are met effectively.</p>
								</div>
							</div>
							<div class="col-lg-6 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-users-crown"></i>
										<h3>Experienced Team</h3>
									</div>
									<p>Our expert developers and digital marketing professionals bring extensive industry experience and technical proficiency.</p>
								</div>
							</div>
							<div class="col-lg-6 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-analytics"></i>
										<h3>Proven Success</h3>
									</div>
									<p>We’ve helped numerous businesses transform their digital strategies, achieving significant and measurable growth.</p>
								</div>
							</div>
							<div class="col-lg-6 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-globe-asia"></i>
										<h3>Global Reach</h3>
									</div>
									<p>With clients worldwide, we ensure seamless project management and consistent, high-quality delivery across borders.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="choose-img">
						<img src="{{ asset('theme') }}/assets/images/choose-img.jpg" alt="Images">
					</div>
				</div>
			</div>
		</div>
	</div>

<div class="security-area pt-100 pb-70">
	<div class="container">
		<div class="section-title text-center">
		<span class="sp-color2">IT Security & Computing</span>
		<h2>Searching for a Solution! We Provide Truly Prominent Solutions</h2>
		</div>
		<div class="row pt-45">
			<div class="col-lg-4 col-sm-6">
			<div class="security-card">
			<i class="flaticon-cyber-security"></i>
			<h3><a href="case-details.html">Business Security</a></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam blandit scelerisque ullamcorper proin scelerisque tortor odio.</p>
			</div>
			</div>
			<div class="col-lg-4 col-sm-6">
			<div class="security-card">
			<i class="flaticon-computer"></i>
			<h3><a href="case-details.html">Manage IT Service</a></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam blandit scelerisque ullamcorper proin scelerisque tortor odio.</p>
			</div>
			</div>
			<div class="col-lg-4 col-sm-6">
			<div class="security-card">
			<i class="flaticon-effective"></i>
			<h3><a href="case-details.html">Product Analysis</a></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam blandit scelerisque ullamcorper proin scelerisque tortor odio.</p>
			</div>
			</div>
			<div class="col-lg-4 col-sm-6">
			<div class="security-card">
			<i class="flaticon-implement"></i>
			<h3><a href="case-details.html">Analytic Solution</a></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam blandit scelerisque ullamcorper proin scelerisque tortor odio.</p>
			</div>
			</div>
			<div class="col-lg-4 col-sm-6">
			<div class="security-card">
			<i class="flaticon-consulting"></i>
			<h3><a href="case-details.html">Finest Quality</a></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam blandit scelerisque ullamcorper proin scelerisque tortor odio.</p>
			</div>
			</div>
			<div class="col-lg-4 col-sm-6">
			<div class="security-card">
			<i class="flaticon-consultant"></i>
			<h3><a href="case-details.html">Risk Management</a></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam blandit scelerisque ullamcorper proin scelerisque tortor odio.</p>
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
		<div class="section-title text-center">
			<span class="sp-color2">Our Team</span>
			<h2>Our Team Members</h2>
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