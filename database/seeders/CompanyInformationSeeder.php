<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CompanyInformation;

class CompanyInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(CompanyInformation $companyInformation)
    {
        CompanyInformation::truncate();
//        CompanyInformation::factory(1)->create();
        CompanyInformation::insert([
            'name' => 'Techsila Pvt Limited',
            'address' => '10 Burlington Mall Road #3030, Burlington, MA 01803, USA',
            'phone' => '978-20219-2308',
            'email' => 'info@techsila.io',
        ]);
    }
}
