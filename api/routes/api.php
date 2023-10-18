<?php

use App\Actions\Coffee\GetCoffeeBeans;
use App\Actions\Coffee\GetCoffeeTypes;
use App\Actions\Orders\GetOrders;
use App\Actions\Orders\GetTrucks;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('coffee_types', GetCoffeeTypes::class);
Route::get('coffee_beans', GetCoffeeBeans::class);
Route::get('orders', GetOrders::class);
Route::get('trucks', GetTrucks::class);
