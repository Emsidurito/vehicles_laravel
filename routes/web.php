<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/webSegura', function () {
    return "Estas autentificat!!";
})->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

//MARCAS
Route::group(['middleware'=>'auth'], function() {

Route::get('/marcas', [App\Http\Controllers\MarcaController::class, 'index'])->name('marcas.index');

Route::get('/marcas/show/{id}', [App\Http\Controllers\MarcaController::class, 'show'])->name('marcas.show');

Route::group(['middleware'=>'is_admin'], function() {
	
Route::get('/marcas/create', [App\Http\Controllers\MarcaController::class, 'create'])->name('marcas.create');

Route::post('/marcas/store', [App\Http\Controllers\MarcaController::class, 'store'])->name('marcas.store');

Route::get('/marcas/destroy/{id}', [App\Http\Controllers\MarcaController::class, 'destroy'])->name('marcas.destroy');

Route::get('/marcas/edit/{id}', [App\Http\Controllers\MarcaController::class, 'edit'])->name('marcas.edit');

Route::post('/marcas/update/{id}', [App\Http\Controllers\MarcaController::class, 'update'])->name('marcas.update');

});
});

//MODIFICACIONS

Route::group(['middleware'=>'auth'], function() {

Route::get('/modificacions', [App\Http\Controllers\ModificacioController::class, 'index'])->name('modificacions.index');

Route::get('/modificacions/show/{id}', [App\Http\Controllers\ModificacioController::class, 'show'])->name('modificacions.show');

Route::group(['middleware'=>'is_admin'], function() {

Route::get('/modificacions/create', [App\Http\Controllers\ModificacioController::class, 'create'])->name('modificacions.create');

Route::post('/modificacions/store', [App\Http\Controllers\ModificacioController::class, 'store'])->name('modificacions.store');

Route::get('/modificacions/destroy/{id}', [App\Http\Controllers\ModificacioController::class, 'destroy'])->name('modificacions.destroy');

Route::get('/modificacions/edit/{id}', [App\Http\Controllers\ModificacioController::class, 'edit'])->name('modificacions.edit');

Route::post('/modificacions/update/{id}', [App\Http\Controllers\ModificacioController::class, 'update'])->name('modificacions.update');
});


});

// VEHICLES

Route::group(['middleware'=>'auth'], function() {

Route::get('/vehicles', [App\Http\Controllers\VehicleController::class, 'index'])->name('vehicles.index');

Route::get('/vehicles/show/{vehicle}', [App\Http\Controllers\VehicleController::class, 'show'])->name('vehicles.show');

Route::group(['middleware'=>'is_admin'], function() {

Route::get('/vehicles/create', [App\Http\Controllers\VehicleController::class, 'create'])->name('vehicles.create');

Route::post('/vehicles/store', [App\Http\Controllers\VehicleController::class, 'store'])->name('vehicles.store');

Route::get('/vehicles/destroy/{vehicle}', [App\Http\Controllers\VehicleController::class, 'destroy'])->name('vehicles.destroy');

Route::get('/vehicles/edit/{vehicle}', [App\Http\Controllers\VehicleController::class, 'edit'])->name('vehicles.edit');

Route::post('/vehicles/update/{vehicle}', [App\Http\Controllers\VehicleController::class, 'update'])->name('vehicles.update');

Route::get('/vehicles/cambiamod/{vehicle}', [App\Http\Controllers\VehicleController::class, 'cambiaMods'])->name('vehicles.cambiamod');

Route::get('/vehicles/{vehicle}/borrarMod/{modificacio}', [App\Http\Controllers\VehicleController::class, 'borrarMod'])->name('vehicles.borrarmod');

Route::get('/vehicles/{vehicle}/afegirMod/', [App\Http\Controllers\VehicleController::class, 'afegirMod'])->name('vehicles.afegirmod');

});


});


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
