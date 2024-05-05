@extends('layouts.app')

@section('content')

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
  
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
  <div class="container">
    <ul class="navbar-nav ms-auto">
    <li class="dropdown"><a href="#"><span>Stok Produk</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li>
          <a href="{{route ('show.admin')}}">Manajemen Stok Produk</a>
          <a href="{{route ('tambah.produk')}}">Tambah Produk</a>
          </li>
    </ul> 
      <li class="nav-item">
        <a class="nav-link active" href="{{route ('dashboard.index')}}">Data Pesanan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route ('show')}}">Data Contact</a>
      </li>
  </div>
</nav>

<body>
<div class="container">
    <div class="row">
      <div class="col-md-12 mt-4">
        <h2 class="text-center">Tambah Produk</h2>

        @if (session('success'))
          <div class="alert alert-success">
              {{session('success')}}
        </div>
        @endif

        @if (session('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
         </div>
         @endif

        <form action="{{route('tambah.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="nama_produk">Nama Produk:</label>
        <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
      </div>

      <div class="form-group">
        <label for="harga">Harga:</label>
        <input type="number" class="form-control" id="harga" name="harga" required>
      </div>

      <div class="form-group">
        <label for="stok">Stok:</label>
        <input type="number" class="form-control" id="stok" name="stok" required>
      </div>

      <div class="form-group">
        <label for="keterangan">Keterangan:</label>
        <textarea class="form-control" id="keterangan" name="keterangan" rows="3" required></textarea>
      </div>

      <div class="form-group">
        <label for="gambar" class="col-sm-2 col-form-label">Upload Gambar</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" id="gambar" name="gambar">
      </div>

      <button type="submit" class="btn btn-primary mt-3">Tambah Produk</button>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

@endsection

