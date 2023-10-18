<?php

namespace App\Models\Orders;

use App\Models\Coffee\CoffeeBean;
use App\Models\Coffee\CoffeeType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Orders\OrderItem
 *
 * @property int $id
 * @property int $coffee_bean_id
 * @property int $coffee_type_id
 * @property int $order_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read CoffeeBean $coffee_bean
 * @property-read CoffeeType $coffee_type
 * @property-read \App\Models\Orders\Order $order
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereCoffeeBeanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereCoffeeTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class OrderItem extends Model
{

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function coffee_bean(): BelongsTo
    {
        return $this->belongsTo(CoffeeBean::class);
    }

    public function coffee_type(): BelongsTo
    {
        return $this->belongsTo(CoffeeType::class);
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'order_id' => $this->order_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'bean' => $this->coffee_bean->toArray(),
            'type' => $this->coffee_type->toArray(),
        ];
    }

}
