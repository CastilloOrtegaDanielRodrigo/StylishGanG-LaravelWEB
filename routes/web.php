<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\MarcaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Auth;

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
//     return view('index');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::resource('productos', ProductoController::class)->middleware('auth');
Route::get('/productos-eliminados', [ProductoController::class, 'productosEliminados'])->name('productos.eliminado')->middleware('auth');
Route::resource('marcas', MarcaController::class)->middleware('auth');
Route::resource('categorias', CategoriaController::class)->middleware('auth');
Route::resource('proveedores', ProveedorController::class)->middleware('auth');
Route::get('/contactos', [ContactoController::class, 'index'])->name('contactos')->middleware('auth');


Route::get('/productos-inicio', [WebController::class, 'index'])->name('productos.inicio');
Route::get('/contactanos', [WebController::class, 'contact'])->name('contactanos');
Route::get('/historia', [WebController::class, 'historia'])->name('historia');
Route::post('/contacto', [ContactoController::class, 'enviar'])->name('contacto');
