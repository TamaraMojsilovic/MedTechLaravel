<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LekarController;
use App\Http\Controllers\PacijentController;

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

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::get('lekar', [LekarController::class, 'index']);
Route::get('lekar/{lekar}', [LekarController::class, 'show']);
Route::get('pacijent', [PacijentController::class, 'index']);
Route::get('pacijent/{pacijent}', [PacijentController::class, 'show']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::delete('lekar/{lekar}', [LekarController::class, 'destroy']);
    Route::post('pacijent', [PacijentController::class, 'store']);
    Route::post('logout', [AuthController::class, 'logout']);
});