<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('twill_users')->where('role', 'SUPERADMIN')->doesntExist()) {
            $admins = [
                [
                    'published' => 1,
                    'name' => 'Admin JeeAnn',
                    'email' => 'jeeann+su@cell5.co.uk',
                    'password' => bcrypt('test1234'),
                    'role' => 'SUPERADMIN',
                ],
                [
                    'published' => 1,
                    'name' => 'Admin Peter',
                    'email' => 'peter+su@cell5.co.uk',
                    'password' => bcrypt('test1234'),
                    'role' => 'SUPERADMIN',
                ],
                [
                    'published' => 1,
                    'name' => 'Admin Kiel',
                    'email' => 'kiel+su@cell5.co.uk',
                    'password' => bcrypt('test1234'),
                    'role' => 'SUPERADMIN',
                ],
            ];
            DB::table('twill_users')->insert($admins);
        }
    }
}
