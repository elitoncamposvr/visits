<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\CompanySetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanySetting::factory()->create([
            'company_id' => '1',
            'primary_color' => '#1da1f2',
            'secondary_color' => '#1da1f2',
            'tertiary_color' => '#1da1f2',
            'bg_color' => '#1da1f2',
            'primary_dark_color' => '1da1f2',
            'secondary_dark_color' => '#1da1f2',
            'tertiary_dark_color' => '#1da1f2',
            'bg_dark_color' => '#1da1f2',
        ]);
    }
}
