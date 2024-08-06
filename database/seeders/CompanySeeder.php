<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->insert([
            [
                'name' => 'Dasheep',
                'contact_name' => 'Leandro',
                'email' => 'leandro@dasheep.com',
                'status' => '1',
                'phone' => '0',
                'cellphone' => '0',
                'address' => 'Av. Exemplo, 100, Centro',
                'cep' => '78.645-000',
                'city' => 'São Paulo',
                'province' => 'São Paulo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cuattro',
                'contact_name' => 'Guilherme',
                'email' => 'contato@cuattro.com',
                'status' => '1',
                'phone' => '0',
                'cellphone' => '0',
                'address' => 'Av. Exemplo, 100, Centro',
                'cep' => '78.645-000',
                'city' => 'São Paulo',
                'province' => 'São Paulo',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
