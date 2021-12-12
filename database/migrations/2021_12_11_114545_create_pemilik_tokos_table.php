<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemilikTokosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemilik_tokos', function (Blueprint $table) {
            $table->id();
            $table->string('Email');
            $table->string('Nama');
            $table->string('Nama_Toko');
            $table->string('Alamat');
            $table->string('No_Telepon');
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
        Schema::dropIfExists('pemilik_tokos');
    }
}
