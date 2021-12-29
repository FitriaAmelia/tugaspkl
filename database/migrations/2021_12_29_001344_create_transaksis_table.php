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
            $table->foreignId('mobil_no')
                ->constraint('mobils')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->date('tgl_sewa');
            $table->date('tgl_kembali');
            $table->string('lama_pakai');
            $table->string('total_biaya');
            $table->foreignId('penyewa_id')
                ->constraint('penyewas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
