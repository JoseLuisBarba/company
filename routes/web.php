<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CatalogueClientController;
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

$talleres = [
    [ 'titulo' => 'Danza'],
    [ 'titulo' => 'Baile'],
    [ 'titulo' => 'Oratoria'],
    [ 'titulo' => 'Liderazgo'],
];

Route::view('/', 'inicio')->name('inicio');

Route::view('programas', 'programas')->name('programas');
Route::view('asesoramiento', 'asesoramiento')->name('asesoramiento');
Route::view('contacto', 'contacto')->name('contacto');
/**
 * Talleres endpoints
 */
Route::get('talleres', 'App\Http\Controllers\TalleresController@index')->name('talleres');

/**
 * Personas endpoints
 */
Route::get('personas', 'App\Http\Controllers\PersonasController@index')->name('personas.index');
Route::get('personas/crear', 'App\Http\Controllers\PersonasController@create')->name('personas.create');
Route::post('personas', 'App\Http\Controllers\PersonasController@store')->name('personas.store');
Route::get('personas/{id}', 'App\Http\Controllers\PersonasController@show')->name('personas.show');

