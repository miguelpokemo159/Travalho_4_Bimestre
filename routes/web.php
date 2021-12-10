<?php

use App\Http\Controllers\RoupasController;

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

;

//Route::get('/cadastroroupas',[RoupasController::class, 'cadastroRoupas']);
Route::get('/cadastroroupas', function () {
    return view('roupas.CadastroRoupas');
});
Route::post('/cadastro',[RoupasController::class, 'cadastroRoupas'])->name('cadastro_roupa');



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


