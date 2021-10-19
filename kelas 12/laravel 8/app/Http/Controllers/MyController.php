<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function tampilkan(){
        $nama = "Diki";
        $umur = "17 tahun";
        $status = "Pelajar";
        return view('sample', compact('nama', 'umur', 'status'));
    }
}
