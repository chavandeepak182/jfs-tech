@extends('frontend.layouts.header')
@section('title', "Best SEO Service Provider - JFS Technologies")
@section('description', "Explore best SEO service provider and SEO companies for small business. Enhance your online presence with expert SEO to your needs. Contact us for SEO Services.")
@section('keywords', "IT Services, Account Management services, Digital marketing services, Website Design company, Website design services, End to end sales, outsourcing, Affordable digital marketing services, Website marketing services, SEO service agency, Social media marketing, SEO company for business")

@section('content')

<div id="banner" class="inner-banner">
    <div class="container">
        <div class="inner-title w-75" data-aos="fade-right" data-aos-offset="500" data-aos-easing="ease-in-sine">
            <h1>Boost Your Website Traffic with Proven SEO Strategies</h1>
            <p class="text-white"></p>
            <div class="banner-btn">
				<a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-50">Let’s Start Today! <i class="bx bx-chevron-right"></i></a>
			</div>
        </div>
    </div>

    <video id="videobcg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
        <source src="../theme/assets/images/seo-bnr.mp4" type="video/mp4">
        <source src="movie.webm" type="video/webm">Sorry, your browser does not support HTML5 video.
    </video>
</div>

<section class="services-style-area home_cards pt-100 pb-70">
	<div class="container">
        <div class="section-title text-center">
            <span class="sp-color2">Dominate Search Rankings Today!</span>
            <h2>Result-Driven SEO Agency to Increase Your Visibility</h2>
            <p class="margin-auto" data-aos="fade-up" data-aos-duration="500">Search Engine Optimization (SEO) is the process of improving your website’s visibility on search engines like Google, Bing, and Yahoo. SEO ensures that yourwebsite appears in front of potential customers when they search for relevant keywords related to your business. A well-optimized website not only ranks higher but also attracts quality traffic, improves user experience, and boosts conversions. At JFS Technologies, we follow a comprehensive approach to SEO that includes both on-page and off-page optimization strategies, ensuring your website ranks well and remains competitive. Our SEO services are customized for your business’s specific needs, industry, and target audience</p>
        </div>
		<div class="row pt-45">
			<div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="500">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>On-Page SEO</h3>
					<p>Optimizing individual web pages for specific keywords to increase the relevance and rankings in search engine results.
                        <ul>
                            <li><strong>Keyword Research:</strong> Identifying high-performing, relevant keywords that your audience is searching for.</li>
                            <li><strong>Content Optimization:</strong> Crafting high-quality, engaging content that aligns with search intent.</li>
                            <li><strong>Meta Tags & Headings:</strong> Optimizing title tags, meta descriptions, and headers to improve click-through rates.</li>
                            <li><strong>Internal Linking:</strong> Structuring your website with a clear navigation system to help users and search engines find your content.</li>
                        </ul>
                    </p>
                    <img src="{{ asset('theme') }}/assets/images/icons/off-page-seo.svg" class="brand-logo-one" alt="off-page-seo" style="width:22%;">
				</div>
			</div>
            <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="750">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Off-Page SEO</h3>
					<p>Building the authority of your website by earning high-quality backlinks from reputable websites and industry leaders.
                        <ul>
                            <li><strong>Backlink Strategy:</strong> Acquiring high-quality backlinks through guest posts, outreach, and partnerships.</li>
                            <li><strong>Social Signals:</strong> Using social media platforms to drive traffic and enhance your website's credibility.</li>
                            <li><strong>Local SEO:</strong> Optimizing your website for local search queries to help your business rank in local search results.</li>
                            <li><strong>Content Marketing:</strong> Creating valuable, engaging content that naturally attracts backlinks and drives organic traffic.</li>
                        </ul>
                    </p>
                    <img src="{{ asset('theme') }}/assets/images/icons/on-page-seo.svg" class="brand-logo-one" alt="on-page-seo" style="width:22%;">
				</div>
			</div>
            <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Technical SEO</h3>
					<p>Improving the technical aspects of your website to ensure it's easily crawled, indexed, accessible, and optimized for performance.
                        <ul>
                            <li><strong>Site Speed Optimization:</strong> Improving website load times for a better user experience and better rankings.</li>
                            <li><strong>Mobile Optimization:</strong> Ensuring your site is fully responsive and mobile-friendly.</li>
                            <li><strong>Crawlability & Indexability:</strong> Fixing technical issues that prevent search engines from crawling and indexing your site properly.</li>
                            <li><strong>Structured Data:</strong> Implementing schema markup to help search engines understand and display your content more effectively.</li>
                        </ul>
                    </p>
                    <img src="{{ asset('theme') }}/assets/images/icons/technical-seo.svg" class="brand-logo-one" alt="technical-seo" style="width:22%;">
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
						<span class="sp-color1">We Are Best!!</span>
						<h2>Why Choose Our SEO Services?</h2>
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
            <div class="row justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="750">
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
                                            <th scope="col"><span style="color: #359ded; font-size: 25px;font-weight: 500;">Standard</span><br>₹30000/Month</th>
                                            <th scope="col"><span style="color: #0282c9; font-size: 25px;font-weight: 500;">Professional</span><br>₹40000/Month</th>
                                            <th scope="col"><span style="color: #488872; font-size: 25px;font-weight: 500;">Enterprise</span><br>₹50000/Month</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                        <tr>
                                            <th scope="row"><h5 class="sp-color2">On-Page SEO</h5></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Max Keywords</td>
                                            <td>Up to 10</td>
                                            <td>Up to 30</td>
                                            <td>Up to 50</td>
                                        </tr>
                                        <tr>
                                            <td>Pages Optimized</td>
                                            <td>Up to 8</td>
                                            <td>Up to 15</td>
                                            <td>Up to 25</td>
                                        </tr>
                                        <tr>
                                            <td>Website & Competitor Analysis</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Keywords Research and Selection</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Meta Tags Creation</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>URL Structure optimization</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Content Optimization</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Image Optimization</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Heading Tag Optimization</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Internal Linking Optimization</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Schema for Contact & Address</td>
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
                                            <th scope="row"><h5 class="sp-color2">Off-Page SEO</h5></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Social Bookmarking</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Blog Submission</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Blog Social Sharing</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Q & A</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Guest Posting</td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Video Creation & Submission</td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Infographic Creation & Submission                                            </td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Business/Local Listing</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Google My Business Setup & Verification</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Bing Local Listing</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Testimonial Posting</td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>News/PR Submission (Paid by client)</td>
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
                                            <th scope="row"><h5 class="sp-color2">Technical SEO</h5></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Google Analytics Setup</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Tag Manager Setup</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Search Console Setup</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Robots.txt Creation & Submission</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>XML Sitemap Creation & submission</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
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
                                        <th scope="col"><span style="color: #359ded; font-size: 25px;font-weight: 500;">Standard</span><br>$400/Month</th>
                                        <th scope="col"><span style="color: #0282c9; font-size: 25px;font-weight: 500;">Professional</span><br>$600/Month</th>
                                        <th scope="col"><span style="color: #488872; font-size: 25px;font-weight: 500;">Enterprise</span><br>$800/Month</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                        <tr>
                                            <th scope="row"><h5 class="sp-color2">On-Page SEO</h5></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Max Keywords</td>
                                            <td>Up to 10</td>
                                            <td>Up to 30</td>
                                            <td>Up to 50</td>
                                        </tr>
                                        <tr>
                                            <td>Pages Optimized</td>
                                            <td>Up to 8</td>
                                            <td>Up to 15</td>
                                            <td>Up to 25</td>
                                        </tr>
                                        <tr>
                                            <td>Website & Competitor Analysis</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Keywords Research and Selection</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Meta Tags Creation</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>URL Structure optimization</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Content Optimization</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Image Optimization</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Heading Tag Optimization</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Internal Linking Optimization</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Schema for Contact & Address</td>
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
                                            <th scope="row"><h5 class="sp-color2">Off-Page SEO</h5></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Social Bookmarking</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Blog Submission</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Blog Social Sharing</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Q & A</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Guest Posting</td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Video Creation & Submission</td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Infographic Creation & Submission                                            </td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Business/Local Listing</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Google My Business Setup & Verification</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Bing Local Listing</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Testimonial Posting</td>
                                            <td><i class="fad fa-horizontal-rule fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>News/PR Submission (Paid by client)</td>
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
                                            <th scope="row"><h5 class="sp-color2">Technical SEO</h5></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Google Analytics Setup</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Tag Manager Setup</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Search Console Setup</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Robots.txt Creation & Submission</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                        </tr>
                                        <tr>
                                            <td>XML Sitemap Creation & submission</td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
                                            <td><i class="fal fa-badge-check sp-color2 fa-2x"></i></td>
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
        <div class="row align-items-center" data-aos="fade-up" data-aos-duration="750">
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
                    <a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-5 py-3">Contact Us</a>
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
                                            What does a best SEO service provider do?
                                        </a>
                                        <div class="accordion-content show">
                                            <p>A SEO service provider helps businesses improve their online visibility and organic search rankings by optimizing their website and content to align with search engine algorithms and user intent.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            How can SEO services benefit my business?
                                        </a>
                                        <div class="accordion-content">
                                            <p>SEO services can benefit your business by driving targeted traffic to your website, increasing brand awareness, improving search engine rankings, and ultimately boosting conversions and revenue.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            What services do you offer as an SEO service provider?
                                        </a>
                                        <div class="accordion-content">
                                            <p>We offer a comprehensive range of SEO services including keyword research, on-page optimization, content creation and optimization, link building, technical SEO audits, and SEO strategy development.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            How do you determine the right SEO strategy for my business?
                                        </a>
                                        <div class="accordion-content">
                                            <p>We conduct a thorough analysis of your website, industry, target audience, and competitors to develop a customized SEO strategy tailored to your specific goals, budget, and timeline.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            How do we get started with your SEO services?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Getting started is simple! Contact us through our website or email, and one of our SEO specialists will schedule a consultation to discuss your goals, assess your current website and SEO performance, and recommend a customized plan of action to drive results.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            How do you measure the success of your SEO campaigns?
                                        </a>
                                        <div class="accordion-content">
                                            <p>We measure the success of our SEO campaigns using various metrics such as organic traffic, keyword rankings, conversion rates, and return on investment (ROI). We provide regular reports and analytics to track progress and adjust strategies as needed.</p>
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