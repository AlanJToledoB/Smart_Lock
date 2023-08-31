<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EntradaSalidaController;




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

Route::get('/', [HomeController::class, 'index'])->name('index');


Route::prefix('profile')->group(function () {
    Route::get('/', [UserController::class, 'show'])->name('profile.show');
    Route::get('/edit', [UserController::class, 'edit'])->name('profile.edit');
    Route::put('/update', [UserController::class, 'update'])->name('profile.update');
    Route::delete('/delete', [UserController::class, 'destroy'])->name('profile.delete');
    Route::put('/update-password', [UserController::class, 'updatePassword'])->name('profile.updatePassword');
});

Route::get('/entradaySalida', [EntradaSalidaController::class, 'index'])->name('entradaySalida');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
