<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenjualanController;


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

Route::get('/penjualan', [PenjualanController::class, 'index']);
Route::post('/penjualan', [PenjualanController::class, 'create']);
Route::get('/penjualan/{id}', [PenjualanController::class, 'detail']);
Route::put('/penjualan/{id}', [PenjualanController::class, 'update']);
Route::delete('/penjualan/{id}', [PenjualanController::class, 'delete']);


// Route::get('/penjualan', 'PenjualanController@index');
// Route::post('/penjualan', 'PenjualanController@create');
// Route::get('/penjualan/{id}', 'PenjualanController@detail');
// Route::put('/penjualan/{id}', 'PenjualanController@update');
// Route::delete('/penjualan/{id}', 'PenjualanController@delete');
