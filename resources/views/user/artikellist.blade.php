<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>SMRS - LANUD SURYADHARMA</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +021 1231 9420</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> smrslanudsuryadharma@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><b><span class="text-primary">SMRS</span>LanudSuryadharma</b></a>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link" href="{{url ('home')}}"><b>Home</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url ('doctorlist')}}"><b>Dokter</b></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{url ('artikellist')}}"><b>Artikel</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url ('about')}}"><b>Tentang</b></a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="{{url ('contact')}}"><b>Kontak</b></a>
            </li> -->

            @if(Route::has('login'))

            @auth

            <div class="dropdown">
              <button class="btn btn-primary ml-lg-3" data-toggle="dropdown" aria-expanded="false">
                Aktivitasku
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{url('my_appointment')}}">Perjanjianku</a>
                <a class="dropdown-item" href="{{url('my_bill')}}">Tagihanku</a>
              </div>
            </div>

            <x-app-layout>

            </x-app-layout>
            
            @else

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route ('login')}}">Login</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route ('register')}}">Register</a>
            </li>

            @endauth

            @endif
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  @if(session()->has('message'))
  <div class="alert alert-success">
    {{session()->get('message')}}
  </div>
  @endif

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Artikel</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Artikel dan Informasi Terbaru </br> di</h1>
        <h1 class="text-primary"><b>SMSR - Lanud Suryadharma</b></h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div>

            @foreach($data as $artikel)
            <div>
              <div>
                <article class="blog-details">
                <h2 class="post-title h1">{{$artikel->title}}</h2>
                  <div class="post-thumb">
                    <img src="artikelimage/{{$artikel->image}}" alt="">
                  </div>
                  <div class="post-meta">
                    <div class="post-author">
                      <span class="text-grey">By</span> <a href="#">{{$artikel->writer}}</a>  
                    </div>
                    <span class="divider">|</span>
                    <div class="post-date">
                      <a href="#">{{$artikel->date}}</a>
                    </div>
                  </div>
                  <div class="post-content">
                    <p align="justify">
                        {{$artikel->description}}
                    </p>
                  </div>
                </article> <!-- .blog-details -->
              </div>
            </div>
            <hr size="10px">
            @endforeach
          </div> <!-- .row -->
        </div>
        <div class="col-lg-4">

        </div> 
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->


  @include('user.footer')

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>