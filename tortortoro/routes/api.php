<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/show_all', [AdminController::class, 'showAll']);
Route::get('/show_all_orders', [AdminController::class, 'showOrders']);
Route::get('/show_order/{id}', [AdminController::class, 'showOrder']);
Route::post('/user_add', [AdminController::class, 'addUser']);
Route::delete('/user_delete/{id}', [AdminController::class, 'deleteUser']);
Route::post('/order/edit/{id}', [AdminController::class, 'editOrderPay']);
Route::post('/order/edit/{id}/break', [AdminController::class, 'editOrderBreak']);
Route::post('/create_change', [AdminController::class, 'createChange']);
Route::post('/addUserChange', [AdminController::class, 'addUserChange']);




Route::post('/create/order', [ClientController::class, 'order_add']);
