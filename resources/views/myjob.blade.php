@extends('layouts.app')

@section('content')

<!-- 🔷 Header Section -->
<section style="background-color: dodgerblue; color: white; padding: 50px 0;">
    <div class="container text-center">
        <h1>My Applied Jobs</h1>
        <p class="lead">Here's a list of all the jobs you have applied to.</p>
    </div>
</section>

<!-- 🧾 Applied Jobs Section -->
<section class="py-5 bg-light">
    <div class="container">
        @if($application->isEmpty())
            <div class="alert alert-info text-center">
                You haven’t applied to any jobs yet.
            </div>
        @else
            <div class="row">
                @foreach($application as $app)
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-sm hover-lift h-100">
                            <div class="card-body">
                                <h3 style="color: #1E90FF;">{{ $app->job->job_name}}</h3>
                                <p><strong>Company:</strong> {{ $app->job->company_name}}</p>
                                <p><strong>Location:</strong> {{ $app->job->job_location }}</p>
                                <p><strong>Salary:</strong> ₹{{ $app->job->job_salary}}/month</p>
                                <p><strong>Posted on:</strong> {{ $app->job->created_at->format('d F Y') }}</p>
                                <p><strong>Applied on:</strong> {{ $app->created_at->format('d F Y') }}</p>
                                 <hr>
                                 <h5>Description:</h5>
                                <p>{{ $app->job->description}}</p>

            
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>

@endsection
