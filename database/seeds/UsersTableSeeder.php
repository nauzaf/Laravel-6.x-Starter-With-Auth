<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'su@admin.com',
            'password' => bcrypt('super-admin'),
        ]);

        DB::table('roles')->insert([
            ['role_name' => 'super_admin'],
            ['role_name' => 'op_dinas'],
            ['role_name' => 'op_rs'],
            ['role_name' => 'dokter'],
            ['role_name' => 'perawat'],
            ['role_name' => 'pasien']
        ]);

        $user = DB::table('users')->first();
        $role = DB::table('roles')->where('role_name', 'super_admin')->first();

        DB::table('role_user')->insert([
            'user_id' => $user->id,
            'role_id' => $role->id
        ]);
    }
}
