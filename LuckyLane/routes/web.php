<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

//Rota Menu
Route::get('/', function () {
return view('menu.menu');
})->name('menu');

//Rotas jogos
Route::get('jogos/roleta', function(){return view('jogos.roleta');})->name('roleta');
Route::get('profile/saldo', function(){return view('profile.saldo');})->name('saldo');
Route::put('profile/saldo/atualizar', [\App\Http\Controllers\UsuarioController::class, 'update'])->name('SaldoUpdate');
Route::get('/users/{user}/edit', [UsersController::class, 'edit'])->name('users.edit');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
