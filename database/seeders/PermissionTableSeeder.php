<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            // dashboard
            'dashboard-C',
            'dashboard-R',
            'dashboard-U',
            'dashboard-D',
            // role
            'role-C',
            'role-R',
            'role-U',
            'role-D',
            // permission
            'permission-C',
            'permission-R',
            'permission-U',
            'permission-D',
            // user
            'user-C',
            'user-R',
            'user-U',
            'user-D',
            // website configuration
            'website-C',
            'website-R',
            'website-U',
            'website-D',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
       }
    }
}
