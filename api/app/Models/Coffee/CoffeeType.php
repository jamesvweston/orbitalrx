<?php

namespace App\Models\Coffee;

use App\Models\Orders\OrderItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Coffee\CoffeeType
 *
 * @property int $id
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection<int, OrderItem> $order_items
 * @property-read int|null $order_items_count
 * @method static \Illuminate\Database\Eloquent\Builder|CoffeeType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CoffeeType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CoffeeType query()
 * @method static \Illuminate\Database\Eloquent\Builder|CoffeeType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CoffeeType whereName($value)
 * @mixin \Eloquent
 */
class CoffeeType extends Model
{
    public $timestamps = false;

    public function order_items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
        ];
    }
}
