<?php

declare(strict_types=1);

namespace App\Actions\Web;

use File;
use Lorisleiva\Actions\Concerns\AsAction;

class GetApiDocumentation
{
    use AsAction;

    public function handle(): string
    {
        return File::get(public_path('documentation/redoc.html'));
    }

    public function asController(): string
    {
        return $this->handle();
    }
}
