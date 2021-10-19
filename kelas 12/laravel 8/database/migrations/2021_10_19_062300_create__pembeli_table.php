<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pembeli', function (Blueprint $table) {
            $table->increments('id_pembeli')->unique();;
            $table->string('nama');
            $table->string('jns_kelamin');
            $table->text('alamat');
            $table->string('kode_pos');
            $table->string('kota');
            $table->date('tgl_lahir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pembeli');
    }
}
