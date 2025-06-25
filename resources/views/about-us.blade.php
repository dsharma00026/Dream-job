@extends('layouts.app')

@section('content')

<!-- 🔵 Hero Banner -->
<section style="background-color: #1E90FF; color: white; padding: 60px 0;" class="text-center">
    <div class="container">
        <h1 class="mb-3">About Dream Job</h1>
        <p class="lead">Your trusted platform to connect talent with the right opportunities.</p>
    </div>
</section>

<!-- 🧠 Who We Are -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4">
<img src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Office Team" class="img-fluid rounded shadow hover-lift">
            </div>
            <div class="col-md-6">
                <h3 style="color: #1E90FF;">Who We Are</h3>
                <p>Dream Job is a modern job marketplace that helps candidates find their dream careers and helps companies discover top talent. We’re not just another job board — we provide tailored matches, streamlined applications, and intelligent tools to support your hiring or job-seeking journey.</p>
                <p>Whether you're looking to post jobs or apply for them, Dream Job is your career co-pilot.</p>
            </div>
        </div>
    </div>
</section>

<!-- 🌟 Why Choose Us -->
<section class="py-5" style="background-color: #f4f9ff;">
    <div class="container">
        <h3 class="text-center mb-4" style="color: #1E90FF;">Why Dream Job?</h3>
        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div class="p-4 bg-white rounded shadow hover-lift h-100">
                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" width="60" class="mb-3" alt="Smart Search">
                    <h5>Smart Job Matching</h5>
                    <p>We use intelligent filters to connect candidates with the right roles faster than ever before.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-white rounded shadow hover-lift h-100">
                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135789.png" width="60" class="mb-3" alt="Mobile Friendly">
                    <h5>Mobile-Friendly</h5>
                    <p>Search and apply from anywhere. Our platform works beautifully on every device.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-white rounded shadow hover-lift h-100">
                    <img src="https://cdn-icons-png.flaticon.com/512/747/747376.png" width="60" class="mb-3" alt="Support">
                    <h5>Reliable Support</h5>
                    <p>We’re here to support you through your job search or hiring process, 24/7.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 🚀 Final CTA -->
<section style="background-color: #1E90FF; color: white;" class="py-5 text-center">
    <div class="container">
        <h3>Ready to take the next step?</h3>
        <p>Start browsing hundreds of job openings from top companies today.</p>
        <a href="/" class="btn btn-light mt-2 hover-lift">Browse Jobs</a>
    </div>
</section>

@endsection
