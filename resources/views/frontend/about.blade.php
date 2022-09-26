@extends('layouts.front')

@section('title')
 Zuva Academy
@endsection

@include('layouts.inc.frontnavbar')
@section('content')
<style>
       .container1 {
  position: relative;
  text-align: center;
  color: white;
}

     /* Centered text */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
    </style>


 <div class="container1">
  <img src="{{asset('frontend/image/d3.webp')}}" alt="Snow" style="width:100%;">
  
  <div class="centered" ><p style="color:white;font-weight: bold; font-size: 300%;">About Zuva Academy</p></div>
</div> 

   <div class="py-5"> 
     
       <div class="container"> 
	   
	   
	   <div class="card mb-3">
  <img src="{{asset('frontend/image/ban1.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-title">About Zuva Academy </h4>
    <p class="card-text">Experienced mathematics teacher with a career spanning a decade
Self-driven, highly intrinsically motivated,  hardworking, innovative, a child-centered educationist who is always willing to accept new ideas of teaching and learning.
A well-decorated handball coach with various Mash East province accolades from former schools, St John's Chikwaka and Murewa High.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>

	   
	   
	   
	   
	   
	   
	
   </div>
   </div>


 
	 @include('layouts.inc.footer')
@endsection
@section('script')
       <script>
      $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
      </script>
@endsection
