<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $users = [
            [
                'username' => 'superadmin',
                'password' => Hash::make('superadmin'),
                'role_id' => 1,
                'is_admin' => 1,
                'status' => 1,
                'expired_at' => now()->addYear(),
            ],
        ];

        foreach ($users as $user) {
            DB::table('users')->insert([
                'username' => $user['username'],
                'password' => $user['password'],
                'role_id' => $user['role_id'],
                'is_admin' => $user['is_admin'],
                'status' => $user['status'],
                'expired_at' => $user['expired_at'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
