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

Route::get('/', function () {
    return view('company.home');
});



Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


/**
 * COMPANY
 */
Route::get('/company/home', function () { return view('company.home');})->name('company.home');


// clients
Route::get('/company/client', [ CatalogueClientController::class, 'index'])->name('company.client');
Route::post('/company/client/add', [CatalogueClientController::class, 'add']);
Route::get('company/client/edit/{id}', [CatalogueClientController::class, 'edit'])->name('company.client.edit');
Route::post('company/client/update/{id}', [CatalogueClientController::class, 'update'])->name('company.client.update');
Route::get('company/client/delete/{id}', [CatalogueClientController::class, 'delete'])->name('company.client.delete');


