<?php

use App\Http\Controllers\api\PosPendakianController;
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

Route::get('/pos-pendakian', [PosPendakianController::class, 'index']);
Route::post('/pos-pendakian', [PosPendakianController::class, 'store']);
Route::patch('/pos-pendakian/{id}', [PosPendakianController::class, 'update']);
Route::delete('/pos-pendakian/{id}', [PosPendakianController::class, 'destroy']);
