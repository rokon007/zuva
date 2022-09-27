

<style>




.ex2 a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  
  text-decoration: none;
  
}

.ex2 a:hover {
  background-color:#04AA6D;
  color: white;
}

.ex2 a.active {
  background-color: #red;
  color: black;
}

.ex2 .icon {
  display: none;
}



</style>
<style>
a.ex1:hover {
 background-color: #008000; 
 color: #ffffff;
}

a.ex1 {
  
  
  color: #666699;
  font-family:Times New Roman;
  font-size: 18px;
  text-decoration: none;
  
}
 
 

</style>


<!--<nav class="navbar navbar-expand-lg navbar-dark bg-dark">-->
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" style=" color: #328fa8;font-family:Times New Roman;font-size: 25px;font-weight: bold;" href="{{url('/')}}">
	  <img src="{{asset('frontend/image/logo1.png')}}" alt="Zuva Academy" width="60" height="60"> Zuva Academy
	</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link ex1" aria-current="page" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ex1"  href="{{ url('/about') }}">Why Choose Zuva Academy</a>
        </li>
		<li class="nav-item">
          <a class="nav-link ex1"  href="{{ url('/team') }}">Our Staff</a>
        </li>
		<li class="nav-item">
          <a class="nav-link ex1" href="{{ url('/contact') }}">Curriculum</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ex1" href="{{ url('/contact') }}">Contact</a>
        </li>
		 
        @if (Route::has('login'))
         @auth
         <li class="nav-item ">
               <a class="nav-link ex1"  href="{{ url('/dassboard') }}">Dassboard</a>
         </li>
          @else
    <!--    <li class="nav-item">
          <a class="nav-link ex1"  href="{{ route('login') }}">Log in</a>
        </li> -->
             @if (Route::has('register'))
          <!--   <li class="nav-item">
               <a class="nav-link ex1"  href="{{ route('register') }}">Register</a>
             </li> -->
             @endif
         @endauth
        @endif
        
      </ul>
    </div>
  </div>
</nav>