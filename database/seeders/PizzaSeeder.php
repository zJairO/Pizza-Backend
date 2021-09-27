<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
# Use DB
use Illuminate\Support\Facades\DB;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Default Order Statuses

        DB::table('pizzas')->insert([
            'name' => 'Neapolitan Pizza'
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Chicago Pizza'
        ]);

        DB::table('pizzas')->insert([
            'name' => 'New York Style Pizza'
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Sicilian Pizza'
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Neapolitan Pizza'
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Greek Pizza'
        ]);

        DB::table('pizzas')->insert([
            'name' => 'California Pizza'
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Detroit Pizza'
        ]);
    }
}
