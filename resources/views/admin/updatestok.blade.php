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
                <h1 class="text-center">Update Stok</h1>
            @if (session('success'))
              <div class="alert alert-success">
                {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
              </ul>
            </div>
            @endif
            <hr>
            <form action="{{ route('update.stok', ['id' => $stokproduks->id]) }}" method="post">
                @method ('PATCH')
                @csrf
                <div class="form-group col-md-6">
                    <label for="nama_produk" class="form-label">Nama Produk</label>
                    <input type="text" name="nama_produk" id="nama_produk" class="form-control" value="{{$stokproduks->nama_produk}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" name="harga" id="harga" class="form-control" value="{{$stokproduks->harga}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" name="stok" id="stok" class="form-control" value="{{$stokproduks->stok}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <input type="text-area" name="keterangan" id="keterangan" class="form-control" value="{{$stokproduks->keterangan}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="gambar" class="form-label">Gambar</label>
                        @if($stokproduks->gambar)
                    <img src="{{ asset('storage/uploads/' . $stokproduks->gambar) }}" style="max-width: 100px; max-height: 100px;" alt="Gambar Produk">
                    <input type="file" name="gambar" id="gambar" class="form-control mt-2">
                        @else
                    <input type="file" name="gambar" id="gambar" class="form-control">
                    @endif
                </div>

                <button type="submit" class="btn btn-primary mt-3">Update</button>
                </form>
                </div>
                </div>

</body>
@endsection