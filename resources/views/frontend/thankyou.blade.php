@extends('frontend.layouts.header')

@section('title', 'Thank You - JFS Technologies')

@section('content')

<div class="inner-banner" style="background-image: url(../theme/assets/images/infra-mgmt.jpg);">
    <div class="container">
        <div class="inner-title w-75 aos-init"
             data-aos="fade-right"
             data-aos-offset="500"
             data-aos-easing="ease-in-sine">

            <h1>Thank You for <b>Contacting Us</b></h1>

            <p class="text-white">
                We have received your message successfully.
                Our team will review your request and get back to you at the earliest.
                Thank you for choosing <strong>JFS Technologies</strong>.
            </p>

            <div class="mt-4">
                <a href="{{ url('/') }}" class="default-btn btn-bg-two border-radius-50">
                    Go to Home
                </a>
            </div>

        </div>
    </div>
</div>

@endsection
