@extends('layouts.app')

@section('content')

<!-- 🔵 Hero Section -->
<section style="background-color: #1E90FF; color: white; padding: 60px 0;" class="text-center">
    <div class="container">
        <h1 class="mb-3">Contact Us</h1>
        <p class="lead">We’d love to hear from you! Whether you're a job seeker or employer, feel free to reach out.</p>
    </div>
</section>

<!-- 📬 Contact Form Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">

            <!-- 🔽 Form -->
            <div class="col-md-6 mb-4">
                <form action="" method="POST" class="bg-white p-4 shadow rounded">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Your Name</label>
                        <input type="text" name="name" class="form-control hover-lift" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Your Email</label>
                        <input type="email" name="email" class="form-control hover-lift" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Subject</label>
                        <input type="text" name="subject" class="form-control hover-lift" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Your Message</label>
                        <textarea name="message" rows="5" class="form-control hover-lift" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary hover-lift">Send Message</button>
                    </div>
                </form>
            </div>

            <!-- 📷 Image -->
            <div class="col-md-6">
                <img src="https://images.pexels.com/photos/3183197/pexels-photo-3183197.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Contact Us" class="img-fluid rounded shadow hover-lift">
            </div>
        </div>
    </div>
</section>

<!-- ✅ Footer CTA -->
<section style="background-color: #1E90FF; color: white;" class="py-4 text-center">
    <div class="container">
        <h5>Our team is ready to help you — reach out today!</h5>
    </div>
</section>

@endsection
