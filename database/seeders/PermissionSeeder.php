<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'manage-users',
            'manage-roles-permissions',
            'manage-blogs',
            'manage-blog-categories',
            'manage-students',
            'manage-services',
            'manage-works',
            'manage-pricing',
            'view-dashboard'
        ];

        foreach ($permissions as $permission) {
            Permission::updateOrCreate(['name' => $permission], ['name' => $permission]);
        }
    }
}
