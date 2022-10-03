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
              <div class="breadcrumb-title pe-3">eCommerce</div>
              <div class="ps-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add New Product</li>
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
                        <h5 class="mb-2 mb-sm-0">Add New Product</h5>
                        <div class="ms-auto">
                          <button type="button" class="btn btn-secondary">Save to Draft</button>
                          <button type="button" class="btn btn-primary">Publish Now</button>
                        </div>
                      </div>
                     </div>
                    <div class="card-body">
                       <div class="row g-3">
                         <div class="col-12 col-lg-8">
                            <div class="card shadow-none bg-light border">
                              <div class="card-body">
                                <div class="row g-3">
                                  <div class="col-12">
                                    <label class="form-label">Product title</label>
                                    <input type="text"
                                    name="name" class="form-control" placeholder="Product title">
                                  </div>
                                  <div class="col-12">
                                    <label class="form-label">Small Decription</label>
                                    <input type="text"
                                    name="small_decription" class="form-control" placeholder="Small Decription">
                                  </div>
                                  <div class="col-12 col-lg-4">
                                    <label class="form-label">Tax</label>
                                    <input type="text" name="tax" class="form-control" placeholder="Tax">
                                  </div>
                                  <div class="col-12 col-lg-4">
                                    <label class="form-label">Qty</label>
                                    <input type="number" name="qty" class="form-control" placeholder="Qty">
                                  </div>
                                  <div class="col-12 col-lg-4">
                                    <label class="form-label">Trending</label>
                                    <input type="text" name="trending" class="form-control" placeholder="Trending">
                                  </div>
                                  <div class="col-12">
                                    <label class="form-label">Meta Title</label>
                                    <input type="text" name="meta_title" class="form-control" placeholder="Meta Title">
                                  </div>
                                  <div class="col-12">
                                    <label class="form-label">Meta Keyword</label>
                                    <input type="text" name="meta_keyword" class="form-control" placeholder="Meta Keyword">
                                  </div>
                                  <div class="col-12">
                                    <label class="form-label">Meta Decription</label>
                                    <input type="text" name="meta_decription" class="form-control" placeholder="Meta Decription">
                                  </div>
                                  <div class="col-12">
                                    <label class="form-label">Images</label>
                                    <input class="form-control" type="file" name="image">
                                  </div>
                                  <div class="col-12">
                                    <label class="form-label">Full description</label>
                                    <textarea class="form-control" name="decription" placeholder="Full description" rows="4" cols="4"></textarea>
                                  </div>
                                </div>
                              </div>
                            </div>
                         </div>

                         <div class="col-12 col-lg-4">
                            <div class="card shadow-none bg-light border">
                              <div class="card-body">
                                  <div class="row g-3">
                                    <div class="col-12">
                                      <label class="form-label">Original Price</label>
                                      <input type="number" name="original_price" class="form-control" placeholder="Original Price">
                                    </div>
                                    <div class="col-12">
                                      <label class="form-label">Selling Price</label>
                                      <input type="number" name="selling_price" class="form-control" placeholder="Selling Price">
                                    </div>
                                    <div class="col-12">
                                      <label class="form-label">Status</label>
                                      <select class="form-select">
                                        <option value="1">Published</option>
                                        <option value="0">Draft</option>
                                      </select>
                                    </div>
                                    <!-- <div class="col-12">
                                      <label class="form-label">Tags</label>
                                      <input type="text" class="form-control" placeholder="Tags">
                                    </div>
                                    <div class="col-12">
                                      <div class="d-flex align-items-center gap-2">
                                        <a href="javascript:;" class="btn btn-sm btn-light border shadow-sm bg-white">Woman <i class="bi bi-x"></i></a>
                                        <a href="javascript:;" class="btn btn-sm btn-light border shadow-sm bg-white">Fashion <i class="bi bi-x"></i></a>
                                        <a href="javascript:;" class="btn btn-sm btn-light border shadow-sm bg-white">Furniture <i class="bi bi-x"></i></a>
                                      </div>
                                    </div> -->
                                    <div class="col-12 col-md-12">
                          <label class="form-label">Category</label>
                          <select class="form-select" name="cate_id">
                            <option>Fashion</option>
                            <option>Electronics</option>
                            <option>Furniture</option>
                            <option>Sports</option>
                          </select>
                        </div>

                                  </div><!--end row-->
                              </div>
                            </div>  
                        </div>

                       </div><!--end row-->
                     </div>
                    </div>
                 </div>
              </div><!--end row-->

          </main>
       <!--end page main-->
  
  @endsection

  @section('JS')
  @include('backend.layouts.inc.JS') 
  @endsection