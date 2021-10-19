<?php

namespace App\Http\Controllers;
use App\Models\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function tampilkan_pembelian()
    {
    // mengambil semua data dari model Pembelian
    $pmbln = Pembelian::all();
    return view('pembelian', compact('pmbln'));
}
}
