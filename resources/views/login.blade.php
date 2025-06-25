@extends('layouts.app')

@section('content')
<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <h2 class="text-center mb-4" style="color: dodgerblue;">Login Here</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="" method="POST" class="bg-white p-4 shadow rounded">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control hover-lift" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control hover-lift" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary w-100 hover-lift">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
