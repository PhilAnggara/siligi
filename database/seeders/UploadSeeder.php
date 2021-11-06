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
            'path' => 'file/nama_file',
            'tanggal_upload' => Carbon::parse('2021-11-1'),
            'status' => '1'
        ]);
        Upload::create([
            'id_user' => '2',
            'path' => 'file/nama_file',
            'tanggal_upload' => Carbon::parse('2021-11-1'),
            'status' => '1'
        ]);
        Upload::create([
            'id_user' => '1',
            'path' => 'file/nama_file',
            'tanggal_upload' => Carbon::parse('2021-11-2'),
            'status' => '1'
        ]);
        Upload::create([
            'id_user' => '2',
            'path' => 'file/nama_file',
            'tanggal_upload' => Carbon::parse('2021-11-2'),
            'status' => '1'
        ]);
        Upload::create([
            'id_user' => '1',
            'path' => 'file/nama_file',
            'tanggal_upload' => Carbon::parse('2021-11-2'),
            'status' => '1'
        ]);
        Upload::create([
            'id_user' => '1',
            'path' => 'file/nama_file',
            'tanggal_upload' => Carbon::parse('2021-11-3'),
            'status' => '1'
        ]);
        Upload::create([
            'id_user' => '1',
            'path' => 'file/nama_file',
            'tanggal_upload' => Carbon::parse('2021-11-4'),
            'status' => '1'
        ]);
        Upload::create([
            'id_user' => '1',
            'path' => 'file/nama_file',
            'tanggal_upload' => Carbon::parse('2021-11-5'),
            'status' => '1'
        ]);
    }
}
