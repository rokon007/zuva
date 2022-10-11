@extends('backend.layouts.master')
  @section('css')
   @include('backend.layouts.inc.css') 
  @endsection
  
  @section('title')
   @include('backend.layouts.inc.title')
  @endsection
  @section('content')

       <!--start content-->
          <main class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
              <div class="breadcrumb-title pe-3">Website</div>
              <div class="ps-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Set Publish Status</li>
                  </ol>
                </nav>
              </div>
              <div class="ms-auto">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Settings</button>
                  <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                    <a class="dropdown-item" href="javascript:;">Another action</a>
                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                    <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                  </div>
                </div>
              </div>
            </div>
            <!--end breadcrumb-->

              <div class="row">
                 <div class="col-12 col-lg-9 d-flex">
                   <div class="card w-100">
                   
                     <div class="card-body">
					  @if($launch->status==0)
							   <img  src="{{asset('Images/active.png')}}" class="card-img-top" alt="...">
						  @else
							    <img  src="{{asset('Images/waiting.png')}}" class="card-img-top" alt="...">
						 @endif
                      
					   
					   
                      
                     </div>
                   </div>
                 </div>
				 
				 
				 
                 <div class="col-12 col-lg-3 d-flex">
                  <div class="card w-100">
                    <div class="card-header py-3">
                      <h5 class="mb-0">Set Publish Status</h5>
                    </div>
                    <div class="card-body">
					<form action="{{route('publishUpdate')}}" method="post" enctype="multipart/form-data">
         @csrf
                      <div class="row g-3">
                        <div class="col-12">
                          <label class="form-label">Status</label>
                         <select name="status" class="form-select">
						
						 @if($launch->status==0)
							  <option value="{{$launch->status}}" selected>Publish Website</option>
						  @else
							   <option value="{{$launch->status}}" selected>Waiting For Launch</option>
						 @endif
						 <option value="0">Publish Website</option>
						 <option value="1">Waiting For Launch</option>
						 </select>
                        </div>
                       
                       
                      
                       <div class="col-12">
                        <label class="form-label">Launching Date </label>
                        <input name="launch_date"  value="{{$launch->launch_date}}" type="date" class="form-control">
                       </div>
                      
                       <div class="col-12">
                         <div class="d-grid">
                           <button type="submit" class="btn btn-primary">Set Publish Status</button>
                         </div>
                       </div>
                      </div>
					   </form>
                    </div>
                  </div>
                </div>
              </div><!--end row-->

          </main>
       <!--end page main-->
  @endsection
  
  
  @section('JS')
  @include('backend.layouts.inc.js') 
  @endsection