@extends('layouts.front')

@section('title')

 <title> Zuva Academy | Our Staff</title>
    <meta charset="utf-8">
    <meta name="description" content="Staff">
   
    <meta name="keywords" content="Zuva Academy-Our Staff">
    <meta name="author" content="Tanaka Karumazondo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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


 
<!--
<div class="container1">
  <img src="{{asset('frontend/image/ban2.jpg')}}" alt="Snow" style="width:100%;">
  
  <div class="centered" ><p style="text-shadow: 5px 5px 10px black; color:white;font-weight: bold; font-size: 150%;">Our Staff</p></div>
</div> 
-->
 <!-- ======= herostaff Section ======= -->
 <!-- <section id="herostaff" class="herostaff">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>OUR<span> STAFF</span></h2>
		  {{--
          <p>Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started">Get Started</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
		  --}}
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="{{asset('frontend/image/logo5.png')}}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-4 col-md-4 col-sm-1" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon">
			  <img  src="{{asset('frontend/image/t6.jpg')}}" class="card-img-top" alt="...">
			  </div>
             
            </div>
          </div>
        

          <div class="col-xl-4 col-md-4 col-sm-1" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon">
			  <img  src="{{asset('frontend/image/t8.jpg')}}" class="card-img-top" alt="...">
			  </div>
             
            </div>
          </div>
         

          <div class="col-xl-4 col-md-4 col-sm-1" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon">
			  <img  src="{{asset('frontend/image/t7.jpg')}}" class="card-img-top" alt="...">
			  </div>
             
            </div>
          </div>
          

          

        </div>
      </div>
    </div>

    </div>
  </section>-->
  <!-- End herostaff Section -->
  
  
  <div class="hero100-image">
     
  <div class="hero100-text">
    <p style="font-weight: bold; font-size: 300%;"> OUR<span> STAFF</span></p>
    
  
  </div>
</div> 


   <div class="py-5"> 
     
       <div class="container"> 
	    @if($employee->count())
             @foreach ($employee as $staff)
	   
	  <div class="card mb-3 mt-2" style="max-width: 100%;">
  <div class="row g-0">
    <div class="col-md-4 col-sm-1">
      <img src="{{$staff->images}}" class="img-fluid mb-2 img-thumbnail rounded-start"  alt="...">
    </div>
    <div class="col-md-8 col-sm-1">
      <div class="card-body">
        <h4 class="card-title" style="color: #008000; ;font-family:Arial narrow;font-weight: bold;">{{$staff->first_name}} {{$staff->last_name}}</h5>
		<h6 class="card-text" style="font-family: Arial narrow;font-size: 17px;">{{$staff->position}}</h6><hr>
        <p class="card-text" style="font-family: Arial narrow;font-size: 17px;">{{$staff->description}}</p>

       
      </div>
    </div>
  </div>
</div>
 @endforeach
                                @else   
                                    <tr>
                                        <td colspan="6">
                                            <h5 class="text-center">No posts found.</h5>
                                        </td>
                                    </tr>
                                @endif 
	   
	   {{--	 <div class="card mb-3 mt-2" style="max-width: 100%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('frontend/image/t2.jpg')}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title" style="color: #008000; ;font-family:Arial narrow;font-size:;font-weight: bold;">Mharadzirwa Kudakwashe Bryan</h5>
        <p class="card-text" >Experienced mathematics teacher with a career spanning a decade
Self-driven, highly intrinsically motivated,  hardworking, innovative, a child-centered educationist who is always willing to accept new ideas of teaching and learning.
<br>
A well-decorated handball coach with various Mash East province accolades from former schools, St John's Chikwaka and Murewa High.
</p>
        
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
        <h5 class="card-title" style="color: #008000; ;font-family:Times New Roman;font-weight: bold;">Mharadzirwa Kudakwashe Bryan</h5>
        <p class="card-text">Experienced mathematics teacher with a career spanning a decade
Self-driven, highly intrinsically motivated,  hardworking, innovative, a child-centered educationist who is always willing to accept new ideas of teaching and learning.
<br>
A well-decorated handball coach with various Mash East province accolades from former schools, St John's Chikwaka and Murewa High.
</p>
        
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
        <h5 class="card-title" style="color: #008000; ;font-family:Times New Roman;font-weight: bold;">Mharadzirwa Kudakwashe Bryan</h5>
        <p class="card-text">Experienced mathematics teacher with a career spanning a decade
Self-driven, highly intrinsically motivated,  hardworking, innovative, a child-centered educationist who is always willing to accept new ideas of teaching and learning.
<br>
A well-decorated handball coach with various Mash East province accolades from former schools, St John's Chikwaka and Murewa High.
</p>
        
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
        <h5 class="card-title" style="color: #008000; ;font-family:Times New Roman;font-weight: bold;">Mharadzirwa Kudakwashe Bryan</h5>
        <p class="card-text">Experienced mathematics teacher with a career spanning a decade
Self-driven, highly intrinsically motivated,  hardworking, innovative, a child-centered educationist who is always willing to accept new ideas of teaching and learning.
<br>
A well-decorated handball coach with various Mash East province accolades from former schools, St John's Chikwaka and Murewa High.
</p>
       
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
        <h5 class="card-title" style="color: #008000; ;font-family:Times New Roman;font-weight: bold;">Mharadzirwa Kudakwashe Bryan</h5>
        <p class="card-text">Experienced mathematics teacher with a career spanning a decade
Self-driven, highly intrinsically motivated,  hardworking, innovative, a child-centered educationist who is always willing to accept new ideas of teaching and learning.
<br>
A well-decorated handball coach with various Mash East province accolades from former schools, St John's Chikwaka and Murewa High.
</p>
       
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
        <h5 class="card-title" style="color: #008000; ;font-family:Times New Roman;font-weight: bold;">Mharadzirwa Kudakwashe Bryan</h5>
        <p class="card-text">Experienced mathematics teacher with a career spanning a decade
Self-driven, highly intrinsically motivated,  hardworking, innovative, a child-centered educationist who is always willing to accept new ideas of teaching and learning.
<br>
A well-decorated handball coach with various Mash East province accolades from former schools, St John's Chikwaka and Murewa High.
</p>
        
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
        <h5 class="card-title" style="color: #008000; ;font-family:Times New Roman;font-weight: bold;">Mharadzirwa Kudakwashe Bryan</h5>
        <p class="card-text">Experienced mathematics teacher with a career spanning a decade
Self-driven, highly intrinsically motivated,  hardworking, innovative, a child-centered educationist who is always willing to accept new ideas of teaching and learning.
<br>
A well-decorated handball coach with various Mash East province accolades from former schools, St John's Chikwaka and Murewa High.
</p>
       
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
        <h5 class="card-title" style="color: #008000; ;font-family:Times New Roman;font-weight: bold;">Mharadzirwa Kudakwashe Bryan</h5>
        <p class="card-text">Experienced mathematics teacher with a career spanning a decade
Self-driven, highly intrinsically motivated,  hardworking, innovative, a child-centered educationist who is always willing to accept new ideas of teaching and learning.
<br>
A well-decorated handball coach with various Mash East province accolades from former schools, St John's Chikwaka and Murewa High.
</p>
       
      </div>
    </div>
  </div>
</div>
	   --}}
 


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
