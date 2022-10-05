<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivraisonController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//DEBUT DE MES API
Route::get("data",[LivraisonController::class,'enregistre']);
Route::get("data2",[LivraisonController::class,'getdata']);
Route::get("edit/{id}",[LivraisonController::class,'edit']);