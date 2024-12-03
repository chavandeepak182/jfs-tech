@extends('frontend.layouts.header')
@section('title', "JFS Careers")
@section('description', "Shape the future you envision with JFS Technologies.")


@section('content')
<div class="inner-banner" style="background-image: url(../theme/assets/images/infra-mgmt.jpg);">
    <div class="container">
        <div class="inner-title w-75">
            <h1>Experience Work-Life Balance & Growth at JFS Technologies</h1>
            <p class="text-white"></p>
            <div class="banner-btn">
				<a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-50">Current Openings <i class="bx bx-chevron-right"></i></a>
			</div>
        </div>
    </div>
</div>

<section class="services-style-area home_cards pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color2">Life at JFS Technologies</span>
            <h2>A Place to Grow and Thrive</h2>
            <p class="margin-auto">At JFS Technologies, we believe in creating a workplace that goes beyond the ordinary. Our culture is built on collaboration, innovation, and respect, offering every team member the opportunity to learn, contribute, and succeed. Whether you&#39;re a seasoned professional or just starting your career, you'll find an environment that nurtures talent and encourages new ideas.</p>
        </div>
        <div class="row pt-45 justify-content-center">
			<div class="col-lg-3 col-sm-6">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Innovative Projects</h3>
					<p>Be part of cutting-edge projects that make a difference in the tech world.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/computer.svg" class="brand-logo-one" alt="computer">
				</div>
			</div>
            <div class="col-lg-3 col-sm-6">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Learning Opportunities</h3>
					<p>Gain exposure to the latest technologies and upskill through training sessions and certifications.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/computer.svg" class="brand-logo-one" alt="computer">
				</div>
			</div>
            <div class="col-lg-3 col-sm-6">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Collaborative Culture</h3>
					<p>Work alongside talented individuals in a team-driven, open environment.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/computer.svg" class="brand-logo-one" alt="computer">
				</div>
			</div>
            <div class="col-lg-3 col-sm-6">
				<div class="work-process-card-three">
					<div class="number-title invisible ">01.</div>
					<h3>Recognition & Growth</h3>
					<p>Your contributions are valued and rewarded with clear growth paths and recognition programs.</p>
                    <img src="{{ asset('theme') }}/assets/images/icons/computer.svg" class="brand-logo-one" alt="computer">
				</div>
			</div>
        </div>
    </div>
</div>

@endsection
