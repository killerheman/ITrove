<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::updateOrCreate(['name' => 'Admin'], ['name' => 'Admin']);
        $staffRole = Role::updateOrCreate(['name' => 'Staff'], ['name' => 'Staff']);

        // Assign all permissions to Admin
        $permissions = Permission::all();
        $adminRole->syncPermissions($permissions);

        // Assign basic permissions to Staff (example)
        $staffRole->syncPermissions([
            'manage-blogs',
            'manage-students',
            'view-dashboard'
        ]);
    }
}
