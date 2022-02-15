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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/formateursInfo', 'App\Http\Controllers\FormateursInfoController@index')->middleware(['auth'])->name('formateursInfo');
Route::post('/formateursInfo', 'App\Http\Controllers\FormateursInfoController@storeInfo')->middleware(['auth']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/formations', 'App\Http\Controllers\FormationController@index')->middleware(['auth'])->name('formation');
Route::get('/search', 'App\Http\Controllers\FormationController@search')->middleware(['auth'])->name('search');
Route::get('/formationDetails/{id}', 'App\Http\Controllers\FormationController@details')->middleware(['auth']);

Route::get('/formateurs', 'App\Http\Controllers\FormateurController@index')->middleware(['auth'])->name('formateur');

require __DIR__.'/auth.php';
