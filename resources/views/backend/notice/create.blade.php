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
              <div class="breadcrumb-title pe-3">Add Notice</div>
              <div class="ps-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add New Notice</li>
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
                 <div class="col-lg-8 mx-auto">
                  <div class="card">
                    <div class="card-header py-3 bg-transparent"> 
                       <h5 class="mb-0">Add New Notice</h5>
                      </div>
                    <div class="card-body">
                      <div class="border p-3 rounded">
                      <div class="row g-3">
					  <form action="{{ route('notice.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                        <div class="col-12">
                          <label class="form-label">Notice title</label>
                          <input type="text" name="title" class="form-control" placeholder="Notice title">
                        </div>
                        <div class="col-12 py-2">
                          <label class="form-label">Full description</label>
                          <textarea class="form-control" name="description" placeholder="Full description" rows="4" cols="4"></textarea>
                        </div>
					    <div class="col-12 py-2">
                          <label class="form-label">PDF File</label>
                          <input class="form-control" name="pdf" type="file">
                        </div>
                        <div class="col-12 py-2">
                          <label class="form-label">Images</label>
                          <input class="form-control" name="image" type="file">
                        </div>
                        
                       
                       
                        
                        <div class="col-12 py-2">
                          <div class="form-check">
                            <input class="form-check-input" name="status[]" type="checkbox" value="1" id="flexCheckDefault" checked>
                            <label class="form-check-label" for="flexCheckDefault">
                              Active
                            </label>
                          </div>
                        </div>
                        <div class="col-12">
                          <button type="submit" class="btn btn-primary px-4">Submit</button>
                        </div>
                      </form>
                      </div>
					  </div>
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