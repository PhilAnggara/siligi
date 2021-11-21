<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Rkpd;
use Illuminate\Database\Seeder;

class RkpdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rkpd::create([
            'id_user' => '1',
            'path' => 'examples/example.pdf',
            'status' => '1'
        ]);
        Rkpd::create([
            'id_user' => '2',
            'path' => 'examples/example.pdf',
            'status' => '1'
        ]);
        Rkpd::create([
            'id_user' => '1',
            'path' => 'examples/example.pdf',
            'status' => '1'
        ]);
        Rkpd::create([
            'id_user' => '2',
            'path' => 'examples/example.pdf',
            'status' => '1'
        ]);
        Rkpd::create([
            'id_user' => '1',
            'path' => 'examples/example.pdf',
            'status' => '1'
        ]);
        Rkpd::create([
            'id_user' => '1',
            'path' => 'examples/example.pdf',
            'status' => '1'
        ]);
        Rkpd::create([
            'id_user' => '1',
            'path' => 'examples/example.pdf',
            'status' => '1'
        ]);
        Rkpd::create([
            'id_user' => '1',
            'path' => 'examples/example.pdf',
            'status' => '1'
        ]);
    }
}
