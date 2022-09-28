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


<!-- Carousel -->
<div class="py-2"> 
<div class="container">
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('frontend/image/student40.png')}}" alt="Los Angeles" class="d-block w-100">
	  <div class="carousel-caption">
    <h3 style="text-shadow: 5px 5px 10px black; color:#FFFF00;font-weight: bold; font-size: 250%;">
	January 2023 enrolment now in progress
	</h3>
    <p style=" color:white;font-weight: bold; font-size: 100%;">We had such a great time in LA!</p>
  </div>
    </div>
   <div class="carousel-item">
      <img src="{{asset('frontend/image/student40.png')}}" alt="Los Angeles" class="d-block w-100">
	  <div class="carousel-caption">
    <h3 style="text-shadow: 5px 5px 10px black; color:#FFFF00;font-weight: bold; font-size: 200%;">
	ENROLL YOUR CHILD AT ZUVA ACADEMY FOR A FULL EDUCATION 
	</h3>
    <p style=" color:white;font-weight: bold; font-size: 100%;">We had such a great time in LA!</p>
  </div>
    </div>
     <div class="carousel-item">
      <img src="{{asset('frontend/image/student40.png')}}" alt="Los Angeles" class="d-block w-100">
	  <div class="carousel-caption">
    <h3 style="text-shadow: 5px 5px 10px black; color:#FFFF00;font-weight: bold; font-size: 250%;">
	January 2023 enrolment now in progress
	</h3>
    <p style=" color:white;font-weight: bold; font-size: 100%;">We had such a great time in LA!</p>
  </div>
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
</div>
</div>



   <section class="ftco-section ftco-no-pb ftco-no-pt" id="chap-section">

   </section>
   
   
   
    
	<section class="ftco-section ftco-no-pb ftco-no-pt" id="chapter-section">
<div class="container">
<div class="row justify-content-center py-5 mt-5">
<div class="col-md-12 heading-section text-center ftco-animate">
<h2 class="mb-4">Curriculum</h2>
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
    <h5 class="card-title" style="color: #008000; ;font-family:Times New Roman;font-size: 25px;font-weight: bold;" >Mathematics</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
</div>

<div class="col-md-4 col-sm-1 mt-3">
<div class="card">
  <div class="card-body">
    <h5 class="card-title" style="color: #008000; ;font-family:Times New Roman;font-size: 25px;font-weight: bold;">English Language</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
</div>

<div class="col-md-4 col-sm-1 mt-3">
<div class="card">
  <div class="card-body">
    <h5 class="card-title" style="color: #008000; ;font-family:Times New Roman;font-size: 25px;font-weight: bold;">History</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
</div>

<div class="col-md-4 col-sm-1 mt-3">
<div class="card">
  <div class="card-body">
    <h5 class="card-title" style="color: #008000; ;font-family:Times New Roman;font-size: 25px;font-weight: bold;">Religious Studies</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
</div>


<div class="col-md-4 col-sm-1 mt-3">
<div class="card">
  <div class="card-body">
    <h5 class="card-title" style="color: #008000; ;font-family:Times New Roman;font-size: 25px;font-weight: bold;">Combined Science</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
</div>

<div class="col-md-4 col-sm-1 mt-3">
<div class="card">
  <div class="card-body">
    <h5 class="card-title" style="color: #008000; ;font-family:Times New Roman;font-size: 25px;font-weight: bold;">Geography</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
</div>

<div class="col-md-4 col-sm-1 mt-3">
<div class="card">
  <div class="card-body">
    <h5 class="card-title" style="color: #008000; ;font-family:Times New Roman;font-size: 25px;font-weight: bold;">Accounting</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
</div>


<div class="col-md-4 col-sm-1 mt-3">
<div class="card">
  <div class="card-body">
    <h5 class="card-title" style="color: #008000; ;font-family:Times New Roman;font-size: 25px;font-weight: bold;">Economics</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
</div>

<div class="col-md-4 col-sm-1 mt-3">
<div class="card">
  <div class="card-body">
    <h5 class="card-title" style="color: #008000; ;font-family:Times New Roman;font-size: 25px;font-weight: bold;">Business Studies</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
</div>

<div class="col-md-4 col-sm-1 mt-3">
<div class="card">
  <div class="card-body">
    <h5 class="card-title" style="color: #008000; ;font-family:Times New Roman;font-size: 25px;font-weight: bold;">ICT</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
</div>

</div>

</div>
<div id="page-2" class="page bg-light two">
<h2 class="heading">HEXCO SUBJECTS</h2>

<div class="row d-flex contact-info mb-5">

<div class="col-md-4 col-sm-1 mt-3">
<div class="card">
  <div class="card-body">
    <h5 class="card-title" style="color: #008000; ;font-family:Times New Roman;font-size: 25px;font-weight: bold;">Brick and Block laying</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
</div>


<div class="col-md-4 col-sm-1 mt-3">
<div class="card">
  <div class="card-body">
    <h5 class="card-title" style="color: #008000; ;font-family:Times New Roman;font-size: 25px;font-weight: bold;">Building Technology and design</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
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
    <h5 class="card-title" style="color: #008000; ;font-family:Times New Roman;font-size: 25px;font-weight: bold;">Shona</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
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

<div class="py-5"> 
<div class="container">
 <div class="mt-4 p-5 bg-warning text-white rounded">
  <h1>January 2023 enrolment now in progress</h1>
  <p>ENROLL YOUR CHILD AT ZUVA ACADEMY FOR A FULL EDUCATION </p>
  <p>We believe that unlocking the potential in every pupil is only possible when you provide them with a full and rounded education. Of course, academia remains at the heart of that, but we never underestimate the importance of sports, music or the arts, and the incredible enrichment these subjects can bring to a child’s life and future.</p>
</div>
</div>
</div>
  
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
