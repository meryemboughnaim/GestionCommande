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
            'product_id' => '96',
            'user_id' => '1',
        ]);
        DB::table('orders')->insert([
            'description' => 'Sauce Tomate - Crevette - Fromage Rouge/Mozarelle',
            'product_id' => '95',
            'user_id' => '1',
        ]);
        DB::table('orders')->insert([
            'description' => 'Sauce Tomate - Crevette - Fromage Rouge/Mozarelle',
            'product_id' => '94',
            'user_id' => '1',
        ]);
        DB::table('orders')->insert([
            'description' => 'Sauce Tomate - Crevette - Fromage Rouge/Mozarelle',
            'product_id' => '93',
            'user_id' => '1',
        ]);
    }
}
