<?php

namespace App\Http\Controllers;
use App\Models\Suplier;
use Illuminate\Http\Request;

class SuplierController extends Controller
{
    public function tampilkan_suplier()
    {
    // mengambil semua data dari model suplier
    $splr = Suplier::all();
    return view('suplier', compact('splr'));
}
}
