<?php

namespace App\Http\Controllers;
use App\Models\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    public function tampilkan_pembeli()
    {
    // mengambil semua data dari model pembeli
    $pmbl = Pembeli::all();
    return view('pembeli', compact('pmbl'));
}
}
