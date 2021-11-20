<?php

namespace Database\Seeders;

use App\Models\RekapKegiatan;
use Illuminate\Database\Seeder;

class RekapKegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RekapKegiatan::create([
            'id_dinas' => '1',
            'p_rkpd' => '1',
            'p_ranwal_renja' => '1',
            'p_renja_pd' => '1',
            'p_rka_pd' => '1',
            'p_dpa_pd' => '1',
            'k_rkpd' => '1',
            'k_ranwal_renja' => '1',
            'k_renja_pd' => '1',
            'k_rka_pd' => '1',
            'k_dpa_pd' => '1',
            'k_jumlah' => '1',
            'pa_rkpd' => '1',
            'pa_ranwal_renja' => '1',
            'pa_renja_pd' => '1',
            'pa_rka_pd' => '1',
            'pa_dpa_pd' => '1',
            'ket' => 'n/a',
        ]);
    }
}
