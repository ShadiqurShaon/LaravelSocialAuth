<?php

use Illuminate\Database\Seeder;

class RollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new \App\Roles();
        $role->name = 'user';
        $role->permission = 'A normal user';
        $role->save();

        $role_admin = new \App\Roles();
        $role_admin->name = 'admin';
        $role_admin->permission = 'A admin user user';
        $role_admin->save();

        $role_super_admin = new \App\Roles();
        $role_super_admin->name = 'super_admin';
        $role_super_admin->permission = 'A super_admin user user';
        $role_super_admin->save();



    }
}
