<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysRapor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rapor', function (Blueprint $table) {
            $table->foreign('id_siswa', 'fk_rapor_to_siswa')->references('id')
                ->on('siswa')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('id_mentor', 'fk_rapor_to_mentor')->references('id')
                ->on('mentor')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rapor', function (Blueprint $table) {
            $table->dropForeign('fk_rapor_to_siswa');
            $table->dropForeign('fk_rapor_to_mentor');
        });
    }
}
