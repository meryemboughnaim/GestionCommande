<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;




class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'labe' => 'Pizza au Crevette',
            'photo' =>'1638041058.jpg',
            'description' => 'Sauce Tomate - Crevette - Fromage Rouge/Mozarelle',
            'price' => '55',
        ]);
        DB::table('products')->insert([
            'labe' => 'Burger King',
            'photo' => 'OIP.jpg',
            'description' => 'Sauce Tomate - Crevette - Fromage Rouge/Mozarelle',
            'price' => '55',
        ]);
        DB::table('products')->insert([
            'labe' => 'Tacos',
            'photo' =>'1638359798.jpg',
            'description' => 'Sauce Tomate - Crevette - Fromage Rouge/Mozarelle',
            'price' => '55',
        ]);
        DB::table('products')->insert([
            'labe' => 'Salade',
            'photo' => 'R.jpg',
            'description' => 'Sauce Tomate - Crevette - Fromage Rouge/Mozarelle',
            'price' => '55',
        ]);
  
    }
}
