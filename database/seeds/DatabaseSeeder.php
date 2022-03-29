<?php

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
        // $this->call(UsersTableSeeder::class);
        // php artisan db:seed
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@bmsit.in',
            'password' => Hash::make('bmsit'),
        ]);
    }
}
