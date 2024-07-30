<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::factory()->create([
            'name' => 'Dasheep',
            'contact_name' => 'Leandro',
            'email' => 'leandro@dasheep.com',
            'status' => '1',
            'phone' => '0',
            'cellphone' => '0',
            'address' => 'Av. Exemplo, 100, Centro',
            'cep' => '78.645-000',
            'city' => 'São Paulo',
            'province' => 'São Paulo'
        ]);
    }
}
