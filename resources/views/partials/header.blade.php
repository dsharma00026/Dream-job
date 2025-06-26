<nav class="navbar navbar-expand-lg " style="background-color: dodgerblue;" >
  <div class="container-fluid">
    <a class="navbar-brand text-white hover-lift" href="#">Dream-Job</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link text-white hover-lift" href="/">Home</a></li>
        @if(session('user_id'))
        <li class="nav-item"><a class="nav-link text-white hover-lift" href="/profile">Profile</a></li>
        @endif
        @if(session('user_id'))
        <li class="nav-item"><a class="nav-link text-white hover-lift" href="{{ route('my.job') }}">My Jobs</a></li>
        @endif
        <li class="nav-item"><a class="nav-link text-white hover-lift" href="/terms">Terms</a></li>
        <li class="nav-item"><a class="nav-link text-white hover-lift" href="/about">About</a></li>
        <li class="nav-item"><a class="nav-link text-white hover-lift" href="/contact">Contact</a></li>
        @if(session('user_id'))
       <li class="nav-item"><a class="nav-link btn btn-danger text-white ms-2" href="{{ route('logout') }}">Logout</a></li>
        @endif
      </ul>
    </div>
  </div>
</nav>
