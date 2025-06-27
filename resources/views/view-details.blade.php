@extends('layouts.app')

@section('content')

<!-- 🔵 Page Header -->
<section style="background-color: #1E90FF; color: white; padding: 60px 0;" class="text-center">
    <div class="container">
        <h1 class="mb-2">Apply for Job</h1>
        <p class="lead">Review job details and submit your application.</p>
    </div>
</section>

<!-- 🧾 Job Details + Form Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">

            <!-- 📄 Job Details -->
            <div class="col-md-6">
                <div class="bg-white shadow p-4 rounded">
                    <h3 style="color: #1E90FF;">{{ $job->job_name}}</h3>
                    <p><strong>Company:</strong> {{ $job->company_name}}</p>
                    <p><strong>Location:</strong> {{ $job->job_location }}</p>
                    <p><strong>Salary:</strong> ₹{{ $job->job_salary}}/month</p>
                    <p><strong>Posted on:</strong> {{ $job->created_at }}</p>
                    <hr>
                    <h5>Description:</h5>
                    <p>{{ $job->description}}</p>
                </div>
            </div>

            <!-- 📝 Apply Form -->
            <div class="col-md-6">
                <div class="bg-white shadow p-4 rounded">
                    <form action="{{route('apply.job')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <!-- check user already apply or not -->
                     @if($check=="1")
                      <div class="alert alert-success">
                          <p>you already applied in this job</p>
                     </div> 
                     @endif  
                     
                     <!-- here we check flash session and show -->
  
                    @if(session('apply.success'))
                      <div class="alert alert-success">
                          {{ session('apply.success') }}
                     </div>
                    @endif
                    @if(session('apply.failed'))
                      <div class="alert alert-danger">
                          {{ session('apply.failed') }}
                     </div>
                    @endif

                        <div class="mb-3">
                            <label class="form-label">Your Name</label>
                            <input type="text" name="name" class="form-control hover-lift" value="{{$user->user_name}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mobile</label>
                            <input type="text" name="mobile" class="form-control hover-lift" value="{{$user->user_mobile}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">City</label>
                            <input type="text" name="city" class="form-control hover-lift" value="{{$user->user_city}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Resume (PDF/DOC)</label>
                            <input type="file" name="user_resume" class="form-control hover-lift" >
                            <span class="text-danger">@error('user_resume'){{$message}}@enderror</span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea name="message" rows="4" class="form-control hover-lift" disabled>{{$user->user_about}}</textarea>
                        </div>
                        @if(session('apply.success')||$check=="1")
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary hover-lift" disabled>Already Apply</button>
                        </div>
                        @elseif($check=="0")
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary hover-lift">Apply</button>
                        </div>
                        @endif
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
