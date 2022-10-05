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
              <div class="breadcrumb-title pe-3">Staff</div>
              <div class="ps-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Staff List</li>
                  </ol>
                </nav>
              </div>
              <div class="ms-auto">
                <div class="btn-group">
                  <a href="{{ route('employee.create')}}"  type="button" class="btn btn-primary">Add Staff</a>
                  
                 
                </div>
              </div>
            </div>
            <!--end breadcrumb-->

              <div class="card">
                <div class="card-header py-3">
                  <div class="row align-items-center m-0">
                    <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                        <select class="form-select">
                            <option>All category</option>
                            <option>Fashion</option>
                            <option>Electronics</option>
                            <option>Furniture</option>
                            <option>Sports</option>
                        </select>
                    </div>
                    <div class="col-md-2 col-6">
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-md-2 col-6">
                        <select class="form-select">
                            <option>Status</option>
                            <option>Active</option>
                            <option>Disabled</option>
                            <option>Show all</option>
                        </select>
                    </div>
                 </div>
                </div>
                <div class="card-body">

                  <div class="table-responsive">
                    <table class="table align-middle table-striped">
                      <tbody>
					  
					   @if($employee->count())
                                @foreach ($employee as $notic)
                        <tr>
                          <td>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox">
                            </div>
                          </td>
                          <td class="productlist">
                            <a class="d-flex align-items-center gap-2" href="#">
                              <div class="product-box">
                                  <img src="{{$notic->images}}" alt="">
                              </div>
                              <div>
                                  <h6 class="mb-0 product-title">{{ $notic->first_name }} {{ $notic->last_name }}</h6>
                              </div>
                             </a>
                          </td>
                          <td><span>0</span></td>
                          <td>
						    @if($notic->status==1)
						  <span class="badge rounded-pill alert-success">Active</span>
					        @else
						 <span class="badge rounded-pill alert-danger">Deactive</span>	
                             @endif					 
						  </td>
                          <td><span>{{ $notic->created_at}}</span></td>
                          <td>
                            <div class="d-flex align-items-center gap-3 fs-6">
                              <a href="{{ route('employee.show', [$notic->id]) }}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                              <a href="{{ route('employee.edit', [$notic->id]) }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                              <!--<a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>-->
							  <form action="{{ route('employee.destroy', [$notic->id]) }}" class="mr-1" method="POST">
                                                @method('DELETE')
                                                @csrf 
                                <button type="submit" class="btn text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"> <i class="bi bi-trash-fill"></i> </button>
                             </form>
                            </div>
                          </td>
                        </tr>
                         @endforeach
                                @else   
                                    <tr>
                                        <td colspan="6">
                                            <h5 class="text-center">No posts found.</h5>
                                        </td>
                                    </tr>
                                @endif                        
                      </tbody>
                    </table>
                  </div>

            <nav class="float-end mt-4" aria-label="Page navigation">
              <ul class="pagination">
                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
            </nav>

  </div>
</div>

 </main>
       <!--end page main-->
  @endsection
  
  
  @section('JS')
  @include('backend.layouts.inc.js') 
  @endsection