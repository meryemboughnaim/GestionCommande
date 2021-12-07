<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('orders')->insert([
            'description' => 'Sauce Tomate - Crevette - Fromage Rouge/Mozarelle',
            'product_id' => '1',
            'user_id' => '1',
        ]);
        DB::table('orders')->insert([
            'description' => 'Sauce Tomate - Crevette - Fromage Rouge/Mozarelle',
            'product_id' => '2',
            'user_id' => '1',
        ]);
        DB::table('orders')->insert([
            'description' => 'Sauce Tomate - Crevette - Fromage Rouge/Mozarelle',
            'product_id' => '2',
            'user_id' => '1',
        ]);
        DB::table('orders')->insert([
            'description' => 'Sauce Tomate - Crevette - Fromage Rouge/Mozarelle',
            'product_id' => '1',
            'user_id' => '1',
        ]);
    }
}
