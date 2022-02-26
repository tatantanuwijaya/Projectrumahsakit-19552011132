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
  
  <style type="text/css">
    table.scroll {
      width:700px;
      border:1px #a9c6c9 solid;
    }
    table.scroll thead{
      display:table;
      width:100%;
    }
    table.scroll tbody {
      display:block;
      height:300px;
      overflow:auto;
      float:left;
      width:100%;
    }
  </style>
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
              <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
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

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{url ('home')}}"><b>Home</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url ('doctorlist')}}"><b>Dokter</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url ('artikellist')}}"><b>Artikel</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url ('about')}}"><b>Tentang</b></a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href=""><b>Kontak</b></a>
            </li> -->

            @if(Route::has('login'))

            @auth

            <div class="dropdown">
              <button class="btn btn-primary ml-lg-3" data-toggle="dropdown" aria-expanded="false">
                Aktivitasku
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item text-primary" href="{{url('my_appointment')}}">Perjanjianku</a>
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

  <div align="center" style="padding: 70px;">
  <h1><b>Daftar Perjanjian Pengunjung</br> di</b></h1>
  <h1 class="text-primary"><b>SMRS - LANUD SURYADHARMA</b></h1>
  <br>
      <table class="scroll" style="background-color: #c5fcef">
          <tr style="background-color: #00D9A5" align="center">
             <th style="padding: 10px; font-size: 15px; color:white">Nama Dokter</th> 
             <th style="padding: 10px; font-size: 15px; color:white">Tanggal</th> 
             <th style="padding: 10px; font-size: 15px; color:white">Pesan</th> 
             <th style="padding: 10px; font-size: 15px; color:white">Status</th> 
             <th style="padding: 10px; font-size: 15px; color:white">Batalkan janji</th> 
          </tr>

          @foreach($appoint as $appoints)

          <tr style="background-color: #c5fcef">
            <td style="padding: 8px; font-size: 15px; color:black">{{$appoints->doctor}}</td>
            <td style="padding: 8px; font-size: 15px; color:black">{{$appoints->date}}</td>
            <td style="padding: 8px; font-size: 15px; color:black">{{$appoints->message}}</td>
            <td style="padding: 8px; font-size: 15px; color:black">{{$appoints->status}}</td>
            <td style="padding: 8px;" align="center">
              <a href="{{url('cancel_appointment',$appoints->id)}}" class="btn btn-danger" onclick="return confirm('apakah anda yakin untuk membatalkan janji dengan {{$appoints->doctor}}?')">
                Batalkan
              </a>
            </td>
          </tr>
          @endforeach
      </table>
  </div>

  @include('user.footer')
<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>