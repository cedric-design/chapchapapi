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




Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('/livraison', function () {
    return view('livraison');
});
Route::resource('blogs', BlogController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\LogoutController::class, 'deconnecter'])->name('deconnecter');
Route::post('/sendliv', 'LivraisonController@store')->name('sendliv');



