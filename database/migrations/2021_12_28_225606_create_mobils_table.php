<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobils', function (Blueprint $table) {
            $table->id();
            $table->string('no_mobil');
            $table->string('nama_mobil');
            $table->string('jenis_mobil');
            $table->string('tahun_pembuatan');
            $table->string('harga_sewa');
            $table->string('kapasitas_penumpang');
            $table->string('fasilitas_mobil');
            $table->string('status_mobil');
            $table->string('gambar');
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
        Schema::dropIfExists('mobils');
    }
}
