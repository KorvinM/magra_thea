<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanetController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
//https://laravel.com/docs/8.x/routing#view-routes
Route::view('/','welcome');

/*routes rank in descending order of preference*/
/* we can protect individual routes liek this, but better to do all at once in PlanetController
Route::get('/planets', [PlanetController::class, 'index'] )->middleware('auth');
*/
Route::get('/planets', [PlanetController::class, 'index'] )->name('planets.index')->middleware('auth');
Route::get('/planets/create',[PlanetController::class, 'create'])->name('planets.create');
Route::post('/planets', [PlanetController::class, 'store'] )->name('planets.store');
Route::get('/planets/{id}',[PlanetController::class, 'show'])->name('planets.show')->middleware('auth');
Route::delete('/planets/{id}',[PlanetController::class, 'destroy'])->name('planets.destroy')->middleware('auth');

Auth::routes([
  'register'=> false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
