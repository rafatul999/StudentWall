@extends('layout.app')

@section('title', 'Smart | Classroom')

	<section class="topbar">	
	 <div class="container">
   <div class="row">
   	<div class="col-lg-6">
   		<div class="contact-icon ">
			<a href="tel:01811635119"><i class="fa fa-phone"></i>Call Now</a>
			<a href="mailto:rafatulislam999@gmail.com"> <i class="fa fa-envelope"></i>Mail Now</a>
			<a href="skype:rafatulislam71"> <i class="fa fa-skype"></i>Call Over Skype</a>
		</div>
   		
   	</div>
   	<div class="col-lg-6 ">
        <div class="social-icon float-end">
			<a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
			<a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
			<a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
			<a href="https://www.youtube.com"><i  class="fa fa-youtube"></i></a>
		</div>
   </div>
   </div>
   </div><!--end topbar -->
 </section>
<div class="container">
	<img src="{{ asset('image/banner.png') }}" class="img-fluid img-thumbnail" alt="...">
</div>
@section('content')

<div align="center"> 
    <div class="row justify-content-center p-5 ">
        <div class="col-lg-3 ">
            <div class="card" style="width: 15rem;">
              <img src="{{ asset('icon/studentpanel.png') }}" class="card-img-top" alt="...">
                 <div class="card-body">
                   <h5 class="card-title">Student Panel</h5>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of  the card's content.</p>
                   <a href="#" class="btn btn-primary content-center">View Student Panel</a>
                 </div>
            </div>
         </div>

	<div class="col-lg-3">
        <div class="card" style="width: 15rem;">
             <img src="{{ asset('icon/teacherpanel.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Teacher Panel</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary content-center">View Teacher Panel</a>
                </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="card" style="width: 15rem;">
             <img src="{{ asset('icon/classroom.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">ClassRoom</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary content-center">View Classroom</a>
                </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card" style="width: 15rem;">
             <img src="{{ asset('icon/todo.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">ClassRoom</h5>
                    <div style="height:100px;width:auto;overflow:auto;">
                    <p class="">Todo is a cloud-based task management application.It allows users to manage their tasks from a smartphone, tablet and computer.It allows users to manage their tasks from a smartphone, tablet and computer</p>
                </div>
                    <a href="/todos" class="btn btn-primary content-center">View Todos</a>
                </div>
        </div>
    </div>
   </div>
</div> 
<!-- Section 2 -->
<div align="center"> 
    <div class="row justify-content-center p-5 ">
        <div class="col-lg-3 ">
            <div class="card" style="width: 15rem;">
              <img src="{{ asset('icon/freelibrary.png') }}" class="card-img-top" alt="...">
                 <div class="card-body">
                   <h5 class="card-title">Free Library</h5>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of  the card's content.</p>
                   <a href="#" class="btn btn-primary content-center">View library</a>
                 </div>
            </div>
         </div>

    <div class="col-lg-3">
        <div class="card" style="width: 15rem;">
             <img src="{{ asset('icon/blog.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Student Blog</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{ route('blog.blog') }}" class="btn btn-primary content-center">View Student Blog</a>
                </div>

        </div>
    </div>

    <div class="col-lg-3">
        <div class="card" style="width: 15rem;">
             <img src="{{ asset('icon/groupchat.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Group Chat</h5>
                    <div style="height:100px;width:auto;overflow:auto;">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                   </div>
                    <a href="#" class="btn btn-primary content-center">View Group Chat</a>
                </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card" style="width: 15rem;">
             <img src="{{ asset('icon/findjob.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">ClassRoom</h5>
                    <p class="card-text text-justify">Todo is a cloud-based task management application.<span class="collapse" id="collapseExample1">It allows users to manage their tasks from a smartphone, tablet and computer</span> <a style="color: $purple; text-decoration: none;" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">see more</a></p>
                    <a href="/todos" class="btn btn-primary content-center">View Todos</a>
                </div>
        </div>
    </div>
   </div>
</div> 


@endsection

@push('js')



@endpush
