<?php

namespace App\Http\Controllers;
use app\Models\stokproduk;
use Illuminate\Http\Request;

class HomepageController extends Controller
{

    public function home()
    {
        return view('homepage');
    }
    public function produk()
    {
        $stokproduks = stokproduk::paginate(20);
        return view('stokproduk', compact('stokproduks'));
    }
}
