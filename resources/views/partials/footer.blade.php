<footer class="pt-5 pb-3 text-white" style="background-color: #1E90FF;">
    <div class="container">
        <div class="row">

            <!-- 🌐 Brand & About -->
            <div class="col-md-4 mb-4">
                <h4 class="fw-bold">Dream Job</h4>
                <p>Your trusted job search and hiring platform. Connecting talent with top companies across industries.</p>
            </div>

            <!-- 🧭 Quick Links -->
            <div class="col-md-4 mb-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="text-white text-decoration-none hover-lift d-inline-block mb-1">Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-white text-decoration-none hover-lift d-inline-block mb-1">About Us</a></li>
                    <li><a href="{{ route('contact.form') }}" class="text-white text-decoration-none hover-lift d-inline-block mb-1">Contact</a></li>
                    <li><a href="{{ route('terms') }}" class="text-white text-decoration-none hover-lift d-inline-block mb-1">Terms & Conditions</a></li>
                    <li><a href="{{ route('register.form') }}" class="text-white text-decoration-none hover-lift d-inline-block mb-1">Register</a></li>
                    <li><a href="{{ route('login.form') }}" class="text-white text-decoration-none hover-lift d-inline-block mb-1">Login</a></li>
                </ul>
            </div>

            <!-- 📱 Contact & Social -->
            <div class="col-md-4 mb-4">
                <h5>Contact</h5>
                <p><i class="bi bi-envelope-fill"></i> support@dreamjob.com</p>
                <p><i class="bi bi-telephone-fill"></i> +91 98765 43210</p>

                <div class="mt-3">
                    <a href="#" class="text-white fs-4 me-3 hover-lift"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white fs-4 me-3 hover-lift"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white fs-4 me-3 hover-lift"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="text-white fs-4 hover-lift"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

        </div>

        <hr class="bg-white mt-4">
        <p class="text-center mb-0">© {{ date('Y') }} Dream Job. All rights reserved.</p>
    </div>
</footer>
