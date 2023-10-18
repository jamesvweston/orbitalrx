<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CoffeeBeanSeeder::class);
        $this->call(CoffeeTypeSeeder::class);
        $this->call(TruckSeeder::class);
        $this->call(OrderSeeder::class);
    }
}
