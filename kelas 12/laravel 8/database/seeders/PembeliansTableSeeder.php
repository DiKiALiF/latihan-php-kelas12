<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PembeliansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Pembelian = [
            ['nama_barang'=>'Oreo','nama_suplier'=>'Bambang','qty'=>10,'tgl'=>'2021-10-19'],
            ['nama_barang'=>'Bengbeng','nama_suplier'=>'Udin','qty'=>10,'tgl'=>'2021-10-19'],
            ['nama_barang'=>'Malkist Roma','nama_suplier'=>'Juned','qty'=>15,'tgl'=>'2021-10-19'],
            ['nama_barang'=>'Sari Gandum','nama_suplier'=>'Maman','qty'=>15,'tgl'=>'2021-10-19'],
            ['nama_barang'=>'Nabati','nama_suplier'=>'Saepul','qty'=>15,'tgl'=>'2021-10-19']
            ];
            // masukkan data ke database
            DB::table('Pembelian')->insert($Pembelian);
    }
}
