<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpotController;

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

Route::get('/', [SpotController::class, 'index'])->name('index');

Route::get('/all', [SpotController::class, 'AllSpot'])->name('all');
Route::post('/all', [SpotController::class, 'Store']);

Route::get('/planifier', [SpotController::class, 'planifier'])->name('planifier');
Route::post('/planifier', [SpotController::class, 'Store']);
Route::delete('/planifier/{spot}', [SpotController::class, 'destroy'])->name('destroy');

Route::get('/important', [SpotController::class, 'important'])->name('important');
