<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('register', [LoginController::class,'register']);
Route::post('login', [LoginController::class,'login']);

Route::group(['middleware' => ['auth:sanctum','log.order']], function () {
    Route::resource('product',ProductController::class);
    Route::resource('order',OrderController::class);
    Route::get('export-order',[OrderController::class,'export']);
});
