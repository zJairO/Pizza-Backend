<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
# Use DB
use Illuminate\Support\Facades\DB;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Default ingredients for pizza
        # php artisan migrate:refresh --seed

        DB::table('ingredients')->insert([
            'name' => 'Peperoni'
        ]);
        
        DB::table('ingredients')->insert([
            'name' => 'Meat'
        ]);
        
        DB::table('ingredients')->insert(
            ['name' => 'Ham']
        );

        DB::table('ingredients')->insert([
            'name' => 'Pineapple'
        ]);
    }
}
