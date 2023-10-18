<?php

namespace App\Models\Orders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Orders\Truck
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Orders\Order> $orders
 * @property-read int|null $orders_count
 * @method static \Illuminate\Database\Eloquent\Builder|Truck newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Truck newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Truck query()
 * @method static \Illuminate\Database\Eloquent\Builder|Truck whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Truck whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Truck whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Truck whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Truck extends Model
{

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
