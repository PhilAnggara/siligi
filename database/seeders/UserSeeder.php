<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Phil Anggara',
            'username' => 'philanggara',
            'email' => 'philanggara@gmail.com',
            'jabatan' => 'Direktur',
            'password' => Hash::make('Admin123')
        ]);
        
        User::create([
            'name' => 'David Gumolung',
            'username' => 'davidgans',
            'email' => 'davidgans@gmail.com',
            'jabatan' => 'Kepala Bagian',
            'password' => Hash::make('Admin123')
        ]);
    }
}
