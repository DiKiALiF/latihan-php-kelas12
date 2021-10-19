<?php

namespace App\Http\Controllers;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function tampilkan_pesanan()
    {
    // mengambil semua data dari model pesanan
    $psnn = Pesanan::all();
    return view('pesanan', compact('psnn'));
}
}
