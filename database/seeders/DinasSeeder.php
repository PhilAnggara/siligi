<?php

namespace Database\Seeders;

use App\Models\Dinas;
use Illuminate\Database\Seeder;

class DinasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dinas::create([
            'nama_dinas' => 'Dinas TPHP'
        ]);
        Dinas::create([
            'nama_dinas' => 'Dinas Nakkeswan'
        ]);
        Dinas::create([
            'nama_dinas' => 'Dinas Ketahana Pangan'
        ]);
        Dinas::create([
            'nama_dinas' => 'Dinas Perikanan'
        ]);
        Dinas::create([
            'nama_dinas' => 'Dinas Lingkungan Hidup'
        ]);
    }
}
