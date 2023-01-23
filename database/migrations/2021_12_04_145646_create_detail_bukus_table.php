<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_bukus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('buku_id');
            $table->date('tgl_rilis');
            $table->string('bahasa');
            $table->string('negara');
            $table->string('penerbit');
            $table->integer('jumlah_halaman');
            $table->text('description');
            $table->integer('jumlah_buku')->default(10);
            $table->timestamps();

            $table->foreign('buku_id')->references('id')->on('bukus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_bukus');
    }
}
