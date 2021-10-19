<?php

namespace App\Http\Controllers;
use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function tampil_data()
    {
    // mengambil semua data dari model Biodata
    $bio = Biodata::all();
    return view('tampil_bio', compact('bio'));
}
}
