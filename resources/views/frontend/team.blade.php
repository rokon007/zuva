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
  backdrop-filter: brightness(300%);
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
  <img src="{{asset('frontend/image/ban2.jpg')}}" alt="Snow" style="width:100%;">
  
  <div class="centered" ><p style="text-shadow: 5px 5px 10px black; color:white;font-weight: bold; font-size: 150%;">Our Staff</p></div>
</div> 
<!--
<div class="py-5"> 
     
       <div class="container"> 
	   
	   
	   <div class="card mb-3">
  <img src="{{asset('frontend/image/ban2.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
   
    <p class="card-text">Our people are at the heart of everything we do, and we would be nowhere without them! Above all else we value trust, openness and integrity. These principles transcend throughout the entire company, and reflect the way we do business with our customers.
<br>
Underlying each individual is an energy and commitment to not only the company but the industry itself and we love working with others who feel the same passion</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
   </div>
   </div>
-->



   <div class="py-5"> 
     
       <div class="container"> 
	   
	   
	  <div class="card mb-3 mt-2" style="max-width: 100%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('frontend/image/t1.jpg')}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Mharadzirwa Kudakwashe Bryan</h5>
        <p class="card-text">Experienced mathematics teacher with a career spanning a decade
Self-driven, highly intrinsically motivated,  hardworking, innovative, a child-centered educationist who is always willing to accept new ideas of teaching and learning.
<br>
A well-decorated handball coach with various Mash East province accolades from former schools, St John's Chikwaka and Murewa High.
</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
	   
	 <div class="card mb-3 mt-2" style="max-width: 100%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('frontend/image/t2.jpg')}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Mharadzirwa Kudakwashe Bryan</h5>
        <p class="card-text">Experienced mathematics teacher with a career spanning a decade
Self-driven, highly intrinsically motivated,  hardworking, innovative, a child-centered educationist who is always willing to accept new ideas of teaching and learning.
<br>
A well-decorated handball coach with various Mash East province accolades from former schools, St John's Chikwaka and Murewa High.
</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

 <div class="card mb-3 mt-2" style="max-width: 100%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('frontend/image/t3.jpg')}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Mharadzirwa Kudakwashe Bryan</h5>
        <p class="card-text">Experienced mathematics teacher with a career spanning a decade
Self-driven, highly intrinsically motivated,  hardworking, innovative, a child-centered educationist who is always willing to accept new ideas of teaching and learning.
<br>
A well-decorated handball coach with various Mash East province accolades from former schools, St John's Chikwaka and Murewa High.
</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

 <div class="card mb-3 mt-2" style="max-width: 100%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('frontend/image/t4.jpg')}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Mharadzirwa Kudakwashe Bryan</h5>
        <p class="card-text">Experienced mathematics teacher with a career spanning a decade
Self-driven, highly intrinsically motivated,  hardworking, innovative, a child-centered educationist who is always willing to accept new ideas of teaching and learning.
<br>
A well-decorated handball coach with various Mash East province accolades from former schools, St John's Chikwaka and Murewa High.
</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

 <div class="card mb-3 mt-2" style="max-width: 100%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('frontend/image/t5.jpg')}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Mharadzirwa Kudakwashe Bryan</h5>
        <p class="card-text">Experienced mathematics teacher with a career spanning a decade
Self-driven, highly intrinsically motivated,  hardworking, innovative, a child-centered educationist who is always willing to accept new ideas of teaching and learning.
<br>
A well-decorated handball coach with various Mash East province accolades from former schools, St John's Chikwaka and Murewa High.
</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

 <div class="card mb-3 mt-2" style="max-width: 100%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('frontend/image/t6.jpg')}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Mharadzirwa Kudakwashe Bryan</h5>
        <p class="card-text">Experienced mathematics teacher with a career spanning a decade
Self-driven, highly intrinsically motivated,  hardworking, innovative, a child-centered educationist who is always willing to accept new ideas of teaching and learning.
<br>
A well-decorated handball coach with various Mash East province accolades from former schools, St John's Chikwaka and Murewa High.
</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

 <div class="card mb-3 mt-2" style="max-width: 100%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('frontend/image/t7.jpg')}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Mharadzirwa Kudakwashe Bryan</h5>
        <p class="card-text">Experienced mathematics teacher with a career spanning a decade
Self-driven, highly intrinsically motivated,  hardworking, innovative, a child-centered educationist who is always willing to accept new ideas of teaching and learning.
<br>
A well-decorated handball coach with various Mash East province accolades from former schools, St John's Chikwaka and Murewa High.
</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

 <div class="card mb-3 mt-2" style="max-width: 100%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('frontend/image/t8.jpg')}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Mharadzirwa Kudakwashe Bryan</h5>
        <p class="card-text">Experienced mathematics teacher with a career spanning a decade
Self-driven, highly intrinsically motivated,  hardworking, innovative, a child-centered educationist who is always willing to accept new ideas of teaching and learning.
<br>
A well-decorated handball coach with various Mash East province accolades from former schools, St John's Chikwaka and Murewa High.
</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

 <div class="card mb-3 mt-2" style="max-width: 100%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('frontend/image/t9.jpg')}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Mharadzirwa Kudakwashe Bryan</h5>
        <p class="card-text">Experienced mathematics teacher with a career spanning a decade
Self-driven, highly intrinsically motivated,  hardworking, innovative, a child-centered educationist who is always willing to accept new ideas of teaching and learning.
<br>
A well-decorated handball coach with various Mash East province accolades from former schools, St John's Chikwaka and Murewa High.
</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
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
