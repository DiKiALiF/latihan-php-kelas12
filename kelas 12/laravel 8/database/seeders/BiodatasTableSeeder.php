<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class BiodatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $biodatas = [
            ['id'=>1,'name'=>'John','bornDate'=>'2004-07-12','gender'=>'Male','address'=>'London','religion'=>'Islam','age'=>17,'hobby'=>'Playing Football'],
            ['id'=>2,'name'=>'Steve','bornDate'=>'2004-06-12','gender'=>'Male','address'=>'Manchester','religion'=>'Islam','age'=>17,'hobby'=>'Playing Video Games'],
            ['id'=>3,'name'=>'Mark','bornDate'=>'2004-05-12','gender'=>'Male','address'=>'Birmingham','religion'=>'Islam','age'=>17,'hobby'=>'Fishing'],
            ['id'=>4,'name'=>'Jeff','bornDate'=>'2004-04-12','gender'=>'Male','address'=>'New York','religion'=>'Islam','age'=>17,'hobby'=>'Watch a Movies'],
            ['id'=>5,'name'=>'Taylor','bornDate'=>'2004-03-12','gender'=>'Male','address'=>'Texas','religion'=>'Islam','age'=>17,'hobby'=>'Read a Book']
            ];
            // masukkan data ke database
            DB::table('biodatas')->insert($biodatas);

    }
}
