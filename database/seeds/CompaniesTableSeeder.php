<?php

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ns = Company::create([
            'name' => 'Nogales Social',
            'rfc' => 'CAPO900803EJ1',
            'is_active' => true,
        ]);
    }
}
