<?php

namespace Database\Seeders;

use App\Models\Coffee\CoffeeBean;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoffeeBeanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        (new CoffeeBean(['name' => 'Arabica']))->save();
        (new CoffeeBean(['name' => 'Liberica']))->save();
        (new CoffeeBean(['name' => 'Harar']))->save();
        (new CoffeeBean(['name' => 'Excelsa']))->save();
        (new CoffeeBean(['name' => 'Kona']))->save();
    }
}
