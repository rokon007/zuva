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

	{{--
	<div class="container1">
  <img src="{{asset('frontend/image/ban1.jpg')}}" alt="Snow" style="width:100%;">
  
  <div class="centered" ><p style="text-shadow: 5px 5px 10px black;color:white;font-weight: bold; font-size: 100%;">WHY CHOOSE ZUVA ACADEMY?</p></div>
</div> 
	--}}
	
	
	
	 <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>WHY CHOOSE <span>ZUVA ACADEMY?</span></h2>
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
			  <img src="{{asset('Images/image1.jpeg')}}" class="card-img-top" alt="...">
			  </div>
             <!-- <h4 class="title"><a href="" class="stretched-link"> </a></h4>-->
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-4 col-md-4 col-sm-1" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon">
			  <img src="{{asset('Images/image2.jpeg')}}" class="card-img-top" alt="...">
			  </div>
              <!-- <h4 class="title"><a href="" class="stretched-link"> </a></h4>-->
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-4 col-md-4 col-sm-1" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon">
			  <img src="{{asset('Images/image3.jpeg')}}" class="card-img-top" alt="...">
			  </div>
              <!-- <h4 class="title"><a href="" class="stretched-link"> </a></h4>-->
            </div>
          </div>
          <!--End Icon Box -->

          

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->
   <div class="py-2">
       <div class="container">
	   	   <hr>
   </div>
   </div>
  <div class="py-2"> 
       <div class="container">
  
  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-0 text-center" style="font-family:times new roman;font-weight: bold;color: #008000;">WHY CHOOSE ZUVA ACADEMY?</h3>
    <div class="d-flex text-muted pt-3">
     <div class="fa-2x">
  <i class="fa-solid " width="32" height="32" >1.</i>
</div>&nbsp;&nbsp;&nbsp;
      <p class="pb-3 mb-0 small lh-sm border-bottom">
        <strong class="d-block text-warning" style="font-family: Arial narrow;font-size: 18px;font-weight: bold;">A FULL EDUCATION</strong>
       <strong style="font-family: Arial narrow;font-size: 17px;">We believe that unlocking the potential in every pupil is only possible when you provide them with a full and rounded education. Of course, academia remains at the heart of that, but we never underestimate the importance of sports, music or the arts, and the incredible enrichment these subjects can bring to a child’s life and future.</strong>
</p>
      </p>
    </div>
    <div class="d-flex text-muted pt-2">
     <div class="fa-2x">
         <i class="fa-solid" width="32" height="32" >2.</i>
     </div>&nbsp;&nbsp;&nbsp;
                                                                                                                 
      <p class="pb-3 mb-0 small lh-sm border-bottom">
       <strong class="d-block text-warning"  style="font-family: Arial narrow;font-size: 18px;font-weight: bold;">MAKING EACH INDIVIDUAL THE BEST VERSION OF THEMSELVES THEY CAN BE.</strong>
       <strong style="font-family: Arial narrow;font-size: 17px;"> We believe that every child is an individual with their own unique personality, talents and skills; and it’s this individuality that we encourage them to grow at all stages of their education.<br><br>
		A child’s potential could lie anywhere – so we ensure that every pupil is exposed to a huge array of opportunities and experiences. We then pride ourselves on identifying and honing their strengths to make the most of their natural abilities, while working hard to develop areas that need improvement. This approach sees each and every student grow into the very best version of themselves they can be.</strong>
      </p>
    </div>
    <div class="d-flex text-muted pt-2">
      <div class="fa-2x">
  <i class="fa-solid ">3.</i>
</div>&nbsp;&nbsp;&nbsp;

      <p class="pb-3 mb-0 small lh-sm border-bottom">                                                                 
        <strong class="d-block text-warning"  style="font-family: Arial narrow;font-size: 18px;font-weight: bold;"> CONFIDENCE FOR LIFE BEYOND EDUCATION</strong>
        <strong style="font-family: Arial narrow;font-size: 17px;"> Our approach to ensuring each child becomes a confident, well-rounded young adult isn’t exclusively founded on providing an excellent education.<br>
		We believe instilling confidence in each individual child by providing an environment that is full, diverse & inspiring</strong>
      </p>
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
