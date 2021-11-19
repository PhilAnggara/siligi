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
            'id_dinas' => '1',
            'username' => 'philanggara',
            'email' => 'philanggara@gmail.com',
            'jabatan' => 'Direktur',
            'password' => Hash::make('Admin123')
        ]);
        
        User::create([
            'name' => 'David Gumolung',
            'id_dinas' => '1',
            'username' => 'davidgans',
            'email' => 'davidgans@gmail.com',
            'jabatan' => 'Kepala Bagian',
            'password' => Hash::make('Admin123')
        ]);
        User::create([
            'name' => 'Jenifer Damar',
            'id_dinas' => '2',
            'username' => 'jeniferdamar',
            'email' => 'jeniferdamar@gmail.com',
            'jabatan' => 'Kepala Bagian',
            'password' => Hash::make('Admin123')
        ]);
        User::create([
            'name' => 'Eka Enanto Putra',
            'id_dinas' => '3',
            'username' => 'ekaputra',
            'email' => 'ekaputra@gmail.com',
            'jabatan' => 'Kepala Bagian',
            'password' => Hash::make('Admin123')
        ]);
        User::create([
            'name' => 'Ticoalu Sombouwadil',
            'id_dinas' => '4',
            'username' => 'ticoalusombouwadil',
            'email' => 'ticoalusombouwadil@gmail.com',
            'jabatan' => 'Kepala Bagian',
            'password' => Hash::make('Admin123')
        ]);
        User::create([
            'name' => 'Aditya Manansang',
            'id_dinas' => '4',
            'username' => 'adityamanansang',
            'email' => 'adityamanansang@gmail.com',
            'jabatan' => 'Kepala Bagian',
            'password' => Hash::make('Admin123')
        ]);
        User::create([
            'name' => 'Agung Berhimpon',
            'id_dinas' => '5',
            'username' => 'agungberhimpon',
            'email' => 'agungberhimpon@gmail.com',
            'jabatan' => 'Kepala Bagian',
            'password' => Hash::make('Admin123')
        ]);
    }
}
