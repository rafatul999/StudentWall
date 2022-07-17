@extends('layout.apps')

@section('title', 'Smart | Classroom')

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url({{asset('image/banner1.png')}})">
        <div class="overlay-itro"></div>
        <div class="hero-content display-table">
          <div class="table-cell">
            <div class="container">
              <!--<p class="display-6 color-d">Hello, world!</p>-->
              <h1 class="hero-title mb-4">Students Community and Classroom Management Platform</h1>
              <p class="hero-subtitle"><span class="typed" data-typed-items="Student Panel, Teacher Panel, Classroom, Free Library, Student Blog, Find"></span></p>
              <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
            </div>
          </div>
        </div>
  </div><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Student Section ======= -->
    @include('student.student')

    <!-- ======= Teacher Section ======= -->
    @include('teacher.teacher')
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    @include('services.service')


    <!-- ======= Library Section ======= -->
    @include('library.library')
    <!-- End Library Section -->
     <!-- ======= About Us Section ======= -->
    @include('aboutus.about')

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Welcome to the Student Blog
              </h3>
              <p class="subtitle-a">
               Read articles written by students from around the world, sharing their study experiences with fellow students.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="blog-single.html"><img src="{{asset('frontend/img/post-1.jpg')}}" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Travel</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
                <p class="card-description">
                  Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                  a pellentesque nec,
                  egestas non nisi.
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="{{asset('frontend/img/testimonial-2.jpg')}}" alt="" class="avatar rounded-circle">
                    <span class="author">Rafatul Islam</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="bi bi-clock"></span> 10 min
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="blog-single.html"><img src="{{asset('frontend/img/work-3.jpg')}}" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Web Design</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="blog-single.html">See more ideas Web Design</a></h3>
                <p class="card-description">
                  Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                  a pellentesque nec,
                  egestas non nisi.
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="{{asset('frontend/img/testimonial-2.jpg')}}" alt="" class="avatar rounded-circle">
                    <span class="author">Arman Khan</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="bi bi-clock"></span> 10 min
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="blog-single.html"><img src="{{asset('frontend/img/post-3.jpg')}}" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Web Development</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="blog-single.html">See more ideas about Web Development</a></h3>
                <p class="card-description">
                  Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                  a pellentesque nec,
                  egestas non nisi.
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="{{asset('frontend/img/testimonial-2.jpg')}}" alt="" class="avatar rounded-circle">
                    <span class="author">Morgan Freeman</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="bi bi-clock"></span> 10 min
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Blog Section -->

    <!-- ======= Contact Section ======= -->
    @include('contact.contact')
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>Studentwall</strong>. All Rights Reserved</p>
            <div class="credits">

              Design and Developed By <a href="" target="_blank">StudentWall Team</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

