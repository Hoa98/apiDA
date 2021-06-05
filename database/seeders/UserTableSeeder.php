<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dev_role = Role::where('slug','developer')->first();
        $manager_role = Role::where('slug', 'manager')->first();
   
        $developer_full = new User();
        $developer_full->username = 'DeveloperFull';
        $developer_full->email = 'dev_full@test.com';
        $developer_full->password = Hash::make('secret');
        $developer_full->save();
        $developer_full->roles()->attach($dev_role);

        $manager = new User();
        $manager->username = 'manager';
        $manager->email = 'manager@test.com';
        $manager->password = Hash::make('secret');
        $manager->save();
        $manager->roles()->attach($manager_role);

        $manager1 = new User();
        $manager1->username = 'manager1';
        $manager1->email = 'manager1@test.com';
        $manager1->password = Hash::make('secret');
        $manager1->save();
        $manager1->roles()->attach($manager_role);
    }
}
