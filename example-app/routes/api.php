<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoqController;
use App\Http\Controllers\CalculationController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Start the Boq Summery
Route::post('/save-boq', [BoqController::class, 'store']);
Route::post('/save-calculation', [CalculationController::class, 'store']);
// End the Boq Summery
