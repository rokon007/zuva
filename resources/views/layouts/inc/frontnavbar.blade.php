<!--<nav class="navbar navbar-expand-lg navbar-dark bg-dark">-->
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="{{url('/')}}">
	  <img src="{{asset('frontend/image/logo1.png')}}" alt="Bootstrap" width="60" height="60"> Zuva Academy
	</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/about') }}">Why choose zuva academy</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="{{ url('/team') }}">Our staff</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="{{ url('/contact') }}">Curriculum</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
        </li>
		 
        @if (Route::has('login'))
         @auth
         <li class="nav-item">
               <a class="nav-link" href="{{ url('/dassboard') }}">Dassboard</a>
         </li>
          @else
    <!--    <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Log in</a>
        </li> -->
             @if (Route::has('register'))
          <!--   <li class="nav-item">
               <a class="nav-link" href="{{ route('register') }}">Register</a>
             </li> -->
             @endif
         @endauth
        @endif
        
      </ul>
    </div>
  </div>
</nav>