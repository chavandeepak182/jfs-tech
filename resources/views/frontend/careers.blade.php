@extends('frontend.layouts.header')
@section('title', "What It’s Like to Work at JFS Technologies")
@section('description', "Shape the future you envision with JFS Technologies.")


@section('content')
<div class="inner-banner" style="background-image: url(../theme/assets/images/infra-mgmt.jpg);">
    <div class="container">
        <div class="inner-title w-75" data-aos="fade-down" data-aos-offset="600" data-aos-easing="ease-in-sine">
            <h1>Experience Work-Life Balance & Growth at JFS Technologies</h1>
            <p class="text-white"></p>
            <div class="banner-btn">
				<a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-50">Current Openings <i class="bx bx-chevron-right"></i></a>
			</div>
        </div>
    </div>
</div>

<section class="services-style-area home_cards pt-100 pb-70">
    <div class="container" data-aos="fade-up" data-aos-duration="750">
        <div class="section-title text-center">
            <span class="sp-color2">Life at JFS Technologies</span>
            <h2>A Place to Grow and Thrive</h2>
            <p class="margin-auto">At JFS Technologies, we believe in creating a workplace that goes beyond the ordinary. Our culture is built on collaboration, innovation, and respect, offering every team member the opportunity to learn, contribute, and succeed. Whether you&#39;re a seasoned professional or just starting your career, you'll find an environment that nurtures talent and encourages new ideas.</p>
        </div>
        <div class="row pt-45 justify-content-center" data-aos="fade-up" data-aos-duration="1000">
			<div class="col-lg-3 col-sm-6">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Innovative Projects</h3>
					<p>Be part of cutting-edge projects that make a meaningful and lasting difference in the ever-evolving tech world.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/computer.svg" class="brand-logo-one" alt="computer">
				</div>
			</div>
            <div class="col-lg-3 col-sm-6">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Learning Opportunities</h3>
					<p>Gain exposure to the latest technologies and upskill through expert training sessions and industry-recognized certifications.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/computer.svg" class="brand-logo-one" alt="computer">
				</div>
			</div>
            <div class="col-lg-3 col-sm-6">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Collaborative Culture</h3>
					<p>Work alongside talented individuals in a team-driven, open, and innovation-focused environment.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/computer.svg" class="brand-logo-one" alt="computer">
				</div>
			</div>
            <div class="col-lg-3 col-sm-6">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Recognition & Growth</h3>
					<p>Your contributions are highly valued & rewarded with clear growth paths, recognition programs & opportunities.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/computer.svg" class="brand-logo-one" alt="computer">
				</div>
			</div>
        </div>
    </div>
</div>


<!-- Testimonials Area -->
<section class="clients-area pt-100 pb-70">
	<div class="container" data-aos="fade-up" data-aos-duration="750">
		<div class="section-title text-center">
			<span class="sp-color1">Testimonials</span>
			<h2 style="max-width: 650px;">Stories from the Heart of JFS</h2>
		</div>
		<div class="clients-slider owl-carousel owl-theme pt-45">
			<div class="clients-content">
				<div class="content">
					<img src="{{ asset('theme') }}/assets/images/clients-img/woman.png" alt="Images">
					<i class="bx bxs-quote-alt-left"></i>
					<h3>Shalaka Nakhate</h3>
					<span>SEO Specialist</span>
				</div>
				<p>“At JFS Technologies, I’ve had the opportunity to work on challenging projects while being supported by a fantastic team. It’s a place where your ideas truly matter.”</p>
			</div>
			<div class="clients-content">
				<div class="content">
					<img src="{{ asset('theme') }}/assets/images/clients-img/clients-img2.png" alt="Images">
					<i class="bx bxs-quote-alt-left"></i>
					<h3>Amol Dagale</h3>
					<span>Business Development Manager</span>
				</div>
				<p>“Joining JFS was the best decision of my career. The learning opportunities here are endless, and the work culture is inspiring.”</p>
			</div>
		</div>
	</div>
</section>


<div class="brand-area pt-100 pb-70">
    <div class="container">
        <div class="row justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="750">
            <div class="col-md-7">
                <div class="faq-area ">
                    <div class="container">
                        <div class="section-title">
                            <h2>Start Your Journey with Us</h2>
                        </div>
                        <div class="faq-content mt-4">
                            <div class="faq-accordion">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title active" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            IT Admin (1+ Years of Exp.)
                                        </a>
                                        <div class="accordion-content show">
                                            <p>Digital marketing promotes businesses online, targeting specific audiences through SEO, social media, email marketing, website development, and customer engagement tools.</p>
                                            <p class="pt-3">Branding agencies shape your brand identity and market position, creating a cohesive experience across logos, websites, messaging, and visual design.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            React.js Developer (1+ Years of Exp.)
                                        </a>
                                        <div class="accordion-content">
                                            <p>A digital marketer is a marketing professional proficient in crafting and implementing successful online marketing strategies. They comprehend the intricacies of engaging with an online audience, ensuring your brand maintains consumer interaction from initial contact to post-sales support.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            Digital Marketing Specialist (3+ Years of Exp.)
                                        </a>
                                        <div class="accordion-content">
                                            <p>A digital marketer is a marketing professional proficient in crafting and implementing successful online marketing strategies. They comprehend the intricacies of engaging with an online audience, ensuring your brand maintains consumer interaction from initial contact to post-sales support.</p>
                                        </div>
                                    </li>
									<li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            Java Developer (2+ Years of Exp.)
                                        </a>
                                        <div class="accordion-content">
                                            <p>A digital marketer is a marketing professional proficient in crafting and implementing successful online marketing strategies. They comprehend the intricacies of engaging with an online audience, ensuring your brand maintains consumer interaction from initial contact to post-sales support.</p>
                                        </div>
                                    </li>
									<li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            Android App Developer (2+ Years of Exp.)
                                        </a>
                                        <div class="accordion-content">
                                            <p>A digital marketer is a marketing professional proficient in crafting and implementing successful online marketing strategies. They comprehend the intricacies of engaging with an online audience, ensuring your brand maintains consumer interaction from initial contact to post-sales support.</p>
                                        </div>
                                    </li>
									<li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            SQL Developer (2+ Years of Exp.)
                                        </a>
                                        <div class="accordion-content">
                                            <p>A digital marketer is a marketing professional proficient in crafting and implementing successful online marketing strategies. They comprehend the intricacies of engaging with an online audience, ensuring your brand maintains consumer interaction from initial contact to post-sales support.</p>
                                        </div>
                                    </li>
									<li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class="bx bx-plus"></i>
                                            PHP Developer (2+ Years of Exp.)
                                        </a>
                                        <div class="accordion-content">
                                            <p>A digital marketer is a marketing professional proficient in crafting and implementing successful online marketing strategies. They comprehend the intricacies of engaging with an online audience, ensuring your brand maintains consumer interaction from initial contact to post-sales support.</p>
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


<div class="security-area pb-70">
	<div class="container-fluid p-0">
		<div class="section-title text-center" data-aos="zoom-in" data-aos-duration="750">
		    <span class="sp-color2">Behind the Scenes at JFS</span>
		    <h2>Life at JFS in Pictures</h2>
            <img src="{{ asset('theme') }}/assets/images/tmg.jpg" alt="computer">
		</div>
	</div>
</div>
@endsection
