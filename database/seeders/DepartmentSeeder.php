<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->truncate();
        $data = [
            [
                'id' => 1,
                'department_name' => 'Web & Software Development',
            ],
            [
                'id' => 2,
                'department_name' => 'Quality Assurance',
            ],
            [
                'id' => 3,
                'department_name' => 'Business Development',
            ],
            [
                'id' => 4,
                'department_name' => 'Human Resource',
            ],
            [
                'id' => 5,
                'department_name' => 'Accounts',
            ]
        ];
        Department::insert($data);
    }
}
