<!DOCTYPE html>
<html lang="en">


<head>
<title>Zuva Academy</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="frontend/curriculum/css/font-awesome.min.css">
<link rel="stylesheet" href="frontend/curriculum/css/rokon1.css" />
<link rel="stylesheet" href="frontend/curriculum/css/rokon2.css" />



<script nonce="8528c358-633d-4e78-8523-150a14c2ec20">
(function(w,d){
	!function(a,e,t,r){
		a.zarazData=a.zarazData||{};
		a.zarazData.executed=[];
		a.zaraz={deferred:[],listeners:[]};
		a.zaraz.q=[];
		a.zaraz._f=function(e){
			return function(){
				var t=Array.prototype.slice.call(arguments);
				a.zaraz.q.push({m:e,a:t})}};
				for(const e of["track","set","debug"])a.zaraz[e]=a.zaraz._f(e);
				a.zaraz.init=()=>{var t=e.getElementsByTagName(r)[0],
				z=e.createElement(r),n=e.getElementsByTagName("title")[0];
				n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text);
				a.zarazData.x=Math.random();a.zarazData.w=a.screen.width;
				a.zarazData.h=a.screen.height;a.zarazData.j=a.innerHeight;
				a.zarazData.e=a.innerWidth;a.zarazData.l=a.location.href;
				a.zarazData.r=e.referrer;a.zarazData.k=a.screen.colorDepth;
				a.zarazData.n=e.characterSet;a.zarazData.o=(new Date).getTimezoneOffset();
				a.zarazData.q=[];for(;a.zaraz.q.length;){const e=a.zaraz.q.shift();
				a.zarazData.q.push(e)}
				z.defer=!0;for(const e of[localStorage,sessionStorage])
					Object.keys(e||{}).filter((a=>a.startsWith("_zaraz_"))).
				forEach((t=>{try{a.zarazData["z_"+t.slice(7)]=JSON.parse(e.getItem(t))}
				catch{a.zarazData["z_"+t.slice(7)]=e.getItem(t)}}));z.referrerPolicy="origin";z.src="frontend/curriculum/cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData)));
				t.parentNode.insertBefore(z,t)};["complete","interactive"].
				includes(e.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}
				(w,d,0,"script");})(window,document);
				</script>
				</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
<div class="container">
<!--<a class="navbar-brand" href="#">Zuva Academy<span>.</span></a>-->
 <a class="navbar-brand" style=" color: #328fa8;font-family:Times New Roman;font-size: 25px;font-weight: bold;" href="{{url('/')}}">
	  <img src="{{asset('frontend/image/logo1.png')}}" alt="Zuva Academy" width="60" height="60"> Zuva Academy
	</a>
<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
<span class="oi oi-menu"></span> Menu
</button>
<div class="collapse navbar-collapse" id="ftco-nav">
<ul class="navbar-nav nav ml-auto">
<li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
<li class="nav-item"><a href="#about-section" class="nav-link"><span>Why Choose Zuva Academy</span></a></li>
<li class="nav-item"><a href="#testimonial-section" class="nav-link"><span>Our Staff</span></a></li>
<li class="nav-item"><a href="#chapter-section" class="nav-link"><span>Curriculum</span></a></li>
<!--
<li class="nav-item"><a href="#projects-section" class="nav-link"><span>My Books</span></a></li>
<li class="nav-item"><a href="#author-section" class="nav-link"><span>Author</span></a></li>
-->
<li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
</ul>
</div>
</div>
</nav>
<section class="hero-wrap js-fullheight">
<div class="overlay"></div>
<div class="container-fluid px-0">
<!--
<div class="row d-md-flex no-gutters slider-text align-items-center js-fullheight justify-content-end">
<img class="one-third js-fullheight align-self-end order-md-last img-fluid" src="{{asset('frontend/image/banner1.jpeg')}}" alt="">
<div class="one-forth d-flex align-items-center ftco-animate js-fullheight">
<div class="text mt-5">
<span class="subheading">Best Seller Book Of The Week</span>
<h1>Clue Of The Wooden Cottage</h1>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
<p><a href="#" class="btn btn-primary py-3 px-4">Buy Now For $22.78</a></p>
</div>
</div>
</div>
-->
@include('layouts.inc.slider')
</div>
</section>
<section class="ftco-section ftco-no-pb ftco-partner">
<div class="container">
<div class="row">
<div class="col-md-12 col-lg ftco-animate">
<a href="#" class="partner d-flex justify-content-center"><img src="{{asset('frontend/curriculum/images/partner-1.png')}}" class="img-fluid" alt="Colorlib Template"></a>
</div>
<div class="col-md-12 col-lg ftco-animate">
<a href="#" class="partner d-flex justify-content-center"><img src="{{asset('frontend/curriculum/images/partner-2.png')}}" class="img-fluid" alt="Colorlib Template"></a>
</div>
<div class="col-md-12 col-lg ftco-animate">
<a href="#" class="partner d-flex justify-content-center"><img src="{{asset('frontend/curriculum/images/partner-3.png')}}" class="img-fluid" alt="Colorlib Template"></a>
</div>
<div class="col-md-12 col-lg ftco-animate">
<a href="#" class="partner d-flex justify-content-center"><img src="{{asset('frontend/curriculum/images/partner-4.png')}}" class="img-fluid" alt="Colorlib Template"></a>
</div>
<div class="col-md-12 col-lg ftco-animate">
<a href="#" class="partner d-flex justify-content-center"><img src="{{asset('frontend/curriculum/images/partner-5.png')}}" class="img-fluid" alt="Colorlib Template"></a>
</div>
</div>
</div>
</section>
<section class="ftco-about img ftco-section" id="about-section">
<div class="container">
<div class="row d-flex no-gutters">
<div class="col-md-6 col-lg-6 d-flex">
<div class="img-about img d-flex align-items-stretch">
<div class="overlay"></div>
<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(frontend/image/student40.png);">
</div>
</div>
</div>
<div class="col-md-6 col-lg-6 pl-md-5">
<div class="row justify-content-start pb-3">
<div class="col-md-12 heading-section ftco-animate">
<h2 class="mb-4">Why choose zuva academy ?</h2>
<div class="text-about">
<h4>1. A full education</h4>
<p>We believe that unlocking the potential in every pupil is only possible when you provide them with a full and rounded education. Of course, academia remains at the heart of that, but we never underestimate the importance of sports, music or the arts, and the incredible enrichment these subjects can bring to a child’s life and future..</p>

<h4>2. Making each individual the best version of themselves they can be.</h4>
<p>We believe that every child is an individual with their own unique personality, talents and skills; and it’s this individuality that we encourage them to grow at all stages of their education.</p>
<p>A child’s potential could lie anywhere – so we ensure that every pupil is exposed to a huge array of opportunities and experiences. We then pride ourselves on identifying and honing their strengths to make the most of their natural abilities, while working hard to develop areas that need improvement. This approach sees each and every student grow into the very best version of themselves they can be.
</p>
<h4>3. Confidence for life beyond education</h4>
<p>Our approach to ensuring each child becomes a confident, well-rounded young adult isn’t exclusively founded on providing an excellent education.</p>
<p>We believe instilling confidence in each individual child by providing an environment that is full, diverse & inspiring</p>

</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
<div class="container">
<div class="row d-md-flex align-items-center align-items-stretch">
<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
<div class="block-18 bg-light">
<div class="text">
<strong class="number" data-number="1100">0</strong>
<span>Copies Sold</span>
</div>
</div>
</div>
<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
<div class="block-18 bg-light">
<div class="text">
<strong class="number" data-number="1200">0</strong>
<span>Copies Released</span>
</div>
</div>
</div>
<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
<div class="block-18 bg-light">
<div class="text">
<strong class="number" data-number="340">0</strong>
<span>Cup Of Coffee</span>
</div>
</div>
</div>
<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
<div class="block-18 bg-light">
<div class="text">
<strong class="number" data-number="12000">0</strong>
<span>Happy Readers</span>
</div>
</div>
</div>
</div>
</div>
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
<p style=" color: #328fa8;font-family:Times New Roman;font-size: 18px;font-weight: bold;">CAMBRIDGE SUBJECTS</p>
<li><a href="#page-1">Mathematics</a></li>
<li><a href="#page-2">English Language</a></li>
<li><a href="#page-3">History</a></li>
<li><a href="#page-4">Religious Studies</a></li>
<li><a href="#page-5">Combined Science</a></li>
<li><a href="#page-6">Geography</a></li>
<li><a href="#page-7">Accounting</a></li>
<li><a href="#page-8">Economics</a></li>
<li><a href="#page-9">Business Studies</a></li>
<li><a href="#page-10">ICT</a></li>
<p style=" color: #328fa8;font-family:Times New Roman;font-size: 18px;font-weight: bold;">HEXCO SUBJECTS</p>
<li><a href="#page-11">Brick and Block laying</a></li>
<li><a href="#page-12">Building Technology and design</a></li>
<p style=" color: #328fa8;font-family:Times New Roman;font-size: 18px;font-weight: bold;">ZIMSEC SUBJECTS</p>
<li><a href="#page-13">Shona</a></li>


</ul>
</nav>
</div>
<div class="col-md-9">
<div id="page-1" class="page bg-light one">
<h2 class="heading">Mathematics</h2>
<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
</div>
<div id="page-2" class="page bg-light two">
<h2 class="heading">English Language</h2>
<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
</div>
<div id="page-3" class="page bg-light three">
<h2 class="heading">History</h2>
<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
</div>
<div id="page-4" class="page bg-light four">
<h2 class="heading">Religious Studies</h2>
<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
</div>
<div id="page-5" class="page bg-light five">
<h2 class="heading">Combined Science</h2>
<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
</div>
<div id="page-6" class="page bg-light six">
<h2 class="heading">Geography</h2>
<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
</div>
<div id="page-7" class="page bg-light seven">
<h2 class="heading">Accounting</h2>
<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
</div>
<div id="page-8" class="page bg-light eight">
<h2 class="heading">Economics</h2>
<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
</div>

<div id="page-9" class="page bg-light one">
<h2 class="heading">Business Studies</h2>
<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
</div>

<div id="page-10" class="page bg-light one">
<h2 class="heading">ICT</h2>
<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
</div>

<div id="page-11" class="page bg-light one">
<h2 class="heading">Brick and Block laying</h2>
<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
</div>

<div id="page-12" class="page bg-light one">
<h2 class="heading">Building Technology and design</h2>
<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
</div>

<div id="page-13" class="page bg-light one">
<h2 class="heading">Shona</h2>
<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
</div>


</div>
</div>
</div>
</section>
<section class="ftco-section ftco-no-pt">
<div class="container">
<div class="row justify-content-center py-5 mt-5">
<div class="col-md-5 heading-section text-center ftco-animate">
<span class="subheading">Services</span>
<h2 class="mb-4">Services</h2>
</div>
</div>
<div class="row">
<div class="col-md-4 text-center d-flex ftco-animate">
<div class="services-1 bg-light">
<span class="icon">
<i class="flaticon-user-experience"></i>
</span>
<div class="desc">
<h3 class="mb-5">Experience</h3>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
</div>
</div>
</div>
<div class="col-md-4 text-center d-flex ftco-animate">
<div class="services-1 bg-light">
<span class="icon">
<i class="flaticon-network"></i>
</span>
<div class="desc">
<h3 class="mb-5">Marketing Goals</h3>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
</div>
</div>
</div>
<div class="col-md-4 text-center d-flex ftco-animate">
<div class="services-1 bg-light">
<span class="icon">
<i class="flaticon-innovation"></i>
</span>
<div class="desc">
<h3 class="mb-5">Targetting Vission</h3>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="ftco-section testimony-section ftco-no-pb" id="testimonial-section">
<div class="img img-bg border" style="background-image: url(curriculum/images/bg_4.jpg);"></div>
<div class="overlay"></div>
<div class="container">
<div class="row justify-content-center mb-5">
<div class="col-md-12 text-center heading-section heading-section-white ftco-animate">
<span class="subheading">Our Staff</span>
<h2 class="mb-3">Our Staff</h2>
</div>
</div>
<div class="row ftco-animate">
<div class="col-md-12">
<div class="carousel-testimony owl-carousel ftco-owl">
<div class="item">
			       <div class="card">
				    <img src="{{asset('frontend/image/t1.jpg')}}" class="rounded" alt="...">
					<div class="testimony-wrap py-4">
<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
 <div class="text">
<p class="mb-4">Teacher.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(curriculum/images/person_2.jpg)"></div>
<div class="pl-3">
<p class="name">Mharadzirwa Kudakwashe Bryan</p>
<span class="position">Mathematics teacher</span>
</div>
</div>
</div>
					 
					   <button class="btn btn-danger form-control"> <a href="{{url('/team')}}" style="color:white;">VIEW PROFILE</a><button>
					 
				   </div>
			   </div>
			   </div>
<div class="item">
			       <div class="card">
				  <!-- <img src="{{asset('frontend/image/staff2.jpeg')}}" alt="product image">-->
				   <img src="{{asset('frontend/image/t3.jpg')}}" class="rounded" alt="...">
				   <div class="testimony-wrap py-4">
<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
				      <div class="card-body">
					    <h5>Karen Hwaira.</h5>
						<p>Science teacher  specialised in Chemistry. </p>
					  </div>
					   <div class="text">
<p class="mb-4">Teacher.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(curriculum/images/person_2.jpg)"></div>
<div class="pl-3">
<p class="name">Karen Hwaira.</p>
<span class="position">Science teacher</span>
</div>
</div>
</div>
					   <button class="btn btn-danger form-control"><a href="{{url('/team')}}" style="color:white;">VIEW PROFILE</a><button>
					 
				   </div>
			   </div>
			   </div>
			   <div class="item">
			       <div class="card">
				  <!-- <img src="{{asset('frontend/image/staff2.jpeg')}}" alt="product image">-->
				   <img src="{{asset('frontend/image/t4.jpg')}}" class="rounded" alt="...">
				     
					 <div class="testimony-wrap py-4">
<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
					  <div class="text">
<p class="mb-4">Teacher.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(curriculum/images/person_2.jpg)"></div>
<div class="pl-3">
<p class="name">Charity Mandimutsira</p>
<span class="position">Geography and ChiShona teacher</span>
</div>
</div>
</div>
					   <button class="btn btn-danger form-control"><a href="{{url('/team')}}" style="color:white;">VIEW PROFILE</a><button>
					  
				   </div>
			   </div>
			   </div>
			   <div class="item">
			       <div class="card">
				  <!-- <img src="{{asset('frontend/image/staff2.jpeg')}}" alt="product image">-->
				   <img src="{{asset('frontend/image/t5.jpg')}}" class="rounded" alt="...">
				     <div class="testimony-wrap py-4">
<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
					  <div class="text">
<p class="mb-4">Teacher.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(curriculum/images/person_2.jpg)"></div>
<div class="pl-3">
<p class="name">Winnet Chido Mbwanda</p>
<span class="position">Religious teacher</span>
</div>
</div>
</div>
					   <button class="btn btn-danger form-control"><a href="{{url('/team')}}" style="color:white;">VIEW PROFILE</a><button>
					 
				   </div>
			   </div>
			   </div>
			   <div class="item">
			       <div class="card">
				  <!-- <img src="{{asset('frontend/image/staff2.jpeg')}}" alt="product image">-->
				   <img src="{{asset('frontend/image/t6.jpg')}}" class="rounded" alt="...">
				   <div class="testimony-wrap py-4">
<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
				     
					  <div class="text">
<p class="mb-4">Teacher.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(curriculum/images/person_2.jpg)"></div>
<div class="pl-3">
<p class="name">Florence Chipangura</p>
<span class="position">Accounts teacher</span>
</div>
</div>
</div>
					  
					   <button class="btn btn-danger form-control"><a href="{{url('/team')}}" style="color:white;">VIEW PROFILE</a><button>
					  
				   </div>
			   </div>
			   </div>
			   <div class="item">
			       <div class="card">
				  <!-- <img src="{{asset('frontend/image/staff2.jpeg')}}" alt="product image">-->
				   <img src="{{asset('frontend/image/t7.jpg')}}" class="rounded" alt="...">
				   <div class="testimony-wrap py-4">
<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
				      <div class="text">
<p class="mb-4">Teacher.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(curriculum/images/person_2.jpg)"></div>
<div class="pl-3">
<p class="name">Mharadzirwa Kudakwashe Bryan</p>
<span class="position">Mathematics teacher</span>
</div>
</div>
</div>
					  
					   <button class="btn btn-danger form-control"><a href="{{url('/team')}}" style="color:white;">VIEW PROFILE</a><button>
					  
				   </div>
			   </div>
			   </div>
			   <div class="item">
			       <div class="card">
				  <!-- <img src="{{asset('frontend/image/staff2.jpeg')}}" alt="product image">-->
				   <img src="{{asset('frontend/image/t8.jpg')}}" class="rounded" alt="...">
				   <div class="testimony-wrap py-4">
<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
				      <div class="text">
<p class="mb-4">Teacher.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(curriculum/images/person_2.jpg)"></div>
<div class="pl-3">
<p class="name">Mharadzirwa Kudakwashe Bryan</p>
<span class="position">Mathematics teacher</span>
</div>
</div>
</div>
					 
					   <button class="btn btn-danger form-control"><a href="{{url('/team')}}" style="color:white;">VIEW PROFILE</a><button>
					  
				   </div>
			   </div>
			   </div>
			    <div class="item">
			       <div class="card">
				  <!-- <img src="{{asset('frontend/image/staff2.jpeg')}}" alt="product image">-->
				   <img src="{{asset('frontend/image/t9.jpg')}}" class="rounded" alt="...">
				    <div class="testimony-wrap py-4">
<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>  
					  <div class="text">
<p class="mb-4">Teacher.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(curriculum/images/person_2.jpg)"></div>
<div class="pl-3">
<p class="name">Mharadzirwa Kudakwashe Bryan</p>
<span class="position">Mathematics teacher</span>
</div>
</div>
</div>
					 
					   <button class="btn btn-danger form-control"><a href="{{url('/team')}}" style="color:white;">VIEW PROFILE</a><button>
					 
				   </div>
			   </div>
			   </div>



</div>
</div>
</div>
</div>
</section>
<section class="ftco-section ftco-project" id="projects-section">
<div class="container">
<div class="row no-gutters justify-content-center pb-5">
<div class="col-md-12 heading-section text-center ftco-animate">
<span class="subheading">Projects</span>
<h2 class="mb-4">My Other Books</h2>
</div>
</div>
<div class="row">
<div class="col-md-3">
<div class="project img ftco-animate d-flex justify-content-center align-items-end" style="background-image: url(curriculum/images/book-1.jpg);">
<div class="overlay"></div>
<div class="text p-4">
<h3><a href="#">You Are Your Ony Limit</a></h3>
<span>Romance</span>
</div>
</div>
</div>
<div class="col-md-3">
<div class="project img ftco-animate d-flex justify-content-center align-items-end" style="background-image: url(curriculum/images/book-2.jpg);">
<div class="overlay"></div>
<div class="text p-4">
<h3><a href="#">You Are Your Ony Limit</a></h3>
<span>Romance</span>
</div>
</div>
</div>
<div class="col-md-3">
<div class="project img ftco-animate d-flex justify-content-center align-items-end" style="background-image: url(curriculum/images/book-3.jpg);">
<div class="overlay"></div>
<div class="text p-4">
<h3><a href="#">You Are Your Ony Limit</a></h3>
<span>Romance</span>
</div>
</div>
</div>
<div class="col-md-3">
<div class="project img ftco-animate d-flex justify-content-center align-items-end" style="background-image: url(curriculum/images/book-4.jpg);">
<div class="overlay"></div>
<div class="text p-4">
<h3><a href="#">You Are Your Ony Limit</a></h3>
<span>Romance</span>
</div>
</div>
</div>
<div class="col-md-3">
<div class="project img ftco-animate d-flex justify-content-center align-items-end" style="background-image: url(curriculum/images/book-5.jpg);">
<div class="overlay"></div>
<div class="text p-4">
<h3><a href="#">You Are Your Ony Limit</a></h3>
<span>Romance</span>
</div>
</div>
</div>
<div class="col-md-3">
<div class="project img ftco-animate d-flex justify-content-center align-items-end" style="background-image: url(curriculum/images/book-7.jpg);">
<div class="overlay"></div>
<div class="text p-4">
<h3><a href="#">You Are Your Ony Limit</a></h3>
<span>Romance</span>
</div>
</div>
</div>
<div class="col-md-3">
<div class="project img ftco-animate d-flex justify-content-center align-items-end" style="background-image: url(curriculum/images/book-6.jpg);">
<div class="overlay"></div>
<div class="text p-4">
<h3><a href="#">You Are Your Ony Limit</a></h3>
<span>Romance</span>
</div>
</div>
</div>
<div class="col-md-3">
<div class="project img ftco-animate d-flex justify-content-center align-items-end" style="background-image: url(curriculum/images/book-8.jpg);">
<div class="overlay"></div>
<div class="text p-4">
<h3><a href="#">You Are Your Ony Limit</a></h3>
<span>Romance</span>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="author-section">
<div class="container">
<div class="row d-flex no-gutters">
<div class="col-md-6 col-lg-6 d-flex">
<div class="img-about img d-flex align-items-stretch">
<div class="overlay"></div>
<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(curriculum/images/about.jpg);">
</div>
</div>
</div>
<div class="col-md-6 col-lg-6 d-flex">
<div class="py-md-5 w-100 bg-light px-md-5">
<div class="py-md-5">
<div class="row justify-content-start pb-3">
<div class="col-md-12 heading-section ftco-animate">
<span class="subheading">Know More About The Author</span>
<h2 class="mb-4">Franklin Henderson</h2>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
<ul class="about-info mt-4 px-md-0 px-2">
<li class="d-flex"><span>Name:</span> <span>Franklin Henderson</span></li>
<li class="d-flex"><span>Date of birth:</span> <span>November 28, 1980</span></li>
<li class="d-flex"><span>Address:</span> <span>San Francisco CA 97987 USA</span></li>
<li class="d-flex"><span>Zip code:</span> <span>1000</span></li>
<li class="d-flex"><span>Email:</span> <span><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1f796d7e71747376716c7e726f737a5f78727e7673317c7072">[email&#160;protected]</a></span></li>
<li class="d-flex"><span>Phone: </span> <span>+1-2234-5678-9-0</span></li>
</ul>
</div>
</div>
<div class="counter-wrap ftco-animate d-flex mt-md-3">
<div class="text">
<p class="mb-4 btn-custom">
<span class="number" data-number="120">0</span>
<span>View All Books</span>
</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
<div class="container">
<div class="row justify-content-center mb-5 pb-3">
<div class="col-md-7 heading-section text-center ftco-animate">
<h2 class="mb-4">Contact Me</h2>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
</div>
</div>
<div class="row d-flex contact-info mb-5">
<div class="col-md-6 col-lg-3 d-flex ftco-animate">
<div class="align-self-stretch box text-center p-4 bg-light">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-map-marker"></span>
</div>
<div>
<h3 class="mb-4">Address</h3>
<p>198 West 21th Street, Suite 721 New York NY 10016</p>
</div>
</div>
</div>
<div class="col-md-6 col-lg-3 d-flex ftco-animate">
<div class="align-self-stretch box text-center p-4 bg-light">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-phone"></span>
</div>
<div>
<h3 class="mb-4">Contact Number</h3>
<p><a href="tel://1234567920">+ 1235 2355 98</a></p>
</div>
</div>
</div>
<div class="col-md-6 col-lg-3 d-flex ftco-animate">
<div class="align-self-stretch box text-center p-4 bg-light">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-paper-plane"></span>
</div>
<div>
<h3 class="mb-4">Email Address</h3>
<p><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection#8de4e3ebe2cdf4e2f8fffee4f9e8a3eee2e0"><span class="__cf_email__" data-cfemail="fa93949c95ba83958f8889938e9fd4999597">[email&#160;protected]</span></a></p>
</div>
</div>
</div>
<div class="col-md-6 col-lg-3 d-flex ftco-animate">
<div class="align-self-stretch box text-center p-4 bg-light">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-globe"></span>
</div>
<div>
<h3 class="mb-4">Website</h3>
<p><a href="#">yoursite.com</a></p>
</div>
</div>
</div>
</div>
<div class="row no-gutters block-9">
<div class="col-md-6 order-md-last d-flex">
<form action="#" class="bg-light p-4 p-md-5 contact-form">
<div class="form-group">
<input type="text" class="form-control" placeholder="Your Name">
</div>
<div class="form-group">
<input type="text" class="form-control" placeholder="Your Email">
</div>
<div class="form-group">
<input type="text" class="form-control" placeholder="Subject">
</div>
<div class="form-group">
<textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
</div>
<div class="form-group">
<input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
</div>
</form>
</div>
<div class="col-md-6 d-flex">
<div id="map" class="map"></div>

</div>
</div>
</div>
</section>
<footer class="ftco-footer ftco-section">
<div class="container">
<div class="row mb-5">
<div class="col-md">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">About</h2>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
<li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
<li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
<li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
</ul>
</div>
</div>
<div class="col-md">
<div class="ftco-footer-widget mb-4 ml-md-4">
<h2 class="ftco-heading-2">Links</h2>
<ul class="list-unstyled">
<li><a href="#"></span>Home</a></li>
<li><a href="#"></span>About</a></li>
<li><a href="#"></span>Chapter</a></li>
<li><a href="#"></span>Reviews</a></li>
<li><a href="#"></span>Contact</a></li>
</ul>
</div>
</div>
<div class="col-md">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">Services</h2>
<ul class="list-unstyled">
<li><a href="#"></span>Experience</a></li>
<li><a href="#"></span>Marketing Goals</a></li>
<li><a href="#"></span>Targetting Vission</a></li>
</ul>
</div>
</div>
<div class="col-md">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">Have a Questions?</h2>
<div class="block-23 mb-3">
<ul>
<li><span class="icon fa fa-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
<li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
<li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text"><span class="__cf_email__" data-cfemail="147d7a727b546d7b6166707b79757d7a3a777b79">[email&#160;protected]</span></span></a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12 text-center">
<p>
Copyright &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
</p>
</div>
</div>
</div>
</footer>

<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" /><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>
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
</body>

<!-- Mirrored from preview.colorlib.com/theme/author/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Sep 2022 16:54:12 GMT -->
</html>