<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('mobil_no')->unsigned();
            $table->foreign('mobil_no')
                ->references('id')
                ->on('mobils');

            $table->date('tgl_sewa');
            $table->date('tgl_kembali');
            $table->string('lama_pakai');
            $table->string('total_biaya');
            $table->bigInteger('penyewa_id')->unsigned();
            $table->foreign('penyewa_id')
                ->references('id')
                ->on('penyewas');
            $table->date('tgl_transaksi');
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
        Schema::dropIfExists('transaksis');
    }
}
