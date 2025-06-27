@extends('layouts.app')

@section('content')
<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <h2 class="text-center mb-4" style="color: dodgerblue;">Register Here</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                 <!-- here we check flash session and show -->
                    @if(session('failed'))
                      <div class="alert alert-danger">
                          {{ session('failed') }}
                     </div>
                    @endif

                <form action="{{route('register.submit')}}" method="POST" class="bg-white p-4 shadow rounded">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="user_name" class="form-control hover-lift" value="{{old('user_name')}}">
                        <span class="text-danger">@error('user_name'){{$message}}@enderror</span> 
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" name="user_email" class="form-control hover-lift" value="{{old('user_email')}}">
                        <span class="text-danger">@error('user_email'){{$message}}@enderror</span> 

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="user_password" class="form-control hover-lift" >
                        <span class="text-danger">@error('user_password'){{$message}}@enderror</span> 

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Age</label>
                        <input type="number" name="user_age" class="form-control hover-lift" value="{{old('user_age')}}" >
                        <span class="text-danger">@error('user_age'){{$message}}@enderror</span> 

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mobile</label>
                        <input type="text" name="user_mobile" class="form-control hover-lift" value="{{old('user_mobile')}}">
                        <span class="text-danger">@error('user_mobile'){{$message}}@enderror</span> 

                    </div>
                    <div class="mb-3">
                        <label class="form-label">City</label>
                        <input type="text" name="user_city" class="form-control hover-lift" value="{{old('user_city')}}" >
                        <span class="text-danger">@error('user_city'){{$message}}@enderror</span> 

                    </div>
                    <div class="mb-3">
                         <label class="form-label">About You / Bio</label>
                         <textarea name="user_about" rows="4" class="form-control hover-lift" placeholder="Tell us a bit about yourselflike skill..." >{{old('user_about')}}</textarea>
                         <span class="text-danger">@error('user_about'){{$message}}@enderror</span> 

                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-outline-primary hover-lift w-100">Register</button>
                    </div>
                      <p class="mt-3 mt-0" >Already have an account?<a href="{{route('login.form')}}">Login here</a></p>

                </form>
            </div>
        </div>
    </div>
</section>
@endsection
