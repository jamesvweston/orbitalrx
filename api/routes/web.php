<?php

use App\Actions\Web\GetApiDocumentation;
use Illuminate\Support\Facades\Route;

Route::get('documentation/redoc', GetApiDocumentation::class)
    ->name('api.documentation');
