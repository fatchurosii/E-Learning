<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysKelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kelas', function (Blueprint $table) {
            $table->foreign('id_users', 'fk_kelas_to_users')->references('id')
                ->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');

            $table->foreign('id_kategori_kelas', 'fk_kelas_to_kategori_kelas')->references('id')
                ->on('kategori_kelas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kelas', function (Blueprint $table) {
            $table->dropForeign('fk_kelas_to_users');
            $table->dropForeign('fk_kelas_to_kategori_kelas');
        });
    }
}
