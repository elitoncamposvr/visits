<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('company_settings')->insert([
            [
                'company_id' => '1',
                'primary_color' => '#1da1f2',
                'secondary_color' => '#1da1f2',
                'tertiary_color' => '#1da1f2',
                'bg_color' => '#1da1f2',
                'primary_dark_color' => '1da1f2',
                'secondary_dark_color' => '#1da1f2',
                'tertiary_dark_color' => '#1da1f2',
                'bg_dark_color' => '#1da1f2',
            ],
            [
                'company_id' => '2',
                'primary_color' => '#1da1f2',
                'secondary_color' => '#1da1f2',
                'tertiary_color' => '#1da1f2',
                'bg_color' => '#1da1f2',
                'primary_dark_color' => '1da1f2',
                'secondary_dark_color' => '#1da1f2',
                'tertiary_dark_color' => '#1da1f2',
                'bg_dark_color' => '#1da1f2',
            ]
        ]);
    }
}
