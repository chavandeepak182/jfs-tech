@extends('frontend.layouts.header')
@section('title', "Our Services - JFS Technologies")
@section('keywords', "IT Services, Account Management services, Digital marketing services, Website Design company, Website design services, End to end sales, outsourcing, Affordable digital marketing services, Website marketing services, SEO service agency, Social media marketing, SEO company for business")

@section('content')

<div class="inner-banner">
    <div class="container">
        <div class="inner-title text-center">
            <h3>Our Top Notch Services</h3>
            <ul>
                <li>
                    <a href="">Home</a>
                </li>
                <li>
                    <i class="bx bx-chevrons-right"></i>
                </li>
                <li>Our Services</li>
            </ul>
        </div>
    </div>
    <div class="inner-shape">
        <img src="{{ asset('theme') }}/assets/images/shape/inner-shape.png" alt="Images">
    </div>
</div>


<section class="services-widget-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color2">Our Services</span>
            <h2>We Provide a Wide Variety of It Services</h2>
        </div>
        <div class="row pt-45">
            <div class="col-lg-4 col-md-6">
                <div class="services-item">
                    <a href="#">
                        <img src="{{ asset('theme') }}/assets/images/services/services-img1.jpg" alt="Images">
                    </a>
                    <div class="content">
						<i class="flaticon-consultant"></i>
						<span><a href="#">App Services</a></span>
						<h3><a href="#"></a>App Development</h3>
                        <p>Native, hybrid, and cross-platform development services.</p>
					</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="services-item">
                    <a href="#">
                        <img src="{{ asset('theme') }}/assets/images/services/services-img2.jpg" alt="Images">
                    </a>
                    <div class="content">
						<i class="flaticon-web-development"></i>
						<span><a href="#">Web Services</a></span>
						<h3><a href="#">Web Development</a></h3>
                        <p>Custom, performance - optimized, SEO-friendly, and mobile-responsive.</p>
					</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="services-item">
                    <a href="#">
                        <img src="{{ asset('theme') }}/assets/images/services/services-img3.jpg" alt="Images">
                    </a>
                    <div class="content">
						<i class="flaticon-data-analytics"></i>
						<span><a href="#">Digital Services</a></span>
						<h3><a href="#">Digital Marketing</a></h3>
                        <p>Data-driven strategies for brand visibility & lead generation etc.</p>
					</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="services-item">
                    <a href="#">
                        <img src="{{ asset('theme') }}/assets/images/services/services-img4.jpg" alt="Images">
                    </a>
                    <div class="content">
						<i class="flaticon-stats"></i>
						<span><a href="#">Passionate</a></span>
						<h3><a href="#">Hire Developers</a></h3>
                        <p>Flexible hiring of skilled developers in Full Stack, MEARN Stack, and MEAN Stack.</p>
					</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="services-item">
                    <a href="#">
                        <img src="{{ asset('theme') }}/assets/images/services/services-img5.jpg" alt="Images">
                    </a>
                    <div class="content">
						<i class="flaticon-consulting"></i>
						<span><a href="#">Support Services</a></span>
						<h3><a href="#">Product Support</a></h3>
                        <p>Increased customer satisfaction and loyalty, Improved customer retention rates</p>
					</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="services-item">
                    <a href="#">
                        <img src="{{ asset('theme') }}/assets/images/services/services-img6.jpg" alt="Images">
                    </a>
                    <div class="content">
						<i class="flaticon-structure"></i>
						<span><a href="#">Planing</a></span>
						<h3><a href="#">Infrastructure</a></h3>
                        <p>Increased customer satisfaction and loyalty, Improved customer retention rates</p>
					</div>
                </div>
            </div>
        </div>
    </div>
</section>


    <section class="clients-area pt-100 pb-70">
		<div class="container">
			<div class="section-title text-center">
				<span class="sp-color1">Testimonials</span>
				<h2>Listen from our Clients</h2>
			</div>
			<div class="clients-slider owl-carousel owl-theme pt-45">
				<div class="clients-content">
					<div class="content">
						<img src="{{ asset('theme') }}/assets/images/clients-img/clients-img1.jpg" alt="Images">
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
						<img src="{{ asset('theme') }}/assets/images/clients-img/clients-img2.jpg" alt="Images">
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
						<img src="{{ asset('theme') }}/assets/images/clients-img/clients-img3.jpg" alt="Images">
						<i class="bx bxs-quote-alt-left"></i>
						<h3>Anand Katti</h3>
						<span>COO @ Shyena Techyarns</span>
					</div>
					<p>
					“Because of JFS Technologies' end-to-end sales service, our business has experienced tremendous growth. Their holistic approach and unwavering commitment have been instrumental. I highly recommend their services!”
					</p>
				</div>
			</div>
		</div>
		<div class="client-circle">
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
		</div>
	</section>


<div class="brand-area ptb-100">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6">
				<div class="choose-img">
				    <img src="{{ asset('theme') }}/assets/images/faq-1.png" alt="Images">
				</div>
			</div>
            <div class="col-md-6">
                <div class="faq-area ">
                    <div class="container">
                        <div class="section-title">
                            <h2>Frequently Asked Questions</h2>
                            <p class="margin-auto">We are the agency who always gives you a priority on the free of question and you can easily make a question on the bunch.</p>
                        </div>
                        <div class="faq-content mt-4">
                            <div class="faq-accordion">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title active" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            What is a Infrastructure?
                                        </a>
                                        <div class="accordion-content show">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat, dignissim orci eget, viverra ante. Mauris ornare pellentesque augue.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            What is a Managed Security Services?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat, dignissim orci eget, viverra ante. Mauris ornare pellentesque augue.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            What is a Data Analysis?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat, dignissim orci eget, viverra ante. Mauris ornare pellentesque augue.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            How Can Make Secure My Website?
                                        </a>
                                        <div class="accordion-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat, dignissim orci eget, viverra ante. Mauris ornare pellentesque augue.</p>
                                        </div>
                                    </li>
                                </ul>            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection