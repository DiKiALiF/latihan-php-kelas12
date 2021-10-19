<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function tampilkan_post()
    {
    // mengambil semua data dari model Post
    $pos = Post::all();
    return view('tampil_post', compact('pos'));
}
}
