<?php

declare(strict_types=1);

namespace App\Actions\Coffee;

use App\Models\Coffee\CoffeeBean;
use File;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Lorisleiva\Actions\Concerns\AsAction;

class GetCoffeeBeans
{
    use AsAction;

    public function handle(?int $page = 1, ?int $per_page = 20, ?string $order_by = 'id', ?string $direction = 'asc'): LengthAwarePaginator
    {
        $qb = CoffeeBean::query();
        $qb->orderBy($order_by, $direction);
        return $qb->paginate($per_page, ['coffee_beans.*'], 'page', $page);
    }

    public function asController(): LengthAwarePaginator
    {
        return $this->handle();
    }
}
