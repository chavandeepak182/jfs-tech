@extends('frontend.layouts.header')

@section('title', "Exciting Careers at JFS | Join Our Innovative Team Today")
@section('description', "Explore exciting career opportunities at JFS! Join our innovative team and contribute to cutting-edge solutions in software development and digital marketing.")
@section('keywords', "Careers at JFS")

@section('canonical')
<link rel="alternate" href="https://jfstechnologies.com/careers" hreflang="en-in" />
<link rel="canonical" href="https://jfstechnologies.com/careers" />
<meta name="robots" content="index, follow">
@endsection

@section('content')
<div class="inner-banner" style="background-image: url(../theme/assets/images/careers.jpg);">
    <div class="container">
        <div class="inner-title w-75" data-aos="fade-right" data-aos-offset="500" data-aos-easing="ease-in-sine">
            <h1 class="invisible">Experience Work-Life Balance & Growth at JFS Technologies</h1>
            <p class="text-white"></p>
            <div class="banner-btn invisible">
                <a href="{{ url('/contact-us') }}" class="default-btn btn-bg-one border-radius-50">Current Openings <i class="bx bx-chevron-right"></i></a>
            </div>
        </div>
    </div>
</div>

<section class="services-style-area bg-light home_cards pt-80 pb-70">
    <div class="container">
        <div class="section-title text-center" data-aos="fade-up" data-aos-duration="500">
            <span class="sp-color2">Join Us to Dream Big</span>
            <h2>A Place to Grow and Thrive</h2>
            <p class="margin-auto">At JFS Technologies, we believe in creating a workplace that goes beyond the ordinary...</p>
        </div>

        <div class="row pt-45 justify-content-center" data-aos="fade-up" data-aos-duration="1000"> 
            @if(isset($careers) && $careers->count() > 0) 
                @foreach($careers as $career) 
                    <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="500"> 
                        <div class="work-process-card-three"> 
                            <div class="number-title invisible">01.</div> 
                            <h3>{{ $career->title }}</h3> 
                            <p>Experience: {{ $career->experience ?? 'N/A' }}</p> 
                            <p>Openings: {{ $career->openings ?? 'N/A' }}</p> 
                            <p>Location: {{ $career->location ?? 'N/A' }}</p> 
                            <p class="text-center mt-3"> 
                                <a href="javascript:void(0);" class="default-btn btn-bg-two border-radius-50 text-center" data-bs-toggle="modal" data-bs-target="#resumeModal-{{ $career->id }}"> Upload Resume </a>
                            </p> 
                            <img src="{{ asset('theme/assets/images/icons/computer.svg') }}" class="brand-logo-one" alt="computer"> 
                        </div> 
                    </div> 

                    <!-- Modal --> 
                    <div class="modal fade" id="resumeModal-{{ $career->id }}" tabindex="-1" aria-labelledby="resumeModalLabel-{{ $career->id }}" aria-hidden="true" data-bs-backdrop="false">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content"> 
                                <form action="{{ route('careers.resume.upload') }}" method="POST" enctype="multipart/form-data"> 
                                    @csrf 
                                    <div class="modal-header"> 
                                        <h5 class="modal-title" id="resumeModalLabel-{{ $career->id }}">Apply for: {{ ucwords(strtolower($career->title)) }}</h5> 
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
                                    </div> 
                                    <div class="modal-body"> 
                                        <input type="hidden" name="job_id" value="{{ $career->id }}"> 
                                        <div class="mb-3"> 
                                            <label for="applicant_name_{{ $career->id }}" class="form-label">Your Name</label> 
                                            <input type="text" class="form-control" id="applicant_name_{{ $career->id }}" name="name" required> 
                                        </div> 
                                        <div class="mb-3"> 
                                            <label for="email_{{ $career->id }}" class="form-label">Email address</label> 
                                            <input type="email" class="form-control" id="email_{{ $career->id }}" name="email" required> 
                                        </div> 
                                        <div class="mb-3"> 
                                            <label for="resume_{{ $career->id }}" class="form-label">Upload Resume (PDF/DOC)</label> 
                                            <input type="file" class="form-control" id="resume_{{ $career->id }}" name="resume" accept=".pdf,.doc,.docx" required> 
                                        </div> 
                                    </div> 
                                    <div class="modal-footer"> 
                                        <button type="submit" class="btn btn-primary">Submit Application</button> 
                                    </div> 
                                </form> 
                            </div> 
                        </div> 
                    </div>
                @endforeach 
            @else 
                <div class="col-12"> 
                    <p class="text-center">No job openings available.</p> 
                </div> 
            @endif 
        </div>
    </div>
</section>


<div class="brand-area pt-100 pb-70">
    <div class="container">
        <div class="row justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="750">
            <div class="col-md-7">
                <div class="faq-area">
                    <div class="container">
                        <div class="section-title mb-5">
                            <h2>Start Your Journey with Us</h2>
                        </div>
                        <div class="contact-form">
                            <form action="{{ route('careers.resume.upload') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                
                                <div>
                                    <label>Name:</label>
                                    <input type="text" name="name" required>
                                </div>

                                <div>
                                    <label>Email:</label>
                                    <input type="email" name="email" required>
                                </div>

                                <div>
                                    <label>Phone:</label>
                                    <input type="text" name="phone_number">
                                </div>

                                <div>
                                    <label>Resume:</label>
                                    <input type="file" name="resume" required>
                                </div>

                                <div>
                                    <button type="submit">Upload Resume</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="choose-img">
                    <img src="{{ asset('theme/assets/images/faq-1.png') }}" alt="Images">
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Bootstrap JS for modals --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" defer></script>

{{-- Optional: Fix for AOS modals z-index issue --}}
<style>
    .modal-backdrop.show {
        z-index: 1040;
    }

    .modal.show {
        z-index: 1050;
    }
</style>
@endsection
