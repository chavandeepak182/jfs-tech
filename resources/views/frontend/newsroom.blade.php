@extends('frontend.layouts.header')
@section('title', "Welcome to the Newsroom - JFS Technologies")
@section('description', "Elevate your online presence with our Digital marketing company services. Drive growth and engagement with tailored strategies.")
@section('keywords', "IT Services, Account Management services, Digital marketing services, Website Design company, Website design services, End to end sales, outsourcing, Affordable digital marketing services, Website marketing services, SEO service agency, Social media marketing, SEO company for business")

@section('content')

<div class="banner-five-area">
    <div class="container-fluid">
        <div class="row align-items-center" data-aos="fade-down" data-aos-offset="500" data-aos-easing="ease-in-sine">
            <div class="col-lg-6">
                <div class="banner-five-content">
                    <span></span>
                    <h1 class="text-white">Welcome to the JFS <b>Newsroom</b></h1>
                    <p class="text-white">A hub for the latest updates, insights, and achievements from our organization. Stay informed about our news, events, and collaborations as we continue to drive innovation and deliver impactful solutions. Explore our newsroom to gain a deeper understanding of our journey, milestones, and contributions to the tech industry.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner-five-img mx-auto w-75">
                    <img src="{{ asset('theme') }}/assets/images/digital-trans.png" alt="Images">
                </div>
            </div>
        </div>
    </div>
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
						<span class="sp-color2">Latest News</span>
						<h2>What’s Happening Now: Top Stories</h2>
						<p>Get the most recent updates from JFS Technologies, including press releases, announcements, and company milestones.</p>
                        <p><strong>Our CEO at GITEX 2024: Showcasing Innovations in Dubai</strong><br>
                        <p><i class="fal fa-calendar-alt fa-2x sp-color2"></i> October 14–18, 2024 <i class="fal fa-location-circle fa-2x sp-color2 ml-20"></i> Dubai World Trade Centre</p>
                        <p>Our CEO represented JFS Technologies at GITEX 2024, one of the largest tech events in the world. This participation highlighted our cutting-edge solutions in digital transformation, DevOps, and resource augmentation to a global audience.</p>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>


<section class="services-style-area newsroom pt-100 pb-70">
	<div class="container">
		<div class="section-title text-center">
			<span class="sp-color2">Upcoming Events</span>
			<h2>Top News of the Moment</h2>
		</div>
		<div class="row pt-45">
			<div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="750">
				<div class="work-process-card-three">
                    <h3>Tech Connect 2025– Emerging Trends in Digital Experience</h3>
                    <p><i class="fal fa-calendar-alt fa-2x sp-color2"></i> January 15, 2024 </p>
                    <p class="pt-2 pb-2"><i class="fal fa-location-circle fa-2x sp-color2"></i> Virtual</p>
                    <p>Explore how businesses can redefine customer experiences through cutting-edge technology.</p>
				</div>
			</div>
            <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
				<div class="work-process-card-three">
                    <h3>Workshop: Mastering DevSecOps</h3>
                    <p><i class="fal fa-calendar-alt fa-2x sp-color2"></i> February 20, 2025 </p>
                    <p class="pt-2 pb-2"><i class="fal fa-location-circle fa-2x sp-color2"></i> JFS Technologies HQ</p>
                    <p>Hands-on training with our experienced experts in seamlessly integrating security into your DevOps practices effectively.</p>
				</div>
			</div>
            <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1250">
				<div class="work-process-card-three">
                    <h3>Webinar: Future of Resource Augmentation</h3>
                    <p><i class="fal fa-calendar-alt fa-2x sp-color2"></i> March 10, 2025</p>
                    <p class="pt-2 pb-2"><i class="fal fa-location-circle fa-2x sp-color2"></i> Virtual</p>
                    <p>Learn how flexible staffing solutions can enhance your project outcomes and improve efficiency, productivity, and overall success.</p>
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
							<span class="sp-color1"></span>
							<h2>Why Follow Our Newsroom?</h2>
						</div>
						<div class="row">
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-pencil-ruler"></i>
										<h3>Stay Informed & Engaged</h3>
									</div>
									<p>Be the first to know about our latest innovations, projects, and exclusive updates.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-users-crown"></i>
										<h3>Industry Insights</h3>
									</div>
									<p>Gain valuable perspectives from our events, expert opinions, and insightful discussions.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-analytics"></i>
										<h3>Join the Conversation</h3>
									</div>
									<p>Connect with our team at events and workshops to explore collaboration opportunities.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
                                        <i class="fal fa-headset"></i>
										<h3>Inspirational Stories</h3>
									</div>
									<p>Learn how JFS Technologies makes an impact through our news and initiatives.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<div class="about-area about-bg2 pt-100 pb-70" style="background: #fff;">
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
                        <h2 class="text-dark">Fresh Off the Press: Newsworthy Highlights</h2>
                        <p class="text-dark">At JFS Technologies, we believe in sharing our journey transparently with our clients, partners, and stakeholders. The Newsroom serves as a bridge to keep you informed and connected with our growth and achievements. Contact Us to learn more about our initiatives or collaborate with us on future projects.</p>
                    </div>
                    <a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-5 py-3">Contact Us Today</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection