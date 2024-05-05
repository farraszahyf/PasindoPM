<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('judul') - Pasindo Pustaka </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('/tema/img/logo.png')}}" rel="icon">
  <link href="tema/img/logo.png" rel="logo">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/tema/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('/tema/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/tema/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('/tema/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('/tema/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('/tema/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('/tema/css/style.css')}}" rel="stylesheet">

    </head>
<body>
  <!-- ======= Top Bar ======= -->
 <!-- ======= Top Bar ======= -->
 <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:[pasindopustaka@gmail.com]">pasindopustaka@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 822 4516 6222</span></i>
      </div>
    </div>
  </section>


  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="{{ route('home') }}">Pasindo Pustaka<span>.</span></a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link " href="{{ route('home') }}">Home</a></li>
          <li><a class="nav-link active " href="#services">Stok Produk</a></li>
          <li><a class="nav-link " href="{{ route('about') }}">About</a></li>
          <li><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  
  <body>
<main id="main">
<section>
<div class="section-title">
          <h2>Stok Produk</h2>
          <h3>Daftar Produk <span>Pasindo Pustaka</span></h3>
          <p>Cari dan Pesan Sekarang!</p>
        </div>

    <div class="container mt-3">
        <div class="row">
        @foreach($stokproduks as $stokproduk)
          <div class="col-md-3 mb-4">
            <div class="card">
              <img src="{{ asset('storage/uploads/' . $stokproduk->gambar) }}" class="card-img-top" alt="{{$stokproduk->nama_produk}}">
              <div class="card-body">
                <h5 class="card-title">{{$stokproduk->nama_produk}}</h5>
                <p class="card-text">Jumlah Stok : {{$stokproduk->stok}}<br> Harga : {{$stokproduk->harga}}</p>
                <a href="{{ route('pesanan') }}" class="btn btn-primary">Pesan</a>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#popupModal{{ $stokproduk->id }}">Keterangan</button>

                <div class="modal fade" id="popupModal{{$stokproduk->id}}" tabindex="-1" aria-labelledby="popupModalLabel{{$stokproduk->id}}" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="popupModalLabel{{$stokproduk->id}}">{{$stokproduk->nama_produk}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>

                      <div class="modal-body">
                        <p>{{$stokproduk->keterangan}}</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endforeach


    </div>
  </div>
  </main> <!-- End #main -->

     <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Pasindo Pustaka</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->
  
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        
  <!-- Vendor JS Files -->
  <script src="{{asset('/tema/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('/tema/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('/tema/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/tema/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('/tema/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('/tema/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('/tema/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('/tema/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('/tema/js/main.js')}}"></script>
  </body>

</html>