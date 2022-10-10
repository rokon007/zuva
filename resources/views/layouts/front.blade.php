<!DOCTYPE html>
<html lang="en">
<head>
    
   @yield('title')
   <meta name="google-site-verification" content="8TqHhdpu48-N-Sb0XL5vuGqdRB9lpMmcmY_XTREKmoE" />
     <!-- Fonts -->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
   
	  <link href="frontend/css/bootstrap.min.css" rel="stylesheet">
	  <link href="frontend/css/custom.css" rel="stylesheet">
	  
	  <link href="frontend/css/owl.carousel.min.css" rel="stylesheet">
	  <link href="frontend/css/owl.theme.default.min.css" rel="stylesheet">
	  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="frontend/image/favicon1.ico"/>
      @yield('css')
	  
	   @include('layouts.inc.frontnavbar')
</head>
<body>
    
       
            @yield('content')
       
    <!-- Scripts -->
	<script src="frontend/js/jquery-3.6.1.js"></script>
	
    <script src="frontend/js/bootstrap.bundle.min.js" defer></script>
	
	
	<script src="frontend/js/owl.carousel.min.js"></script>
    @yield('script')
</body>
</html>