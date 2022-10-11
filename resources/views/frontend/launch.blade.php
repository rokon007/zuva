<!DOCTYPE html>
<html>
	<head>
		<title>We are coming soon</title>
<!--
Coming2Live series free coming soon templates!
HTML version by Awe7 (http://awe7.com/)
You can find WordPress version here:
https://wordpress.org/plugins/coming2live/
-->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<!-- Fonts-->
		<link rel="stylesheet" type="text/css" href="frontend/assets/fonts/fontawesome/font-awesome.min.css">
		<!-- Vendors-->
		<link rel="stylesheet" type="text/css" href="frontend/assets/vendors/bootstrap/grid.css">
		<link rel="stylesheet" type="text/css" href="frontend/assets/vendors/YTPlayer/css/jquery.mb.YTPlayer.min.css">
		<link rel="stylesheet" type="text/css" href="frontend/assets/vendors/vegas/vegas.min.css">
		<!-- App & fonts-->
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Work+Sans:300,400,500,700">
		<link rel="stylesheet" type="text/css" id="app-stylesheet" href="frontend/assets/css/main.css"><!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<![endif]-->
	</head>
	
	<body>
		<div class="page-wrap" id="root">
			<!-- Content-->
			<div class="md-content">
				
				<!-- hero -->
				<div class="hero md-skin-dark" style="background-image:url('Images/image400.jpeg');">
					
					<!-- header -->
					<div class="header">
						<div class="header__left"><span>Lot 1 of Risboro Farm,Chegutu</span><span>0719586160</span><span>info@zuvaacademy.com</span>
						</div>
						<div class="header__social">
							
							<!-- social-icon -->
							<a class="social-icon social-icon__rounded" href="#"><i class="fa fa-facebook"></i>
							</a><!-- End / social-icon -->
							
							
							<!-- social-icon -->
							<a class="social-icon social-icon__rounded" href="#"><i class="fa fa-twitter"></i>
							</a><!-- End / social-icon -->
							
							
							<!-- social-icon -->
							<a class="social-icon social-icon__rounded" href="#"><i class="fa fa-behance"></i>
							</a><!-- End / social-icon -->
							
							
							<!-- social-icon -->
							<a class="social-icon social-icon__rounded" href="#"><i class="fa fa-google-plus"></i>
							</a><!-- End / social-icon -->
							
						</div>
					</div><!-- End / header -->
					
					<div class="container">
						<div class="hero__wrapper">
							<div class="row">
								<div class="col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-1 ">
									<div class="hero__title_inner"><!--<span class="hero__icon">b</span>-->
									<span> <img src="{{asset('Images/logo200.png')}}" width="100px" alt="..."></span>
									@if(isset($launch))
								    @if(date('Y-m-d H:i:s')< $launch->launch_date)
										<h1 class="hero__title">We Are Almost Ready for Launch</h1>
									@else
							           <h1 class="hero__title">Ready for Launch</h1>
								    @endif
							        @endif
                            
							
										<h6 class="hero__title">Zuva Academy.</h6>
										<p class="hero__text">A FULL EDUCATION.
										<br>MAKING EACH INDIVIDUAL THE BEST VERSION OF THEMSELVES THEY CAN BE.
										<br>CONFIDENCE FOR LIFE BEYOND EDUCATION.</p>
									</div>
								</div>
							</div>
							
							<!-- countdown__module hide undefined -->
							
							@if(isset($launch))
								@if(date('Y-m-d H:i:s')< $launch->launch_date)
                            <div class="countdown__module hide" data-date="{{$launch->launch_date}}">
								<p><span>%D</span> Days</p>
								<p><span>%H</span> Hours</p>
								<p><span>%M</span> Minutes</p>
								<p><span>%S</span> Seconds</p>
							</div><!-- End / countdown__module hide undefined -->
							@else
							<div class="hero__title_inner">
						       <br><br>
								<h1 class="hero__title">Ready for Launch</h1>
								<br><br>
							</div>
                            @endif
							 @endif
							
							
							<div class="service-wrapper">
								
								<!-- service -->
								<div class="service">
									<h2 class="service__title">CAMBRIDGE SUBJECTS</h2>
									<p class="service__text">MATHEMATICS,ENGLISH LANGUAGE,HISTORY,RELIGIOUS STUDIES,COMBINED SCIENCE,GEOGRAPHY,ACCOUNTING,
									BUSSINESS STUDIES,ICT,AGRICULTURE</p>
								</div><!-- End / service -->
								
								
								<!-- service -->
								<div class="service">
									<h2 class="service__title">HEXCO SUBJECTS</h2>
									<p class="service__text">BRICK AND BLOCK LAYING,BUILDING TECHNOLOGY AND DESING</p>
								</div><!-- End / service -->
								
								
								<!-- service -->
								<div class="service">
									<h2 class="service__title">ZIMSEC SUBJECTS</h2>
									<p class="service__text">SHONA</p>
								</div><!-- End / service -->
								
							</div>
						</div>
					</div>
				</div><!-- End / hero -->
				
			</div>
			<!-- End / Content-->
		</div>
		<!-- Vendors-->
		<script type="text/javascript" src="frontend/assets/vendors/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="frontend/assets/vendors/jquery.countdown/jquery.countdown.min.js"></script>
		<script type="text/javascript" src="frontend/assets/vendors/flat-surface-shader/fss.min.js"></script>
		<script type="text/javascript" src="frontend/assets/vendors/particles.js/particles.js"></script>
		<script type="text/javascript" src="frontend/assets/vendors/waterpipe/waterpipe.js"></script>
		<script type="text/javascript" src="frontend/assets/vendors/quietflow/quietflow.min.js"></script>
		<script type="text/javascript" src="frontend/assets/vendors/YTPlayer/jquery.mb.YTPlayer.min.js"></script>
		<script type="text/javascript" src="frontend/assets/vendors/vegas/vegas.min.js"></script>
		<!-- App-->
		<script type="text/javascript" src="frontend/assets/js/main.js"></script>
	</body>
</html>