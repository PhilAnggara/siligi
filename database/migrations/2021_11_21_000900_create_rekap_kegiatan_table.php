<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekapKegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekap_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_dinas');
            $table->integer('p_rkpd');
            $table->integer('p_ranwal_renja');
            $table->integer('p_renja_pd');
            $table->integer('p_rka_pd');
            $table->integer('p_dpa_pd');
            $table->integer('k_rkpd');
            $table->integer('k_ranwal_renja');
            $table->integer('k_renja_pd');
            $table->integer('k_rka_pd');
            $table->integer('k_dpa_pd');
            $table->integer('k_jumlah');
            $table->integer('pa_rkpd');
            $table->integer('pa_ranwal_renja');
            $table->integer('pa_renja_pd');
            $table->integer('pa_rka_pd');
            $table->integer('pa_dpa_pd');
            $table->string('ket');
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
        Schema::dropIfExists('rekap_kegiatan');
    }
}
