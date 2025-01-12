<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'firstname' => 'Aboubakary',
            'lastname' => 'Cissé',
            'email' => "aboubakarycisse472@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('smtgroupadmin')
        ]);
    }
}
