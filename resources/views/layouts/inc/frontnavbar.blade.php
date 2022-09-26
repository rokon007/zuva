

<style>




.navbar a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  
  text-decoration: none;
  
}

.navbar a:hover {
  background-color:#04AA6D;
  color: white;
}

.navbar a.active {
  background-color: #red;
  color: black;
}

.navbar .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .navbar a:not(:first-child) {display: none;}
  .navbar a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .navbar.responsive .icon {
    position: absolute;
    right: 0;
    bottom:0;
  }
  .navbar.responsive a {
    float: none;
    display: block;
    text-align: left;
  }

}
</style>


<!--<nav class="navbar navbar-expand-lg navbar-dark bg-dark">-->
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="{{url('/')}}">
	  <img src="{{asset('frontend/image/logo1.png')}}" alt="Zuva Academy" width="60" height="60"> Zuva Academy
	</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/about') }}">Why Choose Zuva Academy</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="{{ url('/team') }}">Our Staff</a>
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