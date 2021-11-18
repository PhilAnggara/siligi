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
            'id_desa' => 1,
            'ranwal_renja' => 100000,
            'renja' => 100000,
            'dpa_pd' => 100000,
            'anggaran' => 100000
        ]);
        DataPeta::create([
            'id_desa' => 2,
            'ranwal_renja' => 100000,
            'renja' => 100000,
            'dpa_pd' => 100000,
            'anggaran' => 100000
        ]);
        DataPeta::create([
            'id_desa' => 3,
            'ranwal_renja' => 100000,
            'renja' => 100000,
            'dpa_pd' => 100000,
            'anggaran' => 100000
        ]);
        DataPeta::create([
            'id_desa' => 4,
            'ranwal_renja' => 100000,
            'renja' => 100000,
            'dpa_pd' => 100000,
            'anggaran' => 100000
        ]);
        DataPeta::create([
            'id_desa' => 5,
            'ranwal_renja' => 100000,
            'renja' => 100000,
            'dpa_pd' => 100000,
            'anggaran' => 100000
        ]);
    }
}
