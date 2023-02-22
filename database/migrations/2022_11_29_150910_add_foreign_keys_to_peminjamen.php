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
        Schema::table('peminjamen', function (Blueprint $table) {
            $table->foreign('buku_id', 'buku_id_fk1')->references('id')->on('bukus')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('pengunjung_id', 'pengunjung_id_fk2')->references('id')->on('pengunjungs')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('peminjamen', function (Blueprint $table) {
            $table->dropForeign('buku_id_fk1');
            $table->dropForeign('pengunjung_id_fk2');
        });
    }
};
