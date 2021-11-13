<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Upload;
use Illuminate\Database\Seeder;

class UploadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Upload::create([
            'id_user' => '1',
            'path' => 'examples/example.pdf',
            'status' => '1'
        ]);
        Upload::create([
            'id_user' => '2',
            'path' => 'examples/example.pdf',
            'status' => '1'
        ]);
        Upload::create([
            'id_user' => '1',
            'path' => 'examples/example.pdf',
            'status' => '1'
        ]);
        Upload::create([
            'id_user' => '2',
            'path' => 'examples/example.pdf',
            'status' => '1'
        ]);
        Upload::create([
            'id_user' => '1',
            'path' => 'examples/example.pdf',
            'status' => '1'
        ]);
        Upload::create([
            'id_user' => '1',
            'path' => 'examples/example.pdf',
            'status' => '1'
        ]);
        Upload::create([
            'id_user' => '1',
            'path' => 'examples/example.pdf',
            'status' => '1'
        ]);
        Upload::create([
            'id_user' => '1',
            'path' => 'examples/example.pdf',
            'status' => '1'
        ]);
    }
}
