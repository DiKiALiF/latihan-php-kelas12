<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Barang = [
            ['nama'=>'Oreo','varian'=>'Vanila','harga_beli'=>20000,'harga_jual'=>21000],
            ['nama'=>'Bengbeng','varian'=>'Coklat','harga_beli'=>20000,'harga_jual'=>21000],
            ['nama'=>'Malkist Roma','varian'=>'Original','harga_beli'=>18000,'harga_jual'=>19000],
            ['nama'=>'Sari Gandum','varian'=>'Coklat','harga_beli'=>19500,'harga_jual'=>21500],
            ['nama'=>'Nabati','varian'=>'Keju','harga_beli'=>18000,'harga_jual'=>19000]
            ];
            // masukkan data ke database
            DB::table('Barang')->insert($Barang);

    }
}
