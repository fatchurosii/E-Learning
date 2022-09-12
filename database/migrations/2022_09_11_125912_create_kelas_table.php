<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_users')->nullable()->index('fk_kelas_to_users');
            $table->foreignId('id_kategori_kelas')->nullable()->index('fk_kelas_to_kategori_kelas');
            $table->string('title')->nullable();
            $table->string('embed_video')->nullable();
            $table->string('deskripsi')->nullable();
            $table->text('image')->nullable();
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
        Schema::dropIfExists('kelas');
    }
}
