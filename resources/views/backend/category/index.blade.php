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
                    <li class="breadcrumb-item active" aria-current="page">Categories</li>
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
<!--Alart-->
            @if(session()->has('message'))
                 <div class="alert border-0 bg-success alert-dismissible fade show py-2">
                    <div class="d-flex align-items-center">
                      <div class="fs-3 text-white"><i class="bi bi-check-circle-fill"></i>
                      </div>
                      <div class="ms-3">
                        <div class="text-white">{{ session()->get('message') }}</div>
                      </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
            @endif    
<!--end Alart-->
              <div class="card">
                <div class="card-header py-3">
                  <h6 class="mb-0">Add Product Category</h6>
                </div>
                <div class="card-body">
                   <div class="row">
                     <div class="col-12 col-lg-4 d-flex">
                       <div class="card border shadow-none w-100">
                         <div class="card-body">
                           <form class="row g-3" action="{{url('insert-category')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                             <div class="col-12">
                               <label class="form-label">Name</label>
                               <input type="text" name="name" class="form-control" placeholder="Category name" required>
                             </div>
                             <div class="col-12">
                              <label class="form-label">Slug</label>
                              <input type="text" name="slug" class="form-control" placeholder="Slug name" required>
                            </div>
                            <!-- <div class="col-12">
                              <label class="form-label">Parent</label>
                              <select class="form-select">
                                <option>Fashion</option>
                                <option>Electronics</option>
                                <option>Furniture</option>
                                <option>Sports</option>
                              </select> 
                            </div> -->
                            <div class="col-12">
                              <label class="form-label">Description</label>
                              <textarea class="form-control" name="description" rows="3" cols="3" placeholder="Product Description" required></textarea>
                            </div>
                            <div class="col-6">
                            <div class="form-check">
									<input class="form-check-input" name="status" type="checkbox" value="" id="flexCheckDefault1">
									<label class="form-check-label"  for="flexCheckDefault">Status</label>
								</div>
                            </div>
                  <div class="col-6">
                    <div class="form-check">
									   <input class="form-check-input" name="popular" type="checkbox" value="" id="flexCheckDefault2">
									  <label class="form-check-label" for="flexCheckDefault">Popular</label>
								   </div>
                </div>

                            <div class="col-12">
                               <label class="form-label">Meta Titel</label>
                               <input type="text" name="meta_titel" class="form-control" placeholder="Meta Titel" required>
                             </div>

                             <div class="col-12">
                               <label class="form-label">Meta Description</label>
                               <input type="text" name="meta_description" class="form-control" placeholder="Meta Description" required>
                             </div>

                             <div class="col-12">
                               <label class="form-label">Meta Keywords</label>
                               <input type="text" name="meta_keywords" class="form-control" placeholder="Meta Keywords" required>
                             </div>

                             <div class="col-12">
                             <label class="form-label">Image:</label>
										        <input type="file" name="image" class="form-control">
                             </div>

                            
                            <div class="col-12">
                              <div class="d-grid">
                                <button class="btn btn-primary" type="submit">Add Category</button>
                              </div>
                            </div>
                           </form>
                         </div>
                       </div>
                     </div>
                     <div class="col-12 col-lg-8 d-flex">
                      <div class="card border shadow-none w-100">
                        <div class="card-body">
                          <div class="table-responsive">
                           
                             <table class="table align-middle">
                               <thead class="table-light">
                                 <tr>
                                   <th><input class="form-check-input" type="checkbox"></th>
                                   <th>ID</th>
                                   <th>Name</th>
                                   <th>Description</th>
                                   <th>Slug</th>
                                   <th>Order</th>
                                   <th>Action</th>
                                 </tr>
                               </thead>
                               <tbody>
                               @foreach($category_data as $data)
                                 <tr>
                                   <td><input class="form-check-input" type="checkbox"></td>
                                   <td>#{{$data->id}}</td>
                                   
                             <td>
                              <div class="d-flex align-items-center gap-3 cursor-pointer">
                                 <img src="assets/uploads/category/{{$data->image}}"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/images/No_image.jpg') }}';"
                                  class="rounded-circle" alt="" width="44" height="44">
                                 <div class="">
                                   <p class="mb-0">{{$data->name}}</p>
                                 </div>
                              </div>
                            </td>
                            <td>{{$data->description}}</td>
                                   <td>{{$data->slug}}</td>
                                   <td>54</td>
                                   <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                      <a href="/category-view/{{$data->id}}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                      <a href="/category-edit/{{$data->id}}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                      <!-- <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a> -->
                                      <button class="btn text-danger bi bi-trash-fill deletCategoryBtn" value="{{$data->id}}" aria-label="Delete"></button>
                                    </div>
                                   </td>
                                 </tr>
                                @endforeach    
                               </tbody>
                             </table>
                          </div>
                          <nav class="float-end mt-0" aria-label="Page navigation">
                          {{ $category_data->onEachSide(5)->links() }}
                            <!-- <ul class="pagination">
                              <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                              <li class="page-item active"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul> -->
                          </nav>
                        </div>
                      </div>
                    </div>
                   </div><!--end row-->
                </div>
              </div>

          </main>
       <!--end page main-->

     
    

        <!-- Modal -->
        <div class="modal fade" id="modal_view" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
														<button type="button" class="btn btn-primary">Save changes</button>
													</div>
												</div>
											</div>
										</div>
                <!--Delete Modal -->
										<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
                            <input type="text" name="category_delete_id" id="category_id">
                            <h5>Are You Sure Delete Category? </h5>
                          </div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
														<button type="button" class="btn btn-primary">Yes Delete</button>
													</div>
												</div>
											</div>
										</div>
               <!--Delete Modal -->
              

            <!-- Modal -->
										<div class="modal fade" id="modal_edit" tabindex="-1" aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title">Edit</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
                          @if(session()->has('modal_edit'))
                            
        
			
                         
                            <div class="row">
                              <div class="col-6">
                              <div class="col-12">
                               <label class="form-label">Name</label>
                               <input type="text" name="name" value="{{ session()->get('category_edit')}}" class="form-control" placeholder="Category name" required>
                             </div>
                             <div class="col-12">
                              <label class="form-label">Slug</label>
                              <input type="text" name="slug" class="form-control" placeholder="Slug name" required>
                            </div>
                            <!-- <div class="col-12">
                              <label class="form-label">Parent</label>
                              <select class="form-select">
                                <option>Fashion</option>
                                <option>Electronics</option>
                                <option>Furniture</option>
                                <option>Sports</option>
                              </select> 
                            </div> -->
                            <div class="col-12">
                              <label class="form-label">Description</label>
                              <textarea class="form-control" name="description" rows="3" cols="3" placeholder="Product Description" required></textarea>
                            </div>
                            
                            <div class="col-6">
                            <div class="form-check">
									<input class="form-check-input" name="status" type="checkbox" value="" id="flexCheckDefault1">
									<label class="form-check-label"  for="flexCheckDefault">Status</label>
								</div>
                            </div>
                  
                              </div>

                              <div class="col-6">
                              <div class="col-12">
                               <label class="form-label">Meta Titel</label>
                               <input type="text" name="meta_titel" class="form-control" placeholder="Meta Titel" required>
                             </div>

                             <div class="col-12">
                               <label class="form-label">Meta Description</label>
                               <input type="text" name="meta_description" class="form-control" placeholder="Meta Description" required>
                             </div>

                             <div class="col-12">
                               <label class="form-label">Meta Keywords</label>
                               <input type="text" name="meta_keywords" class="form-control" placeholder="Meta Keywords" required>
                             </div>

                             <div class="col-12">
                             <label class="form-label">Image:</label>
										        <input type="file" name="image" class="form-control">
                             </div>
                             
                             <div class="col-6">
                    <div class="form-check">
									   <input class="form-check-input" name="popular" type="checkbox" value="" id="flexCheckDefault2">
									  <label class="form-check-label" for="flexCheckDefault">Popular</label>
								   </div>
                </div>
              </div>
              @endif
            </div>

                            
                          

                            

                          </div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
														<button type="button" class="btn btn-primary">Save changes</button>
													</div>
												</div>
											</div>
										</div>        
  
  @endsection

  @section('JS')
  @include('backend.layouts.inc.JS') 

             <script>
                $(document).ready(function(){
                   $('.deleteCategoryBtn').click(function(e){
                    e.preventDefault();

                    var category_id=$(this).val();
                    $('#category_id').val('category_id');
                    $('#deleteModal').modal('show');
                   });
                });
            </script>



  @if(session()->has('modal_edit'))
     <script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
         <script>
  $(function() {
      $('#modal_edit').modal('show');
  });
  </script>
      
        @endif
         @if($message = Session::get('modal_view'))
       
         <script>
  $(function() {
      $('#modal_view').modal('show');
  });
  </script>
       
        @endif
  @endsection