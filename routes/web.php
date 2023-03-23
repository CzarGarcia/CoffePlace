<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MostrarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductoController;

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


Route::view('/sesion', 'sesion/index')->name('sesion');
Route::view('/pagos', 'pagos/index')->name('pagos');
Route::view('/inicio', 'inicio/index')->name('inicio');
Route::view('/login', 'sesion/index')->name('login');
Route::view('/contacto', 'contacto/index')->name('contacto');
Route::view('/sucursales', 'sucursales/index')->name('sucursales');
Route::view('/p', 'pruebas/index')->name('prueba');
//Dashboard

Route::resource('/catalogo', MostrarController::class);




Route::get('products', [ProductController::class, 'productList'])->name('products.list');
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');



Route::get('/dashboard', function () {
    return view('privado.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/productos', ProductoController::class);
});

require __DIR__.'/auth.php';
