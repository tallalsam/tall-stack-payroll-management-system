<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Earning;

class EarningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Bonus',
                'acronym' => 'BO',
                'active' => true,
                'is_taxable' => true,
            ],
        ];

        Earning::insert($data);
    }
}
