<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_postulant = Role::create(['name' => 'postulant']);
        $role_company_administrator = Role::create(['name' => 'company_administrator']);
        $role_employee = Role::create(['name' => 'employee']);
    }
}
