<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $createChallenges = new Permission();
        $createChallenges->slug = 'create-challenges';
        $createChallenges->name = 'Create Challenges';
        $createChallenges->save();

        $deleteChallenges = new Permission();
        $deleteChallenges->slug = 'delete-challenges';
        $deleteChallenges->name = 'Delete Challenges';
        $deleteChallenges->save();

        $viewUsers = new Permission();
        $viewUsers->slug = 'view-users';
        $viewUsers->name = 'View Users';
        $viewUsers->save();
    }
}
