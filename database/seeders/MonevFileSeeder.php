<?php

namespace Database\Seeders;

use App\Models\MonevFile;
use Illuminate\Database\Seeder;

class MonevFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MonevFile::create([
            'id_user' => '1',
            'id_monev' => '1',
            'path' => 'examples/example.pdf',
            'triwulan' => '1'
        ]);
        MonevFile::create([
            'id_user' => '1',
            'id_monev' => '1',
            'path' => 'examples/example.pdf',
            'triwulan' => '1'
        ]);
        MonevFile::create([
            'id_user' => '1',
            'id_monev' => '2',
            'path' => 'examples/example.pdf',
            'triwulan' => '1'
        ]);
    }
}
