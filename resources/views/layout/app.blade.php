<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('icon/croomicon.png') }}" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    
    <title> @yield('title') </title>
    @stack('css')
  </head>
  <body>
    <section class="navigation ">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #7A00B7;">
          <div class="container-fluid">
            <a class="navbar-brand" style="color: white;" href="/">Classroom</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" style="color: white;" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" style="color: white;" href="">Teacher Panel</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" style="color: white;" href="">Student Panel</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" style="color: white;" href="/todos">Todo</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" style="color: white;"  href="">Classroom</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" style="color: white;"  href="#">Todo</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" style="color: white;"  href="#">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" style="color: white;"  href="">Library</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" style="color: white;"  href="#">Find Job</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" style="color: white;"  href="#">Find Hostel</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" style="color: white;"  href="#">Find Blood</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" style="color: white;"  href="#">Download Mobile Apps</a>
                </li>
                 <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" style="color: white;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Login as
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Student Panel</a></li>
                    <li><a class="dropdown-item" href="#">Teacher Panel</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Guest</a></li>
                  </ul>
                </li>
              </ul>
              <div>
              </div>
            </div>
          </nav>
        </div>
      </section>
      <div class="container">
        {{-- Flash Message --}}
        @if(session()->has('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}
        </div>
        @endif
        @yield('content')
        
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script type="text/javascript" src="{{ asset('js/jquery-3.6.0.js') }}"></script>
      @stack('js')
    </body>
  </html>