<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldQtyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('peminjaman_items', function (Blueprint $table) {
            $table->integer('qty')->default(0)->after('buku_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('peminjaman_items', function (Blueprint $table) {
            $table->dropColumn('qty');
        });
    }
}
