<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'id' => 1,
                'name' => 'dashboard.view',
                'group' => 'dashboard',
            ],
            [
                'id' => 2,
                'name' => 'users.view',
                'group' => 'users',
            ],
            [
                'id' => 3,
                'name' => 'users.create',
                'group' => 'users',
            ],
            [
                'id' => 4,
                'name' => 'users.edit',
                'group' => 'users',
            ],
            [
                'id' => 5,
                'name' => 'users.delete',
                'group' => 'users',
            ],
            [
                'id' => 6,
                'name' => 'users.toggle_status',
                'group' => 'users',
            ],
            [
                'id' => 7,
                'name' => 'users.change_password',
                'group' => 'users',
            ],
            [
                'id' => 8,
                'name' => 'roles.view',
                'group' => 'roles',
            ],
            [
                'id' => 9,
                'name' => 'roles.create',
                'group' => 'roles',
            ],
            [
                'id' => 10,
                'name' => 'roles.edit',
                'group' => 'roles',
            ],
            [
                'id' => 11,
                'name' => 'roles.delete',
                'group' => 'roles',
            ],
            [
                'id' => 12,
                'name' => 'roles.assign',
                'group' => 'roles',
            ],
            [
                'id' => 13,
                'name' => 'vehicles.view',
                'group' => 'vehicles',
            ],
            [
                'id' => 14,
                'name' => 'vehicles.create',
                'group' => 'vehicles',
            ],
            [
                'id' => 15,
                'name' => 'vehicles.edit',
                'group' => 'vehicles',
            ],
            [
                'id' => 16,
                'name' => 'vehicles.delete',
                'group' => 'vehicles',
            ],
            [
                'id' => 17,
                'name' => 'vendors.view',
                'group' => 'vendors',
            ],
            [
                'id' => 18,
                'name' => 'vendors.create',
                'group' => 'vendors',
            ],
            [
                'id' => 19,
                'name' => 'vendors.edit',
                'group' => 'vendors',
            ],
            [
                'id' => 20,
                'name' => 'vendors.delete',
                'group' => 'vendors',
            ],
            [
                'id' => 21,
                'name' => 'clients.view',
                'group' => 'clients',
            ],
            [
                'id' => 22,
                'name' => 'clients.create',
                'group' => 'clients',
            ],
            [
                'id' => 23,
                'name' => 'clients.edit',
                'group' => 'clients',
            ],
            [
                'id' => 24,
                'name' => 'clients.delete',
                'group' => 'clients',
            ],

            [
                'id' => 25,
                'name' => 'drivers.view',
                'group' => 'drivers',
            ],
            [
                'id' => 26,
                'name' => 'drivers.create',
                'group' => 'drivers',
            ],
            [
                'id' => 27,
                'name' => 'drivers.edit',
                'group' => 'drivers',
            ],
            [
                'id' => 28,
                'name' => 'drivers.delete',
                'group' => 'drivers',
            ]


        ];

        foreach ($permissions as $permission) {
            Permission::updateOrCreate([
                'id' => $permission['id']
            ], [
                'id' => $permission['id'],
                'name' => $permission['name'],
                'group' => $permission['group']
            ]);
        }
    }
}
