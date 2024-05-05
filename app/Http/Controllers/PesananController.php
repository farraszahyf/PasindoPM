<?php

namespace App\Http\Controllers;

use App\Models\pesanan;
use Illuminate\Http\Request;
use App\Models\stokproduk;

class PesananController extends Controller
{

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email',
            'sekolah' => 'required|max:255',
            'tanggal' => 'required|date',
            'jenis_buku'=> 'required|max:255',
            'jumlah_pesanan'=> 'required|numeric',
        ], [
            // Pesan error kustom
            'nama.required' => 'Nama harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'sekolah.required' => 'Sekolah harus diisi.',
            'tanggal.required' => 'Tanggal pemesanan harus diisi.',
            'tanggal.date' => 'Format tanggal tidak valid.',
            'jenis_buku.required' => 'Jenis buku harus diisi.',
            'jumlah_pesanan.required' => 'Jumlah pesanan harus diisi.',
            'jumlah_pesanan.numeric' => 'Jumlah pesanan harus berupa angka.',
        ]);
    
        Pesanan::create($validatedData);
    
        // Membuat URL untuk aplikasi WhatsApp dengan nomor yang dituju
        $whatsappNumber = '6282245166222'; // Nomor WhatsApp dengan kode negara Indonesia (+62)
        $whatsappMessage = urlencode('Halo, saya tertarik dengan pesanan buku.'); // Pesan awal
        $whatsappURL = 'https://api.whatsapp.com/send?phone=' . $whatsappNumber . '&text=' . $whatsappMessage;
    
        // Redirect pengguna ke URL WhatsApp
        return redirect()->away($whatsappURL);
    }
    public function create()
    {
        // Mengambil semua stok produk
        $stokproduks = Stokproduk::all();

        // Mengirim stok produk ke view 'pesanan' sebagai data
        return view('pesanan', ['stokproduks' => $stokproduks]);
    }
    public function edit($id)
    {
        $pesanan = Pesanan::findOrFail($id);
        return view('admin.edit', compact('pesanan'));
    }
    
    public function update(request $request, $id)
    {
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->update($request->all());
        return redirect()->route('pesanan.edit', ['id' => $pesanan->id])->with('success', 'Data berhasil update !');
    }

    public function destroy($id)
    {
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->delete();
        return redirect()->route('dashboard.index')->with('success', 'Data berhasil dihapus !');
    }
    }

