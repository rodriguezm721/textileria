<?php

use App\Http\Controllers\CutController;
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

Route::get('/', function () {
    return view('cortes.insert');
}); 


Route::prefix('cortes')->group(function () {
    // Ruta para mostrar la lista de usuarios
    Route::post('/nuevo_corte', [CutController::class, 'insert'])->name('cortes.insert');

    Route::post('/almacen/actualizar', [CutController::class, 'updatealm'])->name('cortes.updatealm');

    Route::get('/listado_cortes', [CutController::class, 'index'])->name('cortes.index');

    Route::get('/datos', [CutController::class, 'new'])->name('cortes.new');

    Route::get('/almacen', [CutController::class, 'almacen'])->name('cortes.almacen');
    Route::get('/proceso', [CutController::class, 'proceso'])->name('cortes.proceso');
    Route::get('/terminado', [CutController::class, 'terminado'])->name('cortes.terminado');
    Route::get('/entregado', [CutController::class, 'entregado'])->name('cortes.entregado');


    // Ruta para mostrar el formulario de creación de usuarios
    //Route::get('/crear', [UsuarioController::class, 'create'])->name('usuarios.create');

    // Ruta para almacenar el nuevo usuario en la base de datos
    //Route::post('/crear', [UsuarioController::class, 'store'])->name('usuarios.store');
});