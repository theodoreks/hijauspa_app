<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class KaryawanSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'admin',
            'nama_lengkap' => 'admin',
            'jenis_kelamin' => 'Perempuan',
            'no_hp' => '08123456789',
            'password' => Hash::make('123456'),
            'role' => 'karyawan',
        ]);
    }
}
