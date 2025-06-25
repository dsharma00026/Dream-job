@extends('layouts.app')

@section('content')
<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <h2 class="text-center mb-4" style="color: dodgerblue;">Login Here</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
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


                <form action="" method="POST" class="bg-white p-4 shadow rounded">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" name="user_email" class="form-control hover-lift">
                        <span class="text-danger">@error('user_email'){{$message}}@enderror</span> 

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="user_password" class="form-control hover-lift" >
                       <span class="text-danger">@error('user_password'){{$message}}@enderror</span> 

                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary w-100 hover-lift">Login</button>
                    </div>
                    <p class="mt-3 mb-0 ">Don't have a account?<a href="{{route('register.form')}}">Register here</a></p>  
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
