@extends('layouts.front')

@section('title')
 Zuva Academy|Curriculum
@endsection

@section('css')
<link rel="stylesheet" href="frontend/curriculum/css/font-awesome.min.css">
<link rel="stylesheet" href="frontend/curriculum/css/rokon1.css" />
<link rel="stylesheet" href="frontend/curriculum/css/rokon2.css" />
@endsection

@include('layouts.inc.frontnavbar')
@section('content')

<!-- ======= herostaff Section ======= -->
  <section id="curriculum" class="curriculum">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>CURRICULUM<span> </span></h2>
		   <p>January 2023 enrolment now in progress.<br>
		   ENROLL YOUR CHILD AT ZUVA ACADEMY FOR A FULL EDUCATION 
		   </p>
		   
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
			  <img src="{{asset('Images/image11.png')}}" class="card-img-top" alt="...">
			  </div>
             <!-- <h4 class="title"><a href="" class="stretched-link"> </a></h4>-->
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-4 col-md-4 col-sm-1" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon">
			  <img  src="{{asset('Images/image (4).jpeg')}}" class="card-img-top" alt="...">
			  </div>
              <!-- <h4 class="title"><a href="" class="stretched-link"> </a></h4>-->
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-4 col-md-4 col-sm-1" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon">
			  <img  src="{{asset('Images/image3.jpeg')}}" class="card-img-top" alt="...">
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
  <!-- End herostaff Section -->
   
   
   
    
	<section class="ftco-section ftco-no-pb ftco-no-pt" id="chapter-section">
<div class="container">
<div class="row justify-content-center py-5 mt-5">
<div class="col-md-12 heading-section text-center ftco-animate">
<h2 class="mb-4" style="color:#008000">CURRICULUM</h2>
</div>
</div>
<div class="row">
<div class="col-md-3 mb-4">
<nav id="navi">
<ul>

<li><a href="#page-1">CAMBRIDGE SUBJECTS</a></li>
<li><a href="#page-2">HEXCO SUBJECTS</a></li>
<li><a href="#page-3">ZIMSEC SUBJECTS</a></li>


</ul>
</nav>
</div>
<div class="col-md-9">
<div id="page-1" class="page bg-light one">
<h2 class="heading">CAMBRIDGE SUBJECTS</h2>
<div class="row d-flex contact-info mb-5">

<div class="col-md-4 col-sm-1 mt-3">
<div class="card">
  <div class="card-body">
    <h5 class="card-title text-center" style="color: #008000; ;font-family:Times New Roman;font-size: 25px;font-weight: bold;" >Mathematics</h5>
   
    
  </div>
</div>
</div>

<div class="col-md-4 col-sm-1 mt-3">
<div class="card">
  <div class="card-body">
    <h5 class="card-title text-center" style="color: #008000; ;font-family:Times New Roman;font-size: 25px;font-weight: bold;">English Language</h5>
    
  </div>
</div>
</div>

<div class="col-md-4 col-sm-1 mt-3">
<div class="card">
  <div class="card-body">
    <h5 class="card-title text-center" style="color: #008000; ;font-family:Times New Roman;font-size: 25px;font-weight: bold;">History</h5>
    
  </div>
</div>
</div>

<div class="col-md-4 col-sm-1 mt-3">
<div class="card">
  <div class="card-body">
    <h5 class="card-title text-center" style="color: #008000; ;font-family:Times New Roman;font-size: 25px;font-weight: bold;">Religious Studies</h5>
   
  </div>
</div>
</div>


<div class="col-md-4 col-sm-1 mt-3">
<div class="card">
  <div class="card-body">
    <h5 class="card-title text-center" style="color: #008000; ;font-family:Times New Roman;font-size: 25px;font-weight: bold;">Combined Science</h5>
   
  </div>
</div>
</div>

<div class="col-md-4 col-sm-1 mt-3">
<div class="card">
  <div class="card-body">
    <h5 class="card-title text-center" style="color: #008000; ;font-family:Times New Roman;font-size: 25px;font-weight: bold;">Geography</h5>
   
  </div>
</div>
</div>

<div class="col-md-4 col-sm-1 mt-3">
<div class="card">
  <div class="card-body">
    <h5 class="card-title text-center" style="color: #008000; ;font-family:Times New Roman;font-size: 25px;font-weight: bold;">Accounting</h5>
   
  </div>
</div>
</div>


<div class="col-md-4 col-sm-1 mt-3">
<div class="card">
  <div class="card-body">
    <h5 class="card-title text-center" style="color: #008000; ;font-family:Times New Roman;font-size: 25px;font-weight: bold;">Economics</h5>
   
  </div>
</div>
</div>

<div class="col-md-4 col-sm-1 mt-3">
<div class="card">
  <div class="card-body">
    <h5 class="card-title text-center" style="color: #008000; ;font-family:Times New Roman;font-size: 25px;font-weight: bold;">Business Studies</h5>
   
  </div>
</div>
</div>

<div class="col-md-4 col-sm-1 mt-3">
<div class="card">
  <div class="card-body">
    <h5 class="card-title text-center" style="color: #008000; ;font-family:Times New Roman;font-size: 25px;font-weight: bold;">ICT</h5>
    
  </div>
</div>
</div>

</div>

</div>
<div id="page-2" class="page bg-light two">
<h2 class="heading">HEXCO SUBJECTS</h2>

<div class="row d-flex contact-info mb-5">

<div class="col-md-6 col-sm-1 mt-3">
<div class="card">
  <div class="card-body">
    <h5 class="card-title text-center" style="color: #008000; ;font-family:Times New Roman;font-size: 25px;font-weight: bold;">Brick and Block laying</h5>
   
  </div>
</div>
</div>


<div class="col-md-6 col-sm-1 mt-3">
<div class="card">
  <div class="card-body">
    <h5 class="card-title text-center" style="color: #008000; ;font-family:Times New Roman;font-size: 25px;font-weight: bold;">Building Technology and design</h5>
    
  </div>
</div>
</div>

</div>


</div>
<div id="page-3" class="page bg-light three">
<h2 class="heading">ZIMSEC SUBJECTS</h2>
<div class="row d-flex contact-info mb-5">

<div class="col-md-4 col-sm-1 mt-3">
<div class="card" >
  <div class="card-body">
    <h5 class="card-title text-center" style="color: #008000; ;font-family:Times New Roman;font-size: 25px;font-weight: bold;">Shona</h5>
   
  </div>
</div>
</div>


</div>
</div>

</div>
</div>
</div>
</section>
   
   <section class="ftco-section ftco-no-pb ftco-no-pt" id="chap1-section">

   </section>
   {{--
<div class="py-5"> 
<div class="container">
 <div class="mt-4 p-5 bg-warning text-white rounded">
  <h1>January 2023 enrolment now in progress</h1>
  <p>ENROLL YOUR CHILD AT ZUVA ACADEMY FOR A FULL EDUCATION </p>
  <p>We believe that unlocking the potential in every pupil is only possible when you provide them with a full and rounded education. Of course, academia remains at the heart of that, but we never underestimate the importance of sports, music or the arts, and the incredible enrichment these subjects can bring to a child’s life and future.</p>
</div>
</div>
</div>
   --}}

<section class="ftco-about img ftco-section" id="about-section">
<div class="container">
<div class="row d-flex no-gutters">
<div class="col-md-6 col-lg-6 d-flex">
<div class="img-about img d-flex align-items-stretch">
<div class="overlay"></div>
<div class="img d-flex align-self-stretch align-items-center" style="background-image:url('{{ asset('Images/image4.jpeg')}}');">
</div>


</div>
</div>
<div class="col-md-6 col-lg-6 pl-md-5">
<div class="row justify-content-start pb-3">
<div class="col-md-12 heading-section ftco-animate">
<h3 class="mb-4"style="color: #008000;">ABOUT THE CURRICULUM</h3>
<p>It is our aim to unlock the potential
of each individual by offering every
pupil life-changing opportunities and
an environment in which academic
excellence is promoted through
learning and shared experiences.</p>
<div class="text-about">

<p>With excellent facilities for teaching
and learning, and committed and
well-qualified teachers, our pupils are
encouraged to fulfil and often exceed
their potential. </p>

<p>Zuva Academy is both academically ambitious and academically sensitive. Pupils are challenged to make the most of their abilities and take responsibility for
their progress. 
</p>

<p>Those in need of specific
additional support are identified and
provided for in a well-established
learning support unit.</p>
<p>Pupils are encouraged to think ahead,
to prepare not merely for O-Level and
A-level, but also for the challenges
and opportunities beyond school.</p>
<p>Careers guidance is embedded in an
extensive programme of personal
and social education.</p>
<p>Every individual at Zuva Academy
counts. We ask nothing more from
them than that they have the courage
to be, not ordinary, but extraordinary,
and to strive to do their very best; to be
confident and proud of their academic
achievements and to believe that there
is no glass ceiling to their academic
attainment.</p>

</div>
</div>
</div>
</div>
</div>
</div>
</section>
  
 <div class="py-5"> 
 <div class="container"> 
<div class="row">
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="/w3images/fjords.jpg">
        <img src="{{asset('frontend/image/sport30.png')}}" alt="Lights" style="width:100%">
        <div class="caption">
          <p>SCIENCE</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="/w3images/nature.jpg">
        <img src="{{asset('frontend/image/sport20.png')}}" alt="Nature" style="width:100%">
        <div class="caption">
          <p>AGRICULTURE</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="/w3images/fjords.jpg">
        <img src="{{asset('frontend/image/sport1.png')}}" alt="Fjords" style="width:100%">
        <div class="caption">
          <p>SPORT</p>
        </div>
      </a>
    </div>
  </div>
   <div class="col-md-3">
    <div class="thumbnail">
      <a href="/w3images/fjords.jpg">
        <img src="{{asset('frontend/image/sport30.png')}}" alt="Fjords" style="width:100%">
        <div class="caption">
          <p>SCIENCE</p>
        </div>
      </a>
    </div>
  </div>
</div>
</div>


</div>



	 @include('layouts.inc.footer1')
@endsection
@section('script')
    <script src="frontend/curriculum/js/jquery.min.js"></script>
<script src="frontend/curriculum/js/jquery-migrate-3.0.1.min.js%2bpopper.min.js%2bbootstrap.min.js.pagespeed.jc.JHZ20Zp0_b.js"></script><script>eval(mod_pagespeed_RnMiAhKU_u);</script>
<script>eval(mod_pagespeed_SCQZmRqKN3);</script>
<script>eval(mod_pagespeed_aKlB_DizzG);</script>
<script src="frontend/curriculum/js/jquery.easing.1.3.js%2bjquery.waypoints.min.js%2bjquery.stellar.min.js%2bowl.carousel.min.js.pagespeed.jc.jxBPC5Ttgn.js"></script><script>eval(mod_pagespeed_YJ1csdlNvN);</script>
<script>eval(mod_pagespeed_uAXIVM3doh);</script>
<script>eval(mod_pagespeed_FacjMT51xN);</script>
<script>eval(mod_pagespeed_hpLGaKMiFY);</script>
<script src="frontend/curriculum/js/jquery.magnific-popup.min.js%2bjquery.animateNumber.min.js%2bscrollax.min.js%2bgoogle-map.js%2bmain.js.pagespeed.jc.zPAUCnbQR0.js"></script><script>eval(mod_pagespeed_$3ThuVbXLI);</script>
<script>eval(mod_pagespeed_2u2Asl2zn7);</script>
<script>eval(mod_pagespeed_qDb$UbWhVM);</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
<script>eval(mod_pagespeed_dc0tkUCn8x);</script>
<script>eval(mod_pagespeed_tXiAeDiJpM);</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"7515c1eedf49899e","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.8.1","si":100}' crossorigin="anonymous"></script>
@endsection
