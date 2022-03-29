<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\pasien;
use App\Models\dokter;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\rekam::factory(5)->create();

        pasien::create([
            'name' => 'Helsa Nesta Dhaifullah',
            'username' => 'Helsand'
        ]);

        pasien::create([
            'name' => 'Nadya Permata Sari',
            'username' => 'Nadyaps'
        ]);

        pasien::create([
            'name' => 'Najmu Shuha',
            'username' => 'Shuha'
        ]);

        dokter::create([
            'name' => 'Nur Muhammad',
            'username' => 'Nur'
        ]);

        dokter::create([
            'name' => 'Danial Farros',
            'username' => 'danial'
        ]);

        
    }
}
