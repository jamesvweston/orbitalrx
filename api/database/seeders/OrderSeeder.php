<?php

namespace Database\Seeders;

use App\Models\Orders\Order;
use App\Models\Orders\OrderItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order = (new Order(['truck_id' => 1]));
        $order->save();
        $order->items()->save(new OrderItem(['coffee_bean_id' => 1, 'coffee_type_id' => 1]));


        $order = (new Order(['truck_id' => 2]));
        $order->save();
        $order->items()->save(new OrderItem(['coffee_bean_id' => 2, 'coffee_type_id' => 2]));

        $order = (new Order(['truck_id' => 1]));
        $order->save();
        $order->items()->save(new OrderItem(['coffee_bean_id' => 3, 'coffee_type_id' => 3]));

        $order = (new Order(['truck_id' => 2]));
        $order->save();
        $order->items()->save(new OrderItem(['coffee_bean_id' => 4, 'coffee_type_id' => 4]));
    }
}
