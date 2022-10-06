@extends('layouts.front')

@section('title')
 Zuva Academy
@endsection

@include('layouts.inc.frontnavbar')
@section('content')
@include('layouts.inc.slider')
   <div class="py-5"> 
     
       <div class="container"> 
	   
	
	   <div class="card mb-3">
  <img src="{{asset('frontend/image/student40.png')}}" class="card-img-top" alt="...">
  <div class="card-body ">
    <h4 class="card-title text-center" style="font-family: Arial narrow;font-weight: bold;color: green;">WHY CHOOSE ZUVA ACADEMY ? </h4>
    <p class="card-text" style="font-size: 20px;font-family: Arial narrow;font-weight: bold;color: #FF8C00;">1. A full education</p>
	<p class="card-text" style="font-size: 18px;font-family: Arial narrow;font-weight: bold;color:black;">We believe that unlocking the potential in every pupil is only possible when you provide them with a full and rounded education. Of course, academia remains at the heart of that, but we never underestimate the importance of sports, music or the arts, and the incredible ... ... ...
</p>
    <p class="card-text" style="font-family: Arial narrow;"><small class="text-muted"><a href="{{ url('/about') }}">Read more</a></small></p>
  </div>
</div>

	   
	   
	   
	   
	   
	   
	<!--   <div class="card mb-3" style="max-width: 100%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('frontend/image/student.png')}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h4 class="card-title">Why choose zuva academy ? </h4>
        <p class="card-text">Experienced mathematics teacher with a career spanning a decade
Self-driven, highly intrinsically motivated,  hardworking, innovative, a child-centered educationist who is always willing to accept new ideas of teaching and learning.
A well-decorated handball coach with various Mash East province accolades from former schools, St John's Chikwaka and Murewa High.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div> -->
   </div>
   </div>


 <div class="py-1">
    <div class="container">
	 <div class="col-xl-12 col-lg-12 col-md-12 text-center py-4">
	<h2 style="font-weight: bold; color:#008000;">CURRICULUM</h2>
	</div>
	<div class="row">
	   <div class="col-md-4 mt-2">
	       <div class="card">
				  <!-- <img src="{{asset('frontend/image/staff2.jpeg')}}" alt="product image">-->
				   <img src="{{asset('frontend/image/sport30.png')}}" class="rounded" alt="...">
				   <div class="card-body">
					    
						
				 </div>
				 <div class="card-footer text-center bg-success">
					   <h5 style="color:white;">SCIENCE</h5>
				</div>
			 </div>
	       </div>
		   
		    <div class="col-md-4 mt-2">
	       <div class="card">
				  <!-- <img src="{{asset('frontend/image/staff2.jpeg')}}" alt="product image">-->
				   <img src="{{asset('frontend/image/sport20.png')}}" class="rounded" alt="...">
				   <div class="card-body">
					    
						
				 </div>
				 <div class="card-footer text-center bg-success">
					   <h5 style="color:white;">AGRICULTURE</h5>
				</div>		 
			 </div>
	       </div>
		   
		    <div class="col-md-4 mt-2">
	       <div class="card">
				  <!-- <img src="{{asset('frontend/image/staff2.jpeg')}}" alt="product image">-->
				   <img src="{{asset('frontend/image/sport1.png')}}" class="rounded" alt="...">
				   <div class="card-body">
					    
						
				 </div>
				  <div class="card-footer text-center bg-success">
					   <h5 style="color:white;">SPORT</h5>
				</div>
				 
			 </div>
	       </div>
	</div>
	</div>
 </div>
    <div class="py-3">
         <div class="container">
		 <div class="col-xl-12 col-lg-12 col-md-12 text-center py-4">
	<h2 style="font-weight: bold; color:#008000;">OUR STAFF</h2>
	</div>
		 
		    <div class="row">
			
			
			<div class="owl-carousel staff-carousel owl-theme">
			
			
    	  <!--  <section>
    		<div class="item">
    		    <div class="card profile-card-4">
                    <div class="card-img-block">
                        <div class="info-box">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                        <img class="img-fluid" src="https://images.pexels.com/photos/965157/pexels-photo-965157.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Card image cap">
                    </div>
                    <div class="card-body pt-5">
                        <img src="https://randomuser.me/api/portraits/women/14.jpg" alt="profile-image" class="profile"/>
                        <h5 class="card-title text-center">Gail Schmidt</h5>
                        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="icon-block text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
                    </div>
                </div>
                <p class="mt-3 w-100 float-left text-center"><strong>Info block with hover</strong></p>
                
    		</div>
    		
    		</section>-->
			
			
			
			
			
			
			 @if($employee->count())
                                @foreach ($employee as $staff)
          
			   <div class="item">
			       <div class="card">
				    <img src="{{$staff->images}}" class="rounded" alt="...">      
				      <div class="card-body">
					    <h5 style="font-family: Arial narrow;">{{$staff->first_name}} {{$staff->last_name}}</h5>
						<p style="font-family: Arial narrow;">{{$staff->position}}</p>
					  </div>
					 
					   <button class="btn btn-danger form-control"> <a href="{{ route('staff.profile', [$staff->id]) }}" style="color:white;">VIEW PROFILE</a><button>
					 
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
			   
			   {{-- <div class="item">
			       <div class="card">
				  <!-- <img src="{{asset('frontend/image/staff2.jpeg')}}" alt="product image">-->
				   <img src="{{asset('frontend/image/t2.jpg')}}" class="rounded" alt="...">
				      <div class="card-body">
					    <h5>Ms Makuyu,</h5>
						<p>A holder of a diploma in education.</p>
					  </div>
					  
					   <button class="btn btn-danger form-control"><a href="{{url('/team')}}" style="color:white;">VIEW PROFILE</a><button>
					 
				   </div>
			   </div>
			   
			   <div class="item">
			       <div class="card">
				  <!-- <img src="{{asset('frontend/image/staff2.jpeg')}}" alt="product image">-->
				   <img src="{{asset('frontend/image/t3.jpg')}}" class="rounded" alt="...">
				      <div class="card-body">
					    <h5>Karen Hwaira.</h5>
						<p>Science teacher  specialised in Chemistry. </p>
					  </div>
					  
					   <button class="btn btn-danger form-control"><a href="{{url('/team')}}" style="color:white;">VIEW PROFILE</a><button>
					 
				   </div>
			   </div>
			   
			   <div class="item">
			       <div class="card">
				  <!-- <img src="{{asset('frontend/image/staff2.jpeg')}}" alt="product image">-->
				   <img src="{{asset('frontend/image/t4.jpg')}}" class="rounded" alt="...">
				      <div class="card-body">
					    <h5>Charity Mandimutsira</h5>
						<p> Diploma holder in Geography and ChiShona.</p>
					  </div>
					 
					   <button class="btn btn-danger form-control"><a href="{{url('/team')}}" style="color:white;">VIEW PROFILE</a><button>
					  
				   </div>
			   </div>
			   
			   <div class="item">
			       <div class="card">
				  <!-- <img src="{{asset('frontend/image/staff2.jpeg')}}" alt="product image">-->
				   <img src="{{asset('frontend/image/t5.jpg')}}" class="rounded" alt="...">
				      <div class="card-body">
					    <h5>Winnet Chido Mbwanda</h5>
						<p>Degree in Religious.</p>
					  </div>
					  
					   <button class="btn btn-danger form-control"><a href="{{url('/team')}}" style="color:white;">VIEW PROFILE</a><button>
					 
				   </div>
			   </div>
			   
			   <div class="item">
			       <div class="card">
				  <!-- <img src="{{asset('frontend/image/staff2.jpeg')}}" alt="product image">-->
				   <img src="{{asset('frontend/image/t6.jpg')}}" class="rounded" alt="...">
				      <div class="card-body">
					    <h5>Florence Chipangura </h5>
						<p>Accounts teacher with experience </p>
					  </div>
					  
					   <button class="btn btn-danger form-control"><a href="{{url('/team')}}" style="color:white;">VIEW PROFILE</a><button>
					  
				   </div>
			   </div>
			   
			   <div class="item">
			       <div class="card">
				  <!-- <img src="{{asset('frontend/image/staff2.jpeg')}}" alt="product image">-->
				   <img src="{{asset('frontend/image/t7.jpg')}}" class="rounded" alt="...">
				      <div class="card-body">
					    <h5>Mharadzirwa Kudakwashe Bryan</h5>
						<p>Mathematics teacher </p>
					  </div>
					  
					   <button class="btn btn-danger form-control"><a href="{{url('/team')}}" style="color:white;">VIEW PROFILE</a><button>
					  
				   </div>
			   </div>
			   
			   <div class="item">
			       <div class="card">
				  <!-- <img src="{{asset('frontend/image/staff2.jpeg')}}" alt="product image">-->
				   <img src="{{asset('frontend/image/t8.jpg')}}" class="rounded" alt="...">
				      <div class="card-body">
					    <h5>Mharadzirwa Kudakwashe Bryan</h5>
						<p>Mathematics teacher </p>
					  </div>
					 
					   <button class="btn btn-danger form-control"><a href="{{url('/team')}}" style="color:white;">VIEW PROFILE</a><button>
					  
				   </div>
			   </div>
			   
			    <div class="item">
			       <div class="card">
				  <!-- <img src="{{asset('frontend/image/staff2.jpeg')}}" alt="product image">-->
				   <img src="{{asset('frontend/image/t9.jpg')}}" class="rounded" alt="...">
				      <div class="card-body">
					    <h5>Mharadzirwa Kudakwashe Bryan</h5>
						<p>Mathematics teacher </p>
					  </div>
					 
					   <button class="btn btn-danger form-control"><a href="{{url('/team')}}" style="color:white;">VIEW PROFILE</a><button>
					 
				   </div>
			   </div>--}}
			   
			   </div>
			</div>
			 <div class="col-xl-12 col-lg-12 col-md-12 text-center py-4">
	 <a class="btn btn-success " href="{{url('/team')}}" style="color:white;">OUR STAFF PROFILE</a>
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
