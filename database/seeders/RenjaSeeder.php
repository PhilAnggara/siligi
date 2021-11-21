<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Renja;
use Illuminate\Database\Seeder;

class RenjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Renja::create([
            'id_user' => '1',
            'path' => 'examples/example.pdf',
            'status' => '1'
        ]);
        Renja::create([
            'id_user' => '2',
            'path' => 'examples/example.pdf',
            'status' => '1'
        ]);
        Renja::create([
            'id_user' => '1',
            'path' => 'examples/example.pdf',
            'status' => '1'
        ]);
        Renja::create([
            'id_user' => '2',
            'path' => 'examples/example.pdf',
            'status' => '1'
        ]);
        Renja::create([
            'id_user' => '1',
            'path' => 'examples/example.pdf',
            'status' => '1'
        ]);
        Renja::create([
            'id_user' => '1',
            'path' => 'examples/example.pdf',
            'status' => '1'
        ]);
        Renja::create([
            'id_user' => '1',
            'path' => 'examples/example.pdf',
            'status' => '1'
        ]);
        Renja::create([
            'id_user' => '1',
            'path' => 'examples/example.pdf',
            'status' => '1'
        ]);
    }
}
