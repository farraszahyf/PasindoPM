<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\stokproduk;
use Illuminate\Support\Facades\Storage;

class StokprodukController extends Controller
{
    public function update(Request $request, $id)
    {
        $stokproduk = Stokproduk::findOrFail($id);
    
        // Validasi input
        $validatedData = $request->validate([
            'nama_produk' => 'required|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'keterangan' => 'required|max:255',
            'gambar' => 'nullable|file|mimes:jpeg,png,jpg|max:2048'
        ], [
            'nama_produk.required' => 'Nama produk harus diisi.',
            'nama_produk.max' => 'Nama produk tidak boleh lebih dari :max karakter.',
            'harga.required' => 'Harga harus diisi.',
            'harga.numeric' => 'Harga harus berupa angka.',
            'stok.required' => 'Stok harus diisi.',
            'stok.numeric' => 'Stok harus berupa angka.',
            'keterangan.required' => 'Keterangan harus diisi.',
            'keterangan.max' => 'Keterangan tidak boleh lebih dari :max karakter.',
            'gambar.file' => 'File yang diunggah harus berupa gambar.',
            'gambar.mimes' => 'File gambar harus berformat jpeg, png, atau jpg.',
            'gambar.max' => 'Ukuran gambar tidak boleh lebih dari :max kilobita.'
        ]);
    
        // Jika ada file gambar yang diunggah, simpan file tersebut
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('public/uploads', $fileName);
    
            // Hapus file gambar lama jika ada
            if ($stokproduk->gambar) {
                Storage::delete('public/uploads/' . $stokproduk->gambar);
            }
    
            // Update nama file gambar di basis data
            $stokproduk->gambar = $fileName;
        }
    
        // Update data stokproduk
        $stokproduk->nama_produk = $validatedData['nama_produk'];
        $stokproduk->harga = $validatedData['harga'];
        $stokproduk->stok = $validatedData['stok'];
        $stokproduk->keterangan = $validatedData['keterangan'];
        $stokproduk->save();
    
        return redirect()->route('edit.stok', ['id' => $stokproduk->id])->with('success', 'Data berhasil diupdate!');
    }
    
    public function edit($id)
    {
        $stokproduks = stokproduk::findOrFail($id);
        return view('admin.updatestok', compact('stokproduks'));
    }
    public function destroy($id)
    {
        $stokproduks = Stokproduk::findOrFail($id);
        $stokproduks -> delete();
        return redirect()->route('show.admin')->with('success', 'Data berhasil dihapus !');
    }
    public function index()
    {
        $stokproduks = Stokproduk::all(); // Mengambil semua data produk dari tabel produk
        return view('admin.adminstok', ['stokproduks'=> $stokproduks]);
    }
    public function stok()
    {
        $stokproduks = Stokproduk::all(); // Mengambil semua data produk dari tabel produk
    
        return view('stokproduk', ['stokproduks'=> $stokproduks]); // Mengirimkan data produk ke tampilan stokproduk
    }
    
    public function create()
    {
        return view ('admin.tambahproduk');
    }

  public function store(Request $request)
{
    try {
        $validatedData = $request->validate([
            'nama_produk' => 'required|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'keterangan' => 'required|max:255',
            'gambar' => 'required|file|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Simpan berkas
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('public/uploads', $fileName);
        }

        // Simpan gambar ke dalam database
        Stokproduk::create([
            'nama_produk' => $validatedData['nama_produk'],
            'harga' => $validatedData['harga'],
            'stok' => $validatedData['stok'],
            'keterangan' => $validatedData['keterangan'],
            'gambar' => $fileName // Simpan nama file berkas ke dalam database
        ]);

        return redirect()->route('tambah.produk')->with('success', 'Produk Berhasil Ditambahkan');
    } catch (\Exception $e) {
        // Tangani kesalahan
        return redirect()->route('tambah.produk')->with('error', 'Gagal menambahkan produk: ' . $e->getMessage());
    }
}
}