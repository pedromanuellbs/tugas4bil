<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Users; // Assuming your User model is located in App\Models\User namespace

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'nama' => 'Admin',
            'email' => 'admin@gmail.com',
            'pass' => Hash::make('12345678'),
            'role' => 'Admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Use the User model's factory to create instances
        Users::factory()->count(2)->create(['role' => 'Operator']);
    }
}
