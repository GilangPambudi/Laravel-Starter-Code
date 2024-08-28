<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'level_id' => 1,
                'username' => 'admin',
                'nama' => 'Administrator',
                'password' => bcrypt('admin')
            ],
            [
                'level_id' => 2,
                'username' => 'manager',
                'nama' => 'Manager PoS',
                'password' => bcrypt('manager')
            ],
            [
                'level_id' => 3,
                'username' => 'kasir',
                'nama' => 'Petugas Kasir',
                'password' => bcrypt('kasir')
            ],
        ];
        DB::table('m_user')->insert($user);
    }
}
