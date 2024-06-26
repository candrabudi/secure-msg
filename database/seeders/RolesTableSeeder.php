<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $roles = [
            ['name' => 'Superadmin'],
            ['name' => 'President'],
            ['name' => 'Pusat'],
            ['name' => 'Induk'],
            ['name' => 'Sub Induk'],
            ['name' => 'Koordinator'],
            ['name' => 'Sub Koordinator'],
            ['name' => 'Anggota'],
        ];

        foreach ($roles as $role) {
            DB::table('roles')->insert([
                'name' => $role['name'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
