<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LicenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('licenses')->insert([
            [
                'company_id' => 1,
                'expires_at' => date('2050-12-12 23:59:59'),
                'quantity' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 2,
                'expires_at' => date('2024-09-04 23:59:59'),
                'quantity' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
