<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaporTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rapor', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_siswa')->nullable()->index('fk_rapor_to_siswa');
            $table->foreignId('id_mentor')->nullable()->index('fk_rapor_to_mentor');
            $table->string('speaking')->nullable();
            $table->string('reading')->nullable();
            $table->string('listening')->nullable();
            $table->longText('progress_belajar')->nullable();
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
        Schema::dropIfExists('rapor');
    }
}
