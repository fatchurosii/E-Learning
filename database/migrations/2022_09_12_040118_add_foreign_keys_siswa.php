<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('siswa', function (Blueprint $table) {
            $table->foreign('id_users', 'fk_siswa_to_users')->references('id')
                ->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');

            $table->foreign('id_kategori_siswa', 'fk_siswa_to_kategori_siswa')->references('id')
                ->on('kategori_siswa')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('siswa', function (Blueprint $table) {
            $table->dropForeign('fk_siswa_to_users');
            $table->dropForeign('fk_siswa_to_kategori_siswa');
        });
    }
}
