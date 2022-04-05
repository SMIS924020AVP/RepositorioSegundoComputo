<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//listar las categorias
Route::get('categories','App\Http\Controllers\CategoryController@index');

//listar categorias
Route::get('category/{id}','App\Http\Controllers\CategoryController@show');

//nueva categoria
Route::post('category','App\Http\Controllers\CategoryController@store');

//Actualizar categoria
Route::put('category','App\Http\Controllers\CategoryController@store');

//eliminar categoria
Route::delete('category/{id}','App\Http\Controllers\CategoryController@destroy');