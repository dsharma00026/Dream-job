@extends('layouts.app')

@section('content')

<!-- 🔵 Hero Section -->
<section style="background-color: #1E90FF; color: white; padding: 60px 0;" class="text-center">
    <div class="container">
        <h1 class="mb-3">Terms & Conditions</h1>
        <p class="lead">Please read these terms carefully before using Dream Job.</p>
    </div>
</section>

<!-- 📄 Terms Content Section -->
<section class="py-5 bg-white">
    <div class="container">
        <h3 style="color: #1E90FF;">1. Acceptance of Terms</h3>
        <p>By accessing or using Dream Job, you agree to be bound by these Terms & Conditions. If you do not agree, please do not use our website or services.</p>

        <h3 style="color: #1E90FF;">2. Use of the Platform</h3>
        <p>You agree to use this website only for lawful job-seeking or job-posting purposes. Misuse of the platform, including spam, fraud, or harassment, may lead to termination of your account.</p>

        <h3 style="color: #1E90FF;">3. User Accounts</h3>
        <p>You are responsible for maintaining the confidentiality of your login information. Dream Job is not responsible for any misuse of your account.</p>

        <h3 style="color: #1E90FF;">4. Content Ownership</h3>
        <p>All job posts, logos, and trademarks belong to their respective owners. You may not copy, distribute, or reuse content without permission.</p>

        <h3 style="color: #1E90FF;">5. Privacy Policy</h3>
        <p>Your privacy is important to us. Please refer to our Privacy policy to understand how we collect and use your data.</p>

        <h3 style="color: #1E90FF;">6. Disclaimer</h3>
        <p>We do not guarantee job placement or hiring results. All information on this site is provided “as is” without warranty.</p>

        <h3 style="color: #1E90FF;">7. Changes to Terms</h3>
        <p>Dream Job reserves the right to change or modify these terms at any time. Continued use of the site constitutes acceptance of updated terms.</p>

        <h3 style="color: #1E90FF;">8. Contact Us</h3>
        <p>If you have questions about these Terms & Conditions, please contact us via our <a href="{{route('contact.form')}}" style="color: #1E90FF;">Contact Page</a>.</p>
    </div>
</section>

<!-- ✅ Footer CTA -->
<section class="py-4 text-center" style="background-color: #f4f9ff;">
    <div class="container">
        <h5>Thank you for trusting Dream Job — your career journey starts here.</h5>
        <a href="{{route('home')}}" class="btn btn-outline-primary mt-3 hover-lift">Back to Home</a>
    </div>
</section>

@endsection
