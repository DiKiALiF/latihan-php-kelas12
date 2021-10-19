<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class SupliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Suplier = [
            ['nama'=>'Bambang','alamat'=>'Sayati','kode_pos'=>'40228','kota'=>'Bandung'],
            ['nama'=>'Udin','alamat'=>'Rancamanyar','kode_pos'=>'40228','kota'=>'Bandung'],
            ['nama'=>'Juned','alamat'=>'Sayuran','kode_pos'=>'40228','kota'=>'Bandung'],
            ['nama'=>'Maman','alamat'=>'Kopo','kode_pos'=>'40228','kota'=>'Bandung'],
            ['nama'=>'Saepul','alamat'=>'Soreang','kode_pos'=>'40228','kota'=>'Bandung']
            ];
            // masukkan data ke database
            DB::table('Suplier')->insert($Suplier);
    }
}
