<nav class="navbar navbar-expand-lg " style="background-color: dodgerblue;" >
  <div class="container-fluid">
    <a class="navbar-brand text-white hover-lift" href="{{route('home')}}">Dream-Job</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link text-white hover-lift" href="{{route('home')}}">Home</a></li>
        @if(session('user_id'))
        <li class="nav-item"><a class="nav-link text-white hover-lift" href="{{route('profile')}}">My Profile</a></li>
        @endif
        @if(session('user_id'))
        <li class="nav-item"><a class="nav-link text-white hover-lift" href="{{route('my.job') }}">My Jobs</a></li>
        @endif
        <li class="nav-item"><a class="nav-link text-white hover-lift" href="{{route('terms')}}">Terms</a></li>
        <li class="nav-item"><a class="nav-link text-white hover-lift" href="{{route('about')}}">About</a></li>
        <li class="nav-item"><a class="nav-link text-white hover-lift" href="{{route('contact.form')}}">Contact</a></li>
        @if(session('user_id'))
       <li class="nav-item"><a class="nav-link btn btn-danger text-white ms-2" href="{{ route('logout') }}">Logout</a></li>
        @endif
      </ul>
    </div>
  </div>
</nav>
