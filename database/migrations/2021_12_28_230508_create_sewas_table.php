<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSewasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sewas', function (Blueprint $table) {
            $table->id();
            $table->integer('no_nota');
            $table->bigInteger('mobil_no')->unsigned();
            $table->foreign('mobil_no')
                ->references('id')
                ->on('mobils');
            $table->bigInteger('driver_id')->unsigned();
            $table->foreign('driver_id')
                ->references('id')
                ->on('drivers');
            $table->bigInteger('penyewa_id')->unsigned();
            $table->foreign('penyewa_id')
                ->references('id')
                ->on('penyewas');
            $table->date('tgl_sewa');
            $table->date('tgl_kembali');
            $table->string('pembayaran');
            $table->string('jaminan');
            $table->string('denda');
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
        Schema::dropIfExists('sewas');
    }
}
