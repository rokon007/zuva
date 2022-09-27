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
 backdrop-filter: brightness(120%);
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
  <img src="{{asset('frontend/image/ban1.jpg')}}" alt="Snow" style="width:100%;">
  
  <div class="centered" ><p style="text-shadow: 5px 5px 10px black;color:white;font-weight: bold; font-size: 100%;">WHY CHOOSE ZUVA ACADEMY?</p></div>
</div> 

   <div class="py-5"> 
     
       <div class="container"> 
	   
	   
	   <div class="card mb-3">
 <!-- <img src="{{asset('frontend/image/ban1.jpg')}}" class="card-img-top" alt="...">-->
  <div class="card-body">
    <h4 class="card-title">WHY CHOOSE ZUVA ACADEMY? </h4>
    <p class="card-text">1. A full education</p>
	<p class="card-text">We believe that unlocking the potential in every pupil is only possible when you provide them with a full and rounded education. Of course, academia remains at the heart of that, but we never underestimate the importance of sports, music or the arts, and the incredible enrichment these subjects can bring to a child’s life and future.
</p>
	<br>
	<p class="card-text">2. Making each individual the best version of themselves they can be.</p>
	<p class="card-text">We believe that every child is an individual with their own unique personality, talents and skills; and it’s this individuality that we encourage them to grow at all stages of their education.</p>
	<p class="card-text">A child’s potential could lie anywhere – so we ensure that every pupil is exposed to a huge array of opportunities and experiences. We then pride ourselves on identifying and honing their strengths to make the most of their natural abilities, while working hard to develop areas that need improvement. This approach sees each and every student grow into the very best version of themselves they can be.</p>
	<br>
	<p class="card-text">3. Confidence for life beyond education</p>
	<p class="card-text">Our approach to ensuring each child becomes a confident, well-rounded young adult isn’t exclusively founded on providing an excellent education.
</p>
	<p class="card-text">We believe instilling confidence in each individual child by providing an environment that is full, diverse & inspiring</p>
	
  </div>
</div>

	   
	   
	   
	   
	   
	   
	
   </div>
   </div>


 
	 @include('layouts.inc.footer1')
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
