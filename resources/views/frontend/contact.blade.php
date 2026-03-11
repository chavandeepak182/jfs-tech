@extends('frontend.layouts.header')
@section('title', "Contact Us - JFS Technologies")
@section('keywords', "IT Services, Account Management services, Digital marketing services, Website Design company, Website design services, End to end sales, outsourcing, Affordable digital marketing services, Website marketing services, SEO service agency, Social media marketing, SEO company for business")
@section('canonical')
<link rel="canonical" href="https://jfstechnologies.com/contact-us" />
<meta name="robots" content="index, follow">
@endsection
@section('content')
<div class="inner-banner" style="background-image: url(../theme/assets/images/infra-mgmt.jpg);">
    <div class="container">
        <div class="inner-title w-75" data-aos="fade-down" data-aos-offset="600" data-aos-easing="ease-in-sine">
            <h1>Partner with Us: Let’s Build Something Great!</h1>
        </div>
    </div>
</div>

<div class="contact-form-area pt-100 pb-70">
    <div class="container">
        <div class="row pt-45" data-aos="fade-up" data-aos-duration="750">
            <div class="col-lg-4">
                <div class="contact-info mr-20">
                    <span>Let's Connect</span>
                    <h2>We're Here!</h2>
                    <p>Give us a few details & we’ll offer the best solution. Connect by phone, email, & more.</p>
                    <ul>
                        <li>
                            <div class="content">
                                <i class="bx bxs-map"></i>
                                <h3>Address</h3>
                                <span>Office no. 710, 7th Floor, DNK SQUARE, Airport road, Sakore Nagar, Viman Nagar, Pune, Maharashtra 411014.</span>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <i class="bx bx-phone-call"></i>
                                <h3>Phone Number</h3>
                                <a href="tel:918788524747">+91 87885 24747</a>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <i class="bx bx-message"></i>
                                <h3>Contact Email</h3>
                                <a href="mailto:info@jfstechnologies.com">info@jfstechnologies.com</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="contact-form">
                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Your Name <span>*</span></label>
                                    <input type="text" name="name" class="form-control" required placeholder="Name" pattern="[A-Za-z\s]+" title="Name should contain only letters and spaces">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Your Email <span>*</span></label>
                                    <input type="email" name="email" class="form-control" required placeholder="Email">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Phone Number <span>*</span></label>
                                    <input type="text" name="phone_number" class="form-control" required placeholder="Phone Number">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Your Subject <span>*</span></label>
                                    <input type="text" name="msg_subject" class="form-control" required placeholder="Your Subject">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Your Message <span>*</span></label>
                                    <textarea name="message" class="form-control" rows="8" required placeholder="Your Message"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 text-center">
                                <button type="submit" class="default-btn btn-bg-two border-radius-50">
                                    Send Message <i class="bx bx-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="map-area" data-aos="zoom-in" data-aos-duration="750">
    <div class="container-fluid m-0 p-0">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.362958242603!2d73.90418487496392!3d18.55766828254308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c1aefea87bd1%3A0x5256090f743aa340!2sJFS%20Technologies!5e0!3m2!1sen!2sin!4v1773233073167!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

@endsection
