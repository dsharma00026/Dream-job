@extends('layouts.app')

@section('content')

<!-- 🔵 Hero Banner -->
<section class="text-center text-white" style="background-color: #1E90FF; padding: 60px 0;">
    <div class="container">
        <h1 class="mb-2">My Profile</h1>
        <p class="lead">Welcome {{$user->user_name}} to your Dream Job profile.</p>
    </div>
</section>

<!-- 👤 Profile Details -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
 <!-- here we check flash session and show -->
                    @if(session('success'))
                      <div class="alert alert-success">
                          {{ session('success') }}
                     </div>
                    @endif
                    @if(session('failed'))
                      <div class="alert alert-danger">
                          {{ session('failed') }}
                     </div>
                    @endif
            <div class="col-md-8">
                <div class="card shadow border-0 rounded p-4">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5>Name:</h5>
                            <p class="text-muted">{{ $user->user_name}}</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Email:</h5>
                            <p class="text-muted">{{ $user->user_email}}</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5>Mobile:</h5>
                            <p class="text-muted">{{ $user->user_mobile}}</p>
                        </div>
                        <div class="col-md-6">
                            <h5>City:</h5>
                            <p class="text-muted">{{ $user->user_city }}</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5>Age:</h5>
                            <p class="text-muted">{{ $user->user_age }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5>About:</h5>
                            <p class="text-muted">{{ $user->user_about }}</p>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{route('edit.profile')}}" class="btn btn-outline-primary hover-lift">Edit Profile</a>
                        <form action="{{route('logout')}}" method="get">
                            @csrf
                            <button type="submit" class="btn btn-danger hover-lift">Sign Out</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
