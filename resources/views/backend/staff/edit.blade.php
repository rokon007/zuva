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
              <div class="breadcrumb-title pe-3">Edit Staff</div>
              <div class="ps-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Staff</li>
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
                 <div class="col-lg-12 mx-auto">
                  <div class="card">
                    <div class="card-header py-3 bg-transparent"> 
                      <div class="d-sm-flex align-items-center">
                        <h5 class="mb-2 mb-sm-0">Edit Staff</h5>
                        <div class="ms-auto">
						 <form action="{{ route('employee.update', [$employee->id]) }}" method="POST" enctype="multipart/form-data">
                                   @csrf 
                               @method('PUT')
                        
                          <button type="button" class="btn btn-primary">Publish Now</button>
                        </div>
						 @if ($errors->any())
                                <div class="alert alert-danger mt-3 mb-3">
                                    <ul class="mb-0">
                                      @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                      @endforeach
                                    </ul>
                                </div>
                               @endif
                      </div>
                     </div>
                    <div class="card-body">
                       <div class="row g-3">
					   
                         <div class="col-12 col-lg-8">
                            <div class="card shadow-none bg-light border">
                              <div class="card-body">
                                <div class="row g-3">
                                  <div class="col-12 col-6">
                                    <label class="form-label">First name *</label>
                                    <input type="text" value="{{ $employee->first_name }}" name="first_name" class="form-control" placeholder="Product title">
                                  </div>
								  <div class="col-12 col-6">
                                    <label class="form-label">Last name *</label>
                                    <input type="text" value="{{ $employee->last_name }}" name="last_name" class="form-control" placeholder="Product title">
                                  </div>
                                  <div class="col-12 col-lg-4">
                                    <label class="form-label">Email *</label>
                                    <input type="email" value="{{ $employee->email }}" name="email" class="form-control" placeholder="SKU">
                                  </div>
                                  <div class="col-12 col-lg-4">
                                    <label class="form-label">Phone *</label>
                                    <input type="number" value="{{ $employee->phone }}" name="phone" class="form-control" placeholder="Color">
                                  </div>
                                  <div class="col-12 col-lg-4">
                                    <label class="form-label">Position *</label>
                                    <input type="text" value="{{ $employee->position }}" name="position" class="form-control" placeholder="Size">
                                  </div>
                                  <div class="col-12">
                                    <label class="form-label">Salary</label>
                                    <input type="text" value="{{ $employee->salary }}" name="salary" class="form-control" placeholder="Brand">
                                  </div>
                                 
                                  <div class="col-12">
                                    <label class="form-label">Full description</label>
                                    <textarea class="form-control"  name="description" placeholder="Full description" rows="4" cols="4">{{ $employee->description }}</textarea>
                                  </div>
                                </div>
                              </div>
                            </div>
                         </div>

                         <div class="col-12 col-lg-4">
                            <div class="card shadow-none bg-light border">
                              <div class="card-body">
                                  <div class="row g-3">
								  <center>
								   <div class="col-12">
                                    <img id="Image3" style="height:200px;width: 200px;" src="{{ $employee->images }}" >
                                  </div>
								  </center>
								   <div class="col-12">
                                    <label class="form-label">Images</label>
                                    <input class="form-control" onchange="ImagePreview1(this);" name="images" id="images" type="file">
                                  </div>
                                   
                                  
                                    
                                   
                                    

                                  </div><!--end row-->
                              </div>
                            </div>  
                        </div>
                      
                       </div><!--end row-->
                     </div>
                    </div>
                 </div>
				   <button type="submit" class="btn btn-secondary">Update </button>
				    </form>
              </div><!--end row-->			                
          </main>
       <!--end page main-->
  @endsection
  
  
  @section('JS')
  @include('backend.layouts.inc.js') 
  @endsection