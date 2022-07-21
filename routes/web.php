<?php

use App\Http\Controllers\SeasonsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;

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



Route::get('/', function () {
    return redirect('/series');
});

/* Route::{verbo http}('{sua rota}', {Código a ser executado}); */

Route::controller(SeriesController::class)->group(function () {
    Route::get('/series','index')->name('series.index');
    Route::get('/series/criar','create')->name('series.create');
    Route::post('/series','store')->name('series.store');
});

Route::delete('/series/destroy/{series}',[SeriesController::class,'destroy'])
    ->name('series.destroy');

Route::get('/series/{series}/edit',[SeriesController::class,'edit'])
    ->name('series.edit');

Route::put('/series/{series}',[SeriesController::class,'update'])
    ->name('series.update');

 //Route::resource('/series', SeriesController::class)
 //->except(['show']);

 Route::get('/series/{series}/seasons',[SeasonsController::class,'index'])->name('seasons.index');