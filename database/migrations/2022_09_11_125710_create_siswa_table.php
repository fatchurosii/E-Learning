<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_users')->nullable()->index('fk_siswa_to_users');
            $table->foreignId('id_kategori_siswa')->nullable()->index('fk_siswa_to_kategori_siswa');
            $table->longText('alamat')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('photo')->nullable();
            $table->string('kelas')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('siswa');
    }
}
