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
<div class="inner-banner" style="background-image: url(../theme/assets/images/career-details.webp);">
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


<div class="brand-area pt-100 pb-70">
    <div class="container">
        <div class="row justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="750">
            <div class="col-md-7">
                <div class="faq-area">
                    <div class="container">
                        <div class="section-title mb-5">
                            <h3>Apply for {Job Title}</h3>
                            <p><em>Experience: <strong>2+ Years</strong> &nbsp;&nbsp;|&nbsp;&nbsp; Openings: <strong>2</strong> &nbsp;&nbsp;|&nbsp;&nbsp; Location: <strong>Pune, IN</strong></em></p>
                        </div>
                        <div class="contact-form">
                            <form id="contactForm" action="{{ route('contact.submit') }}" method="POST">
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
                                             Submit Application <i class="bx bx-chevron-right"></i>
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
