<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <!-- Title  -->
  <title>Studio | CaKhia</title>

  <!-- Favicon  -->
  <link rel="icon" href="img/core-img/favicon.ico">

  <!-- Core Style CSS -->
  <link rel="stylesheet" href="css-studio/core-style.css">
  <link rel="stylesheet" href="css-studio/style.css">

  <!-- Responsive CSS -->
  <link href="css-studio/responsive.css" rel="stylesheet">

</head>

<body>
  <!-- Preloader -->
  <div id="preloader">
    <div class="showbox">
      <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
          <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
        </svg>
      </div>
    </div>
    <div class="questions-area text-center">
      <p>Did you know?</p>
      <ul>
        <li>The largest photography competition is 353,768 entries.</li>
        <li>Photography is the toughest profession in the world.</li>
        <li>The world’s largest photo album by dimensions was 13 ft 11.5 in x 17 ft.</li>
        <li>The world’s largest photo mosaic featured 176,175 pictures.</li>
        <li>The world’s largest camera lens was a 5200mm lens attached to a canon.</li>
      </ul>
    </div>
  </div>

  <!-- Gradient Background Overlay -->
  <div class="gradient-background-overlay"></div>

  <!-- Header Area Start -->
  <header class="header-area">
    <div class="container-fluid h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 h-100">
          <div class="main-menu h-100">
            <nav class="navbar h-100 navbar-expand-lg">
              <!-- Logo Area  -->
              <a class="navbar-brand" href="index.html"><img src="img/core-img/logo.png" alt="Logo"></a>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#studioMenu" aria-controls="studioMenu" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i> Menu</button>

              <div class="collapse navbar-collapse" id="studioMenu">
                <!-- Menu Area Start  -->
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gallery</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="index.html">People</a>
                      <a class="dropdown-item" href="about-me.html">CaKhia</a>
                      <a class="dropdown-item" href="portfolio.html">DaLat</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about-me.html">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="portfolio.html">Contact</a>
                  </li>
                </ul>
                <!-- Search Form -->
                <div class="header-search-form ml-auto">
                  <form action="#">
                    <input type="search" class="form-control" placeholder="Input your keyword then press enter..." id="search" name="search">
                    <input class="d-none" type="submit" value="submit">
                  </form>
                </div>
                <!-- Search btn -->
                <div id="searchbtn">
                  <img src="img/core-img/search.png" alt="">
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Header Area End -->

  <!-- Social Sidebar Area Start -->
  
  <!-- Social Sidebar Area End -->
  
  <!-- ***** Welcome Area Start ***** -->
  <section class="welcome-area">
    <div class="carousel h-100 slide" data-ride="carousel" id="welcomeSlider">
      <!-- Carousel Inner -->
      <div class="carousel-inner h-100">
        @foreach ($people as $p)
        <div class="carousel-item h-100 bg-img {{ $loop->first ? 'active' : '' }}" style="background-image: url({{$p->thumbnail}});">
          <div class="carousel-content h-100">
            <div class="slide-text">
              <span>{{$p->id}}.</span>
              <h2> Believe you can fly</h2>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <!-- Carousel Indicators -->
      <ol class="carousel-indicators">
        @foreach ($people as $p)
        <li data-target="#welcomeSlider" data-slide-to="{{$p->id - 1}}" class="{{ $loop->first ? 'active' : '' }} bg-img" style="background-image: url({{$p->thumbnail}});"></li>
        @endforeach
      </ol>
    </div>
  </section>
  <!-- ***** Welcome Area End ***** -->

  <!-- jQuery (Necessary for All JavaScript Plugins) -->
  <script src="js-studio/jquery/jquery-2.2.4.min.js"></script>
  <!-- Popper js -->
  <script src="js-studio/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="js-studio/bootstrap.min.js"></script>
  <!-- Plugins js -->
  <script src="js-studio/plugins.js"></script>
  <!-- Active js -->
  <script src="js-studio/active.js"></script>

</body>

</html>