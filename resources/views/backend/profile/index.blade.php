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
            <div class="page-breadcrumb d-none d-sm-flex align-items-center">
              <div class="breadcrumb-title pe-3 text-white">Pages</div>
              <div class="ps-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt text-white"></i></a>
                    </li>
                    <li class="breadcrumb-item active text-white" aria-current="page">User Profile</li>
                  </ol>
                </nav>
              </div>
              <div class="ms-auto">
                <div class="btn-group">
                  <button type="button" class="btn btn-light">Settings</button>
                  <button type="button" class="btn btn-light split-bg-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
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
           
            <div class="profile-cover bg-dark"></div>
            <div class="row">
              <div class="col-12 col-lg-8">
                <div class="card shadow-sm border-0">
                  <div class="card-body">
				  <form action="{{route('user.update')}}" method="post" enctype="multipart/form-data">
         @csrf
                      <h5 class="mb-0">My Account</h5>
                      <hr>					 
                      <div class="card shadow-none border">
                        <div class="card-header">
                          <h6 class="mb-0">USER INFORMATION</h6>
                        </div>
						
                        <div class="card-body">
                          <div class="row g-3">
						        <input type="hidden" name="id"  value="{{auth()->user()->id}}">
                             <div class="col-6">
                                <label class="form-label">Username</label>
                                <input type="text" name="name" class="form-control" value="{{auth()->user()->name}}">
                             </div>
                             <div class="col-6">
                              <label class="form-label">Email address</label>
                              <input type="text" name="email" class="form-control" value="{{auth()->user()->email}}">
                            </div>
                              <div class="col-6">
                                <label class="form-label">First Name</label>
                                <input type="text" name="firstname" class="form-control" value="{{auth()->user()->firstname}}">
                            </div>
                            <div class="col-6">
                                <label class="form-label">Last Name</label>
                                <input type="text" name="lastname" class="form-control" value="{{auth()->user()->lastname}}">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card shadow-none border">
                        <div class="card-header">
                          <h6 class="mb-0">CONTACT INFORMATION</h6>
                        </div>
                        <div class="card-body">
                          <div class="row g-3">
                            <div class="col-12">
                              <label class="form-label">Address</label>
                              <input type="text" name="address" class="form-control" value="{{auth()->user()->address}}">
                             </div>
                             <div class="col-6">
                                <label class="form-label">City</label>
                                <input type="text" name="city" class="form-control" value="{{auth()->user()->city}}">
                             </div>
                             <div class="col-6">
                              <label class="form-label">Country</label>
                              <input type="text" name="country" class="form-control" value="{{auth()->user()->country}}">
                            </div>
                              <div class="col-6">
                                <label class="form-label">Zip Code</label>
                                <input type="text" name="zipcode" class="form-control" value="{{auth()->user()->zipcode}}">
                            </div>
							<div class="col-6">
                                <label class="form-label">Phone</label>
                                <input type="text" name="mobile" class="form-control" value="{{auth()->user()->mobile}}">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Image</label>
                                <input class="form-control" name="image" type="file" id="formFile">
                            </div>
                            <div class="col-12">
                              <label class="form-label">About Me</label>
                              <textarea class="form-control" name="about" rows="4" cols="4" placeholder="Describe yourself..."> {{auth()->user()->about}}</textarea>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="text-start">
                        <button type="submit" class="btn btn-primary px-4">Update</button>
                      </div>
					  </form>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-4">
                <div class="card shadow-sm border-0 overflow-hidden">
                  <div class="card-body">
                      <div class="profile-avatar text-center">
                        <img src="{{auth()->user()->image}}" class="rounded-circle shadow" width="120" height="120" alt="">
                      </div>
                      <div class="d-flex align-items-center justify-content-around mt-5 gap-3">
                          <div class="text-center">
                            <h4 class="mb-0">45</h4>
                            <p class="mb-0 text-secondary">Friends</p>
                          </div>
                          <div class="text-center">
                            <h4 class="mb-0">15</h4>
                            <p class="mb-0 text-secondary">Photos</p>
                          </div>
                          <div class="text-center">
                            <h4 class="mb-0">86</h4>
                            <p class="mb-0 text-secondary">Comments</p>
                          </div>
                      </div>
                      <div class="text-center mt-4">
                        <h4 class="mb-1">{{auth()->user()->firstname}} {{auth()->user()->lastname}}</h4>
                        <p class="mb-0 text-secondary">{{auth()->user()->city}}, {{auth()->user()->country}}</p>
                        <div class="mt-4"></div>
                        <h6 class="mb-1">Admin</h6>
                        <p class="mb-0 text-secondary">Zuva Academy</p>
                      </div>
                      <hr>
                      <div class="text-start">
                        <h5 class="">About</h5>
                        <p class="mb-0">{{auth()->user()->about}}
                      </div>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                      Followers
                      <span class="badge bg-primary rounded-pill">95</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                      Following
                      <span class="badge bg-primary rounded-pill">75</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                      Templates
                      <span class="badge bg-primary rounded-pill">14</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div><!--end row-->

          </main>
       <!--end page main-->
  @endsection
  
  
  @section('JS')
  @include('backend.layouts.inc.js') 
  @endsection