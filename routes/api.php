<?php

use App\Http\Controllers\api\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Auth::routes();
Route::post('/order', [OrderController::class, 'store'])->name('order.store');
Route::get('/orderget', [OrderController::class, 'create'])->name('order');
Route::get('/getfare', [OrderController::class, 'getFare'])->name('fare');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

