<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'parametrage']);
        Permission::create(['name' => 'attribution de roles']);
        Permission::create(['name' => 'alimenter']);
        Permission::create(['name' => 'modifier']);
        Permission::create(['name' => 'consulter']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'admin']);
        $role1->givePermissionTo('parametrage');
        $role1->givePermissionTo('attribution de roles');
        $role1->givePermissionTo('alimenter');
        $role1->givePermissionTo('modifier');
        $role1->givePermissionTo('consulter');

        $role2 = Role::create(['name' => 'gestionnaire']);
        $role2->givePermissionTo('alimenter');
        $role2->givePermissionTo('modifier');
        $role2->givePermissionTo('consulter');

        $role3 = Role::create(['name' => 'utilisateur']);
        $role3->givePermissionTo('consulter');

    }
}
