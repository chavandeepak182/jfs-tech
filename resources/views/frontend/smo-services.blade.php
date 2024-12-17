@extends('frontend.layouts.header')
@section('title', "Best Social Media Marketing Agency - JFS Technologies")
@section('description', "Best Social media marketing agency, SMO services, SMO agency, Best Social media optimization company, Social media marketing services, Social media management agencies, Top Social Media Services")
@section('keywords', "IT Services, Account Management services, Digital marketing services, Website Design company, Website design services, End to end sales, outsourcing, Affordable digital marketing services, Website marketing services, SEO service agency, Social media marketing, SEO company for business")

@section('content')

<div id="banner" class="inner-banner">
    <div class="container">
        <div class="inner-title text-center w-75 mx-auto invisible">
            <h1>Social Media Magic: Transform Likes into Leads</h1>
            <p class="text-white"></p>
            <div class="banner-btn">
				<a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-50 ml-20">Explore Our Solutions <i class="bx bx-chevron-right"></i></a>
			</div>
        </div>
    </div>

    <video id="videobcg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
        <source src="../theme/assets/images/smo-vc.mp4" type="video/mp4">
        <source src="movie.webm" type="video/webm">Sorry, your browser does not support HTML5 video.
    </video>
</div>


<section class="services-style-area home_cards pt-100 pb-70">
	<div class="container">
        <div class="section-title text-center">
            <span class="sp-color2"></span>
            <h2>Social Media Tailored to Dominate Your Market</h2>
            <p class="margin-auto">Social Media Marketing (SMM) involves using platforms like Facebook, Instagram, Twitter, LinkedIn, and others to promote your products or services. It’s an effective way to increase brand awareness, engage with customers, and drive traffic to your website. With millions of users on these platforms, social media marketing offers a vast opportunity to grow your business. At JFS Technologies, we help businesses create an impactful presence on social media. We focus on crafting engaging content, growing your community, and leveraging social platforms for increased brand recognition and customer engagement.</p>
        </div>
		<div class="row pt-45">
			<div class="col-lg-6 col-sm-6">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Social Media Strategy Development</h3>
					<p>We begin by understanding your business goals, target audience, and competitors to develop a tailored social media strategy that aligns with your brand and objectives. This includes choosing the right platforms, defining KPIs, and setting measurable goals.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/computer.svg" class="brand-logo-one" alt="computer" style="width:22%;">
				</div>
			</div>
            <div class="col-lg-6 col-sm-6">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Community Management</h3>
					<p>We help build a loyal community around your brand by engaging with followers, responding to queries, and fostering a positive environment. This leads to increased trust, brand loyalty, and higher conversion rates.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/computer.svg" class="brand-logo-one" alt="computer" style="width:22%;">
				</div>
			</div>
            <div class="col-lg-6 col-sm-6">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Content Creation & Curation</h3>
					<p>Our team creates content that resonates with your audience and encourages engagement. From eye-catching visuals to interactive posts, we craft tailored strategies to ensure your content is relevant & drives conversations.
                        <ul>
                            <li><strong>Post Design:</strong> Creative posts that align with your brand's voice and visual identity, effectively communicating your message while building recognition, trust, and engagement with your audience.</li>
                            <li><strong>Content Calendar:</strong> We plan content around key dates, industry events, and promotions to maintain consistency.</li>
                        </ul>
                    </p>
                    <img src="{{ asset('theme') }}/assets/images/icons/computer.svg" class="brand-logo-one" alt="computer" style="width:22%;">
				</div>
			</div>
            <div class="col-lg-6 col-sm-6">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Paid Social Media Advertising</h3>
					<p>We run targeted ads to reach your ideal audience. Whether it’s Facebook, Instagram, or LinkedIn, we design and manage ad campaigns that increase visibility and drive conversions.
                        <ul>
                            <li><strong>Ad Copy & Visual Design:</strong> Engaging ad creatives that prompt action.</li>
                            <li><strong>A/B Testing:</strong> Testing ad variations to find the best performing campaigns.</li>
                            <li><strong>Analytics & Reporting:</strong> Tracking key metrics like click-through rates, impressions, and conversions to continuously improve performance.</li>
                        </ul>
                    </p>
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
						<h2>Why Choose Our Social Media Marketing Services?</h2>
					</div>
					<div class="row">
						<div class="col-lg-3 col-6">
							<div class="choose-content-card">
								<div class="content">
									<i class="fal fa-pencil-ruler"></i>
									<h3>Tailored Strategies:</h3>
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
								<p>Our skilled team of professionals brings deep expertise to every project.</p>
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


    <div class="about-area pt-100 pb-70">
		<div class="container">
            <div class="row justify-content-center align-items-center">
				<div class="col-lg-10">
                    <div class="section-title text-center mx-auto" style="max-width:650px">
                        <span class="sp-color2">Pricing Made Easy</span>
                        <h2>Get Started with the Right Package</h2>
                    </div>
					<div class="choose-content mt-4">
                        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">For India</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">For Other Countries</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <table class="table text-center table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col"><h4 class="sp-color1">Features Comparison</h4></th>
                                            <th scope="col"><span style="color: #359ded; font-size: 25px;font-weight: 500;">Standard</span></th>
                                            <th scope="col"><span style="color: #0282c9; font-size: 25px;font-weight: 500;">Professional</span></th>
                                            <th scope="col"><span style="color: #488872; font-size: 25px;font-weight: 500;">Enterprise</span></th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                        <tr>
                                            <th>Cost</th>
                                            <td><strong style="color: #359ded; font-size: 18px;font-weight: 600;">₹20,000</strong></td>
                                            <td><strong style="color: #0282c9; font-size: 18px;font-weight: 600;">₹30,000</strong></td>
                                            <td><strong style="color: #488872; font-size: 18px;font-weight: 600;">₹40,000</strong></td>
                                        </tr>
                                        <tr>
                                            <th>One-Time Setup Charges</th>
                                            <td>₹20,000</td>
                                            <td>₹20,000</td>
                                            <td>₹20,000</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><h5 class="sp-color2">Facebook </h5></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Business Page Creation</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Post Creation & Sharing</td>
                                            <td>12/month</td>
                                            <td>16/month</td>
                                            <td>22/month</td>
                                        </tr>
                                        <tr>
                                            <td>Post Sharing in Groups</td>
                                            <td>10</td>
                                            <td>15</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <td>Video Posting (2D Video)</td>
                                            <td><i class="fad fa-horizontal-rule fa-2x fa-2x"></i></td>
                                            <td>2/month</td>
                                            <td>4/month</td>
                                        </tr>
                                        <tr>
                                            <td>Increase Followers and Likes</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Call to Action Button Creation</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><h5 class="sp-color2">Instagram</h5></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Page Creation</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Page Optimization</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Post Creation & Sharing</td>
                                            <td>12/month</td>
                                            <td>16/month</td>
                                            <td>22/month</td>
                                        </tr>
                                        <tr>
                                            <td>Instagram Stories Creation</td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td>2/month</td>
                                            <td>6/month</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><h5 class="sp-color2">LinkedIn</h5></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Company Page Creation</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Profile & Cover Pic Creation</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Profile Optimization</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Video Posting (2D Video)</td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td>2/month</td>
                                            <td>4/month</td>
                                        </tr>
                                        <tr>
                                            <td>Post Creation & Sharing</td>
                                            <td>12/month</td>
                                            <td>16/month</td>
                                            <td>22/month</td>
                                        </tr>
                                        <tr>
                                            <td>Invite Connections to Like Page</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Post Sharing in Groups</td>
                                            <td>5</td>
                                            <td>8</td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><h5 class="sp-color2">YouTube</h5></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Channel Creation</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Channel Pic & Cover Pic Creation</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Video Posting (2D Video)</td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td>2/month</td>
                                            <td>4/month</td>
                                        </tr>
                                        <tr>
                                            <td>Thumbnail Creation</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Keyword Research</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Video Tags Creation</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Playlist Creation</td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Video Backlinks</td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><h5 class="sp-color2">Twitter</h5></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Profile Creation</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Profile & Background Picture Creation</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Tweet Per Week</td>
                                            <td>12/month</td>
                                            <td>16/month</td>
                                            <td>22/month</td>
                                        </tr>
                                        <tr>
                                            <td>Following Industry Related People</td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Increase Twitter Followers</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><h5 class="sp-color2">Pinterest</h5></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Profile Creation</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Posting Per Week</td>
                                            <td>12/month</td>
                                            <td>16/month</td>
                                            <td>22/month</td>
                                        </tr>
                                        <tr>
                                            <td>Board Creation</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>Follow Relevant Account and Boards</td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Inviting Relevant Pinners on Board</td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><h5 class="sp-color2">Other Services</h5></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Advanced Engagement Strategies</td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Influencer Collaboration & Outreach</td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Custom Graphics & Content Creation</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Comprehensive Social Media Strategy</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Social Media Advertising Management</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Event Promotion and Live Coverage</td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <table class="table text-center table-striped">
                                    <thead>
                                        <tr>
                                        <th scope="col"><h4 class="sp-color1">Features Comparison</h4></th>
                                        <th scope="col"><span style="color: #359ded; font-size: 25px;font-weight: 500;">Standard</span></th>
                                        <th scope="col"><span style="color: #0282c9; font-size: 25px;font-weight: 500;">Professional</span></th>
                                        <th scope="col"><span style="color: #488872; font-size: 25px;font-weight: 500;">Enterprise</span></th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                        <tr>
                                            <th>Cost</th>
                                            <td><strong style="color: #359ded; font-size: 18px;font-weight: 600;">$700</strong></td>
                                            <td><strong style="color: #0282c9; font-size: 18px;font-weight: 600;">$1,000</strong></td>
                                            <td><strong style="color: #488872; font-size: 18px;font-weight: 600;">$1,400</strong></td>
                                        </tr>
                                        <tr>
                                            <th>One-Time Setup Charges</th>
                                            <td>$700</td>
                                            <td>$700</td>
                                            <td>$700</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><h5 class="sp-color2">Facebook</h5></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Business Page Creation</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Post Creation & Sharing</td>
                                            <td>12/month</td>
                                            <td>16/month</td>
                                            <td>22/month</td>
                                        </tr>
                                        <tr>
                                            <td>Post Sharing in Groups</td>
                                            <td>10</td>
                                            <td>15</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <td>Video Posting (2D Video)</td>
                                            <td><i class="fad fa-horizontal-rule fa-2x fa-2x"></i></td>
                                            <td>2/month</td>
                                            <td>4/month</td>
                                        </tr>
                                        <tr>
                                            <td>Increase Followers and Likes</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Call to Action Button Creation</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><h5 class="sp-color2">Instagram</h5></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Page Creation</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Page Optimization</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Post Creation & Sharing</td>
                                            <td>12/month</td>
                                            <td>16/month</td>
                                            <td>22/month</td>
                                        </tr>
                                        <tr>
                                            <td>Instagram Stories Creation</td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td>2/month</td>
                                            <td>6/month</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><h5 class="sp-color2">LinkedIn</h5></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Company Page Creation</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Profile & Cover Pic Creation</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Profile Optimization</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Video Posting (2D Video)</td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td>2/month</td>
                                            <td>4/month</td>
                                        </tr>
                                        <tr>
                                            <td>Post Creation & Sharing</td>
                                            <td>12/month</td>
                                            <td>16/month</td>
                                            <td>22/month</td>
                                        </tr>
                                        <tr>
                                            <td>Invite Connections to Like Page</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Post Sharing in Groups</td>
                                            <td>5</td>
                                            <td>8</td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><h5 class="sp-color2">YouTube</h5></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Channel Creation</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Channel Pic & Cover Pic Creation</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Video Posting (2D Video)</td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td>2/month</td>
                                            <td>4/month</td>
                                        </tr>
                                        <tr>
                                            <td>Thumbnail Creation</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Keyword Research</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Video Tags Creation</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Playlist Creation</td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Video Backlinks</td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><h5 class="sp-color2">Twitter</h5></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Profile Creation</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Profile & Background Picture Creation</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Tweet Per Week</td>
                                            <td>12/month</td>
                                            <td>16/month</td>
                                            <td>22/month</td>
                                        </tr>
                                        <tr>
                                            <td>Following Industry Related People</td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Increase Twitter Followers</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><h5 class="sp-color2">Pinterest</h5></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Profile Creation</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Posting Per Week</td>
                                            <td>12/month</td>
                                            <td>16/month</td>
                                            <td>22/month</td>
                                        </tr>
                                        <tr>
                                            <td>Board Creation</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>Follow Relevant Account and Boards</td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Inviting Relevant Pinners on Board</td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><h5 class="sp-color2">Other Services</h5></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Advanced Engagement Strategies</td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Influencer Collaboration & Outreach</td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Custom Graphics & Content Creation</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Comprehensive Social Media Strategy</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Social Media Advertising Management</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Event Promotion and Live Coverage</td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>


<div class="about-area about-bg2 pt-5">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img-4">
                    <img src="../theme/assets/images/modern-cta.png" alt="About Images">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content-3 ml-20">
                    <div class="section-title">
                        <span class="sp-color1">Partner Up With Us</span>
                        <h2>Ready to improves your rankings and drives results?</h2>
                        <p>Built a cohesive visual identity to enhance brand recognition. Whether you're looking to refresh your brand’s image, elevate user experiences, or craft compelling content, our creative team is ready to bring your vision to life and drive impactful results.</p>
                    </div>
                    <a href="http://127.0.0.1:8000/contact-us" class="default-btn btn-bg-one border-radius-5 py-3">Contact Us</a>
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
                                            What does your social media marketing services offer?
                                        </a>
                                        <div class="accordion-content show">
                                            <p>Our social media marketing company offers a comprehensive range of services including social media strategy development, content creation, community management, paid advertising, and analytics tracking.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            How can social media optimization benefit my business?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Social media marketing and advertising can benefit your business by increasing brand awareness, driving website traffic, generating leads, engaging with your audience, building customer loyalty, and ultimately boosting sales and revenue.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            How do you determine the right social media strategy for my business?
                                        </a>
                                        <div class="accordion-content">
                                            <p>We conduct a thorough analysis of your business goals, target audience, industry, competitors, and current social media advertising agencies presence to develop a customized social media strategy that aligns with your objectives and resonates with your audience.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            Which social media platforms do you recommend for my business?
                                        </a>
                                        <div class="accordion-content">
                                            <p>The social media platforms we recommend depend on factors such as your target audience demographics, industry, and business goals. We typically recommend platforms like Facebook, Instagram, Twitter, LinkedIn, and Pinterest, but we tailor our recommendations to your specific needs.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            How do you measure the success of your social media campaigns?
                                        </a>
                                        <div class="accordion-content">
                                            <p>We measure the success of our social media campaigns using various metrics such as engagement rates, reach, impressions, clicks, conversions, and return on investment (ROI). We provide regular reports and analytics to track progress and optimize campaigns accordingly.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            Can you guarantee specific results from your social media marketing services efforts?
                                        </a>
                                        <div class="accordion-content">
                                            <p>While we cannot guarantee specific results, we are committed to implementing best practices and strategies to maximize the effectiveness of your social media marketing companies campaigns and achieve your business objectives.</p>
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