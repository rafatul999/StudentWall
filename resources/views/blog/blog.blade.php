@extends('layout.app')

@section('title', 'Home | Blog')
@push('css')

@endpush


@section('content')
<br>
<div class="row ">
	<div class="col-lg-6 ">
		<div class="text-center m-lg-5">
			<h1 class="" style=" font-size: 75px; color: #7A00B7; " >Welcome to the Student Blog</h1>
			<h5>Read articles written by students from around the world, sharing their study experiences with fellow students.</h5>
		</div>
	</div>
		<div class="col-lg-6 ">
			<div class="text-center">
			<img src="{{asset('image/student-blog.png')}}" class="img-fluid w-50 " >
			</div>
		</div>
</div> <!-- end section 1-->
<hr style="color:#7A00B7">
<div class="row">
	<div class="col-lg-4">
	  <div class="list-group">
		  <button type="button" class="list-group-item list-group-item-action active" style="background-color:#7A00B7;">
		    Todos
		  </button>
		  <button type="button" class="list-group-item list-group-item-action"><a href="" class="nav-link" style="color:#7A00B7;">Home</a></button>
		  <button type="button" class="list-group-item list-group-item-action"><a href="create" class="nav-link" style="color:#7A00B7;">Make Your Blog</a></button>
		  <button type="button" class="list-group-item list-group-item-action"><a href="" class="nav-link" style="color:#7A00B7;">Your Blog</a></button>
		  <button type="button" class="list-group-item list-group-item-action" disabled>Delete Blog</button>
	  </div>
  	</div>
	<div class="col-lg-8">
		<div class="card" style="background-color:#7A00B7;" >
  			<div class="card-header">
  				<h3 class="card-title"></h3>
  			</div>
            <div class="card-body">
              <ul class="list-group">
            	<li class="list-group-item">
               <img src="{{ asset('image/news-800x500-2.jpg') }}" class="img-fluid">
               <div class="bg-danger text-center" style="width:100px;">
               <a class="badge badge-primary text-uppercase  p-2 mr-2 text-decoration-none"   href="">Academic</a>
               </div>
            	</li>
              </ul>
            </div>
  		</div>
	</div>
</div>

<div class="col-lg-6">
    <div class="position-relative mb-3">
        <img class="img-fluid w-100" src="{{ asset('image/news-800x500-2.jpg') }}" style="object-fit: cover;">
        <div class="bg-white border border-top-0 p-4">
            <div class="mb-2">
                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                    href="">Business</a>
                <a class="text-body" href=""><small>Jan 01, 2045</small></a>
            </div>
            <a class="h4 d-block mb-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
        </div>
        <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
            <div class="d-flex align-items-center">
                <img class="rounded-circle mr-2" src="{{ asset('image/news-800x500-2.jpg') }}" width="25" height="25" alt="">
                <small>John Doe</small>
            </div>
            <div class="d-flex align-items-center">
                <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                <small class="ml-3 "><i class="far fa-comment mr-2"></i>123</small>
            </div>
        </div>
    </div>
</div>

@endsection