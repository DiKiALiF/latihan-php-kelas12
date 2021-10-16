<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
    $posts = [
        ['title'=>'Tips Cepat Sukses', 'content'=>'lorem ipsum'],
        ['title'=>'Haruskah Cepat Sukses?', 'content'=>'lorem ipsum'],
        ['title'=>'Membangun Visi Misi Sukses', 'content'=>'lorem ipsum']
        ];
        // masukkan data ke database
        DB::table('posts')->insert($posts);

    }
}
