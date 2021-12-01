<?php

namespace Database\Seeders;

use App\Models\Desa;
use Illuminate\Database\Seeder;

class DesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Desa::create([
            'nama_desa' => 'Desa Satu',
            'id_kecamatan' => 1
        ]);
        Desa::create([
            'nama_desa' => 'Desa Dua',
            'id_kecamatan' => 1
        ]);
        Desa::create([
            'nama_desa' => 'Desa Tiga',
            'id_kecamatan' => 1
        ]);
        Desa::create([
            'nama_desa' => 'Desa Empat',
            'id_kecamatan' => 1
        ]);
        Desa::create([
            'nama_desa' => 'Desa Lima',
            'id_kecamatan' => 1
        ]);
        Desa::create([
            'nama_desa' => 'Desa Enam',
            'id_kecamatan' => 2
        ]);
        Desa::create([
            'nama_desa' => 'Desa Tujuh',
            'id_kecamatan' => 2
        ]);
        Desa::create([
            'nama_desa' => 'Desa Delapan',
            'id_kecamatan' => 2
        ]);
        Desa::create([
            'nama_desa' => 'Desa Sembilan',
            'id_kecamatan' => 2
        ]);
        Desa::create([
            'nama_desa' => 'Desa Sepuluh',
            'id_kecamatan' => 3
        ]);
    }
}
