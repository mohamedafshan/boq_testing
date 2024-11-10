<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoqController;
use App\Http\Controllers\CalculationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Start the Boq Summery --------------------------------->
Route::get('/view-boq', [BoqController::class, 'index'])->name('view-boq');
Route::post('/save-boq', [BoqController::class, 'store']);
Route::post('/save-calculation', [CalculationController::class, 'store']);
// End the Boq Summery ----------------------------------->