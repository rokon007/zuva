<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
     <!-- Fonts -->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
   
	  <link href="frontend/css/bootstrap.min.css" rel="stylesheet">
	  <link href="frontend/css/custom.css" rel="stylesheet">
	  
	  <link href="frontend/css/owl.carousel.min.css" rel="stylesheet">
	  <link href="frontend/css/owl.theme.default.min.css" rel="stylesheet">
	  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
	   <link rel="shortcut icon" type="image/png" href="/frontend/image/favicon.jpg"/>
      @yield('css')
</head>
<body>
    
        <div class="content">
            @yield('content')
        </div>
    <!-- Scripts -->
	<script src="frontend/js/jquery-3.6.1.js"></script>
	
    <script src="frontend/js/bootstrap.bundle.min.js" defer></script>
	
	
	<script src="frontend/js/owl.carousel.min.js"></script>
    @yield('script')
</body>
</html>