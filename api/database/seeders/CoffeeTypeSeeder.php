<?php

namespace Database\Seeders;

use App\Models\Coffee\CoffeeType;
use Illuminate\Database\Seeder;

class CoffeeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        (new CoffeeType(['name' => 'Espresso']))->save();
        (new CoffeeType(['name' => 'Cold Brew']))->save();
        (new CoffeeType(['name' => 'French Press']))->save();
        (new CoffeeType(['name' => 'Neapolitan']))->save();
    }
}
