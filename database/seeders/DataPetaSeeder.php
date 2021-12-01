<?php

namespace Database\Seeders;

use App\Models\DataPeta;
use Illuminate\Database\Seeder;

class DataPetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DataPeta::create([
            'id_kecamatan' => 1,
            'id_desa' => 1,
            'ranwal_renja' => 1,
            'renja' => 0,
            'dpa_pd' => 0,
            'anggaran' => 100000
        ]);
        DataPeta::create([
            'id_kecamatan' => 1,
            'id_desa' => 2,
            'ranwal_renja' => 1,
            'renja' => 0,
            'dpa_pd' => 0,
            'anggaran' => 100000
        ]);
        DataPeta::create([
            'id_kecamatan' => 1,
            'id_desa' => 3,
            'ranwal_renja' => 1,
            'renja' => 1,
            'dpa_pd' => 1,
            'anggaran' => 100000
        ]);
        DataPeta::create([
            'id_kecamatan' => 1,
            'id_desa' => 4,
            'ranwal_renja' => 1,
            'renja' => 1,
            'dpa_pd' => 1,
            'anggaran' => 100000
        ]);
        DataPeta::create([
            'id_kecamatan' => 2,
            'id_desa' => 6,
            'ranwal_renja' => 1,
            'renja' => 1,
            'dpa_pd' => 1,
            'anggaran' => 100000
        ]);
        DataPeta::create([
            'id_kecamatan' => 2,
            'id_desa' => 7,
            'ranwal_renja' => 1,
            'renja' => 1,
            'dpa_pd' => 1,
            'anggaran' => 100000
        ]);
        DataPeta::create([
            'id_kecamatan' => 2,
            'id_desa' => 8,
            'ranwal_renja' => 1,
            'renja' => 1,
            'dpa_pd' => 1,
            'anggaran' => 100000
        ]);
    }
}
