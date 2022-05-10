<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengembalianItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengembalian_items', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->unsignedBigInteger('peminjaman_item_id');
            $table->enum('ketarangan_status', ['tepat_waktu', 'terlambat', 'rusak_or_hilang']);
            $table->integer('qty');
            $table->integer('denda')->default(0);
            $table->timestamps();

            $table->foreign('peminjaman_item_id')->references('id')->on('peminjaman_item');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengembalian_items');
    }
}
