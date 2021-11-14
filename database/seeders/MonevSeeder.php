<?php

namespace Database\Seeders;

use App\Models\Monev;
use Illuminate\Database\Seeder;

class MonevSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Monev::create([
            'id_dinas' => '1',
            'nama' => 'Dinas'
        ]);
        Monev::create([
            'id_dinas' => '1',
            'nama' => 'BUMN'
        ]);
        Monev::create([
            'id_dinas' => '1',
            'nama' => 'MUMD'
        ]);
        Monev::create([
            'id_dinas' => '1',
            'nama' => 'Swasta'
        ]);
        Monev::create([
            'id_dinas' => '1',
            'nama' => 'LSM'
        ]);
        Monev::create([
            'id_dinas' => '1',
            'nama' => 'Akademisi'
        ]);
    }
}
