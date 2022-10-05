@extends('layouts.front')

@section('title')
 Zuva Academy | Contact Us
@endsection
@section('css')
      <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
	  <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
	  

@endsection

@include('layouts.inc.frontnavbar')
@section('content')

  <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-4">{{ $notice1->title }}</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">Posted on {{ $notice1->created_at->format('M d, Y') }} by {{ $notice1->creat_by }}</div>
                            <!-- Post categories-->
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Notice</a>
                           
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" style="height:100%;width:100%;" src="{{ $notice1->image }}" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p> {!! $notice1->description !!}.</p>
                           
                          
                            
                        </section>
                    </article>
					<iframe src="{{ $notice1->pdf }}" style="height:100%;width:100%;" > {{ $notice1->pdf }}</iframe>
					<section class="mb-5">
                        <div class="card bg-light">
                            <div class="card-body">
							
							</div>
                        </div>
						<object data=”/pdf/sample-3pp.pdf#page=2" type=”application/pdf” width=”100%” height=”100%”>

Example fallback content: This browser does not support PDFs. Please download the PDF to view it: Download PDF.

</object>
					</section>
                    <!-- Comments section-->
					{{-- <section class="mb-5">
                        <div class="card bg-light">
                            <div class="card-body">
                                <!-- Comment form-->
                                <form class="mb-4"><textarea class="form-control" rows="3" placeholder="Join the discussion and leave a comment!"></textarea></form>
                                <!-- Comment with nested comments-->
                                <div class="d-flex mb-4">
                                    <!-- Parent comment-->
                                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">Commenter Name</div>
                                        If you're going to lead a space frontier, it has to be government; it'll never be private enterprise. Because the space frontier is dangerous, and it's expensive, and it has unquantified risks.
                                        <!-- Child comment 1-->
                                        <div class="d-flex mt-4">
                                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                            <div class="ms-3">
                                                <div class="fw-bold">Commenter Name</div>
                                                And under those conditions, you cannot establish a capital-market evaluation of that enterprise. You can't get investors.
                                            </div>
                                        </div>
                                        <!-- Child comment 2-->
                                        <div class="d-flex mt-4">
                                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                            <div class="ms-3">
                                                <div class="fw-bold">Commenter Name</div>
                                                When you put money directly to a problem, it makes a good headline.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single comment-->
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">Commenter Name</div>
                                        When I look at the universe and all the ways the universe wants to kill us, I find it hard to reconcile that with statements of beneficence.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>--}}
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header text-center">Popular Notice</div>
                        <div class="card-body">
                             <div class="post-entry-sidebar">
                        <ul>
                            @foreach($notices as $notic)
                            <li>
                                <a href="{{ route('view.notice', [$notic->id]) }}">
								
                                    <img src="{{ $notic->image }}" alt="Image placeholder"
                                         class="img-fluid mb-5 rounded"  onerror="this.onerror=null;this.src='uploads/image/non.jpg';"/>
                                    <div class="text">
                                        <h4> {{ $notic->title }} </h4>
                                        <div class="post-meta">
                                            <span class="mr-2"> {{ $notic->created_at->format('M d, Y')}} </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header text-center">More Related Notice</div>
                        <div class="card-body">
						
						</div>
						
						 <div class="card-body order-md-2">
                @foreach($lastRelatedNotice as $post)
                <a href="{{ route('view.notice', ['id' => $post->id]) }}">
			<div class="hentry img-1 h-100 gradient"
                    style="background-image: url('{{ $post->image }}');">
				 <img src="{{ $post->image }}" alt="Image placeholder"
                                         class="img-fluid mb-5 rounded"  onerror="this.onerror=null;this.src='uploads/image/non.jpg';"/>	 
                    <span class="post-category text-white bg-danger"></span>
                    <div class="text">
                        <h4>{{ $post->title }}</h4>
                        <span>{{ $post->created_at->format('M d, Y')}}</span>
                    </div>
					</div>
                </a>
                @endforeach
                  </div>
				  
				  <div class="card-body order-md-2">
                @foreach($firstRelatedNotice as $post)
                <a href="{{ route('view.notice', ['id' => $post->id]) }}" class="hentry img-1 h-100 gradient"
                    style="background-image: url('{{ $post->image }}');">
					 <img src="{{ $post->image }}" alt="Image placeholder"
                                         class="img-fluid mb-5 rounded"  onerror="this.onerror=null;this.src='uploads/image/non.jpg';"/>	 
                    <span class="post-category text-white bg-danger"></span>
                    <div class="text">
                        <h4>{{ $post->title }}</h4>
                        <span>{{ $post->created_at->format('M d, Y')}}</span>
                    </div>
                </a>
                @endforeach
                  </div>
				  
				  <div class="card-body order-md-2">
                @foreach($firstRelatedNotice2 as $post)
                <a href="{{ route('view.notice', ['id' => $post->id]) }}" class="hentry img-1 h-100 gradient"
                    style="background-image: url('{{ $post->image }}');">
					 <img src="{{ $post->image }}" alt="Image placeholder"
                                         class="img-fluid mb-5 rounded"  onerror="this.onerror=null;this.src='uploads/image/non.jpg';"/>	 
                    <span class="post-category text-white bg-danger"></span>
                    <div class="text">
                        <h4>{{ $post->title }}</h4>
                        <span>{{ $post->created_at->format('M d, Y')}}</span>
                    </div>
                </a>
                @endforeach
                  </div>
						
						
						
                    </div>
                </div>
            </div>
        </div>
	 @include('layouts.inc.footer1')
@endsection
@section('script')
     <script src="{{ asset('frontend/js/jquery-3.6.1.js') }}"></script>
     <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" defer></script>    
@endsection
