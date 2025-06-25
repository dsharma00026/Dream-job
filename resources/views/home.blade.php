@extends('layouts.app')

@section('content')

<!-- 🔴 Hero Section -->
<section style="background-color: dodgerblue; color: white; padding: 60px 0; margin-top: 0" class="text-center">
    <div class="container">
        <h1 class="mb-4">Dream Job</h1>
        <form action="" method="GET" class="row justify-content-center">
            <div class="col-md-6 mb-2">
                <input type="text" name="search" class="form-control" placeholder="Enter job title or company">
            </div>
            <div class="col-md-2 mb-2">
                <button type="submit" class="btn btn-light w-100 hover-lift">Search</button>
            </div>
        </form>
    </div>
</section>

<!-- 🔁 Job Cards Section -->
<section class="py-5 bg-light ">
    <div class="container">
        <h2 class="mb-4 text-center">Latest Jobs</h2>

        <div class="row">
            @foreach($jobs as $job)
                <div class="col-md-4 mb-4 hover-lift">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $job['title']}}</h5>
                            <p class="card-text"><strong>Company:</strong> {{ $job['company'] }}</p>
                            <p class="card-text"><strong>Location:</strong> {{ $job['location'] }}</p>
                            <p class="card-text"><strong>Salary:</strong> ₹{{ $job['salary'] }}/month</p>
                            <a href="{{ route('home', $job['id']) }}" class="btn btn-primary hover-lift">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        @if(empty($jobs))
            <p class="text-center text-muted">No jobs available.</p>
        @endif
    </div>
</section>

@endsection
