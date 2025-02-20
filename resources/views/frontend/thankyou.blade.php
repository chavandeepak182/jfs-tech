@extends('frontend.layouts.header')
@section('title', "Thank You! We’ll Be in Touch Soon")
@section('description', "We appreciate your interest! Your submission was successful, and our team will contact you shortly.")
@section('keywords', "")

@section('content')
<section>
    <div class="container">
        <div class="error-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="error-content">
                        <img class="w-50" src="{{ asset('theme') }}/assets/images/404-error.jpg" alt="Image">
                        <h2>You’re All Set – Stay Tuned.</h2>
                        <p>We appreciate your interest! Your submission was successful, and our team will contact you shortly.</p>
                        <a href="{{ url('/services') }}" class="default-btn btn-bg-one rounded">Discover Our Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection