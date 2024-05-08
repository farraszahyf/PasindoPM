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
                <h1 class="text-center">Edit Pesanan</h1>
            @if (session('success'))
              <div class="alert alert-success">
                {{ session('success') }}
                </div>
            @endif
            <hr>
            <form action="{{ route('pesanan.update', ['id' => $pesanan->id]) }}" method="post">
                @method ('PATCH')
                @csrf
                <div class="form-group col-md-6">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{$pesanan->nama}} disabled">
                </div>

                <div class="form-group col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{$pesanan->email}} disabled">
                </div>

                <div class="form-group col-md-6">
                    <label for="sekolah" class="form-label">Sekolah</label>
                    <input type="text" name="sekolah" id="sekolah" class="form-control" value="{{$pesanan->sekolah}} disabled">
                </div>

                <div class="form-group col-md-6">
                    <label for="tanggal" class="form-label">Tanggal Pemesanan</label>
                    <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{$pesanan->tanggal}} disabled">
                </div>

                <div class="form-group col-md-6">
                    <label for="jenis_buku" class="form-label">Jenis Buku</label>
                    <input type="text" name="jenis_buku" id="jenis_buku" class="form-control" value="{{$pesanan->jenis_buku}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="jumlah_pesanan" class="form-label">Jumlah Pesanan</label>
                    <input type="number" name="jumlah_pesanan" id="jumlah_pesanan" class="form-control" value="{{$pesanan->jumlah_pesanan}}">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Update</button>
                </form>
                </div>
                </div>

                @endsection