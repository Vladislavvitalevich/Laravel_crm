<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_admin = new Role();
        $super_admin->name = 'Super Admin';
        $super_admin->slug = 'super-admin';
        $super_admin->save();

        $manager = new Role();
        $manager->name = 'Manager';
        $manager->slug = 'manager';
        $manager->save();

        $user = new Role();
        $user->name = 'User';
        $user->slug = 'user';
        $user->save();


    }
}
