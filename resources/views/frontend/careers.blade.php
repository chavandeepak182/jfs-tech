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
                                <a href="#" class="default-btn btn-bg-two border-radius-50 text-center open-resume-modal" data-bs-toggle="modal" data-bs-target="#resumeModal" data-id="{{ $career->id }}" data-title="{{ $career->title }}">
                                    Upload Resume
                                </a>
                            </p> 
                            <img src="{{ asset('theme/assets/images/icons/computer.svg') }}" class="brand-logo-one" alt="computer"> 
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

    <!-- Modal -->
    <div class="modal fade" id="resumeModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title job-title">Upload Resume</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('careers.resume.upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <input type="hidden" name="job_id" id="modal-job-id">
                                <div class="form-group">
                                    <label>Your Name <span>*</span></label>
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please Enter Your Name" placeholder="Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label>Your Email <span>*</span></label>
                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please Enter Your Email" placeholder="Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label>Upload Resume <span>*</span></label>
                                    <input type="file" name="resume" id="resume" class="form-control" required data-error="Please Drop Your Resume">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 mt-3">
                                <button type="submit" class="btn btn-primary border-radius-50">
                                    Submit Resume
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Thank you modal -->
    <div class="modal fade" id="thankYouModal" tabindex="-1" aria-labelledby="thankYouModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="thankYouModalLabel">Thank You!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p>Your resume has been submitted successfully. We will get back to you soon.</p>
                </div>
            </div>
        </div>
    </div>
@if(session('success'))
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let thankYouModal = new bootstrap.Modal(document.getElementById('thankYouModal'));
            thankYouModal.show();
        });
    </script>
@endif

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const modal = document.getElementById('resumeModal');
            const titleEl = modal.querySelector('.job-title');
            const jobIdInput = document.getElementById('modal-job-id');

            document.querySelectorAll('.open-resume-modal').forEach(btn => {
                btn.addEventListener('click', function () {
                    const jobId = this.getAttribute('data-id');
                    const jobTitle = this.getAttribute('data-title');
                    
                    titleEl.textContent = `${jobTitle}`;
                    jobIdInput.value = jobId;
                });
            });
        });
    </script>
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
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Your Name <span>*</span></label>
                                            <input type="text" name="name" id="name" class="form-control" required data-error="Please Enter Your Name" placeholder="Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Phone Number <span>*</span></label>
                                            <input type="text" name="phone_number" id="phone_number" required data-error="Please Enter Your number" class="form-control" placeholder="Phone Number">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your Email <span>*</span></label>
                                            <input type="email" name="email" id="email" class="form-control" required data-error="Please Enter Your Email" placeholder="Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Upload Resume <span>*</span></label>
                                            <input type="file" name="resume" id="resume" class="form-control" required data-error="Please Drop Your Resume">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="agree-label">
                                            <label for="chb1" class="m-0 small text-muted">
                                                <em><strong><u>NOTE:</u></strong> Your resume will be used only to recommend the relevant job openings based on your job profile. Kindly be informed that JFS Technologies does not store your resume for any future purpose.</em>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-bg-two border-radius-50">
                                            Upload <i class="bx bx-chevron-right"></i>
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
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
@endsection
