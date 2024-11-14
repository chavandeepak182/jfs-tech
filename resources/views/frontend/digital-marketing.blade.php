@extends('frontend.layouts.header')
@section('title', "Digital Marketing Services - JFS Technologies")
@section('description', "Elevate your online presence with our Digital marketing company services. Drive growth and engagement with tailored strategies.")
@section('keywords', "IT Services, Account Management services, Digital marketing services, Website Design company, Website design services, End to end sales, outsourcing, Affordable digital marketing services, Website marketing services, SEO service agency, Social media marketing, SEO company for business")

@section('content')

<div class="inner-banner" style="background-image: url(../theme/assets/images/infra.webp);">
    <div class="container">
        <div class="inner-title text-center w-75 mx-auto">
            <h1>Unlock Your Brand’s Potential with Powerful Digital Marketing</h1>
            <p class="text-white"></p>
            <div class="banner-btn">
				<a href="{{ url('/') }}" class="default-btn btn-bg-one border-radius-50 ml-20">Explore Our Solutions <i class="bx bx-chevron-right"></i></a>
			</div>
            <!-- <ul>
                <li>
                    <a href="{{ asset(' ') }}">Home</a>
                </li>
                <li>
                    <i class="bx bx-chevrons-right"></i>
                </li>
                <li>Data Science Services</li>
            </ul> -->
        </div>
    </div>
    <div class="inner-shape">
        <img src="{{ asset('theme') }}/assets/images/shape/inner-shape.png" alt="Images">
    </div>
</div>


<section class="services-style-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color2"></span>
            <h2>Your Partner in Data-Driven Digital Marketing Success</h2>
            <p class="margin-auto">At JFS Technologies, we offer a comprehensive suite of digital marketing services tailored to enhance your online presence and drive targeted lead generation. Our expertise spans multiple platforms to ensure your brand achieves maximum visibility and engagement. Our seasoned digital marketing company professionals and extensive expertise enable us. Also to design bespoke websites and implement tailored digital marketing ad agency to meet the needs of businesses of any size, spanning various sectors.</p>
        </div>
        <div class="row pt-45 mx-auto justify-content-center custom-card">
            <div class="col-lg-6 col-sm-6">
                <div class="services-card services-style-bg p-0">
                    <img src="{{ asset('theme') }}/assets/images/icons/network.gif" class="brand-logo-one icons-img" alt="network">
                    <h3><a href="#">1. Search Engine Optimization (SEO)</a></h3>
                    <p>Our SEO strategies focus on optimizing your website to rank higher in search engine results. We conduct thorough keyword research, on-page optimization, technical SEO audits, and build high-quality backlinks to enhance your site's visibility.</p>
                    <a href="{{ url('/services/seo-services') }}" class="learn-btn mb-3">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="services-card services-style-bg p-0">
                    <img src="{{ asset('theme') }}/assets/images/icons/network.gif" class="brand-logo-one icons-img" alt="network">
                    <h3><a href="#">2. Social Media Management</a></h3>
                    <p>We expertly manage your social media presence across platforms like Facebook, Instagram, LinkedIn, YouTube, Twitter, and Pinterest. Our comprehensive services include content creation, community engagement, and in-depth analytics to measure performance.</p>
                    <a href="{{ url('/services/smo-services') }}" class="learn-btn mb-3">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="services-card services-style-bg p-0">
                    <img src="{{ asset('theme') }}/assets/images/icons/network.gif" class="brand-logo-one icons-img" alt="network">
                    <h3><a href="#">3. Paid Advertising (PPC)</a></h3>
                    <p>Our targeted PPC campaigns aim to deliver high-quality leads by creating compelling ads that not only drive traffic to your website but also maximize your ROI. We continuously optimize ad performance to ensure you're getting the best value from your investment.</p>
                    <a href="{{ url('/services/ppc-services') }}" class="learn-btn mb-3">Learn More <i class="bx bx-chevron-right"></i></a>
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
							<h2>Why Partner with Us for Application Modernization?</h2>
                            <p>Partnering with us for your Application Modernization needs means gaining access to:</p>
						</div>
						<div class="row">
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-pencil-ruler"></i>
										<h3>Tailored Solutions</h3>
									</div>
									<p>Our team brings extensive experience across multiple sectors, ensuring best practices tailored to your needs.</p>
								</div>
							</div>
							<div class="col-lg-3 col-6">
								<div class="choose-content-card">
									<div class="content">
										<i class="fal fa-users-crown"></i>
										<h3>Technology Prowess</h3>
									</div>
									<p>We stay on the cutting edge of technology trends, utilizing cloud, automation, and modern UI/UX design to enhance application functionality.</p>
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
                                        <i class="fal fa-headset"></i>
										<h3>Dedicated Support</h3>
									</div>
									<p>From consulting to post-implementation, we’re with you every step of the way to ensure success.</p>
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


    <div class="case-study-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span class="sp-color2">Case Studies</span>
                <h2>Success Stories in Application Modernization</h2>
                <p>See how our Application Modernization services have helped businesses transform:</p>
            </div>
            <div class="row pt-45">
                <div class="col-lg-4 col-md-6">
                    <div class="case-study-item">
                        <a href="#">
                            <img src="http://127.0.0.1:8000/theme/assets/images/case-study/case-study1.jpg" alt="Images">
                        </a>
                        <div class="content">
                            <h3><a href="#">Healthcare Platform Revamp</a></h3>
                            <p>We upgraded a healthcare system, improving access and efficiency.</p>
                            <a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="case-study-item">
                        <a href="#">
                            <img src="http://127.0.0.1:8000/theme/assets/images/case-study/case-study1.jpg" alt="Images">
                        </a>
                        <div class="content">
                            <h3><a href="#">Finance Cloud Migration</a></h3>
                            <p>We migrated a financial client to the cloud, enhancing performance and cutting costs.</p>
                            <a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="case-study-item">
                        <a href="#">
                            <img src="http://127.0.0.1:8000/theme/assets/images/case-study/case-study1.jpg" alt="Images">
                        </a>
                        <div class="content">
                            <h3><a href="#">Business Solution</a></h3>
                            <ul>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Planing</a> </li>
                            </ul>
                            <a href="#" class="more-btn"><i class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-6 text-center">
                    <a href="/success-stories" class="default-btn btn-bg-two border-radius-5 py-3">Read Our Case Studies</a>
                </div>
            </div>
        </div>
    </div>


<div class="about-area about-bg2 pt-5 pb-3">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img-4">
                    <img src="{{ asset('theme') }}/assets/images/arvr-cta.png" alt="About Images">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content-3 ml-20">
                    <div class="section-title">
                        <span class="sp-color1">Partner Up With Us</span>
                        <h2>Ready to Transform Your Vision with AR/VR?</h2>
                        <p>Our AR/VR services are here to help you create memorable, engaging experiences that drive results. Whether you're looking to enhance training, captivate audiences, or visualize complex spaces, we’re ready to support your goals with high-quality AR/VR solutions.</p>
                    </div>
                    <h3>Leveraging over 24 years of expertise, we deliver top AR/VR solutions.</h3>
                    <a href="/success-stories" class="default-btn btn-bg-one border-radius-5 py-3">Get in Touch Today</a>
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