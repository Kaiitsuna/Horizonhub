<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Akun Administrator
        User::updateOrCreate(
            ['email' => 'admin@horizon.ac.id'],
            [
                'name' => 'Administrator',
                'nim' => 'ADMIN-001',
                'role' => 'admin',
                'program' => 'Staff Kampus',
                'class_name' => 'Admin',
                'semester' => null,
                'password' => Hash::make('admin123'),
            ]
        );

        // Mahasiswa 1: Kaindra Azyiel Sonjaya
        User::updateOrCreate(
            ['nim' => '4112755201260204'],
            [
                'name' => 'Kaindra Azyiel Sonjaya',
                'email' => 'kaindra.sonjaya.fict@krw.horizon.ac.id',
                'nim' => '4112755201260204',
                'role' => 'mahasiswa',
                'program' => 'Informatika Employee Class',
                'class_name' => 'IF KA',
                'semester' => 'Y1S1',
                'password' => Hash::make('4112755201260204'),
            ]
        );

        // Mahasiswa 2: Elza Septiani Putri
        User::updateOrCreate(
            ['nim' => '4112755201260172'],
            [
                'name' => 'Elza Septiani Putri',
                'email' => 'elza.putri.fict@krw.horizon.ac.id',
                'nim' => '4112755201260172',
                'role' => 'mahasiswa',
                'program' => 'Informatika Employee Class',
                'class_name' => 'IF KA',
                'semester' => 'Y1S1',
                'password' => Hash::make('4112755201260172'),
            ]
        );
    }
}

