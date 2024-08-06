<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
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
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Administrator',
                    'email' => 'admin@test.com',
                    'is_admin' => false,
                    'avatar' => '',
                    'status' => '1',
                    'user_level' => 1,
                    'email_verified_at' => now(),
                    'password' => Hash::make('123456br'),
                    'company_id' => '2',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Project Administrator',
                    'email' => 'admproject@test.com',
                    'is_admin' => false,
                    'avatar' => '',
                    'status' => '1',
                    'user_level' => 2,
                    'email_verified_at' => now(),
                    'password' => Hash::make('123456br'),
                    'company_id' => '2',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'User Test',
                    'email' => 'user@test.com',
                    'is_admin' => false,
                    'avatar' => '',
                    'status' => '1',
                    'user_level' => 3,
                    'email_verified_at' => now(),
                    'password' => Hash::make('123456br'),
                    'company_id' => '2',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}
