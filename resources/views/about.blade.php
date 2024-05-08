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

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="{{ route('home') }}">Beranda</a></li>
          <li><a class="nav-link" href="{{ route('stok') }}">Stok Produk</a></li>
          <li><a class="nav-link" href="{{ route('about') }}">Tentang Kami</a></li>
          <li><a class="nav-link" href="{{ route('contact') }}">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <main id="main">
<section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang Kami</h2>
          <h3>Tentang Kami <span>Pasindo Pustaka</span></h3>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="{{asset('/tema/img/timPP-01.jpeg')}}" class="img-fluid" alt="" >
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0 " data-aos="fade-up" data-aos-delay="100">
            <h3 class="text-start">Sejarah</h3>
            <p class="text-start">
            UD. Pasindo Pustaka Mandiri merupakan perusahaan yang bergerak dibidang distributor buku pendidikan. 
            Perusahaan ini sudah berdiri dan menempuh perjalanan dari tahun 1995 sampai sekarang.
            </p>
            <h3 class="text-start mt-5">Kerjasama dan Tujuan</h3>
            <p class="text-start">
              Perusahaan ini telah bekerjasama dengan beberapa sekolah di wilayah Banyumas, Purbalingga, Bumiayu,
              dan Brebes. Perusahaan ini memiliki tujuan yang kuat untuk membantu pemerataan buku pendidikan
              di wilayah Jawa Tengah.
            </p>
            <h3 class="text-start mt-5">Visi dan Misi</h3>
            <p class="text-start">
            1. Mampu menyediakan bahan belajar berkualitas tinggi dan mudah diakses oleh semua kalangan.</br>
            2. Meningkatkan mutu pendidikan di Indonesia melalui penyediaan buku pendidikan yang inovatif dan inspiratif.
            </p>
            
             
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">



    <!-- ======= Clients Section ======= -->
    <div class="section-title mb-5">
    <h2 class="text-center mb-5">Sekolah yang bekerjasama dengan kami</h2>
    <section id="clients" class="clients section-bg">
      <div class="container" data-aos="zoom-in">
        <div class="row">
        
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('/tema/img/clients/smp1brebes.jpg')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('/tema/img/clients/smp2brebes.jpeg')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('/tema/img/clients/smp3brebes.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('/tema/img/clients/smp1pwt.jpeg')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('/tema/img/clients/smp3pwt.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('/tema/img/clients/smp7pwt.jpeg')}}" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section><!-- End Clients Section -->
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
