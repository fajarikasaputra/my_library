<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pengembalians', function (Blueprint $table) {
            $table->foreign('peminjaman_id', 'peminjaman_id_fk3')->references('id')->on('peminjamen')->onUpdate('CASCADE')->onDelete('RESTRICT');
            // $table->foreign('pengunjung_id', 'pengunjung_id_fk6')->references('id')->on('pengunjungs')->onUpdate('CASCADE')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pengembalians', function (Blueprint $table) {
            $table->dropForeign('peminjaman_id_fk3');
            // $table->dropForeign('pengunjung_id_fk6');
        });
    }
};
