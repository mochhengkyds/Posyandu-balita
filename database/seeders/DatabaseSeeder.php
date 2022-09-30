<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nama' => 'admin',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'role' => 'admin',
        ]);
        DB::table('users')->insert([
            'nama' => 'admin1',
            'username' => 'admin12',
            'password' => hash::make('admin123'),
            'role' => 'admin'
        ]);
    }
}
