@extends('frontend.layouts.header')
@section('title', "Contact Us - JFS Technologies")
@section('keywords', "IT Services, Account Management services, Digital marketing services, Website Design company, Website design services, End to end sales, outsourcing, Affordable digital marketing services, Website marketing services, SEO service agency, Social media marketing, SEO company for business")

@section('content')
<div class="inner-banner">
    <div class="container">
        <div class="inner-title text-center">
            <h3>Contact Us</h3>
            <ul>
                <li>
                    <a href="{{ asset('theme') }}">Home</a>
                </li>
                <li>
                    <i class="bx bx-chevrons-right"></i>
                </li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
    <div class="inner-shape">
        <img src="{{ asset('theme') }}/assets/images/shape/inner-shape.png" alt="Images">
    </div>
</div>

<div class="contact-form-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>Let's Send Us a Message Below</h2>
        </div>
        <div class="row pt-45">
            <div class="col-lg-4">
                <div class="contact-info mr-20">
                    <span>Contact Info</span>
                    <h2>Let's Connect With Us</h2>
                    <p>Give us a few details & we’ll offer the best solution. Connect by phone, email, & more.</p>
                    <ul>
                        <li>
                            <div class="content">
                                <i class="bx bx-phone-call"></i>
                                <h3>Phone Number</h3>
                                <a href="tel:918329729190">+91 83297 29190</a>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <i class="bx bxs-map"></i>
                                <h3>Address</h3>
                                <span>Office No.416, 4th floor, Platinum Square, Sakore Nagar, Viman Nagar, Pune, Maharashtra 411014.</span>
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
                                    <label>Your Email <span>*</span></label>
                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please Enter Your Email" placeholder="Email">
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
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Your Subject <span>*</span></label>
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please Enter Your Subject" placeholder="Your Subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Your Message <span>*</span></label>
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="agree-label">
                                    <input type="checkbox" id="chb1" required>
                                    <label for="chb1">
                                        Accept <a href="terms-condition.html">Terms & Conditions</a> And <a href="privacy-policy.html">Privacy Policy.</a>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 text-center">
                                <button type="submit" class="default-btn btn-bg-two border-radius-50">
                                    Send Message <i class="bx bx-chevron-right"></i>
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
</div>

<div class="map-area">
    <div class="container-fluid m-0 p-0">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.294956854627!2d73.9111051!3d18.5607364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c1aefea87bd1%3A0x5256090f743aa340!2sJFS%20Technologies!5e0!3m2!1sen!2sin!4v1729607646744!5m2!1sen!2sin"></iframe>
    </div>
</div>

<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#contactForm').on('submit', function(e) {
            e.preventDefault(); // Prevent default form submission

            var formData = {
                name: $('#name').val(),
                email: $('#email').val(),
                phone_number: $('#phone_number').val(),
                msg_subject: $('#msg_subject').val(),
                message: $('#message').val(),
            };

            $.ajax({
                type: "POST",
                url: "{{ route('contact.submit') }}", // Use Laravel route
                data: JSON.stringify(formData),
                contentType: "application/json",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF Token
                },
                success: function(response) {
                    $('#msgSubmit').removeClass('hidden').text(response.message);
                    $('#contactForm')[0].reset(); // Reset form fields
                },
                error: function(error) {
                    $('#msgSubmit').removeClass('hidden').text('Error sending message: ' + error.responseJSON.message);
                }
            });
        });
    });
</script>
@endsection
