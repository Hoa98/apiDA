<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dev_create_perm = Permission::where('slug','create-challenges')->first();
        $dev_delete_perm = Permission::where('slug','delete-challenges')->first();
        $manager_perm = Permission::where('slug','view-users')->first();

        $dev_role = new Role();
        $dev_role->slug = 'developer';
        $dev_role->name = 'Front-end Developer';
        $dev_role->save();
        $dev_role->permissions()->attach($dev_create_perm);
        $dev_role->permissions()->attach($dev_delete_perm);

        $manager_role = new Role();
        $manager_role->slug = 'manager';
        $manager_role->name = 'Assistant Manager';
        $manager_role->save();
        $manager_role->permissions()->attach($manager_perm);
        $manager_role->permissions()->attach($dev_create_perm);
        $manager_role->permissions()->attach($dev_delete_perm);

        $manager_role = new Role();
        $manager_role->slug = 'customer';
        $manager_role->name = 'Customer';
        $manager_role->save();

        $manager_role = new Role();
        $manager_role->slug = 'member';
        $manager_role->name = 'Member';
        $manager_role->save();
        $manager_role->permissions()->attach($dev_create_perm);
    }
}
