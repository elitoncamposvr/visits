<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create(
            [
                'name' => 'Admin User',
                'email' => 'admin@admin.com',
                'is_admin' => true,
                'avatar' => '',
                'status' => '1',
                'user_level' => 0,
                'email_verified_at' => now(),
                'password' => Hash::make('123456br'),
                'company_id' => '1',
            ]
        );
    }
}
