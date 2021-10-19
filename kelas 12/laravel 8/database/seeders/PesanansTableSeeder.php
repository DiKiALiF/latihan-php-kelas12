<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PesanansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Pesanan = [
            ['nama_pelanggan'=>'Ujang','nama_barang'=>'Oreo','qty'=>10,'tgl_pesan'=>'2021-10-19'],
            ['nama_pelanggan'=>'Abdul','nama_barang'=>'Bengbeng','qty'=>10,'tgl_pesan'=>'2021-10-19'],
            ['nama_pelanggan'=>'Jamet','nama_barang'=>'Malkist Roma','qty'=>15,'tgl_pesan'=>'2021-10-19'],
            ['nama_pelanggan'=>'Supri','nama_barang'=>'Sari Gandum','qty'=>15,'tgl_pesan'=>'2021-10-19'],
            ['nama_pelanggan'=>'Jordi','nama_barang'=>'Nabati','qty'=>15,'tgl_pesan'=>'2021-10-19']
            ];
            // masukkan data ke database
            DB::table('Pesanan')->insert($Pesanan);
    }
}
