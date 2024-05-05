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
          <li><a class="nav-link active" href="{{ route('home') }}">Home</a></li>
          <li><a class="nav-link" href="{{ route('stok') }}">Stok Produk</a></li>
          <li><a class="nav-link" href="{{ route('about') }}">About</a></li>
          <li><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Selamat datang di <span>Pasindo Pustaka</span></h1>
      <h2>Distributor resmi buku cetak dan buku LKS dari berbagai penerbit</h2>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Pesan sekarang</a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg mt-5">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pasindo Pustaka Mandiri</h2>
          <h3>Penerbit Pasindo Pustaka Mandiri  </h3>
          <p>Pasindo Pustaka Mandiri memiliki kerjasama dengan berbagai penerbit di Indonesia </p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
          </div>
          <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4">
                <img src="{{asset('bahan_stok\IP_logo.jpg')}}" class="card-img-top" alt="Image 1">
                <div class="card-body">
                  <h5 class="card-title">PT. Intan Pariwara</h5>
                  <p class="card-text">PT Intan Pariwara merupakan perusahaan yang bergerak pada bidang penyediaan sarana dan prasarana pendidikan untuk seluruh sekolah di Indonesia.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4">
                <img src="{{asset('bahan_stok\sindunata_logo.png')}}" class="card-img-top" alt="Image 2">
                <div class="card-body">
                  <h5 class="card-title">CV. Sindunata</h5>
                  <p class="card-text">CV Sindunata merupakan perusahaan yang bergerak pada bidang penyediaan sarana dan prasarana pendidikan untuk seluruh sekolah di Indonesia.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4">
                <img src="{{asset('bahan_stok\erlangga_logo.jpg')}}" class="card-img-top" alt="Image 3">
                <div class="card-body">
                  <h5 class="card-title">PT. Penerbit Erlangga</h5>
                  <p class="card-text">PT Erlangga merupakan perusahaan yang bergerak pada bidang penyediaan sarana dan prasarana pendidikan untuk seluruh sekolah di Indonesia.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->


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

</body>

</html>