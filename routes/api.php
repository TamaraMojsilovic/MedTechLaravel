<?php

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

Route::get('lekar', [LekarController::class, 'index']);
Route::get('lekar/{lekar}', [LekarController::class, 'show']);
Route::delete('lekar/{lekar}', [LekarController::class, 'destroy']);

Route::get('pacijent', [PacijentController::class, 'index']);
Route::get('pacijent/{pacijent}', [PacijentController::class, 'show']);
Route::post('pacijent', [PacijentController::class, 'store']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
