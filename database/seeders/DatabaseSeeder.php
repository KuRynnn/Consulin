<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Constants\UserRole;
use App\Models\Psychologist;
use App\Models\Patient;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $doctor = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => '12345678',
            'role' => UserRole::DOKTER,
        ]);

        Psychologist::create([
            'user_id' => $doctor->id,
        ]);

        $patient = User::create([
            'name' => 'Test User 2',
            'email' => 'test2@example.com',
            'password' => '12345678',
            'role' => UserRole::PASIEN,
        ]);

        Patient::create([
            'user_id' => $patient->id,
        ]);
    }
}
