<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function tampilkan_barang()
    {
    // mengambil semua data dari model Barang
    $brng = Barang::all();
    return view('barang', compact('brng'));
}
}
