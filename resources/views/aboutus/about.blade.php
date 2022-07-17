  <div class="title-box text-center">
              <h3 class="title-a">About us</h3>
            </div>
  <div id="about" class="testimonials paralax-mf bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">
               
               @foreach($about as $key=>$about)
                <div class="swiper-slide">
                  
                  <div class="testimonial-box">
                    
                    <div class="author-test">
                      <img style="height: 150px;width: 150px;" src="{{ asset('uploads/about/'.$about->image)  }}" alt="" class="rounded-circle b-shadow-a">
                      <span class="author">{{ $about->name }}</span>
                    </div>
                    <div class="content-test">
                      <p class="description lead">
                        {{ $about->details }}
                      </p>
                    </div>
                    
                  </div>

                </div><!-- End testimonial item -->
                @endforeach

                
              </div>
              <div class="swiper-pagination"></div>
            </div>

            <!-- <div id="testimonial-mf" class="owl-carousel owl-theme">
          
        </div> -->
          </div>
        </div>
      </div>
    </div><!-- End Testimonials Section -->