<?php

namespace App\Actions\Orders;

use App\Models\Orders\Order;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Lorisleiva\Actions\Concerns\AsAction;

class GetOrders
{
    use AsAction;

    public function handle(?int $page = 1, ?int $per_page = 20, ?string $order_by = 'id', ?string $direction = 'asc'): LengthAwarePaginator
    {
        $qb = Order::query();
        $qb->orderBy($order_by, $direction);
        return $qb->paginate($per_page, ['orders.*'], 'page', $page);
    }

    public function asController(): LengthAwarePaginator
    {
        return $this->handle();
    }
}
