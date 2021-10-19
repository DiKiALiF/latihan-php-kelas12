<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Pembeli = [
            ['nama'=>'Ujang','jns_kelamin'=>'Laki-laki','alamat'=>'Sayati','kode_pos'=>'40228','kota'=>'Bandung','tgl_lahir'=>'1999-07-13'],
            ['nama'=>'Abdul','jns_kelamin'=>'Laki-laki','alamat'=>'Rancamanyar','kode_pos'=>'40228','kota'=>'Bandung','tgl_lahir'=>'1999-08-14'],
            ['nama'=>'Jamet','jns_kelamin'=>'Laki-laki','alamat'=>'Sayuran','kode_pos'=>'40228','kota'=>'Bandung','tgl_lahir'=>'1999-09-14'],
            ['nama'=>'Supri','jns_kelamin'=>'Laki-laki','alamat'=>'Kopo','kode_pos'=>'40228','kota'=>'Bandung','tgl_lahir'=>'1999-10-15'],
            ['nama'=>'Jordi','jns_kelamin'=>'Laki-laki','alamat'=>'Soreang','kode_pos'=>'40228','kota'=>'Bandung','tgl_lahir'=>'1999-11-16']
            ];
            // masukkan data ke database
            DB::table('Pembeli')->insert($Pembeli);
    }
}
