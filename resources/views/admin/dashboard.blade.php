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

<div class="container">
    <div class="row">
    <div class="col-md-12 mt-4">
        <h2 class="text-center">Data Pesanan</h2>

    <div class="container">
    <table class="table table-striped table-bordered table-hover mt-6">
    @if (session('success'))
              <div class="alert alert-success">
                {{ session('success') }}
                </div>
            @endif
            <hr>
      <thead>
        <tr>
          <th scope="col" class="text-center">#</th>
          <th scope="col" class="text-center">Nama</th>
          <th scope="col" class="text-center">Email</th>
          <th scope="col" class="text-center">Sekolah</th>
          <th scope="col" class="text-center">Tanggal Pemesanan</th>
          <th scope="col" class="text-center">Jenis Buku</th>
          <th scope="col" class="text-center">Jumlah Pesanan</th>
          <th scope="col" class="text-center">Aksi</th>
        </tr>
      </thead>
            <tbody>
                @forelse ($pesanans as $pesanan)
                <tr>
                    <th scope="row" class="text-center">{{$loop->iteration}}</th>
                    <td class="text-center">{{$pesanan->nama}}</td>
                    <td class="text-center">{{$pesanan->email}}</td>
                    <td class="text-center">{{$pesanan->sekolah}}</td>
                    <td class="text-center">{{$pesanan->tanggal}}</td>
                    <td class="text-center">{{$pesanan->jenis_buku}}</td>
                    <td class="text-center">{{$pesanan->jumlah_pesanan}}</td>
                    <td>
                    <a href="{{ route('pesanan.edit', ['id' => $pesanan->id]) }}" class="btn btn-sm btn-primary mb-2"><i class="fas fa-edit"></i>Update</a>
                    <form action="{{ route ('delete', ['id' => $pesanan->id])}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-sm btn-danger mb-1"><i class="fas fa-trash"></i> Delete</a>
                    </form>
                    </td>
                </tr>
                @empty
                <td colspan="6" class="text-center">Tidak ada Data</td>
                @endforelse



@endsection
