<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_peta', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kecamatan');
            $table->foreignId('id_desa');
            $table->integer('ranwal_renja');
            $table->integer('renja');
            $table->integer('dpa_pd');
            $table->integer('anggaran');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_peta');
    }
}
