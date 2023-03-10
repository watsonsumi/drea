<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EstablecimientoController;
use App\Http\Controllers\PlanillaController;
use App\Http\Controllers\ImprimirController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::resource('/dashboardd', DocenteController::class);
Route::resource('/establecimiento', EstablecimientoController::class);
Route::resource('/planilla', PlanillaController::class);
Route::resource('/imprimir', ImprimirController::class);


// Route::get('/dashboard', [DocenteController::class, 'index']);
// Route::get('/dashboard', [DocenteController::class, 'store']);









// Route::get('/dashboard', [DocenteController::class, 'index'])->middleware(['auth'])->name('dashboard');
// Route::get('/establecimiento', [EstablecimientoController::class, 'index'])->middleware(['auth'])->name('establecimiento');
require __DIR__.'/auth.php';
