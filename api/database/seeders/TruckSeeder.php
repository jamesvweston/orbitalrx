<?php

namespace Database\Seeders;

use App\Models\Orders\Truck;
use Illuminate\Database\Seeder;

class TruckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        (new Truck(['name' => 'Awesome Truck']))->save();
        (new Truck(['name' => 'Random Name']))->save();
    }
}
