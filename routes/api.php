<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
# Controllers
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\OrderStatusController;
use App\Http\Controllers\DeliveryManController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

# Ingredients
Route::get('ingredients', [IngredientController::class, 'index']);
Route::get('ingredients/{ingredient}', [IngredientController::class, 'show']);

# Order Status
Route::get('order_statuses', [OrderStatusController::class, 'index']);
Route::get('order_statuses/{order_status}', [OrderStatusController::class, 'show']);

# Delivery Men
Route::get('delivery_men', [DeliveryManController::class, 'index']);
Route::get('delivery_men/{delivery_man}', [DeliveryManController::class, 'show']);

# Pizzas
Route::get('pizzas', [PizzaController::class, 'index']);
Route::get('pizzas/{pizza}', [PizzaController::class, 'show']);
Route::post('pizzas', [PizzaController::class, 'store']);

# Clients
Route::get('clients/{client}', [ClientController::class, 'show']);
Route::post('clients', [ClientController::class, 'store']);
Route::get('search/{phone}', [ClientController::class, 'search']);

# Orders
Route::get('orders', [OrderController::class, 'index']);
Route::get('orders/{order}', [OrderController::class, 'show']);
Route::post('orders', [OrderController::class, 'store']);