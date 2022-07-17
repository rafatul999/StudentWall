        <div class="hero hero-single route bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
          <div class="overlay-mf"></div>
          <div class="hero-content display-table">
            <div class="table-cell">
              <div class="container">
                <h2 class="hero-title mb-4">Library Details</h2>
                <ol class="breadcrumb d-flex justify-content-center">
                  <li class="breadcrumb-item">
                    <a href="library">Home</a>
                  </li>
                  <li class="breadcrumb-item">
                    <a href="view">Single item</a>
                  </li>
                  
                </ol>
              </div>
            </div>
          </div>
        </div>
        <section id="library" class="portfolio-mf sect-pt4 route">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="title-box text-center">
                  <h3 class="title-a">
                  Cloud Library
                  </h3>
                  <p class="subtitle-a">
                    You can read available book from our cloud library platform
                  </p>
                  <div class="line-mf"></div>
                </div>
              </div>
            </div>
            <div class="row">
              @foreach($library as $key=>$library)
              <div class="col-md-4">
                <div class="work-box">
                  <a href="{{ asset('uploads/library/'.$library->image)  }}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                    <div class="work-img">
                      <img src="{{ asset('uploads/library/'.$library->image)  }}" alt="" class="img-fluid">
                    </div>
                  </a>
                  <div class="work-content">
                    <div class="row">
                      <div class="col-sm-8">
                        <h2 class="w-title">{{ $library->name }}</h2>
                        <div class="w-more">
                          <span class="w-ctegory">{{ $library->category->name }}</span> / <span class="w-date">{{ $library->created_at }}</span>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="w-like">
                          <a href="library/{{ $library->id }}"> <span class="bi bi-plus-circle"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              <div class="col-md-4">
                <div class="work-box">
                  <a href="{{asset('frontend/img/cse3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                    <div class="work-img">
                      <img src="{{asset('frontend/img/cse3.jpg')}}" alt="" class="img-fluid">
                    </div>
                  </a>
                  <div class="work-content">
                    <div class="row">
                      <div class="col-sm-8">
                        <h2 class="w-title">Computer science and IT</h2>
                        <div class="w-more">
                          <span class="w-ctegory">CSE</span> / <span class="w-date">2022-04-27 04:35:31</span>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="w-like">
                          <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="work-box">
                  <a href="{{asset('frontend/img/cse4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                    <div class="work-img">
                      <img src="{{asset('frontend/img/cse4.jpg')}}" alt="" class="img-fluid">
                    </div>
                  </a>
                  <div class="work-content">
                    <div class="row">
                      <div class="col-sm-8">
                        <h2 class="w-title">Learn Python</h2>
                        <div class="w-more">
                          <span class="w-ctegory">CSE</span> / <span class="w-date">2022-04-27 04:35:31</span>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="w-like">
                          <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="work-box">
                  <a href="{{asset('frontend/img/cse5.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                    <div class="work-img">
                      <img src="{{asset('frontend/img/cse5.jpg')}}" alt="" class="img-fluid">
                    </div>
                  </a>
                  <div class="work-content">
                    <div class="row">
                      <div class="col-sm-8">
                        <h2 class="w-title">Mathmetics in CSE</h2>
                        <div class="w-more">
                          <span class="w-ctegory">CSE</span> / <span class="w-date">2022-04-27 04:35:31</span>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="w-like">
                          <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>