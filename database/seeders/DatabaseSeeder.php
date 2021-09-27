<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        # Ingredients
        $this->call(IngredientSeeder::class);
        # Order Status
        $this->call(OrderStatusSeeder::class);
        # Pizzas
        $this->call(PizzaSeeder::class);
        # Delivery Man Factory (Random Generator)
        \App\Models\DeliveryMan::factory(10)->create();
    }
}
