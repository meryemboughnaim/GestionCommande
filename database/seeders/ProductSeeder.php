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
            'photo' => '/assets/logo-GestionCommande.jpg',
            'description' => 'Sauce Tomate - Crevette - Fromage Rouge/Mozarelle',
            'price' => '55',
        ]);
    }
}
