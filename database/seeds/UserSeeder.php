<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Permission;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_admin = Role::where('slug','super_admin')->first();
        $manageUsers = Permission::where('slug','manage-users')->first();

        $user1 = new User();
        $user1->name = 'Jon Doe';
        $user1->email = 'admin@local.in';
        $user1->password = bcrypt('password');
        $user1->save();
        $user1->roles()->attach($super_admin);
        $user1->permissions()->attach($manageUsers);

        $user2 = new User();
        $user2->name = 'Jo Miller';
        $user2->email = 'user@local.in';
        $user2->password = bcrypt('password');
        $user2->save();
    }
}
