<?php

namespace Database\Seeders;

use App\Models\Kecamatan;
use Illuminate\Database\Seeder;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kecamatan::create([
            'nama_kecamatan' => 'Kecamatan Satu'
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Kecamatan Dua'
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Kecamatan Tiga'
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Kecamatan Empat'
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Kecamatan Lima'
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Kecamatan Enam'
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Kecamatan Tujuh'
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Kecamatan Delapan'
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Kecamatan Sembilan'
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Kecamatan Sepuluh'
        ]);
    }
}
