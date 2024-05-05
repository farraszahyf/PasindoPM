<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('judul') - Pasindo Pustaka</title>
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
      <!-- <a href="index.html" class="logo"><img src="tema/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="{{ route('home') }}">Home</a></li>
          <li><a class="nav-link" href="{{ route('stok') }}">Stok Produk</a></li>
          <li><a class="nav-link" href="{{ route('about') }}">About</a></li>
          <li><a class="nav-link active" href="{{ route('contact') }}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <main id="main">
  <body>
  <body>
  <div class="container">
    <div class="row">
      <div class="col-md-12 mt-4">
        <h1>Apakah anda memiliki pertanyaan ?</h1>
        <p>Jangan ragu untuk menghubungi kami.</p>

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <form action="{{ route('contact.store') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="sekolah" class="form-label">Sekolah</label>
            <input type="text" class="form-control" id="sekolah" name="sekolah">
          </div>
          <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea class="form-control" id="pesan" name="pesan" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY"></div>
          </div>
          <button type="submit" class="btn btn-primary">Kirim Pesan</button>
        </form>
      </div>
      <div class="col-md-6" style="background-image; background-size: cover; background-position: center;">
        <img src="{{asset('/tema/img/contact.jpg')}}" class="img-fluid" style="float: right; margin-top: 0px; margin-right: auto; width:80%">
      </div>
    </div>
  </div>
  </main>

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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

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
