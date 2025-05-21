<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Designation;

class DesignationSeeder extends Seeder
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
                'id' => 1,
                'designation_name' => 'Project Manager',
                'department_id' => 1,
                'daily_rate' => 0,
                'details' => '',
            ],
            [
                'id' => 2,
                'designation_name' => 'Human Resource Manager',
                'department_id' => 4,
                'daily_rate' => 0,
                'details' => '',
            ],
            [
                'id' => 3,
                'designation_name' => 'Full Stack Developer',
                'department_id' => 1,
                'daily_rate' => 0,
                'details' => '',
            ],
            [
                'id' => 5,
                'designation_name' => 'Accountant',
                'department_id' => 5,
                'daily_rate' => 0,
                'details' => '',
            ],
            [
                'id' => 6,
                'designation_name' => 'Quality Assurance Engineer',
                'department_id' => 2,
                'daily_rate' =>  0,
                'details' => '',
            ]
        ];

        Designation::insert($data);

    }
}
