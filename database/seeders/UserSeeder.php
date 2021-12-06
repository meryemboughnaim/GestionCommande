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
        //
    DB::table('users')->insert([
    'name' => 'Smith',
    'email' => 'smith@gmail.com',
    'password' => bcrypt('secret'),
    'phone'=>'0655256548',
]);
    }
}
