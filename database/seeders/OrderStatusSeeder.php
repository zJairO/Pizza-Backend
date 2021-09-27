<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
# Use DB
use Illuminate\Support\Facades\DB;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Default Order Statuses

        DB::table('order_statuses')->insert([
            'name' => 'Processing'
        ]);
        
        DB::table('order_statuses')->insert([
            'name' => 'Cooking'
        ]);
        
        DB::table('order_statuses')->insert(
            ['name' => 'On Road']
        );

        DB::table('order_statuses')->insert([
            'name' => 'Delivered'
        ]);
    }
}
