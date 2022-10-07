@extends('layouts.front')

@section('title')
 <title>Zuva Academy|{{$employee->first_name}} {{$employee->last_name}}</title>
        <meta charset="utf-8">
    <meta name="description" content="{{!!$employee->description!!}}">
    <meta name="keywords" content="Zuva Academy,{{$employee->first_name}} {{$employee->last_name}}">
    <meta name="author" content="Tanaka Karumazondo.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@endsection
@section('css')
      <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
	  <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
	  

@endsection
@include('layouts.inc.frontnavbar')
@section('content')
    <style>
	
.profile-header {
    transform: translateY(5rem);
}


	
	</style>
   


<div class="row py-5 px-4">
    <div class="col-xl-12 col-md-12 col-sm-10 mx-auto">

        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 bg-dark">
                <div class="media align-items-end profile-header">
                    <div class="profile mr-3">
					<img src="{{$employee->images}}" alt="..." width="130" class="rounded mb-2 img-thumbnail">
					</div>
                    <div class="media-body mb-5 text-white">
                        <h4 class="mt-0 mb-0">{{$employee->first_name}} {{$employee->last_name}}</h4>
                        <p class="small mb-4"> {{$employee->position}}</p>
                    </div>
                </div>
				<br>
            </div>

      <!--      <div class="bg-light p-4 d-flex justify-content-end text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">241</h5><small class="text-muted"> <i class="fa fa-picture-o mr-1"></i>Photos</small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">84K</h5><small class="text-muted"> <i class="fa fa-user-circle-o mr-1"></i>Followers</small>
                    </li>
                </ul>
            </div>-->

            <div class="py-4 px-4">
             <!--   <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="mb-0">Recent photos</h5><a href="#" class="btn btn-link text-muted">Show all</a>
                </div> -->
				
				<div class="py-4">
                    <h5 class="mb-3">About {{$employee->first_name}} {{$employee->last_name}}</h5>
                    <div class="p-4 bg-light rounded shadow-sm">
                <div class="row">
                    <div class="col-md-12">
					 <p class="font-italic mb-0">{{!!$employee->description!!}}.</p>
					</div>
					
                </div>
				</div>
				</div>
				
				
                
            </div>
        </div><!-- End profile widget -->

    </div>
</div>


 
    
	 @include('layouts.inc.footer1')
@endsection
@section('script')
     <script src="{{ asset('frontend/js/jquery-3.6.1.js') }}"></script>
     <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" defer></script>    
@endsection