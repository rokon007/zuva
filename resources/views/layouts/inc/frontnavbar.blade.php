

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
a.ex1.active:hover {
 background-color: #008000; 
 color: #ffffff;
}

a.ex1 {
  
  
  color:#000000;
 font-family: Arial narrow;
 font-weight: bold;
  font-size: 18px;
  text-decoration: none;
  
  
  
}


 

 
 

</style>


<!--<nav class="navbar navbar-expand-lg navbar-dark bg-dark">-->
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" style=" color: #008000;font-family:Times New Roman;font-size: 30px;font-weight: bold;" href="{{url('/')}}">
	  <img src="{{asset('frontend/image/logo1.png')}}" alt="Zuva Academy" width="60" height="60"> Zuva Academy
	</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link ex1 active" aria-current="page" href="{{ url('/') }}">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ex1 active"  href="{{ url('/about') }}">WHY CHOOSE ZUVA ACADEMY</a>
        </li>
		<li class="nav-item">
          <a class="nav-link ex1 active"  href="{{ url('/team') }}">OUR STAFF</a>
        </li>
		<li class="nav-item">
          <a class="nav-link ex1 active" href="{{ url('/curriculum') }}">CURRICULUM</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ex1 active" href="{{ url('/contact') }}">CONTACT</a>
        </li>
		 
        @if (Route::has('login'))
         @auth
         <li class="nav-item ">
               <a class="nav-link ex1 active"  href="{{ url('/dassboard') }}">DASHBOARD</a>
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
<div class="rokon-notis">
<div class="container mt-1">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center breaking-news bg-white">
                <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-success py-2 text-white px-1 news"><span class="d-flex align-items-center">&nbsp;Notice</span></div>
                <marquee class="news-scroll " behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();" style="color:black;"> 
				    @if($notice->count())
                        @foreach ($notice as $notic)
				 <a href="{{ route('view.notice', [$notic->id]) }}"class="text-black">
				{{ $notic->title }}. 
				</a> <span class="dot"></span>
				        @endforeach
					@else	
				<span class="dot"></span><a href="#">
                      No Notice Found
                </a> <span class="dot"></span>				
                  @endif               
				<!--<a href="#">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
				</a> <span class="dot"></span> 
				<a href="#">
				Duis aute irure dolor in reprehenderit in voluptate velit esse
				</a>-->
                </marquee>
            </div>
        </div>
    </div>
</div>
</div>