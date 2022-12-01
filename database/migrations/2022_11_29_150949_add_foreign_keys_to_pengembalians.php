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
            $table->foreign('buku_id', 'buku_id_fk5')->references('id')->on('bukus')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('pengunjung_id', 'pengunjung_id_fk6')->references('id')->on('pengunjungs')->onUpdate('CASCADE')->onDelete('RESTRICT');
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
            $table->dropForeign('buku_id_fk5');
            $table->dropForeign('pengunjung_id_fk6');
        });
    }
};
