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
        DB::table('users')->insert([
            'name' => 'César M',
            'email' => 'cesar@cesar.com',
            'password' => Hash::make('123456789'),
        ]);
        DB::table('users')->insert([
            'name' => 'Brandon A',
            'email' => 'brandon@brandon.com',
            'password' => Hash::make('123456789'),
        ]);
        DB::table('users')->insert([
            'name' => 'Gustavo F',
            'email' => 'gustavo@gustavo.com',
            'password' => Hash::make('123456789'),
        ]);
        DB::table('users')->insert([
            'name' => 'André Neves',
            'email' => 'andr@andr.com.br',
            'password' => Hash::make('123456789'),
        ]);
    }
}
