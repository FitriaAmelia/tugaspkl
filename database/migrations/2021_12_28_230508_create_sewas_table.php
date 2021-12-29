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
            $table->integer('no_nota');
            $table->foreignId('mobil_no')
                ->constraint('mobils')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('driver_id')
                ->constraint('drivers')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('penyewa_id')
                ->constraint('penyewas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
