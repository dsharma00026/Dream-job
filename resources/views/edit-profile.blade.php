@extends('layouts.app')

@section('content')

<!-- 🔵 Hero Section -->
<section class="text-center text-white" style="background-color: #1E90FF; padding: 60px 0;">
    <div class="container">
        <h1 class="mb-3">Edit Profile</h1>
        <p class="lead">Update your personal information below.</p>
    </div>
</section>

<!-- ✏️ Edit Profile Form -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">
                <form action="" method="POST" class="bg-white p-4 rounded shadow">
                    @csrf
                    @method('POST')

                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="name" class="form-control hover-lift" value="{{ $user['name'] ?? '' }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Age</label>
                        <input type="number" name="age" class="form-control hover-lift" value="{{ $user['age'] ?? '' }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mobile Number</label>
                        <input type="text" name="mobile" class="form-control hover-lift" value="{{ $user['mobile'] ?? '' }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">City</label>
                        <input type="text" name="city" class="form-control hover-lift" value="{{ $user['city'] ?? '' }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email (Not Editable)</label>
                        <input type="email" class="form-control bg-light" value="{{ $user['email'] ?? '' }}" disabled>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-outline-primary hover-lift">Update Profile</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

@endsection
