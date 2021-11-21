<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Musrembang;
use Illuminate\Database\Seeder;

class MusrembangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Musrembang::create([
            'id_kecamatan' => '1',
            'path' => 'examples/example.pdf'
        ]);
        Musrembang::create([
            'id_kecamatan' => '2',
            'path' => 'examples/example.pdf'
        ]);
    }
}
