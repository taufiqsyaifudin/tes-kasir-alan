<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Taufiq Syaifudin',
            'email' => 'taufiqsyaifudin.dev@gmail.com',
            'username' => 'taufiq',
            'password' => bcrypt('1234')
        ]);
    }
}
