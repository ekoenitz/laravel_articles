<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->upsert([
            [
                'id' => 1,
                'name' => 'Aさん',
                'email' => 'asan@example.com',
                'password' => Hash::make('password'),
            ],
            [
                'id' => 2,
                'name' => 'Bさん',
                'email' => 'bsan@example.com',
                'password' => Hash::make('password'),
            ],
        ], 'id');
    }
}
