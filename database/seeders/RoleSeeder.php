<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Role $role)
    {
        $roles = [
            [
                'id' => Role::ADMINISTRATOR_ID,
                'name' => 'administrator',
                'display_name' => 'Administrator',
                'description' => '',
            ], [
                'id' => Role::EMPLOYEE_ID,
                'name' => 'employee',
                'display_name' => 'Employee',
                'description' => '',
            ],
            [
                'id' => Role::ACCOUNTANT_ID,
                'name' => 'accountant',
                'display_name' => 'Accountant',
                'description' => '',
            ]
        ];

        foreach($roles as $role) {
            Role::updateOrCreate(['id'=>$role['id']],[
                'name' => $role['name'],
                'display_name' => $role['display_name'],
                'description' => $role['description'],
            ]);
        }

    }
}
