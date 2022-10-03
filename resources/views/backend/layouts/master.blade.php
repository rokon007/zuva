<!doctype html>
<html lang="en" class="light-theme">

<head>
  
  @yield('css')
  @yield('title')
 
</head>
<body>
  <!--start wrapper-->
  <div class="wrapper">
    <!--start top header-->
   @include('backend.layouts.inc.header')
    <!--end top header-->
    <!--start sidebar -->
   @include('backend.layouts.inc.sidebar')
    <!--end sidebar -->
    <!--start content-->
	    @yield('content')  
    <!--end page main-->
     <!--start switcher-->
	@include('backend.layouts.inc.switcher')   
     <!--end switcher-->    
  </div>  
 <!--end wrapper-->
   @yield('JS')
       
    </body>    
    </html> 


  
      
       

  
 

 
 
  



